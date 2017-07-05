<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    public function productos()
    {
    	return $this->belongsToMany('App\Producto','ingreso_producto', 'ingreso_id', 'producto_id')
    	->withPivot('cantidad','precio_compra', 'precio_venta')
    	->withTimestamps();
    }
}
