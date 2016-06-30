<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Realisateurs;
use Illuminate\Http\Request;
use Validator;

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
   $validator = Validator::make($request->all(),
     [
       'firstname' => 'required|unique:movies,title|min:3|max:255',
       'image' => 'image',

     ]
   );
   if($validator->fails()) {
     // redirection
     return redirect()->route('realisateurs.creer')
                   ->withErrors($validator)// message d'erreur
                   ->withInput(); // remplissage de nos champs
   }

   $filesName = "";

   if($request->hasFile('image')) {
     //  si dans ma requete il y  a un fichier dont le name en formulaire est 'image'

     $file = $request->file('image');

     // recupere le nom original du fichier
     $filesName = $file->getClientOriginalName();

     $destinationPath = public_path().'/uploads/realisateurs'; // Indique le lieu du stockage

     // Deplace le fichier vers la destination voulu
     $file->move($destinationPath, $filesName);
   }
   Realisateurs::store($request, $filesName);

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
