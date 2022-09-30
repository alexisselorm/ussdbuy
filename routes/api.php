<?php

use App\Http\Controllers\API\NumberController;
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

Route::post('/number/store', [NumberController::class, 'store'])->name('api.number.store');
Route::get('/number/allwhitelist/', [NumberController::class, 'showAllWhiteListed']);
Route::get('/number/allblacklist/', [NumberController::class, 'showAllBlackListed']);
Route::get('/number/show/{number:number}', [NumberController::class, 'show']);
