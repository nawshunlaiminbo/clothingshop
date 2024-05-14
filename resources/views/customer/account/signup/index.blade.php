@extends('layouts.adminlayout')
@section('title','SignUp')
@section('content')

    <div class="container">
        <h1>Create Account</h1>
        <div class="flex_row">
            <form action="{{route('CustomerRegisterProcess')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id">
                <label for="name">First Name</label>
                <div class="flex_row">
                    <input type="text" id="fname" placeholder="First Name" required name="firstname">
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
                <label for="image">Image</label>
                <input type="file" name="image"><br>
                <div class="sign_up flex_row">
                    <button type="submit" name="register">Sign Up</button>
    
            </form>
        </div>
    </div>
    
    <!-- script -->
    <script src="/js/show_hide_password.js"></script>

@endsection