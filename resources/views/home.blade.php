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
            </div>
        </div>
    </div>
</div>
@endsection
