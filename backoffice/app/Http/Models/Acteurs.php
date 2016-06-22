<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Movies
 */
class Acteurs extends Model
{
  /**
   * Page liste de nos films
   * @return string
   */
  protected $table = 'acteurs';


  public static function allActeurs()
  {
    $resultat = DB::table('actors')->get();

    return $resultat;
  }
}

 ?>
