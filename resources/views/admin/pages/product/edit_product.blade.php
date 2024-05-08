@extends('layouts.adminlayout')
@section('title','Home')
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
            <a href="/pages/customer/index.html" target="_self">
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
            <h3>Edit product</h3>
            <p>Edit your product and necessary information here</p>
            <div class="edit_product_form">
                <h3>
                   Basic Information
                </h3>
                <div class="edit_product_grid grid">
                    <div>Product Title/Name</div>
                    <input type="text" placeholder="Polo Brown">

                    <div>Product Description</div>
                    <img src="/image/summbernote.png" alt="" style="width: 100%; height: 150px;">

                    <div>Product image</div>
                    <img src="/image/file_drag.png" alt="" style="width: 100%; height: 150px;">

                    <div>Category</div>
                    <div>
                        <select name="" id="">
                            <option value="">Men</option>
                        </select><br><br>
                        <select name="" id="">
                            <option value="">Men Shirt</option>
                        </select>
                    </div>

                    <div>Product Price</div>
                    <div class="product_price flex_row">
                        <div>MMK</div>
                        <input type="text" placeholder="53,450MMK">
                    </div>
                    <div>Product Quantity</div>
                    <input type="text" placeholder="20">
                    <div>Size</div>
                    <div class="size flex_row">
                        <input type="checkbox" checked>S
                        <input type="checkbox">M
                        <input type="checkbox">L
                        <input type="checkbox" checked>XL
                        <input type="checkbox">XXL
                    </div>
                    <button class="buttons">Cancel</button>
                    <button class="buttons">Add Product</button>
                </div>
                   
            </div>
        </div>
    </div>
    

    <!-- script -->
    <script src="/js/user_profile_info_popup.js"></script>

    <!-- scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

@endsection