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
                <div>
                    <img class="avatar-img" src="{{asset('assets/images/avatar.png')}}" alt="">
                </div>
                <div>
                    <img class="flag-img" src="{{asset('assets/images/bd.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row menu-bar">
            <div class="col-md-3">
                <i class="fa-solid fa-bars"></i> Select Category <i class="fa-solid fa-down-long"></i>
            </div>
            <div class="col-md-6">
                <ul class="nav">
                    <li class="menu-item"><a href="">Home</a></li>
                    <li class="menu-item"><a href="">About</a></li>
                    <li class="menu-item"><a href="">Shop</a></li>
                    <li class="menu-item"><a href="">News</a></li>
                    <li class="menu-item"><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 d-flex justify-content-between align-items-center">
                <div>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div>
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    @yield('content-area')


    <footer>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
