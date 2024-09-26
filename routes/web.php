<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Home');
// });

Route::inertia('/', 'Home', ['name' => 'Wanderson']);

Route::get('/home', [HomeController::class,'index'])->name('home');
