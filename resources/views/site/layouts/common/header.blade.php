<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ Request::is('/') ? 'header-transparent' : '' }}">
    <div class="container">
        <div class="logo float-left">
            <h1 class="text-light">
                <a href="{{route('index')}}">
                    Drops Art
                </a>
            </h1>
        </div>
        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('index')}}">الصفحة الرئيسية</a></li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{route('about')}}"> عن المدرب و الشركة </a></li>
                <li class="{{ Request::is('courses') ? 'active' : '' }}"><a href="{{route('courses')}}">مواعيد ومحتوى الدورات</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">اتصل بنا </a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
