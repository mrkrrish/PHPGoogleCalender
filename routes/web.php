<?php


use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\GoogleCalenderControl;


Route::get('/', function () {
    return view('welcome');
});

//Route::post('oauth', 'App\Http\Controllers\GoogleCalenderControl@oauth');
Route::resource('gcalendar','App\Http\Controllers\GoogleCalenderControl');
Route::get('oauth', ['as' => 'oauthCallback', 'uses' => 'App\Http\Controllers\GoogleCalenderControl@oauth']);