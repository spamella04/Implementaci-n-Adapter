<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DistanceController::class, 'showForm'])->name('show.form');
Route::post('/convert', [DistanceController::class, 'convertDistance'])->name('convert.distance');