<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Movies
 */
class Realisateurs extends Model
{
  /**
   * Page liste de nos films
   * @return string
   */
  protected $table = 'realisateurs';


  public static function allRealisateurs()
  {
    $resultat = DB::table('directors')->get();

    return $resultat;
  }
}

 ?>
