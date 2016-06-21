<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
    // interroge la BDD
    return view('acteurs/index');
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
   * Page liste de nos films
   * @return vue list
   */
  public function modifier()
  {
    // interroge la BDD
    return view('acteurs/modifier');
  }


  /**
   * Page liste de nos films
   * @return vue list
   */
  public function voir()
  {
    // interroge la BDD
    return view('acteurs/voir');
  }



}// fin acteursController
 ?>
