@extends('layouts.customerlayout')
@section('title','Home')
@section('content')
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
                        <a href="{{url('/customer/product/women')}}" >Women</a>
                        {{-- <div class="women_drop_down_content">
                            <h3>Women Clothing</h3>
                            <div class="women_clothing_list flex_row">
                                <div class="flex_col">
                                    <a href="pages/category/women/dress.html">Women's Dresses</a>
                                    <a href="pages/category/women/blouse.html">Women's Tops, Tees & Blouses</a>
                                    <a href="pages/category/women/hoodie.html">Women's Fashion Hoodies & Sweat shirts</a>
                                    <a href="pages/category/women/pant.html">Women's Pants</a>
                                    <a href="pages/category/women/skirt.html">Women's Skirts</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="men drop_down">
                        <a href="{{url('/customer/product/men')}}" >Men</a>
                        {{-- <div class="men_drop_down_content">
                            <h3>Men Clothing</h3>
                            <div class="men_clothing_list flex_row">
                                <div class="flex_col">
                                    <a href="pages/category/men/tee.html">Men's Tee</a>
                                    <a href="pages/category/men/men_t_shirt.html">Men's T-Shirts</a>
                                    <a href="pages/category/men/hoodie.html">Men's Hoodies & Sweat Shirts</a>
                                    <a href="pages/category/men/pant.html">Men’s Pants</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                   
                    <div class="about_us">
                        <a href="" >Accessories</a>
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
        <div class="navi_ph flex_row">
            <div class="logo">
                Bravis
            </div>
            <i class="fa-solid fa-bars hamburger_menu open_menu"></i>
            <i class="fa-solid fa-xmark close_menu"></i>
        </div>
        <div class="overflow_menu">
            <div class="menu_link flex_col">
                <a href="{{url('/customer/homepage')}}">Home</a>
                <a href="{{url('/customer/product/women')}}">Women</a>
                <a href="{{url('/customer/product/men')}}">Men</a>
                <a href="/pages/contact/index.html">Accessories</a>
            </div>
        </div>
        
        <!-- body -->
        <div class="body flex_row">
            <div class="image">
                <img src="images/man-black-sweater-black-bucket-hat-youth-apparel-shoot.png" alt="">
            </div>
            <div class="text">
                <h1>
                    Express Your Unique Style
                </h1>
                <p>Timeless Classics</p>
                <a href="{{url('/cutomer/product/list')}}"><button>Shop Now<i class="fa-solid fa-arrow-right-long"></i></button></a>
            </div>
        </div>
    </div>
    <div class="shopping_cart_box">
        <div class="flex_row">
            <h1>Cart</h1>
            <i class="fa-regular fa-circle-xmark close_button"></i>
        </div>
        <hr>    
    </div>
    <div class="section2">
        <div class="fast_icons_list flex_row">
            <div class="fast_icons flex_row">
                <img src="assets/icons/credit-card_4021708 (1).png" alt="">
                <div>
                    <p>
                        Flexible Payment
                    </p>
                    <p>Pay With Multiple Cards</p>
                </div>
            </div>
            <div class="fast_icons flex_row">
                <img src="images/delivery-truck_2769339.png" alt="">
                <div>
                    <p>Delivery</p>
                    <p>Free Delivery over 5lakhs</p>
                </div>
            </div>
            <div class="fast_icons flex_row">
                <img src="assets/icons/headphones_1250595.png" alt="">
                <div>
                    <p>Customer Service</p>
                    <p>24/7 Active</p>
                </div>
            </div>
        </div>
        <div class="new_arrival" id="shop_now">
            <h1>New Arrival</h1>
            <div class="new_arrival_list container">
                <div class="slider-wrapper">
                    <button id="prev_slide" class="slide-button"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="card-list grid">
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/woman-green-hoodie-jacket-winter-apparel-shoot.jpg" alt="">
                            <div>
                                <p>Women’s Sweat Shirt</p>
                                <p>35000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/man-wearing-blank-shirt.jpg" alt="">
                            <div>
                                <p>Men’s Back Polo Shirt</p>
                                <p>45000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/shirt-3737407_1280.jpg" alt="">
                            <div>
                                <p>Men’s Gray Coat</p>
                                <p>25000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt="">
                            <div>
                                <p>Men’s Gray Jogger Pants</p>
                                <p>40000MMK</p>
                            </div>
                        </div>
                    </div>
                    <button id="next_slide" class="slide-button"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                <div class="slider-scrollbar flex_row">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </div>


            </div>
        </div>
        <div class="ready2Wear">
            <h1>Ready To Wear Perfection</h1>
            <div class="ready2Wear_item grid">
                <div class="men">
                    <a href="{{url('/customer/product/men')}}">Men Clothing</a>
                </div>
                <div class="women">
                   <a href="{{url('/customer/product/women')}}">Women Clothing</a> 
                </div>
                <div class="accessories">
                   <a href="">Accessories</a> 
                </div>                
            </div>
        </div>
        <div class="follow_us">
            <h3>Follow us</h3>
            <p>@bravisSLNY</p>
            <div class="image flex_row">
                <div>
                    <img src="images/iam_os-9wM5SCjhsOM-unsplash (1) 1.png" alt="">
                </div>
                <div>
                    <img src="images/trendy-fashionable-couple-posing (1).jpg" alt="">
                </div>
                <div>
                    <img src="images/portrait-stylish-lady-sunglasses-wide-brimmed-hat-cool-young-woman-black-jacket-pants-poses-smiles-isolated-background 1.png" alt="">
                </div>  
            </div>
            <button class="button1">Follow Us</button>
        </div>
    </div>
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
    
    <!-- scripts -->
    <script src="js/slide_show_button.js" defer></script>
    <script src="js/add_to_card.js" defer></script>
    <script src="js/hamburger_menu.js"></script>
    
@endsection