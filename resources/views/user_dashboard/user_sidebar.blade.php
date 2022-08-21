<div class="sidebar-nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="{{asset('images/avatar.jpeg')}}" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">علي توفان</h4>
                    <span class="author__meta">عضو منذ مايو 2017</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            {{request()->is('user_profile/purchased_documents')}}
            <ul class="sidebar-menu list-items">
                <li class="{{ request()->is('user_profile') ? 'page-active' : '' }}"><a href="/user_profile"><i class="la la-dashboard mr-2"></i>لوحة التحكم</a></li>
                <li><a class="" href="/user_profile/purchased_documents"><i class="la la-shopping-cart mr-2 text-color"></i>استرجع وثيقة التأمين</a></li>
                <li class="{{ request()->is('user_profile/purchased_documents') ? 'page-active' : '' }}"><a href="/user_profile/purchased_documents"><i class="la la-user mr-2 text-color-2"></i>الوثائق التي تم شراؤها</a></li>
                <li class="{{ request()->is('user_profile/registered_IDs*') ? 'page-active' : '' }}"><a href="/user_profile/registered_IDs"><i class="la la-credit-card mr-2 text-color-3"></i>الهويات المسجلة</a></li>
                <li class="{{ request()->is('user_profile/registered_cars*') ? 'page-active' : '' }}"><a href="/user_profile/registered_cars"><i class="la la-car mr-2 text-color-4"></i>المركبات المسجلة</a></li>
                <li class="{{ request()->is('user_profile/setting*') ? 'page-active' : '' }}"><a href="/user_profile/setting"><i class="la la-cog mr-2 text-color-5"></i>الإعدادات</a></li>
                <li><a href="index.html"><i class="la la-power-off mr-2 text-color-6"></i>تسجيل خروج</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->