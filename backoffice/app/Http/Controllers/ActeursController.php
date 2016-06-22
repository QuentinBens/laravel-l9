<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Acteurs;
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
   return view('acteurs/creer', ['acteurs' => $acteurs]);
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



}// fin ActeursController
?>
