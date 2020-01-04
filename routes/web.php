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

Route::get('/image', 'HomeController@indexe')->name("Images.index");
Route::get('image/create','HomeController@create');
Route::post('image/create','HomeController@store')->name("ajouter_image");


Route::get('image/{id}/edit','HomeController@edit')->name("editer_image");
Route::get('/profile','UserController@profil')->name("profil");
Route::get('/profile','UserController@update_avatar');
Route::get('/abonnement/expired', "AbonnementController@expired");

Route::patch('image/{id}/update', 'HomeController@update')->name('update_image');

Route::get('image/{id}/download', 'HomeController@show')->name('download_image');

Route::get('/backoffice/{slog}', "produitController@show");
Route::get('/home', 'HomeController@accueil');
Route::get('/backoffice', "produitController@backoffi");
Route::get('/welcome', function () {
    return view('layout.wel');
});
Route::get('/inscription', function () {
    return view('layout.inscription');
});
Route::get('/welcome/inscription', function () {
    return view('layout.inscription');
});
Route::get('/welcome/ajouter', function () {
    return view('layout.ajouteimage');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('image/{id}', 'HomeController@destroy');