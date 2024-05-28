@extends('layouts.adminlayout')
@section('title','Category')
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
    
    <div class="img">
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
    {{-- @foreach($product as $products) --}}
    <div class="section2 flex_row">
        <div class="img">
            <img src="/images/09_2_1_3_1000_1000 1.png" alt="">
        </div>
        <div class="text">
            <p class="title">{{$product->name}}</p>
            <p class="price">{{$product->price}}</p>
            <p>Size: </p>
            <div class="size_button">
                <button class="S_button">S</button>
                <button class="M_button">M</button>
                <button class="L_button">L</button>
                <button class="XL_button">XL</button>
            </div>
            {{-- <p>Color:</p>
            <div class="color_sample"></div>
            <div class="review flex_row">
                <div class="flex_row">
                    <img src="/assets/icons/Star border.svg" alt="" style="width: 30px; height: 30px;">
                    <img src="/assets/icons/Star border.svg" alt="" style="width: 30px; height: 30px;">
                    <img src="/assets/icons/Star border.svg" alt="" style="width: 30px; height: 30px;">
                    <img src="/assets/icons/Star border.svg" alt="" style="width: 30px; height: 30px;">
                    <img src="/assets/icons/Star border.svg" alt="" style="width: 30px; height: 30px;">
                </div> --}}
                <div>
                    <p class="reviewNumber">( 0 review )</p>
                </div>
            </div>
            <p>
                {{$product->description}}
            </p>
            <div class="flex_row add_to_cart">
                <button class="button2 pick_item">Add to cart</button>
                <img src="/images/delivery-truck_2769339.png" alt="" style="width: 40px; height: 40px;">
                <p class="free_deli">Free delivery on orders over 5lakhs.</p>
            </div>
        </div>
    </div>
    
    {{-- <div class="recommend">
        <h1>You may also like</h1>
        <div class="recommend_list grid">
            <a href="">
                <div>
                    <img src="/images/HIRO THE BEAR _FASHION ICON_ TEE - 957 (White, S) 1.png" alt="">
                <p>The Bear "Fashion Icon" Tee</p>
                <p>25000MMK</p> 
                </div>
            </a>
            <a href="">
                <div>
                    <div>
                        <img src="/images/ezgif 2.png" alt="">
                            <p>Men’s Oxford Shirt</p>
                            <p>45000MMK</p>
                    </div>
                </div>
            </a>
            <a href="">
                <div>
                    <img src="/images/26040791_fpx 1.png" alt="">
                    <p>Men’s Black Bomber Jacket</p>
                    <p>40000MMK</p>
                </div>
            </a>
            <a href="">
                <div>
                    <img src="/images/ezgif 8.png" alt="">
                    <p>Men's Straight Jean  Pants</p>
                    <p>57000MMK</p>    
                </div>
            </a>
        </div>
    </div> --}}
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
    <script src="/js/pick_item.js"></script>
    <script src="/js/add_to_card.js"></script>
    <script src="/js/pick_size.js"></script>
    <script src="/js/hamburger_menu.js"></script>

    @endsection