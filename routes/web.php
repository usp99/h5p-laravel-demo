<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\H5PController;

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

// Route::view('/{path?}/{all}', 'welcome');
// Route::view('/{path?}', 'welcome');

Route::get('/h5p/create', [H5PController::class, 'create'])->name('h5p.create');
Route::post('/h5p/store', [H5PController::class, 'store'])->name('h5p.store');
Route::get('/h5p/{id}', [H5PController::class, 'show'])->name('h5p.show');
Route::post('/h5p/editor-ajax', [H5PController::class, 'editorAjax'])->name('h5p.editorAjax');
