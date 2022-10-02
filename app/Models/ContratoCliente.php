<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContratoCliente
 *
 * @property $id
 * @property $administrativo_id
 * @property $cliente_id
 * @property $ci
 * @property $telefono
 * @property $ciudad_id
 * @property $plan_id
 * @property $router_id
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Administrativo $administrativo
 * @property Ciudad $ciudad
 * @property Cliente $cliente
 * @property Plan $plan
 * @property Router $router
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ContratoCliente extends Model
{
    
    static $rules = [
		'administrativo_id' => 'required',
		'cliente_id' => 'required',
		'ci' => 'required',
		'ciudad_id' => 'required',
		'plan_id' => 'required',
		'router_id' => 'required',
		'direccion' => 'required',
        'latitud' => 'required',
        'longitud' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['administrativo_id','cliente_id','ci','telefono','ciudad_id','plan_id','router_id','direccion','latitud','longitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function administrativo()
    {
        return $this->hasOne('App\Models\Administrativo', 'id', 'administrativo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'id', 'ciudad_id');
    }
    
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
    public function plan()
    {
        return $this->hasOne('App\Models\Plan', 'id', 'plan_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function router()
    {
        return $this->hasOne('App\Models\Router', 'id', 'router_id');
    }
    

}
