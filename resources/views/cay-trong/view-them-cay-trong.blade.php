@extends('master.master')
@section('title') Thêm cây trồng @endsection
@section('content')
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
            <h2>Thêm cây trồng</h2>
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
                    <div class="col-6">
                        <label for="">Tên cây trồng</label>
                        <input type="text" id="tencaytrong" class="form-control"
                               placeholder="Nhập lại tên..." required>
                    </div>
                    <div class="col-3">
                        <label for="">Họ/chủng loại cây trồng</label>
                        <input type="text" id="hocaytrong" class="form-control"
                               placeholder="Nhập họ/chủng loại cây trồng..." required>
                    </div>
                    <div class="col-3">
                        <label for="">Nguồn gốc (xuất xứ)</label>
                        <input type="text" id="nguongoccaytrong" class="form-control"
                               placeholder="Nhập nguồn gốc (xuất xứ)..." required>
                    </div>
                    <div class="col-6">
                        <label for="">Giới thiệu</label>
                        <textarea class="form-control" id="gioithieu" rows="4" maxlength="800" style="height: 200px;"
                                  placeholder="Nhập giới thiệu cây trồng, độ dài tối đa 800 ký tự..."></textarea>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Loại cây trồng</label>
                                        <select class="form-control" name="" id="Loaicay">
                                            <option value="1">Cây ngắn ngày</option>
                                            <option value="0">Cây lâu năm</option>
                                        </select>
                                    </div>
                                    <div class="col-12 nganngay">
                                        <label for="">Thời gian trồng</label>
                                        <input type="text" id="thoigiancaytrong" maxlength="3" class="form-control" onkeypress="return isNumber(event)"
                                               placeholder="Nhập số ngày..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Hình ảnh</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="row" style="margin: 0px;">
                                            <div id="page">
                                                <div class="wrap-custom-file">
                                                    <input type="file" name="file-anh" id="file-anh" accept=".jpg, .png"
                                                           src=""/>
                                                    <label for="file-anh">
                                                        <span>Chọn ảnh cây trồng</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <a data-toggle="collapse" href="#hai" style="text-decoration: none; color: black;">
                                <h6>Dinh dưỡng cây trồng</h6>
                            </a>
                        </div>
                        <div class="col-2" style="margin-top: -3px;">
                            <img src="{{asset('icon/add.png')}}" alt="" class="float-right them-dinh-duong nganngay">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="hai" class="collapse show">
            <div class="card-body dinh-duong">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="button" class="btn btn-primary btn-them" value="Thêm"/>
            <a href="#" class="btn btn-danger">Hủy</a>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{asset('js/view-dinh-duong-cay-trong.js')}}"></script>
    <script src="{{asset('js/upload-images-firebase.js')}}"></script>
    <script>
        var st = 0;

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && charCode < 48) || charCode > 57) {
                return false;
            }
            return true;
        }

        $(document).ready(function () {

            $('#Loaicay').change(function () {
                $('.dinh-duong').empty();
                // Laau nawm
                if ($('#Loaicay').val() == 0) {
                    $('.nganngay').hide();
                    $('.dinh-duong').append(viewThemDinhDuongCayLauNam());
                    st = 1;
                }
                else {
                    st = 0;
                    $('.nganngay').show();
                    $('.dinh-duong').append(viewThemDinhDuongCayNganNgay(st));
                    st++;
                }
            });

            $('#Loaicay').trigger('change');

            $('.them-dinh-duong').click(function () {
                var gach = "<div class=row style='border-top: 1px solid #f1b0b7; margin-top: 20px'></div>";
                $('.dinh-duong').append(gach + viewThemDinhDuongCayNganNgay(st));
                st++;
            });


            $('#file-anh').each(function () {
                var $file = $(this),
                    $label = $file.next('label'),
                    $labelText = $label.find('span'),
                    labelDefault = $labelText.text();
                $file.on('change', function (event) {
                    var fileName = $file.val().split('\\').pop();
                    var tmppath = URL.createObjectURL(event.target.files[0]);
                    if (fileName) {
                        $label
                            .addClass('file-ok')
                            .css('background-image', 'url(' + tmppath + ')');
                        $labelText.text(fileName);
                    } else {
                        $label.removeClass('file-ok');
                        $labelText.text(labelDefault);
                    }
                });

            });

            function ThemCayTrong(loaicay, ngaytrong, data) {
                firebase.database().ref('caytrong').push({
                    tencaytrong: $('#tencaytrong').val(),
                    hocaytrong: $('#hocaytrong').val(),
                    nguongoccaytrong: $('#nguongoccaytrong').val(),
                    gioithieu: $('#gioithieu').val(),
                    hinhanhcaytrong: data,
                    thoigiancaytrong: ngaytrong,
                    loaicaytrong: loaicay
                }).then(res => {
                    toastr.success("Thêm cây trồng thành công");
                    ThemDinhDuongCayTrong(res.getKey());
                }).catch(error => toastr.error(error));
            }

            function ThemDinhDuongCayTrong(key) {
                for(i = 0; i < st; i++) {
                    firebase.database().ref('caytrong').child(key+'/dinhduongcaytrong').push({
                        nhietdobatdau: $('.dd' + i + ' .nhietdobatdau').val(),
                        nhietdoketthuc: $('.dd' + i + ' .nhietdoketthuc').val(),
                        doambatdau: $('.dd' + i + ' .doambatdau').val(),
                        doamketthuc: $('.dd' + i + ' .doamketthuc').val(),
                        anhsangbatdau: $('.dd' + i + ' .anhsangbatdau').val(),
                        anhsangketthuc: $('.dd' + i + ' .anhsangketthuc').val(),
                        domaumobatdau: $('.dd' + i + ' .domaumobatdau').val(),
                        domaumoketthuc: $('.dd' + i + ' .domaumoketthuc').val(),
                        cacloaisaubenh: $('.dd' + i + ' .cacloaisaubenh').val(),
                        thoigianapdungbatdau: $('.dd' + i + ' .thoigianapdungbatdau').length > 0 ? $('.dd' + i + ' .thoigianapdungbatdau').val() : -1,
                        thoigianapdungketthuc: $('.dd' + i + ' .thoigianapdungketthuc').length > 0 ? $('.dd' + i + ' .thoigianapdungketthuc').val() : -1,
                        bonphan: $('.dd' + i + ' .bonphan').val(),
                    }).then(res => {
                        toastr.success("Thêm dinh dưỡng cây trồng thành công"); // this will return you ID
                        $('body').waitMe('hide');
                    }).catch(error => toastr.error(error));
                }
            }

            function url(data) {
                if($('#Loaicay').val()){
                    ThemCayTrong(1,$('#thoigiancaytrong').val(),data);
                }
                else {
                    ThemCayTrong(0,-1,data);
                }
            };

            $('.btn-them').click(function () {
                /*for(i = 0; i < st; i++){
                   alert($('.dd' + i + ' .nhiet-do').val());
                   nhietdoketthuc: $('#Ho').val(),
                        doambatdau: $('#Ho').val(),
                        doamketthuc: $('#Ho').val(),
                        anhsangbatdau: $('#Ho').val(),
                        anhsangketthuc: $('#Ho').val(),
                        domaumobatdau: $('#Ho').val(),
                        domaumoketthuc: $('#Ho').val(),
                        uidnguoidung: data.uid
                }*/
                var file = document.querySelector('#file-anh').files[0];
                UploadImage(file, url);
                $('body').waitMe();
            });

        });
    </script>
@endsection