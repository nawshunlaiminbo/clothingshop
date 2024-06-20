<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/a44b41dfdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/customer/account/login.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/customer/pages/detail.css')}}"> --}}
    <title>@yield('title')</title>
    @yield('css')

    <script src="{{asset('js/customer/add_to_card.js')}}"></script>
    @yield('js')
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
                                
                                <a><i class="fa-solid fa-cart-shopping"></i></a>
                                {{-- {{dd($cartarray)}} --}}
                                {{-- <span>{{count($cartarray)}}</span> --}}
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
                        

        {{-- {{'cart'}} --}}
        {{-- @if(session('cart'))
             @foreach(session('cart') as $id=>$product )
             @php
             $sub_total = $product['price'] * $product['quantity'];
             $total += $sub_total;
             @endphp
                        <div class="container">
                            <h1 class="text">Cart</h1>
                            <div class="item">
                                <div class="order-item">
                                <div class="product-image">
                                    <img src="" alt="order-photo" height="100px">
                                </div>
                                <div class="order-list">
                                    <h4>Pink Sport Wear Set</h4>
                                    <p>Price: 85000</p>
                                    <p>Size: S</p>
                                    <p>Quantity: 1 item</p>
                            </div>
                               
                        </div> --}}

                        @yield('content') 
                        
                       </div>
                    </div>
                  <!-- This is where child views will inject their content -->
                </main>
             
                <div class="footer">
                    <div class="inner-footer">
                        <ul>
                            <li><a>Home</a></li>
                            <li><a>About Us</a></li>
                            <li><a>Contact Us</a></li>
                            <li><a>All Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>          
    </section>
</body>
</html>