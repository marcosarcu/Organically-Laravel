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

Route::get('/admin/edit/service/{id}', ['\App\Http\Controllers\AdminController', 'editService'])
->whereNumber('id')
->name('admin.editService');

Route::post('/admin/edit/service/{id}', ['\App\Http\Controllers\AdminController', 'updateService'])->name('admin.updateService');

Route::get('/admin/delete/service/{id}', ['\App\Http\Controllers\AdminController', 'confirmDeleteService'])->name('admin.confirmDeleteService');
Route::post('/admin/delete/service/{id}', ['\App\Http\Controllers\AdminController', 'deleteService'])->name('admin.deleteService');
