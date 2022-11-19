@extends('site.layouts.app-main')
<style>
span.badge{
    padding: 15px;
    font-size: 13px;
    width: 100% !important;
    display: block;
}
</style>
@section('content')
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2> مواعيد ومحتوى الدورات </h2>
                    <ol>
                        <li><a href="{{route('index')}}"> الصفحة الرئيسية </a></li>
                        <li> مواعيد ومحتوى الدورات</li>
                    </ol>
                </div>
            </div>
        </section><!-- End About Us Section -->
        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    @if(isset($courses) && !$courses->isEmpty())
                        @foreach($courses as $course)
                            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                                <div class="card">
                                    <div class="card-img">
                                        <img style="height: 300px; width: 100% !important;"
                                             src="{{asset($course->course_pic)}}" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="{{route('course_details',$course->id)}}">
                                                {{$course->course_name}}
                                            </a></h5>
                                        <p class="card-text">
                                            - رسوم الدورة
                                            <span class="text-danger"
                                                  style="font-weight: bold">{{$course->course_price}}</span>
                                            تشمل :
                                            <br>
                                            <br>
                                            <textarea disabled rows="6"
                                                      style="line-height: 2; width: 100%;resize: none; "
                                                      class="form-control">{{mb_substr($course->course_description,0,150)}} ...... </textarea>
                                        </p>
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
                                        <div class="read-more"><a href="{{route('course_details',$course->id)}}"><i
                                                    class="icofont-arrow-right"></i> اقرأ المزيد </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </section><!-- End Service Details Section -->
    </main>
@endsection
