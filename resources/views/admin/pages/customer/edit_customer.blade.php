@extends('layouts.adminlayout')
@section('title','Home')

@php
   $updatestatus = false;
   if(isset($customerdata)) {
    $updatestatus = true;
   }
@endphp
@section('content')
<div class="session grid">
    <div class="nav flex_col">
        <a href="{{url('/admin/dashboard')}}"l target="_self">
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
        <a href="{{url('/customer/list')}}" target="_self">
            <div class="flex_row">
                <i class="fa-solid fa-users"></i>
                <p class="nav_text">Customer</p>
            </div>
        </a>
        <a href="/pages/order/index.html" target="_self">
            <div class="flex_row">
                <i class="fa-solid fa-cart-shopping"></i>
                <p class="nav_text">Order</p>
            </div>
        </a>
        <a href="/pages/staff/index.html" target="_self">
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
        <h4 class="main-title1"><b>Edit Customer</b></h4>
        <p class="main-title2">Edit your customer necessary information here</p>
          
            <form action="{{$updatestatus == true? route('CustomerRegisterUpdateProcess') : route('CustomerRegisterProcess')}}" method="POST" class="update_customer_form">
                <div class="group-title">
                    @csrf
                    @if($updatestatus == true)
                    @method('PATCH')
                    @endif
                    <input type="hidden" name="id" value="{{$updatestatus = true? $customerdata->id: ''}}">
                    <h1>{{$updatestatus == true ? 'Customer Edit Form' : 'Create Account'}}</h1>
                </div>
               
                {{-- <div class="grid-col"> --}}
                   
                    
                <div class="group-col">
                    <div>First Name</div>
                    <input type="text" placeholder="First Name" name="fname" value="{{$updatestatus == true? $customerdata->firstname: ''}}">
                </div>
                <div class="group-col">
                    <div>Last Name</div>
                    <input type="text" placeholder="Last Name" name="lname" value="{{$updatestatus == true? $customerdata->lastname: ''}}">
                </div>

                <div class="group-col">
                    <div>Email</div>
                    <input type="email" placeholder="" name="email" value="{{$updatestatus == true? $customerdata->email: ''}}">
                </div>
               
                <div class="group-col">
                    <div>Password</div>
                    <input type="password" name="password" value="{{$updatestatus == true? $customerdata->password: ''}}">
                </div>
               
                <div class="group-col">
                    <div>Phone Number</div>
                    <input type="text" placeholder="" name="phone" value="{{$updatestatus == true? $customerdata->phone: ''}}">
                </div>

                <div class="group-col">
                    <div>Address</div>
                    <input type="text" placeholder="" name="address" value="{{$updatestatus == true? $customerdata->address: ''}}">
                </div>

                <div class="group-col">
                    <div>Profile Photo</div>
                    <input type="file" placeholder="" name="image" value="{{$updatestatus == true? $customerdata->image: ''}}">
                </div>

                <div class="group-submit">
                    <button class="can-btn">Cancel</button>
                    <button type="submit" class="btn" name="login">{{$updatestatus == true? 'Update': 'Register'}}</button>
                </div>
            </div>
            </form>
           
    </div>
</div>

<!-- script -->
<script src="/js/user_profile_info_popup.js"></script>

@endsection