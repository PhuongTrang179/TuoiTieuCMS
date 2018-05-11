@extends('master.master')
@section('title')
    Thiết bị cảm biến
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h6>Danh sách thiết bị cảm biến</h6>
                </div>
            </div>
        </div>
        <div class="card-body danh-sach">
            <form action="http://cms.blogdongho.com:8443/thuong-hieu" method="get">
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" placeholder="Tìm kiếm thiết bị cảm biến">
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary float-left">Tìm kiếm</button>
                        <a class="btn btn-primary float-right" href="#">Thêm thiết bị</a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Tên cảm biến</th>
                            <th>Địa chỉ MAC</th>
                            <th>Email người dùng</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="align-middle">sdfsd</td>
                            <td class="align-middle">Quản trị viên</td>
                            <td class="align-middle">Admin@email.com</td>
                            <td class="align-middle">
                                <a href="#"
                                   class="btn btn-warning float-right margin-bottom-auto">Sửa</a>
                                <a href="#"
                                   class="btn btn-danger float-right margin-bottom-auto width-110">Xóa</a>
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
