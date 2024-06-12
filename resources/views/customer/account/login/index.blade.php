@extends('layouts.customerlogin')
@section('title','LogIn')
@section('content')

    <div class="container">
        
        <div class="text">
            <h1>Welcome Back!</h1>
            <p>Sign In and Get 25% on selected items</p>
            <div class="flex_row">
                <form action="{{route('CustomerLoginProcess')}}" method="POST">
                    @csrf
                    <input type="hidden" name="usertype" value="customer">
                    <h1>Sign In Here</h1> 
                    <input type="Email" placeholder="Email Address" name="email"><br>
                    <input type="password" placeholder="Password" name="password"><br>
                    <button type="submit" class="login_button button2">Login</button>
                    <p>Don’t have an account? <a href="{{route('register')}}">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="image">
            <img src="/image/customer/Background-image.png" alt="">
        </div>
    </div>
@endsection
