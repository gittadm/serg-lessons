<?php

use App\Http\Controllers\CarbonController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\InvokeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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

Route::group(['as' => 'class.', 'prefix' => 'class1809', 'controller' => CarbonController::class], function () {
    Route::get('/', 'task1')->name('task1');
    Route::get('task1/{id}', 'task1')->name('task1');
        //->where('id', '[0-9]+');
    //Route::get('task1/{id}', 'task1')->name('task1');
    Route::get('task2', 'task2')->name('task2');
    Route::get('task3', 'task3')->name('task3');
    Route::post('task1', 'task1')->name('task1.store');
});

Route::get('task-invoke', InvokeController::class)->name('invoke');

Route::name('class.')->group(function () {
    Route::prefix('admin')->group(function () {
        //Route::get('task1', 'task1')->name('task1');
    });
});

Route::resource('users', UserController::class)->only([
    'index', 'create'
]);

//->except([
//
//    'create', 'store', 'update', 'destroy'
//
//]);

// CRUD create read update delete User Article Company

//UserController
//
//Route::post('save/users', [, 'saveNewUser'])->name('save.new.users')

Route::get('/', function () {
    return view('welcome');
});

Route::get('questions', [QuestionController::class, 'index'])->name('questions.index');
Route::get('questions/{id}', [QuestionController::class, 'show'])->name('questions.show');
Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('questions', [QuestionController::class, 'store'])->name('questions.store');
Route::get('questions/{id}/edit', [QuestionController::class, 'edit'])->name('questions.edit');

