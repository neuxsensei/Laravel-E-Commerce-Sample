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








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
