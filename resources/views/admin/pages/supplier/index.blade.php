@extends('layouts.adminlayout')
    @section('title','Home')
    @section('content')
    {{-- {{dd($stafflist)}} --}}
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
                <a href="/pages/order/index.html" target="_self">
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
                    <!-- user Profile Info -->
                <div class="user_profile_info">
                    <a href=""><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
                    <a href="/{{url('/admin/logout')}}">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
                </div>
                <div class="main-col">
                    <div class="inner-col">
                        <div class="session_1 flex_row">
                            <h3>Suppliers</h3>
                            <a href="{{url('/supplier/register')}}">+ Add Supplier</a>
                        </div>
                        <div class="session2">
                            <form action="{{route('SupplierFilter')}}" method="post">
                                @csrf
                            <div class="grid">
                                <input type="text" placeholder="Search By Supplier Name" name="name">
                                <select name="brand_name" >
                                    <option value="brand_name">Search By Brand Name..</option>
                                    @foreach($brandlist as $value)
                                    <option value="{{$value->brandname}}">{{$value->brandname}}</option>
                                    @endforeach
                                </select>
                                <button type="submit">Search</button>
                            </div>
                            </form>
                        </div>
                    </div>
                  
                    <div class="session3">
                        <div style="overflow-x: auto;">
                            <table>
                                <tr>
                                    <th class="first_title">Supplier</th>
                                    <th>Brand</th>
                                    <th class="last_title">Action</th>
                                </tr>
                                <tr>
                                    @foreach($supplierlist as $value)
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->brand_name}}</td>
                                    <td>
                                        <a href="{{url('/supplier/listedit/'.$value->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{url('/supplier/deleteprocess/'.$value->id)}}"><i class="fa-regular fa-trash-can"></i></a>
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
                        {{$supplierlist->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
    
            
          
    
        </div>
    
    
        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection