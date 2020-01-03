<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('Admin/img/rampesna.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">{{$user->name . ' ' . $user->surname}}</h1>
            <p>Yönetici</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Sistem</span>
    <ul class="list-unstyled">
        <li class="active"><a href="index.html"> <i class="icon-home"></i>Kontrol Paneli </a></li>
        <li>
            <a href="#blog" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Blog
            </a>
            <ul id="blog" class="collapse list-unstyled ">
                <li><a href="#">Yazı Ekle</a></li>
                <li><a href="#">Tüm Yazılar</a></li>
                <li><a href="#">Kategoriler</a></li>
            </ul>
        </li>
        <li><a href="#"> <i class="icon-grid"></i>Hakkımda </a></li>
        <li><a href="#"> <i class="icon-grid"></i>Gelen Mesajlar </a></li>
        <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>İletişim </a></li>
        <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Genel Ayarlar </a></li>

    </ul>

</nav>
