<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/image/icon/logo-blue.png"/>
    <meta name="description" content="گیگاسر: موسسه بین المللی توسعه سلامت و شادی علمی">
    <meta name="keywords"
          content="گیگاسر ، رایمون گیگاسری، محسن مهرورز،موسسه گیگاسر، آکادمی لاغری تهران ،کاهش وزن، گیگایی خوردن، سواد خوردن، فتح گیگ،موسسه سواد خوردن">
    <meta name="author" content="گیگاسر">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta property="og:site_name" content="موسسه گیگاسر">
    <meta property="og:url" content="gigasar.ir">
    <meta property="og:type" content="website">
    <meta name="enamad" content="130953"/>
    <title>گیگاسر | @yield('title')</title>

    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/swiper-5.4.1.min.css" rel="stylesheet">
    <link href="/assets/font/fontawesome/css/all.min.css" rel="stylesheet">
</head>

<body>

<nav>
    <div class="container-fluid">
        <!------------------------------------------header---------------------------------------------------->
        <div class="row bg-body d-flex justify-content-md-between pb-sm-2">

            <div class="col-6 col-md-8 justify-content-between d-flex">
                <div class="d-flex pt-2">
                    <img src="/assets/image/logo-top-s.png" alt="موسسه گیگاسر" class="logo_top logo1-index pb-1">
                    <span class="text_logo">gigasar</span>
                </div>
                <h3 class="text-warning d-none titr-home mr-md-4 mt-md-5 mt-lg-4 font-weight-bold d-md-inline">موسسه بین
                    المللی توسعه سلامت و شادی علمی
                </h3>
            </div>

            <div class="col-6 col-md-4 text-left pt-3">
                <div href="#" class="top-button profile-link">
                    <span>ورود به حساب</span>
                    <ul class="profile-menu">
                        <li><a href="#">پروفایل</a></li>
                        <li><a href="#">خروج</a></li>
                    </ul>
                </div>
                <a href="#" class="top-button basket-link"><span>سبد خرید</span></a>
            </div>

        </div>
    </div>
</nav>

<main class="content">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/swiper.min.js"></script>
<script src="/assets/js/custom.js"></script>

<footer>

    <div class="menu-bottom bg-body container-fluid px-0 d-sm-none">
        <span class="menu-b-item"><img src="/assets/image/g5.png"><p>چت آنلاین</p></span>
        <span class="menu-b-item active"><img src="/assets/image/g4.png"><p>گیگایی خوردن</p></span>
        <span class="menu-b-item"><img src="/assets/image/g1.png"><p>جدول فتح گیگ</p></span>
        <span class="menu-b-item"><img src="/assets/image/g2.png"><p>اینبادی</p></span>
        <span class="menu-b-item"><img src="/assets/image/g3.png"><p>پروفایل</p></span>
    </div></footer>
</body>

</html>
