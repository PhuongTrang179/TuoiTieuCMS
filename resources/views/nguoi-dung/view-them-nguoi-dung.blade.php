@extends('master.master')
@section('title') Thêm người dùng @endsection
@section('content')
    <form action="{{url('nguoi-dung', '_postthem')}}" method="post" enctype="multipart/form-data" name="Form" id="Form">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <h2>Thêm người dùng</h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a data-toggle="collapse" href="#mot" style="text-decoration: none; color: black;">
                    <h6>Thông tin</h6>
                </a>
            </div>
            <div id="mot" class="collapse show">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <label for="">Họ</label>
                            <input type="text" id="Ho" name="Ten" class="form-control"
                                   placeholder="Nhập tên..." required>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Tên</label>
                            <input type="text" id="Ten" name="Ho" class="form-control"
                                   placeholder="Nhập họ..." required>
                        </div>
                        <div class="col-6">
                            <label for="">Email</label>
                            <input type="text" name="Email" id="Email" class="form-control"
                                   placeholder="Email..." required>
                        </div>
                        <div class="col-6">
                            <label for="">Nhập lại email</label>
                            <input type="text" name="URL" id="Url" class="form-control"
                                   placeholder="Nhập lại email..." required>
                        </div>
                        <div class="col-3">
                            <label for="">Quyền</label>
                            <select class="form-control" name="" id="Quyen">
                                <option value="User">Người dùng</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="button" class="btn btn-primary btn-them" value="Thêm"/>
                <a href="{{url('nguoi-dung')}}" class="btn btn-danger">Hủy</a>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
           $('.btn-them').click(function () {
               var pass = Math.random().toString(36).slice(-10);
               firebase.auth().createUserWithEmailAndPassword($('#Email').val(), pass).then(function(data) {
                   firebase.database().ref('nguoidung').push({
                       ho: $('#Ho').val(),
                       ten: $('#Ten').val(),
                       quyenhan: $('#Quyen').val(),
                       email: $('#Email').val(),
                       uidnguoidung: data.uid
                   });
                   $.ajax({
                       url : "{{url('nguoi-dung', '_postthem')}}",
                       type : "post",
                       data : {
                           'ho' : $('#Ho').val(),
                           'ten' : $('#Ten').val(),
                           'email' : $('#Email').val(),
                           'pass' : pass,
                           '_token' : "{{ csrf_token() }}"
                       },
                       success : function (result){
                           alert("Thêm người dùng thành công!");
                           location.reload();
                       },
                       error: function (error) {
                           alert( JSON.stringify(error));
                       }
                   });
               }).catch(function(error) {
                   alert(error);
               });

           })
        });
    </script>
@endsection