@extends('layouts.app')

@section('title', 'Trang chu')

@section('header')
    @parent
@endsection


@section('content')
    <div class="container">
        {{-- Slides --}}
        <div class="container ">
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

        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-2">
                    <h5>Danh mục sách</h5>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hàng mới về!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Truyện Tranh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tuyển thuyết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kỹ năng sống</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sách giáo khoa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sách khoa học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Sách khác</a>
                        </li>
                    </ul>
                </div>

            </div>

            @foreach ($lst as $index => $p)
                @if ($index < 8)
                    <div class="card h-100 ">
                        <img class="card-img-top" src="//" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $p->name }}</h4>
                            <h5 class="text-danger">{{ $p->price }}</h5>

                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-primary stretched-link"><i class="fa fa-shopping-cart"></i>
                                Mua
                                ngay
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
</div>

</div>

@endsection
