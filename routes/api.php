<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List photos
Route::get('photo', 'ApiController@getPhoto');

// get single photo
Route::get('photo/{id}', 'ApiController@singlePhoto');

// Create new Photo
Route::post('photo', 'ApiController@storePhoto');

// Update Photo
Route::put('photo', 'ApiController@storePhoto');

// List of Gallery
Route::get('gallery', 'ApiController@getGallery');

// get Single Gallery
Route::get('gallery/{id}', 'ApiController@singleGallery');

// Create new Gallery
Route::post('gallery', 'ApiController@storeGallery');

// Update Gallery
Route::put('gallery', 'ApiController@storeGallery');

// Store generated photo
Route::post('upload-generated-photo', 'ApiController@storeGeneratedPhoto');

// generate Photo
Route::post('generate', 'ApiController@storeGenerate');
