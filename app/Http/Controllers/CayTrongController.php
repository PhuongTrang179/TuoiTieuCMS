<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CayTrongController extends Controller
{
    public function getViewDanhSach()
    {
        return view('cay-trong.view-cay-trong');
    }

    public function getViewThem()
    {
        return view('cay-trong.view-them-cay-trong');
    }
}
