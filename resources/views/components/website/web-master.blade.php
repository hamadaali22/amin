<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.filer.css')}}">
    <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-rtl.css')}}">
    @yield('style')
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">

        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                            </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#">تأمين السيارات<i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="car-grid.html">تأمين ضدالغير</a></li>
                                                <li><a href="car-list.html"> تأمين شامل</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"> خدماتي <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="#">طباعة وثيقة تأمين السيارات أونلاين</a></li>
                                                <li><a href="index2.html">استعلام عن حالة ربط الوثيقة بالمرور</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li>
                                            <a href="#">جولة <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="tour-fullwidth.html">العرض الكامل للجولة</a></li>
                                                <li><a href="tour-grid.html">شبكة الرحلات</a></li>
                                                <li><a href="tour-list.html">قائمة الجولات</a></li>
                                                <li><a href="tour-left-sidebar.html">جولة في الشريط الجانبي الأيسر</a></li>
                                                <li><a href="tour-right-sidebar.html">جولة الشريط الجانبي الأيمن</a></li>
                                                <li><a href="tour-details.html">تفاصيل الجولة</a></li>
                                                <li><a href="tour-booking.html">حجز الرحلات</a></li>
                                                <li><a href="tour-search-result.html">نتيجة البحث عن الجولة</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="#">رحلة بحرية <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="cruises.html">الرحلات البحرية</a></li>
                                                <li><a href="cruises-list.html">قائمة الرحلات البحرية</a></li>
                                                <li><a href="cruise-sidebar.html">كروز الشريط الجانبي</a></li>
                                                <li><a href="cruise-details.html">تفاصيل الرحلة</a></li>
                                                <li><a href="cruise-booking.html">حجز الرحلات البحرية</a></li>
                                                <li><a href="cruise-search-result.html">نتيجة بحث الرحلات البحرية</a></li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <a href="#">تواصل معنا </a>
                                        </li>
                                        @guest
                                        @else
                                        <li>
                                            <a href="#">{{ Auth::user()->name }} حسابي<i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="car-grid.html">الملف الشخصي</a></li>
                                                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        تسجيل خروج
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div><!-- end main-menu-content -->

                            @guest
                            <div class="header-right-action">
                                @if (Route::has('login'))

                                <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">تسجيل الدخول</a>
                                @endif

                                @if (Route::has('register'))
                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">سجل</a>

                                @endif
                            </div>
                            @endguest

                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->

    @yield('content')


    <!-- ================================
       START FOOTER AREA
================================= -->
    <section class="footer-area section-bg padding-top-100px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                        </div><!-- end logo -->
                        <p class="footer__desc">كرة القدم شرب الوادي لسحب وعاء. تصوير Maecenas</p>
                        <ul class="list-items pt-3">
                            <li>3015 Grand Ave، Coconut Grove، <br> Carrick Way، FL 12345</li>
                            <li>+123-456-789</li>
                            <li><a href="#">trizen@yourwebsite.com</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">شركة</h4>
                        <ul class="list-items list--items">
                            <li><a href="about.html">معلومات عنا</a></li>
                            <li><a href="services.html">خدمات</a></li>
                            <li><a href="#">وظائف</a></li>
                            <li><a href="blog-grid.html">أخبار</a></li>
                            <li><a href="contact.html">الدعم</a></li>
                            <li><a href="#">إعلان</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">روابط أخرى</h4>
                        <ul class="list-items list--items">
                            <li><a href="#">حزم عطلة الولايات المتحدة الأمريكية</a></li>
                            <li><a href="#">رحلات طيران الولايات المتحدة الأمريكية</a></li>
                            <li><a href="#">فنادق الولايات المتحدة الأمريكية</a></li>
                            <li><a href="#">الولايات المتحدة الأمريكية تأجير السيارات</a></li>
                            <li><a href="#">انشئ حساب</a></li>
                            <li><a href="#">مراجعات Trizen</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">إشترك الآن</h4>
                        <p class="footer__desc pb-3">اشترك للحصول على آخر التحديثات والعروض الترويجية</p>
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text">أدخل عنوان البريد الالكتروني</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="عنوان البريد الالكترونى">
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">اذهب</button>
                                        <span class="font-size-14 pt-1"><i class="la la-lock mr-1"></i>معلوماتك فى امان معنا.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="#">البنود و الظروف</a></li>
                            <li><a href="#">سياسة خاصة</a></li>
                            <li><a href="#">مركز المساعدة</a></li>
                        </ul>
                    </div>
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="footer-social-box text-right">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                        <h3 class="title font-size-15 pr-2">نحن نقبل</h3>
                        <img src="images/payment-img.png" alt="">
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer-area -->
    <!-- ================================
       START FOOTER AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">سجل</h5>
                            <p class="font-size-14">مرحبا! مرحبًا ، قم بإنشاء حساب جديد</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-box col-6">
                                        <label class="label-text">الإسم الأول</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="firstname" placeholder="اكتب اسم الأول الخاص بك">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-6">
                                        <label class="label-text">الإسم الأخير</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="lastname" placeholder="اكتب اسم الأخير الخاص بك">
                                        </div>
                                    </div><!-- end input-box -->
                                </div>
                                <div class="row">
                                    <div class="input-box col-6">
                                        <label class="label-text">عنوان البريد الالكترونى</label>
                                        <div class="form-group">
                                            <span class="la la-envelope form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="اكتب بريدك الإلكتروني">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-6">
                                        <label class="label-text">رقم الهاتف</label>
                                        <div class="form-group">
                                            <span class="la la-phone form-icon"></span>
                                            <input class="form-control" type="number" name="phone" placeholder="07XXXXXXXX">
                                        </div>
                                    </div><!-- end input-box -->
                                </div>

                                <div class="input-box">
                                    <label class="label-text">كلمه السر</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password" placeholder="أكتب كلمة المرور">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">اعد كلمة السر</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="اكتب كلمة المرور مرة أخرى">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">تسجيل حساب</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">أو قم بالتسجيل باستخدام</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-google"></i></a></li>

                                    </ul>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">تسجيل الدخول</h5>
                            <p class="font-size-14">مرحبا! مرحبا بك في حسابك</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="input-box">
                                    <label class="label-text">ايميل المستخدم</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="اكتب الايميل الخاص بك">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">كلمه السر</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password" placeholder="اكتب كلمة المرور الخاصة بك">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input type="checkbox" id="rememberchb">
                                            <label for="rememberchb">تذكرنى</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="recover.html">هل نسيت كلمة المرور؟</a>
                                        </p>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">تسجيل الدخول</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">أو تسجيل الدخول باستخدام</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-google"></i></a></li>

                                    </ul>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->


    <!-- Template JS Files -->
    @yield('script')
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('js/animated-headline.js')}}"></script>
    <script src="{{asset('js/jquery.filer.min.js')}}"></script>
    <script src="{{asset('js/jquery.ripples-min.js')}}"></script>
    <script src="{{asset('js/quantity-input.js')}}"></script>
    <script src="{{asset('js/main-rtl.js')}}"></script>
</body>

</html>