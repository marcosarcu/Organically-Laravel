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
// Site routes
Route::get('/', ['\App\Http\Controllers\HomeController', 'index'])->name('home');
Route::get('/blog/{id}', ['\App\Http\Controllers\BlogController', 'show'])->name('blog.show')->whereNumber('id');

// Auth routes
Route::get('/login', ['\App\Http\Controllers\AuthController', 'loginForm'])->name('loginForm');
Route::post('/login', ['\App\Http\Controllers\AuthController', 'login'])->name('login');
Route::post('/logout', ['\App\Http\Controllers\AuthController', 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::get('/admin', ['\App\Http\Controllers\AdminController', 'index'])->name('admin');
    // Services ABM
    Route::get('/admin/new/service', ['\App\Http\Controllers\AdminController', 'newService'])->name('admin.newService');
    Route::post('/admin/new/service', ['\App\Http\Controllers\AdminController', 'storeService'])->name('admin.storeService');
    Route::get('/admin/edit/service/{id}', ['\App\Http\Controllers\AdminController', 'editService'])->whereNumber('id')->name('admin.editService');
    Route::post('/admin/edit/service/{id}', ['\App\Http\Controllers\AdminController', 'updateService'])
    ->name('admin.updateService')->whereNumber('id');
    Route::get('/admin/delete/service/{id}', ['\App\Http\Controllers\AdminController', 'confirmDeleteService'])
    ->name('admin.confirmDeleteService')->whereNumber('id');
    Route::post('/admin/delete/service/{id}', ['\App\Http\Controllers\AdminController', 'deleteService'])->whereNumber('id')->name('admin.deleteService');
    // Articles ABM
    Route::get('/admin/new/article', ['\App\Http\Controllers\AdminController', 'newArticle'])->name('admin.newArticle');
    Route::post('/admin/new/article', ['\App\Http\Controllers\AdminController', 'storeArticle'])->name('admin.storeArticle');
    Route::get('/admin/edit/article/{id}', ['\App\Http\Controllers\AdminController', 'editArticle'])->name('admin.editArticle');
    Route::post('/admin/edit/article/{id}', ['\App\Http\Controllers\AdminController', 'updateArticle'])->name('admin.updateArticle');
    Route::get('/admin/delete/article/{id}', ['\App\Http\Controllers\AdminController', 'confirmDeleteArticle'])->name('admin.confirmDeleteArticle');
    Route::post('/admin/delete/article/{id}', ['\App\Http\Controllers\AdminController', 'deleteArticle'])->name('admin.deleteArticle');
});

