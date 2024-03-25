<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PendudukController;

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

Route::get('/', [PendudukController::class, "index"]);
Route::get('/admin', [PendudukController::class, "admin"]);
Route::get('/tambah', [PendudukController::class, "addPenduduk"]);
Route::post('/prosestambah', [PendudukController::class, "store"]);
Route::get('/prosesdelete/{id}', [PendudukController::class, "destroy"]);
Route::get('/edit/{id}', [PendudukController::class, "editPenduduk"]);
Route::post('/prosesupdate/{id}', [PendudukController::class, "update"]);
