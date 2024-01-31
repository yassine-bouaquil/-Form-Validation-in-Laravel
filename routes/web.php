<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*
 *
 * R
 */
Route::get('/',[AuthController::class , 'index'])->name('main');

Route::post('\form',[AuthController::class , 'store'])->name('register.store');

