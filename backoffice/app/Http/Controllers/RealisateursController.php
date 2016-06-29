<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Realisateurs;
use Illuminate\Http\Request;

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
   return view('realisateurs/creer');
 }


 /**
  * Page liste de nos films
  * @return vue list
  */
 public function store(Request $request)
 {

   Realisateurs::store($request);

   // redirection vers la page index
   return redirect()->route('realisateurs.index');

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

 public function delete($id)
 {
   Realisateurs::deleteRealisateurs($id);

   return redirect()
     ->route('realisateurs.index')
     ->with('success', 'Votre film a bien été supprimé');

 }



}// fin RealisateursController
?>
