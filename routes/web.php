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

/*   Buradan aşşağısı admin paneli için    */

Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'admin'])->name('admin');

Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('adminlogin');

Route::post('/admin/login_check',[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');

Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
