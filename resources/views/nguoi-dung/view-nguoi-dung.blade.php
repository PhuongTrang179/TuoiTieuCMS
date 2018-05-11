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
                        <a class="btn btn-primary float-right" href="{{url('nguoi-dung/them')}}">Thêm người dùng</a>
                    </div>
                </div>
            </form>
            <div class="row">
            <div class="col-12">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Họ</th>
                                <th>Tên</th>
                                <th>Email đăng nhập</th>
                                <th>Quyền hạn</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
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
@section('script')
<script>
    $(document).ready(function () {
        $('body').waitMe();
        firebase.database().ref('nguoidung').orderByChild('ten').on('value', function(snapshot) {
            var dl = "";
            snapshot.forEach(function(data) {
                dl+="<tr>\n" +
                    "<td class='w-10 align-middle'>"+data.val().ho+"</td>\n" +
                    "<td class='align-middle'>"+data.val().ten+"</td>\n" +
                    "<td class='align-middle'>"+data.val().email+"</td>\n" +
                    "<td class='align-middle'>"+data.val().quyenhan+"</td>\n" +
                    "<td class=\"align-middle\">\n" +
                    "<cay-trong href=\"#\"\n" +
                    "class=\"btn btn-warning float-right margin-bottom-auto\">Sửa</cay-trong>\n" +
                    "<cay-trong href=\"#\"\n" +
                    "class=\"btn btn-danger float-right margin-bottom-auto width-110\">Khóa</cay-trong>\n" +
                    "</td>\n" +
                    "</tr>";
            });
            $('tbody').append(dl);
            $('body').waitMe('hide');
        });

    });
</script>
@endsection