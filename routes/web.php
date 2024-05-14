<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/' , function(){
//     return view('admin.pages.staff.update_staff');
// });

Route::get('/' , function(){
    return view('admin.account.login.index');
});
// Route::get('/',function(){
//     return view('home');
// });


Route::middleware('admin')->group(function(){
    Route::get('/admin/login',[AdminController::class,'login'])->name('AdminLogin');
    Route::post('/admin/login/process',[LoginController::class,'login'])->name('adminloginprocess');
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('AdminDashboard');
    Route::get('/admin/list',[AdminController::class,'list'])->name('adminlist');
    Route::get('/admin/register',[AdminController::class,'register'])->name('register');
    Route::post('/admin/register/process',[AdminController::class,'registerprocess'])->name('adminRegisterProcess');
    Route::get('/admin/listedit/{id}',[AdminController::class,'listedit'])->name('ListEdit');
});
Route::get('/customer/login',[CustomerController::class,'login']);


// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
