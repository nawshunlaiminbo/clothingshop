@extends('layouts.adminlayout')
@section('title','Home')
@section('content')

    <div class="session grid">
        <div class="nav flex_col">
            <a href="{{url('/admin/dashbooard')}}" target="_self">
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
            </div>
            
        </div>
        <!-- user Profile Info -->
        <div class="user_profile_info">
            <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
     </div>

        <div class="main">
            <h3><b>Add product</b></h3>
            <p>Add your product and necessary information here</p>
            <form class="add_product_form" action="{{route('ProductRegisterProcess')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>
                   Basic Information
                </h3>
             <div class="add_product_grid grid">
                    <div>Product Title/Name</div>
                    <input type="text" placeholder="Product Title/Name" name="name">
            </div>

            <div class="add_product_grid grid">
                        <div>Product Description</div>
                        <textarea placeholder="Product Description" name="description"></textarea>
            </div>
            <div class="add_product_grid grid">
            <div>Product image</div>
                    <input type="file" name="image">
            </div>
            <div class="add_product_grid grid">
                  <label for="brand">Brand Name</label>
                    <select name="brand">
                     <option value="brand" selected>Select Brand Name...</option>
                        @foreach($suppliers as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->brand_name}}</option>
                        @endforeach
                     </select>
            </div> 
            <div class="add_product_grid grid">
                    <label for="category">Category</label>
                         <select name="category">
                             <option value="category" selected>Select Category...</option>
                             @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                             @endforeach
                        </select>
             </div> 

            <div class="add_product_grid grid">
                    <label for="gender">Gender</label>
                        <select name="gender">
                            <option value="gender" selected>Select Gender...</option>
                            <option value="Male" selected>Male</option>
                            <option value="Female" selected>Female</option>
                            <option value="Unisex" selected>Unisex</option>
                        </select>
            </div> 
            <div class="add_product_grid grid">
                <div>Product Price</div>
                    <input type="number" name="price" placeholder="MMK">
             
            </div>

            <div class="add_product_grid grid">
                <div>Size</div>
                <div class="size flex_row">
                   <div>
                    <label><b>S</b></label>
                    <input type="number" name="s">
                   </div>
                   <div>
                    <label><b>M</b></label>
                    <input type="number" name="m">
                   </div>
                   <div>
                    <label><b>L</b></label>
                    <input type="number" name="l">
                   </div>
                </div>
            </div>
            <div class="add_product_grid grid">
                    <button type ="submit" class="buttons">Cancel</button>
                    <button type ="submit" class="buttons">Add Product</button>
            </div>
                   
            </form>
        </div>
    </div>
    

    <!-- script -->
    <script src="/js/user_profile_info_popup.js"></script>

    <!-- scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

 @endsection