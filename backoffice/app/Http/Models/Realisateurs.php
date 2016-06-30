<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


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


  /**
   * Methode qui enregistre dans ma DB
   * @return [type] [description]
   */
  public static function store(Request $request, $filesName){
    DB::table('directors')->insert(
      [
        'firstname' => $request->firstname,
        'lastname' =>$request->lastname,
        'dob' =>$request->dob,
        'biography' =>$request->biography,
        'image' => asset('uploads/realisateurs/'.$filesName),
        'note' =>$request->note,
      ]
    );
  }

  public static function deleteRealisateurs($id){
    DB::table('directors')
      ->where('id', $id)
      ->delete();
  }
}

 ?>
