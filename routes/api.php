<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StateController;
// use App\Http\Controllers\CategoryController;

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

Route::resource('state', StateController::class)->only([
    'index'
]);
Route::resource('category', CategoryController::class)->only([
    'index'
]);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
