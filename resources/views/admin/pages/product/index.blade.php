@extends('layouts.adminlayout')
@section('title','Produuct List')
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
                        {{-- <img src="{{asset('image/admin/piano.jpg')}}" alt="userphoto"> --}}
                        <img src="{{asset('image/admin/'.auth('admin')->user()->image)}}" width="50" height="60" style="object-fit:cover" alt="userphoto">
                    </div>
                 </div> 
                
            </div>
        </div>
            <!-- user Profile Info -->
        {{-- <div class="user_profile_info">
            <a href=""><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="/{{url('/admin/logout')}}">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
        </div> --}}
        <div class="main-col">
            <div class="inner-col">
               
                <div class="session_1 flex_row">
                    <h3>Products</h3>
                    <a href="{{route('ProductRegister')}}">+ Add Product</a>
                </div>
                <div class="session2">
                    <form action="{{route('ProductFilter')}}" method="GET" >
                    @csrf
                    <div class="max-search">
                        <input type="text" placeholder="Search By Product Name" name="name">
                       
                        {{-- <select name="category" id="category">
                            <option value="category">Category</option>
                             @foreach($categories as $value)
                             <option value="{{$value->id}}">{{$value->name}}</option>
                             @endforeach
                        </select> --}}
                        <select name="category" id="category">
                            <option value="">Select Category</option>
                            @foreach($categories as $value)
                                <option value="{{ $value->id }}" {{ request('category') == $value->id ? 'selected' : '' }}>
                                    {{ $value->name }}
                                </option>
                            @endforeach
                        </select>
                        
                        <input type="text" name="min_price" placeholder="Min Price">
                        <input type="text" name="max_price" placeholder="Max Price">

                        <div class="filter-col">
                            <div class="inner-fil-col">
                                <button class="filter_button" type="submit">Filter</button>
                            </div>
                           <div class="reset-col">
                            <a href="{{route('ProductList')}}" class="reset_button" style="color:white">Reset</a>
                           </div>
                        </div>

                    </div>
                       
                    
                </form>
                </div>
                <div class="session3">
                    <div style="overflow-x: auto;">
                        <table>
                            <tr>
                                <th class="first_title">Product</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th class="last_title">Action</th>
                            </tr>
                            <tr>
                                {{-- @dd($productlist); --}}
                             @foreach($productlist as $value)
                             <td>
                                <div class="flex_row product_image">
                                    <img src="{{asset('image/admin/products_info/'.$value->colorimage)}}" alt="photo of {{$value->name}}" width="35px" height="35px">
                                    <p>{{$value->name}}</p>
                                </div>
                            </td>
    
                                <td>{{$value->category_name}}</td>
                                <td>{{$value->brand}}</td>
                                <td>{{$value->price}}</td>
                                <td>
                                    <div class="sizes flex_row">
                                        <p>S-{{$value->small_qty}}/{{$value->small_qty+$value->medium_qty+$value->large_qty}}</p>
                                        <p>M-{{$value->small_qty}}/{{$value->small_qty+$value->medium_qty+$value->large_qty}}</p>
                                        <p>L-{{$value->small_qty}}/{{$value->small_qty+$value->medium_qty+$value->large_qty}}</p>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{url('/product/listedit/'.$value->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                   <a href="{{url('/product/deleteprocess/'.$value->id)}}"><i class="fa-regular fa-trash-can"></i></a> 
                                </td>
                              
                            </tr>
                            @endforeach
        
                            <!-- last -->
                           
                        </table>
                    </div>
    
                   
                </div>
                <div class="Pagination">
                    {{$productlist->links('pagination::bootstrap-4')}}
                </div>
          
        </div>
   
    </div>
</div>

        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection