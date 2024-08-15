<?php

use App\Http\Controllers\IgnisController;
use App\Http\Controllers\ScientiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');