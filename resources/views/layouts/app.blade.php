<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo-sach1.jpg') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>

    @yield('navbar')
    <nav class="navbar navbar-expand-lg navbar-light my-3 fixed-top mt-0 " style="background-color: #e3f2fd; top: 0;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-sach1.jpg') }}" style="width: 35px;"
                    alt=""> Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Thể loại
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>

                        </ul>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active bi bi-bag-check-fill" aria-current="page" href="#"></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0 float-right">
                    <li class="nav-item">
                        <a class="nav-link" style="color: blue" href="{{ route('login') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: blue" href="{{ route('register') }}">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="banner">
        @section('header')
            @auth
                Chao {{ Auth::user()->name }}
                @can('role')
                    <a href="{{ route('dashboard') }}">admin</a>
                @endcan
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Đăng Xuất">
                </form>

            @endauth
            @guest
                <a href="{{ route('login') }}">Đăng nhập</a>
            @endguest
            <br>
            <a href="/">Home</a>
        @show
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>

</html>
