@extends('layouts.master', ['currentPage' => 'category.create'])
@section('page-title', 'Admin page - Playstation')
@section('content')
    <h2>Tạo mới danh mục</h2>
    <div class="container-fluid">
        <form action="/category" method="post">
            {{csrf_field()}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Link Ảnh</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="images" value="">
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