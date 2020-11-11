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

Route::get('/', 'StoryController@index')->name('story');
Route::get('/buatstory', 'StoryController@buatstory')->name('buatstory');
Route::post('post-artikel', 'StoryController@store');
Route::get('/edit-artikel/{no}', 'StoryController@edit');
Route::get('/hapus-artikel/{no}', 'StoryController@hapus');
Route::post('/update/{no}', 'StoryController@update')->name('update');


