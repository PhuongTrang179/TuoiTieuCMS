function viewThemDinhDuongCayNganNgay(id) {
    var view = "<div class='row dd" + id + "'>\n" +
        "            <div class='col-6'>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Nhiệt độ</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control nhietdobatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control nhietdoketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(°C)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Độ ẩm</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control doambatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control doamketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(%)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Ánh sáng</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control anhsangbatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control anhsangketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(lux)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Độ màu mỡ</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control domaumobatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control domaumoketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(µS/cm)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>\n" +
        "            <div class='col-6'>\n" +
        "                <label for=''>Bón phân</label>\n" +
        "                <textarea class='form-control bonphan' rows='4' maxlength='600' style='height: 120px;'\n" +
        "                          placeholder='Nhập giới thiệu cây trồng, độ dài tối đa 600 ký tự...'></textarea>\n" +
        "            </div>\n" +
        "            <div class='col-6'>\n" +
        "                <label for=''>Các loại sâu bệnh</label>\n" +
        "                <input type='text' class='form-control cacloaisaubenh'\n" +
        "                       placeholder='Nhập lại tên...' required>\n" +
        "            </div>\n" +
        "            <div class='col-3 nganngay'>\n" +
        "                <label for=''>Thời gian áp dụng dinh dưỡng</label>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col-5'>\n" +
        "                        <input type='text' class='form-control thoigianapdungbatdau'\n" +
        "                               placeholder='Từ ngày...' required>\n" +
        "                    </div>\n" +
        "                    <span style='padding-top: 5px;'>-</span>\n" +
        "                    <div class='col-5'>\n" +
        "                        <input type='text' class='form-control thoigianapdungketthuc'\n" +
        "                               placeholder='đến ngày...' required>\n" +
        "                    </div>\n" +
        "                    <span style='padding-top: 5px;'>(ngày)</span>\n" +
        "                </div>\n" +
        "            </div>\n" +
        "        </div>";
    return view;
}

function viewThemDinhDuongCayLauNam() {
    var view = "<div class='row dd0'>\n" +
        "            <div class='col-6'>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Nhiệt độ</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control nhietdobatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control nhietdoketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(°C)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Độ ẩm</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control doambatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control doamketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(%)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Ánh sáng</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control anhsangbatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control anhsangketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(lux)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col-6'>\n" +
        "                        <label for=''>Độ màu mỡ</label>\n" +
        "                        <div class='row'>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control domaumobatdau'\n" +
        "                                       placeholder='Từ giá trị...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>-</span>\n" +
        "                            <div class='col-5'>\n" +
        "                                <input type='text' class='form-control domaumoketthuc'\n" +
        "                                       placeholder='đến...' required>\n" +
        "                            </div>\n" +
        "                            <span style='padding-top: 5px;'>(µS/cm)</span>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>\n" +
        "            <div class='col-6'>\n" +
        "                <label for=''>Bón phân</label>\n" +
        "                <textarea class='form-control bonphan' rows='4' maxlength='600' style='height: 120px;'\n" +
        "                          placeholder='Nhập giới thiệu cây trồng, độ dài tối đa 600 ký tự...'></textarea>\n" +
        "            </div>\n" +
        "            <div class='col-6'>\n" +
        "                <label for=''>Các loại sâu bệnh</label>\n" +
        "                <input type='text' class='form-control cacloaisaubenh'\n" +
        "                       placeholder='Nhập lại tên...' required>\n" +
        "            </div>\n" +
        "        </div>";
    return view;
}