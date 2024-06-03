@extends('layouts.customerlayout')
@section('title','ProductDetails')
@section('content')


    
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
    
                <p>{{$product->name}}</p>
                <p>{{$product->price}}</p>
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
            <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" width="35px" height="35px">
        </div>
        <div class="text">
            <p class="title">{{$product->name}}</p>
            <p class="price">{{$product->price}}</p>
            <p>Size: </p>
            <div class="size_button">
                <button class="S_button">S</button>
                <button class="M_button">M</button>
                <button class="L_button">L</button>
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
                <form action="{{route('CartAdd',['id'=> $product->id])}}" method="POST">
                    @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button class="button2 pick_item" type="submit">Add to cart</button>
                <img src="/image/customer/delivery-truck_2769339.png" alt="" style="width: 40px; height: 40px;">
                <p class="free_deli">Free delivery on orders over 5lakhs.</p>
                </form>
            </div>
        </div>
    </div>
    
    <div class="recommend">
        <h1>You may also like</h1>
        <div class="recommend_list grid">
            <a href="">
                <div>
                    <img src="/images/HIRO THE BEAR _FASHION ICON_ TEE - 957 (White, S) 1.png" alt="">
                <p>The Bear "Fashion Icon" Tee</p>
                <p>25000MMK</p> 
                </div>
        </div>
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
    <script src="/js/customer/pick_item.js"></script>
    <script src="/js/customer/add_to_card.js"></script>
    <script src="/js/customer/pick_size.js"></script>
    <script src="/js/customer/hamburger_menu.js"></script>

    @endsection