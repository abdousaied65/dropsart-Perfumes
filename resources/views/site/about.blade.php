@extends('site.layouts.app-main')
<style>

</style>
@section('content')
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2> عن المدرب و الشركة </h2>
                    <ol>
                        <li><a href="{{route('index')}}">الصفحة الرئيسية</a></li>
                        <li> عن المدرب و الشركة</li>
                    </ol>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('site/img/logo.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" style="line-height: 3;">
                        <h3 class="text-center" style="margin-top: 20px; margin-bottom: 50px;">عن المدرب و الشركة</h3>
                        <hr style="width: 30%;"/>
                        <h4>أ. بدر الهاجري</h4>
                        <p class="font-italic">
                            مدرب معتمد في تصميم وصناعة العطور الطبيعية
                            <br>
                            من : مؤسسة العطور الدولية IPF
                            <br>
                        <h4>
                            مؤسس شركة Drops Art للتدريب
                        </h4>
                        المعتمدة كجهة تدريب رسمياً للشرق الاوسط من :
                        <br>
                        <span class="text-danger" style="font-weight: bold">
                            The International Perfume Foundation IPF
                        </span> ‏
                        <br>
                        </p>
                        <a target="_blank" href="https://www.perfumefoundation.org/"
                           class="btn btn-danger btn-md text-center justify-content-center"
                           style="width: 200px; height: 40px; border-radius:50px; padding-top: 10px "> اعرف المزيد عن
                            IPF</a>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= Tetstimonials Section ======= -->
        <section class="testimonials" data-aos="fade-up" dir="ltr">
            <div class="container">

                <div class="section-title">
                    <h2>اراء العملاء في الدورة</h2>
                </div>

                <div class="owl-carousel testimonials-carousel">
                    @if(isset($testimonials) && !$testimonials->isEmpty())
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-item">
                                <h3>
                                    {{$testimonial->testimonial_name}}
                                </h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{$testimonial->testimonial_text}}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        @endforeach
                    @endif

                </div>

            </div>
        </section><!-- End Ttstimonials Section -->

    </main><!-- End #main -->
@endsection
