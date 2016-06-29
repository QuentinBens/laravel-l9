<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Acteurs;
use Illuminate\Http\Request;
use \Validator;

/**
 * class ActeursController
 */
class ActeursController extends Controller
{
  /**
   * Page liste de nos films
   * @return vue list
   */
 public function index()
 {
   // Je recupere la liste de mes films
   // depuis le Model Movies
   $acteurs = Acteurs::allActeurs();

   // J'appel ma vue en lui transférant tous mes films
   return view('acteurs/index', ['acteurs' => $acteurs]);
 }


 /**
  * Page liste de nos films
  * @return vue list
  */
 public function creer()
 {
   // interroge la BDD
   return view('acteurs/creer');
 }

 /**
  * Ajouter un acteur
  * @return vue list
  */
 public function store(Request $request)
 {

   // appel de mon modéle Movies et de sa methode store
   // je lui envoie mon objet $request
   Acteurs::store($request);

   // redirection vers la page index
   return redirect()->route('acteurs.index');
 }



 /**
  * Page liste de nos films
  * @return vue list
  */
 public function modifier()
 {
   // interroge la BDD
   return view('acteurs/modifier', ['acteurs' => $acteurs]);
 }


 /**
  * Page liste de nos films
  * @return vue list
  */
 public function voir()
 {
   // interroge la BDD
   return view('acteurs/voir', ['acteurs' => $acteurs]);
 }

 public function delete($id)
 {
   Acteurs::deleteActeurs($id);

   return redirect()
     ->route('acteurs.index')
     ->with('success', 'Votre film a bien été supprimé');

 }

}// fin ActeursController
?>
