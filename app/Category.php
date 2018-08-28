<?php

namespace App;

class Category extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
