@extends('layouts.adminlayout')
@section('title','Home')

@php
$updatestatus = false;
if(isset($staffdata)){
    $updatestatus = true;
}
@endphp
@section('content')
    <div class="session grid">
        <div class="nav flex_col">
            <a href="/index.html" target="_self">
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
            <a href="" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-user"></i>
                    <p class="nav_text">Staff</p>
                </div>
            </a>
            <a href="/pages/supplier/index.html" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-user"></i>
                    <p class="nav_text">Supplier</p>
                </div>
            </a>
        </div>
        <div class="header flex_row">
            <div class="flex_row icons">
                <img src="/image/icon/bell.svg" alt="">
                <img src="/image/icon/msg.svg" alt="">
            </div>
            <div class="user_profile">
            </div>    
        </div>
        <!-- user Profile Info -->
        <div class="user_profile_info">
            <a href=""><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="/account/login/index.html"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
        </div>

        <div class="main">
            <h4><b>Update Category</b></h4>
            <p>Update your category necessary information here</p>
            
                <div class="grid">
                    <form action="{{$updatestatus == true? route('AdminRegisterUpdateProcess'):route('ListEdit',$staffdata->id)}}"method="POST" enctype="multipart/form-data" class="update_category_form">
                        <div class="grid">
                    @csrf
                    @if($updatestatus == true)
                    @method('PATCH')
                    @endif 
                    <input type="hidden" name="id" value="{{$updatestatus = true? $staffdata->id: ''}}">
                    <div>Category Name</div>
                    <input type="text" name="name" value="{{$updatestatus == true? $staffdata->name: ''}}" placeholder="Category Name">
                        
            
                    <button >Cancel</button>
                    <button>{{$updatestatus == true? 'Update': 'Register'}}</button>

                </form>

                </div>
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection