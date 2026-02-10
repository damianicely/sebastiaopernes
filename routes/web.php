<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage', [
        'photos' => DB::table('photos')
        ->orderBy('reference', 'asc')
        ->get()
    ]);
})->name('homepage');
Route::get('/profile', function () { return view('profile'); })->name('profile');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::post('/contact','ContactController@store')->name('contact.store');
Route::get('/prints', function () { return view('prints'); })->name('prints');
Route::get('/set-language/{locale}', 'LocalizationController@index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'photos' => \App\Photo::orderBy('reference', 'asc')->get()
        ]);
    })->name('dashboard');

    Route::get('/photos', 'PhotoController@index')->name('photos.index');
    Route::post('/photos', 'PhotoController@store')->name('photos.store');
    Route::get('/photos/create', 'PhotoController@create')->name('photos.create');
    Route::get('/photos/{photo}/edit', 'PhotoController@edit')->name('photos.edit');
    Route::put('/photos/{photo}', 'PhotoController@update')->name('photos.update');
    Route::delete('/photos/{photo}', 'PhotoController@destroy')->name('photos.destroy');
});

Route::get('/photos/{photo}', 'PhotoController@show')->name('photos.show');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
