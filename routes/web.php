<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/hello/{nom}', function (Request $request) {
    $x = null;
    return view('welcome', compact('x'));
});

