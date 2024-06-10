@extends('layouts.adminlayout')
@section('title','Home')

@php
$updatestatus = false;
if(isset($supplierdata)){
    $updatestatus = true;
}
@endphp
@section('content')
    <div class="admin-session">
        <div class="nav-col flex_col">
            <h1 class="nav_text">Bravis</h1>
            <a href="{{url('/admin/dashboard/')}}" target="_self">
             
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Dashboard</p>
                    </div>
                </div>
            </a>    
            <a href="{{url('/product/list/')}}" target="_self">
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Product</p>
                    </div>
                </div>
            </a>
            <a href="{{url('/category/list/')}}" target="_self">
                
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-border-all"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Category</p>
                    </div>
                </div>
              
            </a>
            <a href="{{url('/customer/list')}}" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-users"></i>
                    <p class="nav_text">Customer</p>
                </div>
            </a>
            <a href="" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="nav_text">Order</p>
                </div>
            </a>
            <a href="{{url('/admin/list/')}}" target="_self">
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Staff</p>
                    </div>
                </div>
            </a>
            <a href="{{url('/supplier/list/')}}" target="_self">
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Supplier</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main-container">
            <div class="col-con">
                <div class="header-col">
                    <div class="flex_row icons">
                        <i class="fa-regular fa-bell" style="font-size:25px"></i><br>
                        <i class="fa-regular fa-message" style="font-size:25px"></i>
                    </div>
                    <div class="user_profile">
                        <p>{{auth('admin')->user()->name}}</p>
                        <div class="img-col">
                             <img src="{{asset('image/admin/'.auth('admin')->user()->image)}}" width="50" height="60" style="object-fit:cover" alt="userphoto">
                         </div>
                    </div>   
                </div>
            </div>
            <!-- user Profile Info -->
            <div class="user_profile_info">
                <a href=""><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
                <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
            </div>

        <div class="main">
            <div class="group-title">
            <h4><b>Update Supplier</b></h4>
            <p>Update your supplier necessary information here</p>
            </div>
            <form action="{{$updatestatus == true? route('SupplierRegisterUpdateProcess'):route('SupplierListEdit',$supplierdata->id)}}"method="POST" enctype="multipart/form-data" class="update_supplier_form">
                @csrf
                @if($updatestatus == true)
                @method('PATCH')
                @endif 
                <input type="hidden" name="id" value="{{$updatestatus = true? $supplierdata->id: ''}}">
                <div class="group-col">
                    <div>Supplier Name</div>
                    <input type="text" name="name" value="{{$updatestatus == true? $supplierdata->name: ''}}" placeholder="Supplier Name">
                </div>
                <div class="group-col">
                    <div>Brand</div>
                    <input type="text" name="brand_name" value="{{$updatestatus == true? $supplierdata->brand_name: ''}}" placeholder="Brand Name">
                </div>
                <div class="group-submit">
                    <button class="can-btn" >Cancel</button>
                    <button type="submit" class="btn" name="login">{{$updatestatus == true? 'Update': 'Add'}}</button>
                </div>
            </form>
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection