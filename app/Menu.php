<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User','menu_task_user')->withPivot('task_id','status')->withTimestamps();
    }

    public function tasks()
    {
    	return $this->belongsToMany('App\Task','menu_task_user')->withPivot('user_id','status')->withTimestamps();
    }
}
