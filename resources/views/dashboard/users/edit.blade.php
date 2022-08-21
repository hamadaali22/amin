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
                                    <h2 class="sec__title font-size-30 text-white">تعديل سائق</h2>
                                </div>
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div>

            <div class="container-fluid">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>قم بتبئة معلومات السائق هنا</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">firstname</label>
                                    <div class="form-group">
                                        {{--<span class="la la-briefcase form-icon"></span>--}}
                                        <input class="form-control" type="number" name="identification_number" value="{{$driver->identification_number}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">name</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" value="{{$driver->name}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">birthdate</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="birthdate" value="{{$driver->birthdate}}">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->

                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">driving_percentage</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="driving_percentage" value="{{$driver->driving_percentage}}">
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
