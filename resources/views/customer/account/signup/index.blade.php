@extends('layouts.customerlayout')
@section('title','SignUp')
@section('content')

    <div class="container-signup">
       <div><h1>Create Account</h1></div> 
        <div class="signup-form">
            <form action="{{route('CustomerRegisterProcess')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id">
                <label for="name">Full Name</label>
                <div class="flex_row_name">
                    <input type="text" id="fname" placeholder="First Name"  name="firstname">
                    @error('firstname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" id="lname" placeholder="Last Name"  name="lastname">
                    @error('lastname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="birthday">Date of Birth</label>
                @error('date_of_birth')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <input type="date" name="date_of_birth">
               
                <label for="email">Email</label>
                <input type="email" placeholder="Email"  name="email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
               
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <label for="phone">Phone Number</label>
                <input type="integer" placeholder="Phone Number" name="phone">
                 @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <label for="location">Location</label>
                <input type="text" placeholder="Address" name="address"><br>
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="flex_row_name">
                    
                    <input type="text" placeholder="State/Region" name="state">
                    @error('state')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" placeholder="Zip Code (Eg. 1111)" name="zipcode">
                    @error('zipcode')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <label for="image">Image</label>
                <input type="file" name="image">
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <div class="sign_up flex_row">
                    <button type="submit" name="register">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- script -->
    <script src="/js/show_hide_password.js"></script>

@endsection