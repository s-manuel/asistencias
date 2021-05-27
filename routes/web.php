<?php

use App\Http\Controllers\Personas;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// TIPOS DE RUTAS
// GET  = olicitar informcion
// POST = para crear informacion
// PUT  = envivar o actualizar
// DELETe = eliminar
Route::get('/',  function (){
    return "Hola desde  rutas";
});

// route:tipo ('nombre ruta', [controlador::class, metodo])

// Deevuelve el listado de personas
Route::get('/team', [Personas::class, 'index'])->name('personas.index');

Route::get('/team/create', [Personas::class, 'create'])->name('personas.create');
Route::post('/team', [Personas::class, 'store'])->name('personas.store');
Route::get('/team/{persona}/edit', [Personas::class, 'edit'])->name('personas.edit');
Route::put('/team/{persona}', [Personas::class, 'update'])->name('personas.update');
Route::get('/team/show/{persona}', [Personas::class, 'show'])->name('personas.show');
// Route::delete('/team/{persona}', [Personas::class, 'delete'])->name('personas.delete');
Route::get('/team/{persona}/desactivar', [Personas::class, 'desactivar'])->name('personas.desactivar');
