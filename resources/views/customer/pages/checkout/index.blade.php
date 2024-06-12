@extends('layouts.customerlayout')
@section('title','CheckOut')
@section('content')
    <div class="section1">
        <div class="flex_row">
            <div>
                <h1>Bravis</h1>
                <p>CHECKOUT</p>
            </div>
        </div>
        <div class="add_to_cart_icon">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>0</span>
        </div>
        
    </div>
    <div class="shopping_cart_box">
        <div class="flex_row">
            <h1>Cart</h1>
            <i class="fa-regular fa-circle-xmark close_button"></i>
        </div>
        <hr>    
    </div>   
    <div class="section2 flex_row">
        @php
        $loginstatus = false;
        if(isset($logindata)){
            $loginstatus = true;
        }
        @endphp

        <form action="" method="POST" class="form">
            {{-- @csrf
            @if($loginstatus == true)
            @method('PATCH') --}}
            <div class="div1">
                <div class="flex_row">
                    <h2>Contact</h2>
                    <p>Have an account? <a href="{{$loginstatus == true? url('/customer/login'):''}}">Log in</a>
                    </p>
                </div>
                <input type="email" placeholder="Email*" required class="input" name="email" >
                <br>
                <input type="tel" name="" id="" placeholder="Phone Number*" required class="input" name="phone">
                <br>
            </div>
            <div class="div2">
                <h2>Delivery</h2>
                <input type="text" placeholder="Country/Region"  class="input">
                <div class="name flex_row">
                    <input type="text" name="fname" id="fname" placeholder="First Name*" required  class="input">
                    <input type="text" name="lname" id="lname" placeholder="Last Name*" required  class="input">
                </div>
                <textarea name="address" id="" cols="30" rows="1" placeholder="Address*" required  class="input"></textarea>
                <div class="address flex_row">
                    <input type="text" name="state" id="" placeholder="State/Region(Eg. Yangon)" required class="input">
                    <input type="text" name="zipcode" id="" placeholder="Zip Code(Eg. 111)" required class="input">
                </div>
            </div>
            <div class="div3">
                <h2>Shipping Fees</h2>
                <button  class="input yangon" >Yangon <span>2500MMK</span></button>
                <br>
                <button  class="input other_region">Other Region <span>3500MMK</span></button>   
            </div>
            <div class="div4">
                <h2>Payment</h2>
                <p>All transactions are secured and encrypted</p>
                <div class="card">
                    
                    <button><a href="" class="payNow button2">Pay Now</a></button>
                </div>
            </div>

        </form>
        <div class="detail">
            <div class="flex_row">
                <h2>Your Order</h2>
                <a href="../category/men/detail.html">Edit</a>
            </div>
            <div class="list flex_row">
                
                <div>
                    <div>1 item</div>
                    <div>Delivery Fees</div>
                    <div><b>Total</b></div>
                </div>
                <div class="text_right">
                    <div>12500MMK</div>
                    <div>3000MMK</div>
                    <div>15500MMK</div>
                </div>

            </div>

            <hr>
          
            <div class="item_detail flex_row">
               
                {{-- {{dd($cartList)}} --}}
                {{-- @foreach($cartList as $list) 
                <img src="{{asset('image/admin/products_info/'.$list->colorimage)}}" alt="photo of {{$list->name}}" width="35px" height="35px">
                <div> --}}
                  
                    {{-- <p><b>{{$list->name}}</b></p>
                    <p>{{$list->price}}</p>  --}}
                    {{-- <p>Size: {{$list->size}}</p> --}}
                    {{-- <p>Quantity : {{$list->quantity}}</p> --}}
                {{-- </div>
                
            </div>

        </div>
    </div>


    <!-- script -->
    <script src="/js/customer/add_to_card.js"></script>
    <script src="/js/customer/shipping_fee.js"></script>

    @endsection