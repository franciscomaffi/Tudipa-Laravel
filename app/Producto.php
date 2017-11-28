<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

  protected $fillable = ['name', 'precio', 'marca', 'fecha_publicacion'];

  public function category(){
    return $this->belongsTo(Categoria::class); //'categories_id');
  }
  public function users(){
    return $this->belongsToMany(Usuario::class); //'categories_id');
  }


}
