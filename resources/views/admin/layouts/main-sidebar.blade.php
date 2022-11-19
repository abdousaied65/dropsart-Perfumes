<style>
    .side-menu__icon {
        font-size: 15px !important;
    }
</style>
<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/admin/' . $page='home') }}"><img
                src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/admin/' . $page='home') }}"><img
                src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <ul class="side-menu">
            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.home')}}">
                    <i class="fa fa-home side-menu__icon"></i>
                    <span class="side-menu__label">لوحة تحكم الادارة</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.courses.index')}}">
                    <i class="fa fa-graduation-cap side-menu__icon"></i>
                    <span class="side-menu__label"> صفحة الدورات  </span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.contacts.index')}}">
                    <i class="fa fa-graduation-cap side-menu__icon"></i>
                    <span class="side-menu__label"> عرض رسائل الزوار </span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.testimonials.index')}}">
                    <i class="fa fa-graduation-cap side-menu__icon"></i>
                    <span class="side-menu__label"> اراء بعض العملاء </span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{route('informations.get')}}">
                    <i class="fa fa-graduation-cap side-menu__icon"></i>
                    <span class="side-menu__label"> تعديل بيانات التواصل </span></a>
            </li>


        </ul>
    </div>
</aside>
<!-- main-sidebar -->
