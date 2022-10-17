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

Route::get('/', ['\App\Http\Controllers\HomeController', 'index'])->name('home');
Route::get('/admin', ['\App\Http\Controllers\AdminController', 'index'])->name('admin');
Route::get('/admin/new/service', ['\App\Http\Controllers\AdminController', 'newService'])->name('admin.newService');
Route::post('/admin/new/service', ['\App\Http\Controllers\AdminController', 'storeService'])->name('admin.storeService');
Route::get('/admin/edit/service', ['\App\Http\Controllers\AdminController', 'editService'])->name('admin.editService');
