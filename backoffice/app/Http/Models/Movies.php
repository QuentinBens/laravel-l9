<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Movies
 */
class Movies extends Model
{
  /**
   * Page liste de nos films
   * @return string
   */
  protected $table = 'movies';


  public static function allMovies()
  {
    $resultat = DB::table('movies')->get();

    return $resultat;
  }
}

 ?>
