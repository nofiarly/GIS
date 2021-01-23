<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/ProjectGIS')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard']);
    Route::get('/table', [AdminController::class, 'table']);

    Route::get('/add_data', [AdminController::class, 'add_data']);
    Route::post('/add_data', [DataController::class, 'create']);

    Route::get('/delete/{id}', [DataController::class, 'delete']);

    Route::get('/update/{id}', [AdminController::class, 'update_data']);
    Route::post('/update/{id}', [DataController::class, 'update']);
});
