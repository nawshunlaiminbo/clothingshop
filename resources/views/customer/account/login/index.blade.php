@extends('layouts.customerlayout')
@section('title','LogIn')
@section('content')

    <div class="container grid">
        <div class="text">
            <h1>Welcome Back!</h1>
            <p>Sign In and Get 25% on selected items</p>
            <div class="flex_row">
                <form action="">
                    <h1>Sign In Here</h1>
                    <input type="Email" placeholder="Email Address"><br>
                    <input type="password" placeholder="Password"><br>
                    <a href="/index.html" class="login_button button2">Login</a>
                    <p>Don’t have an account? <a href="../signup/index.html">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="image">
            <img src="/images/Background-image.png" alt="">
        </div>
    </div>
@endsection
