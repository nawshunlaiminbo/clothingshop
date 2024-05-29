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
    <link rel="stylesheet" href="{{asset('css/customer/account/signup.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/component/add_to_card.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/component/card_slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/global/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/about/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_tee_detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/detail/man_hoodie_and_sweater.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_pants.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_tee.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/men/men_tshirt.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/category/category_sort.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/checkout/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/contact/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/pages/success/thank_you_shopping.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/index.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <section id="customermain">
        <header class="customernavbar">

        </header>
        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>
        <footer>

        </footer>
    </section>
</body>
</html>