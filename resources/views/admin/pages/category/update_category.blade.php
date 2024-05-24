@extends('layouts.adminlayout')
@section('title','Home')

@php
$updatestatus = false;
if(isset($categorydata)){
    $updatestatus = true;
}
@endphp
{{-- {{dd($categorydata)}}; --}}
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
            <a href="{{url('/product/list')}}" target="_self">
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
            <a href="{{url('/admin/customer/list')}}" target="_self">
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
            <a href="/pages/supplier/index.html" target="_self">
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
            <h4><b>Update Category</b></h4>
            <p>Update your category necessary information here</p>
            
               
            <form action="{{$updatestatus == true? route('CategoryRegisterUpdateProcess'):route('CategoryListEdit',$categorydata->id)}}"method="POST" enctype="multipart/form-data" class="update_category_form">
                    <div class="group-title">
                        @csrf
                        @if($updatestatus == true)
                        @method('PATCH')
                        @endif 
                        <input type="hidden" name="id" value="{{$updatestatus = true? $categorydata->id: ''}}">
                    </div>
                    <div class="group-col">
                        <div>Category Name</div>
                     <input type="text" name="name" value="{{$updatestatus == true? $categorydata->name: ''}}" placeholder="Category Name">
                    </div>
            <div class="group-submit">
                    <button class="can-btn">Cancel</button>
                    <button type="submit" class="btn" name="login">{{$updatestatus == true? 'Update': 'Add'}}</button>
            </div>
             </form>

               
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection