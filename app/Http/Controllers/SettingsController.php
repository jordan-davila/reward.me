<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProfile()
    {
        $data = [
            'title' => 'Settings',
            'subtitle' => 'Update your account'
        ];

        return view('home.profile', compact('data'));
    }


    public function showReset()
    {
        $data = [
            'title' => 'Settings',
            'subtitle' => 'Reset your password'
        ];

        return view('home.reset', compact('data'));
    }

    public function showStats()
    {
        $data = [
            'title' => 'Settings',
            'subtitle' => 'Points earned per Month'
        ];

        return view('home.stats', compact('data'));
    }

    public function updateProfile()
    {   
        
        $this->validate(request(), [
            'username' => 'required|string|max:100',
            'name' => 'max:255',
            'facebook' => 'max:255',
            'twiiter' => 'max:255'
        ]);

        Auth::user()->username = request('username');
        Auth::user()->name = request('name');
        Auth::user()->facebook = request('facebook');
        Auth::user()->twitter = request('twitter');
        Auth::user()->save();

        return back();
    }

    public function updateReset()
    {
        $this->validate(request(), [
            'password' => 'required|string|max:100'
        ]);

        Auth::user()->password = bcrypt(request('password'));

        return back();
    }

}
