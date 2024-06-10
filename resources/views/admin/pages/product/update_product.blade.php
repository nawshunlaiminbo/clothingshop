@extends('layouts.adminlayout')
@section('title','Product Update')
@php
$updatestatus = false;
if(isset($productdata)){
    $updatestatus = true;
}
@endphp

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
                </div>
            </div>
        <div class="main-col">
            <div class="title-col">
                <h3>Edit product</h3>
            <p>Edit your product and necessary information here</p>
            </div>
            <div class="form-col">
                <form action="{{$updatestatus == true? route('ProductRegisterUpdateProcess'):route('ProductListEdit',$productdata->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($updatestatus == true)
                    @method('PATCH')
                    @endif
                    <input type="hidden" name="id" value="{{$updatestatus == true? $productdata->id: ''}}">
                    <div class="group-col">
                        <div class="label-title"> Product Title/Name</div>
                        <div class="form-input">
                            <input type="text" name="name" placeholder="Polo Brown" value="{{$updatestatus == true? $productdata->name: ''}}">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                   </div>
                   <div class="group-col">
                    <div class="label-title"> Product Description</div>
                    <div class="form-input">
                        <textarea placeholder="Product Description" name="description" > {{$updatestatus == true? $productdata->description: ''}}</textarea>
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                         @enderror
                   </div>
                </div>
                   <div class="group-col">
                       <div class="label-title"> Product image</div>
                       <div class="form-input">
                        <input type="file" name="image" value="{{$updatestatus == true? asset('image/admin/products_info/'.$productdata->colorimage): ''}}">
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                       </div>
                   </div>
                   <div class="group-col">
                       <div class="label-title">Brand Name</div>
                       <div class="form-input">
                            <select name="brand">
                                {{-- <option value="brand" selected>Select Brand Name...</option> --}}
                                @foreach($suppliers as $supplier)
                                <option value="{{$updatestatus == true? $supplier->id: ''}}">{{$supplier->brand_name}}</option>
                                @endforeach
                                </select>
                                @error('brand')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                       </div>
                   </div>
                   <div class="group-col">
                       <div class="label-title"> Category</div>
                       <div class="form-input">
                        <select name="category">
                            {{-- <option value="category" selected>Select Category...</option> --}}
                            @foreach($categories as $category)
                               <option value="{{$updatestatus == true? $category->id: ''}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                       </div>
                   </div>
                       <div class="group-col">
                        <div class="label-title">Gender</div>
                        <div class="form-input">
                            <select name="gender">
                                <option value="{{$updatestatus == true? $productdata->gender: ''}}" selected>{{$productdata->gender}}</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="unisex">Unisex</</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       </div> 
                       <div class="group-col">
                           <div class="label-title">Product Price</div>
                           <div class="form-input">
                            <input type="number" name="price" placeholder="MMK" value="{{$updatestatus == true? $productdata->price: ''}}" >
                            @error('price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                           </div>
                       </div> 
                       <div class="group-col">
                        <div>Size</div>
                            <div class="size-col">
                                    <div class="inner-size">
                                        <label><b>S</b></label>
                                        <input type="number" name="s" value="{{$updatestatus == true? $productdata->small_qty: ''}}">
                                        @error('s')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                              
                                    <div class="inner-size">
                                        <label><b>M</b></label>
                                        <input type="number" name="m" value="{{$updatestatus == true? $productdata->medium_qty: ''}}">
                                        @error('m')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                              
                            
                                    <div class="inner-size">
                                        <label><b>L</b></label>
                                        <input type="number" name="l" value="{{$updatestatus == true? $productdata->large_qty: ''}}">
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
                       <button type="submit" class="sub-btn" name="login">{{$updatestatus == true? 'Update': 'Register'}}</button>
                    </div>
                         
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