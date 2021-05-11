<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MycolorController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Mycolors
Route::get('mycolors', [MycolorController::class, 'index']);

// List single Mycolor
Route::get('mycolor/{id}', [MycolorController::class, 'show']);

// Create new Mycolor
Route::post('mycolor', [MycolorController::class, 'store']);

// Update Mycolor
Route::put('mycolor/{id}', [MycolorController::class, 'update']);

// Delete Mycolor
Route::delete('mycolor/{id}', [MycolorController::class,'destroy']);
