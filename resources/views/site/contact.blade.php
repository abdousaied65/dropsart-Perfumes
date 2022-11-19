@extends('site.layouts.app-main')
<style>

</style>
@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2> اتصل بنا </h2>
                    <ol>
                        <li><a href="{{route('index')}}"> الصفحة الرئيسية </a></li>
                        <li> اتصل بنا</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Contact Section -->
        @if (session('success'))
            <div class="alert alert-success text-center" style="border-radius: 0;">
                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                {{ session('success') }}
            </div>
        @endif
        <!-- ======= Contact Section ======= -->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-envelope"></i>
                                    <h3>راسلنا عبر البريد الالكترونى</h3>
                                    <a target="_blank" href="mailto:{{$informations->email_link}}">
                                        {{$informations->email_link}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>تواصل معنا عبر الواتساب</h3>
                                    <p dir="ltr">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone={{$informations->whatsapp_number}}&text={{$informations->whatsapp_message}}&app_absent=0">
                                            اضغط هنا لتوجيهك الى الواتساب
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{route('send.message')}}" method="post" class="php-email-form">
                            @csrf
                            @method('POST')
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input required type="text" name="name" class="form-control" id="name"
                                           placeholder="اكتب اسمك هنا"/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input dir="ltr" required type="number" class="form-control" name="phone" id="phone"
                                           placeholder="اكتب رقم الهاتف "/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input required type="text" class="form-control" name="subject" id="subject"
                                       placeholder="الموضوع"/>
                            </div>
                            <div class="form-group">
                                <textarea required class="form-control" name="message" rows="5"
                                          placeholder="نص الرسالة"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit"> ارسال رسالة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
