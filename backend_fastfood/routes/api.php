<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TableController;
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

/* categories route */

Route::get('categories', [CategoryController::class, 'index']);// return all category

/* products route */

Route::get('products', [ProductController::class, 'index']);// return all product
Route::get('product/{id}', [ProductController::class, 'show']);//return one product according to id
Route::get('productCategory/{id}', [ProductController::class, 'showProductCategory']);//return product according to id 


/* tables route */

Route::get('tables', [TableController::class, 'index']);// return all tables
Route::get('table/{id}', [TableController::class, 'show']);// return all tables
Route::put('table/update/{id}', [TableController::class, 'update']);// updated the table's statu