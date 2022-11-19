<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> Drops Art </title>
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('site.layouts.common.css_links')
    <style type="text/css" media="print">
        @media print {
            .app-content,.content{
                margin-right: 0 !important;
            }
            body {
                -webkit-print-color-adjust: exact;
                -moz-print-color-adjust: exact;
                print-color-adjust: exact;
                -o-print-color-adjust: exact;
            }
            .no-print {display:none;}
            .printy {display: block !important;}
        }
    </style>
    <style>
        @font-face {
            font-family: 'Cairo';
            src: url("{{asset('fonts/Cairo.ttf')}}");
        }
        label{
            font-size: 13px !important;
        }

        table {
            font-size: 13px !important;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo' !important;
        }
        .dropdown-menu.dropdown-menu-right.show{
            width: 200px !important;
        }
        body, html {
            font-family: 'Cairo' !important;
            font-size: 13px !important;
        }
        .navigation.navigation-main{
            padding-bottom: 50px !important;
        }

        .btn.dropdown-toggle.bs-placeholder,.btn.dropdown-toggle{
            height: 40px !important;
        }
    </style>
</head>
<body dir="rtl" class="text-right">
@include('site.layouts.common.header')
@yield('content')
@include('site.layouts.common.footer')
@include('site.layouts.common.js_links')
</body>
</html>
