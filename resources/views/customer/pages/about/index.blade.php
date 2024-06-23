@extends('layouts.customerlayout')
@section('title','About')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/aboutus.css')}}">
@section('content')

<div class="conatiner">
    <div class="sec1">
        <div class="title">
            <h1>About Us</h1>
        </div>
        
    </div>
    <div class="section">
        <h2>Our Story</h2>
        <p>Bravis has launched in Myanmar since 2016.<br> And Bravis was established with a new retail format <br>that responds to the demand of a sector of young professionals <br>who are interested in & highly aware of new trends.</p>
        <img src="/image/customer/7R9A5223-780x520 1.png" alt="Our Story Image">
    </div>
    <div class="section">
        <h2>Our Vision</h2>
        <p>To create a local authentic brand, generating fashion nurturing confidence. <br>Our primary focus is empowering personal uniqueness while shaping our fashion <br> in a personalized,innovative, and sustainable energetic. <br>Our goal is to inspire and connect individuals through a curated collection <br>that celebrates diverse styles.</p>
        <img src="/image/customer/side-view-woman-looking-clothes 1.png" alt="Our Vision Image">
    </div>
    <div class="section">
        <h2>Our Mission</h2>
        <p>Our mission is to empower individuals to express their unique style <br>with confidence through high-quality, trendsetting fashion.<br> We are committed to creating a diverse and sustainable collection <br>that caters to the dynamic tastes of our customers.</p>
        <img src="/image/customer/people-analyzing-checking-finance-graphs-office 1.png" alt="Our Mission Image">
    </div>
    <div class="section">
        <h2>Our Development Team</h2>
        <p>Our Development Team is dedicated to advancing the intersection of fashion and technology. <br>Our mission is to innovate and create fashion designs by exploring styles, <br>leveraging cutting-edge technology to ensure seamless, secure,<br> and visually captivating platforms. We are committed to staying ahead of industry trends,<br> embracing creativity, and fostering a collaborative environment where our team members thrive and <br> contribute to the continuous evolution of Bravis.</p>
        {{-- <img src="/image/customer/people-analyzing-checking-finance-graphs-office 1.png" alt="Our Development Team Image"> --}}
    </div>
</div>
@endsection

@section('js')
    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>
@endsection