@extends('layouts.app')

@section('content')

<!-- Header Area End -->

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>اطبائنا</h1>
                <a href="index.php">الصفحة الرئيسية</a> <span>|</span> <a href="doctors.php">اطبائنا</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Specialist Area Starts -->
<section class="specialist-area section-padding">
    <div class="container">
        <div class="row">
            <div class ="col-md-6">
                <div class="" style="display:none;" id="h1" >
                    <h2 style="margin-left:1000px;">نبذة</h2>
                </div>
            </div>
            <div >

                <p id="h2">  </p>
            </div>
            <br><br>
        </div>
    </div>
    <br><br>

    <div class="container">

        <div class="row">





        </div>
    </div>
</section>
<!-- Specialist Area Starts -->

<!-- Hotline Area Starts -->
<section class="hotline-area text-center section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>خط الطوارئ</h2>
                <span>(+249) – 333333333</span>
                <p class="pt-3">نحن نقدم 24/7 دعم العملاء. لا تتردد في الاتصال بنا <br>لحالات الطوارئ.</p>
            </div>
        </div>
    </div>
</section>
<!-- Hotline Area End -->

<!-- News Area Starts -->
<section class="news-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>لأخبار الطبية الأخيرة</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-img">
                        <img src="assets/images/news1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="news-text">
                        <div class="news-date">
                            22 - 7 - 2019
                        </div>
                        <h3><a href="blog-details.html">عملية تصحيح النظر</a></h3>
                        <p>سيقوك الدكتور جوزيف القادم من لندن بالقيام بعمليات تصحيح النظر في المسشتفى مجانا</p>
                        <a href="blog-details.html" class="news-btn">اقرا المزيد <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
<!-- News Area
