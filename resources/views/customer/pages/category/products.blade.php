@extends('layouts.customerlayout')
@section('title','Products')
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
                    <div class="women drop_down">
                        <a href="" >Women</a>
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
                        <a href="" >Men</a>
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
                        <a href="../../contact/index.html" >Contact</a>
                    </div>
                    <div class="about_us">
                        <a href="../../about/index.html" >About Us</a>
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
        Men's Tees
    </div>
    <div class="filter">
        <div class="link">
            <a href="/index.html">Home</a>
            {{-- <a href="../men/tee.html">Tees</a> --}}
        </div>
        <div class="flex_row">
            <div class="search">
                <input type="text" class="input" placeholder="Search..." name="search">
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
    <div class="men_tee_list grid">
        @foreach($product as $products)
        <a href="{{url('/customer/product/details',$products->id)}}">
            <div>
            <img src="image/customer/product/{{$products->colorimage}}" alt="">
            {{-- <img src="{{asset('image/admin/products_info/'.$productlist->colorimage)}}" alt="photo of {{$productlist->name}}" width="35px" height="35px"> --}}
            <p>{{$products->name}}</p>
            <p>{{$products->price}}</p>    
            </div>
        </a>
        @endforeach
        {{-- <div>
            <img src="/images/indoor-cropped-image-muscular-young-man-red-t-shirt-jeans 1.png" alt="">
            <p>V-neck Tee </p>
            <p>17500MMK</p>
            
        </div>
        <div>
            <img src="/images/teenage-boy-white-tee-basic-youth-apparel-shoot 1.png" alt="">
            <p> White Core Tee </p>
            <p>20000MMK</p>
            
        </div>
        <div>
            <img src="/images/HIRO THE BEAR _FASHION ICON_ TEE - 957 (White, S) 1.png" alt="">
            <p>The Bear "Fashion Icon" Tee</p>
            <p>25000MMK</p>  
        </div>
        <div>
            <img src="/images/25455801_fpx 1.png" alt="">
            <div>
                <p>Men's Striped Crew neck T-Shirt</p>
                <p>25000MMK</p>
            </div>
        </div>
        <div>
            <img src="/images/ezgif 5.png" alt="">
            <p>Men’s Lighthouse Graphic T-Shirt</p>
            <p>27000MMK</p>
        </div>
        <div>
            <img src="/images/Core Polo 135 (1) 1.png" alt="">
            <p>Blue Polo Shirt </p>
            <p>37000MMK</p>
        </div>
        <div>
            <img src="/images/man-wearing-blank-shirt 2.png" alt="">
            <p>Black Polo Shirt  (New Arrival)</p>
            <p>45000MMK</p>
        </div> --}}
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
                <li><a href="../../contact/index.html">Contact</a></li>
            </ul>
        </div>
        <div class="flex_col">
            <h3>Company</h3>
            <ul>
                <li>About Us</li>
            </ul>
        </div>
        {{-- <div class="flex_col">
            <h3>Get Your Latest Update !</h3>
            <ul>
                <li>Subscribe to get our latest news  about special discount</li>
                <li><input type="email" placeholder="Enter your email"></li>
                <li><button class="button1">Subscribe</button></li>
            </ul>
        </div> --}}
    </div>
    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>

@endsection