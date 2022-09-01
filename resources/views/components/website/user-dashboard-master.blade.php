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
</head>

<body class="section-bg">
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
       START USER CANVAS MENU
================================= -->
    <div class="user-canvas-container">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="user-canvas-nav">
            <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                            إشعارات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">
                            الحساب
                        </a>
                    </li>
                </ul>
            </div><!-- end section-tab -->
        </div>
        <div class="user-canvas-nav-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="notification-item">
                            <div class="list-group drop-reveal-list">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">تم ارسال طلبك</h3>
                                            <p class="msg-text">قبل دقيقتين</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">لقد تم إنشاء حسابك</h3>
                                            <p class="msg-text">1 منذ يوم</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">تم تحديث حسابك</h3>
                                            <p class="msg-text">قبل ساعتين</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">تم تغيير كلمة المرور الخاصة بك</h3>
                                            <p class="msg-text">في الامس</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0"><i class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">تم إرسال البريد الإلكتروني الخاص بك</h3>
                                            <p class="msg-text">في الامس</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0"><i class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">تغير بريدك الإلكتروني</h3>
                                            <p class="msg-text">في الامس</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="notification-item">
                            <a href="user-dashboard-profile.html" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg" alt="team-img"></div>
                                    <span class="font-size-14 font-weight-bold">علي توفان</span>
                                </div>
                            </a>
                            <div class="list-group drop-reveal-list user-drop-reveal-list">
                                <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-user mr-2"></i>ملفي</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-shopping-cart mr-2"></i>الحجز</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-heart mr-2"></i>تعليقاتي</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-gear mr-2"></i>الإعدادات</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <div class="section-block"></div>
                                <a href="index.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-power-off mr-2"></i>تسجيل خروج</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-canvas-container -->
    <!-- ================================
       END USER CANVAS MENU
================================= -->

    <!-- ================================
       START DASHBOARD NAV
================================= -->
    <div class="sidebar-nav">
        <div class="sidebar-nav-body">
            <div class="side-menu-close">
                <i class="la la-times"></i>
            </div><!-- end menu-toggler -->
            <div class="author-content">
                <div class="d-flex align-items-center">
                    <div class="author-img avatar-sm">
                        <img src="{{asset('images/avatar.jpeg')}}" alt="testimonial image">
                    </div>
                    <div class="author-bio">
                        <h4 class="author__title">علي توفان</h4>
                        <span class="author__meta">عضو منذ مايو 2017</span>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrap">
                {{request()->is('user_profile/purchased_documents')}}
                <ul class="sidebar-menu list-items">
                    <li class="{{ request()->is('user_profile') ? 'page-active' : '' }}">
                        <a href="/user_profile">
                            <i class=" mr-2">
                                @if(request()->is('user_profile'))
                                <svg id="tune_black_24dp_1_" data-name="tune_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 37 36">
                                    <path id="Path_228" data-name="Path 228" d="M0,0H37V36H0Z" fill="none" />
                                    <path id="Path_229" data-name="Path 229" d="M3,26.333v3.333H13.333V26.333Zm0-20V9.667H20.222V6.333ZM20.222,33V29.667H34V26.333H20.222V23H16.778V33ZM9.889,13v3.333H3v3.333H9.889V23h3.444V13ZM34,19.667V16.333H16.778v3.333ZM23.667,13h3.444V9.667H34V6.333H27.111V3H23.667Z" transform="translate(0 0)" fill="#fff" />
                                </svg>
                                @else
                                <svg id="tune_black_24dp_1_" data-name="tune_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 37 36">
                                    <path id="Path_228" data-name="Path 228" d="M0,0H37V36H0Z" fill="none" />
                                    <path id="Path_229" data-name="Path 229" d="M3,26.333v3.333H13.333V26.333Zm0-20V9.667H20.222V6.333ZM20.222,33V29.667H34V26.333H20.222V23H16.778V33ZM9.889,13v3.333H3v3.333H9.889V23h3.444V13ZM34,19.667V16.333H16.778v3.333ZM23.667,13h3.444V9.667H34V6.333H27.111V3H23.667Z" transform="translate(0 0)" fill="#6184f0" />
                                </svg>
                                @endif
                            </i>لوحة التحكم</a>
                    </li>
                    <li>
                        <a class="" href="/user_profile/purchased_documents">
                            <i class=" mr-2 text-color">
                                @if(request()->is('/user_profile/purchased_documents'))
                                <svg xmlns="http://www.w3.org/2000/svg" id="replay_circle_filled_black_48dp" width="25" height="25" viewBox="0 0 39 39">
                                    <path id="Path_235" data-name="Path 235" d="M0,0H39V39H0Z" fill="none" />
                                    <path id="Path_236" data-name="Path 236" d="M19.5,2A17.5,17.5,0,1,0,37,19.5,17.506,17.506,0,0,0,19.5,2ZM30,19.5a10.5,10.5,0,1,1-21,0h3.5a7,7,0,1,0,7-7v5.25l-7-7,7-7V9A10.508,10.508,0,0,1,30,19.5Z" fill="#fff" fill-rule="evenodd" />
                                </svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" id="replay_circle_filled_black_48dp" width="25" height="25" viewBox="0 0 39 39">
  <path id="Path_235" data-name="Path 235" d="M0,0H39V39H0Z" fill="none"/>
  <path id="Path_236" data-name="Path 236" d="M19.5,2A17.5,17.5,0,1,0,37,19.5,17.506,17.506,0,0,0,19.5,2ZM30,19.5a10.5,10.5,0,1,1-21,0h3.5a7,7,0,1,0,7-7v5.25l-7-7,7-7V9A10.508,10.508,0,0,1,30,19.5Z" fill="#6184f0" fill-rule="evenodd"/>
