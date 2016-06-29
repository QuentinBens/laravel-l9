<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Categories;
use Illuminate\Http\Request;


/**
 * class CategoriesController
 */
class CategoriesController extends Controller
{
  /**
   * Page liste de nos films
   * @return vue list
   */
   public function index()
   {
     // Je recupere la liste de mes films
     // depuis le Model Movies
     $categories = Categories::allCategories();

     // J'appel ma vue en lui transférant tous mes films
     return view('categories/index', ['categories' => $categories]);
   }


   /**
    * Page liste de nos films
    * @return vue list
    */
   public function creer()
   {
     // interroge la BDD
     return view('categories/creer');
   }

   /**
    * Page liste de nos films
    * @return vue list
    */
   public function store(Request $request)
   {

     Categories::store($request);

     // redirection vers la page index
     return redirect()->route('categories.index');

   }

   /**
    * Page liste de nos films
    * @return vue list
    */
   public function modifier()
   {
     // interroge la BDD
     return view('categories/modifier', ['categories' => $categories]);
   }


   /**
    * Page liste de nos films
    * @return vue list
    */
   public function voir()
   {
     // interroge la BDD
     return view('categories/voir', ['categories' => $categories]);
   }

   public function delete($id)
   {
     Categories::deleteCategories($id);

     return redirect()
       ->route('categories.index')
       ->with('success', 'Votre film a bien été supprimé');

   }


 }// fin CategoriesController
  ?>
