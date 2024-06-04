<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

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
    Route::get('/admin/logout',[LoginController::class,'Adminlogout'])->name('AdminLogout');
    Route::post('/admin/filter',[AdminController::class,'filter'])->name('AdminFilter');
    //Category Start
    Route::get('/category/register',[CategoryController::class,'register'])->name('CategoryRegister');
    Route::post('/category/register/process',[CategoryController::class,'registerprocess'])->name('CategoryRegisterProcess');
    Route::get('/category/list',[CategoryController::class,'categorylist'])->name('CategoryList');
    Route::get('/category/listedit/{id}',[CategoryController::class,'listedit'])->name('CategoryListEdit');
    Route::patch('/category/register/update/process',[CategoryController::class,'updateprocess'])->name('CategoryRegisterUpdateProcess');
    Route::get('/category/deleteprocess/{id}', [CategoryController::class, 'destroy'])->name('CategoryDestroy');
    Route::get('/category/filter',[CategoryController::class,'filter'])->name('CategoryFilter');
    //Category End

      //Supplier Start
      Route::get('/supplier/register',[SupplierController::class,'register'])->name('SupplierRegister');
      Route::post('/supplier/register/process',[SupplierController::class,'registerprocess'])->name('SupplierRegisterProcess');
      Route::get('/supplier/list',[SupplierController::class,'list'])->name('SupplierList');
      Route::get('/supplier/listedit/{id}',[SupplierController::class,'listedit'])->name('SupplierListEdit');
      Route::patch('/supplier/register/update/process',[SupplierController::class,'updateprocess'])->name('SupplierRegisterUpdateProcess');
      Route::get('/supplier/deleteprocess/{id}', [SupplierController::class, 'destroy'])->name('SupplierDestroy');
      Route::post('/supplier/filter',[SupplierController::class,'filter'])->name('SupplierFilter');
      //Supplier End

      //Product Start
      Route::get('/product/register',[ProductController::class,'register'])->name('ProductRegister');
      Route::post('/product/register/process',[ProductController::class,'registerprocess'])->name('ProductRegisterProcess');
      Route::get('/product/list',[ProductController::class,'list'])->name('ProductList');
      Route::get('/product/listedit/{id}',[ProductController::class,'listedit'])->name('ProductListEdit');
      Route::patch('/product/register/update/process',[ProductController::class,'updateprocess'])->name('ProductRegisterUpdateProcess');
      Route::get('/product/deleteprocess/{id}', [ProductController::class, 'destroy'])->name('ProductDestroy');
      Route::get('/product/filter',[ProductController::class,'filter'])->name('ProductFilter');
      //Product End

      //Customer List Start
      Route::get('/admin/customer/list',[AdminCustomerController::class,'list'])->name('CustomerList');
    //   Route::get('/admin/customer/listedit/{id}',[AdminCustomerController::class,'listedit'])->name('CustomerListEdit');
      Route::get('/admin/customer/deleteprocess/{id}', [AdminCustomerController::class, 'destroy'])->name('AdminCustomerDestroy');
      Route::get('/admin/customer/filter',[AdminCustomerController::class,'filter'])->name('AdminCustomerFilter');
      //Customer List End

      //Order Start
      Route::get('/order/list',[OrderController::class,'list'])->name('OrderList');
      Route::get('/order/listedit/{id}',[OrderController::class,'listedit'])->name('OrderListEdit');
      // Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('orderplace');
      // Route::get('/orders', [OrderController::class, 'viewOrders'])->name('orderview');
      //Order End

});
//Customer Start
Route::get('/customer/register',[CustomerController::class,'register'])->name('register');
Route::post('/customer/register/process',[CustomerController::class,'registerprocess'])->name('CustomerRegisterProcess');
Route::get('/customer/login',[CustomerController::class,'login'])->name('CustomerLogin');
Route::post('/customer/login/process',[LoginController::class,'loginprocess'])->name('CustomerLoginProcess');
Route::get('/customer/homepage',[CustomerController::class,'home'])->name('CustomerHome');

Route::middleware('customer')->group(function(){
// Route::get('/customer/list',[CustomerController::class,'list'])->name('CustomerList')

// Route::get('/customer/listedit/{id}',[CustomerController::class,'listedit'])->name('CustomerListEdit');
Route::patch('/customer/register/update/process',[CustomerController::class,'updateprocess'])->name('CustomerRegisterUpdateProcess');
Route::get('/customer/deleteprocess/{id}', [CustomerController::class, 'destroy'])->name('CustomerDestroy');
Route::get('/customer/cart/add',[CustomerController::class,'addtocart'])->name('AddToCart');

//Customer Page Product Start
Route::get('/cutomer/product/list',[CustomerProductController::class,'showlist'])->name('CustomerProductList');
Route::get('/customer/product/details/{id}',[CustomerProductController::class,'detail'])->name('CustomerProductDetail');
Route::get('/customer/product/{id}',[CustomerProductController::class,'productlist'])->name('CustomerCategoryProductList');
Route::post('/customer/product/filter',[CustomerProductController::class,'filter'])->name('CustomerProductFilter');
// Route::get('/customer/product/men/{id}',[CustomerProductController::class,'menproductlist'])->name('CustomerMenProductList');
//Customer Page Product End

//Add to cart start
Route::get('/cart/{id}', [CartController::class, 'index'])->name('CartList');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('CartAdd');
Route::get('/show/cart',[CartController::class,'showCart'])->name('ShowCart');


//Add to cart end
//
});
//Customer End
// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
