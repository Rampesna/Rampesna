<nav class="navbar navbar-fixed-top navigation" >
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Menü</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{route('home')}}">
                <img width="142" height="42" src="{{asset("$generalSettings->logo")}}" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right menu">
                <li><a href="{{route('home')}}">ANASAYFA</a></li>
{{--                <li><a href="{{route('services')}}">HİZMETLERİM</a></li>--}}
{{--                <li><a href="{{route('portfolio')}}">PORTFOLYOM</a></li>--}}
                <li><a href="{{route('blog.index')}}">BLOG</a></li>
                <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
