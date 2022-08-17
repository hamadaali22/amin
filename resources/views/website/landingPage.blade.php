<x-website.web-master>

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
                                        <b class="is-visible">ضد الغير</b>
                                        <b>شامل</b>
                                     
                                    </span>
                                    اونلاين
                                </h2>
                                <h3 class=" mt-3 " style="color:#a7a7a7">20+ شركة تأمين معتمدة - خيارات متعددة – وثيقة تأمين فورية</h3>
                            </div>
                        </div><!-- end hero-content -->
                        <div class="section-tab text-center pl-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="flight-tab"
                                        data-toggle="tab" href="#flight" role="tab" aria-controls="flight"
                                        aria-selected="true">
                                        <i class="la la-car mr-1"></i>تأمين السيارات
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="hotel-tab" data-toggle="tab"
                                        href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                        <i class="la la-hotel mr-1"></i>التأمين الطبي
                                    </a>
                                </li>
                        
                         
                        
                           
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel"
                                aria-labelledby="flight-tab">
                                <div class="section-tab section-tab-2 pb-3">
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
                                </div><!-- end section-tab -->
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                        aria-labelledby="one-way-tab">
                                        <div class="contact-form-action">
                                            <form action="#" class="row align-items-center">
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">رقم الهوية</label>
                                                        <div class="form-group">
                                                            <span class="la la-credit-card form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="رقم الهوية">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">بدأ تاريخ سريان الوثيقة</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-range form-control" type="text"
                                                                name="daterange-single">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">رمز التحقق</label>
                                                        <div class="form-group">
                                                            <span class="la la-meh-o form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="رمز التحقق">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                              

                                                <div class="col-lg-6">
                                                    <a href="flight-search-result.html"
                                                        class="theme-btn w-100 text-center margin-top-20px">ابحث
                                                        الآن</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade" id="round-trip" role="tabpanel"
                                        aria-labelledby="round-trip-tab">
                                        <div class="contact-form-action">
                                            <form action="#" class="row align-items-center">
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">رقم الهوية</label>
                                                        <div class="form-group">
                                                            <span class="la la-credit-card form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="رقم الهوية">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">بدأ تاريخ سريان الوثيقة</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-range form-control" type="text"
                                                                name="daterange-single">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">رمز التحقق</label>
                                                        <div class="form-group">
                                                            <span class="la la-meh-o form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="رمز التحقق">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-lg-3 -->
                                              

                                                <div class="col-lg-6">
                                                    <a href="flight-search-result.html"
                                                        class="theme-btn w-100 text-center margin-top-20px">ابحث
                                                        الآن</a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- <div class="advanced-wrap">
                                            <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                                data-toggle="collapse" href="#collapseThree" role="button"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                خيارات متقدمة <i class="la la-angle-down ml-1"></i>
                                            </a>
                                            <div class="collapse pt-3" id="collapseThree">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="input-box">
                                                            <label class="label-text">شركة الطيران المفضلة</label>
                                                            <div class="form-group">
                                                                <div class="select-contain w-100">
                                                                    <select class="select-contain-select">
                                                                        <option selected="selected" value=""> No
                                                                            preference</option>
                                                                        <option value="AN">Advanced Air</option>
                                                                        <option value="A3">Aegean</option>
                                                                        <option value="EI">Aer Lingus</option>
                                                                        <option value="5G">Aerocuahonte / Mayair
                                                                        </option>
                                                                        <option value="SU">Aeroflot-Russian Airlines
                                                                        </option>
                                                                        <option value="AR">Aerolineas Argentinas
                                                                        </option>
                                                                        <option value="VW">Aeromar Airlines</option>
                                                                        <option value="AM">Aeromexico</option>
                                                                        <option value="ZI">Aigle Azur</option>
                                                                        <option value="AH">Air Algerie</option>
                                                                        <option value="KC">Air Astana</option>
                                                                        <option value="UU">Air Austral</option>
                                                                        <option value="BT">Air Baltic</option>
                                                                        <option value="BP">Air Botswana</option>
                                                                        <option value="AC">Air Canada</option>
                                                                        <option value="TX">Air Caraibes</option>
                                                                        <option value="CA">Air China</option>
                                                                        <option value="3E">Air Choice One</option>
                                                                        <option value="XK">Air Corsica</option>
                                                                        <option value="UX">Air Europa</option>
                                                                        <option value="X4">Air Excursions LLC</option>
                                                                        <option value="AF">Air France</option>
                                                                        <option value="NY">Air Iceland Connect</option>
                                                                        <option value="AI">Air India</option>
                                                                        <option value="IG">Air Italy</option>
                                                                        <option value="MD">Air Madagascar</option>
                                                                        <option value="KM">Air Malta</option>
                                                                        <option value="MK">Air Mauritius</option>
                                                                        <option value="9U">Air Moldova</option>
                                                                        <option value="NZ">Air New Zealand</option>
                                                                        <option value="PX">Air Niugini</option>
                                                                        <option value="OG">Air Onix</option>
                                                                        <option value="JU">Air Serbia</option>
                                                                        <option value="TN">Air Tahiti Nui</option>
                                                                        <option value="TS">Air Transat</option>
                                                                        <option value="H/">AirAsia with baggage</option>
                                                                        <option value="AS">Alaska Airlines</option>
                                                                        <option value="AZ">Alitalia</option>
                                                                        <option value="NH">All Nippon Airways</option>
                                                                        <option value="G4">Allegiant Air</option>
                                                                        <option value="AA">American Airlines</option>
                                                                        <option value="OY">Andes Lineas Aereas</option>
                                                                        <option value="OZ">Asiana Airlines</option>
                                                                        <option value="KP">ASKY</option>
                                                                        <option value="OS">Austrian Airlines</option>
                                                                        <option value="AV">Avianca</option>
                                                                        <option value="2K">Avianca Ecuador</option>
                                                                        <option value="9V">Avior Airlines</option>
                                                                        <option value="J2">Azerbaijan Airlines</option>
                                                                        <option value="AD">Azul</option>
                                                                        <option value="JD">Beijing Capital Airlines
                                                                        </option>
                                                                        <option value="0B">BlueAir</option>
                                                                        <option value="OB">Boliviana De Aviacion
                                                                        </option>
                                                                        <option value="4B">Boutique Air</option>
                                                                        <option value="BA">British Airways</option>
                                                                        <option value="SN">Brussels Airlines</option>
                                                                        <option value="A7">Calafia Airlines</option>
                                                                        <option value="K6">Cambodia Angkor Air</option>
                                                                        <option value="BW">Caribbean Airlines</option>
                                                                        <option value="CX">Cathay Pacific</option>
                                                                        <option value="KX">Cayman Airways</option>
                                                                        <option value="CI">China Airlines</option>
                                                                        <option value="MU">China Eastern Airlines
                                                                        </option>
                                                                        <option value="CZ">China Southern Airlines
                                                                        </option>
                                                                        <option value="CC">CM Airlines</option>
                                                                        <option value="DE">Condor</option>
                                                                        <option value="LF">Contour Airlines</option>
                                                                        <option value="CM">Copa</option>
                                                                        <option value="SS">Corsair</option>
                                                                        <option value="OK">Czech Airlines</option>
                                                                        <option value="DL">Delta</option>
                                                                        <option value="KG">Denver Air Connection
                                                                        </option>
                                                                        <option value="U2">easyJet</option>
                                                                        <option value="MS">Egyptair</option>
                                                                        <option value="LY">EL AL Israel Airlines
                                                                        </option>
                                                                        <option value="7Q">Elite Airways</option>
                                                                        <option value="EL">Ellinair</option>
                                                                        <option value="EK">Emirates</option>
                                                                        <option value="ET">Ethiopian Airlines</option>
                                                                        <option value="EY">Etihad Airways</option>
                                                                        <option value="EW">Eurowings</option>
                                                                        <option value="BR">EVA Airways</option>
                                                                        <option value="FJ">Fiji Airways</option>
                                                                        <option value="AY">Finnair</option>
                                                                        <option value="FY">Firefly</option>
                                                                        <option value="F8">Flair Airlines</option>
                                                                        <option value="BE">Flybe</option>
                                                                        <option value="FZ">flydubai</option>
                                                                        <option value="XY">flynas</option>
                                                                        <option value="F9">Frontier Airlines</option>
                                                                        <option value="GA">Garuda Indonesia</option>
                                                                        <option value="GM">Germania Flug AG</option>
                                                                        <option value="4U">Germanwings</option>
                                                                        <option value="G3">GOL Linhas Aereas S.A.
                                                                        </option>
                                                                        <option value="ZK">Great Lakes Airlines</option>
                                                                        <option value="GF">Gulf Air</option>
                                                                        <option value="HU">Hainan Airlines</option>
                                                                        <option value="HA">Hawaiian Airlines</option>
                                                                        <option value="HX">Hong Kong Airlines</option>
                                                                        <option value="IB">Iberia</option>
                                                                        <option value="FI">Icelandair</option>
                                                                        <option value="JY">interCaribbean Airways
                                                                        </option>
                                                                        <option value="4O">Interjet</option>
                                                                        <option value="03">Involatus</option>
                                                                        <option value="JL">Japan Airlines</option>
                                                                        <option value="9W">Jet Airways</option>
                                                                        <option value="B6">JetBlue Airways</option>
                                                                        <option value="DV">JSC Aircompany SCAT</option>
                                                                        <option value="KQ">Kenya Airways</option>
                                                                        <option value="KL">KLM</option>
                                                                        <option value="KE">Korean Air</option>
                                                                        <option value="B0">La Compagnie</option>
                                                                        <option value="LR">LACSA</option>
                                                                        <option value="QV">Lao Airlines</option>
                                                                        <option value="LP">LATAM Airlines Group</option>
                                                                        <option value="LA">LATAM Airlines Group</option>
                                                                        <option value="JJ">LATAM Airlines Group</option>
                                                                        <option value="XL">LATAM Airlines Group</option>
                                                                        <option value="4M">LATAM Airlines Group</option>
                                                                        <option value="W4">LC Peru</option>
                                                                        <option value="LI">Liat</option>
                                                                        <option value="LO">LOT-Polish Airlines</option>
                                                                        <option value="LH">Lufthansa</option>
                                                                        <option value="LG">Luxair</option>
                                                                        <option value="MH">Malaysia Airlines</option>
                                                                        <option value="OD">Malindo Air</option>
                                                                        <option value="2M">Maya Island Air</option>
                                                                        <option value="7M">Mayair</option>
                                                                        <option value="OM">MIAT-Mongolian Airlines
                                                                        </option>
                                                                        <option value="ME">Middle East Airlines</option>
                                                                        <option value="YM">Montenegro</option>
                                                                        <option value="8M">Myanmar Airways International
                                                                        </option>
                                                                        <option value="NO">Neos S.P.A.</option>
                                                                        <option value="RA">Nepal Airlines</option>
                                                                        <option value="NP">Nile Air</option>
                                                                        <option value="W/">NokScoot with baggage
                                                                        </option>
                                                                        <option value="DN">Norwegian Air Argentina
                                                                        </option>
                                                                        <option value="D8">Norwegian Air International
                                                                            Ltd</option>
                                                                        <option value="DY">Norwegian Air Shuttle
                                                                        </option>
                                                                        <option value="DI">Norwegian Air UK</option>
                                                                        <option value="Y/">Olympic Air with baggage
                                                                        </option>
                                                                        <option value="WY">Oman Air</option>
                                                                        <option value="8Q">Onur Air</option>
                                                                        <option value="8P">Pacific Coastal Airlines
                                                                        </option>
                                                                        <option value="PK">Pakistan International
                                                                            Airlines</option>
                                                                        <option value="ZM">Pegasus Asia</option>
                                                                        <option value="KS">PenAir</option>
                                                                        <option value="PR">Philippine Airlines</option>
                                                                        <option value="PU">Plus Ultra Lineas Aereas S.
                                                                            A.</option>
                                                                        <option value="PD">Porter Airlines</option>
                                                                        <option value="PW">PrecisionAir</option>
                                                                        <option value="P0">Proflight Zambia</option>
                                                                        <option value="QF">Qantas Airways</option>
                                                                        <option value="QR">Qatar Airways</option>
                                                                        <option value="7H">Ravn Alaska</option>
                                                                        <option value="WZ">Red Wings Airlines</option>
                                                                        <option value="4P">Regional Sky</option>
                                                                        <option value="AT">Royal Air Maroc</option>
                                                                        <option value="BI">Royal Brunei Airlines
                                                                        </option>
                                                                        <option value="RJ">Royal Jordanian</option>
                                                                        <option value="WB">Rwandair</option>
                                                                        <option value="SK">SAS</option>
                                                                        <option value="S4">SATA International-Azores
                                                                            Airlines S.A.</option>
                                                                        <option value="SV">Saudi Arabian Airlines
                                                                        </option>
                                                                        <option value="/Y">Scoot with baggage</option>
                                                                        <option value="BB">Seaborne Airlines</option>
                                                                        <option value="SC">Shandong Airlines</option>
                                                                        <option value="3U">Sichuan Airlines</option>
                                                                        <option value="3M">Silver Airways</option>
                                                                        <option value="SQ">Singapore Airlines</option>
                                                                        <option value="H2">Sky Airlines</option>
                                                                        <option value="GQ">Sky Express</option>
                                                                        <option value="IE">Solomon Airlines</option>
                                                                        <option value="SA">South African Airways
                                                                        </option>
                                                                        <option value="9X">Southern Airways</option>
                                                                        <option value="NK">Spirit Airlines</option>
                                                                        <option value="UL">SriLankan Airlines</option>
                                                                        <option value="2I">STAR PERU</option>
                                                                        <option value="6G">Sun Air Express</option>
                                                                        <option value="SY">Sun Country Airlines</option>
                                                                        <option value="PY">Surinam Airways</option>
                                                                        <option value="LX">Swiss International Air Lines
                                                                        </option>
                                                                        <option value="WO">Swoop</option>
                                                                        <option value="DT">TAAG Angola Airlines</option>
                                                                        <option value="TA">TACA Airlines</option>
                                                                        <option value="VR">TACV-Cabo Verde Airlines
                                                                        </option>
                                                                        <option value="5U">TAG Airlines</option>
                                                                        <option value="EQ">Tame</option>
                                                                        <option value="TP">TAP Portugal</option>
                                                                        <option value="RO">Tarom-Romanian Air Transport
                                                                        </option>
                                                                        <option value="TG">Thai Airways International
                                                                        </option>
                                                                        <option value="MT">Thomas Cook Airlines</option>
                                                                        <option value="/X">Tigerair Australia with Bag
                                                                        </option>
                                                                        <option value="IT">Tigerair Taiwan</option>
                                                                        <option value="/Z">Tigerair Taiwan with bag
                                                                        </option>
                                                                        <option value="TJ">Tradewind Aviation</option>
                                                                        <option value="9N">Tropic Air</option>
                                                                        <option value="TB">TUI fly</option>
                                                                        <option value="TK">Turkish Airlines</option>
                                                                        <option value="PS">Ukraine International
                                                                            Airlines</option>
                                                                        <option value="UA">United</option>
                                                                        <option value="UT">Utair Aviation</option>
                                                                        <option value="HY">Uzbekistan Airways</option>
                                                                        <option value="VN">Vietnam Airlines</option>
                                                                        <option value="VX">Virgin America</option>
                                                                        <option value="VS">Virgin Atlantic</option>
                                                                        <option value="VA">Virgin Australia</option>
                                                                        <option value="V2">Vision Airlines</option>
                                                                        <option value="VB">Viva Aerobus</option>
                                                                        <option value="F1">Viva Air Colombia</option>
                                                                        <option value="VV">Viva Airlines Peru</option>
                                                                        <option value="Y4">Volaris</option>
                                                                        <option value="V7">Volotea</option>
                                                                        <option value="VY">Vueling Airlines</option>
                                                                        <option value="WS">WestJet</option>
                                                                        <option value="WM">Windward Island Airways
                                                                            International</option>
                                                                        <option value="MF">Xiamen Airlines</option>
                                                                        <option value="SE">XL Airways</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end advanced-wrap -->
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel"
                                        aria-labelledby="multi-city-tab">
                                        <div class="contact-form-action multi-flight-field d-flex align-items-center">
                                            <form action="#" class="row flex-grow-1 align-items-center">
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">الطيران من</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="المدينة أو المطار">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">منطلقة الى</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="المدينة أو المطار">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">المغادرة</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-range form-control date-multi-picker"
                                                                type="text" name="daterange-single">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </form>
                                            <div class="multi-flight-delete-wrap pt-3 pl-3">
                                                <button class="multi-flight-remove" type="button"><i
                                                        class="la la-remove"></i></button>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 pr-0">
                                                <div class="form-group">
                                                    <button class="theme-btn add-flight-btn margin-top-40px w-100"
                                                        type="button"><i class="la la-plus mr-1"></i>أضف رحلة
                                                        أخرى</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">ركاب</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="adult" data-text="الكبار"
                                                                    data-text-multi="الكبار">0 الكبار</span>
                                                                -
                                                                <span class="children" data-text="طفل"
                                                                    data-text-multi="أطفال">0 أطفال</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>الكبار</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i
                                                                                    class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number"
                                                                                value="0">
                                                                            <div class="qtyInc"><i
                                                                                    class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>أطفال</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i
                                                                                    class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number"
                                                                                value="0">
                                                                            <div class="qtyInc"><i
                                                                                    class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>الرضع</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i
                                                                                    class="la la-minus"></i></div>
                                                                            <input type="text" name="infants_number"
                                                                                value="0" class="qty-input">
                                                                            <div class="qtyInc"><i
                                                                                    class="la la-plus"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">مدرب</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="1" selected>الاقتصاد</option>
                                                                <option value="2">اعمال</option>
                                                                <option value="3">الصف الأول</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <a href="flight-search-result.html"
                                                    class="theme-btn w-100 text-center margin-top-20px">ابحث الآن</a>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <h3>Comming Soon</h3>
                                <!-- <div class="contact-form-action"> -->
                                    <!-- <form action="#" class="row align-items-center"> -->
                                        <!-- <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">الوجهة / اسم الفندق</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="أدخل المدينة أو الممتلكات">
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end col-lg-3 -->
                                        <!-- <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">تحقق في</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single">
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end col-lg-3 -->
                                        <!-- <div class="col-lg-3 pr-0"> -->
                                            <!-- <div class="input-box">
                                                <label class="label-text">الدفع</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single">
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end col-lg-3 -->
                                        <!-- <div class="col-lg-3">
                                            <div class="input-box">
                                                <label class="label-text">ضيوف</label> -->
                                                <!-- <div class="form-group"> -->
                                                    <!-- <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <span class="adult" data-text="الكبار"
                                                                data-text-multi="الكبار">0 الكبار</span>
                                                            -
                                                            <span class="children" data-text="طفل"
                                                                data-text-multi="أطفال">0 أطفال</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>غرف</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="room_number" value="0"
                                                                            class="qty-input">
                                                                        <div class="qtyInc"><i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>الكبار</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="adult_number"
                                                                            value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>أطفال</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="child_number"
                                                                            value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- end dropdown -->
                                                <!-- </div> -->
                                            <!-- </div>
                                        </div> -->
                                        <!-- end col-lg-3 -->
                                    <!-- </form>
                                </div> -->
                                <!-- <div class="btn-box">
                                    <a href="hotel-search-result.html" class="theme-btn">ابحث الآن</a>
                                </div> -->
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
                            <i class="la la-bullhorn"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">لن تتجول بمفردك أبدًا</h4>
                            <p class="info__desc">
                                كانت إقامتنا ممتعة ومرحبة. بقينا في شقة مخصصة لثلاثة بالغين مع مرافق المطبخ. كانت خدمات
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box margin-top-50px">
                        <div class="info-icon">
                            <i class="la la-globe"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">عالم من الاختيار - في أي وقت وفي أي مكان</h4>
                            <p class="info__desc">
                                كانت إقامتنا ممتعة ومرحبة. بقينا في شقة مخصصة لثلاثة بالغين مع مرافق المطبخ. كانت خدمات
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-thumbs-up"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">راحة البال أينما كنت</h4>
                            <p class="info__desc">
                                كانت إقامتنا ممتعة ومرحبة. بقينا في شقة مخصصة لثلاثة بالغين مع مرافق المطبخ. كانت خدمات
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
    START ROUND-TRIP AREA
