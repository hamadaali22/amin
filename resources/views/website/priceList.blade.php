<x-website.web-master>

    @section('content')

    <section class="breadcrumb-area bread-bg-8">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">قائمة الأسعار</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html">الصفحة الرئيسية</a></li>
                                <li>قائمة الأسعار</li>

                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http//www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">تم العثور على 44 شركة</h3>
                            </div>
                            <!-- <div class="layout-view d-flex align-items-center">
                            <a href="car-grid.html" data-toggle="tooltip" data-placement="top" title="عرض شبكي"><i class="la la-th-large"></i></a>
                            <a href="car-list.html" data-toggle="tooltip" data-placement="top" title="عرض القائمة" class="active"><i class="la la-th-list"></i></a>
                        </div> -->
                        </div><!-- end filter-top -->

                        <div class="filter-bar">
                            <div class="form-title-wrap">
                                <div class="step-bar-wrap text-center">
                                    <ul class="step-bar-list d-flex align-items-center justify-content-around">
                                        <li class="step-bar flex-grow-1 step-bar-active">
                                            <span class="icon-element">1</span>
                                            <p class="pt-2 color-text-2">معلومات مالك الوثيقة</p>
                                        </li>
                                        <li class="step-bar flex-grow-1 step-bar-active">
                                            <span class="icon-element">2</span>
                                            <p class="pt-2 color-text-2">اضف مركبة</p>
                                        </li>
                                        <li class="step-bar flex-grow-1">
                                            <span class="icon-element">3</span>
                                            <p class="pt-2 color-text-2">قائمة الأسعار</p>
                                        </li>
                                        <li class="step-bar flex-grow-1">
                                            <span class="icon-element">4</span>
                                            <p class="pt-2 color-text-2">التفاصيل والدفع</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" d-flex align-items-center justify-content-between pt-2">

                                <div class="filter-bar-filter d-flex flex-wrap align-items-center">

                                    <div class="advanced-wrap">
                                        <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                            معلومات مالك الوثيقة و المركبة <i class="la la-angle-down ml-1"></i>
                                        </a>

                                    </div>
                                    <div class="filter-option">
                                        <div class="dropdown dropdown-contain">
                                            <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                                شركة التأمين
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                <div class="dropdown-item">
                                                    <div class="checkbox-wrap">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="r1">
                                                            <label for="r1">
                                                                <span class="ratings d-flex align-items-center">
                                                                    <span class="color-text-3 font-size-13 ml-1">شركة اكسا للتامين التعاوني</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="r2">
                                                            <label for="r2">
                                                                <span class="ratings d-flex align-items-center">
                                                                    <span class="color-text-3 font-size-13 ml-1">الدرع العربي للتأمين</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="r3">
                                                            <label for="r3">
                                                                <span class="ratings d-flex align-items-center">
                                                                    <span class="color-text-3 font-size-13 ml-1">شركة التعاونية للتأمين التعاوني - سند بلس</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="r4">
                                                            <label for="r4">
                                                                <span class="ratings d-flex align-items-center">
                                                                    <span class="color-text-3 font-size-13 ml-1">شركة الاتحاد للتأمين التعاوني</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="r5">
                                                            <label for="r5">
                                                                <span class="ratings d-flex align-items-center">

                                                                    <span class="color-text-3 font-size-13 ml-1">شركة التعاونية للتأمين التعاوني</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown-item -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>

                                </div><!-- end filter-bar-filter -->
                                <div class="select-contain">
                                    <select class="select-contain-select">
                                        <option selected value="1">رتب حسب السعر</option>
                                        <option value="2">من الأعلى الى الأقل</option>
                                        <option value="3">من الأقل الى الأعلى</option>

                                    </select>
                                </div><!-- end select-contain -->
                            </div><!-- end filter-bar -->
                        </div>
                        <div class="pt-3 collapse" id="collapseTwo">
                            <div class="slider-range-wrap text-left ">
                                <div class="price-slider-amount padding-bottom-20px">
                                    <label for="amount" class="filter__label">معلومات مالك الوثيقة و المركبة </label> <br>
                                </div><!-- end price-slider-amount -->
                            </div><!-- end slider-range-wrap -->
                            <div class="form-content">
                                <div class="table-form table-responsive">
                                    <table class="table">

                                        <tbody>
                                            <tr class="text-left">
                                                <th scope="row">تاريخ بدء الوثيقة</th>
                                                <td>
                                                    18/08/2022
                                                </td>
                                                <th scope="row">الرقم التسلسلي</th>
                                                <td>544672410</td>
                                            </tr>
                                            <tr class="text-left">
                                                <th scope="row">مالك الوثيقة</th>
                                                <td>
                                                    2311451625
                                                </td>
                                                <th scope="row">ماركة المركبة</th>
                                                <td>كيا</td>
                                            </tr>
                                            <tr class="text-left">
                                                <th scope="row">الاسم</th>
                                                <td>
                                                    ايلاف هارون رشيد شلول
                                                </td>
                                                <th scope="row">سنة الصنع</th>
                                                <td>2015</td>
                                            </tr>
                                            <tr class="text-left">
                                                <th scope="row">عنوانك الوطني</th>
                                                <td>
                                                    4037, الملك فيصل, حائل, حي صبابة- 55461, 7089
                                                </td>
                                                <th scope="row">رقم اللوحة</th>
                                                <td>ح ك ق 2815</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img.png" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">الأكثر مبيعا</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">SUV مدمجة</p>
                            <h3 class="card-title"><a href="car-single.html">تويوتا كورولا أو ما شابه ذلك</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img2.png" alt="car-img" class="h-100">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">اساسي</p>
                            <h3 class="card-title"><a href="car-single.html">فولكس فاجن جيتا 2 أبواب أو ما شابه ذلك</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$33.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img3.png" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">متميز</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">النخبة المدمجة</p>
                            <h3 class="card-title"><a href="car-single.html">تويوتا ياريس أو ما شابه ذلك</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img4.png" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">الأكثر مبيعا</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">شاحنة بالحجم الكامل</p>
                            <h3 class="card-title"><a href="car-single.html">مقعد الحمراء أو ما شابه ذلك</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>6</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>2</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$45.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img5.png" alt="car-img" class="h-100">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">فخم. ترف</p>
                            <h3 class="card-title"><a href="car-single.html">مرسيدس الفئة E أو ما شابه ذلك</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>5</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>3</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$58.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img6.png" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">متميز</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">ميني</p>
                            <h3 class="card-title"><a href="car-single.html">فيات فييستا 2 باب أو مشابه</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img5.png" alt="car-img" class="h-100">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">فخم. ترف</p>
                            <h3 class="card-title"><a href="car-single.html">مرسيدس الفئة E أو ما شابه ذلك</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>5</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>3</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$58.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item card-item-list car-card">
                        <div class="card-img padding-top-50px">
                            <a href="car-single.html" class="d-block">
                                <img src="images/car-img6.png" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">متميز</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">ميني</p>
                            <h3 class="card-title"><a href="car-single.html">فيات فييستا 2 باب أو مشابه</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">معدل</span>
                                <span class="rating__text">(30 التعليقات)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="راكب"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="أمتعة"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">من عند</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">في اليوم</span>
                                </p>
                                <a href="car-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>تحميل المزيد</button>
                        <p class="font-size-13 pt-2">عرض 1 - 8 من 44 سيارات</p>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->

    <div class="section-block"></div>

    <!-- ================================
    START INFO AREA
================================= -->
    <section class="info-area info-bg padding-top-90px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                            <i class="la la-phone"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">تحتاج مساعدة؟ اتصل بنا</h4>
                            <p class="info__desc">
                                جزر لوريم إيبسوم ، حسومات معززة
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                            <i class="la la-money"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">المدفوعات</h4>
                            <p class="info__desc">
                                جزر لوريم إيبسوم ، حسومات معززة
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                            <i class="la la-times"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">سياسة الإلغاء</h4>
                            <p class="info__desc">
                                جزر لوريم إيبسوم ، حسومات معززة
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
    END INFO AREA
================================= -->



    @endsection
    @section('script')

    @endsection
</x-website.web-master>