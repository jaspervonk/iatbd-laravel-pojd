<?php

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

Route::get('/huisdieren', [App\Http\Controllers\HuisdierenController::class, 'index']);
Route::get('/huisdieren/{id}', [App\Http\Controllers\HuisdierenController::class, 'show'])->middleware(['auth']);
Route::get('/formulier/huisdier', [App\Http\Controllers\HuisdierenController::class, 'formulier'])->middleware(['auth']);
Route::post('/formulier/huisdier/post', [App\Http\Controllers\HuisdierenController::class, 'store'])->middleware(['auth']);
Route::post('/huisdieren/remove', [App\Http\Controllers\HuisdierenController::class, 'remove']);

Route::get('/oppassers', [App\Http\Controllers\OppassersController::class, 'index']);
Route::get('/oppassers/{id}', [App\Http\Controllers\OppassersController::class, 'show']);
Route::get('/formulier/oppas', [App\Http\Controllers\OppassersController::class, 'formulier'])->middleware(['auth']);
Route::post('/formulier/oppas/post', [App\Http\Controllers\OppassersController::class, 'store'])->middleware(['auth']);
Route::post('/oppassers/remove', [App\Http\Controllers\OppassersController::class, 'remove']);

Route::get('/aanvragen', [App\Http\Controllers\AanvragenController::class, 'index'])->middleware(['auth']);
Route::post('/aanvragen/post', [App\Http\Controllers\AanvragenController::class, 'store'])->middleware(['auth']);
Route::post('/aanvragen/update', [App\Http\Controllers\AanvragenController::class, 'update'])->middleware(['auth']);
Route::post('/aanvragen/remove', [App\Http\Controllers\AanvragenController::class, 'remove'])->middleware(['auth']);
Route::post('/aanvragen/complete', [App\Http\Controllers\AanvragenController::class, 'complete'])->middleware(['auth']);

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
