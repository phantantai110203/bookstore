@extends('layouts.app')

@section('title', 'Trang chu')

@section('header')
    @parent
@endsection


@section('content')
    <div class="container">
        {{-- Slides --}}
        <div class="container" style="margin-top:100px">
            <div id="carouselExampleControls" class="carousel slide my-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('asset/img/book-01.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('asset/img/book-02.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('asset/img/book-03.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- product-list --}}

        <div class="container d-flex">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-3 mb-2 mt-3">
                        <h5 style="border: 1px solid black; padding: 10px;background-color: rgb(25, 177, 219)">Danh mục sản phẩm</h5>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/listbook">Hàng mới về!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kỹ năng sống</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Truyện tranh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sách giáo khoa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tiểu thuyết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sản phẩm khác</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="mb-2">
                            <div class="row gap-5 border-0 h-100">
                                @foreach ($lst as $index => $p)
                                    @if ($index < 8)
                                        <div style="width: 20%" class="card">
                                            <div class="card-body">
                                                <img class="card-img-top"
                                                    onerror="this.onerror=null; this.src='/img/sgktoan.jpg';"
                                                    style=" width:100%;max-height:150px;object-fit:contain;"
                                                    src=" {{ asset($p->img) }}">
                                                <h4 class="card-title">{{ $p->name }}</h4>
                                                <h5 class="text-danger">{{ $p->price }}đ</h5>

                                            </div>
                                            <div class="card-footer bg-white border-0">
                                                <a href="#" class="btn btn-primary stretched-link"><i
                                                        class="fa fa-shopping-cart"></i>
                                                    Thêm vào giỏ hàng
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>







        @endsection
