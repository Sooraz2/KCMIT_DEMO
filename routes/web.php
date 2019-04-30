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







Route::get('/Test/{id}', function($id){

    echo $id;

});


Route::get('/','HomeController@index');
Route::get('/About','AboutUsController@index');
Route::get('/Contact','ContactUsController@index');
Route::get('/Contact','ContactUsController@index');
Route::get('/Teacher','TeacherController@index');
Route::get('/Course/{slug}','CoursesController@Course');


