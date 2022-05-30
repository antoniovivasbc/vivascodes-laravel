<?php

use App\Http\Controllers\ProjectController;
use GuzzleHttp\Middleware;
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

Route::get('/', [ProjectController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['admin'])->group(function(){
    Route::post('/dashboard', [ProjectController::class, 'store'])->Middleware('auth');
    Route::delete('/dashboard/{id}', [ProjectController::class, 'destroy'])->Middleware('auth');
    Route::put('/dashboard/{id}', [ProjectController::class, 'edit'])->Middleware('auth');
    Route::get('/dashboard/{id1}/{id2}', [ProjectController::class, 'swap'])->Middleware('auth');
});