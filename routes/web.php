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

Route::get('/', function () {
    return view('welcome');
});

Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('/resizeImagePost',[
	'as'=>'resizeImagePost',
	'uses'=>'ImageController@resizeImagePost'
]);

route::get('downloadAwais',[
	'uses'=>'ImageController@show',
	'as'=>'downloadAwais'
]);


route::get('downloadPlease',[
	'uses'=>'ImageController@donwloading',
	'as'=>'downloadPlease'
]);