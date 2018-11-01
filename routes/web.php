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



/*Route::get('/', function() {
   return view('welcome');
 });
 */

Route::get('/', 'IndexController@index');

Route::resource('index','IndexController'); //tambahkan baris ini
Route::resource('seksyen','SeksyenController'); //tambahkan baris ini
Route::resource('unit','UnitController'); //tambahkan baris ini
Route::resource('staf','StafController'); //tambahkan baris ini
