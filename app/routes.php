<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::post('/upload', 'FileController@upload');
Route::get('/files/send/{fileId}', 'FileController@send');
Route::get('/files/dl/{fileId}', 'FileController@download');
Route::get('/files/process/{fileId}', 'FileController@process');
Route::post('/files/getTotalBurned', 'FileController@getTotalBurned');
Route::any('/files/deleteoldfiles', 'FileController@deleteOldFiles');

Route::any('files', function()
{
	return Redirect::to('');
});