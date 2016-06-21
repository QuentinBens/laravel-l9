<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the Routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' =>'welcome', function () {
    return view('welcome');
}]);


// Route::get permet de créer une Route en get
// 1er parametre c'est l'URL
// 2eme parametre est une function anonyme
Route::get('/about-us', ['as' =>'about', function () {
  //Derriere l'URI, On retourne une vue
  return view ('about');

}]);


Route::get('/contact', ['as' =>'contact', function () {
  //Derriere l'URI, On retourne une vue
  return view ('contact');

}]);


Route::get('/faq', ['as' =>'faq', function () {
  //Derriere l'URI, On retourne une vue
  return view ('faq');

}]);


Route::get('/concept', ['as' =>'concept', function () {
  //Derriere l'URI, On retourne une vue
  return view ('concept');

}]);
Route::get('/ils-parlent-de-nous', ['as' =>'presse', function () {
  //Derriere l'URI, On retourne une vue
  return view ('ils-parlent-de-nous');

}]);


// =============================================================
// Je crée un group de Route
// Derriere le prefixe movies en URL
Route::group(['prefix' => 'movies'], function(){

      // Route en Get
      Route::get('/index', ['as' => 'movies.index', 'uses' => 'MoviesController@index']);
      Route::get('/creer', ['as' => 'movies.creer', 'uses' => 'MoviesController@creer']);
      Route::get('/modifier', ['as' => 'movies.modifier', 'uses' => 'MoviesController@modifier']);
      Route::get('/voir', ['as' => 'movies.voir', 'uses' => 'MoviesController@voir']);


  });// FIn de group

// =============================================================
// Je crée un group de Route
// Derriere le prefixe categories en URL
Route::group(['prefix' => 'categories'], function(){

      // Route en Get
      Route::get('/index', ['as' => 'categories.index', 'uses' => 'CategoriesController@index']);
      Route::get('/creer', ['as' => 'categories.creer', 'uses' => 'CategoriesController@creer']);
      Route::get('/modifier', ['as' => 'categories.modifier', 'uses' => 'CategoriesController@modifier']);
      Route::get('/voir', ['as' => 'categories.voir', 'uses' => 'CategoriesController@voir']);

  });// FIn de group


// =============================================================

Route::group(['prefix' => 'realisateurs'], function(){

      // Route en Get
      Route::get('/index', ['as' => 'realisateurs.index', 'uses' => 'RealisateursController@index']);
      Route::get('/creer', ['as' => 'realisateurs.creer', 'uses' => 'RealisateursController@creer']);
      Route::get('/modifier', ['as' => 'realisateurs.modifier', 'uses' => 'RealisateursController@modifier']);
      Route::get('/voir', ['as' => 'realisateurs.voir', 'uses' => 'RealisateursController@voir']);

  });// FIn de group

// =============================================================
Route::group(['prefix' => 'acteurs'], function(){

      // Route en Get
      Route::get('/index', ['as' => 'acteurs.index', 'uses' => 'ActeursController@index']);
      Route::get('/creer', ['as' => 'acteurs.creer', 'uses' => 'ActeursController@creer']);
      Route::get('/modifier', ['as' => 'acteurs.modifier', 'uses' => 'ActeursController@modifier']);
      Route::get('/voir', ['as' => 'acteurs.voir', 'uses' => 'ActeursController@voir']);

});// FIn de group
