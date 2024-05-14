@extends('layouts.adminlayout')
@section('title','Success')
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
                    <a href="/account/login/index.html">Sign In</a>
                </div>
            </div>
            <div class="nav_bar flex_row">
                <div class="logo">
                    Bravis
                </div>
                <div class="menu flex_row">
                    <div class="women drop_down">
                        <a href="" >Women</a>
                        <div class="women_drop_down_content">
                            <h3>Women Clothing</h3>
                            <div class="women_clothing_list flex_row">
                                <div class="flex_col">
                                    <a href="../category/women/dress.html">Women's Dresses</a>
                                    <a href="../category/women/blouse.html">Women's Tops, Tees & Blouses</a>
                                    <a href="../category/women/hoodie.html">Women's Fashion Hoodies & Sweat shirts</a>
                                    <a href="../category/women/pant.html">Women's Pants</a>
                                    <a href="../category/women/skirt.html">Women's Skirts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="men drop_down">
                        <a href="" >Men</a>
                        <div class="men_drop_down_content">
                            <h3>Men Clothing</h3>
                            <div class="men_clothing_list flex_row">
                                <div class="flex_col">
                                    <a href="../category/men/tee.html">Men's Tee</a>
                                    <a href="../category/men/men_t_shirt.html">Men's T-Shirts</a>
                                    <a href="../category/men/hoodie.html">Men's Hoodies & Sweat Shirts</a>
                                    <a href="../category/men/pant.html">Men’s Pants</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <a href="../contact/index.html" >Contact</a>
                    </div>
                    <div class="about_us">
                        <a href="../about/index.html" >About Us</a>
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
    
    <!-- <div class="overflow_menu">
        <div class="menu_link flex_col">
            <a href="">Women</a>
            <a href="">Men</a>
            <a href="">Contact</a>
            <a href="">About</a>
            <a href="">Add to Cart</a>
        </div>
    </div> -->
    <div class="shopping_cart_box">
        <div class="flex_row">
            <h1>Cart</h1>
            <i class="fa-regular fa-circle-xmark close_button"></i>
        </div>
        <hr>    
    </div>
    <div class="section2">
        <div class="flex_row">
            <div class="flex_col">
                <div class="check_mark flex_row">
                    <img src="/images/checkmark_8832119.png" alt="">
                </div>
                <h1>Thank You.</h1>
                <p>Your order was completely successfully</p>
                <div class="truck flex_row">
                    <img src="/images/delivery-truck_2769339.png" alt="">
                    <p>Your Product will be arrived within one week</p>
                </div>
                <a href="/index.html#shop_now"><button class="button2">Continue To Shopping
                </button></a>
            </div>
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
                <li><a href="../contact/index.html">Contact</a></li>
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