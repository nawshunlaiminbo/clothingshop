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
                  
                    <form action="{{ route('adminRegisterProcess') }}" method="POST" class="add_staff_form" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="id">
                        {{-- <input type="hidden" name="admin_id"> --}}
                        <div class="group-col">
                            <div class="label-title"> Name</div>
                            <div class="form-input">
                                <input type="text"  name ="name" placeholder="Staff Name" value="">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="group-col">
                            <div class="label-title">Email</div>
                            <div class="form-input">
                                <input type="email" value="" name="email" placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                       

                        <div class="group-col">
                            <div class="label-title">Password</div>
                            <div class="form-input">
                                <input type="password" value="" name="password" placeholder="Password">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="group-col">
                            <div class="label-title">Phone Number</div>
                            <div class="form-input">
                                <input type="text" value="" placeholder="Phone Number" name="phone">
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                      
                        </div>

                        <div class="group-col">
                           
                            <div class="label-title">Address</div>
                            <div class="form-input">
                                <textarea placeholder="Address" name="address"></textarea>
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="group-col">
                            <div class="label-title"> 
                                <label for="role">Staff Position:</label>
                            </div>
                            <div class="form-input">
                                <select name="role">
                                    <option value="roleid" selected>Select Role Name...</option>
                                   @foreach($role as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                   @endforeach
                                </select>
                                @error('role')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>     
                    </div>

                        <div class="group-col">
                            <div class="label-title"> 
                                <label for="image">Profile Photo</label>
                            </div>
                            <div class="form-input">
                                <input type="file" class="image" name="image" id="image"> 
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
                  
            </div>  
                    </form>
                        {{-- <a href="{{route('/admin/register/')}}">Add</a> --}}
                    
                </div>
                  
            </div>
        </div>
    </div>


        <!-- script -->
        <script src="/js/user_profile_info_popup.js"></script>

@endsection