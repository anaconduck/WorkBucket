<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ ('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{url('/aboutus')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                    About Us
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{ ('myprofile') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                    My Profile
                </a>
                <a class="nav-link" href="{{ url('/advice') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                    Business Advice
                </a>
                <a class="nav-link" href="{{url('/discussion')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-comment-dots"></i></div>
                    Discussion
                </a>
                <a class="nav-link" href="{{ ('contact') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                    Contact
                </a>
            </div>
        </div>
    </nav>
</div>