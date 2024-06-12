@extends('layouts.customerlayout')
@section('title','CheckOut')
@section('content')
<link rel="stylesheet" href="{{asset('css/customer/pages/checkout/checkout1.css')}}"> 
<script src="https://kit.fontawesome.com/a44b41dfdc.js" crossorigin="anonymous"></script>

<div class="main-container">
{{-- <header class="header">
    <div class="header-content">
        <div class="logo">
            Bravis
        </div>
        <div class="cart-icon">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
</header> --}}

<div >
    <div class="checkout">CHECKOUT</div>
  
    <form action="" method="" class="container">
    <div class="section1">
        <div class="contact">
            <div class="contact-text">
                <h2>Contact</h2>
                <p>Have an account? <a href="">Log in</a></p>
            </div>
            <div class="contact-form">

                    <input type="email" placeholder="Email*" required class="input" name="email" >
                    <br> <br>
                    <input type="phone" placeholder="Phone Number*" required class="input" name="phone" >
              
            </div>
        </div>
        <div class="delivery">
            <h2>Delivery</h2>
            
            <input type="address" placeholder="Address*" required class="input" name="address" >
            <br><br>
            <div class="name">
                <input type="text" name="fname" id="fname" placeholder="First Name*" required  class="input">
                <input type="text" name="lname" id="lname" placeholder="Last Name*" required  class="input">
            </div>
            <br>
            <textarea name="address" id="" cols="30" rows="1" placeholder="Address*" required  class="input"></textarea>
            <br><br>
            <div class="address">
                <input type="text" name="state" id="" placeholder="State/Region(Eg. Yangon)" required class="input">
                <input type="text" name="zipcode" id="" placeholder="Zip Code(Eg. 111)" required class="input">
            </div>
            <br>
        </div>
        <div class="shipping-fees">
            <h2>Shipping Fees</h2>
            <div class="region">
                <button  class="yangon" >Yangon <span>2500MMK</span></button>
                <br><br>
                <button  class="other-region">Other Region <span>3500MMK</span></button>
                <br><br>   
            </div>
            <div class="pay-now">
                <button class="button">Pay Now</button>
            </div>
        </div>
    </div>
    
    <div class="section2">
        <div class="order">
            <table>
                <tr>
                    <th width="70%">Your Order</th>
                    <th width="30%"><a href="">Edit</a></th>
                </tr>
                <tr>
                    <td >1 item</td>
                    <td>85000MMK</td>
                </tr>
                <tr>
                    <td>Delivery Fees</td>
                    <td>0MMk</td>
                </tr>
                <tr>
                    <td>Discount (Available for registered user)</td>
                    <td>0 MMK</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>0 MMK</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="item">
            <h2>Item Details</h2>
            <div class="order-item">
            <div class="product-image">
                <img src="/image/customer/09_2_1_3_1000_1000 1.png" alt="order-photo" height="100px">
            </div>
            <div class="order-list">
                <h3>Pink Sport Wear Set</h3>
                <p>Price: 85000</p>
                <p>Size: S</p>
                <p>Quantity: 1 item</p>
            </div>
           
        </div>
        <hr>
        </div>
    </div>
</form>
</div>
</div>

@endsection
