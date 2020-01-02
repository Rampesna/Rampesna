<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/themefisher-fonts/themefisher-fonts.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <style>
        .my-services:hover{
            color:#000;
        }
    </style>

    @yield('title')
    @yield('description')
    @yield('keywords')
    @yield('custom-header')

    <style>
        #map_canvas {
            height: 100%;
        }
    </style>
    <script src="{{asset('plugins/modernizr.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Şuanda <strong>çok eski</strong> bir tarayıcı kullanıyorsunuz. Daha iyi bir deneyim için lütfen güncel bir tarayıcı kullanın.</p>
<![endif]-->

@yield('main')

<script src="{{asset('plugins/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('plugins/parallax.min.js')}}"></script>
<script src="{{asset('plugins/jquery.vide.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/all.js')}}" defer></script>

@yield('custom-footer')
</body>

</html>
