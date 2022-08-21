@extends('dashboard.dashboard_layout')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="dashboard-bread dashboard-bread-2">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="breadcrumb-content">
                                <div class="section-heading">
                                    <h2 class="sec__title font-size-30 text-white">customs_serial_number</h2>
                                </div>
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div>

            <div class="container-fluid">
                <div class="form-box">
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">customs_serial_number</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="customs_serial_number" placeholder="customs_serial_number">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">customs_form_number</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="customs_form_number" placeholder="customs_form_number">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">car_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="car_id" placeholder="car_id">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">car_plate_code</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="car_plate_code" placeholder="car_plate_code">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">car_plate_number</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="car_plate_number" placeholder="car_plate_number">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">production_year</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="production_year" placeholder="production_year">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">use_purpose</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="use_purpose" placeholder="use_purpose">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">car_owner</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="car_owner" placeholder="car_owner">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">brand_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="brand_id" placeholder="brand_id">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                        </form>
                    </div><!-- end form-content -->
                </div>
            </div>
        </div>
    </section>
@endsection
