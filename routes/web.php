<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*Route::get('/', function () {
    return view('app');
});*/


//Route::resource('users', UserController::class);

//Route::get('/field', [FieldController::class, 'index']);
Route::resource('fields', FieldController::class);

//Route::get('/role', [RoleController::class, 'index']);
Route::resource('roles', RoleController::class);

//Route::get('/team', [TeamController::class, 'index']);
Route::resource('teams', TeamController::class);

//Route::get('/project', [ProjectController::class, 'index']);
Route::resource('projects', ProjectController::class);

//Route::get('/task', [TaskController::class, 'index']);
Route::resource('tasks', TaskController::class);
