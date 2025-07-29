<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

    
});
Route::get('log/', function () {
    return view('login');

    
});
Route::get('book/', function () {
    return view('booking');

    
});

Route::get('careblog/', function () {
    return view('careblog');

    
});

Route::get('caregiver/', function () {
    return view('caregiver');

    
});

Route::get('regist/', function () {
    return view('registation');

    
});


Route::get('service/', function () {
    return view('service');

    
});

Route::get('bed/', function () {
    return view('cartbed');

    
});
Route::get('chair/', function () {
    return view('cartchair');

    
});

Route::get('walk/', function () {
    return view('cartwalker');

    
});

Route::get('sell/', function () {
    return view('sells');

    
});
Route::get('password/', function () {
    return view('frogetpassword');

    
});