@extends('layouts.app')

@section('title', 'Chi tiết')

@section('navbar')
    @parent
    <div class="container " style="margin-top: 50px">
        <img src="" alt="">
        <h1>{{ $p->name }}</h1>
        <p>Loại: {{ $p->category->name }}</p>
        <p>Giá: {{ $p->price }}</p>
        <div>
            <h3>Mô tả</h3>
            <p>{{ $p->description }}</p>
        </div>
    </div>
@endsection
