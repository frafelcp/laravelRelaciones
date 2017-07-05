<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function ingresos()
    {
    	return $this->belongsToMany('App\Ingreso','ingreso_producto', 'producto_id', 'ingreso_id')
    	->withPivot('cantidad','precio_compra', 'precio_venta')
    	->withTimestamps();
    }
}
