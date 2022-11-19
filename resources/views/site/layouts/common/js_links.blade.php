<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('site/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('site/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('site/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('site/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('site/vendor/aos/aos.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+96555055322", // WhatsApp number
            call_to_action: "تواصل معنا", // Call to action
            position: "right", // Position may be 'right' or 'left'
            pre_filled_message: "سلام عليكم ، ارغب في الاشتراك بدورة القادمة ", // WhatsApp pre-filled message
        };
        var proto = "https", host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '{{asset('site/js/bundle.js')}}';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
