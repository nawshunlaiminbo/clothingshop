<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/a44b41dfdc.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="{{asset('css/customer/account/login.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    <title>@yield('title')</title>
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
                                <li>FQA |</li>
                                <li>Order and returns |</li>
                                <li>Sign In</li>
                            </ul>
                        </div>
                      
                    </div>
                    <div class="inner-header">
                        <div class="logo-title">
                            Bravis
                        </div>
                        <div class="main-nav">
                            <ul>
                                <li>Home</li>
                                <li>Women</li>
                                <li>Contact</li>
                                <li>About Us</li>
                            </ul>
                        </div>
                        <div class="header-icon">
                            <ul>
                                <li><i class="fa-solid fa-magnifying-glass"></i></li>
                                <li><i class="fa-solid fa-cart-shopping"></i></li>
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