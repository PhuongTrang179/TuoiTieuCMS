<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function getViewDanhSach()
    {
        return view('nguoi-dung.view-nguoi-dung');
    }

    public function getViewThem()
    {
        return view('nguoi-dung.view-them-nguoi-dung');
    }
}
