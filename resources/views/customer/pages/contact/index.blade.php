@extends('layouts.customerlayout')
@section('title','Contact')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/contactus.css')}}">
@endsection
@section('content')
    
    <!-- add contact details here -->
    <div class="main">
        <div class="contact">
            <div class="title"><h2>Contact Us</h2></div>
            
            <div class="content">
                <h3>You Can Contact Us Directly At:</h3>
                <div class="">
                    <p>Email: bravismy@gmail.com</p>
                </div>
                <div class="">
                    <p>Contact: (+95)9234535987</p>
                </div>
                <div>
                    Or you can write us via contact form. We answer as quick as possible. 
                </div>
            </div>
            <div class="icon">
                <i class="fa-brands fa-square-instagram" style="color:#FF7143"></i>
                <i class="fa-brands fa-facebook" style="color:#1976D2"></i>
                <i class="fa-brands fa-whatsapp" style="color:#4CAF50"></i>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>
@endsection