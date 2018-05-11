@extends('master.master')
@section('title')
    Cây trồng
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h6>Danh sách cây trồng</h6>
                </div>
            </div>
        </div>
        <div class="card-body danh-sach">
            <form action="#" method="get">
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" placeholder="Tìm kiếm cây trồng">
                    </div>
                    <div class="col-2">
                        <select class="form-control sel-trang-thai" name="trang-thai" id="trang-thai">
                            <option value="all" >All</option>
                            <option value="1" >Cây ngắn ngày</option>
                            <option value="0" >Cây lâu năm</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary float-left">Tìm kiếm</button>
                        <a class="btn btn-primary float-right" href="{{url('cay-trong','them')}}">Thêm cây trồng</a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Tên cây trồng</th>
                            <th>Họ cây trồng</th>
                            <th>Xuất xứ</th>
                            <th>Loại cây</th>
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
            firebase.database().ref('caytrong').orderByChild('tencaytrong').on('value', function(snapshot) {
                var dl = "";
                snapshot.forEach(function(data) {
                    dl+="<tr>\n" +
                        "<td class='w-10 align-middle text-center'><img src="+data.val().hinhanhcaytrong+" width=50 height=50 ></td>\n" +
                        "<td class='align-middle'>"+data.val().tencaytrong+"</td>\n" +
                        "<td class='align-middle'>"+data.val().hocaytrong+"</td>\n" +
                        "<td class='align-middle'>"+data.val().nguongoccaytrong+"</td>\n" +
                        "<td class='align-middle'>"+(data.val().loaicaytrong == 0 ? "Cây lâu năm" : "Cây ngắn ngày")+"</td>\n" +
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