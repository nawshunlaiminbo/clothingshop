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
            <a href="{{url('/admin/dashboard/')}}" target="_self">
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
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p class="nav_text">Category</p>
                </div>
            </a>
            <a href="{{url('/customer/list/')}}" target="_self">
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
            <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
        </div>

        <div class="main">
            <h4><b>Update Staff</b></h4>
            <p>Add your staff necessary information here</p>
            
             <form action="{{$updatestatus == true? route('AdminRegisterUpdateProcess'):route('ListEdit',$staffdata->id)}}"method="POST" enctype="multipart/form-data" class="update_staff_form">
                 {{-- <div class="group-title"> --}}
                    @csrf
                    @if($updatestatus == true)
                    @method('PATCH')
                    @endif 
                    <input type="hidden" name="id" value="{{$updatestatus = true? $staffdata->id: ''}}">
                    {{-- <h1>{{$updatestatus == true ? 'Staff Edit Form' : 'Create Account'}}</h1> --}}
                 {{-- </div> --}}

                 <div class="group-col">
                    <div>Name</div>
                    <input type="text" name="name" value="{{$updatestatus == true? $staffdata->name: ''}}" placeholder="Name">
                </div>
                <div class="group-col">
                    <div>Email</div>
                    <input type="email" name="email" value="{{$updatestatus == true? $staffdata->email: ''}}" placeholder="Email">
                </div>
                <div class="group-col">
                    <div>Password</div>
                    <input type="password" name="password" value="{{$updatestatus == true? $staffdata->password: ''}}">
                </div>
                <div class="group-col">
                    <div>Phone Number</div>
                    <input type="text" name="phone" placeholder="Phone Number" value="{{$updatestatus == true? $staffdata->phone: ''}}">
                </div>
                <div class="group-col">
                    <div>Address</div>
                    <input type="text" name="address" placeholder="Address" value="{{$updatestatus == true? $staffdata->address: ''}}">
                </div>
                    <div class="group-col">
                        <div>Staff Position</div>
                        <select name="role" {{$updatestatus == true ? 'disabled': ''}}>
                            <option value="roleid" selected>Select Role Name...</option>
                            @foreach($role as $value)
                            <option value="{{$value->id}}" >{{$value->name}}<option>
                            @endforeach
                        </select>
            
                    </div> 
                    <div class="group-col">
                        <div>Profile Photo</div>
                    <input type="file" name="image" placeholder="" value="{{$updatestatus == true? $staffdata->image: ''}}">
                    </div>       
                <div class="group-submit">
                    <button class="can-btn" >Cancel</button>
                    <button type="submit" class="btn" name="login">{{$updatestatus == true? 'Update': 'Register'}}</button>
                </div>
             </form>

                </div>
        </div>
   


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection