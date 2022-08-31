<x-website.web-master>
    @section('title')
    <title>Ammen</title>
    @endsection
    @section('style')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    @endsection
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
                                <div class="form-title-wrap">
                                    <div class="step-bar-wrap text-center">
                                        <ul class="step-bar-list d-flex align-items-center justify-content-around">
                                            <li class="step-bar flex-grow-1 step-bar-active">
                                                <span class="icon-element">1</span>
                                                <p class="pt-2 color-text-2 small">معلومات مالك الوثيقة</p>
                                            </li>
                                            <li class="step-bar flex-grow-1">
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
                                                    <path id="Path_57" data-name="Path 57" d="M153.93,357.235h3.628a5.751,5.751,0,0,0,11.351,0h25.7a5.751,5.751,0,0,0,11.351,0h2.974a1.217,1.217,0,0,0,.856-.35,1.18,1.18,0,0,0,.065-1.617l-.617-.712c1.378-2.79.9-6.787.435-9.089a4.831,4.831,0,0,0-2.242-3.191,35.749,35.749,0,0,0-7.713-3.239c-7.821-2.456-21.646-.322-24.368,1.675-2.169,1.59-6.461,5.359-11.9,5.917a27.259,27.259,0,0,0-6.921,1.672,3.947,3.947,0,0,0-2.541,3.542l-.059,1.707-.943.62a1.68,1.68,0,0,0-.555.6,1.652,1.652,0,0,0-.2.789A1.685,1.685,0,0,0,153.93,357.235Zm49.948,0a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254a3.624,3.624,0,0,1,7.2,0C203.89,357.067,203.886,357.152,203.879,357.235Zm4.6-8.147a.581.581,0,0,1,.5.517,11.935,11.935,0,0,1-.243,2.906.607.607,0,0,1-.612.457H207.7a.584.584,0,0,1-.619-.608l.25-2.384a.529.529,0,0,1,.158-.321l.4-.4A.668.668,0,0,1,208.479,349.088Zm-12.2-5.173.419-1.742a1.95,1.95,0,0,1,1.761-1.414l.355-.033c.075.022.151.044.223.067a33.659,33.659,0,0,1,7.236,3.024,2.981,2.981,0,0,1,1.36,1.976q.03.152.059.3h-9.441a2.18,2.18,0,0,1-1.2-.351A1.711,1.711,0,0,1,196.274,343.915Zm-8.614,6.225h-2.082a.637.637,0,1,1,0-1.265h2.082a.637.637,0,1,1,0,1.265Zm-11.825-7.355c.319-.244.6-.455.839-.634a15.945,15.945,0,0,1,5.055-1.514,51.852,51.852,0,0,1,8.331-.832l-.968,4.963A2.931,2.931,0,0,1,186.237,347l-14.454.524a3.234,3.234,0,0,1-2.2-.74A34.082,34.082,0,0,0,175.834,342.785Zm-12.6,10.978a3.43,3.43,0,0,1,3.6,3.219c0,.086,0,.17-.012.254a3.656,3.656,0,0,1-7.179,0c-.008-.083-.012-.168-.012-.254A3.43,3.43,0,0,1,163.234,353.763Zm-7.064-3.573c.567,0,1.027.622,1.027,1.389s-.46,1.389-1.027,1.389-1.027-.622-1.027-1.389S155.6,350.19,156.17,350.19Z" transform="translate(1124 -704)" fill="#858585" />
                                                </g>
                                            </svg>
                                            <span class="progress_title_not_active">قائمة الأسعار</span>
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
                                <div class="tab-content search-fields-container" id="myTabContent">
                                    <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                        <div class="section-tab section-tab-2 ">
                                            <div class="form-group">
                                                <label for="happy" class="col-lg-2 col-sm-4 col-md-4 d-flex label-text control-label justify-content-between" style="color: #707070; padding-left: 0px;   font-weight: 600;">
                                                    <svg id="article_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path id="Path_11" data-name="Path 11" d="M0,0H24V24H0Z" fill="none" />
                                                        <path id="Path_12" data-name="Path 12" d="M19,3H5A2.006,2.006,0,0,0,3,5V19a2.006,2.006,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3ZM14,17H7V15h7Zm3-4H7V11H17Zm0-4H7V7H17Z" fill="rgba(112,112,112,0.85)" />
                                                    </svg>
                                                    نوع وثيقة المركبة <span class=" tt" data-bs-toggle="tooltip" data-bs-placement="top" title="نوع البطاقة الموجودة للمركبة رخصة سير (إستمارة) أم بطاقة جمركية">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                            <path id="info_FILL0_wght400_GRAD0_opsz48" d="M15.656,22.75h1.875v-7.5H15.656Zm.844-9.813a1.027,1.027,0,0,0,.734-.281.947.947,0,0,0,.3-.719,1.05,1.05,0,0,0-.3-.75,1.019,1.019,0,0,0-1.469,0,1.05,1.05,0,0,0-.3.75.947.947,0,0,0,.3.719A1.027,1.027,0,0,0,16.5,12.937ZM16.5,29a12.1,12.1,0,0,1-4.844-.984,12.594,12.594,0,0,1-6.672-6.672,12.486,12.486,0,0,1,0-9.719A12.492,12.492,0,0,1,7.672,7.656a12.814,12.814,0,0,1,3.984-2.672,12.486,12.486,0,0,1,9.719,0,12.48,12.48,0,0,1,6.641,6.641,12.486,12.486,0,0,1,0,9.719,12.814,12.814,0,0,1-2.672,3.984,12.492,12.492,0,0,1-3.969,2.687A12.172,12.172,0,0,1,16.5,29Zm.031-1.875a10.188,10.188,0,0,0,7.5-3.109,10.3,10.3,0,0,0,3.094-7.547,10.213,10.213,0,0,0-3.094-7.5A10.25,10.25,0,0,0,16.5,5.875,10.265,10.265,0,0,0,8.984,8.969,10.224,10.224,0,0,0,5.875,16.5a10.239,10.239,0,0,0,3.109,7.516A10.276,10.276,0,0,0,16.531,27.125ZM16.5,16.5Z" transform="translate(-4 -4)" fill="#858585" />
                                                        </svg>
                                                    </span></label>
                                                <div class="col-lg-3 col-sm-7 col-md-7">
                                                    <div class="input-group">
                                                        <div id="radioBtn" class="btn-group" style=" height: 45px;   border: 1px solid #80808059; border-radius: 6px;">
                                                            <a class="btn btn-primary btn-sm" style="    padding: 10px !important;font-weight: 600;" id="one-way-tab" href="#one-way" role="tab" data-toggle="tab" aria-controls="one-way" aria-selected="true">الاستمارة</a>
                                                            <a class="btn  btn-sm p-2" style=" color: #6184F0;   padding: 10px !important;font-weight: 600;" id="round-trip-tab" href="#round-trip" role="tab" data-toggle="tab" aria-controls="round-trip" aria-selected="false"> البطاقة الجمركية</a>
                                                        </div>
                                                        <input class="form-control" type="hidden" name="happy" id="happy">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <ul class="nav nav-tabs" id="myTab3" role="tablist">
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
                                            </ul> -->
                                        </div><!-- end section-tab -->
                                        <div class="tab-content p-3" id="myTabContent3">
                                            <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                                <div class="contact-form-action">
                                                    <form id="the_form" class=" flex-lg-column">
                                                        @csrf
                                                        <input hidden id="Vehicle-document-type" type="text" name="Vehicle_document_type" value="الإستمارة">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text d-flex justify-content-between">الرقم التسلسلي
                                                                        <span class=" tt" data-toggle="modal" data-target="#SerialNumber">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                                                <path id="info_FILL0_wght400_GRAD0_opsz48" d="M15.656,22.75h1.875v-7.5H15.656Zm.844-9.813a1.027,1.027,0,0,0,.734-.281.947.947,0,0,0,.3-.719,1.05,1.05,0,0,0-.3-.75,1.019,1.019,0,0,0-1.469,0,1.05,1.05,0,0,0-.3.75.947.947,0,0,0,.3.719A1.027,1.027,0,0,0,16.5,12.937ZM16.5,29a12.1,12.1,0,0,1-4.844-.984,12.594,12.594,0,0,1-6.672-6.672,12.486,12.486,0,0,1,0-9.719A12.492,12.492,0,0,1,7.672,7.656a12.814,12.814,0,0,1,3.984-2.672,12.486,12.486,0,0,1,9.719,0,12.48,12.48,0,0,1,6.641,6.641,12.486,12.486,0,0,1,0,9.719,12.814,12.814,0,0,1-2.672,3.984,12.492,12.492,0,0,1-3.969,2.687A12.172,12.172,0,0,1,16.5,29Zm.031-1.875a10.188,10.188,0,0,0,7.5-3.109,10.3,10.3,0,0,0,3.094-7.547,10.213,10.213,0,0,0-3.094-7.5A10.25,10.25,0,0,0,16.5,5.875,10.265,10.265,0,0,0,8.984,8.969,10.224,10.224,0,0,0,5.875,16.5a10.239,10.239,0,0,0,3.109,7.516A10.276,10.276,0,0,0,16.531,27.125ZM16.5,16.5Z" transform="translate(-4 -4)" fill="#858585"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </label>
                                                                    <div class="form-group">
                                                                        <span class=" form-icon" style="top: 9px; left: auto;right: 13px;"><svg id="pin_black_24dp_1_" data-name="pin_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                                <g id="Group_12" data-name="Group 12">
                                                                                    <path id="Path_13" data-name="Path 13" d="M0,0H24V24H0Z" fill="none" />
                                                                                </g>
                                                                                <g id="Group_14" data-name="Group 14">
                                                                                    <g id="Group_13" data-name="Group 13">
                                                                                        <path id="Path_14" data-name="Path 14" d="M20,4H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,20,4ZM7.64,15H6.49V10.5l-.9.66-.58-.89L6.77,9h.87Zm5.86,0H9.61V13.98c1.07-1.07,1.77-1.77,2.13-2.15a1.45,1.45,0,0,0,.54-1.06.736.736,0,0,0-.81-.72.945.945,0,0,0-.9.72l-1.01-.42a1.861,1.861,0,0,1,1-1.15,2.343,2.343,0,0,1,1.95.03,1.622,1.622,0,0,1,.91,1.48,2.632,2.632,0,0,1-.92,1.86c-.25.25-.72.71-1.4,1.39l.03.05H13.5V15Zm5.25-.85a1.972,1.972,0,0,1-1.76.85,2.042,2.042,0,0,1-2.05-1.51l1.03-.41a1.039,1.039,0,0,0,1.02.86.842.842,0,0,0,.89-.77c0-.55-.48-.79-1.04-.79h-.5v-1h.46c.33,0,.88-.14.88-.72a.671.671,0,0,0-.75-.65.857.857,0,0,0-.85.64l-.99-.41A1.868,1.868,0,0,1,16.94,9a1.883,1.883,0,0,1,1.62.75,1.5,1.5,0,0,1,.02,1.57,1.387,1.387,0,0,1-.52.48v.07a1.468,1.468,0,0,1,.68.52A1.626,1.626,0,0,1,18.75,14.15Z" fill="#858585" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                        <input id="Serial-Number" name="customs_serial_number" class="form-control" type="number" placeholder="الرقم التسلسلي">
                                                                        <span class="error_validate">
                                                                            <span class="text-danger" id="Serial-Number-error"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="section-tab section-tab-2 pb-3">
                                                                    <label class="label-text">
                                                                        <svg id="help_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                            <path id="Path_15" data-name="Path 15" d="M0,0H24V24H0Z" fill="none" />
                                                                            <path id="Path_16" data-name="Path 16" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm1,17H11V17h2Zm2.07-7.75-.9.92A3.4,3.4,0,0,0,13,15H11v-.5a4.025,4.025,0,0,1,1.17-2.83l1.24-1.26A1.955,1.955,0,0,0,14,9a2,2,0,0,0-4,0H8a4,4,0,0,1,8,0A3.182,3.182,0,0,1,15.07,11.25Z" fill="#858585" />
                                                                        </svg>
                                                                        هل تريد نقل ملكية المركبة؟</label>
                                                                    <label id="toggle" class="toggle d-flex justify-content-center">
                                                                        <input name="Ownership" id="toggle-me" class="toggle-checkbox" type="checkbox">
                                                                        <div id="toggle-switch" class="toggle-switch"></div>

                                                                    </label>

                                                                </div><!-- end section-tab -->
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-2 col-sm-12 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text d-flex control-label justify-content-between">الغرض من الإستخدام
                                                                        <span class="tt" data-bs-toggle="tooltip" data-bs-placement="top" title="إذا أردت استخدام المركبة لأغراض شخصية وفي بعض الأوقات ستقوم بنقل ركاب عبر تطبيق أوبر على سبيل المثال فعليك اختيار نقل ركاب">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                                                <path id="info_FILL0_wght400_GRAD0_opsz48" d="M15.656,22.75h1.875v-7.5H15.656Zm.844-9.813a1.027,1.027,0,0,0,.734-.281.947.947,0,0,0,.3-.719,1.05,1.05,0,0,0-.3-.75,1.019,1.019,0,0,0-1.469,0,1.05,1.05,0,0,0-.3.75.947.947,0,0,0,.3.719A1.027,1.027,0,0,0,16.5,12.937ZM16.5,29a12.1,12.1,0,0,1-4.844-.984,12.594,12.594,0,0,1-6.672-6.672,12.486,12.486,0,0,1,0-9.719A12.492,12.492,0,0,1,7.672,7.656a12.814,12.814,0,0,1,3.984-2.672,12.486,12.486,0,0,1,9.719,0,12.48,12.48,0,0,1,6.641,6.641,12.486,12.486,0,0,1,0,9.719,12.814,12.814,0,0,1-2.672,3.984,12.492,12.492,0,0,1-3.969,2.687A12.172,12.172,0,0,1,16.5,29Zm.031-1.875a10.188,10.188,0,0,0,7.5-3.109,10.3,10.3,0,0,0,3.094-7.547,10.213,10.213,0,0,0-3.094-7.5A10.25,10.25,0,0,0,16.5,5.875,10.265,10.265,0,0,0,8.984,8.969,10.224,10.224,0,0,0,5.875,16.5a10.239,10.239,0,0,0,3.109,7.516A10.276,10.276,0,0,0,16.531,27.125ZM16.5,16.5Z" transform="translate(-4 -4)" fill="#858585" />
                                                                            </svg>
                                                                        </span></label>
                                                                    <div class="form-group">
                                                                        <div class="select-contain w-auto">
                                                                            <select id="Purpose-of-use" name="use_purpose" class="select-contain-select">
                                                                                <option value="">اختيار الغرض من استخدام المركبة.</option>
                                                                                <option value="1">شخصي</option>
                                                                                <option value="2">تجاري</option>
                                                                                <option value="3">تأجير</option>
                                                                                <option value="4">نقل الركاب أو كريم-أوبر </option>
                                                                                <option value="5">نقل بضائع</option>
                                                                                <option value="6">نقل مشتقات نفطية</option>
                                                                            </select>

                                                                        </div>
                                                                        <span class="error_validate">
                                                                            <span class="text-danger" id="use-error"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div id="manufacturing-year" class="col-lg-4 col-sm-12  flex-row pr-0 " style="display: none;">
                                                                <!-- <input hidden name="Ownership" id="Ownership" checked class="toggle-checkbox" type="checkbox"> -->
                                                                <div class="input-box col-lg-6 col-sm-6">
                                                                    <label class="label-text">سنة الصنع</label>
                                                                    <div class="form-group">
                                                                        <div class="select-contain w-auto">
                                                                            <select id="production_year" name="production_year" class="select-contain-select">
                                                                                <option value="" data-select2-id="select2-data-5480-i0fc">اختر السنة</option>
                                                                                <option data-select2-id="select2-data-5598-a7hs">2023</option>
                                                                                <option data-select2-id="select2-data-5599-2m7u">2022</option>
                                                                                <option data-select2-id="select2-data-5600-f5zd">2021</option>
                                                                                <option data-select2-id="select2-data-5601-yi2c">2020</option>
                                                                                <option data-select2-id="select2-data-5602-2wt8">2019</option>
                                                                                <option data-select2-id="select2-data-5603-njwd">2018</option>
                                                                                <option data-select2-id="select2-data-5604-3stz">2017</option>
                                                                                <option data-select2-id="select2-data-5605-1n93">2016</option>
                                                                                <option data-select2-id="select2-data-5606-l8s9">2015</option>
                                                                                <option data-select2-id="select2-data-5607-q8yy">2014</option>
                                                                                <option data-select2-id="select2-data-5608-kb94">2013</option>
                                                                                <option data-select2-id="select2-data-5609-9ei2">2012</option>
                                                                                <option data-select2-id="select2-data-5610-jayi">2011</option>
                                                                                <option data-select2-id="select2-data-5611-wcpl">2010</option>
                                                                                <option data-select2-id="select2-data-5612-ix9t">2009</option>
                                                                                <option data-select2-id="select2-data-5613-8p4k">2008</option>
                                                                                <option data-select2-id="select2-data-5614-rz1s">2007</option>
                                                                                <option data-select2-id="select2-data-5615-z9cs">2006</option>
                                                                                <option data-select2-id="select2-data-5616-hvwl">2005</option>
                                                                                <option data-select2-id="select2-data-5617-i1fc">2004</option>
                                                                                <option data-select2-id="select2-data-5618-sq6h">2003</option>
                                                                                <option data-select2-id="select2-data-5619-r3ba">2002</option>
                                                                                <option data-select2-id="select2-data-5620-0h06">2001</option>
                                                                                <option data-select2-id="select2-data-5621-sd6p">2000</option>
                                                                                <option data-select2-id="select2-data-5622-3o59">1999</option>
                                                                                <option data-select2-id="select2-data-5623-9uyj">1998</option>
                                                                                <option data-select2-id="select2-data-5624-jar5">1997</option>
                                                                                <option data-select2-id="select2-data-5625-4nyo">1996</option>
                                                                                <option data-select2-id="select2-data-5626-0uch">1995</option>
                                                                                <option data-select2-id="select2-data-5627-1li7">1994</option>
                                                                                <option data-select2-id="select2-data-5628-s31c">1993</option>
                                                                                <option data-select2-id="select2-data-5629-rwf1">1992</option>
                                                                                <option data-select2-id="select2-data-5630-ed00">1991</option>
                                                                                <option data-select2-id="select2-data-5631-efwh">1990</option>
                                                                                <option data-select2-id="select2-data-5632-wjs8">1989</option>
                                                                                <option data-select2-id="select2-data-5633-qv7g">1988</option>
                                                                                <option data-select2-id="select2-data-5634-ixwo">1987</option>
                                                                                <option data-select2-id="select2-data-5635-e2zo">1986</option>
                                                                                <option data-select2-id="select2-data-5636-zx8r">1985</option>
                                                                                <option data-select2-id="select2-data-5637-k3ld">1984</option>
                                                                                <option data-select2-id="select2-data-5638-s2nz">1983</option>
                                                                                <option data-select2-id="select2-data-5639-2a4q">1982</option>
                                                                                <option data-select2-id="select2-data-5640-cukc">1981</option>
                                                                                <option data-select2-id="select2-data-5641-l9mm">1980</option>
                                                                                <option data-select2-id="select2-data-5642-t1uo">1979</option>
                                                                                <option data-select2-id="select2-data-5643-lj5m">1978</option>
                                                                                <option data-select2-id="select2-data-5644-dmq3">1977</option>
                                                                                <option data-select2-id="select2-data-5645-k47y">1976</option>
                                                                                <option data-select2-id="select2-data-5646-dhw5">1975</option>
                                                                                <option data-select2-id="select2-data-5647-aie6">1974</option>
                                                                                <option data-select2-id="select2-data-5648-gt5j">1973</option>
                                                                                <option data-select2-id="select2-data-5649-8pfs">1972</option>
                                                                                <option data-select2-id="select2-data-5650-hplv">1971</option>
                                                                                <option data-select2-id="select2-data-5651-93ht">1970</option>
                                                                                <option data-select2-id="select2-data-5652-mkgz">1969</option>
                                                                                <option data-select2-id="select2-data-5653-w77p">1968</option>
                                                                                <option data-select2-id="select2-data-5654-anoc">1967</option>
                                                                                <option data-select2-id="select2-data-5655-n15t">1966</option>
                                                                                <option data-select2-id="select2-data-5656-qqsc">1965</option>
                                                                                <option data-select2-id="select2-data-5657-byea">1964</option>
                                                                                <option data-select2-id="select2-data-5658-yh8s">1963</option>
                                                                                <option data-select2-id="select2-data-5659-iw2e">1962</option>
                                                                                <option data-select2-id="select2-data-5660-fvtk">1961</option>
                                                                                <option data-select2-id="select2-data-5661-grwm">1960</option>
                                                                                <option data-select2-id="select2-data-5662-geuf">1959</option>
                                                                                <option data-select2-id="select2-data-5663-mbdg">1958</option>
                                                                                <option data-select2-id="select2-data-5664-chmn">1957</option>
                                                                                <option data-select2-id="select2-data-5665-c1kj">1956</option>
                                                                                <option data-select2-id="select2-data-5666-ewi8">1955</option>
                                                                                <option data-select2-id="select2-data-5667-iv6x">1954</option>
                                                                                <option data-select2-id="select2-data-5668-eo2o">1953</option>
                                                                                <option data-select2-id="select2-data-5669-76l3">1952</option>
                                                                                <option data-select2-id="select2-data-5670-5vfj">1951</option>
                                                                                <option data-select2-id="select2-data-5671-w6eb">1950</option>
                                                                                <option data-select2-id="select2-data-5672-pk57">1949</option>
                                                                                <option data-select2-id="select2-data-5673-14ut">1948</option>
                                                                                <option data-select2-id="select2-data-5674-15gy">1947</option>
                                                                                <option data-select2-id="select2-data-5675-c43a">1946</option>
                                                                                <option data-select2-id="select2-data-5676-4fpo">1945</option>
                                                                                <option data-select2-id="select2-data-5677-nhiu">1944</option>
                                                                                <option data-select2-id="select2-data-5678-7y34">1943</option>
                                                                                <option data-select2-id="select2-data-5679-eejb">1942</option>
                                                                                <option data-select2-id="select2-data-5680-nxc2">1941</option>
                                                                                <option data-select2-id="select2-data-5681-w3zo">1940</option>
                                                                                <option data-select2-id="select2-data-5682-vptn">1939</option>
                                                                                <option data-select2-id="select2-data-5683-cs29">1938</option>
                                                                                <option data-select2-id="select2-data-5684-px4q">1937</option>
                                                                                <option data-select2-id="select2-data-5685-sdoa">1936</option>
                                                                                <option data-select2-id="select2-data-5686-27l9">1935</option>
                                                                                <option data-select2-id="select2-data-5687-wugf">1934</option>
                                                                                <option data-select2-id="select2-data-5688-eaob">1933</option>
                                                                                <option data-select2-id="select2-data-5689-mxj2">1932</option>
                                                                                <option data-select2-id="select2-data-5690-0djw">1931</option>
                                                                                <option data-select2-id="select2-data-5691-1qqx">1930</option>
                                                                            </select>

                                                                        </div>
                                                                        <span class="error_validate">
                                                                            <span class="text-danger" id="production_year-error"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6 pr-0">
                                                                    <div class="input-box">
                                                                        <label class="label-text">تاريخ الميلاد</label>
                                                                        <div class="form-group">
                                                                            <span class="la la-calendar form-icon"></span>
                                                                            <input id="Date-of-Birth" class="date-picker-single form-control" type="text" name="Date_of_Birth" readonly="">
                                                                            <span class="error_validate">
                                                                                <span class="text-danger" id="Birth-error"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                        </div>


                                                        <div class="row justify-content-between">
                                                            <div class="col-lg-3">
                                                                <a href="/" class="theme-btn theme-btn-transparent w-100 text-center margin-top-20px">السابق</a>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button type="submit" class="theme-btn w-100 text-center margin-top-20px">الإستمرار</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div><!-- end tab-pane -->
                                            <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                                <div class="contact-form-action">

                                                    <form id="Customs_card_form" class="flex-lg-column">
                                                        @csrf
                                                        <input hidden id="Customs-Vehicle-document-type" type="text" name="Vehicle_document_type" value="البطاقة الجمركية">

                                                        <div class="row align-items-center">
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text d-flex justify-content-between">رقم البطاقة الجمركية
                                                                        <span class=" tt" data-toggle="modal" data-target="#Customs_card">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                                                <path id="info_FILL0_wght400_GRAD0_opsz48" d="M15.656,22.75h1.875v-7.5H15.656Zm.844-9.813a1.027,1.027,0,0,0,.734-.281.947.947,0,0,0,.3-.719,1.05,1.05,0,0,0-.3-.75,1.019,1.019,0,0,0-1.469,0,1.05,1.05,0,0,0-.3.75.947.947,0,0,0,.3.719A1.027,1.027,0,0,0,16.5,12.937ZM16.5,29a12.1,12.1,0,0,1-4.844-.984,12.594,12.594,0,0,1-6.672-6.672,12.486,12.486,0,0,1,0-9.719A12.492,12.492,0,0,1,7.672,7.656a12.814,12.814,0,0,1,3.984-2.672,12.486,12.486,0,0,1,9.719,0,12.48,12.48,0,0,1,6.641,6.641,12.486,12.486,0,0,1,0,9.719,12.814,12.814,0,0,1-2.672,3.984,12.492,12.492,0,0,1-3.969,2.687A12.172,12.172,0,0,1,16.5,29Zm.031-1.875a10.188,10.188,0,0,0,7.5-3.109,10.3,10.3,0,0,0,3.094-7.547,10.213,10.213,0,0,0-3.094-7.5A10.25,10.25,0,0,0,16.5,5.875,10.265,10.265,0,0,0,8.984,8.969,10.224,10.224,0,0,0,5.875,16.5a10.239,10.239,0,0,0,3.109,7.516A10.276,10.276,0,0,0,16.531,27.125ZM16.5,16.5Z" transform="translate(-4 -4)" fill="#858585"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </label>
                                                                    <div class="form-group">
                                                                        <span class="la la-credit-card form-icon"></span>
                                                                        <input id="customs-card-number" name="customs_form_number" class="form-control" type="number" placeholder="رقم البطاقة الجمركية">
                                                                        <span class="error_validate">
                                                                            <span class="text-danger" id="customs-card-number-error"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="input-box col-lg-3 ">
                                                                <label class="label-text">سنة الصنع</label>
                                                                <div class="form-group">
                                                                    <div class="select-contain w-auto">
                                                                        <select id="Customs_production_year" name="production_year" class="select-contain-select">
                                                                            <option value="" data-select2-id="select2-data-5480-i0fc">اختر السنة</option>
                                                                            <option data-select2-id="select2-data-5598-a7hs">2023</option>
                                                                            <option data-select2-id="select2-data-5599-2m7u">2022</option>
                                                                            <option data-select2-id="select2-data-5600-f5zd">2021</option>
                                                                            <option data-select2-id="select2-data-5601-yi2c">2020</option>
                                                                            <option data-select2-id="select2-data-5602-2wt8">2019</option>
                                                                            <option data-select2-id="select2-data-5603-njwd">2018</option>
                                                                            <option data-select2-id="select2-data-5604-3stz">2017</option>
                                                                            <option data-select2-id="select2-data-5605-1n93">2016</option>
                                                                            <option data-select2-id="select2-data-5606-l8s9">2015</option>
                                                                            <option data-select2-id="select2-data-5607-q8yy">2014</option>
                                                                            <option data-select2-id="select2-data-5608-kb94">2013</option>
                                                                            <option data-select2-id="select2-data-5609-9ei2">2012</option>
                                                                            <option data-select2-id="select2-data-5610-jayi">2011</option>
                                                                            <option data-select2-id="select2-data-5611-wcpl">2010</option>
                                                                            <option data-select2-id="select2-data-5612-ix9t">2009</option>
                                                                            <option data-select2-id="select2-data-5613-8p4k">2008</option>
                                                                            <option data-select2-id="select2-data-5614-rz1s">2007</option>
                                                                            <option data-select2-id="select2-data-5615-z9cs">2006</option>
                                                                            <option data-select2-id="select2-data-5616-hvwl">2005</option>
                                                                            <option data-select2-id="select2-data-5617-i1fc">2004</option>
                                                                            <option data-select2-id="select2-data-5618-sq6h">2003</option>
                                                                            <option data-select2-id="select2-data-5619-r3ba">2002</option>
                                                                            <option data-select2-id="select2-data-5620-0h06">2001</option>
                                                                            <option data-select2-id="select2-data-5621-sd6p">2000</option>
                                                                            <option data-select2-id="select2-data-5622-3o59">1999</option>
                                                                            <option data-select2-id="select2-data-5623-9uyj">1998</option>
                                                                            <option data-select2-id="select2-data-5624-jar5">1997</option>
                                                                            <option data-select2-id="select2-data-5625-4nyo">1996</option>
                                                                            <option data-select2-id="select2-data-5626-0uch">1995</option>
                                                                            <option data-select2-id="select2-data-5627-1li7">1994</option>
                                                                            <option data-select2-id="select2-data-5628-s31c">1993</option>
                                                                            <option data-select2-id="select2-data-5629-rwf1">1992</option>
                                                                            <option data-select2-id="select2-data-5630-ed00">1991</option>
                                                                            <option data-select2-id="select2-data-5631-efwh">1990</option>
                                                                            <option data-select2-id="select2-data-5632-wjs8">1989</option>
                                                                            <option data-select2-id="select2-data-5633-qv7g">1988</option>
                                                                            <option data-select2-id="select2-data-5634-ixwo">1987</option>
                                                                            <option data-select2-id="select2-data-5635-e2zo">1986</option>
                                                                            <option data-select2-id="select2-data-5636-zx8r">1985</option>
                                                                            <option data-select2-id="select2-data-5637-k3ld">1984</option>
                                                                            <option data-select2-id="select2-data-5638-s2nz">1983</option>
                                                                            <option data-select2-id="select2-data-5639-2a4q">1982</option>
                                                                            <option data-select2-id="select2-data-5640-cukc">1981</option>
                                                                            <option data-select2-id="select2-data-5641-l9mm">1980</option>
                                                                            <option data-select2-id="select2-data-5642-t1uo">1979</option>
                                                                            <option data-select2-id="select2-data-5643-lj5m">1978</option>
                                                                            <option data-select2-id="select2-data-5644-dmq3">1977</option>
                                                                            <option data-select2-id="select2-data-5645-k47y">1976</option>
                                                                            <option data-select2-id="select2-data-5646-dhw5">1975</option>
                                                                            <option data-select2-id="select2-data-5647-aie6">1974</option>
                                                                            <option data-select2-id="select2-data-5648-gt5j">1973</option>
                                                                            <option data-select2-id="select2-data-5649-8pfs">1972</option>
                                                                            <option data-select2-id="select2-data-5650-hplv">1971</option>
                                                                            <option data-select2-id="select2-data-5651-93ht">1970</option>
                                                                            <option data-select2-id="select2-data-5652-mkgz">1969</option>
                                                                            <option data-select2-id="select2-data-5653-w77p">1968</option>
                                                                            <option data-select2-id="select2-data-5654-anoc">1967</option>
                                                                            <option data-select2-id="select2-data-5655-n15t">1966</option>
                                                                            <option data-select2-id="select2-data-5656-qqsc">1965</option>
                                                                            <option data-select2-id="select2-data-5657-byea">1964</option>
                                                                            <option data-select2-id="select2-data-5658-yh8s">1963</option>
                                                                            <option data-select2-id="select2-data-5659-iw2e">1962</option>
                                                                            <option data-select2-id="select2-data-5660-fvtk">1961</option>
                                                                            <option data-select2-id="select2-data-5661-grwm">1960</option>
                                                                            <option data-select2-id="select2-data-5662-geuf">1959</option>
                                                                            <option data-select2-id="select2-data-5663-mbdg">1958</option>
                                                                            <option data-select2-id="select2-data-5664-chmn">1957</option>
                                                                            <option data-select2-id="select2-data-5665-c1kj">1956</option>
                                                                            <option data-select2-id="select2-data-5666-ewi8">1955</option>
                                                                            <option data-select2-id="select2-data-5667-iv6x">1954</option>
                                                                            <option data-select2-id="select2-data-5668-eo2o">1953</option>
                                                                            <option data-select2-id="select2-data-5669-76l3">1952</option>
                                                                            <option data-select2-id="select2-data-5670-5vfj">1951</option>
                                                                            <option data-select2-id="select2-data-5671-w6eb">1950</option>
                                                                            <option data-select2-id="select2-data-5672-pk57">1949</option>
                                                                            <option data-select2-id="select2-data-5673-14ut">1948</option>
                                                                            <option data-select2-id="select2-data-5674-15gy">1947</option>
                                                                            <option data-select2-id="select2-data-5675-c43a">1946</option>
                                                                            <option data-select2-id="select2-data-5676-4fpo">1945</option>
                                                                            <option data-select2-id="select2-data-5677-nhiu">1944</option>
                                                                            <option data-select2-id="select2-data-5678-7y34">1943</option>
                                                                            <option data-select2-id="select2-data-5679-eejb">1942</option>
                                                                            <option data-select2-id="select2-data-5680-nxc2">1941</option>
                                                                            <option data-select2-id="select2-data-5681-w3zo">1940</option>
                                                                            <option data-select2-id="select2-data-5682-vptn">1939</option>
                                                                            <option data-select2-id="select2-data-5683-cs29">1938</option>
                                                                            <option data-select2-id="select2-data-5684-px4q">1937</option>
                                                                            <option data-select2-id="select2-data-5685-sdoa">1936</option>
                                                                            <option data-select2-id="select2-data-5686-27l9">1935</option>
                                                                            <option data-select2-id="select2-data-5687-wugf">1934</option>
                                                                            <option data-select2-id="select2-data-5688-eaob">1933</option>
                                                                            <option data-select2-id="select2-data-5689-mxj2">1932</option>
                                                                            <option data-select2-id="select2-data-5690-0djw">1931</option>
                                                                            <option data-select2-id="select2-data-5691-1qqx">1930</option>
                                                                        </select>
                                                                    </div>
                                                                    <span class="error_validate">
                                                                        <span class="text-danger" id="Customs_production_year_error"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text d-flex control-label justify-content-between">الغرض من الإستخدام
                                                                        <span class="tt" data-bs-toggle="tooltip" data-bs-placement="top" title="إذا أردت استخدام المركبة لأغراض شخصية وفي بعض الأوقات ستقوم بنقل ركاب عبر تطبيق أوبر على سبيل المثال فعليك اختيار نقل ركاب">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                                                <path id="info_FILL0_wght400_GRAD0_opsz48" d="M15.656,22.75h1.875v-7.5H15.656Zm.844-9.813a1.027,1.027,0,0,0,.734-.281.947.947,0,0,0,.3-.719,1.05,1.05,0,0,0-.3-.75,1.019,1.019,0,0,0-1.469,0,1.05,1.05,0,0,0-.3.75.947.947,0,0,0,.3.719A1.027,1.027,0,0,0,16.5,12.937ZM16.5,29a12.1,12.1,0,0,1-4.844-.984,12.594,12.594,0,0,1-6.672-6.672,12.486,12.486,0,0,1,0-9.719A12.492,12.492,0,0,1,7.672,7.656a12.814,12.814,0,0,1,3.984-2.672,12.486,12.486,0,0,1,9.719,0,12.48,12.48,0,0,1,6.641,6.641,12.486,12.486,0,0,1,0,9.719,12.814,12.814,0,0,1-2.672,3.984,12.492,12.492,0,0,1-3.969,2.687A12.172,12.172,0,0,1,16.5,29Zm.031-1.875a10.188,10.188,0,0,0,7.5-3.109,10.3,10.3,0,0,0,3.094-7.547,10.213,10.213,0,0,0-3.094-7.5A10.25,10.25,0,0,0,16.5,5.875,10.265,10.265,0,0,0,8.984,8.969,10.224,10.224,0,0,0,5.875,16.5a10.239,10.239,0,0,0,3.109,7.516A10.276,10.276,0,0,0,16.531,27.125ZM16.5,16.5Z" transform="translate(-4 -4)" fill="#858585" />
                                                                            </svg>
                                                                        </span></label>
                                                                    <div class="form-group">
                                                                        <div class="select-contain w-auto">
                                                                            <select id="Customs-Purpose-of-use" name="use_purpose" class="select-contain-select">
                                                                                <option value="">اختيار الغرض من استخدام المركبة.</option>
                                                                                <option value="1">شخصي</option>
                                                                                <option value="2">تجاري</option>
                                                                                <option value="3">تأجير</option>
                                                                                <option value="4">نقل الركاب أو كريم-أوبر </option>
                                                                                <option value="5">نقل بضائع</option>
                                                                                <option value="6">نقل مشتقات نفطية</option>

                                                                            </select>
                                                                        </div>
                                                                        <span class="error_validate">
                                                                            <span class="text-danger" id="Customs-use-error"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->

                                                            <div class="col-lg-3 col-sm-12 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text">تاريخ الميلاد</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-calendar form-icon"></span>
                                                                        <input id="Customs-Date-of-Birth" class="date-picker-single form-control" type="text" name="Date_of_Birth" readonly="">
                                                                        <span class="error_validate">
                                                                            <span class="text-danger" id="Customs-Birth-error"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-between">
                                                            <div class="col-lg-3">
                                                                <a href="/" class="theme-btn theme-btn-transparent w-100 text-center margin-top-20px">السابق</a>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button type="submit" class="theme-btn w-100 text-center margin-top-20px">الإستمرار</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div><!-- end tab-pane -->

                                        </div>
                                    </div><!-- end tab-pane -->

                                </div>
                                <div class="advanced-wrap">
                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                        <img width="30px" height="25px" src="{{asset('./images/NoPath - Copy (31).png')}}" alt=""> إضافة سائق<i class="la la-angle-down ml-1"></i>
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
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text">رقم الهوية</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-credit-card form-icon"></span>
                                                                        <input class="form-control" type="text" placeholder="رقم الهوية">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="input-box">
                                                                    <label class="label-text">الميلاد تاريخ</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-calendar form-icon"></span>
                                                                        <input class="date-picker-single form-control" type="text" name="date" readonly="">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="input-box">
                                                                    <label class="label-text"> أسم السائق</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-car form-icon"></span>
                                                                        <input class="form-control" type="text" placeholder="أسم السائق">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="input-box">
                                                                    <label class="label-text">نسبة القيادة</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-meh-o form-icon"></span>
                                                                        <input class="form-control" type="text" placeholder="نسبة القيادة">
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col-lg-3 -->


                                                            <div class="col-lg-3 pr-0">
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
                                <div class="d-flex flex-column">
                                    <label class="Form-label--tick" style="position: relative;">
                                        <input class="Form-label-checkbox valid" data-val="true" data-val-mustbetrue="يرجى قراءة الإقرار والموافقة عليه للمتابعة" data-val-required="الرجاء الإقرار بالمدخلات" id="Declaration" name="Declaration" type="checkbox" value="false" tabindex="108">
                                        <span class="Form-label-text"> أوافق على منح شركة بيت أمن الحق في الاستعلام من أي جهة ذات علاقة عن بياناتي أو أي بيانات أخرى </span>

                                    </label>
                                    <span class="">
                                        <span class="text-danger" id="agree-error"></span>
                                    </span>
                                </div>
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
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="SerialNumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content2">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">رخصة سير <br>VEHICLE REGISTRATION</h5>
                    <button type="button col-2" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">المالك</li>
                                <li class="list-group-item">المستخدم</li>
                                <li class="list-group-item">هوية المالك</li>
                                <li class="list-group-item">رقم الهيكل</li>
                                <li class="list-group-item">رقم اللوحة</li>
                                <li class="list-group-item"> .</li>
                                <li class="list-group-item">ماركة المركبة</li>
                                <li class="list-group-item">وزن المركبة</li>
                                <li class="list-group-item">اللون</li>
                                <li class="list-group-item">الرقم التسلسلي <button disabled style="border:0px; background: #4FB248 0% 0% no-repeat padding-box; width: 115px;height: 38px;">1234567890</button></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">هوية المستخدم</li>
                                <li class="list-group-item"> َ</li>
                                <li class="list-group-item">نوع التسجيل</li>
                                <li class="list-group-item">طراز المركبة</li>
                                <li class="list-group-item">حمولة المركبة</li>
                                <li class="list-group-item">سنة الصنع</li>
                                <li class="list-group-item">تاريخ الانتهاء</li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="Customs_card" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content2">
                <div class="modal-header">
                    <div>
                        <div class="col-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex"><span style="   width: 65px;">رقم البطاقة </span><button disabled style="    margin-right: 5px;border:0px; background: #4FB248 0% 0% no-repeat padding-box; width: 115px;height: 38px;">1234567890</button></li>
                                <li class="list-group-item d-flex">التاريخ</li>

                            </ul>
                        </div>
                        <h5 class="modal-title2" id="exampleModalLongTitle">بطاقة جمركية لوسائط النقل و المعدات الآلية</h5>
                    </div>

                    <button type="button col-2" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    @endsection
    @section('script')
    <script src="{{asset('js/myJS.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/add_vehicleJS.js')}}"></script>

    <script type="text/javascript">
        $('#Customs_card_form').on('submit', function(event) {
            event.preventDefault();
            $('#customs-card-number-errorr').text('');
            $('#Customs-use-error').text('');
            $('#Customs_production_year_error').text('');
            $('#Customs-Birth-error').text('');


            _token = $("input[name='_token']").val();
            customs_form_number = $('#customs-card-number').val();
            use_purpose = $('#Customs-Purpose-of-use').val();
            production_year = $('#Customs_production_year').val();
            Date_of_Birth = $('#Customs-Date-of-Birth').val();
            Vehicle_document_type = $('#Customs-Vehicle-document-type').val();
            agreed = document.getElementById('Declaration').checked;


            $.ajax({
                url: "/car-Info",
                type: "POST",
                data: {
                    _token: _token,
                    customs_form_number: customs_form_number,
                    use_purpose: use_purpose,
                    production_year: production_year,
                    Date_of_Birth: Date_of_Birth,
                    Vehicle_document_type: Vehicle_document_type,
                },
                success: function(response) {
                    console.log(response);
                    if (response[0] == 401) { // check whether response is received
                        console.log(response[0]);
                        agreed == false ? $('#agree-error').text('يرجى قراءة الإقرار والموافقة عليه للمتابعة') : $('#agree-error').text('');
                        $('#customs-card-number-error').text(response['error'].customs_form_number);
                        $('#Customs-use-error').text(response['error'].use_purpose);
                        $('#Customs_production_year_error').text(response['error'].production_year);
                        $('#Customs-Birth-error').text(response['error'].Date_of_Birth);


                    } else {
                        console.log(response);
                        window.location = "http://127.0.0.1:8000/loading_page2";
                    }
                },

            });
        });
    </script>
    @endsection
</x-website.web-master>