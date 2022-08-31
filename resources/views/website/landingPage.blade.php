<x-website.web-master>
    @section('title')
    <title>أمن: اول موقع لمقارنة وشراء التأمين بشكل فوري</title>

    @endsection
    @section('content')

    <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
    <section class="hero-wrapper">
        <div class="hero-box hero-bg">
            <span class="line-bg line-bg1"></span>
            <span class="line-bg line-bg2"></span>
            <span class="line-bg line-bg3"></span>
            <span class="line-bg line-bg4"></span>
            <span class="line-bg line-bg5"></span>
            <span class="line-bg line-bg6"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto responsive--column-l">
                        <div class="hero-content pb-5">
                            <div class="section-heading">
                                <h2 class="sec__title cd-headline zoom">
                                    قارن أسعار تأمين السيارات<span class="cd-words-wrapper">
                                        <b class="is-visible">ضد الغير </b>
                                        <b>شامل </b>

                                    </span>
                                    اونلاين
                                </h2>
                                <h3 class=" mt-3 " style="color:#a7a7a7">20+ شركة تأمين معتمدة - خيارات متعددة – وثيقة تأمين فورية</h3>
                            </div>
                        </div><!-- end hero-content -->
                        <div class="section-tab text-center pl-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                        <i class="la la-car mr-1"></i> تأمين ضد الغير
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                        <i class="la la-car mr-1"></i>تأمين شامل
                                    </a>
                                </li>




                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <!-- <div class="section-tab section-tab-2 pb-3">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="one-way-tab" data-toggle="tab"
                                                href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                                تأمين ضد الغير
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip"
                                                role="tab" aria-controls="round-trip" aria-selected="false">
                                                تأمين شامل
                                            </a>
                                        </li>
                                    </ul>
                                </div>end section-tab -->
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                        <div class="contact-form-action">
                                            <form id="Third-party-insurance" class="row align-items-center">
                                                @csrf
                                                <input hidden id="Insurance-type" type="text" name="Insurance-type" value="ضد الغير">
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">رقم الهوية</label>
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
                                                            <input id="ID-number" name="id_number" class="form-control" type="number" placeholder="رقم الهوية">
                                                            <span class="error_validate">
                                                                <span class="text-danger" id="id-error"></span>
                                                            </span>


                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">بدأ تاريخ سريان الوثيقة</label>
                                                        <div class="form-group">
                                                            <!-- <span class="la la-calendar form-icon"></span> -->
                                                            <input name="start_date" id="start-date" style="padding-right: 11px;" class="txtDate form-control" type="date" name="date">
                                                            <span class="error_validate">
                                                                <span class="text-danger" id="start-date-error"></span>
                                                            </span>


                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">رمز التحقق</label>
                                                        <div class="form-group">
                                                            <span class=" form-icon" style="top: 9px; left: auto;right: 13px;">
                                                                <svg id="vpn_key_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_9" data-name="Path 9" d="M0,0H24V24H0Z" fill="none" />
                                                                    <path id="Path_10" data-name="Path 10" d="M12.65,10a6,6,0,1,0,0,4H17v4h4V14h2V10ZM7,14a2,2,0,1,1,2-2A2.006,2.006,0,0,1,7,14Z" fill="#707070" />
                                                                </svg>
                                                            </span>
                                                            <input name="code" id="code" class="form-control" type="text" placeholder="رمز التحقق">
                                                            <span class="error_validate">
                                                                <span class="text-danger" id="code-error"></span>
                                                            </span>


                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->


                                                <div class="col-lg-6">
                                                    <button type="submit" class="theme-btn w-100 text-center margin-top-20px">ابحث
                                                        الآن</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- end tab-pane -->


                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="contact-form-action">
                                    <form id="full-insurance" class="row align-items-center">
                                        @csrf
                                        <input hidden id="full-Insurance-type" type="text" name="Insurance-type" value="شامل">
                                        <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">رقم الهوية</label>
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
                                                    <input id="full-ID-number" name="id_number" class="form-control" type="number" placeholder="رقم الهوية">
                                                    <span class="error_validate">
                                                        <span class="text-danger" id="full-id-error"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">بدأ تاريخ سريان الوثيقة</label>
                                                <div class="form-group">
                                                    <!-- <span class="la la-calendar form-icon"></span> -->
                                                    <input name="start_date" id="full-start-date" style="padding-right: 11px;" class="txtDate form-control" type="date" name="date">
                                                    <span class="error_validate">
                                                        <span class="text-danger" id="full-start-date-error"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">رمز التحقق</label>
                                                <div class="form-group">
                                                    <span class=" form-icon" style="top: 9px; left: auto;right: 13px;">
                                                        <svg id="vpn_key_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_9" data-name="Path 9" d="M0,0H24V24H0Z" fill="none" />
                                                            <path id="Path_10" data-name="Path 10" d="M12.65,10a6,6,0,1,0,0,4H17v4h4V14h2V10ZM7,14a2,2,0,1,1,2-2A2.006,2.006,0,0,1,7,14Z" fill="#707070" />
                                                        </svg>
                                                    </span>
                                                    <input name="code" id="full-code" class="form-control" type="text" placeholder="رمز التحقق">
                                                    <span class="error_validate">
                                                        <span class="text-danger" id="full-code-error"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->




                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn w-100 text-center margin-top-20px">ابحث
                                                الآن</button>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- end tab-pane -->
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>
        </div>
    </section><!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->

    <!-- ================================
    START INFO AREA
