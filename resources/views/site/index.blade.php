@extends('site.layouts.app-main')
<style>

</style>
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <img src="{{asset('site/img/logo.png')}}" style="width: 20%" alt="">
                    <h2 class="animate__animated animate__fadeInDown">اهلا ومرحبا بكم فى <span>Drops Art</span></h2>
                    <p class="animate__animated animate__fadeInUp" style="line-height: 2;">
                        شركة Drops Art للتدريب
                        <br/>
                        المعتمدة كجهة تدريب رسمياً للشرق الاوسط من
                        <br/>
                        ‏The International Perfume Foundation IPF
                        <br/>
                    </p>
                    <a target="_blank" href="https://www.perfumefoundation.org/"
                       class="btn-get-started animate__animated animate__fadeInUp"> اعرف المزيد عن IPF</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Features Section ======= -->
        <section class="services">
            <div class="container">
                <h1 class="text-center"> يحصل المتدرب على </h1>
                <hr style="width: 30%; margin-bottom: 50px;"/>
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="fa fa-certificate"></i></div>
                            <h3 class="title"><a href="">شهادة معتمدة</a></h3>
                            <p class="description">
                                يحصل المتدرب بعد اجتياز الدورة على لقب مصمم عطور طبيعية معتمد وعضوية لمدة سنة من مؤسسة
                                العطور الدولية IPF
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="fa fa-briefcase"></i></div>
                            <h3 class="title"><a href="">حقيبة تدريبية</a></h3>
                            <p class="description">
                                يحصل المتدرب على حقيبة تدريبية قبل الدورة تحتوي على جميع المواد والادوات لتطبيق جميع
                                المهارات في الدورة
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="fa fa-whatsapp"></i></div>
                            <h4 class="title"><a href="">متابعة عبر الواتساب</a></h4>
                            <p class="description">
                                يقوم المدرب بمتابعة وتوجيه المتدرب بعد الدورة عبر الواتساب حتى يتقن جميع المهارات ويوفر
                                عليه الجهد و الوقت
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="fa fa-tasks"></i></div>
                            <h4 class="title"><a href="">برامج خاصة بالمتدربين</a></h4>
                            <p class="description">
                                يحصل المتدرب على برامج وملفات خاصة تسهل عليه حساب جميع المعادلات الحسابية و التكاليف
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Partners Section ======= -->
        <section class="services">
            <div class="container">
                <div class="row mt-3 mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <img style="width: 150px; height: 100px;" src="{{asset('site/img/partner_1.jpg')}}" alt="">
                        <img style="width: 150px; height: 100px;"  src="{{asset('site/img/partner_2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@endsection
