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
            <div class="title-col">
                <h4><b>Add staff</b></h4>
                <p>Add your staff necessary information here</p>

            </div>
            <div class="form-col">
                <form class="add_product_form" action="{{route('ProductRegisterProcess')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>
                       Basic Information
                    </h3>
                 <div class="group-col">
                    <div class="label-title">Product Title/Name</div>
                    <div class="form-input">
                        <input type="text" placeholder="Product Title/Name" name="name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
    
                <div class="group-col">
                    <div class="label-title">Product Description</div>
                    <div class="form-input">
                        <textarea placeholder="Product Description" name="description"></textarea>
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="group-col">
                    <div class="label-title">Product image</div>
                    <div class="form-input">
                        <input type="file" name="image">
                    </div>
                </div>

                <div class="group-col">
                    <div class="label-title">Brand Name</div>
                    <div class="form-input">
                        <select name="brand">
                         <option value="brand" selected>Select Brand Name...</option>
                            @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->brand_name}}</option>
                            @endforeach
                         </select>
                         @error('brand')
                            <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                </div> 
            
                <div class="group-col">
                    <div class="label-title">Category<</div>
                    <div class="form-input">
                        <select name="category">
                            <option value="category" selected>Select Category...</option>
                                 @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                 @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                 </div> 
    
                 <div class="group-col">
                    <div class="label-title">Gender<</div>
                    <div class="form-input">
                        <select name="gender">
                            <option value="gender" selected>Select Gender...</option>
                            <option value="Male" selected>Male</option>
                            <option value="Female" selected>Female</option>
                            <option value="Unisex" selected>Unisex</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                </div> 

                <div class="group-col">
                    <div class="label-title">Product Price</div>
                    <div class="form-input">
                        <input type="number" name="price" placeholder="MMK">
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
    
                <div class="group-col">
                    <div>Size</div>
                    <div class="size-col">
                       <div class="inner-size">
                        <label><b>S Size</b></label>
                        <input type="number" name="s">
                            @error('s')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                       </div>
                       <div class="inner-size">
                            <label><b>M Size</b></label>
                            <input type="number" name="m">
                            @error('m')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                       </div>
                       <div class="inner-size">
                            <label><b>L Size</b></label>
                            <input type="number" name="l">
                            @error('l')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                       </div>
    
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


            </div>
    
        </div>
    </div>
    

    
    </div>
    
    <!-- script -->
    <script src="/js/user_profile_info_popup.js"></script>

    <!-- scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

 @endsection