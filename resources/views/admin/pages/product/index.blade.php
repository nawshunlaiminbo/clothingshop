@extends('layouts.adminlayout')
@section('title','Home')
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
                    <i class="fa-solid fa-users"></i>
                    <p class="nav_text">Category</p>
                </div>
            </a>
            <a href="{{url('/customer/list')}}" target="_self">
                <div class="flex_row">
                    <i class="fa-solid fa-users"></i>
                    <p class="nav_text">CustomerList</p>
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
                <img src="{{asset('image/admin/piano.jpg')}}" alt="userphoto">

        </div> 
            
        </div>
        <!-- user Profile Info -->
        <div class="user_profile_info">
            <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
     </div>

        <div class="main">
            <div class="session1 flex_row">
                <h3>Products</h3>
                <a href="{{route('ProductRegister')}}">+ Add Product</a>
            </div>
            <div class="session2">
                <div class="grid">
                    <input type="text" placeholder="Search">
                    <select name="category" id="">
                        <option value="">Category</option>
                    </select>
                    <input type="text" placeholder="Price">
                    <div class="buttons flex_row">
                        <button class="filter_button">Filter</button>
                        <button class="reset_button">Reset</button>
                    </div>
                </div>
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
                        <tr>
                            <td colspan="2" class="last_row_left">
                                <div class="page_info">
                                    Showing 1-7 of 50
                                </div>
                            </td>
                            <td colspan="3" class="last_row_right">
                                <div class="pagination">
                                    <a href="#">&laquo;</a>
                                    <a class="active" href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#">6</a>
                                    <a href="#">7</a>
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

@endsection