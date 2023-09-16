<?php


use App\Http\Controllers\ReadyMealsController;
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

// Route::get('/video-list', [VideoController::class, 'index']);

Route::post('/edit-readyMeal/{id}', [ReadyMealsController::class, 'update'])->name('edit-readyMeal');
Route::post('/add-ready-meal', [ReadyMealsController::class, 'store']);
Route::get('/', [ReadyMealsController::class, 'index'])->name('ready-meal');
Route::get('/delete-ready-meal/{id}', [ReadyMealsController::class, 'destroy'])->name('delete-ready-meal');
Route::get('/add-ready-meal', function () {
    return view('add-ready-meal');
});
