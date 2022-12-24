<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;


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

Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/welcome', [AuthController::class, 'submit']);

Route::get('/table', function () {
    return view('halaman.table');
});

Route::get('/data-table', function () {
    return view('halaman.data-table');
});

//CRUD cast

//Create
Route::get('/cast/create', [CastController::class, 'create']);

//Add data to Database
Route::post('/cast', [CastController::class, 'store']);

//Read
Route::get('/cast', [CastController::class, 'index']);

//Read id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//Update
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);

//Update id
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//Delete by id
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);