<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


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

  /**
   * Methode qui enregistre dans ma DB
   * @return [type] [description]
   */
  public static function store(Request $request){
    DB::table('actors')->insert(
      [
        'firstname' => $request->firstname,
        'lastname' =>$request->lastname,
        'dob' =>$request->dob,
        'city' =>$request->city,
        'nationality' =>$request->nationality,
        'image' =>$request->image,
        'biography' =>$request->biography,
      ]
    );
  }

  public static function deleteActeurs($id){
    DB::table('actors')
      ->where('id', $id)
      ->delete();
  }

}

 ?>
