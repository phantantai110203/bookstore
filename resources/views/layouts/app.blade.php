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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>Document</title>
</head>

<body>

    @yield('navbar')
    <nav class="navbar navbar-expand-lg navbar-light my-3 fixed-top mt-0 " style="background-color: #e3f2fd; top: 0;">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-sach1.jpg') }}" style="width: 35px;"
                    alt="">Bookstore</a>
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
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center float-right">
                    @section('header')
                        @auth
                            <h5 class="nav-link mb-0" style="color: black">Chào {{ Auth::user()->name }}</h5>
                            @can('role')
                                <a class="nav-link" href="{{ route('dashboard') }}">admin</a>
                            @endcan
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <input class="nav-link" class="btn btn-warning" class="btn btn-info" type="submit"
                                    value="Đăng Xuất">
                            </form>

                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: blue" href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: blue" href="{{ route('register') }}">Đăng ký</a>
                            </li>
                        @endguest
                        <br>
                    @show
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    </div>

    @section('footer')
        <div class="container-fluid" style="background-color: #e3f2fd; ">
            <footer class="row row-cols-5 py-5 my-0 border-top" style="margin-bottom: 0px;">
                <div class="col">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <h5 class="ms-auto">Hổ trợ khánh hàng</h5>
                    <p>Email: 0306211076@caothang.edu.vn</p>
                    <p>Hotline: <b style="color: rgb(18, 91, 193)">0344312253</b></p>
                    {{-- <p class="text-muted">&copy; 2021</p> --}}
                </div>

                <div class="col">

                </div>

                <div class="col">
                    <h5>Giới thiệu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h5>Tài khoản</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Quên mật khẩu</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('login') }}" class="nav-link p-0 text-muted">Đăng nhập</a></li>

                    </ul>
                </div>

                <div class="col">
                    <h5>Hướng dẫn</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hướng dẫn mua hàng</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Phương thức thanh toán</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Câu hỏi thường gặp</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách vận chuyển</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách bảo mật thông tin</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    @show



</body>

</html>
