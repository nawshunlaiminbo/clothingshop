<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="{{asset('js/customer/add_to_card.js')}}"></script>
    <script src="https://kit.fontawesome.com/a44b41dfdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/customer/account/login.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    <title>@yield('title')</title>
    @yield('css')
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
                        
                      {{--cart--}}
        {{-- @if(session()->has('cartdata'))
        <div class="cart-box">
            <form action="{{route('CartCheckout')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <h1>Cart</h1>
                    <i class="fa-regular fa-circle-xmark close_button"></i>
                </div>
                <hr>
                @php
                    $array = [];
                @endphp
                <div class="">
                  
                    @forelse ($product as $item)
                        <div class="">
                            <div class="image" style="height:200px">
                                <img src="{{asset('image/admin/products_info/'.$item['image'])}}" width="100%" height="100%">
                            </div>
                            <div class="">
                                <p><b>{{$item['name']}}</p><span>({{$item['size']}})</span></b>
                                <p>Price - {{$item['price']}}MMK</p>
                                <div class="">
                                    <div class="">
                                        <form action="{{route(CartAdd)}}" method="post" class="">
                                            @csrf
                                            <input type="hidden" name="removeQty"  value="true">
                                            <input type="hidden" name="addToCart"  value="{{true}}">
                                            <input type="hidden" name="size"  value="{{$item['size']}}">  
                                            <input type="hidden" name="product_id"  value="{{$item['product']}}">
                                            <button formaction="{{route('CartAdd')}}" type="submit" class="">-</button>
                                        </form>
                                        <div class="number">{{$item['quantity']}}</div>
                                        <form action="{{route('CartAdd')}}" method="POST" class="plus">
                                            @csrf
                                          
                                            <input type="hidden" name="addQty" value="{{true}}">
                                            <input type="hidden" name="addToCart" value="{{true}}">
                                            <input type="hidden" name="product_id" value="{{$item['product']}}">
                                            <input type="hidden" name="size"  value="{{$item['size']}}">
                                            <button formaction="{{route('CartAdd')}}" type="submit">+</button>
                                        </form>     
                                    </div>
                                    <form action="{route('CartAdd')}" method="POST" class="remove_button">
                                        @csrf
                                        <input type="hidden" name="removeFromCart" id="" value="{{$item['product']}}">
                                        
                                        <input type="hidden" name="addToCart" value="{{true}}">
                                        <input type="hidden" name="size" value="{{$item['size']}}">
                                        <input type="hidden" name="product_id" value="{{$item['product']}}">
                                        <button formaction="{{route('CartAdd')}}" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                </div>
                                <p class="total_price">Total Price - {{$item['price']*$item['quantity']}}MMK</p>
                                @php
                                    array_push($array,$item['price']*$item['quantity']);
                                @endphp   

                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>
                @php
                $totalItemPrice = array_reduce($array,function($a,$b){
                    return $a+$b;
                })
            @endphp
            <div class="totalItemPrice flex_row" style="align-items: center">
                <h4>Total Item Price</h4>
                <p>{{$totalItemPrice}}MMK</p>
                <input type="hidden" name="total_price" value="{{$totalItemPrice}}">
                <input type="hidden" name="total_items"  value="{{count($cartarray)}}">
            </div>
            <div class="checkout">
                <button formaction="{{route('CheckOut')}}" type="submit" class="button2 checkout_button">Check out</button>
            </div>
        </div>
        </form>
        </div>
        @endif --}}

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