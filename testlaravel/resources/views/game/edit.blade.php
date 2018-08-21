@extends('layouts.master', ['currentPage' => 'game.edit'])
@section('page-title', 'Admin page - Playstation')
@section('content')
    <h2>Sửa sản phẩm</h2>
    <div class="container-fluid">
        <form action="/game/{{$obj->id}}" method="post">
            @method('PUT')
            {{csrf_field()}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên Game</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$obj -> name}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Giá</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" value="{{$obj -> price}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Link Ảnh</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="images" value="{{$obj -> images}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" value="Save">
                </div>
            </div>
        </form>
    </div>
@endsection