<?php

namespace App;
use Carbon\Carbon;
use Auth;

class Task extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function task_trackers()
    {
        return $this->hasMany(TaskTracker::class);
    }

    public function isCompletedToday()
    {
        return $this->task_trackers()
                    ->where('created_at','>=',Carbon::today())
                    ->where('user_id', '=', Auth::user()->id);

    }
}
