<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Task;
use App\User;
use App\Point;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Daily Tasks : ' . Carbon::now()->toFormattedDateString(),
            'tasks' => Task::all()->sortBy('category_id')
        ];

        return view('home.tasks', compact('data'));
    }

    public function showLeaderboard()
    {
        
        $topThree = Point::orderByDesc('total')->limit(3)->get();
        $topTen = Point::orderByDesc('total')->limit(10)->skip(3)->get();

        $data = [
            'title' => 'Leaderboard',
            'first' => $topThree[0],
            'second' => $topThree[1],
            'third' => $topThree[2],
            'topTen' => $topTen
        ];

        return view('home.leaderboard', compact('data'));
    }
}
