<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;

//導入 TodoController 的  class
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

Route::get(
    'todos', [TodoController::class, 'index']
);

Route::post(
    'todo', [TodoController::class, 'store']
);

Route::put(
    'todo/{todo}', [TodoController::class, 'update']
);

Route::delete(
    'todo/{todo}', [TodoController::class, 'destroy']
);
