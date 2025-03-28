<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',[HomeController::class, 'index'])->name('homepage');
Route::get('/profile', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/settings', [InformationController::class, 'index'])->name('settings.index');
Route::get('/profile/{id}', [ProfileController::class, 'show'])->where('id', '[0-9]+')->name('profile.show');
Route::get('/posts/create', [ProfileController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [ProfileController::class, 'store'])->name('posts.store');