================================= -->
    <section class="round-trip-flight section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">الأكثر شهرة ذهابا وإيابا <br> وجهات الطيران </h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="flight-filter-tab text-center">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs justify-content-center" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="new-york-tab" data-toggle="tab" href="#new-york" role="tab" aria-controls="new-york" aria-selected="false">
                                        نيويورك
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hong-kong-tab" data-toggle="tab" href="#hong-kong" role="tab" aria-controls="hong-kong" aria-selected="false">
                                        هونج كونج
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="beijing-tab" data-toggle="tab" href="#beijing" role="tab" aria-controls="beijing" aria-selected="false">
                                        بكين
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tokyo-tab" data-toggle="tab" href="#tokyo" role="tab" aria-controls="tokyo" aria-selected="false">
                                        طوكيو
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="seoul-tab" data-toggle="tab" href="#seoul" role="tab" aria-controls="seoul" aria-selected="false">
                                        سيول
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                    </div><!-- end flight-filter-tab -->
                    <div class="popular-round-trip-wrap padding-top-40px">
                        <div class="tab-content" id="myTabContent4">
                            <div class="tab-pane fade show active" id="new-york" role="tabpanel" aria-labelledby="new-york-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        نيويورك <i class="la la-exchange mx-2"></i>الملائكة
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        نيويورك<i class="la la-exchange mx-2"></i>برشلونة
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$740</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        نيويورك<i class="la la-exchange mx-2"></i>دالاس
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$140</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        نيويورك<i class="la la-exchange mx-2"></i>سان فرانسيسكو
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        نيويورك<i class="la la-exchange mx-2"></i>ميامي
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$100</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        نيويورك<i class="la la-exchange mx-2"></i>لندن
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$640</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="hong-kong" role="tabpanel" aria-labelledby="hong-kong-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        هونج كونج<i class="la la-exchange mx-2"></i>سنغافورة
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        هونج كونج<i class="la la-exchange mx-2"></i>طوكيو
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$740</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        هونج كونج<i class="la la-exchange mx-2"></i>سيول
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$140</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        هونج كونج<i class="la la-exchange mx-2"></i>مانيلا
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        هونج كونج<i class="la la-exchange mx-2"></i>نيبال
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$100</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        هونج كونج<i class="la la-exchange mx-2"></i>بكين
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$640</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="seoul" role="tabpanel" aria-labelledby="seoul-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        سيول<i class="la la-exchange mx-2"></i>نيبال
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        سيول<i class="la la-exchange mx-2"></i>تايبيه
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$740</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        سيول<i class="la la-exchange mx-2"></i>بكين
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$140</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        سيول<i class="la la-exchange mx-2"></i>طوكيو
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        سيول<i class="la la-exchange mx-2"></i>هونغ كونغ
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$100</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        سيول<i class="la la-exchange mx-2"></i>بانكوك
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$640</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="tokyo" role="tabpanel" aria-labelledby="tokyo-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        طوكيو<i class="la la-exchange mx-2"></i>تايبيه
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        طوكيو<i class="la la-exchange mx-2"></i>تايبيه
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$740</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        طوكيو<i class="la la-exchange mx-2"></i>بكين
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$140</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        طوكيو<i class="la la-exchange mx-2"></i>طوكيو
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        طوكيو<i class="la la-exchange mx-2"></i>هونغ كونغ
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$100</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        طوكيو<i class="la la-exchange mx-2"></i>هانوي
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$640</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="beijing" role="tabpanel" aria-labelledby="beijing-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        بكين<i class="la la-exchange mx-2"></i>تايبيه
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        بكين<i class="la la-exchange mx-2"></i>تايبيه
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$740</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        بكين<i class="la la-exchange mx-2"></i>بكين
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$140</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        بكين<i class="la la-exchange mx-2"></i>طوكيو
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$340</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        بكين<i class="la la-exchange mx-2"></i>هونغ كونغ
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$100</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        بكين<i class="la la-exchange mx-2"></i>هانوي
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">الثلاثاء ، 14 يوليو - الجمعة ، 24 يوليو</p>
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center"><span class="price__from mr-1">من عند</span><span class="price__num">$640</span></div>
                                                <a href="flight-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                        <div class="tab-content-info d-flex justify-content-between align-items-center">
                            <p class="font-size-15"><i class="la la-question-circle mr-1"></i>متوسط ​​سعر رحلة الذهاب والعودة للفرد ، شامل الضرائب والرسوم.</p>
                            <a href="#" class="btn-text font-size-15">إكتشف أكثر <i class="la la-angle-right"></i></a>
                        </div><!-- end tab-content-info -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end round-trip-flight -->
    <!-- ================================
    END ROUND-TRIP AREA
