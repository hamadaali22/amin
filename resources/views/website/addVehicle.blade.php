<x-website.web-master>

    @section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-8">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="search-result-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">اضف مركبة</h2>
                            </div>
                            <div class="search-fields-container margin-top-30px">
                                <div class="tab-content search-fields-container" id="myTabContent">
                                    <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                        <div class="section-tab section-tab-2 pb-3">
                                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                                        الاستمارة
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                                        البطاقة الجمركية
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- end section-tab -->
                                        <div class="tab-content" id="myTabContent3">
                                            <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                                <div class="contact-form-action">
                                                    <form action="#" class="row align-items-center">
                                                        <div class="col-lg-3 pr-0">
                                                            <div class="input-box">
                                                                <label class="label-text">الرقم التسلسلي</label>
                                                                <div class="form-group">
                                                                    <span class="la la-credit-card form-icon"></span>
                                                                    <input class="form-control" type="text" placeholder="الرقم التسلسلي">
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                        <div class="col-lg-3">
                                                            <div class="section-tab section-tab-2 pb-3">
                                                                <label class="label-text"> هل تريد نقل ملكية المركبة؟</label>
                                                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#hide-manufacturing-year" role="tab" aria-controls="one-way" aria-selected="true">
                                                                            لا.
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#manufacturing-year" role="tab" aria-controls="round-trip" aria-selected="false">
                                                                            نعم.
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- end section-tab -->
                                                        </div><!-- end col-lg-3 -->
                                                        <div class="col-lg-2 col-sm-2 pr-0">
                                                            <div class="input-box">
                                                                <label class="label-text">الغرض من الإستخدام</label>
                                                                <div class="form-group">
                                                                    <div class="select-contain w-auto">
                                                                        <select class="select-contain-select">
                                                                            <option value="1200AM">12:00صباحا</option>
                                                                            <option value="1230AM">12:30صباحا</option>
                                                                            <option value="0100AM">1:00صباحا</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                        <div id="hide-manufacturing-year" class="col-lg-0 col-sm-0 pr-0 tab-pane fade" id="hide-manufacturing-year"></div>
                                                        <div id="manufacturing-year" class="col-lg-4 col-sm-2 d-flex flex-row pr-0 tab-pane fade">
                                                            <div class="input-box col-lg-6 ">
                                                                <label class="label-text">سنة الصنع</label>
                                                                <div class="form-group">
                                                                    <div class="select-contain w-auto">
                                                                        <select class="select-contain-select">
                                                                            <option value="1200AM">12:00صباحا</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-sm-2 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text">تاريخ الميلاد</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-calendar form-icon"></span>
                                                                        <input class="date-picker-single form-control" type="text" name="date" readonly="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->



                                                        <div class="col-lg-3">
                                                            <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">الإستمرار</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- end tab-pane -->
                                            <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                                <div class="contact-form-action">
                                                    <form action="#" class="row align-items-center">
                                                        <div class="col-lg-3 pr-0">
                                                            <div class="input-box">
                                                                <label class="label-text">رقم البطاقة الجمركية</label>
                                                                <div class="form-group">
                                                                    <span class="la la-credit-card form-icon"></span>
                                                                    <input class="form-control" type="text" placeholder="رقم البطاقة الجمركية">
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                        <div class="input-box col-lg-3 ">
                                                            <label class="label-text">سنة الصنع</label>
                                                            <div class="form-group">
                                                                <div class="select-contain w-auto">
                                                                    <select class="select-contain-select">
                                                                        <option value="1200AM">12:00صباحا</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-2 pr-0">
                                                            <div class="input-box">
                                                                <label class="label-text">الغرض من الإستخدام</label>
                                                                <div class="form-group">
                                                                    <div class="select-contain w-auto">
                                                                        <select class="select-contain-select">
                                                                            <option value="1200AM">12:00صباحا</option>
                                                                            <option value="1230AM">12:30صباحا</option>
                                                                            <option value="0100AM">1:00صباحا</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->

                                                        <div class="col-lg-2 col-sm-2 pr-0">
                                                            <div class="input-box">
                                                                <label class="label-text">تاريخ الميلاد</label>
                                                                <div class="form-group">
                                                                    <span class="la la-calendar form-icon"></span>
                                                                    <input class="date-picker-single form-control" type="text" name="date" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="col-lg-3">
                                                            <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">الإستمرار
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div><!-- end tab-pane -->

                                        </div>
                                    </div><!-- end tab-pane -->

                                </div>
                                <div class="advanced-wrap">
                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                        إضافة سائق<i class="la la-angle-down ml-1"></i>
                                    </a>
                                    <div class="pt-3 collapse" id="collapseTwo">
                                        <div class="slider-range-wrap ">
                                            <div class="price-slider-amount padding-bottom-20px">
                                                <label for="amount" class="filter__label">قائمة السائقين</label> <br>
                                                <span>لضمان تغطية التأمين لجميع سائقي المركبة (للتأمين الشامل) يجب إدخال كافات البيانات المطلوبة</span>
                                            </div><!-- end price-slider-amount -->
                                        </div><!-- end slider-range-wrap -->
                                        <div class="form-content">
                                            <div class="table-form table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">رقم هوية السائق</th>
                                                            <th scope="col">تاريخ الميلاد</th>
                                                            <th scope="col">الاسم الكامل</th>
                                                            <th scope="col">نسبة القيادة</th>

                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><i class="la la-credit-card mr-1 font-size-18"></i>2311451625</th>
                                                            <td>
                                                                15/4/1992
                                                            </td>
                                                            <td>علي عبيدات</td>

                                                            <td>90%</td>
                                                            <td>
                                                                <div class="table-content">
                                                                    <button class="theme-btn theme-btn-small">حذف</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="tab-content" id="myTabContent3">
                                                <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="one-way-tab">
                                                    <div class="contact-form-action">
                                                        <form action="#" class="row align-items-center">
                                                            <div class="col-lg-6 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text">رقم الهوية</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-credit-card form-icon"></span>
                                                                        <input class="form-control" type="text" placeholder="رقم الهوية">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-6">
                                                                <div class="input-box">
                                                                    <label class="label-text">الميلاد تاريخ</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-calendar form-icon"></span>
                                                                        <input class="date-picker-single form-control" type="text" name="date" readonly="">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-6 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text">رمز التحقق</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-meh-o form-icon"></span>
                                                                        <input class="form-control" type="text" placeholder="رمز التحقق">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->


                                                            <div class="col-lg-6">
                                                                <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">أضف هذا السائق
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- end tab-pane -->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="Form-label--tick">
                            <input class="Form-label-checkbox valid" data-val="true" data-val-mustbetrue="يرجى قراءة الإقرار والموافقة عليه للمتابعة" data-val-required="الرجاء الإقرار بالمدخلات" id="Declaration" name="Declaration" type="checkbox" value="false" tabindex="108">
                            <span class="Form-label-text"> أوافق على منح شركة بيت التأمين الحق في الاستعلام من أي جهة ذات علاقة عن بياناتي أو أي بيانات أخرى </span>
                        </label>
                                <!-- <div class="btn-box pt-3">
                                    <button class="theme-btn" type="button">ابحث الآن</button>
                                </div> -->
                            </div><!-- end search-fields-container -->
                        </div><!-- end search-result-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->




    @endsection
    @section('script')

    @endsection
</x-website.web-master>