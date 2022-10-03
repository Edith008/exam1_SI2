<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SolicitudServicio
 *
 * @property $id
 * @property $cliente_id
 * @property $tipoServicio_id
 * @property $descripcion
 * @property $fecha
 * @property $hora
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property TipoServicio $tipoServicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SolicitudServicio extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'tipoServicio_id' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
		'hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','tipoServicio_id','descripcion','fecha','hora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoServicio()
    {
        return $this->hasOne('App\Models\TipoServicio', 'id', 'tipoServicio_id');
    }
    

}
