<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- font awesome icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Daily Shop</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row top-bar">
            <div class="col-md-2">
                <img class="logo-img" src="{{asset('assets/images/logo.png')}}" alt="logo">
            </div>
            <div class="col-md-8 top-search">
                <input type="text">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="col-md-2 d-flex justify-content-between align-items-center">
                <div role="button">
                    <img class="avatar-img" src="{{asset('assets/images/avatar.png')}}" alt="">
                    <span>Jhon Doe</span>
                </div>
                <div role="button">
                    <img class="flag-img" src="{{asset('assets/images/us.png')}}" alt="">
                    <i class="fa-solid fa-down-long"></i>
                </div>
            </div>
        </div>
        <div class="row menu-bar">
            <div class="col-md-2 select-category">
                <i class="fa-solid fa-bars"></i> <span>Select Category</span> <i class="fa-solid fa-down-long"></i>
            </div>
            <div class="col-md-8">
                <ul class="nav">
                    <li class="menu-item"><a href="">Home</a></li>
                    <li class="menu-item"><a href="">About</a></li>
                    <li class="menu-item"><a href="">Shop</a></li>
                    <li class="menu-item"><a href="">News</a></li>
                    <li class="menu-item"><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-2 d-flex justify-content-between align-items-center">
                <div class="hotlist">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <div class="cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="rigt-side-bar">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    @yield('content-area')


    <footer class="container-fluid">
        <div class="row"></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>
        <div class="row"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
