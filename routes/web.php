<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome');
//});

//dump(auth()->user());

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

\Illuminate\Support\Facades\Auth::routes();