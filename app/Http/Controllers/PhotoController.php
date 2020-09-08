<?php

namespace App\Http\Controllers;

use App\Photo;
use Storage;
use Illuminate\Http\Request;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Photo::class, 'photo');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'collection' => 'required',
            'photofile' => 'required|mimes:jpeg',
            'description' => 'required',
        ]);

        if($request->file())
        {
            $photoPath = $request->file('photofile');
            $photoName = $photoPath->getClientOriginalName(); // time().'_'.$request->file->getClientOriginalName()
            // Store the file and save the returned path as $path
            $ref = request( 'reference' );
            $path = Storage::putFileAs('photos/originals',$photoPath,"$ref");
        }
//        $dimensions = $this->optimizeImages( $path, $reference );
        Photo::create([
            'reference' => request('reference'),
            'collection' => request('collection'),
            'description' => request('description'),
            'file_name' => $photoName,
            'file_path' => $path,
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Storage::delete($photo->file_path);
        $photoRef = $photo->reference;

        $photo->delete();

        return redirect()
            ->route('dashboard')
            ->with('success',"$photoRef deleted successfully");
    }

    public function optimizeImages( $path, $reference )
    {
        $imageSize = [ 'x' => 1800, 'l' => 1200, 'm' => 768, 's' => 576, 't' => 250 ];

 //       $optimizerChain = OptimizerChainFactory::create();

//        $optimizerChain->optimize($path);

        $base = imagecreatefromjpeg($path);

        foreach ($imageSize as $key => $value) {
            $resizedImage = imagescale($base, $value);
            imagejpeg($resizedImage, 'photos'.'/'.$key.'-'.$reference.'.jpg');
//            $optimizerChain->optimize('photos'.'/'.$key.'-'.$reference.'.jpg');
        }
        list($height) = getImageSize( $path);
        list($xheight) = getImageSize("photos/x-$reference.jpg");
        list($lheight) = getImageSize("photos/l-$reference.jpg");
        list($mheight) = getImageSize("photos/m-$reference.jpg");
        list($sheight) = getImageSize("photos/s-$reference.jpg");
        list($theight) = getImageSize("photos/t-$reference.jpg");

        return [ $height, $xheight, $lheight, $mheight, $sheight, $theight, ];
    }
}
