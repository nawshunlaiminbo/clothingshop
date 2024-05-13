@extends('layouts.adminlayout')
@section('title','Home')
@section('content')

    <div class="background_image">
        <div class="flex_row">
            <form action="{{route('adminloginprocess')}}" method="POST" class="flex_col">
                @csrf
                <h2>Bravis</h2>
                <p>ADMIN PANEL</p>
                <p>Control panel login</p>
                <input type="hidden" name="usertype" value="admin"/>
                <div class="login_form">
                    <div class="">
                        <img src="/image/icon/staff.svg" alt="">
                        <input type="email" name="email"placeholder="admin">
                    </div>
                    <div>
                        <img src="/image/icon/key.svg" alt="">
                    <input type="password" name="password" placeholder="password">
                    </div>
                </div>
                <br>
                <button type="submit" class="login_btn">Login</button>
            </form>
        </div>
    </div>

@endsection