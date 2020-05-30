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

Route::get('home1', 'controllerwebpage@index');

Route::get('About', 'controllerwebpage@navabout');

Route::get('Services', 'controllerwebpage@navservices');

Route::get('Product', 'controllerwebpage@navproducts');

Route::get('Contact/{value}', 'controllerwebpage@navcontact');
Route::get('Contact2/{username}/{password}', 'controllerwebpage@user');

Route::get('Contact', 'controllerwebpage@navcontact');




