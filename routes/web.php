<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    // return view('layouts.master');
    return view('layouts.index');
});
Route::get('/', function () {
    return view('homepage');
});
