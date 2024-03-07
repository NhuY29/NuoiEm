<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Dự Án Nuôi Em</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="resources/images/logo.svg" type="image/png">

    <!--====== Animate CSS ======-->
    <!-- <link rel="stylesheet" href="resources/css/animate.css"> -->
    <link rel="stylesheet" href="{{ asset('resources/css/animate.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="resources/css/LineIcons.2.0.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="resources/css/bootstrap-5.0.5-alpha.min.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">


</head>>

<body>
    <header class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img id="logo" src="resources/images/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <!-- <li class="nav-item">
										<a class="page-scroll" href="#gioi-thieu">Giới Thiệu</a>
									</li> -->
                                    <li class="nav-item">
                                        <nav id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown hover:bg-gray-200">
                                        <a class="nav-link dropdown-toggle text-white hover:text-gray-800 focus:outline-none py-2 px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Menu
                                        </a>
                                        <div class="dropdown-menu shadow-sm rounded-md mt-2 absolute right-0 bg-white w-48 z-50 hidden" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item block py-2 px-4 text-sm hover:bg-gray-100" href="#">Nhận Mã</a>
                                            <a class="dropdown-item block py-2 px-4 text-sm hover:bg-gray-100" href="#">Tra Mã</a>
                                            <a class="dropdown-item block py-2 px-4 text-sm hover:bg-gray-100" href="#">Thăm Em</a>
                                            <a class="dropdown-item block py-2 px-4 text-sm hover:bg-gray-100" href="#">Hệ Sinh Thái</a>
                                            <a class="dropdown-item block py-2 px-4 text-sm hover:bg-gray-100" href="#">Đăng Xuất</a>
                                        </div>
                                    </li>
                        </nav>

                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#tra-ma">Tra Mã</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#tham-em">Thăm Em</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#he-sinh-thai">Hệ Sinh Thái</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-btn btn-hover" href="#courses">Đăng Xuất</a>
                        </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        </div> <!-- header navbar -->
    </header>
</body>

</html>
<style>
    .header_navbar {
        background-color: darkblue;
        height: 90px;
        display: flex;
        align-items: center;
        /* Căn giữa theo chiều dọc */
        justify-content: space-between;
        /* Căn giữa theo chiều ngang và tạo khoảng cách giữa các phần tử */
    }
</style>