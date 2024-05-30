@extends('layouts.adminlayout')
@section('title','Home')
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
            <a href="{{url('/admin/customer/list')}}" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-users"></i>
                    <p class="nav_text">Customer</p>
                </div>
            </a>
            <a href="{{url('/order/list')}}" target="_self">
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
            <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
        </div>

        <div class="main">
            <h4><b>Add Staff</b></h4>
            <p>Add your staff necessary information here</p>
            {{-- <div class="add_staff_form"> --}}
                {{-- <div class="grid"> --}}

             <form action="{{ route('adminRegisterProcess') }}" method="POST" class="add_staff_form" enctype="multipart/form-data" >
                <div class="group-title">
                            
                    @csrf
                    <input type="hidden" name="id">
                </div>
                <div class="group-col">
                    <div>Name</div>
                    <input type="text"  name ="name" placeholder="Staff Name" value="">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="group-col">
                    <div>Email</div>
                    <input type="email" value="" name="email" placeholder="Email">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="group-col">
                    <div>Password</div>
                    <input type="password" value="" name="password" placeholder="Password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="group-col">
                    <div>Phone Number</div>
                    <input type="text" value="" placeholder="Phone Number" name="phone">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="group-col">
                    <div>Address</div>
                    <textarea placeholder="Address" name="address"></textarea>
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="group-col-role">
                    <label for="role">Staff Position:</label>
                        <select name="role">
                            <option value="roleid" selected>Select Role Name...</option>
                           @foreach($role as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                        </select>
                        @error('role')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>     
                <div class="group-col-photo">
                    <label for="image">Profile Photo</label>
                    <input type="file" class="image" name="image" id="image"> 
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>  
                <div class="group-submit">
                    <button class="can-btn">Cancel</button> 
                    <button type="submit" class="btn" name="register">Add</button>
                </div>
                </form>
            </div>  
                     {{-- <a href="{{route('/admin/register/')}}">Add</a> --}}
                
            
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection