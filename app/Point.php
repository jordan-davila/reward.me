<?php

namespace App;

class Point extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
