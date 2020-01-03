<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="{{route('admin.dashboard')}}" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Ramp</strong><strong>esna</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">R</strong><strong></strong></div></a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">
                <div class="list-inline-item logout">
                    <form method="POST" action="{{route('logout')}}">@csrf
                        <button type="submit" class="btn btn-link" style="text-decoration: none; color: white;">Çıkış
                            Yap <i class="icon-logout"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
