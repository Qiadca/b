@php
    $menus = DB::table('menus')->pluck('menu_status', 'menu_name');
    $dynamic_pages = DB::table('dynamic_pages')->get();
@endphp

<!-- Bootstrap 5 CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Custom CSS -->
<style>
    .navbar-area {
        background: none;
        padding: 10px 0;
    }
    .navbar-area::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('path_to_your_background_image.jpg'); /* Change to your image path */
        background-size: cover;
        background-position: center;
        z-index: -1;
        filter: brightness(0.6);
    }
    .navbar-brand img {
        max-height: 80px;
        transition: transform 0.3s;
    }
    .navbar-brand img:hover {
        transform: scale(1.1);
    }
    .navbar-nav .nav-link {
        color: #80c8c4 !important;
        font-weight: 500;
        margin: 0 20px;
        transition: color 0.3s, text-decoration 0.3s;
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        text-align: center;
    }
    .navbar-nav .nav-link i {
        margin-right: 10px;
        transition: transform 0.3s;
    }
    .navbar-nav .nav-link:hover i {
        transform: rotate(15deg);
    }
    .navbar-nav .nav-link:hover {
        color: #f8f9fa !important;
        text-decoration: underline;
    }
    .navbar-toggler {
        border: none;
    }
    .navbar-toggler:focus {
        outline: none;
        box-shadow: none;
    }
</style>

<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav d-block d-md-none">
        <a href="" class="logo">
            <img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
	
        <div class="container">
		
            <nav class="navbar navbar-expand-md navbar-light">
			 <a class="navbar-brand" href="{{ url('/') }}">
                    <img id="logo-mobil" src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="logo">
                </a>
                
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul id="üst_yazi" class="navbar-nav ">

                        @if($menus['Home'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i>Anasayfa</a>
                            </li>
                        @endif
                        @if($menus['About'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('front.about') }}" class="nav-link"><i class="fas fa-info-circle"></i>Hakkımızda</a>
                            </li>
                        @endif
                        @if($menus['Services'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('front.services') }}" class="nav-link"><i class="fas fa-brain"></i>Hizmetler</a>
                            </li>
                        @endif
                        @if($menus['Blog'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('front.blogs') }}" class="nav-link"><i class="fas fa-blog"></i>Blog</a>
                            </li>
                        @endif
                        @if($menus['FAQ'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('front.faq') }}" class="nav-link"><i class="fas fa-question-circle"></i>S.S.S</a>
                            </li>
                        @endif
                        @if($menus['Contact'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('İletişim') }}" class="nav-link"><i class="fas fa-envelope"></i>İletişim</a>
                            </li>
                        @endif
                        @if($menus['Team Members'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('front.team_members') }}" class="nav-link"><i class="fas fa-users"></i>Uzmanlar</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('appointment.store') }}"><i class="fas fa-calendar-check"></i>Randevu Al</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Bootstrap 5 JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
