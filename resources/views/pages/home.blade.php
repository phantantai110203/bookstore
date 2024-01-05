@extends('layouts.app')


@section('title', 'Trang chủ')



@section('navbar')
    @parent
    {{-- slide --}}
    <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('asset/img/book-02.jpg') }}" style="width: 1132px; height: 708px;" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('asset/img/book-03.jpg') }}" style="width: 1132px; height: 708px;" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('asset/img/book-4.jpg') }}" style="width: 1132px; height: 708px;" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    {{-- card --}}

    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-2 mt-3">
                <h5>Danh mục sản phẩm</h5>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/listbook">Hàng mới về!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apple</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Samsung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HTC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OPPO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xiaomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sản phẩm khác</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card-deck mb-2">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        @foreach ($lst as $index => $p)
                            @if ($index < 8)
                            <div class="col">
                                <a href="{{ route('books.show',['book'=>$p]) }}" style="text-decoration: none !important;">
                                <div class="card mt-3 size-card">
                                    <img src="{{ $p->image }}" class="card-img-top size-img" onerror="this.src='asset/img/no_image_placeholder.png';" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $p->name }}</h5>
                                    <p class="card-text hide-less">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary custom-btn">Mua</a>
                                    </div>
                                </div>
                                </a>
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
@endsection





