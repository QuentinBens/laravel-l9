<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Movies;

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
    return view('movies/creer', ['movies' => $movies]);
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
