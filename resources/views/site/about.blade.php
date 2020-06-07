@extends('site.layout.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="row px-md-5" id="about">

        <div class="col-12">
            <div class="logo-about-main">
                <!--                <img src="/assets-->
            <? //= $bu . '/newcss/front/image/'?><!--socialNetwork/logo-blue.png" class="icon-about m-auto d-block d-sm-inline mr-sm-5">-->
                <h4 class="about-title text-warning mt-5 d-block d-sm-inline-block pl-3">درباره گیگاسر:</h4>
            </div>
            <p class="mt-4 text-color-body text-justify mt-sm-5 px-3" style="font-size: 16px;">چاقی و اضافه وزن مشکلی است که
                امروزه، گریبان گیر عـده زیادی از افراد شده است .آکادمی لاغری تهران با روشی اصولی و پایدار در تلاش است که با
                آموزش سواد خوردن، شما را بدون هیچ منع غذایی یا گرسنگی، به تناسب اندام و وزن دلخواهتان برساند تا بدون اینکه
                برگشت وزنی را تجربه کنید در وضعیت ایده آل تان باقی بمانید.</p>
        </div>

        <div class="col-12" id="primary">

            <div class="founder">
                <img class="image-personal" src="/assets/image/personal/gigasari.png">
                <div class="top-text">
                    <span class="title-jobPost text-color-body pr-1">مؤسس</span>
                    <span class="title-jobPost text-warning">رایمون گیگاسری</span>
                    <span class="email-personal d-block d-sm-inline-block">r.gigasari@gigasar.ir</span>
                </div>
                <span class="col-lg-11 col-12 p-0 personal-description mt-4 mt-sm-5">
                    محسن مهرورز گیگاسری معروف به رایمون گیگاسری پس از سالها زندگی با اضافه وزن توانست با روشی خاص وزن خود را از 185 کیلوگرم بیش از 90 کیلو گرم کاهش دهد.او اکنون درمانگر چاقی و مربی از راه دور هزاران نفر در سراسر جهان است.
                </span>
            </div>
            <br>
            <br>

            <div class="personal">
                <img class="image-personal" src="/assets/image/personal/mehrzadKarimpor.jpg">
                <div class="top-text">
                    <span class="title-jobPost text-color-body pr-1">مدیر روابط عمومی</span>
                    <span class="title-jobPost text-warning">مهرزاد کریم پور</span>
                    <span class="email-personal d-block d-sm-inline-block">m.karimpour@gigasar.ir</span>
                </div>
            </div>

            <div class="personal">
                <img class="image-personal" src="/assets/image/personal/hosainAsgharpor.png">
                <div class="top-text">
                    <span class="title-jobPost text-color-body pr-1">مدیر بازرسی</span>
                    <span class="title-jobPost text-warning">حسین اصغر پور</span>
                    <span class="email-personal  d-block d-sm-inline-block">asgharpour@gigasar.ir</span>
                </div>
            </div>

            <div class="personal">
                <img class="image-personal" src="/assets/image/personal/yasamanElaoeVardi.png">
                <div class="top-text">
                    <span class="title-jobPost text-color-body pr-1">مدیر پشتیبانی</span>
                    <span class="title-jobPost text-warning">یاسمن اله وردی</span>
                    <span class="email-personal  d-block d-sm-inline-block">m.alahvardi@gigasar.ir</span>
                </div>
            </div>

            <div class="personal">
                <img class="image-personal" src="/assets/image/personal/nasrinMaleki.png">
                <div class="top-text">
                    <span class="title-jobPost text-color-body pr-1">پشتیبانی فنی سایت</span>
                    <span class="title-jobPost text-warning">نسرین ملکی</span>
                    <span class="email-personal  d-block d-sm-inline-block">n.maleki@gigasar.ir</span>
                </div>
            </div>

            <div class="personal">
                <img class="image-personal" src="/assets/image/personal/etemadian.png">
                <div class="top-text">
                    <span class="title-jobPost text-color-body pr-1">مدیر سایت</span>
                    <span class="title-jobPost text-warning">مصطفی اعتمادیان</span>
                    <span class="email-personal  d-block d-sm-inline-block">etemadian@gigasar.ir</span>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>

        <div class="col-12 text-center">

            <h4 class="title_bold_yellow">مدیران شعب</h4>
            <div class="swiper-container swiper_container_pesonal" id="slider-personal">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="other-personal">
                            <img class="image-personal" src="/assets/image/personal/esfehan.png">
                            <span class="title-location">استان</span>
                            <span class="title-name">سمیه کاظمی</span>
                            <a href="tel:09134116182" class="title-tel"><i class="fa fa-phone"></i>09134116182</a>
                        </div>
                        <div class="other-personal">
                            <img class="image-personal" src="/assets/image/personal/mazandaran.png">
                            <span class="title-location">استان مازندران</span>
                            <span class="title-name">آذر محمدی</span>
                            <a href="tel:09113577421" class="title-tel"><i class="fa fa-phone"></i>09113577421</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="other-personal">
                            <img class="image-personal" src="/assets/image/personal/alborz.png">
                            <span class="title-location">استان البرز</span>
                            <span class="title-name">زهرا غلامی نسب</span>
                            <a href="tel:09127647659" class="title-tel"><i class="fa fa-phone"></i>09127647659</a>
                        </div>
                        <div class="other-personal">
                            <img class="image-personal" src="/assets/image/personal/khorasanRazavi.jpg">
                            <span class="title-location">استان خراسان رضوی</span>
                            <span class="title-name">حوراد دزیانیان</span>
                            <a href="tel:09105653277" class="title-tel"><i class="fa fa-phone"></i>09105653277</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="other-personal">
                            <img class="image-personal" src="/assets/image/personal/tehran.png">
                            <span class="title-location">استان تهران</span>
                            <span class="title-name">مریم پناهی</span>
                            <a href="tel:09127641700" class="title-tel"><i class="fa fa-phone"></i>09127641700</a>
                        </div>
                        <div class="other-personal">
                            <img class="image-personal" src="/assets/image/personal/fars.jpg">
                            <span class="title-location">استان فارس</span>
                            <span class="title-name">شیما مرادپور</span>
                            <a href="tel:09366398985" class="title-tel"><i class="fa fa-phone"></i>09366398985</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" style="top: calc(50% + 30px) !important;"></div>
                <div class="swiper-button-prev" style="top: calc(50% + 30px) !important;"></div>
            </div>
        </div>
    </div>

    <br>
    <br>

    </div>

@stop
