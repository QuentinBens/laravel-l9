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
  public static function store(Request $request, $filesName){
    DB::table('movies')->insert(
      [
        'title' => $request->titre,
        'synopsis' =>$request->synopsis,
        'description' =>$request->description,
        'trailer' =>$request->trailer,
        'date_release' =>$request->daterelease,
        'duree' =>$request->duree,
        'budget' =>$request->budget,
        'bo' =>$request->bo,
        'languages' =>$request->languages,
        'image' => asset('uploads/movies/'.$filesName),
      ]
    );
  }

  public static function deleteMovies($id){
    DB::table('movies')
      ->where('id', $id)
      ->delete();
  }

  public static function updateVisible($id, $visible){

    return DB::table('movies')
      ->where('id', $id)
      ->update(['visible' => $visible]);

  }

  public static function updateCover($id, $cover){

    return DB::table('movies')
      ->where('id', $id)
      ->update(['cover' => $cover]);

  }

  public static function search($word = ""){

    $req = DB::table('movies')
            ->where('title','like', '%'.$word.'%')
            ->get();

    return $req;
  }




}

 ?>
