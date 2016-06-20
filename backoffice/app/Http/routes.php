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

Route::get('/', function () {
    return view('welcome');
});


// Route::get permet de créer une route en get
// 1er parametre c'est l'URL
// 2eme parametre est une function anonyme
route::get('/about-us', function () {
  //Derriere l'URI, On retourne une vue
  return view ('about');

});


route::get('/contact', function () {
  //Derriere l'URI, On retourne une vue
  return view ('contact');

});


route::get('/faq', function () {
  //Derriere l'URI, On retourne une vue
  return view ('faq');

});
