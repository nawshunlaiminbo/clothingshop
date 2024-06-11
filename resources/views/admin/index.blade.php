@extends('layouts.adminlayout')
@section('title','Dashboard')
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
                    <i class="fa-solid fa-bag-shopping"></i>
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
<<<<<<< Updated upstream
    <div class="header flex_row">
        <div class="flex_row name">
            <i class="fa-regular fa-bell" style="font-size:25px"></i><br>
            <i class="fa-regular fa-message" style="font-size:25px"></i>
        </div>
        <div class="user_profile">
            <p>{{auth('admin')->user()->name}}</p>
                    <div class="img-col">
                        {{-- <img src="{{asset('image/admin/piano.jpg')}}" alt="userphoto"> --}}
                        <img src="{{asset('image/admin/'.auth('admin')->user()->image)}}" width="50" height="60" style="object-fit:cover" alt="userphoto">
                    </div>
            </div>     
    </div>
    <!-- user Profile Info -->
    <div class="user_profile_info">
           <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
           <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
    </div>
    <div class="main">
        <div class="session1 grid">
            <div class="total_earnings">
                <p>Total Earnings</p>
                <p>K 45900000</p>
            </div>
            <div class="total_expenses">
                <p>Total Expenses</p>
                <p>K 1520000</p>
            </div>
            <div class="clients">
                <p>Clients</p>
                <p>8925</p>
            </div>
            <div class="page_visitors">
                <p>Page Visitors</p>
                <p>135000</p>
            </div>
        </div>
       
        <div class="dashboard-session2 grid">
            <div class="total_order flex_row" style="margin: 20px;">
                <img src="{{ asset("/image/admin/icon/Total Order.svg") }}" alt="">
                <div>
                    <p>Total Order</p>
                    <p>500</p>
=======
    <div class="main-container">
        <div class="col-con">
            <div class="header-col">
                <div class="flex_row icons">
                    <i class="fa-regular fa-bell" style="font-size:25px"></i><br>
                    <i class="fa-regular fa-message" style="font-size:25px"></i>
>>>>>>> Stashed changes
                </div>
                <div class="user_profile">
                    <p>Jhon Min</p>
                    <div class="img-col">
                        <img src="{{asset('image/admin/piano.jpg')}}" alt="userphoto">
                    </div>
                 
                </div> 
                
            </div>
        </div>

        <div class="main-col">
           <div class="dashbord-container">
            <h1>Dashboard</h1>
           </div>

        </div>
    </div>
</div>



<!-- script -->
<script src="/js/user_profile_info_popup.js"></script>
<script type="text/javascript" src="/js/pie_chart.js"></script>
<script src="/js/bar_chart.js"></script>
@endsection