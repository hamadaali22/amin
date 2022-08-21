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
                                    <h2 class="sec__title font-size-30 text-white">coupon_name</h2>
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
                                    <label class="label-text">coupon_name</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="coupon_name" placeholder="coupon_name">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">coupon_code</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="coupon_code" placeholder="coupon_code">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">usage_limit</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="usage_limit" placeholder="usage_limit">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">percentage_discount</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="percentage_discount" placeholder="percentage_discount">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">active_from</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="active_from" placeholder="active_from">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">active_to</label>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="active_to" placeholder="active_to">
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
