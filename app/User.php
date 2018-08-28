<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function points()
    {
        return $this->hasOne(Point::class);
    }

    public function task_trackers()
    {
        return $this->hasMany(TaskTracker::class);
    }

    public function usernameInitials()
    {
        return ucwords(substr($this->username, 0, 1));
    }

    public function addTaskTracker(TaskTracker $task_tracker)
    {
        $this->task_trackers()->save($task_tracker);
    }
}
