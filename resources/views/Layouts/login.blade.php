<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rampesna</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('Admin\vendor\bootstrap\css\bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('Admin\vendor\font-awesome\css\font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('Admin\css\font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('Admin\css\style.default.premium.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('Admin\css\custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('Admin\img\favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="container-fluid px-3">
    <div class="row min-vh-100 bg-gray-dark">
        <div class="col-md-5 col-lg-6 col-xl-4 px-lg-5 d-flex align-items-center">
            <div class="w-100 py-5">
                <div class="text-center"><img src="{{asset('Admin\img\brand\brand-1.svg')}}" alt="..." style="max-width: 6rem;" class="img-fluid mb-4">
                    <h1 class="display-4 text-gray-light mb-3">Sign in</h1>
                </div>
                <form action="{{route('login')}}" class="form-validate">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input name="identity" type="text" placeholder="Kullanıcı Adı veya E-posta" autocomplete="off" required data-msg="Lütfen Bu Alanı Doğru Şekilde Doldurun" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col">
                                <label>Password</label>
                            </div>
                            <div class="col-auto"><a href="#" class="form-text small text-muted">Forgot password?</a></div>
                        </div>
                        <input name="password" placeholder="Şifreniz" type="password" required data-msg="Lütfen Şifrenizi Giriniz" class="form-control">
                    </div>
                    <!-- Submit-->
                    <button class="btn btn-lg btn-block btn-primary mb-3">Giriş Yap</button>
                    <!-- Link-->

                </form>
                <p class="text-center text-muted small mt-5">Bu Web Sayfası <a href="http://rampesna.codes" class="external">Rampesna</a> Tarafından Hazırlanmıştır.</p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                                             -->
            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Image-->
            <div style="background-image: url({{asset('Admin/img/photos/victor-ene-1301123-unsplash.jpg')}});" class="bg-cover h-100 mr-n3"></div>
        </div>
    </div>
</div>

<!-- JavaScript files-->
<script src="{{asset('Admin\vendor\jquery\jquery.min.js')}}"></script>
<script src="{{asset('Admin\vendor\popper.js\umd\popper.min.js')}}"> </script>
<script src="{{asset('Admin\vendor\bootstrap\js\bootstrap.min.js')}}"></script>
<script src="{{asset('Admin\vendor\jquery.cookie\jquery.cookie.js')}}"> </script>
<script src="{{asset('Admin\vendor\chart.js\Chart.min.js')}}"></script>
<script src="{{asset('Admin\vendor\jquery-validation\jquery.validate.min.js')}}"></script>
<script src="{{asset('Admin\js\front.js')}}"></script>
</body>
</html>
