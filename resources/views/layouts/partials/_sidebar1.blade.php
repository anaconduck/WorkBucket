<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
            <center>
            <img src="/profil_asset/2.png" class="profile_image" alt="" width="155" height="140">
            <h4> {{Auth::user() -> name}}</h4>
            <h7>Electrical Engineer</h7>
            <img src="/profil_asset/5.png" class="profile_image" alt="" width="220" height="65">
            </center>
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ ('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{url('/aboutus')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                    About Us
                </a>
            </div>
        </div>
    </nav>
</div>