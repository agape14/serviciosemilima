<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {    return view('welcome');});
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/asesoria', function () {
    return view('pages.asesoria');
})->name('asesoria');

Route::get('/saneamiento', function () {
    return view('pages.saneamiento');
})->name('saneamiento');

Route::get('/subasta', function () {
    return view('pages.subasta');
})->name('subasta');

Route::get('/administracion', function () {
    return view('pages.administracion');
})->name('administracion');
