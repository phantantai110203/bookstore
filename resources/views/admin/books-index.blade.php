@extends('layouts.app001')

@section('title', 'Admin book')

@section('header')
    @parent
@endsection


@section('content')

    <h1 style="text-align: center; color:black;"> Danh sách sản phẩm </h1>
    <a href="users-create" class="btn btn-info">
        Thêm
    </a>
    <table class="table table-light">
        <thead class="table-danger">
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lst as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->quality }}</td>
                    <td><img class="card-img-top" onerror="this.onerror=null; this.src='/img/sgktoan.jpg';"
                            style=" width:100px;max-height:100px;object-fit:contain;" src=" {{ asset($p->img) }}"></td>
                    <td style="ma">
                        <a href="users-create" class="btn btn-dark">
                            Chi tiết
                        </a>
                        <a href="Edit" class="btn btn-success">
                            Sửa
                        </a>
                        <form href="Delete" class="d-inline" onsubmit="return confirm('Bạn có muốn xóa không')">
                            <button class="btn btn-warning">Xóa</button>
                        </form>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>





@endsection
