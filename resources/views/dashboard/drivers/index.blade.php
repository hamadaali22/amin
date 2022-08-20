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
                                    <h2 class="sec__title font-size-30 text-white">مسافرين</h2>
                                </div>
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end dashboard-bread -->
            <div class="dashboard-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <div>
                                        <h3 class="title">قوائم المسافر</h3>
                                        <p class="font-size-14">إظهار 1 إلى 10 من أصل 20 مُدخل</p>
                                    </div>
                                </div>
                                <div class="form-content">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">رقم</th>
                                                <th scope="col">اسم</th>
                                                <th scope="col">البريد الإلكتروني</th>
                                                <th scope="col">بلد</th>
                                                <th scope="col">مدينة</th>
                                                <th scope="col">الحالة</th>
                                                <th scope="col">عمل</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">أليكس سميث</h3>
                                                    </div>
                                                </td>
                                                <td>alexsmith@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">ديفيد مورنينغ</h3>
                                                    </div>
                                                </td>
                                                <td>davidmartin@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-warning text-white py-1 px-2">غير نشط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">مارك هاردسون</h3>
                                                    </div>
                                                </td>
                                                <td>markhardson@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">فلان الفلاني</h3>
                                                    </div>
                                                </td>
                                                <td>johndoe@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">جوش بورديلا</h3>
                                                    </div>
                                                </td>
                                                <td>joshpurdila@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">أمير حمزة</h3>
                                                    </div>
                                                </td>
                                                <td>amirhamja@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">بيتر مايكل</h3>
                                                    </div>
                                                </td>
                                                <td>petermicahel@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-warning text-white py-1 px-2">Inactive</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">جون سميث</h3>
                                                    </div>
                                                </td>
                                                <td>johnsmith@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">أمير سهيل</h3>
                                                    </div>
                                                </td>
                                                <td>amirsohail@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">جاك باور</h3>
                                                    </div>
                                                </td>
                                                <td>jackbauer@gmail.com</td>
                                                <td>United States</td>
                                                <td>New York</td>
                                                <td><span class="badge badge-success py-1 px-2">نشيط</span></td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="admin-dashboard-traveler-detail.html" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="رأي"><i class="la la-eye"></i></a>
                                                        <a href="#" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="la la-edit"></i></a>
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
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="copy-right padding-top-30px">
                                <p class="copy__desc">
                                    &copy; Copyright Trizen 2020. Made with
                                    <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                                </p>
                            </div><!-- end copy-right -->
                        </div><!-- end col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="footer-social-box text-right padding-top-30px">
                                <ul class="social-profile">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div><!-- end copy-right-content -->
                        </div><!-- end col-lg-5 -->
                    </div><!-- end row -->
                </div><!-- end container-fluid -->
            </div><!-- end dashboard-main-content -->
        </div><!-- end dashboard-content-wrap -->
    </section>
@endsection
