<x-website.web-master>
    @section('title')
    <title>قائمة العروض</title>
    @endsection
    @section('content')

    <section class="breadcrumb-area bread-bg-8">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-black-50">قائمة الأسعار</h2>
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
                                <h3 class="title font-size-24">تم العثور على {{count($companies)}} شركة</h3>
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
                                            <p class="pt-2 color-text-2 small">معلومات مالك الوثيقة</p>
                                        </li>
                                        <li class="step-bar flex-grow-1 step-bar-active">
                                            <span class="icon-element">2</span>
                                            <p class="pt-2 color-text-2 small">تفاصيل الحجز والدفع</p>
                                        </li>
                                        <li class="step-bar flex-grow-1">
                                            <span class="icon-element">3</span>
                                            <p class="pt-2 color-text-2 small">قائمة الأسعار</p>
                                        </li>
                                        <li class="step-bar flex-grow-1">
                                            <span class="icon-element">4</span>
                                            <p class="pt-2 color-text-2 small">التفاصيل والدفع</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-title-wrap2">
                                <div class="row pr-3">
                                    <div class="col-lg-3 col-sm-3 progress_car">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.917" height="24.126" viewBox="0 0 57.917 24.126">
                                            <g id="_4047289_auto_car_compact_automible_icon_1_" data-name="4047289_auto_car_compact_automible_icon (1)" transform="translate(-1276.232 366.065)">
                                                <path id="Path_57" data-name="Path 57" d="M153.93,357.235h3.628a5.751,5.751,0,0,0,11.351,0h25.7a5.751,5.751,0,0,0,11.351,0h2.974a1.217,1.217,0,0,0,.856-.35,1.18,1.18,0,0,0,.065-1.617l-.617-.712c1.378-2.79.9-6.787.435-9.089a4.831,4.831,0,0,0-2.242-3.191,35.749,35.749,0,0,0-7.713-3.239c-7.821-2.456-21.646-.322-24.368,1.675-2.169,1.59-6.461,5.359-11.9,5.917a27.259,27.259,0,0,0-6.921,1.672,3.947,3.947,0,0,0-2.541,3.542l-.059,1.707-.943.62a1.68,1.68,0,0,0-.555.6,1.652,1.652,0,0,0-.2.789A1.685,1.685,0,0,0,153.93,357.235Zm49.948,0a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254a3.624,3.624,0,0,1,7.2,0C203.89,357.067,203.886,357.152,203.879,357.235Zm4.6-8.147a.581.581,0,0,1,.5.517,11.935,11.935,0,0,1-.243,2.906.607.607,0,0,1-.612.457H207.7a.584.584,0,0,1-.619-.608l.25-2.384a.529.529,0,0,1,.158-.321l.4-.4A.668.668,0,0,1,208.479,349.088Zm-12.2-5.173.419-1.742a1.95,1.95,0,0,1,1.761-1.414l.355-.033c.075.022.151.044.223.067a33.659,33.659,0,0,1,7.236,3.024,2.981,2.981,0,0,1,1.36,1.976q.03.152.059.3h-9.441a2.18,2.18,0,0,1-1.2-.351A1.711,1.711,0,0,1,196.274,343.915Zm-8.614,6.225h-2.082a.637.637,0,1,1,0-1.265h2.082a.637.637,0,1,1,0,1.265Zm-11.825-7.355c.319-.244.6-.455.839-.634a15.945,15.945,0,0,1,5.055-1.514,51.852,51.852,0,0,1,8.331-.832l-.968,4.963A2.931,2.931,0,0,1,186.237,347l-14.454.524a3.234,3.234,0,0,1-2.2-.74A34.082,34.082,0,0,0,175.834,342.785Zm-12.6,10.978a3.43,3.43,0,0,1,3.6,3.219c0,.086,0,.17-.012.254a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254A3.43,3.43,0,0,1,163.234,353.763Zm-7.064-3.573c.567,0,1.027.622,1.027,1.389s-.46,1.389-1.027,1.389-1.027-.622-1.027-1.389S155.6,350.19,156.17,350.19Z" transform="translate(1124 -704)" fill="#7095ff" />
                                            </g>
                                        </svg>
                                        <span class="progress_title_active">معلومات مالك الوثيقة</span>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 progress_car"> <svg xmlns="http://www.w3.org/2000/svg" width="57.917" height="24.126" viewBox="0 0 57.917 24.126">
                                            <g id="_4047289_auto_car_compact_automible_icon_1_" data-name="4047289_auto_car_compact_automible_icon (1)" transform="translate(-1276.232 366.065)">
                                                <path id="Path_57" data-name="Path 57" d="M153.93,357.235h3.628a5.751,5.751,0,0,0,11.351,0h25.7a5.751,5.751,0,0,0,11.351,0h2.974a1.217,1.217,0,0,0,.856-.35,1.18,1.18,0,0,0,.065-1.617l-.617-.712c1.378-2.79.9-6.787.435-9.089a4.831,4.831,0,0,0-2.242-3.191,35.749,35.749,0,0,0-7.713-3.239c-7.821-2.456-21.646-.322-24.368,1.675-2.169,1.59-6.461,5.359-11.9,5.917a27.259,27.259,0,0,0-6.921,1.672,3.947,3.947,0,0,0-2.541,3.542l-.059,1.707-.943.62a1.68,1.68,0,0,0-.555.6,1.652,1.652,0,0,0-.2.789A1.685,1.685,0,0,0,153.93,357.235Zm49.948,0a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254a3.624,3.624,0,0,1,7.2,0C203.89,357.067,203.886,357.152,203.879,357.235Zm4.6-8.147a.581.581,0,0,1,.5.517,11.935,11.935,0,0,1-.243,2.906.607.607,0,0,1-.612.457H207.7a.584.584,0,0,1-.619-.608l.25-2.384a.529.529,0,0,1,.158-.321l.4-.4A.668.668,0,0,1,208.479,349.088Zm-12.2-5.173.419-1.742a1.95,1.95,0,0,1,1.761-1.414l.355-.033c.075.022.151.044.223.067a33.659,33.659,0,0,1,7.236,3.024,2.981,2.981,0,0,1,1.36,1.976q.03.152.059.3h-9.441a2.18,2.18,0,0,1-1.2-.351A1.711,1.711,0,0,1,196.274,343.915Zm-8.614,6.225h-2.082a.637.637,0,1,1,0-1.265h2.082a.637.637,0,1,1,0,1.265Zm-11.825-7.355c.319-.244.6-.455.839-.634a15.945,15.945,0,0,1,5.055-1.514,51.852,51.852,0,0,1,8.331-.832l-.968,4.963A2.931,2.931,0,0,1,186.237,347l-14.454.524a3.234,3.234,0,0,1-2.2-.74A34.082,34.082,0,0,0,175.834,342.785Zm-12.6,10.978a3.43,3.43,0,0,1,3.6,3.219c0,.086,0,.17-.012.254a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254A3.43,3.43,0,0,1,163.234,353.763Zm-7.064-3.573c.567,0,1.027.622,1.027,1.389s-.46,1.389-1.027,1.389-1.027-.622-1.027-1.389S155.6,350.19,156.17,350.19Z" transform="translate(1124 -704)" fill="#7095ff" />
                                            </g>
                                        </svg>
                                        <span class="progress_title_active">أضف مركبة</span>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 progress_car">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.917" height="24.126" viewBox="0 0 57.917 24.126">
                                            <g id="_4047289_auto_car_compact_automible_icon_1_" data-name="4047289_auto_car_compact_automible_icon (1)" transform="translate(-1276.232 366.065)">
                                                <path id="Path_57" data-name="Path 57" d="M153.93,357.235h3.628a5.751,5.751,0,0,0,11.351,0h25.7a5.751,5.751,0,0,0,11.351,0h2.974a1.217,1.217,0,0,0,.856-.35,1.18,1.18,0,0,0,.065-1.617l-.617-.712c1.378-2.79.9-6.787.435-9.089a4.831,4.831,0,0,0-2.242-3.191,35.749,35.749,0,0,0-7.713-3.239c-7.821-2.456-21.646-.322-24.368,1.675-2.169,1.59-6.461,5.359-11.9,5.917a27.259,27.259,0,0,0-6.921,1.672,3.947,3.947,0,0,0-2.541,3.542l-.059,1.707-.943.62a1.68,1.68,0,0,0-.555.6,1.652,1.652,0,0,0-.2.789A1.685,1.685,0,0,0,153.93,357.235Zm49.948,0a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254a3.624,3.624,0,0,1,7.2,0C203.89,357.067,203.886,357.152,203.879,357.235Zm4.6-8.147a.581.581,0,0,1,.5.517,11.935,11.935,0,0,1-.243,2.906.607.607,0,0,1-.612.457H207.7a.584.584,0,0,1-.619-.608l.25-2.384a.529.529,0,0,1,.158-.321l.4-.4A.668.668,0,0,1,208.479,349.088Zm-12.2-5.173.419-1.742a1.95,1.95,0,0,1,1.761-1.414l.355-.033c.075.022.151.044.223.067a33.659,33.659,0,0,1,7.236,3.024,2.981,2.981,0,0,1,1.36,1.976q.03.152.059.3h-9.441a2.18,2.18,0,0,1-1.2-.351A1.711,1.711,0,0,1,196.274,343.915Zm-8.614,6.225h-2.082a.637.637,0,1,1,0-1.265h2.082a.637.637,0,1,1,0,1.265Zm-11.825-7.355c.319-.244.6-.455.839-.634a15.945,15.945,0,0,1,5.055-1.514,51.852,51.852,0,0,1,8.331-.832l-.968,4.963A2.931,2.931,0,0,1,186.237,347l-14.454.524a3.234,3.234,0,0,1-2.2-.74A34.082,34.082,0,0,0,175.834,342.785Zm-12.6,10.978a3.43,3.43,0,0,1,3.6,3.219c0,.086,0,.17-.012.254a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254A3.43,3.43,0,0,1,163.234,353.763Zm-7.064-3.573c.567,0,1.027.622,1.027,1.389s-.46,1.389-1.027,1.389-1.027-.622-1.027-1.389S155.6,350.19,156.17,350.19Z" transform="translate(1124 -704)" fill="#7095ff" />
                                            </g>
                                        </svg>
                                        <span class="progress_title_active">قائمة الأسعار</span>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 progress_car">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.917" height="24.126" viewBox="0 0 57.917 24.126">
                                            <g id="_4047289_auto_car_compact_automible_icon_1_" data-name="4047289_auto_car_compact_automible_icon (1)" transform="translate(-1276.232 366.065)">
                                                <path id="Path_57" data-name="Path 57" d="M153.93,357.235h3.628a5.751,5.751,0,0,0,11.351,0h25.7a5.751,5.751,0,0,0,11.351,0h2.974a1.217,1.217,0,0,0,.856-.35,1.18,1.18,0,0,0,.065-1.617l-.617-.712c1.378-2.79.9-6.787.435-9.089a4.831,4.831,0,0,0-2.242-3.191,35.749,35.749,0,0,0-7.713-3.239c-7.821-2.456-21.646-.322-24.368,1.675-2.169,1.59-6.461,5.359-11.9,5.917a27.259,27.259,0,0,0-6.921,1.672,3.947,3.947,0,0,0-2.541,3.542l-.059,1.707-.943.62a1.68,1.68,0,0,0-.555.6,1.652,1.652,0,0,0-.2.789A1.685,1.685,0,0,0,153.93,357.235Zm49.948,0a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254a3.624,3.624,0,0,1,7.2,0C203.89,357.067,203.886,357.152,203.879,357.235Zm4.6-8.147a.581.581,0,0,1,.5.517,11.935,11.935,0,0,1-.243,2.906.607.607,0,0,1-.612.457H207.7a.584.584,0,0,1-.619-.608l.25-2.384a.529.529,0,0,1,.158-.321l.4-.4A.668.668,0,0,1,208.479,349.088Zm-12.2-5.173.419-1.742a1.95,1.95,0,0,1,1.761-1.414l.355-.033c.075.022.151.044.223.067a33.659,33.659,0,0,1,7.236,3.024,2.981,2.981,0,0,1,1.36,1.976q.03.152.059.3h-9.441a2.18,2.18,0,0,1-1.2-.351A1.711,1.711,0,0,1,196.274,343.915Zm-8.614,6.225h-2.082a.637.637,0,1,1,0-1.265h2.082a.637.637,0,1,1,0,1.265Zm-11.825-7.355c.319-.244.6-.455.839-.634a15.945,15.945,0,0,1,5.055-1.514,51.852,51.852,0,0,1,8.331-.832l-.968,4.963A2.931,2.931,0,0,1,186.237,347l-14.454.524a3.234,3.234,0,0,1-2.2-.74A34.082,34.082,0,0,0,175.834,342.785Zm-12.6,10.978a3.43,3.43,0,0,1,3.6,3.219c0,.086,0,.17-.012.254a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254A3.43,3.43,0,0,1,163.234,353.763Zm-7.064-3.573c.567,0,1.027.622,1.027,1.389s-.46,1.389-1.027,1.389-1.027-.622-1.027-1.389S155.6,350.19,156.17,350.19Z" transform="translate(1124 -704)" fill="#858585" />
                                            </g>
                                        </svg>
                                        <span class="progress_title_not_active">التفاصيل والدفع</span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter  d-flex align-items-center justify-content-between pt-2">

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

                <div class="col-lg-12 col-12">

                    <div class="card-item card-item-list car-card d-flex flex-column">
                        <div class="quote-top-row col-sm-12" style="     height: 60px;">
                            <div class="row col-sm-12">
                                <div class="col-lg-6 col-sm-8">
                                    <div class="icname">أسم الشركة</div>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <!-- <input type="hidden" value="34" id="hdnInsuranceCompanyId" class="clearable x onX">
                                    <input type="hidden" value="9/1/2022 12:00:00 AM" id="hdnPolicyEffectiveDate" class="clearable x onX">
                                    <input type="hidden" id="TplPolicyQuoteResponseID_34" value="595498800" class="clearable x onX">


                                    <input id="NajmRating_34_1" name="NajmRating_34_1" type="hidden" value="4" class="clearable x onX">
                                    <input id="NajmResponseTime_34_1" name="NajmResponseTime_34_1" type="hidden" value="3" class="clearable x onX">
                                    <input id="CompanyAlias_34_1" name="CompanyAlias_34_1" type="hidden" value="أمانة للتأمين" class="clearable x onX"> -->

                                    <div class="najmrating" data-toggle="tooltip" data-html="true" data-placement="top" data-original-title="رفع وثيقة التأمين للمرور / نجم من قبل <br>شركة أمانة للتأمين <br> سريع جدا!<br>الوقت المتوقع لعملية رفع الوثيقة هو 3 دقائق">
                                        <div class="najmtitle">سرعة الربط</div>
                                        <span><img class="mt-2" width="80" height="auto" src="//dmul2da2acg0k.cloudfront.net/Resources/images/star4.png?v=17.60" alt="" title=""></span>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-sm-0">
                                    <div class="quotetop-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="car-card d-flex flex-row">
                            <div class="card-img col-2 col-sm-12">
                                <a href=" car-single.html" class="d-block company_logo">
                                    <img src="{{asset('images/car-img.png')}}" alt="car-img" class="h-100">
                                </a>
                                <!-- <span class="badge">الأكثر مبيعا</span> -->
                                <!-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div> -->
                            </div>
                            <div class="card-body col-5 col-sm-12">
                                <div class="titlebox" style="margin-top: -13px;">
                                    <div class="feature-title"> التأمين يشمل (مجاناً):</div>
                                    <div class="show-all"> <a value="34" class="collapsed tpl" data-toggle="collapse" data-target="#MoreFeature_34" aria-expanded="false"></a> </div>

                                </div>
                                <div class="benifits-list-icons">
                                    <ul class="d-flex">

                                        <li class="m-2">
                                            <a href="javascript:void(0);" data-toggle="tooltip" title="" data-placement="top" data-original-title="الحد الأقصى لمسؤولية الشركة في الواقعة الواحدة وخلال فترة سريان وثيقة التأمين بالنسبة للأضرار الجسدية (بما في ذلك الديات والمبالغ المقدرة عن الإصابات والمصاريف الطبية) والأضرار المادية معاً لن تتجاوز مبلغاً إجمالياً قدره 1,000 دينار (الف دينار أردني) حداً أقصى لمسئولية الشركة">

                                                <img src="{{asset('images/Image 20.png')}}" alt="">
                                            </a>
                                        </li>
                                        <li class="m-2">
                                            <a href="javascript:void(0);" data-toggle="tooltip" title="" data-placement="top" data-original-title="مسؤولية الطرف الثالث عن الاضرار الجسدية">

                                                <img src="{{asset('images/Image 14.png')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            
                                <ul class="feature-list">

                                    <li class="clearfix">

                                        <div class="feature-text tpl-feature" id="Feature_34">
                                            الحد الأقصى لمسؤولية الشركة في الواقعة الواحدة وخلال فترة سريان وثيقة التأمين بالنسبة للأضرار الجسدية (بما في ذلك الديات والمبالغ المقدرة عن الإصابات والمصاريف الطبية) والأضرار المادية معاً لن تتجاوز مبلغاً إجمالياً قدره 1,000 دينار (الف دينار أردني) حداً أقصى لمسئولية الشركة
                                        </div>
                                    </li>

                                    <div id="MoreFeature_34" class="in collapse show" aria-expanded="false" style="">
                                        <li class="clearfix">
                                            <div class="feature-text">
                                                مسؤولية الطرف الثالث عن الاضرار الجسدية
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                            <div class="card-body col-5 col-sm-12" style="border-right: 2px solid #c7c7c7;">

                                <div class="featuremain-box">
                                    <div class="advance-featurebox" id="additionalFeatureSection595498800">
                                        <input type="hidden" id="TPLadditionValue595498800" value="0" class="clearable x onX">
                                        <div class="titlebox" style="margin-top: -13px;">
                                            <div class="feature-title">تغطيات إضافية</div>

                                        </div>
                                        <div class="benifits-list-icons icon-feature">
                                            <ul>

                                                <li>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" data-placement="top" data-original-title="لا يوجد تغطيات إضافية">

                                                        <img src="//dmul2da2acg0k.cloudfront.net/Resources//images/featureicon/na-icon.svg">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="extension-checkboxes label-feature-tpl" id="addationalFeatureDivId595498800">
                                        </div>
                                    </div>
                                    <div class="quote-termslink-new">
                                        <a target="_blank" href="/Common/downloadpdf/dGgbEON1TKZIid2wJrMtMA9a7y261eLn-X1K3UjWLB0iQkJihZbsq8JvjBPRZDHbalc06vPr2V3tG9KD7GfkBg$$">
                                            الشروط و الأحكام
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="border-top: 2px solid #c7c7c7;">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="discount-box">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="tpl-bottom-price d-flex justify-content-end p-3">
                                        <div class="tpl-price-box ">
                                            <!-- Entities Logo -->
                                            <!-- Entities Logo -->
                                            <div class="company-price ">
                                                <input id="PAMT" name="PAMT" type="hidden" value="1694.39" class="clearable x onX">
                                                <div class="old-price">
                                                    <span id="old-price-value-595498800"></span>
                                                </div>
                                                <input type="hidden" value="1694.39" id="totalPriceHiddenId595498800" class="clearable x onX">
                                                <lable class="sorting-price"> 200</lable>
                                                <sub>
                                                    د.أ
                                                </sub>
                                            </div>
                                        </div>

                                        <div class="tpl-select-box" style="    margin-right: 18px !important;">
                                            <input type="hidden" name="tplResponseHiddenID" id="tplResponseHiddenID" class="clearable">
                                            <div class="select-btn select-btn-tpl" id="anch_34">

                                                @guest
                                                <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" style="    padding: 3px 89px; font-size: large;" data-target="#loginPopupForm"> اختر</a>
                                                @else
                                                <a href="/purchase_flow/checkout" class="theme-btn theme-btn-small"> اختر</a>

                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-item card-item-list car-card d-flex flex-column">
                        <div class="quote-top-row col-sm-12" style="     height: 60px;">
                            <div class="row col-sm-12">
                                <div class="col-lg-6 col-sm-8">
                                    <div class="icname">أسم الشركة</div>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <!-- <input type="hidden" value="34" id="hdnInsuranceCompanyId" class="clearable x onX">
                                    <input type="hidden" value="9/1/2022 12:00:00 AM" id="hdnPolicyEffectiveDate" class="clearable x onX">
                                    <input type="hidden" id="TplPolicyQuoteResponseID_34" value="595498800" class="clearable x onX">


                                    <input id="NajmRating_34_1" name="NajmRating_34_1" type="hidden" value="4" class="clearable x onX">
                                    <input id="NajmResponseTime_34_1" name="NajmResponseTime_34_1" type="hidden" value="3" class="clearable x onX">
                                    <input id="CompanyAlias_34_1" name="CompanyAlias_34_1" type="hidden" value="أمانة للتأمين" class="clearable x onX"> -->

                                    <div class="najmrating" data-toggle="tooltip" data-html="true" data-placement="top" data-original-title="رفع وثيقة التأمين للمرور / نجم من قبل <br>شركة أمانة للتأمين <br> سريع جدا!<br>الوقت المتوقع لعملية رفع الوثيقة هو 3 دقائق">
                                        <div class="najmtitle">سرعة الربط</div>
                                        <span><img class="mt-2" width="80" height="auto" src="//dmul2da2acg0k.cloudfront.net/Resources/images/star4.png?v=17.60" alt="" title=""></span>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-sm-0">
                                    <div class="quotetop-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="car-card d-flex flex-row">
                            <div class="card-img col-2 col-sm-12">
                                <a href=" car-single.html" class="d-block company_logo">
                                    <img src="{{asset('images/car-img.png')}}" alt="car-img" class="h-100">
                                </a>
                                <!-- <span class="badge">الأكثر مبيعا</span> -->
                                <!-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                <i class="la la-heart-o"></i>
                            </div> -->
                            </div>
                            <div class="card-body col-5 col-sm-12">
                                <div class="titlebox" style="margin-top: -13px;">
                                    <div class="feature-title"> التأمين يشمل (مجاناً):</div>
                                    <div class="show-all"> <a value="34" class="collapsed tpl" data-toggle="collapse" data-target="#MoreFeature_34" aria-expanded="false"></a> </div>

                                </div>
                                <div class="benifits-list-icons">
                                    <ul class="d-flex">

                                        <li class="m-2">
                                            <a href="javascript:void(0);" data-toggle="tooltip" title="" data-placement="top" data-original-title="الحد الأقصى لمسؤولية الشركة في الواقعة الواحدة وخلال فترة سريان وثيقة التأمين بالنسبة للأضرار الجسدية (بما في ذلك الديات والمبالغ المقدرة عن الإصابات والمصاريف الطبية) والأضرار المادية معاً لن تتجاوز مبلغاً إجمالياً قدره 1,000 دينار (الف دينار أردني) حداً أقصى لمسئولية الشركة">

                                                <img src="{{asset('images/Image 20.png')}}" alt="">
                                            </a>
                                        </li>
                                        <li class="m-2">
                                            <a href="javascript:void(0);" data-toggle="tooltip" title="" data-placement="top" data-original-title="مسؤولية الطرف الثالث عن الاضرار الجسدية">

                                                <img src="{{asset('images/Image 14.png')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            
                                <ul class="feature-list">

                                    <li class="clearfix">

                                        <div class="feature-text tpl-feature" id="Feature_34">
                                            الحد الأقصى لمسؤولية الشركة في الواقعة الواحدة وخلال فترة سريان وثيقة التأمين بالنسبة للأضرار الجسدية (بما في ذلك الديات والمبالغ المقدرة عن الإصابات والمصاريف الطبية) والأضرار المادية معاً لن تتجاوز مبلغاً إجمالياً قدره 1,000 دينار (الف دينار أردني) حداً أقصى لمسئولية الشركة
                                        </div>
                                    </li>

                                    <div id="MoreFeature_34" class="in collapse show" aria-expanded="false" style="">
                                        <li class="clearfix">
                                            <div class="feature-text">
                                                مسؤولية الطرف الثالث عن الاضرار الجسدية
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                            <div class="card-body col-5 col-sm-12" style="border-right: 2px solid #c7c7c7;">

                                <div class="featuremain-box">
                                    <div class="advance-featurebox" id="additionalFeatureSection595498800">
                                        <input type="hidden" id="TPLadditionValue595498800" value="0" class="clearable x onX">
                                        <div class="titlebox" style="margin-top: -13px;">
                                            <div class="feature-title">تغطيات إضافية</div>

                                        </div>
                                        <div class="benifits-list-icons icon-feature">
                                            <ul>

                                                <li>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" data-placement="top" data-original-title="لا يوجد تغطيات إضافية">

                                                        <img src="//dmul2da2acg0k.cloudfront.net/Resources//images/featureicon/na-icon.svg">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="extension-checkboxes label-feature-tpl" id="addationalFeatureDivId595498800">
                                        </div>
                                    </div>
                                    <div class="quote-termslink-new">
                                        <a target="_blank" href="/Common/downloadpdf/dGgbEON1TKZIid2wJrMtMA9a7y261eLn-X1K3UjWLB0iQkJihZbsq8JvjBPRZDHbalc06vPr2V3tG9KD7GfkBg$$">
                                            الشروط و الأحكام
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="border-top: 2px solid #c7c7c7;">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="discount-box">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="tpl-bottom-price d-flex justify-content-end p-3">
                                        <div class="tpl-price-box ">
                                            <!-- Entities Logo -->
                                            <!-- Entities Logo -->
                                            <div class="company-price ">
                                                <input id="PAMT" name="PAMT" type="hidden" value="1694.39" class="clearable x onX">
                                                <div class="old-price">
                                                    <span id="old-price-value-595498800"></span>
                                                </div>
                                                <input type="hidden" value="1694.39" id="totalPriceHiddenId595498800" class="clearable x onX">
                                                <lable class="sorting-price"> 200</lable>
                                                <sub>
                                                    د.أ
                                                </sub>
                                            </div>
                                        </div>

                                        <div class="tpl-select-box" style="    margin-right: 18px !important;">
                                            <input type="hidden" name="tplResponseHiddenID" id="tplResponseHiddenID" class="clearable">
                                            <div class="select-btn select-btn-tpl" id="anch_34">

                                                @guest
                                                <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" style="    padding: 3px 89px; font-size: large;" data-target="#loginPopupForm"> اختر</a>
                                                @else
                                                <a href="/purchase_flow/checkout" class="theme-btn theme-btn-small"> اختر</a>

                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end card-item -->



            </div><!-- end col-lg-8 -->
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