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
                                    <h2 class="sec__title font-size-30 text-white">insurance_types</h2>
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
                                    <label class="label-text">insurance_type</label>
                                    <div class="form-group">
                                        {{--<span class="la la-briefcase form-icon"></span>--}}
                                        <input class="form-control" type="text" name="insurance_type" value="{{$insuranceType->insurance_type}}">
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
