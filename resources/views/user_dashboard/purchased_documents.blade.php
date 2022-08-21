@extends('dashboard.dashboard_layout')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="dashboard-bread dashboard--bread dashboard-bread-2">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="breadcrumb-content">
                                <div class="section-heading">
                                    <h2 class="sec__title font-size-30 text-white">الوثائق التي تم شراؤها</h2>
                                </div>
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end dashboard-bread -->
            <div class="container mt-4">
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
    </div>
        </div><!-- end dashboard-content-wrap -->
    </section>
@endsection
