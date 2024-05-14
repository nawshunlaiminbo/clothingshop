@extends('layouts.customerlayout')
@section('title','LogIn')
@section('content')

    <div class="container grid">
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
            <img src="/images/Background-image.png" alt="">
        </div>
    </div>
@endsection
