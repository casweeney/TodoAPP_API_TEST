<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/todos/fetch", [TodosController::class, 'index']);

Route::post("/todos/create", [TodosController::class, 'store']);
Route::post("/todos/edit/{todo}", [TodosController::class, 'update']);
Route::post("/todos/delete/{todo}", [TodosController::class, 'delete']);
Route::post("/todos/complete/{todo}", [TodosController::class, 'complete']);
