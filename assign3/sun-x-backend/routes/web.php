<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Requests\LoginRequest;

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

Route::group(['middleware' => ['guest']], function() {
    Route::get('/', [LoginController::class, 'show'])->name('login');
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['checkLogin']], function() {
    Route::get('add-researcher',[ResearcherController::class, 'add'])->name('add-researcher');
    Route::get('update-researcher',[ResearcherController::class, 'update'])->name('update-researcher');
    Route::post('store-researcher',[ResearcherController::class, 'store']);
    Route::get('list-researchers',[ResearcherController::class, 'listResearchers'])->name('list-researchers');
    Route::delete('delete-researcher', [ResearcherController::class, 'delete'])->name('delete-researcher');
    Route::get('add-project',[ProjectController::class, 'add'])->name('add-project');
    Route::get('update-project',[ProjectController::class, 'update'])->name('update-project');
    Route::post('store-project',[ProjectController::class, 'store']);
    Route::get('list-projects',[ProjectController::class, 'listProjects'])->name('list-projects');
    Route::delete('delete-project', [ProjectController::class, 'delete'])->name('delete-project');
    Route::get('logout',  [LogoutController::class, 'logout'])->name('logout');
});
    
