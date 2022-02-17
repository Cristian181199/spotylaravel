<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TemaController;
use App\Models\Album;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Principal
Route::get('/', function () {
    return view('welcome');
});

// Dashboard principal de usuarios autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// rutas para el CRUD de albumes (index, create, store, show, edit, update y destroy)
Route::resource('albumes', AlbumController::class)
    ->parameters(['albumes' => 'album']);

Route::resource('temas', TemaController::class)
    ->parameters(['temas' => 'tema']);

require __DIR__.'/auth.php';
