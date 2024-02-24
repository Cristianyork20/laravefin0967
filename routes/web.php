<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\TallerController;
use Illuminate\Routing\Route as RoutingRoute;
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
    return "principal";
});

Route::get('/formulario',[TallerController::class,'createUno']);
Route::post('/formulario',[TallerController::class,'storeUno'])->name('formulario.store');

Route::get('/formulario2',[TallerController::class,'createDos']);
Route::post('/formulario2',[TallerController::class,'storeDos'])->name('formularioAmigo.store');

Route::get('/formulario3',[TallerController::class,'createTres']);
Route::post('/formulario3',[TallerController::class,'storeTres'])->name('formularioPromedio.store');

Route::get('/formulario4',[TallerController::class,'createCuatro']);
Route::post('/formulario4',[TallerController::class,'storeCuatro'])->name('formularioCuadratica.store');






// Route::get('/curso',[CursoController::class,'create']);
// Route::post('/curso',[CursoController::class,'store'])->name('curso.store');




// Route::get('/curso',[CursoController::class,'hola'])->name('curso.show');
