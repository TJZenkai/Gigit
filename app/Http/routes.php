<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('test', 'WelcomeController@test');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

//get all artists on page load
Route::get('/', 'ArtistController@getArtists');

//add a new artist to the database
Route::post('artist', 'ArtistController@postArtist');

//update the artist already in the database
Route::put('artist', 'ArtistController@updateArtist');

//delete the artist from the database
Route::delete('artist/{id}', 'ArtistController@delArtist');
