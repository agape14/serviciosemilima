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




//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/admin', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

//Route::get('{any}', [HomeController::class, 'index'])->name('index');

Route::prefix('gestor')->group(function () {
    Route::get('/menu', [MenuController::class, 'index'])->name('gestor.menus');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('gestor.menus.create');
    Route::post('/menu/store', [MenuController::class, 'store'])->name('gestor.menus.store');
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('gestor.menus.edit');
    Route::put('/menu/{menu}/update', [MenuController::class, 'update'])->name('gestor.menus.update');
    Route::delete('/menu/{menu}/destroy', [MenuController::class, 'destroy'])->name('gestor.menus.destroy');
});
