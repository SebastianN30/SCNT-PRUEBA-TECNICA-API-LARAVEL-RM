<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

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

/* EndPoitn to view data */
Route::get('/characters', [indexController::class, 'showData']);
/* EndPoint to insert data */
Route::post('/charactersInsert', [indexController::class, 'insertData']);
/* EndPoint to delete data */
Route::delete('/characters/{id}', [indexController::class, 'deleteData']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
