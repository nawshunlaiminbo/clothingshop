@extends('layouts.adminlayout')
@section('title','Home')

@php
$updatestatus = false;
if(isset($supplierdata)){
    $updatestatus = true;
}
@endphp
@section('content')

    <div class="session grid">
        <div class="nav flex_col">
            <a href="{{url('/admin/dashboard')}}" target="_self">
                <h1 class="nav_text">Bravis</h1>
                <div class="flex_row">
                    <i class="fa-solid fa-house"></i>
                    <p class="nav_text">Dashboard</p>
                </div>
            </a>    
            <a href="/pages/product/index.html" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p class="nav_text">Product</p>
                </div>
            </a>
            <a href="{{url('/category/list')}}" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-users"></i>
                    <p class="nav_text">Category</p>
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
            <a href="{{url('/admin/list')}}" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-user"></i>
                    <p class="nav_text">Staff</p>
                </div>
            </a>
            <a href="{{url('/supplier/list')}}" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-user"></i>
                    <p class="nav_text">Supplier</p>
                </div>
            </a>
        </div>
        <div class="header flex_row">
            <div class="flex_row icons">
                <i class="fa-regular fa-bell" style="font-size:25px"></i><br>
                <i class="fa-regular fa-message" style="font-size:25px"></i>
            </div>
            <div class="user_profile">
                <img src="{{asset('image/admin/piano.jpg')}}" alt="userphoto">

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