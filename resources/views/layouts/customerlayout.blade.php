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
    <link rel="stylesheet" href="{{asset('css/customer/account/signup.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/component/add_to_card.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/component/card_slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/global/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/about/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_tee_detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/detail/man_hoodie_and_sweater.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_pants.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_tee.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_tshirt.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/category_sort.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/checkout/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/contact/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/success/thank_you_shopping.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <section id="customermain">
        <header class="customernavbar">
            <div class="shopping_cart_box">
                <div class="flex_row">
                    <h1>Cart</h1>
                    <i class="fa-regular fa-circle-xmark close_button"></i>
                </div>
                <hr> 
                <div class="tee1_pick flex_row">
                        <img src="/images/09_2_1_3_1000_1000 1.png" alt="">
                    </div>
                    <div class="pick_detail">
            
                        {{-- <p>{{$cartProduct->name}}</p>
                        <p>{{$cartProduct->price}}</p> --}}
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
        </header>
        <main>
            <div class="content">
                <form action="" method="">

                </form>
                {{-- @yield('content') --}}
                <div class="section1">
                    <!-- navi -->
                    <div class="navigation flex_col">
                        <div class="flash_sale_bar flex_row">
                            <div class="flash_sale">
                                Flash Sales : Sign in and Get Extra  25%  off on Selected Items
                            </div>
                            <div class="link">
                                <a href="">FAQ</a>|
                                <a href="">orders and returns</a>|
                                <a href="{{url('/customer/login')}}">Sign In</a>
                            </div>
                        </div>
                        <div class="nav_bar flex_row">
                            <div class="logo">
                                Bravis
                            </div>
                            <div class="menu flex_row">
                                <div class="contact">
                                    <a href="{{url('/customer/homepage')}}" >Home</a>
                                </div>
                                <div class="women drop_down">
                                    <a href="{{url('/customer/product/1')}}" >Men</a>
                            
                                </div>
                                <div class="men drop_down">
                                    <a href="{{url('/customer/product/2')}}" >Women</a>
                                    
                                </div>
                                
                                <div class="about_us">
                                    <a href="{{url('/customer/product/3')}}" >Accessories</a>
                                </div>
                            </div>
                            <div class="extra_icon flex_row">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <div class="add_to_cart_icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="navi_ph flex_row">
                        <div class="logo">
                            Bravis
                        </div>
                        <i class="fa-solid fa-bars hamburger_menu open_menu"></i>
                        <i class="fa-solid fa-xmark close_menu"></i>
                    </div> --}}
                    {{-- <div class="overflow_menu">
                        <div class="menu_link flex_col">
                            <a href="{{url('/customer/hompage')}}">Home</a>
                            <a href="{{}}">Women</a>
                            <a href="">Men</a>
                            <a href="">Accessories</a>
                        </div>
                    </div> --}}
                </div>
                <div class="shopping_cart_box">
                    <div class="flex_row">
                        <h1>Cart</h1>
                        <i class="fa-regular fa-circle-xmark close_button"></i>
                    </div>
                    <hr>    
                </div>
               
                    {{-- <img src="/image/customer/shirt-mockup-concept-with-plain-clothing (2).jpg"> --}}
                    @yield('content')
                    
                <!-- script -->
                <script src="/js/add_to_card.js"></script>
                <script src="/js/hamburger_menu.js"></script>
            
            
            </div>
        </main>
        <footer>
            <div class="footer">
                <div class="footer grid">
                    <div class="flex_col">
                        <h3><a href="{{url('/customer/homepage')}}">Home</a></h3>
                    </div>
                    <div class="flex_col">
                        <h3><a href="">About Us</a></h3>
                    </div>
                    <div class="flex_col">
                        <h3><a href="">Contact Us</a></h3>
                    </div>
                    <div class="flex_col">
                        <h3><a href="{{url('/cutomer/product/list')}}">All Products</a></h3>
                    </div>
                </div>
           
            
           
            </div>
        </footer>
    </section>
</body>
</html>