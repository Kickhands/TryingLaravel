<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/Contact', function () {
    return view('Contact');
});