================================= -->

    <!-- ================================
    START HOTEL AREA
================================= -->
    <section class="hotel-area section-bg section-padding overflow-hidden padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">وجهات الفنادق الأكثر شهرة</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="hotel-card-wrap">
                        <div class="hotel-card-carousel carousel-action">
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img1.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">الأكثر مبيعا</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">ميلينيوم هيلتون نيويورك</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img2.jpg" alt="hotel-img">
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">فندق بست ويسترن جرانت بارك</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$58.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img3.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">متميز</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">منتجع وسبا حياة ريجنسي ماوي</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img4.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">جمع</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">منتجع فور سيزونز ماوي في ويليا</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img">
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">إيبيس ستايلز لندن هيثرو</a></h3>
                                    <p class="card-meta"> 124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img6.jpg" alt="hotel-img">
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">فندق Europe Saint Severin باريس</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img1.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">الأكثر مبيعا</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">ميلينيوم هيلتون نيويورك</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img2.jpg" alt="hotel-img">
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="المرجعية">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">فندق بست ويسترن جرانت بارك</a></h3>
                                    <p class="card-meta">124 شارع لافيستا ، نيويورك</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">معدل</span>
                                        <span class="rating__text">(30 التعليقات)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">من عند</span>
                                            <span class="price__num">$58.00</span>
                                            <span class="price__text">لليلة الواحدة</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">انظر التفاصيل<i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div><!-- end hotel-card-carousel -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </section><!-- end hotel-area -->
    <!-- ================================
    END HOTEL AREA
