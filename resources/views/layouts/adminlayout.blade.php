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
    <link rel="stylesheet" href="{{asset('css/admin/account/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/component/add_to_card.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/component/card_slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/global/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/customer/customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/customer/edit_customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/order/order.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/admin/pages/product/add_product.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/product/edit_product.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/product/product.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/staff/add_staff.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/staff/staff.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/pages/staff/update_staff.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
    <section id="adminmain">
        <header class="adminnavbar">
            
        </header>
        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>
        <footer>

        </footer>
    </section>
    <script src="{{asset('js/admin/user_profile_info_popup.js')}}"></script>
</body>
</html>