</svg>
                                @endif
                            </i>استرجع وثيقة التأمين</a>
                    </li>
                    <li class="{{ request()->is('user_profile/purchased_documents') ? 'page-active' : '' }}"><a href="/user_profile/purchased_documents"><i class="la la-user mr-2 text-color-2"></i>الوثائق التي تم شراؤها</a></li>
                    <li class="{{ request()->is('user_profile/registered_IDs*') ? 'page-active' : '' }}"><a href="/user_profile/registered_IDs"><i class="la la-credit-card mr-2 text-color-3"></i>الهويات المسجلة</a></li>
                    <li class="{{ request()->is('user_profile/registered_cars*') ? 'page-active' : '' }}"><a href="/user_profile/registered_cars"><i class="la la-car mr-2 text-color-4"></i>المركبات المسجلة</a></li>
                    <li class="{{ request()->is('user_profile/setting*') ? 'page-active' : '' }}"><a href="/user_profile/setting"><i class="la la-cog mr-2 text-color-5"></i>الإعدادات</a></li>
                    <li><a href="index.html"><i class="la la-power-off mr-2 text-color-6"></i>تسجيل خروج</a></li>
                </ul>
            </div><!-- end sidebar-menu-wrap -->
        </div>
    </div><!-- end sidebar-nav -->
    <!-- ================================
       END DASHBOARD NAV
================================= -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
        <div class="dashboard-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <div class="logo mr-5">
                                <a href="/"><img class="p-2" width="100px" height="70px" src="{{asset('images/ammenlogo.png')}}" alt="logo"> <span id="logo_name" style="">لتأمين المركبات</span></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div><!-- end user-menu-open -->
                            </div>
                            <div class="dashboard-search-box">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="text" placeholder="ابحث هنا">
                                            <button class="search-btn"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="nav-btn ml-auto">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-2">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-reveal-toggle-icon" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-bell"></i>
                                                <span class="noti-count">4</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                                <div class="dropdown-header drop-reveal-header">
                                                    <h6 class="title">لديك <strong class="text-black"> 4 </strong> إشعارات</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">تم ارسال طلبك</h3>
                                                                <p class="msg-text">قبل دقيقتين</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">لقد تم إنشاء حسابك</h3>
                                                                <p class="msg-text">1 منذ يوم</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">تم تحديث حسابك</h3>
                                                                <p class="msg-text">قبل ساعتين</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">تم تغيير كلمة المرور الخاصة بك</h3>
                                                                <p class="msg-text">في الامس</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                                <a href="#" class="dropdown-item drop-reveal-btn text-center">مشاهدة الكل</a>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg" alt="team-img"></div>
                                                    <span class="font-size-14 font-weight-bold">علي توفان</span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                                <div class="dropdown-item drop-reveal-header user-reveal-header">
                                                    <h6 class="title text-uppercase">أهلا بك!</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list user-drop-reveal-list">
                                                    <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-user mr-2"></i>ملفي</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-shopping-cart mr-2"></i>الحجز</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-heart mr-2"></i>تعليقاتي</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-gear mr-2"></i>الإعدادات</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <div class="section-block"></div>
                                                    <a href="index.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-power-off mr-2"></i>تسجيل خروج</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                </div>
                            </div><!-- end nav-btn -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-nav -->
        @yield('content')
    </section><!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    <!-- start scroll top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

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
    <script src="{{asset('js/chart.js')}}"></script>
    <script src="{{asset('js/chart.extension.js')}}"></script>
    <script src="{{asset('js/bar-chart.js')}}"></script>
    <script src="{{asset('js/jquery.filer.min.js')}}"></script>
    <script src="{{asset('js/jquery.ripples-min.js')}}"></script>
    <script src="{{asset('js/quantity-input.js')}}"></script>
    <script src="{{asset('js/main-rtl.js')}}"></script>
</body>

</html>