================================= -->
    <!-- ================================
    START DESTINATION AREA
================================= -->
    <section class="destination-area section--padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="destination-content">
                        <div class="section-heading">
                            <h2 class="sec__title">الأماكن التي تمت زيارتها</h2>
                            <p class="sec__desc pt-3">كرة قدم وادي شرب وعاء لسحب Tellus
                        </div><!-- end section-heading -->
                    </div>
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="btn-box btn--box text-right">
                        <a href="tour-grid.html" class="theme-btn">إكتشف أكثر</a>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img2.jpg" alt="destination-img">
                            <span class="badge">نيويورك</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">حديقة مين ستريت</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 تعليقات)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 جولة
                                </p>
                                <p>
                                    <span class="price__from">السعر</span>
                                    <span class="price__num">$58.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img3.jpg" alt="destination-img">
                            <span class="badge">شيكاغو</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">مركز شيكاغو الثقافي</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 تعليقات)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 جولة
                                </p>
                                <p>
                                    <span class="price__from">السعر</span>
                                    <span class="price__num">$68.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img4.jpg" alt="destination-img">
                            <span class="badge">هونج كونج</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">مرصد طريق لوغارد</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 تعليقات)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 جولة
                                </p>
                                <p>
                                    <span class="price__from">السعر</span>
                                    <span class="price__num">$79.00</span>
                                    <span class="price__num before-price">$89.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img5.jpg" alt="destination-img">
                            <span class="badge">لاس فيجاس</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">منتجع بلانيت هوليوود</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 تعليقات)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 جولة
                                </p>
                                <p>
                                    <span class="price__from">السعر</span>
                                    <span class="price__num">$88.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img.jpg" alt="destination-img">
                            <span class="badge">شنغهاي</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">برج تلفزيون لؤلؤة الشرق</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                <span class="rating__text">(70694 تعليقات)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 جولة
                                </p>
                                <p>
                                    <span class="price__from">السعر</span>
                                    <span class="price__num">$58.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
