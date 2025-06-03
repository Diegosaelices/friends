<?php

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

use App\Http\Controllers\ConductorController;

Route::get('/conductores', [ConductorController::class, 'index']);

Route::post('/regalar', [ConductorController::class, 'regalar'])->name('regalar');

Route::post('/maximizar/{id}', [ConductorController::class, 'maximizar'])->name('maximizar');

Route::delete('/eliminar/{id}', [ConductorController::class, 'eliminar'])->name('eliminar');


Route::get('/', function () {
    return view('welcome');
});
