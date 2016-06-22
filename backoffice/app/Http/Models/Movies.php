<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;

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


  /**
   * Methode qui enregistre dans ma DB
   * @return [type] [description]
   */
  public static function store(Request $request){
    DB::table('movies')->insert(
      [
        'title' => $request->titre,
        'synopsis' =>$request->synopsis,
        'description' =>$request->description,
        'image' =>$request->image,
        'trailer' =>$request->trailer,
        'date_release' =>$request->daterelease,
        'duree' =>$request->duree,
        'budget' =>$request->budget,
        'bo' =>$request->bo,
        'languages' =>$request->languages,
      ]
    );
  }
}

 ?>
