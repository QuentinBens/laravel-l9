<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Movies
 */
class Categories extends Model
{
  /**
   * Page liste de nos films
   * @return string
   */
  protected $table = 'categories';


  public static function allCategories()
  {
    $resultat = DB::table('categories')->get();

    return $resultat;
  }
}

 ?>
