@extends("layout")
@section('title','Thêm mới user')
@section('contents')
<div class="container">
    <h2>Thêm tài khoản mới</h2>
    <div class="row">
        <div class="col-12">
            <form action="/admin/users" method="post">
                <div>
                    <label for="exampleInputEmail1" class="form-label">Nhập tên</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                </div>
                <div>
                    <label for="exampleInputPassword1" class="form-label">Nhập email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
                </div>
                <div>
                    <label for="exampleInputPassword1" class="form-label">Nhập mật khẩu</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>
@endsection