<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NovedadesCamarasController;
use App\Http\Controllers\LiquidadorController;
use App\Http\Controllers\CamarasTaskController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/store', [NovedadesCamarasController::class, 'store'])->name('prueba.store');
Route::get('/index', [NovedadesCamarasController::class, 'index'])->name('1_camaras.index');
Route::get('/Create', [NovedadesCamarasController::class, 'create'])->name('2_crear_novedad.create');
Route::get('/edit', [NovedadesCamarasController::class, 'edit'])->name('3_editar_novedad.edit');
Route::get('/edit/{id}', [NovedadesCamarasController::class, 'edit'])->name('editar.edit');
Route::put('/update/{id}', [NovedadesCamarasController::class, 'update'])->name('prueba.update');
Route::get('/show/{id}', [NovedadesCamarasController::class, 'show'])->name('4_eliminar_novedad.show');
Route::get('/detalle/{id}', [NovedadesCamarasController::class, 'detalle'])->name('detalle.detalle');
Route::get('/delete/{id}', [NovedadesCamarasController::class, 'delete'])->name('eliminar.delete');
Route::get('Liquidador/index', [LiquidadorController::class, 'index'])->name('Liquidador');
Route::get('CamarasTask/index', [CamarasTaskController::class, 'index'])->name('CamarasTask.index');
Route::get('CamarasTask/store/{id}', [CamarasTaskController::class, 'store'])->name('CamarasTask.store');
Route::get('CamarasTask/update/{id}', [CamarasTaskController::class, 'update'])->name('task.update');
Route::post('CamarasTask/store/', [CamarasTaskController::class, 'store'])->name('createtaskdone.store');
Route::post('CamarasTask/create/', [CamarasTaskController::class, 'create'])->name('createnewtask.create');










Route::get('/Camaras/2_crear_novedad', function () {
    return view('/Camaras/2_crear_novedad');
})->middleware(['auth', 'verified'])->name('/Camaras/2_crear_novedad');

Route::get('/sistemas', function () {
    return view('sistemas');
})->middleware(['auth', 'verified'])->name('sistemas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
require __DIR__.'/auth.php';