================================= -->
    <!-- ================================
    START CAR AREA
================================= -->
    <section class="car-area section-bg section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">أوصى تأجير السيارات</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="car-wrap">
                        <div class="car-carousel carousel-action">
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img.png" alt="car-img">
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
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img2.png" alt="car-img">
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
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img3.png" alt="car-img">
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
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img4.png" alt="car-img">
                                    </a>
                                    <span class="badge">الأكثر مبيعا</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="احفظ لوقت لاحق">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">بالحجم الكامل</p>
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
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img5.png" alt="car-img">
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
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img6.png" alt="car-img">
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
                        </div><!-- end car-carousel -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end car-area -->
    <!-- ================================
    END CAR AREA
================================= -->

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-50">ماذا يقول لنا عملاؤنا؟</h2>
                        <p class="sec__desc padding-top-30px">
                            كانت إقامتنا ممتعة ومرحبة. بقينا في شقة مخصصة لثلاثة بالغين مع مرافق المطبخ.
                        </p>
                        <div class="btn-box padding-top-35px">
                            <a href="#" class="theme-btn">استكشف الكل</a>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="testimonial-carousel carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">إنهم ذنب السود في واجبات الاستثناء ، فقد تخلوا عن كيوبيداتات ، فهي مهدئة لروحي ، وليس كدحتي ، فهم في الستائر باستثناء كيوبيدات ليست استثناءً. الاستثنائي كيوبيدات السود لا يعطونه</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">ليروي بيل</h4>
                                    <span class="author__meta">الولايات المتحدة الأمريكية</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">إنهم ذنب السود في واجبات الاستثناء ، فقد تخلوا عن كيوبيداتات ، فهي مهدئة لروحي ، وليس كدحتي ، فهم في الستائر باستثناء كيوبيدات ليست استثناءً. الاستثنائي كيوبيدات السود لا يعطونه</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team9.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">ريتشارد بام</h4>
                                    <span class="author__meta">كندا</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">إنهم ذنب السود في واجبات الاستثناء ، فقد تخلوا عن كيوبيداتات ، فهي مهدئة لروحي ، وليس كدحتي ، فهم في الستائر باستثناء كيوبيدات ليست استثناءً. الاستثنائي كيوبيدات السود لا يعطونه</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team10.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">لوك جاكوبس</h4>
                                    <span class="author__meta">أستراليا</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">إنهم ذنب السود في واجبات الاستثناء ، فقد تخلوا عن كيوبيداتات ، فهي مهدئة لروحي ، وليس كدحتي ، فهم في الستائر باستثناء كيوبيدات ليست استثناءً. الاستثنائي كيوبيدات السود لا يعطونه</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">تشولبول باندي</h4>
                                    <span class="author__meta">إيطاليا</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                    </div><!-- end testimonial-carousel -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonial-area -->
    <!-- ================================
       START TESTIMONIAL AREA
