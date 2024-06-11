@extends('layouts.customerlayout')
@section('title','Success')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/pages/success/thank_you_shopping.css')}}">
@endsection
@section('content')
    <div class="section">
        <div class="flex_row">
            <div class="flex_col">
                <div class="check_mark flex_row">
                    <img src="/image/customer/checkmark_8832119.png" alt="">
                </div>
                <h1>Thank You.</h1>
                <p>Your order was completely successfully</p>
                <div class="truck flex_row">
                    <img src="/image/customer/delivery-truck_2769339.png" alt="">
                    <p>Your Product will be arrived within one week</p>
                </div>

                <div class="shop-btn"> 
                    <a href="" class="button">Continue To Shopping</a>
                </div>
               
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>

    @endsection