@extends('layouts.customerlayout')
@section('title','MenProducts')
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
                                    <a href="../women/dress.html">Women's Dresses</a>
                                    <a href="../women/blouse.html">Women's Tops, Tees & Blouses</a>
                                    <a href="../women/hoodie.html">Women's Fashion Hoodies & Sweat shirts</a>
                                    <a href="../women/pant.html">Women's Pants</a>
                                    <a href="../women/skirt.html">Women's Skirts</a>
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
                                    <a href="../men/tee.html">Men's Tee</a>
                                    <a href="../men/men_t_shirt.html">Men's T-Shirts</a>
                                    <a href="../men/hoodie.html">Men's Hoodies & Sweat Shirts</a>
                                    <a href="../men/pant.html">Men’s Pants</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="contact">
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
                <a href="">Women</a>
                <a href="">Men</a>
                <a href="/pages/contact/index.html">Contact</a>
                <a href="/pages/about/index.html">About</a>
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
    <div class="intro_session flex_row">
        Men's Hoodies and Sweat shirts
    </div>
    <div class="filter">
        <div class="link">
            <a href="/index.html">Home</a>/
            <a href="../men/hoodie.html">Hoodies and Sweat shirts</a>
        </div>
        <div class="flex_row">
            <div class="search">
                <input type="text" class="input" placeholder="Search...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="sort_by flex_row">
                <div>
                    <span>Sort By:</span>
                    <select name="" id="" class="input">
                    <option value="low_to_high_price">Price, Low Price to High</option>
                    <option value="high_to_low_price">Price, High Price to Low</option>
                </select>
                </div>
                <!-- <img src=".././images/icons/icons8-sort-down-30.png" alt=""> -->
                <div class="icon flex_row">
                    <img src="/assets/icons/icons8-health-data-30.png" alt="">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
            </div>
            

        </div>
    </div>
    <div class="men_hoodie_and_sweat_shirt_list grid">
        <div>
            <img src="/images/91_2_1_3_1000_1000 1.png" alt="">
            <p>Men’s Black Dropped-shoulder Tee</p>
            <p>35000MMK</p>    
        </div>
        <div>
            <img src="/images/happy-young-man-laughing 1.png" alt="">
            <p>Men’s Long sleeve  T-shirts</p>
            <p>25000MMK</p>   
        </div>
        <div>
            <img src="/images/ezgif 6.png" alt="">
            <p>Men’s Brown Hoodie</p>
            <p>35000MMK</p>    
        </div>
        <div>
            <img src="/images/26040791_fpx 1.png" alt="">
            <p>Men’s Black Bomber Jacket</p>
            <p>40000MMK</p>
        </div>
    </div>

    <div class="footer grid">
        <div class="flex_col">
            <h3>Product</h3>
            <ul>
                <li>Clothing</li>
                <li>Shoes</li>
                <li>Accessories</li>
            </ul>
        </div>
        <div class="flex_col">
            <h3>Customer Support</h3>
            <ul>
                <li>FAQ</li>
                <li>Shipping</li>
                <li>Track Order</li>
                <li>Return & Exchange</li>
                <li><a href="../../contact/index.html">Contact</a></li>
            </ul>
        </div>
        <div class="flex_col">
            <h3>Company</h3>
            <ul>
                <li>About Us</li>
                <li>Privacy Policy</li>
                <li>Terms & Condition</li>
            </ul>
        </div>
        <div class="flex_col">
            <h3>Get Your Latest Update !</h3>
            <ul>
                <li>Subscribe to get our latest news  about special discount</li>
                <li><input type="email" placeholder="Enter your email"></li>
                <li><button class="button1">Subscribe</button></li>
            </ul>
        </div>
    </div>

    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>

    @endsection