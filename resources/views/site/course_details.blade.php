@extends('site.layouts.app-main')
<style>
    span.badge {
        padding: 15px;
        font-size: 13px;
        width: 100% !important;
        display: block;
    }
</style>
@section('content')
    <main id="main">
        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2> تفاصيل الدورة </h2>
                    <ol>
                        <li><a href="{{route('index')}}"> الصفحة الرئيسية </a></li>
                        <li><a href="{{route('courses')}}"> مواعيد ومحتوى الدورات </a></li>
                        <li> تفاصيل الدورة</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Our Portfolio Section -->
        <!-- ======= Portfolio Details Section ======= -->
        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-details-container justify-content-center text-center">
                    <img src="{{asset($course->course_pic)}}" class="img-fluid" alt="">
                </div>
                <div class="portfolio-description">
                    <h2>
                        {{$course->course_name}}
                    </h2>
                    <p class="card-text">
                        - رسوم الدورة
                        <span class="text-danger"
                              style="font-weight: bold">{{$course->course_price}}</span>
                        تشمل :
                    </p>
                    <div class="p-3 m-3" style="font-family: 'Cairo';white-space: pre-line; color: #000;
                    line-height: 2.4;border-radius: 5px; box-shadow: 1px 1px 8px #555; font-size: 14px;
                     overflow: hidden; background: #fafafa;"
                    >{{$course->course_description}}</div>
                    <div class="data mt-2 mb-2">
                                            <span style="color: orangered;font-size: 16px;">
                                                - موعد الدورة :
                                                {{$course->date}}
                                            </span>
                        <br>
                        <br>
                        @if($course->completed == "yes")
                            <span class="badge badge-danger badge-sm">
                                                    اكتمل العدد
                                                </span>
                        @else
                            <span class="badge badge-success badge-sm">
                                                     عدد المقاعد المتبقية :
                                                    {{$course->seats}}
                                                </span>
                        @endif

                        <br>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
@endsection
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script>

</script>
