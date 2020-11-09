<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreepikLisenceController;

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

Route::get('/freepik_lisence', [FreepikLisenceController::class, 'index'])
    ->name('freepik_lisence.index');
Route::get('/freepik_lisence/create', [FreepikLisenceController::class, 'create'])
    ->name('freepik_lisence.create');
Route::post('/freepik_lisence/store', [FreepikLisenceController::class, 'store'])
    ->name('freepik_lisence.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
