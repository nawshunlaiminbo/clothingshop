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
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p class="nav_text">Category</p>
                </div>
            </a>
            <a href="{{url('/admin/customer/list')}}" target="_self">
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
                <img src="{{asset('image/admin/piano.jpg')}}" alt="userphoto">

        </div> 
            
        </div>
        <!-- user Profile Info -->
        <div class="user_profile_info">
            <a href=""><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
            <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
     </div>

        <div class="main">
            <h3>All Customers</h3>
            <div class="session1">
                <form action="{{route('AdminCustomerFilter')}}" method="GET" class="grid">
                    @csrf
                    <div class="search-box">
                        <input type="text" placeholder="Search By ID/Name/Email/Phone Number" name="search">
                    </div>
                    
                    <div class="flex_row">
                        <button class="search_button" type="submit">Search</button>
                        <button class="reset_button" type="submit">Reset</button>
                    </div>
                </form>
            </div>
            <div class="session3">
                <div style="overflow-x: auto;">
                    <table>
                        <tr>
                            <th class="first_title">ID</th>
                            <th>Customer's Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th class="last_title">Action</th>
                        </tr>
                        @foreach ($customerlist as $value)
                        <tr>
                            {{-- {{dd($customerlist)}}; --}}
                            
                            
                            <td>{{$value->id}}</td>
                            <td>{{$value->firstname}} {{$value->lastname}}</td>
                    
                            <td>{{$value->email}}</td>
                            <td>{{$value->phone}}</td>
                            <td>
                                {{-- <a href="{{url('/admin/customer/listedit/'.$value->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                               <a href="{{url('/admin/customer/deleteprocess/'.$value->id)}}"> <i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @endforeach
                         
                       
                        {{-- <tr>
                            <td colspan="2" class="last_row_left">
                                <div class="page_info">
                                    Showing 1-3 of 30
                                </div>
                            </td>
                            <td colspan="3" class="last_row_right">
                                <div class="pagination">
                                    <a href="#">&laquo;</a>
                                    <a class="active" href="#">1</a>
                                    <a href="#">&raquo;</a>
                                </div>
                            </td>
                        </tr> --}}
                    </table>
                </div>
            </div>

            <div class="Pagination">
                {{$customerlist->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection
