<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
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

Route::get('/admin/login',[AdminController::class,'login'])->name('AdminLogin');
Route::post('/admin/login/process',[LoginController::class,'loginprocess'])->name('adminloginprocess');
Route::middleware('admin')->group(function(){

    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('AdminDashboard');
    Route::get('/admin/list',[AdminController::class,'list'])->name('adminlist');
    Route::get('/admin/register',[AdminController::class,'register'])->name('adminregister');
    Route::post('/admin/register/process',[AdminController::class,'registerprocess'])->name('adminRegisterProcess');
    Route::get('/admin/listedit/{id}',[AdminController::class,'listedit'])->name('ListEdit');
    Route::patch('/admin/register/update/process',[AdminController::class,'updateprocess'])->name('AdminRegisterUpdateProcess');
    Route::get('/admin/deleteprocess/{id}', [AdminController::class, 'destroy'])->name('AdminDestroy');


});
Route::get('/customer/login',[CustomerController::class,'login'])->name('CustomerLogin');
Route::post('/customer/login/process',[LoginController::class,'loginprocess'])->name('CustomerLoginProcess');
Route::get('/',[CustomerController::class,'home'])->name('CustomerHome');

Route::middleware('customer')->group(function(){
Route::get('/customer/list',[CustomerController::class,'list'])->name('CustomerList');
Route::get('/customer/register',[CustomerController::class,'register'])->name('register');
Route::post('/customer/register/process',[CustomerController::class,'registerprocess'])->name('CustomerRegisterProcess');
Route::get('/customer/listedit/{id}',[CustomerController::class,'listedit'])->name('CustomerListEdit');
Route::patch('/customer/register/update/process',[CustomerController::class,'updateprocess'])->name('CustomerRegisterUpdateProcess');
Route::get('customer/deleteprocess/{id}', [CustomerController::class, 'destroy'])->name('CustomerDestroy');

});

Route::middleware('category')->group(function(){
    Route::get('/category/list',[CategoryController::class,'list'])->name('CategoryList');
    Route::get('/category/register',[CategoryController::class,'register'])->name('CategoryRegister');
    Route::post('/category/register/process',[CategoryController::class,'registerprocess'])->name('CategoryRegisterProcess');
});
// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
