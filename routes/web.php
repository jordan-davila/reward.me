<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@showLoginForm')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings/profile', 'SettingsController@showProfile');
Route::post('/settings/profile', 'SettingsController@updateProfile')->name('settings.profile');
Route::get('/settings/reset', 'SettingsController@showReset');
Route::post('/settings/reset', 'SettingsController@updateReset')->name('settings.reset');
Route::get('/stats', 'SettingsController@showStats')->name('stats');
Route::get('/leaderboard', 'HomeController@showLeaderboard')->name('leaderboard');
Route::post('/task/track', 'TaskTrackerController@store')->name('task.track');