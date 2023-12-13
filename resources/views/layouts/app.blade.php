<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="csslogin/images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="/backend-admin/css/all.min.css">
    <link rel="stylesheet" href="csstaba/css/bootstrap.min.css">

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!----css3---->
    <link rel="stylesheet" href="csstaba/css/custom.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="top-navbar">
        <div class="xp-topbar">

            <!-- Start XP Row -->
            <div class="row">
                <!-- Start XP Col -->
                <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                    <div class="xp-menubar">
                        <span class="material-icons text-white">signal_cellular_alt
                        </span>
                    </div>
                </div>
                <!-- End XP Col -->

                <!-- Start XP Col -->
                <div class="col-md-5 col-lg-3 order-3 order-md-2">
                    <div class="xp-searchbar">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon2">GO</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End XP Col -->

                <!-- Start XP Col -->
                <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                    <div class="xp-profilebar text-right">
                        <nav class="navbar p-0">
                            <ul class="nav navbar-nav flex-row ml-auto">
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">question_answer</span>

                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" data-toggle="dropdown">
                                        <img src="/image/admin.jpg" style="width:40px; border-radius:50%;" />
                                        <span class="xp-user-live"></span>
                                    </a>
                                    <ul class="dropdown-menu small-menu">
                                        <li>
                                            <a href="#">
                                                <span class="material-icons">
                                                    person_outline
                                                </span>Profile

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="material-icons">
                                                    settings
                                                </span>Settings</a>
                                        </li>
                                        <li>
                                            <form method="post" action="{{ route('logout') }}">
                                                @csrf
                                                <input type="submit" class="material-icons" value="logout">
                                            </form>

                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
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
    @section('footer')
        <div class="container">
            <footer class="row row-cols-5 py-5 my-5 border-top">
                <div class="col">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <p class="text-muted">&copy; 2021</p>
                </div>

                <div class="col">

                </div>

                <div class="col">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    @show



    <script src="csstaba/js/jquery-3.3.1.slim.min.js"></script>
    <script src="csstaba/js/popper.min.js"></script>
    <script src="csstaba/js/bootstrap.min.js"></script>
    <script src="csstaba/js/jquery-3.3.1.min.js"></script>


</body>

</html>
