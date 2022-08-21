@extends('dashboard.dashboard_layout')
@section('content')
<section class="dashboard-area">
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">الهويات المسجلة</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="container mt-4">
        <div class="dashboard-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <div>
                                        <h3 class="title">قوائم الهويات</h3>
                                        <p class="font-size-14">إظهار 1 إلى 10</p>
                                    </div>
                                </div>
                                <div class="form-content">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">رقم الهوية</th>
                                                <th scope="col">الإسم</th>
                                                <th scope="col">تاريخ الميلاد</th>
                                                <th scope="col">التحكم</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>998566441</td>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">أليكس سميث</h3>
                                                    </div>
                                                </td>
                                                <td>5-22-1995</td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="أظهر"><i class="la la-eye"></i></a>
                                                        <a href="" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end form-box -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->

                    {{--{{ $drivers->links() }}--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-nav" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="border-top mt-5"></div>
                </div><!-- end container-fluid -->
            </div><!-- end dashboard-main-content -->
        </div>
    </div><!-- end dashboard-content-wrap -->
</section>
@endsection