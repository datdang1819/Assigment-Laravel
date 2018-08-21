@extends('layouts.master', ['currentPage' => 'category.list'])
@section('page-title', 'Admin page - Playstation')
@section('content')
<h1>List Category</h1>
<ul>
    <li>
        <a href="/category/create">Tạo mới</a>
    </li>
</ul>
</form>

<table class="table table-striped">
    <thead>
    <tr class="row">
        <th class="col-md-2">ID</th>
        <th class="col-md-2">Tên danh mục</th>
        <th class="col-md-2">Ảnh</th>
        <th class="col-md-2">Mô Tả</th>
        <th class="col-md-4">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_obj as $item)
        <tr class="row">
            <th class="col-md-2">{{$item -> id}}</th>
            <th class="col-md-2">{{$item -> name}}</th>
            <th class="col-md-2"><img src=" {{$item -> images}}" alt="" width="100" height="100"></th>
            <th class="col-md-2">{{$item -> description}}</th>
            <th class="col-md-4">
                <a href="/category/{{$item -> id}}/edit" class="btn btn-link btn-edit">Sửa</a>&nbsp;&nbsp;
                <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">Xóa</a>
            </td>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>
<script>
    var listDeleteButton = document.getElementsByClassName('btn-delete');
    for (var i = 0; i < listDeleteButton.length; i++) {
        listDeleteButton[i].onclick = function () {
            if(confirm('Are you sure ?')){
                var params = '_token={{csrf_token()}}';
                var currentId = this.id;
                var xhttp = new XMLHttpRequest();
                xhttp.open("DELETE", "/category/" + currentId, true);
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert('Delete success!');
                        window.location.reload();
                    }
                };
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(params);
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection