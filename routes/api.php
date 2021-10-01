<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Public Routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//PROTECTED Route::resource('user', UserController::class);
Route::group(['middleware' => 'auth:sanctum'], function ()
{
    Route::resource('products', ProductController::class);
    Route::get('products/search/{keyword}', [ProductController::class, 'search']);
    Route::post('logout', [AuthController::class, 'logout']);

});
