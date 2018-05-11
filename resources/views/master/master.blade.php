<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{!!  asset('css/bootstrap.min.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('css/tuoitieucms.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('css/toastr.min.css')  !!}" rel="stylesheet">
    <link href="{!!  asset('css/waitMe.min.css')  !!}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
    <script src="{{ asset('js/firebaseconfig.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#343a40">
        <a class="navbar-brand" href="{{url('/')}}">TuoiTieuCMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php

        ?>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/nguoi-dung')}}">Người dùng <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/thiet-bi-cam-bien')}}">Cảm biến</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/cay-trong')}}">Cây trồng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/bai-viet')}}">Bài viết</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cài đặt
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('/menu')}}">Menu</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<div class="container-fluid" style="padding-top: 10px;">
    @yield('content')
</div>
</body>
<script>
    $(document).ready(function () {
        var pathname = window.location.href;
        $('a[href="'+pathname+'"]').closest('li').addClass('active');
    });
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/waitMe.min.js') }}"></script>
@yield('script')

