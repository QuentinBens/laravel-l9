<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Movies;
use Illuminate\Http\Request;
use Validator;
use Session;

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


  public function delete($id)
  {
    Movies::deleteMovies($id);

    return redirect()
      ->route('movies.index')
      ->with('success', 'Votre film a bien été supprimé');

  }

  public function modifier() {

    return view('movies/modifier');
  }

  public function edit($id) {

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

  /**
   * [like description]
   * @param  [type] $id     [description]
   * @param  [type] $action [description]
   * @return [type]         [description]
   */
  public function like($id, $action) {

    $movies = Movies::find($id);
    // Le tableaux des Likes sera vide par défaut
    $likes = session("likes", []);
    // Si l'action est likes
    if($action == 'like') {
      //J'ajoute mon movies dabs le table des Likes
      $likes[$id] = $movies->id;
      $message = "Le film {$movies->title} a bien était liké";
    } else {
      //Je supprime le like dans le tableaux des likes
      //unset() supprimer un element dans un table PHP
      unset($likes[$id]);
      $message = "Le film {$movies->title} a bien était disliké";
    }
    // J'enregistre en session mon nouveau tableaux des like
    Session::put('likes', $likes);

    // une redirection avec message flash
    return redirect()
      ->route('movies.index')
      ->with('success', $message);
  }


  /**
   * [visibility description]
   * @param  [type] $id     [description]
   * @param  [type] $action [description]
   * @return [type]         [description]
   */
  public function visibility($id, $visibility) {

    Movies::updateVisible($id, $visibility);

    // une redirection avec message flash
    return redirect()
      ->route('movies.index')
      ->with('success', "Les film a était modifier par sa visibilité");

  }


  public function cover($id, $cover) {

    Movies::updatecover($id, $cover);

    // une redirection avec message flash
    return redirect()
      ->route('movies.index')
      ->with('success', "Les film a était modifier par sa couverture");

  }

  /**
   * [search description]
   * @return [type] [description]
   */
  public function search(Request $request){

    // dump($request->search);
    // exit();
    // Je transmet le mot clef recherche
    $moviesSearch = Movies::search($request->search);

    return view('movies/search', ['movies' => $moviesSearch]);

  }







}// fin MoviesController
 ?>
