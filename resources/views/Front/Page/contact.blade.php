@extends('layouts.app')

@section('content')
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>تواصل معانا</h1>
                <a href="index.php">الصفحة الرئيسية</a> <span>|</span> <a href="contact.php">تواصل معانا</a>
            </div>
        </div>
    </div>
</section>
<br><br><br>
<!-- Banner Area End -->

<!-- Map Area Starts -->

<!-- Map Area End -->


<!-- Contact Form Starts -->
<section class="contact-form section-padding3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="info-text">
                        <h3>السودان . الخرطوم</h3>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-text">
                        <h3>0999999992</h3>
                        <p>كل ايام الاسبوع - 24 ساعة</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="info-text">
                        <h3>medino@hotmail.com</h3>
                        <p>ارسل لنا في اي وقت</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="#">
                    <div class="left">
                        <input type="text" placeholder="ادخل اسمك" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                        <input type="email" placeholder="ادخل البريد الالكتروني" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                        <input type="text" placeholder="عنوان الموضوع" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                    </div>
                    <div class="right">
                        <textarea name="message" cols="20" rows="7"  placeholder="الموضوع" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                    </div>
                    <button type="submit" class="template-btn">ارسال</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->

@endsection
