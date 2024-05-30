@extends('layouts.adminlayout')
@section('title','Home')
@section('adminbody')

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
        <a href="/pages/customer/index.html" target="_self">
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
        </div>
        
    </div>
    <!-- user Profile Info -->
    <div class="user_profile_info">
        <a href=""><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
        <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
 </div>

    <div class="main">
        <h3>Order</h3>
        <div class="session1">
            <div class="grid">
                <div class="flex_col">
                    <small>Order Start Date</small>
                    <input type="date">
                </div>
                <div class="flex_col">
                    <small>Order End Date</small>
                    <input type="date">
                </div>
                <div>
                    <input type="text" placeholder="Search">
                </div>
                <div>
                    <button>Search</button>
                </div>
            </div>
        </div>
        <div class="session3">
            <div style="overflow-x: auto;">
                <table>
                    <tr>
                        <th class="first_title">Order ID</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Payment info</th>
                        <th class="last_title">Status</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_cancelled">Cancelled</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Delivered</div></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_cancelled">Cancelled</div></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_pending">Pending</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Delivered</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Delivered</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Processing</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Delivered</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Delivered</div></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Sweater</td>
                        <td>Aung Kyaw</td>
                        <td>53,000MMK</td>
                        <td>13/2/23</td>
                        <td>Debit Card</td>
                        <td><div class="status status_complete">Processing</div></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="last_row_left">
                            <div class="page_info">
                                Showing 1-10 of 30
                            </div>
                        </td>
                        <td colspan="5" class="last_row_right">
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a class="active" href="#">1</a>
                                <a href="#">&raquo;</a>
                            </div>
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>


    <!-- script -->
    <script src="/js/user_profile_info_popup.js"></script>
