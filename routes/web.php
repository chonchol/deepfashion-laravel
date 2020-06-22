<?php

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


Route::domain(env('BASE_URL'))->group(function () {
    Route::get('/', 'HomeController@index');
});

Route::post('/feedback/save', 'FeedbackController@storeFeedback')->name('saveFeedback');

Auth::routes();

//Route::get('/home', 'Home
//Controller@index')->name('home');


Route::group(['prefix' => 'photo'], function () {
    Route::get('all', 'PhotoController@index')->name('allPhoto');
    Route::get('add', 'PhotoController@create')->name('addPhoto');
    Route::get('generating', 'PhotoController@generating')->name('generatingPhoto');
    Route::get('setting/{id}', 'PhotoController@setting')->name('settingPhoto');
//    Route::get('edit/{id}', 'PhotoController@edit')->name('editPhoto');
    Route::post('save', 'PhotoController@store')->name('savePhoto');
    Route::post('setting/save/{id}', 'PhotoController@saveSetting')->name('setting');
//    Route::get('update', 'PhotoController@update')->name('updatePhoto');
    Route::delete('delete/{id}', 'PhotoController@destroy')->name('deletePhoto');
});


//Route::domain('{app}.'.env('BASE_URL'))->group(function () {
//
//    Route::get('user/{id}', function ($app, $id) {
//        dd($app, $id);
//    });
//});
