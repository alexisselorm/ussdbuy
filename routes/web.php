<?php

use App\Http\Controllers\NumberController;
use App\Models\Number;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $numbers = Number::all();
    return view('dashboard', ['numbers' => $numbers]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/number/create', [NumberController::class, 'create'])->name('number.create');
Route::post('/number/store', [NumberController::class, 'store'])->name('number.store');
Route::get('/number/{number}/edit', [NumberController::class, 'edit'])->name('number.edit');
Route::get('/number/{number}', [NumberController::class, 'edit'])->name('number.update');
Route::get('/number/destroy', [NumberController::class, 'edit'])->name('number.delete');

require __DIR__ . '/auth.php';
