<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/' , function(){
    return view('admin.index');
});
Route::get('/' , function(){
    return view('admin.pages.staff.update_staff');
});
// Route::get('/',function(){
//     return view('home');
// });


// Route::middleware('admin')->group(function(){
//     Route::get('/admin/login',[AdminController::class,'login'])->name('AdminLogin');
// });


// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
