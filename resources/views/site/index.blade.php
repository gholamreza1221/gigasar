@extends('site.layout.master')
@section('content')


    <div class="position-relative mt-3" id="div-slider">

        <h6 class="text-center text-warning py-2 titr-index d-block d-md-none">موسسه بین المللی توسعه سلامت و شادی علمی</h6>
        <div class="slider-holder">

            <div class="float-buttons">
                <button class="bg-body text-white c-pointer main-btn-style" id="reg-mobile-index">ثبت نام رایگان</button>
                <button class="bg-warning text-white c-pointer main-btn-style show-login" id="login-index">ورود به گیگاسر</button>
            </div>

            <div class="swiper_container_top">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="mb-2 col-12 col-lg-6 order-2 order-lg-1 text-center">
                                <p class="first-title">گیگاسر به کمپین</p>
                                <p class="second-title long-text">فاصله گذاری اجتماعی پیوست</p>
                                <!--                                <button class="reg-button-float bg-body text-white c-pointer" >3 روز رایگان</button>
                                                                <button class="login-button-float bg-body text-white c-pointer" >ورود به گیگاسر</button>-->
                            </div>
                            <div class="slide-img mb-2 col-12 col-lg-6 pl-3 order-1 order-lg-2">
                                <img src="/assets/image/slider-6.jpg" class="w-100"/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="mb-2 col-12 col-lg-6 order-2 order-lg-1 text-center">
                                <p class="first-title">آکادمی لاغری تهران</p>
                                <p class="second-title">جراحــان بدون تیغ</p>
                                <!--                                <button class="reg-button-float bg-body text-white c-pointer" >3 روز رایگان</button>
                                                                <button class="login-button-float bg-body text-white c-pointer" >ورود به گیگاسر</button>-->
                            </div>
                            <div class="slide-img mb-2 col-12 col-lg-6 pl-3 order-1 order-lg-2">
                                <img src="/assets/image/slider_1.png" class="w-100 " />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="mb-2 col-12 col-lg-6 order-2 order-lg-1 text-center">
                                <p class="first-title">آگـــاهانه قدم بزن</p>
                                <p class="second-title">آگـــاهانه غذا بخور</p>
                                <!--                                <button class="reg-button-float bg-body text-white c-pointer" >3 روز رایگان</button>
                                                                <button class="login-button-float bg-body text-white c-pointer" >ورود به گیگاسر</button>-->
                            </div>
                            <div class="slide-img mb-2 col-12 col-lg-6 pl-3 order-1 order-lg-2">
                                <img src="/assets/image/slider_2.png" class="w-100 " />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="mb-2 col-12 col-lg-6 order-2 order-lg-1 text-center">
                                <p class="first-title">گیــــــگایی بخور</p>
                                <p class="second-title">گیــــــگ فتح کن</p>
                                <!--                                <button class="reg-button-float bg-body text-white c-pointer" >3 روز رایگان</button>
                                                                <button class="login-button-float bg-body text-white c-pointer" >ورود به گیگاسر</button>-->
                            </div>
                            <div class="slide-img mb-2 col-12 col-lg-6 pl-3 order-1 order-lg-2">
                                <img src="/assets/image/slider_3.png" class="w-100 " />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="mb-2 col-12 col-lg-6 order-2 order-lg-1 text-center">
                                <p class="first-title">اول بـــــاورش کن</p>
                                <p class="second-title">ما کنـــارت هستیم</p>
                                <!--                                <button class="reg-button-float bg-body text-white c-pointer" >3 روز رایگان</button>
                                                                <button class="login-button-float bg-body text-white c-pointer" >ورود به گیگاسر</button>-->
                            </div>
                            <div class="slide-img mb-2 col-12 col-lg-6 pl-3 order-1 order-lg-2">
                                <img src="/assets/image/slider_4.png" class="w-100 " />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="mb-2 col-12 col-lg-6 order-2 order-lg-1 text-center">
                                <p class="first-title">سنجش ترکیبات بدن</p>
                                <p class="second-title">با دستـــگاه اینبادی</p>
                                <!--                                <button class="reg-button-float bg-body text-white c-pointer" >3 روز رایگان</button>
                                                                <button class="login-button-float bg-body text-white c-pointer" >ورود به گیگاسر</button>-->
                            </div>
                            <div class="slide-img mb-2 col-12 col-lg-6 pl-3 order-1 order-lg-2">
                                <img src="/assets/image/slider_5.png" class="w-100 " />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <div class="row pt-5 mt-5">

            <div class="col-lg-4 col-sm-6 col-12 my-4">
                <div class=" bg-body circle1-index " >
                    <div class="circle2-index circle11-index text-center">
                        <img src="/newcss/front/image/data.png" class="visibility-hidden" alt="چاقی">
                    </div>
                </div>
                <p class="text-center text-warning">*با ما دماغتون چاق میشه و تنتون لاغر</p>
                <p class="text-color-body text-justify px-md-5">چاقی و اضافه وزن مشکلی است که امروزه ، گریبان گیر عده زیادی از افراد شده اس.
                    آکادمی لاغری تهران با روشی اصولی و پایدار در تلاش است که با آموزش سواد خوردن، شما رابدون هیچ منع غذایی یا گرسنگی، به تناسب اندام و وزن دلخواهتان برساند تا بدون اینکه برگشت وزنی را ترجبه کنید در وضعیت ایده آل تان باقی بمانید.
                </p>
            </div>

            <div class="col-12 col-lg-4 col-sm-6 my-4">
                <div class=" bg-body circle1-index " >
                    <div class="circle2-index  img-gigasari text-center">
                        <img src="/newcss/front/image/data.png" class="visibility-hidden" alt="رایمون گیگاسری">
                    </div>
                </div>
                <p class="text-center text-warning">*رایمون گیگاسری کیست</p>
                <p class="text-color-body text-justify px-md-5">
                    محسن مهرورز گیگاسری معروف به رایمون گیگاسری پس از سالها زندگی با اضافه وزن
                    توانست با روشی خاص وزن خود را از 185 کیلوگرم بیش از 90
                    کیلوگرم کاهش دهد. او اکنون درمانگر چاقی و مربی از راه دور هزاران نفر در سراسر جهان است.
                </p>
            </div>

            <div class="col-12 col-lg-4 col-sm-6 my-4">
                <div class=" bg-body circle1-index">
                    <div class="circle2-index  tik-index text-center">
                        <img src="/newcss/front/image/data.png" class="visibility-hidden" alt="آکادمی">
                    </div>
                </div>
                <p class="text-center text-warning">*روش آکادمی لاغری تهران چیست؟</p>
                <p class="text-color-body text-justify px-md-5">
                    این مجموعه در حوضه ی لاغری و کاهش وزن با روشی خاص بدون رژیم، ورزش، دمنوش، دارو یا جراحی مشغول به فعالیت است که کاهش وزن را با استفاده از تغییر سبک زندگی و تغییر نگرش امکان پذیر میسازد.
                </p>
            </div>

            <div class="col-12 col-lg-4 col-sm-6 my-4">
                <div class=" bg-body circle1-index">
                    <div class="circle2-index h-index text-center">
                        <img src="/newcss/front/image/data.png" class="visibility-hidden">
                    </div>
                </div>
                <p class="text-center text-warning">*حضوری یا غیرحضوری؟</p>
                <p class="text-color-body text-justify px-md-5">
                    دوره ها و آموزش¬ها به صورت غیرحضوری و در بستر فضای مجازی برگزار میشوند.
                </p>
            </div>

            <div class="col-12 col-lg-4 col-sm-6 my-4">
                <div class=" bg-body circle1-index">
                    <div class="circle2-index  smile-index text-center">
                        <img src="/newcss/front/image/data.png" class="visibility-hidden">
                    </div>
                </div>
                <p class="text-center text-warning">*اولین قدم چیست؟</p>
                <p class="text-color-body text-justify px-md-5">
                    برای اینکه بتوانید عضوی از خانواده بزرگ آکادمی لاغری تهران باشید در اولین قدم در سایت ثبت نام کنید تا ما در مسیر رسیدن به تناسب اندام شما را راهنمایی کنیم.
                </p>
            </div>
        </div>

        <h3 class="col-12 text-center text-warning pb-2 pt-5 box-title">اشتراک ها</h3>
        <div class="d-md-flex mx-auto">
            <div class="d-flex col-12 col-md-6 px-0 mt-2">
                <div class="col-6 pr-1">
                    <div class="bg-body text-white py-3 text-center round7px">
                        <p class="first-title1 text-white mt-0">7 روزه</p>
                        <p class="second-title1 text-warning mb-0">رایگان</p>
                    </div>

                </div>
                <div class="col-6 pl-1">
                    <div class="bg-body text-white py-3 text-center round7px">
                        <p class="first-title1 text-white mt-0">1 ماهه</p>
                        <p class="second-title1 text-warning mb-0">100,000 تومان</p>
                    </div>
                </div>
            </div>
            <div class="d-flex col-12 col-md-6 ml-md-n3 px-0 mb-5 mt-2">
                <div class="col-6 pr-1">
                    <div class="bg-body text-white py-3 text-center round7px">
                        <p class="first-title1 text-white mt-0">3 ماهه</p>
                        <p class="second-title1 text-warning mb-0">200,000 تومان</p>
                    </div>
                </div>
                <div class="col-6 pl-1">
                    <div class="bg-body text-white py-3 text-center round7px">
                        <p class="first-title1 text-white mt-0">1 ساله</p>
                        <p class="second-title1 text-warning mb-0">500,000 تومان</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
