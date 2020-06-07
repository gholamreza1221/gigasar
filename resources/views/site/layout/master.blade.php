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

        <!----------------------menu----------------------------------------->

            <div class="main-menu">
                <div class="swiper-container_menu">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/" class="d-block text-center">
                                <span class="menu_icon nav-home"></span>
                                <span class="pt-3 text-color-body">خانه</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/about" class="d-block text-center">
                                <span class="menu_icon nav-about "></span>
                                <span class="pt-3 text-color-body">درباره ما</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-question"></span>
                                <span class="pt-3 text-color-body">سوالات متداول</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-share dd"></span>
                                <span class="pt-3 text-color-body">اشتراک</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-inbody"></span>
                                <span class="pt-3 text-color-body">اینبادی</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-shop"></span>
                                <span class="pt-3 text-color-body">فروشگاه</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-blog"></span>
                                <span class="pt-3 text-color-body">وبلاگ</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-app"></span>
                                <span class="pt-3 text-color-body">اپلیکیشن</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block text-center">
                                <span class="menu_icon nav-vote"></span>
                                <span class="pt-3 text-color-body">پیشنهاد</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://t.me/gigasar" class="d-block text-center">
                                <span class="menu_icon nav-channel"></span>
                                <span class="pt-3 text-color-body">کانال</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.instagram.com/gigasar.ir" class="d-block text-center">
                                <span class="menu_icon nav-insta"></span>
                                <span class="pt-3 text-color-body">اینستاگرام</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" data="02188546700" class="d-block text-center">
                                <span class="menu_icon nav-contact"></span>
                                <span class="pt-3 text-color-body">تماس با ما</span>
                            </a>
                        </div>
                    </div>
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

    <div class="row bg-body text-center pt-1 px-md-5 text-center">
        <div class="col-12 pb-1 social-network">
            <a href="https://t.me/gigasar" class="social-network-item">
                <div class="bg-icon">
                    <img src="/assets/image/socialNetwork/telegram.png" class="icon-social-network">
                </div>
                <span class="d-none d-sm-inline-block">کانال</span>
            </a>
            <a href="https://www.instagram.com/gigasar.ir" class="social-network-item">
                <div class="bg-icon">
                    <img src="/assets/image/socialNetwork/instagram.png" class="icon-social-network">
                </div>
                <spqn class="d-none d-sm-inline-block">اینستاگرام</spqn>
            </a>
            <a href="https://www.aparat.com/gigasar.ir" class="social-network-item">
                <div class="bg-icon">
                    <img src="/assets/image/socialNetwork/aparat.png" class="icon-social-network">
                </div>
                <span class="d-none d-sm-inline-block">آپارات</span>
            </a>
            <a href="" class="social-network-item">
                <div class="bg-icon">
                    <img src="/assets/image/socialNetwork/youtube.png" class="icon-social-network">
                </div>
                <span class="d-none d-sm-inline-block">یوتیوب</span>
            </a>
            <a href="tel:02188546700" class="social-network-item">
                <div class="bg-icon">
                    <img src="/assets/image/socialNetwork/contactUs.png" class="icon-social-network">
                </div>
                <span class="d-none d-sm-inline-block">تماس با ما</span>
            </a>
        </div>
        <p class="text-white m-auto">کلیه حقوق مادی و معنوی سایت متعلق به گیگاسر می باشد</p>
    </div>
</footer>
</body>

</html>
