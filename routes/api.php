<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [\App\Http\Controllers\API\ProductController::class, 'index'])->name('products.index');
Route::post('/products', [\App\Http\Controllers\API\ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [\App\Http\Controllers\API\ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [\App\Http\Controllers\API\ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}', [\App\Http\Controllers\API\ProductController::class, 'show'])->name('products.show');
Route::delete('/products/{id}', [\App\Http\Controllers\API\ProductController::class, 'destroy'])->name('products.destroy');
