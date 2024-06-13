<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="/js/customer/add_to_card.js"></script>
    <script src="https://kit.fontawesome.com/a44b41dfdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/customer/account/login.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <section id="customermain">      
       <div class="wrapper">
            <div class="inner-wrapper">
                <div class="main-header">
                    <div class="upper-header">
                        <div class="upper-header-title">
                            <p>Flash Sales : Singn in and Get Extra 25% off on Selected Items
                        </div>
                        <div class="header-link">
                            <ul>
                                <a href="">FQA |</a>
                                <a href="">Order and returns |</a>
                                <a href="{{url('/customer/login')}}">Sign In</a>
                            </ul>
                        </div>
                      
                    </div>
                    <div class="inner-header">
                        <div class="logo-title">
                            Bravis
                        </div>
                        <div class="main-nav">
                            <ul>
                                {{-- <a href="{{url('/customer/homepage')}}">Home</a>
                                <a href="{{url('/customer/product'.$productlist->id)}}">Men</a>
                                <a href="{{url('/customer/product'.$productlist->id)}}">Women</a>
                                <a href="{{url('/customer/product'.$productlist->id)}}">Accessories</a> --}}
                                <a href="{{url('/customer/homepage')}}">Home</a>
                                <a href="{{route('CustomerProductList',['productid'=>'1'])}}">Men</a>
                                <a href="{{route('CustomerProductList',['productid'=>'2'])}}">Women</a>
                                <a href="{{route('CustomerProductList',['productid'=>'3'])}}">Accessories</a>
                            </ul>
                        </div>
                        <div class="header-icon">
                            <ul>
                                <a><i class="fa-solid fa-magnifying-glass"></i></a>
                                <a><i class="fa-solid fa-cart-shopping"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>

                <main>
                    <div class="main-body">
                       <div class="main-logo">
                        {{-- <div class="img-col">
                            <img src="{{ asset('image/customer/09_2_1_3_1000_1000 1.png') }}" alt="Customer Image">
                        </div>
                        <div class="info-col">
    
                        </div> --}}

                        <div class="shopping_cart_box">
                            <div class="flex_row">
                                <h1>Cart</h1>
                                <i class="fa-regular fa-circle-xmark close_button"></i>
                            </div>
                            <hr> 
                            <div class="tee1_pick flex_row">
                                <div class="img">
                                    <img src="/images/09_2_1_3_1000_1000 1.png" alt="">
                                </div>
                                <div class="pick_detail">
                                    <p>Men’s Neck Solid Color Short Sleeve Tee</p>
                                    <p>12500MMK</p>
                                    <div class="flex_row">
                                        <div class="add_or_remove_quantity grid">
                                            <div class="minus">-</div>
                                            <div class="number">1</div>
                                            <div class="plus">+</div>
                                        </div>
                                        <div class="remove_button">
                                            Remove
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <a href="../../checkout/index.html" class="button2 checkout_button">Check out</a>  
                        </div>

                        @yield('content') 
                        
                       </div>
                    </div>
                  <!-- This is where child views will inject their content -->
                </main>
             
                <div class="footer">
                    <div class="inner-footer">
                        <ul>
                            <li>Home</li>
                            <li>Women</li>
                            <li>Contact</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>          
    </section>
</body>
</html>