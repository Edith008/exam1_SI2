<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoServicio
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoServicio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    //
    public function solicitud_servicios()
    {
        return $this->hasOne('App\Models\solicitud_servicios');
    }



}
