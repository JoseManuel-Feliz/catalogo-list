<?php

use App\Http\Controllers\Admin\CatalogoController as AdminCatalogoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->prefix("/admin")->name("admin.")->group(function () {
    Route::get('/catalogo', [AdminCatalogoController::class, 'index'])->name('catalogo.index');
    Route::post('/catalogo', [AdminCatalogoController::class, 'store'])->name('catalogo.store');
    Route::get('/catalogo/create', [AdminCatalogoController::class, 'create'])->name('catalogo.create');
    Route::get('/catalogo/{id}', [AdminCatalogoController::class, 'show'])->name('catalogo.show');
    Route::put('/catalogo/{id}', [AdminCatalogoController::class, "update"])->name('catalogo.update');
    Route::delete('/catalogo/{id}', [AdminCatalogoController::class, "destroy"])->name('catalogo.delete');
    Route::get('/catalogo/{id}/edit', [AdminCatalogoController::class, "edit"])->name('catalogo.edit');
});