================================= -->
    <section class="info-area info-bg padding-top-50px padding-bottom-50px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class=""><img width="50.178" height="70.556" src="images/WhatsApp_Image_2022-08-30_at_12.45.35_AM_page-0001-removebg-preview.png" alt=""></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">الأول في المملكة</h4>
                            <p class="info__desc">
                                الأول في المملكة: بسبب خبرتنا كأول موقع في المملكة لمقارنة تأمين السيارات و التأمين الطبي قدرنا نوفر هالخدمة بشكل بسيط وسهل.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box margin-top-50px">
                        <div class="info-icon">
                            <i class=""><img width="50.178" height="70.556" src="images/WhatsApp_Image_2022-08-30_at_12.45.35_AM__1__page-0001-removebg-preview.png" alt=""></i>

                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">مكان واحد للتأمين</h4>
                            <p class="info__desc">
                                تجديد التأمين مهمة صعبة وطويلة، لذلك احنا في تأميني جمعنا لك عروض شركات التأمين في مكان واحد وشلنا عنك هم إنك تدور على شركات التأمين عشان تحصل العرض المناسب لك.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class=""><img width="60.178" height="70.556" src="images/WhatsApp_Image_2022-08-30_at_12.45.35_AM__2__page-0001-removebg-preview.png" alt=""></i>

                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">الوضوح والشفافية</h4>
                            <p class="info__desc">
                                ما نحب مفردات التأمين المعقدة، ولا نحبها لعملائنا. لذلك دائماً نخلي تفاصيل وثيقة التأمين واضحة وسهل أي شخص يفهمها.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class=""><img width="63.178" height="85.556" src="images/1__2__copy_page-0001-removebg-preview.png" alt=""></i>

                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">فريق فني و قانوني</h4>
                            <p class="info__desc">
                                نظام إننا نبيع وننساك مو من قاموسنا. جهزنا لك فريق فني وقانوني متمرس ومتخصص لأي استفسار أو مشكلة صارت لك.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box margin-top-50px">
                        <div class="info-icon">
                            <i class=""><img width="65.178" height="76.556" src="images/WhatsApp_Image_2022-08-30_at_12.45.36_AM__1__page-0001-removebg-preview.png" alt=""></i>

                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">اختيارات متنوعة</h4>
                            <p class="info__desc">
                                مع أمن، صار شبه مستحيل ما تحصل على ما تريد!
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class=""><img width="73.178" height="85.556" src="images/WhatsApp_Image_2022-08-30_at_12.45.36_AM__2__page-0001-removebg-preview.png" alt=""></i>

                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">أسعارنا متساوية</h4>
                            <p class="info__desc">
                                إذا أسعارنا ما كانت أقل من شركة التأمين، فهي راح تكون نفسها. بالضبط.. هذا نظامنا.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
    END INFO AREA
================================= -->

    <div class="section-block"></div>



    <!-- ================================
    START MOBILE AREA
================================= -->
    <!-- <section class="mobile-app padding-top-100px padding-bottom-50px section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55">يتوفر تطبيق Trizen Android و IOS!</h2>
                        </div>
                        <ul class="info-list padding-top-30px">
                            <li class="d-flex align-items-center mb-3"><span class="la la-check icon-element flex-shrink-0 ml-0"></span> الوصول وتغيير خط سير الرحلة الخاص بك أثناء التنقل</li>
                            <li class="d-flex align-items-center mb-3"><span class="la la-check icon-element flex-shrink-0 ml-0"></span> إلغاء مجاني في الفنادق المختارة</li>
                            <li class="d-flex align-items-center mb-3"><span class="la la-check icon-element flex-shrink-0 ml-0"></span> احصل على تحديثات الرحلة في الوقت الحقيقي</li>
                        </ul>
                        <div class="btn-box padding-top-30px">
                            <a href="#" class="d-inline-block mr-3">
                                <img src="images/app-store.png" alt="">
                            </a>
                            <a href="#" class="d-inline-block">
                                <img src="images/google-play.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mobile-img">
                        <img src="images/mobile-app.png" alt="mobile-img">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end mobile-app -->
    <!-- ================================
    END MOBILE AREA
================================= -->

    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
    <section class="clientlogo-area padding-top-80px padding-bottom-80px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <img src="images/client-logo.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo2.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo3.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo4.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo5.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo6.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end clientlogo-area -->
    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
    @endsection
    @section('script')
    <script type="text/javascript" src="{{asset('js/landingJS.js')}}"></script>
    @endsection
</x-website.web-master>