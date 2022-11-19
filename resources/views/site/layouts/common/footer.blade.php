<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12 footer-info">
                    <h3>عن Drops Art</h3>
                    <p>
                        شركة Drops Art للتدريب
                        <br>
                        المعتمدة كجهة تدريب رسمياً للشرق الاوسط من
                        <br>
                        ‏The International Perfume Foundation IPF
                        <br>
                    </p>

                </div>
                <div class="col-lg-4 col-xs-12 footer-links">
                    <h4>صفحات هامة</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('index')}}">الرئيسية</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}"> عن المدرب و الشركة</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('courses')}}">مواعيد ومحتوى الدورات</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">تواصل معنا </a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 footer-contact">
                    <h4>تواصل معنا</h4>
                    <p>
                        <strong> بريد الكترونى : </strong> {{$informations->email_link}} <br>
                    </p>
                    <div class="social-links mt-3">
                        <a target="_blank"
                           href="https://api.whatsapp.com/send/?phone={{$informations->whatsapp_number}}&text={{$informations->whatsapp_message}}&app_absent=0"
                           class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                        <a target="_blank" href="mailto:{{$informations->email_link}}" class="gmail"><i
                                class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="{{$informations->instagram_link}}" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright" dir="rtl">
            &copy; حقوق الطبع والنشر <strong><span>Drops Art</span></strong>
            كل الحقوق محفوظة
        </div>
    </div>
</footer><!-- End Footer -->
