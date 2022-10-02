<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;


class Cliente extends Model
{
    use HasFactory;

    static $clientes = [
		'nombre' => 'required',
		'ci' => 'required',
        'sexo' => 'required',
        'fnacimiento' => 'required',
        'direccion' => 'required',
        'email' => 'required',
        'telefono' => 'required',
    ];

    protected $perPage = 20;


    protected $fillable = ['nombre','ci','sexo','fnacimiento','direccion','email','telefono'];

     //uno a uno
     public function contrato_clientes()
     {
         return $this->hasOne('App\Models\contrato_clientes');
     }
     
}
