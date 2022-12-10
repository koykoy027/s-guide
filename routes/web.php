<?php

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

Auth::routes();

Route::get('/case-reports', function () {
    return view('admin.case-reports');
});
Route::get('/user', function () {
    return view('admin.user');
});


Route::get('/add-case', [App\Http\Controllers\HomeController::class, 'addCase'])->name('addCase');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
