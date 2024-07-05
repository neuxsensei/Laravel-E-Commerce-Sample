<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('welcome');
})->name('main');

Route::get('/',function (){
    return view('home.index',['name'=>'yusufcan']);
})->name('default');

Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/test/{id}/{name}',[HomeController::class,'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('test');

/* ------------------  Burası admin paneli için   -------------------------------------------- */

/* login requestleri admin/login e göndermek için */
Route::redirect('/login','/admin/login');

Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('adminlogin');

Route::post('/admin/login_check',[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');

Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

/* ------------------  Burası admin paneli için   -------------------------------------------- */

/* ------------------  Burası DB işlemleri  için   ------------------------------------------- */

Route::middleware('auth')->prefix('admin')->group(function()
{
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'admin'])->name('admin');
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('/category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/delete', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
});



/* ------------------  Burası DB işlemleri  için   ------------------------------------------- */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
