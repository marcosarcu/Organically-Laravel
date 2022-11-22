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
Route::get('/blog', ['\App\Http\Controllers\BlogController', 'archive'])->name('blog');

// Auth routes
Route::get('/login', ['\App\Http\Controllers\AuthController', 'loginForm'])->name('loginForm');
Route::post('/login', ['\App\Http\Controllers\AuthController', 'login'])->name('login');
Route::post('/logout', ['\App\Http\Controllers\AuthController', 'logout'])->name('logout');
Route::get('/register', ['\App\Http\Controllers\AuthController', 'registerForm'])->name('registerForm');
Route::post('/register', ['\App\Http\Controllers\AuthController', 'register'])->name('register');


Route::middleware(['admin'])->group(function () {
    // Admin routes
    Route::get('/admin', ['\App\Http\Controllers\AdminController', 'index'])->name('admin');
    Route::get('/admin/services', ['\App\Http\Controllers\AdminController', 'servicesAdmin'])->name('servicesAdmin');
    Route::get('/admin/articles', ['\App\Http\Controllers\AdminController', 'articlesAdmin'])->name('articlesAdmin');
    Route::get('/admin/users', ['\App\Http\Controllers\AdminController', 'usersAdmin'])->name('usersAdmin');
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
    // Users Management
    Route::post('/admin/makeadmin/{id}', ['\App\Http\Controllers\AdminController', 'makeAdmin'])->name('admin.makeAdmin');
    Route::post('/admin/removeadmin/{id}', ['\App\Http\Controllers\AdminController', 'removeAdmin'])->name('admin.removeAdmin');
    Route::get('/admin/delete/user/{id}', ['\App\Http\Controllers\AdminController', 'confirmDeleteUser'])->name('admin.confirmDeleteUser');
    Route::post('/admin/delete/user/{id}', ['\App\Http\Controllers\AdminController', 'deleteUser'])->name('admin.deleteUser');
});

