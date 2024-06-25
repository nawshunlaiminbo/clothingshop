@extends('layouts.adminlayout')
@section('title','Dashboard')
@section('content')

<div class="admin-session">
    <div class="nav-col flex_col">
        <h1 class="nav_text">Bravis</h1>
        <div class="side-menu-main">
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
    </div>
    <div class="main-container">
        <div class="col-con">
            <div class="header-col">
                <div class="flex_row icons">
                    <i class="fa-regular fa-bell" style="font-size:25px"></i><br>
                    <i class="fa-regular fa-message" style="font-size:25px"></i>
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
                <div class="grid1">
                    <div class="earnings">
                        <small>Total Earnings</small>
                        <p>K 50000</p>
                    </div>
                    <div class="expenses">
                        <small>Total Expense</small>
                        <p>K 100000</p>
                    </div>
                    <div class="clients">
                        <small>Clients</small>
                        <p>3000</p>
                    </div>
                    <div class="visitors">
                        <small>Page Visitors</small>
                        <p>135000</p>
                    </div>
                </div>
                <div class="grid2">
                    <div class="box1">
                        <div class="box-icon1">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <div class="box-text">
                            <small>Total Order</small>
                            <p>500</p>
                        </div>
                    </div>
                    <div class="box2">
                        <div class="box-icon2">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="box-text">
                        <small>Order Pending</small>
                        <p>125</p>
                        </div>
                    </div>
                    <div class="box3">
                        <div class="box-icon3">
                            <i class="fa-solid fa-file-invoice"></i>
                        </div>
                        <div class="box-text">
                        <small>Order Processing</small>
                        <p>65</p>
                        </div>
                    </div>
                    <div class="box4">
                        <div class="box-icon4">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="box-text">
                        <small>Order Delivered</small>
                        <p>310</p>
                        </div>
                    </div>
                </div>
                <div class="grid3">
                    <div class="top_selling_products">
                        <div class="products">
                            <h2>Top Selling Products</h2>
                            <div class="product_button">
                                <button class="toggle-btn-active">Men</button>
                                <button class="toggle-btn">Women</button>
                                <button class="toggle-btn">Accessories</button>
                            </div>
                        </div>
                        <div id="piechart" style="width: 100% !important;height:300px;"></div>
                    </div>
                    <div class="sale_statics">
                        <div class="statics">
                            <h2>Sale Statics</h2>
                        </div>
                        <canvas id="myChart" style="width: 100% !important;height: 300px;"></canvas>
                    </div>
                </div>
           </div>

        </div>
    </div>
</div>



<!-- script -->
<script src="/js/admin/user_profile_info_popup.js"></script>
<script type="text/javascript" src="/js/admin/pie_chart.js"></script>
<script src="/js/admin/bar_chart.js"></script>
@endsection