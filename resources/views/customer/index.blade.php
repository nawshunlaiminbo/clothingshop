@extends('layouts.customerlayout')
@section('title','Customer Home')
@section('content')


    <div class="main-container">
        <div class="inner-container">
            <div class="inner-col">
                <div class="img-col">
                    <img src="/image/customer/man-black-sweater-black-bucket-hat-youth-apparel-shoot.png" alt="">
                </div>
                <div class="info-col">
                    <h1>
                        Express Your Unique Style
                    </h1>
                    <p>Timeless Classics</p>
                    <a href="{{url('/cutomer/product/list')}}"><button>Shop Now<i class="fa-solid fa-arrow-right-long"></i></button></a>
                </div>
            </div>

            <div class="detail-info">
                <div class="inner-info">
                    <div class="customer-service">
                        <div class="fast_icons">
                            <div class="fast-icon">
                                <i class="fa-regular fa-credit-card fa-5x"></i>
                            </div>
                           
                            <div class="flex-title">
                                <ul>
                                    <li> Flexible Payment</li>
                                    <li>Pay With Multiple Cards</li>
                                </ul>
                              
                            </div>
                        </div>
                        <div class="fast_icons">
                            <div class="fast-icon">
                                <i class="fa-solid fa-truck fa-5x"></i>
                            </div>
                            <div class="flex-title">
                                <ul>
                                    <li> Delivery</li>
                                    <li>Free Delivery over 5lakhs</li>
                                </ul>
                              
                            </div>
                           
                        </div>
                        <div class="fast_icons">
                            <div class="fast-icon">
                                <i class="fa-solid fa-headphones fa-5x "></i>
                            </div>

                            <div class="flex-title">
                                <ul>
                                    <li> Customer Service</li>
                                    <li>24/7 Active</li>
                                </ul>
                              
                            </div>
                               
                        </div>
                    </div>
                </div>
            </div>

            <div class="new-arrival-col">
                <div class="inner-arrival-col">
                    <h1>New Arrival</h1>
                    <div class="wrapper" id="Wrapper">
                        <i id="left" class="fa-solid fa-angle-left"></i>
                        <ul class="carousel">
                            @foreach($newarrival as $newproduct)
                                <li class="card">
                                    <a href="{{url('/customer/product/details/'.$newproduct->id)}}">
                                        <div class="img ">
                                            <img src="{{asset('image/admin/products_info/'.$newproduct->colorimage)}}"  alt="photo of {{$newproduct->name}}" draggable="false">
                                        </div>
                                        <div class="arrival-detail">

                                            <p>{{$newproduct->name}}</p>
                                            <p>{{$newproduct->price}}</p>
                                        </div>
                                    </a>
                                    
                                </li>
                            @endforeach
                        </ul>
                        <i id="right" class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>

            <div class="img-collection">
                <div class="img-row">
                    <h1>Ready To Wear Perfection</h1>
                    <div class="ready2Wear">
                        <div class="men">
                            <a href="{{url('/customer/product/men')}}">Men Clothing</a>
                        </div>
                        <div class="two-col">
                            <div class="women">
                               <a href="{{url('/customer/product/women')}}">Women Clothing</a> 
                            </div>
                            <div class="accessories">
                                {{-- <div class="img-col">
                                    <img src="/image/customer/hmgoepprod.jpeg" alt="">
                                </div> --}}
                               <a href="">Accessories</a> 
                            </div>  
                        </div>
                                    
                    </div>

                    
                </div>
            </div>


            <div class="follow-col">
                <div class="inner-follow">
                    <h3>Follow us </h3>
                    <h1>@ bravisyyo </h1>

                    <div class="follow-img-col">
                        <div class="inner-img-col">
                            {{-- <img src="/image/customer/iam_os-9wM5SCjhsOM-unsplash (1) 1.png" style="width:5rem; height 5rem"> --}}
                        </div>
                        <div class="inner-img-col">
                            {{-- <img src="/image/customer/trendy-fashionable-couple-posing (1) 1.png"> --}}
                        </div>
                        <div class="inner-img-col">
                            {{-- <img src="/image/customer/portrait-stylish-lady-sunglasses-wide-brimmed-hat-cool-young-woman-black-jacket-pants-poses-smiles-isolated-background 1.png"> --}}
                        </div>
                    </div>
                    <div class="button"><button class="follow-us-btn">Follow us</button></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- scripts -->
    <script src="js/customer/slide_show_button.js" ></script>
    <script src="/js/customer/add_to_card.js" ></script>
    <script src="/js/customer/hamburger_menu.js"></script>
    
@endsection