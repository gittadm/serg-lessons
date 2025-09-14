<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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

Route::get('hello', [HelloController::class, 'show'])->name('hello');
Route::get('task1', [HelloController::class, 'task1'])->name('tasks.task1');
Route::get('form', [FormController::class, 'show'])->name('form.show');
Route::post('form', [FormController::class, 'store'])->name('form.store');
Route::get('carbon', [FormController::class, 'carbon'])->name('carbon');

Route::get('/', function () {
    return view('welcome');
});
