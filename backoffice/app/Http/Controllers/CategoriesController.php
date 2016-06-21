<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
    // interroge la BDD
    return view('categories/index');
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
  public function modifier()
  {
    // interroge la BDD
    return view('categories/modifier');
  }


  /**
   * Page liste de nos films
   * @return vue list
   */
  public function voir()
  {
    // interroge la BDD
    return view('categories/voir');
  }



}// fin categoriesController
 ?>
