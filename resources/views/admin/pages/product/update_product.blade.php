@extends('layouts.adminlayout')
@section('title','Home')
@php
$updatestatus = false;
if(isset($productdata)){
    $updatestatus = true;
}
@endphp

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
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p class="nav_text">Category</p>
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
            
            <a href="{{url('/admin/list')}}"  target="_self">
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
                <img src="/image/icon/bell.svg" alt="">
                <img src="/image/icon/msg.svg" alt="">
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
            <h3>Edit product</h3>
            <p>Edit your product and necessary information here</p>
            <div class="edit_product_form">
                <h3>
                   Basic Information
                </h3>
                <form action="{{$updatestatus == true? route('ProductRegisterUpdateProcess'):route('ProductListEdit',$productdata->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($updatestatus == true)
                    @method('PATCH')
                    @endif
                    <input type="hidden" name="id" value="{{$updatestatus == true? $productdata->id: ''}}">
                <div class="edit_product_grid grid">
                    <div>Product Title/Name</div>
                    <input type="text" name="name" placeholder="Polo Brown" value="{{$updatestatus == true? $productdata->name: ''}}">

                    <div class="add_product_grid grid">
                        <div>Product Description</div>
                        <textarea placeholder="Product Description" name="description" > {{$updatestatus == true? $productdata->description: ''}}</textarea>
                    </div>
                    <div class="add_product_grid grid">
                        <div>Product image</div>
                                <input type="file" name="image" value="{{$updatestatus == true? $productdata->colorimage: ''}}">
                        </div>
                        <div class="add_product_grid grid">
                              <label for="brand">Brand Name</label>
                                <select name="brand">
                                 {{-- <option value="brand" selected>Select Brand Name...</option> --}}
                                    @foreach($suppliers as $supplier)
                                    <option value="{{$updatestatus == true? $supplier->id: ''}}">{{$supplier->brand_name}}</option>
                                    @endforeach
                                 </select>
                        </div> 
                        <div class="add_product_grid grid">
                                <label for="category">Category</label>
                                     <select name="category">
                                         {{-- <option value="category" selected>Select Category...</option> --}}
                                         @foreach($categories as $category)
                                            <option value="{{$updatestatus == true? $category->id: ''}}">{{$category->name}}</option>
                                         @endforeach
                                    </select>
                         </div> 
            
                        <div class="add_product_grid grid">
                                <label for="gender">Gender</label>
                                    <select name="gender">
                                        <option value="{{$updatestatus == true? $productdata->gender: ''}}" selected>{{$productdata->gender}}</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="unisex">Unisex</</option>
                                    </select>
                        </div> 
                        <div class="add_product_grid grid">
                            <div>Product Price</div>
                                <input type="number" name="price" placeholder="MMK" value="{{$updatestatus == true? $productdata->price: ''}}" >
                         
                        </div>
            
                        <div class="add_product_grid grid">
                            <div>Size</div>
                            <div class="size flex_row">
                               <div>
                                <label><b>S</b></label>
                                <input type="number" name="s" value="{{$updatestatus == true? $productdata->small_qty: ''}}">
                               </div>
                               <div>
                                <label><b>M</b></label>
                                <input type="number" name="m" value="{{$updatestatus == true? $productdata->medium_qty: ''}}">
                               </div>
                               <div>
                                <label><b>L</b></label>
                                <input type="number" name="l" value="{{$updatestatus == true? $productdata->large_qty: ''}}">
                               </div>
                            </div>
                        </div>
                    <button class="buttons" type="submit">Cancel</button>
                    <button class="buttons" type="submit" name="login" >{{$updatestatus == true? 'Update':'Add'}}</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    

    <!-- script -->
    <script src="/js/user_profile_info_popup.js"></script>

    <!-- scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

@endsection