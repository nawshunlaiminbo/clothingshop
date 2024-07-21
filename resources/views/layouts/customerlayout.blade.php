<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{asset('js/customer/slider.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/a44b41dfdc.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/customer/user_profile_info_popup.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/customer/account/login.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/slider.css')}}">
    <title>@yield('title')</title>
    @yield('css')

    <script src="{{asset('js/customer/add_to_card.js')}}" defer></script>
    @yield('js')
</head>
<body>
    <section id="customermain">      
       <div class="wrapper">
            <div class="inner-wrapper">
                <div class="main-header">
                    <div class="upper-header">
                        <div class="upper-header-title">
                            <p>Flash Sales : Sign in and Get Extra 25% off on Selected Items</p>
                        </div>
                        <div class="header-link">
                            <ul>
                                <a href="">FAQ |</a>
                                <a href="">Order and returns |</a>
                                @if (auth('customer')->user() != null)
                                <a>{{auth('customer')->user()->firstname}} {{auth('customer')->user()->lastname}}</a>
                                @else
                                <a href="{{url('/customer/login')}}">Sign In</a>
                                @endif
                                
                                @if (auth('customer')->user() != null)
                                <div class="user_profile_info">
                                    <a href="{{url('/customer/logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
                                </div>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="inner-header">
                        <div class="logo-title">
                            Bravis
                        </div>
                        <div class="main-nav">
                            <ul>
                                <a href="{{url('/customer/homepage')}}">Home</a>
                                <a href="{{route('CustomerProductList',['productid'=>'1'])}}">Men</a>
                                <a href="{{route('CustomerProductList',['productid'=>'2'])}}">Women</a>
                                <a href="{{route('CustomerProductList',['productid'=>'3'])}}">Accessories</a>
                            </ul>
                        </div>
                        <div class="add_to_cart_icon">
                            
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
                    
                <main>
                    <div class="main-body">
                       <div class="main-logo">
                        <div class="shopping_cart_box">
                            <div class="cart_header">
                                <h2>Cart</h2>
                                <button class="close_button">&times;</button>
                            </div>
                            <div class="cart_body">
                                <p>Tee Shirt</p>
                                <p>15000 MMK</p>
                                <p>Total Price</p>
                            <div class="quantity_control">
                                <button class="decrease_quantity">-</button>
                                <input type="number" value="1">
                                <button class="increase_quantity">+</button>
                            </div>
                            <a href="" class="remove_item">Remove</a>
                            </div>
                            <div class="cart_footer">
                                <button class="checkout_button">Check Out</button>
                            </div>
                        </div>
                       
                        @yield('content') 
                        
                       </div>
                    </div>
                </main>
             
                <div class="footer">
                    <div class="inner-footer">
                            <a href="{{url('/customer/homepage')}}">Home</a>
                            <a href="{{url('')}}">About Us</a>
                            <a href="{{url('/customer/contact')}}">Contact Us</a>
                           <a href="{{url('/cutomer/product/list')}}">All Products</a>
                    </div>
                </div>
            </div>
       </div>          
    </section>
</body>
</html>
