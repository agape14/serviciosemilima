<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

//Route::get('/', function () {    return view('welcome');});
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');
