<?php

use App\Http\Controllers\NumberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Always redirects to login page if not logged in
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [NumberController::class, 'index'])->name('dashboard');

    Route::prefix('number')->group(function () {
        Route::get('/create', [NumberController::class, 'create'])->name('number.create');
        Route::post('/store', [NumberController::class, 'store'])->name('number.store');
        Route::get('/{number}/edit', [NumberController::class, 'edit'])->name('number.edit');
        Route::put('/{number}', [NumberController::class, 'update'])->name('number.update');
        Route::delete('/{number}', [NumberController::class, 'destroy'])->name('number.delete');
        Route::get('/{number}/blacklist', [NumberController::class, 'blacklist'])->name('number.blacklist');
    });

});
require __DIR__ . '/auth.php';