================================= -->

    <!-- ================================
    START CTA AREA
================================= -->
    <section class="cta-area padding-top-100px padding-bottom-180px text-center">
        <div class="video-bg">
            <video autoplay loop>
                <source src="video/video-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white line-height-55">دعنا نريك العالم <br>
                            اكتشف وجهاتنا الأكثر شعبية</h2>
                    </div><!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="become-local-expert.html" class="theme-btn border-0">انضم إلينا</a>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </section><!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->

    <!-- ================================
       START BLOG AREA
================================= -->
    <section class="blog-area padding-top-30px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">آخر الأخبار والمقالات <br> قد تعجبك</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="images/blog-img.jpg" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-photo"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">السفر</a>
                                    <a href="#" class="badge">أسلوب الحياة</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="blog-single.html">عند السفر تجنب الفنادق والمنتجعات باهظة الثمن</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 يناير 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">5 دقائق للقراءة</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/small-team1.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">ليروي بيل</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="images/blog-img2.jpg" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-play"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">فيديو</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="blog-single.html">أفضل نصائح السفر: دليل السفر النهائي</a></h3>
                                <p class="card-meta">
                                    <span class="post__date">1 فبراير 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">4 دقائق للقراءة</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/small-team2.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">فيليب هانت</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="images/blog-img3.jpg" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-music"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">سمعي</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="blog-single.html">بكل الوسائل ، السفر إلى المواقع الشهيرة ولا تستبعد المواقع الأخرى</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 مارس 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">3 دقائق للقراءة</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/small-team3.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">لوك جاكوبس</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box text-center pt-4">
                        <a href="blog-grid.html" class="theme-btn">قراءة المزيد Post</a>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

    <!-- ================================
    START MOBILE AREA
================================= -->
    <section class="mobile-app padding-top-100px padding-bottom-50px section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55">يتوفر تطبيق Trizen Android و IOS!</h2>
                        </div><!-- end section-heading -->
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
                        </div><!-- end btn-box -->
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="mobile-img">
                        <img src="images/mobile-app.png" alt="mobile-img">
                    </div>
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mobile-app -->
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

    @endsection
</x-website.web-master>