<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;


class Rol extends Model
{
    use HasFactory;

    static $ruls = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;


    protected $fillable = ['nombre','descripcion'];

    //Relacion de uno amuchos
    /*
    public function users()
    {
      return $this->hasMany('App\Models\users','rol_id','id');
    }
    */


}
