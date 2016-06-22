<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Realisateurs;
/**
 * class ActeursController
 */
class RealisateursController extends Controller
{
  /**
   * Page liste de nos films
   * @return vue list
   */
 public function index()
 {
   // Je recupere la liste de mes films
   // depuis le Model Realisateurs
   $realisateurs = Realisateurs::allRealisateurs();

   // J'appel ma vue en lui transférant tous mes films
   return view('realisateurs/index', ['realisateurs' => $realisateurs]);
 }


 /**
  * Page liste de nos films
  * @return vue list
  */
 public function creer()
 {
   // interroge la BDD
   return view('realisateurs/creer', ['realisateurs' => $realisateurs]);
 }


 /**
  * Page liste de nos films
  * @return vue list
  */
 public function modifier()
 {
   // interroge la BDD
   return view('realisateurs/modifier', ['realisateurs' => $realisateurs]);
 }


 /**
  * Page liste de nos films
  * @return vue list
  */
 public function voir()
 {
   // interroge la BDD
   return view('realisateurs/voir', ['realisateurs' => $realisateurs]);
 }



}// fin RealisateursController
?>
