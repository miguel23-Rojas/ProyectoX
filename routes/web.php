<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth.login');
});
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuario', [App\Http\Controllers\HomeController::class, 'getUsuario'])->name('usuario');
Route::resource('requisicion', 'App\Http\Controllers\RequisicionController');
Route::resource('asp', 'App\Http\Controllers\DocumentosController');
Route::get('/documentos/{id}/{e}', [App\Http\Controllers\DocumentosController::class , 'aspiranteDoc'])->name('documentos');
Route::post('subirPDF', [DocumentosController::class , 'subir']);
Route::get('/aspirante/{id}', [App\Http\Controllers\HomeController::class , 'aspirante'])->name('aspiranteL');
Route::get('/verificar/{id}/{e}', [App\Http\Controllers\RequisicionController::class , 'verificar'])->name('verificar');
Route::post('/correo', [App\Http\Controllers\HomeController::class, 'correo'])->name('correo');
Route::post('/acta', [App\Http\Controllers\DocumentosController::class , 'acta']);
Route::post('/curriculum', [App\Http\Controllers\DocumentosController::class , 'curriculum']);
Route::post('/curp', [App\Http\Controllers\DocumentosController::class , 'curp']);
Route::post('/nss', [App\Http\Controllers\DocumentosController::class , 'nss']);
Route::post('/estudios', [App\Http\Controllers\DocumentosController::class , 'estudios']);
Route::post('/domicilio', [App\Http\Controllers\DocumentosController::class , 'domicilio']);
Route::post('/carta', [App\Http\Controllers\DocumentosController::class , 'carta']);
Route::post('/ine', [App\Http\Controllers\DocumentosController::class , 'ine']);
Route::post('/rfc', [App\Http\Controllers\DocumentosController::class , 'rfc']);
Route::post('/medico', [App\Http\Controllers\DocumentosController::class , 'medico']);
Auth::routes();
Route::post('/control', [App\Http\Controllers\DocumentosController::class, 'control']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/trabajos/{id}', [App\Http\Controllers\DocumentosController::class, 'trabajos'])->name('trabajos');
Route::get('/postulacion/{id}', [App\Http\Controllers\DocumentosController::class, 'postulacion'])->name('postulacion');
Route::get('/postular/{id}', [App\Http\Controllers\DocumentosController::class, 'postular'])->name('postular');
Route::get('/requisitos/{id}', [App\Http\Controllers\DocumentosController::class, 'requisitos'])->name('requisitos');
Route::get('/aspiranteDo/{id}', [App\Http\Controllers\HomeController::class, 'aspiranteDo'])->name('aspiranteDo');