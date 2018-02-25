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

Route::get('/', 'DoctorController@index');
Route::get('/create', 'DoctorController@create' );
Route::post('/create', 'DoctorController@store' );
Route::get('/edit/{id}', 'DoctorController@edit' );
Route::post('/edit/{id}', 'DoctorController@update' );
Route::get('/view/{id}', 'DoctorController@view' );
Route::post('/remove/{id}', 'DoctorController@remove' );

Route::get('/appointment/create', 'AppointmentController@create' );
Route::post('/appointment/create', 'AppointmentController@store' );
Route::get('/appointment/edit/{id}', 'AppointmentController@edit' );
Route::post('/appointment/edit/{id}', 'AppointmentController@update' );
Route::get('/appointment/view/{id}', 'AppointmentController@view' );
Route::post('/appointment/remove/{id}', 'AppointmentController@remove' );



