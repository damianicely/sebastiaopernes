<?php

namespace App\Http\Controllers;

use App\Photo;
use Storage;
use Illuminate\Http\Request;

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
            $path = Storage::putFile('photos',$photoPath,'public');
        }

        $reference = request( 'reference' );
        $dimensions = $this->optimizeImages( $path, $reference );
        Photo::create([
            'reference' => request('reference'),
            'collection' => request('collection'),
            'description' => request('description'),
            'file_name' => $photoName,
            'file_path' => $path,
            'width' => $dimensions[0][0],
            'height' =>  $dimensions[0][1],
            'x-width' =>  $dimensions[1][0],
            'x-height' =>  $dimensions[1][1],
            'l-width' =>  $dimensions[2][0],
            'l-height' =>  $dimensions[2][1],
            'm-width' =>  $dimensions[3][0],
            'm-height' =>  $dimensions[3][1],
            's-width' =>  $dimensions[4][0],
            's-height' =>  $dimensions[4][1],
            't-width' =>  $dimensions[5][0],
            't-height' =>  $dimensions[5][1],

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
        foreach ($imageSize as $key => $value) {
            exec("mogrify -write photos/$key-$reference.jpg -filter Triangle -define filter:support=2 -thumbnail $value -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 -define jpeg:fancy-upsampling=off -interlace none -colorspace sRGB $path");
        }
        list($width, $height) = getImageSize( $path);
        list($xwidth, $xheight) = getImageSize("photos/x-$reference.jpg");
        list($lwidth, $lheight) = getImageSize("photos/l-$reference.jpg");
        list($mwidth, $mheight) = getImageSize("photos/m-$reference.jpg");
        list($swidth, $sheight) = getImageSize("photos/s-$reference.jpg");
        list($twidth, $theight) = getImageSize("photos/t-$reference.jpg");

        return [ [$width, $height], [$xwidth, $xheight], [$lwidth, $lheight], [$mwidth, $mheight], [$swidth, $sheight], [$twidth, $theight], ];
    }
}
