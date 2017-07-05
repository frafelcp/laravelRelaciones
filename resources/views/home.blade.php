@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br>
                    <div class="content">
                        <?php
                            $user = App\User::find(1);
                            //obteniendo los menus asociados al User
                            // foreach ($user->menu as $menu) {
                            //     echo $menu->name;
                            //     echo $menu->url;
                            //     //obteniendo datos de la tabla pivot por menu
                            //     echo $menu->pivot->task_id;
                            //     echo $menu->pivot->status;
                            // }

                            //obteniendo los tasks asociados al User
                            foreach ($user->tasks as $task) {
                            //obteniendo los datos de un task específico
                            echo "id: ".$task->id."<br>";
                            echo "Nombre: ".$task->name."<br>";
                            //obteniendo datos de la tabla pivot por task
                            echo "Menu: ".$task->pivot->menu_id."<br>";
                            echo "Estado: ".$task->pivot->status."<br>";
                            }
                        ?>
                    </div>

                    <br>

                    <div class="content">
                        <?php
                            $producto = App\Producto::find(1);
                            //obteniendo los ingresos asociados a los productos
                            foreach ($producto->ingresos as $ingreso) {
                                //obteniendo los datos de un ingreso específico
                                echo "id: ".$ingreso->id."<br>";
                                echo "comprobante: ".$ingreso->tipo_comprobante."<br>";
                                //obteniendo datos de la tabla pivot por ingresos
                                echo "Menu: ".$ingreso->pivot->ingreso_producto_id."<br>";
                                echo "Menu: ".$ingreso->pivot->cantidad."<br>";
                            }

                            $ingre = App\Ingreso::find(1);
                            foreach ($ingre->productos as $p) {
                                echo "id: ".$p->id."<br>";
                                echo "comprobante: ".$p->nombre."<br>";
                            }
                        ?>
                    </div>
                    <br>

                    <div>
                        <?php 
                            $pro = App\Producto::all();
                            echo $pro;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
