<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['name', 'apellido', 'fecha_nacimiento', 'email', 'user_name', 'password'];

    public function products(){
      return $this->belongsToMany(Producto::class); //'categories_id');
    }

}
