@extends('layouts.adminlayout')
@section('title','SignUp')
@section('content')

    <div class="container">
        <h1>Create Account</h1>
        <div class="flex_row">
            <form action="">
                <label for="name">Full Name</label>
               
                <div class="flex_row">
                    <input type="text" id="fname" placeholder="First Name" required name="fullname">
                    <input type="text" id="lname" placeholder="Last Name" required name="lastname">
                </div>
                <br>
                <label for="birthday">Date of Birth</label>
                <input type="date" name="date_of_birth">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" required name="email">
               
                <label for="password">Password</label>
                <input type="password" placeholder="Password" required name="password">
                
                <label for="phone">Phone Number</label>
                <input type="integer" placeholder="Phone Number" required name="phone">
                
                <label for="location">Location</label>
                <input type="text" placeholder="Address" name="address"><br>
                {{-- <div class="flex_row">
                    <label></label>
                    <input type="text" placeholder="State/Region"><input type="text" placeholder="Zip Code (Eg. 1111)">
                </div> --}}
                <br>
                <div class="sign_up flex_row">
                    <a href="../login/index.html" class="button2">Sign Up</a>
                </div>
    
            </form>
        </div>
    </div>
    
    <!-- script -->
    <script src="/js/show_hide_password.js"></script>

@endsection