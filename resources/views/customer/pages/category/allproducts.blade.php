@extends('layouts.customerlayout')
@section('title','Products')
@section('content')
   
    
    <div class="intro_session flex_row">
        @if($productid == 1)
        Men Wear
        @elseif($productid == 2)
        Women Wear
        @elseif($productid == 3)
        Accessories
        @elseif($productid == null)
        All Products
        @endif
       
    </div>
    <div class="filter">
        <div class="link">
            <a href="{{url('/customer/homepage')}}">Home</a>
            {{-- <a href="../men/tee.html">Tees</a> --}}
        </div>
        <div class="flex_row">
            <div class="search">
                <input type="text" class="input" placeholder="Search..." name="">
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
        @foreach($productlist as $products)
        <a href="{{url('/customer/product/details',$products->id)}}">
            <div>
    
            <img src="{{asset('image/admin/products_info/'.$products->colorimage)}}" alt="photo of {{$products->name}}" width="35px" height="35px">
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

    
    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>

@endsection