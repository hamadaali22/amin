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
                                    <h2 class="sec__title font-size-30 text-white">sub_insurance_name</h2>
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
                                    <label class="label-text">sub_insurance_name</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="sub_insurance_name" value="{{$subInsuranceType->sub_insurance_name}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">insurance_id</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="insurance_id" value="{{$subInsuranceType->insurance_id}}">
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
