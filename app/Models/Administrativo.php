<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrativo
 *
 * @property $id
 * @property $nombre
 * @property $ci
 * @property $sexo
 * @property $fnacimiento
 * @property $direccion
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administrativo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ci' => 'required',
		'sexo' => 'required',
		'fnacimiento' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ci','sexo','fnacimiento','direccion','telefono'];



}
