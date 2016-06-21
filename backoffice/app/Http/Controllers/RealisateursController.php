<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * class RealisateursController
 */
class RealisateursController extends Controller
{
  /**
   * Page liste de nos films
   * @return vue list
   */
  public function index()
  {
    // interroge la BDD
    return view('realisateurs/index');
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
  public function modifier()
  {
    // interroge la BDD
    return view('realisateurs/modifier');
  }


  /**
   * Page liste de nos films
   * @return vue list
   */
  public function voir()
  {
    // interroge la BDD
    return view('realisateurs/voir');
  }



}// fin realisateursController
 ?>
