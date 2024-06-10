@extends('layouts.adminlayout')
@section('title','Home')
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
            <a href="{{url('/admin/customer/list/')}}" target="_self">
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Customer</p>
                    </div>
                </div>
            </a>
            <a href="{{url('/order/list')}}" target="_self">
                <div class="nav_row">
                    <div class="nav-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="nav-title">
                        <p class="nav_text">Order</p>
                    </div>
                   
                 
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
     <!-- user Profile Info -->
    <div class="user_profile_info">
        <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
        <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
    </div>
                </div>
        </div>
            <div class="main-col">
                <div class="title-col">
                    <h4><b>Add Category</b></h4>
                    <p>Add your category necessary information here</p>
    
                </div>
                <div class="form-col">
                  
                    <form action="{{route('CategoryRegisterProcess')}}" method="POST" class="add_category_form" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="id">
                        {{-- <input type="hidden" name="admin_id"> --}}
                        <div class="group-col">
                            <div class="label-title">Category Name</div>
                            <div class="form-input">
                                <input type="text"  name ="name" placeholder="Category Name" value="">
                                @error('name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="group-submit">
                            <div class="can-col">
                                <button class="can-btn">Cancel</button> 
                            </div>
                            <div class="sub-col">
                                <button type="submit" class="sub-btn" name="register">Add</button>
                            </div>
                         
                        </div>
                    </form>
                        {{-- <a href="{{route('/admin/register/')}}">Add</a> --}}
                    
                </div>
                  
            </div>
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection