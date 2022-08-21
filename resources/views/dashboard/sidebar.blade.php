
<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="{{asset('images/team9.jpg')}}" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">وكالة سفر روييل</h4>
                    <span class="author__meta">مرحبًا بك في لوحة الإدارة</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="{{ request()->is('insurance_types*') ? 'page-active' : '' }}"><a href="{{ route('insurance_types.index') }}"><i class="la la-star mr-2 text-color-5"></i>insurance_types</a></li>
                <li class="{{ request()->is('sub_insurance_types*') ? 'page-active' : '' }}"><a href="{{ route('sub_insurance_types.index') }}"><i class="la la-star mr-2 text-color-5"></i>sub_insurance_types</a></li>
                <li class="{{ request()->is('drivers*') ? 'page-active' : '' }}"><a href="{{ route('drivers.index') }}"><i class="la la-star mr-2 text-color-5"></i>drivers</a></li>
                <li class="{{ request()->is('cars*') ? 'page-active' : '' }}"><a href="{{ route('cars.index') }}"><i class="la la-star mr-2 text-color-5"></i>cars</a></li>
                <li class="{{ request()->is('car_brands*') ? 'page-active' : '' }}"><a href="{{ route('car_brands.index') }}"><i class="la la-star mr-2 text-color-5"></i>car_brands</a></li>
                <li class="{{ request()->is('companies*') ? 'page-active' : '' }}"><a href="{{ route('companies.index') }}"><i class="la la-star mr-2 text-color-5"></i>companies</a></li>
                <li class="{{ request()->is('coupons*') ? 'page-active' : '' }}"><a href="{{ route('coupons.index') }}"><i class="la la-star mr-2 text-color-5"></i>coupons</a></li>
                <li class="{{ request()->is('orders*') ? 'page-active' : '' }}"><a href="{{ route('orders.index') }}"><i class="la la-star mr-2 text-color-5"></i>orders</a></li>
                <li class="{{ request()->is('users*') ? 'page-active' : '' }}"><a href="{{ route('users.index') }}"><i class="la la-star mr-2 text-color-5"></i>users</a></li>
                <li><a href="admin-dashboard-settings.html"><i class="la la-cog mr-2 text-color-10"></i>الإعدادات</a></li>
                <li><a href="index.html"><i class="la la-power-off mr-2 text-color-11"></i>تسجيل خروج</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->

