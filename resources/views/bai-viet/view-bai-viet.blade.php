@extends('master.master')
@section('title')
    Người dùng
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h6>Danh sách người dùng</h6>
                </div>
            </div>
        </div>
        <div class="card-body danh-sach">
            <form action="http://cms.blogdongho.com:8443/thuong-hieu" method="get">
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" placeholder="Tìm kiếm người dùng">
                    </div>
                    <div class="col-2">
                        <select class="form-control sel-trang-thai" name="trang-thai" id="trang-thai">
                            <option value="all" >All</option>
                            <option value="1" >Admin</option>
                            <option value="0" >User</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary float-left">Tìm kiếm</button>
                        <a class="btn btn-primary float-right" href="#">Thêm người dùng</a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Tên người dùng</th>
                            <th>Email đăng nhập</th>
                            <th>Quyền hạn</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="w-10 align-middle">sdfsd</td>
                            <td class="align-middle">Quản trị viên</td>
                            <td class="align-middle">Admin@email.com</td>
                            <td class="align-middle">
                                Admin
                            </td>
                            <td class="align-middle">
                                <a href="#"
                                   class="btn btn-warning float-right margin-bottom-auto">Sửa</a>
                                <a href="#"
                                   class="btn btn-danger float-right margin-bottom-auto width-110">Khóa</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="pagination">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection