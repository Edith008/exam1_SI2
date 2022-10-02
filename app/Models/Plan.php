<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plan
 *
 * @property $id
 * @property $nombre
 * @property $velocidad_id
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Velocidad $velocidad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plan extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'velocidad_id' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','velocidad_id','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function velocidad()
    {
        return $this->hasOne('App\Models\Velocidad', 'id', 'velocidad_id');
    }

     //uno a uno
     public function contrato_clientes()
     {
         return $this->hasOne('App\Models\contrato_clientes');
     }
    

}
