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
                                    <h2 class="sec__title font-size-30 text-white">orders</h2>
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
                                    <label class="label-text">user_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="user_id" value="{{$order->user_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">sub_insurance_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="sub_insurance_id" value="{{$order->sub_insurance_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">car_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="car_id" value="{{$order->car_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">driver_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="driver_id" value="{{$order->driver_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">company_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="company_id" value="{{$order->company_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">insurance_date_start</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="insurance_date_start" value="{{$order->insurance_date_start}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">insurance_date_end</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="insurance_date_end" value="{{$order->insurance_date_end}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">payment_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="payment_id" value="{{$order->payment_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">iban</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="iban" value="{{$order->iban}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">coupon_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="coupon_id" value="{{$order->coupon_id}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">status</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="status" value="{{$order->status}}">
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
