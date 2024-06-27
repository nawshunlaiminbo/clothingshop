@extends('layouts.adminlayout')
@section('title','Home')
@section('js')
<script src="{{asset('js/admin/show_hide_password.js')}}"></script>
@endsection
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="background_image">
        <div class="flex_row">
            <form action="{{route('adminloginprocess')}}" method="POST" class="flex_col">
                @csrf
                <h2>Bravis</h2>
                <p>ADMIN PANEL</p>
                <p>Control panel login</p>
                <input type="hidden" name="usertype" value="admin"/>
                <div class="login_form">
                    <div class="form-col">
                        
                        <i class="fas fa-user"></i>
                        <input type="email" name="email"placeholder="admin">
                    </div>
                    <div class="form-col">
                        <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="form-col">
                        <button type="submit" class="login_btn">Login</button>
                    </div>
                </div>
                
                </form>
        </div>
    </div>

@endsection