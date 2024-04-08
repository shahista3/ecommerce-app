<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('categories/create', [CategoryController::class, 'store']);
Route::get('categories/index', [CategoryController::class, 'index']);
Route::get('categories/show/{id}', [CategoryController::class, 'show']);
Route::post('categories/update/{id}', [CategoryController::class, 'update']);
Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy']);