<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearcherController;

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

Route::get('add-researcher',[ResearcherController::class, 'add'])->name('add-researcher');
Route::get('update-researcher',[ResearcherController::class, 'update'])->name('update-researcher');
Route::post('store-researcher',[ResearcherController::class, 'store']);
Route::get('list-researchers',[ResearcherController::class, 'listResearchers']);
Route::delete('delete-researcher', [ResearcherController::class, 'delete'])->name('delete-researcher');