@extends('layouts.adminlayout')
@section('title','Home')

@php
$updatestatus = false;
if(isset($staffdata)){
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
                    <!-- user Profile Info -->
            <div class="user_profile_info">
                <a href="{{url('/admin/listedit/'.auth('admin')->user()->id)}}"><i class="fa-solid fa-gear"></i>Edit Profile</a><br>
                <a href="{{url('/admin/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
         </div>
                </div>
            </div>
        <div class="main-col">
            <div class="title-col">
                <h4><b>Update Staff</b></h4>
                <p>Update your staff necessary information here</p>

            </div>
            <div class="form-col">
                <form action="{{$updatestatus == true? route('AdminRegisterUpdateProcess'):route('ListEdit',$staffdata->id)}}"method="POST" enctype="multipart/form-data" class="update_staff_form">
                    {{-- <div class="group-title"> --}}
                       @csrf
                       @if($updatestatus == true)
                       @method('PATCH')
                       @endif 
                       <input type="hidden" name="id" value="{{$updatestatus = true? $staffdata->id: ''}}">
                       {{-- <h1>{{$updatestatus == true ? 'Staff Edit Form' : 'Create Account'}}</h1> --}}
                    {{-- </div> --}}
   
                    <div class="group-col">
                        <div class="label-title"> Name</div>
                        <div class="form-input">
                            <input type="text" name="name" value="{{$updatestatus == true? $staffdata->name: ''}}" placeholder="Name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                   </div>
                   <div class="group-col">
                    <div class="label-title"> Email</div>
                    <div class="form-input">
                       <input type="email" name="email" value="{{$updatestatus == true? $staffdata->email: ''}}" placeholder="Email">
                       @error('email')
                       <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                   </div>
                   <div class="group-col">
                       <div class="label-title"> Password</div>
                       <div class="form-input">
                            <input type="password" name="password" value="{{$updatestatus == true? $staffdata->password: ''}}">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                                @enderror
                       </div>
                   </div>
                   <div class="group-col">
                       <div class="label-title"> Phone Number</div>
                       <div class="form-input">
                            <input type="text" name="phone" placeholder="Phone Number" value="{{$updatestatus == true? $staffdata->phone: ''}}">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                       </div>
                   </div>
                   <div class="group-col">
                       <div class="label-title"> Address</div>
                       <div class="form-input">
                            <input type="text" name="address" placeholder="Address" value="{{$updatestatus == true? $staffdata->address: ''}}">
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                             @enderror
                       </div>
                   </div>
                       <div class="group-col">
                        <div class="label-title"> Staff Position</div>
                        <div class="form-input">
                            <select name="role" {{$updatestatus == true ? 'disabled': ''}}>
                                <option value="roleid" selected>Select Role Name...</option>
                                @foreach($role as $value)
                                <option value="{{$value->id}}" >{{$value->name}}<option>
                                @endforeach
                            </select>
                            @error('role')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       </div> 
                       <div class="group-col">
                           <div class="label-title">Profile Photo</div>
                           <div class="form-input">
                                <input type="file" name="image" placeholder="" value="{{$updatestatus == true? $staffdata->image: ''}}">
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                           </div>
                       </div>       
                       <div class="group-submit">
                        <div class="can-col">
                            <a class="can-btn" href="{{url('/category/list')}}">Cancel</a> 
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

@endsection