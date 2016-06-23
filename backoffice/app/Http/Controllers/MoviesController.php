<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Movies;
use Illuminate\Http\Request;
use Validator;

/**
 * class MoviesController
 */
class MoviesController extends Controller
{
  /**
   * Page liste de nos films
   * @return vue list
   */
  public function index()
  {
    // Je recupere la liste de mes films
    // depuis le Model Movies
    $movies = Movies::allMovies();

    // J'appel ma vue en lui transférant tous mes films
    return view('movies/index', ['movies' => $movies]);
  }


  /**
   * Page liste de nos films
   * @return vue list
   */
  public function creer()
  {
    // interroge la BDD
    return view('movies/creer');
  }

  /**
   * Page liste de nos films
   * @return vue list
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(),
      [
        'titre' => 'required|unique:movies,title|min:3|max:255',

      ]
    );
    if($validator->fails()) {
      // redirection
      return redirect()->route('movies.creer')
                    ->withErrors($validator)// message d'erreur
                    ->withInput(); // remplissage de nos champs
    }


    // appel de mon modéle Movies et de sa methode store
    // je lui envoie mon objet $request
    Movies::store($request);

    // redirection vers la page index
    return redirect()
    ->route('movies.index')
    ->with('success', 'Votre film a bien été créée');
  }


  /**
   * Page liste de nos films
   * @return vue list
   */
  public function modifier()
  {

    // interroge la BDD
    return view('movies/modifier', ['movies' => $movies]);
  }


  /**
   * Page liste de nos films
   * @return vue list
   */
  public function voir()
  {

    // interroge la BDD
    return view('movies/voir', ['movies' => $movies]);
  }



}// fin MoviesController
 ?>
