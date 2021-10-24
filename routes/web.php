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
Use App\Http\Controllers\IndexController; //Importa o controller criado
Route::get('/', [IndexController::class, 'index']); //Chama a classe e a função 'index' que está no controller
use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'Login']);
use App\Http\Controllers\WelcomeController;
Route::get('/welcome',[WelcomeController::class, 'welcome'] );