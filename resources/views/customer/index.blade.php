@extends('layouts.customerlayout')
@section('title','Home')
@section('content')
    <div class="section1">
        
        <!-- body -->
        <div class="body flex_row">
            <div class="image">
                <img src="/image/customer/man-black-sweater-black-bucket-hat-youth-apparel-shoot.png" alt="">
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
                <img src="/image/customer/credit-card_4021708 (1).png" alt="">
                <div>
                    <p>
                        Flexible Payment
                    </p>
                    <p>Pay With Multiple Cards</p>
                </div>
            </div>
            <div class="fast_icons flex_row">
                <img src="/image/customer/delivery-truck_2769339.png" alt="">
                <div>
                    <p>Delivery</p>
                    <p>Free Delivery over 5lakhs</p>
                </div>
            </div>
            <div class="fast_icons flex_row">
                <img src="/image/customer/headphones_1250595.png" alt="">
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
                            {{-- <img src="images/comfortable-jogger-pants-gray-studio-apparel.jpg" alt=""> --}}
                           {{-- {{dd($newarrival)}}; --}}
                            @foreach($newarrival as $newproduct)
                            <a href="{{url('/customer/product/details/'.$newproduct->id)}}">
                                <img src="{{asset('image/admin/products_info/'.$newproduct->colorimage)}}" alt="photo of {{$newproduct->name}}" width="35px" height="35px">
                                <div>

                                    <p>{{$newproduct->name}}</p>
                                    <p>{{$newproduct->price}}</p>
                                </div>
                            </a>
                          
                            @endforeach
                      
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
                    <img src="/image/customer/iam_os-9wM5SCjhsOM-unsplash (1) 1.png" alt="">
                </div>
                <div>
                    <img src="/image/customer/trendy-fashionable-couple-posing (1).jpg" alt="">
                </div>
                <div>
                    <img src="/image/customer/portrait-stylish-lady-sunglasses-wide-brimmed-hat-cool-young-woman-black-jacket-pants-poses-smiles-isolated-background 1.png" alt="">
                </div>  
            </div>
            <button class="button1">Follow Us</button>
        </div>
    </div>
    
    <!-- scripts -->
    <script src="js/slide_show_button.js" defer></script>
    <script src="js/add_to_card.js" defer></script>
    <script src="js/hamburger_menu.js"></script>
    
@endsection