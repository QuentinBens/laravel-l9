<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


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


  /**
   * Methode qui enregistre dans ma DB
   * @return [type] [description]
   */
  public static function store(Request $request){
    DB::table('categories')->insert(
      [
        'title' => $request->titre,
        'description' =>$request->description,
        'image' =>$request->image,
      ]
    );
  }

  public static function deleteCategories($id){
    DB::table('categories')
      ->where('id', $id)
      ->delete();
  }



  }

 ?>
