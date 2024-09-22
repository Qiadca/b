<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Panel</title>

    @include('admin.includes.styles')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        @php
        $url = Request::path();
        $conName = explode('/',$url);
        if(!isset($conName[3]))
        {
            $conName[3] = '';
        }
        if(!isset($conName[2]))
        {
            $conName[2] = '';
        }
        @endphp

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
            <div class="sidebar-brand-text mx-3">Admin Panel</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Dashboard -->
        <li class="nav-item @if($conName[1] == 'dashboard') active @endif">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>Panel</span>

            </a>
        </li>

        @php $arr_one = array(); @endphp
        @if(session('role_id')!=1)
            @php
                $row = array();
                $access_data = DB::table('role_permissions')
        ->join('role_pages', 'role_permissions.role_page_id', 'role_pages.id')
        ->where('role_id', session('role_id'))
        ->get();
            @endphp
            @foreach($access_data as $row)
                @php
                    if($row->access_status == 1):
                    $arr_one[] = $row->page_title;
                    endif;
                @endphp
            @endforeach
        @endif



        <!-- General Settings -->
        @php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
                <i class="fas fa-cog"></i>
                <span>Genel Ayarlar</span>
            </a>
            <div id="collapseSetting" class="collapse @if($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">Logo</a>
                    <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
                    <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">Giriş Arka Planı</a>
                    <a class="collapse-item @if($conName[3] == 'topbar') active @endif" href="{{ route('admin.general_setting.topbar') }}">Top Bar</a>
                    <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">Banner</a>
                    <a class="collapse-item @if($conName[3] == 'footer') active @endif" href="{{ route('admin.general_setting.footer') }}">Footer</a>
                    <a class="collapse-item @if($conName[3] == 'sidebar') active @endif" href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a>
                    <a class="collapse-item @if($conName[3] == 'color') active @endif" href="{{ route('admin.general_setting.color') }}">Renk</a>
                    <a class="collapse-item @if($conName[3] == 'preloader') active @endif" href="{{ route('admin.general_setting.preloader') }}">Ön Yükleyici</a>
                    <a class="collapse-item @if($conName[3] == 'stickyheader') active @endif" href="{{ route('admin.general_setting.stickyheader') }}">Yapışkan Başlık</a>
                    <a class="collapse-item @if($conName[3] == 'googleanalytic') active @endif" href="{{ route('admin.general_setting.googleanalytic') }}">Google Analitik</a>
                    <a class="collapse-item @if($conName[3] == 'googlerecaptcha') active @endif" href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a>
                    <a class="collapse-item @if($conName[3] == 'tawklivechat') active @endif" href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a>
                    <a class="collapse-item @if($conName[3] == 'cookieconsent') active @endif" href="{{ route('admin.general_setting.cookieconsent') }}">Çerez İzni</a>
                    <a class="collapse-item @if($conName[3] == 'socialmedia') active @endif" href="{{ route('admin.general_setting.cookieconsent') }}">Sosyal Medya</a>
                </div>
            </div>
        </li>
        @endif


        <!-- Page Settings -->
        @php if( in_array('Page Settings', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'page') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings" aria-expanded="true" aria-controls="collapsePageSettings">
                <i class="fas fa-paste"></i>
                <span>Sayfa Ayarları</span>
            </a>
            <div id="collapsePageSettings" class="collapse @if($conName[1] == 'page') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if($conName[2] == 'home') active @endif" href="{{ route('admin.page_home.edit') }}">Anasayfa</a>
                    <a class="collapse-item @if($conName[2] == 'about') active @endif" href="{{ route('admin.page_about.edit') }}">Hakkımızda</a>
                    <a class="collapse-item @if($conName[2] == 'service') active @endif" href="{{ route('admin.page_service.edit') }}">Hizmetler</a>
                    <a class="collapse-item @if($conName[2] == 'shop') active @endif" href="{{ route('admin.page_shop.edit') }}">Shop</a>
                    <a class="collapse-item @if($conName[2] == 'blog') active @endif" href="{{ route('admin.page_blog.edit') }}">Blog</a>
                    <a class="collapse-item @if($conName[2] == 'project') active @endif" href="{{ route('admin.page_project.edit') }}">Proje</a>
                    <a class="collapse-item @if($conName[2] == 'faq') active @endif" href="{{ route('admin.page_faq.edit') }}">S.S.S</a>
                    <a class="collapse-item @if($conName[2] == 'team') active @endif" href="{{ route('admin.page_team.edit') }}">Ekip Üyesi</a>
                    <a class="collapse-item @if($conName[2] == 'photo-gallery') active @endif" href="{{ route('admin.page_photo_gallery.edit') }}">Fotoğraf Galerisi</a>
                    <a class="collapse-item @if($conName[2] == 'video-gallery') active @endif" href="{{ route('admin.page_video_gallery.edit') }}">Video Galerisi</a>
                    <a class="collapse-item @if($conName[2] == 'contact') active @endif" href="{{ route('admin.page_contact.edit') }}">İletişim</a>
                    <a class="collapse-item @if($conName[2] == 'career') active @endif" href="{{ route('admin.page_career.edit') }}">Kariyer</a>
                    <a class="collapse-item @if($conName[2] == 'term') active @endif" href="{{ route('admin.page_term.edit') }}">Term</a>
                    <a class="collapse-item @if($conName[2] == 'privacy') active @endif" href="{{ route('admin.page_privacy.edit') }}">Gizlilik</a>
                    <a class="collapse-item @if($conName[2] == 'other') active @endif" href="{{ route('admin.page_other.edit') }}">Diğer</a>
                </div>
            </div>
        </li>
        @endif



        <!-- Admin Users Section -->
        @php if( in_array('Admin User Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'role' || $conName[1] == 'admin-user') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminUser" aria-expanded="true" aria-controls="collapseAdminUser">
                <i class="fas fa-user-secret"></i>
                <span>Admin Kullanıcı Bölümü</span>
            </a>
            <div id="collapseAdminUser" class="collapse @if($conName[1] == 'role' || $conName[1] == 'admin-user') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.role.index') }}">Yetkiler</a>
                    <a class="collapse-item" href="{{ route('admin.role.user') }}">Kullanıcılar</a>
                </div>
            </div>
        </li>
        @endif



        <!-- Footer Columns -->
        @php if( in_array('Footer Columns', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'footer') active @endif">
            <a class="nav-link" href="{{ route('admin.footer.index') }}">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Footer Sütunu</span>
            </a>
        </li>
        @endif




        <!-- Sliders -->
        @php if( in_array('Sliders', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'slider') active @endif">
            <a class="nav-link" href="{{ route('admin.slider.index') }}">
                <i class="fas fa-sliders-h"></i>
                <span>Slaytlar</span>
            </a>
        </li>
        @endif



        <!-- Blog Section -->
        @php if( in_array('Blog Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
                <i class="fas fa-cubes"></i>
                <span>Blog Bölümü</span>
            </a>
            <div id="collapseBlog" class="collapse @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.category.index') }}">Kategoriler</a>
                    <a class="collapse-item" href="{{ route('admin.blog.index') }}">Bloglar</a>
                    <a class="collapse-item" href="{{ route('admin.comment.approved') }}">Onaylanmış Yorumlar</a>
                    <a class="collapse-item" href="{{ route('admin.comment.pending') }}">Bekleyen Yorumlar</a>
                </div>
            </div>
        </li>
        @endif



        <!-- Dynamic Pages -->
        @php if( in_array('Dynamic Pages', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'dynamic-page') active @endif">
            <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
                <i class="fas fa-cube"></i>
                <span>Dinamik Sayfalar</span>
            </a>
        </li>
        @endif

        <!-- Menu Manage -->
        @php if( in_array('Menu Manage', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'menu') active @endif">
            <a class="nav-link" href="{{ route('admin.menu.index') }}">
                <i class="fas fa-bars"></i>
                <span>Menü Yönet</span>
            </a>
        </li>
        @endif

        <!-- Project -->
        @php if( in_array('Project', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'project') active @endif">
            <a class="nav-link" href="{{ route('admin.project.index') }}">
                <i class="fas fa-umbrella"></i>
                <span>Proje</span>
            </a>
        </li>
        @endif

        <!-- Career Section -->
        @php if( in_array('Career Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'job' || $conName[1] == 'job-application') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="true" aria-controls="collapseCareer">
                <i class="fas fa-user-secret"></i>
                <span>Kariyer Bölümü</span>
            </a>
            <div id="collapseCareer" class="collapse @if($conName[1] == 'job' || $conName[1] == 'job-application') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.job.index') }}">İş İlanları</a>
                    <a class="collapse-item" href="{{ route('admin.job.view_application') }}">İş Başvuruları</a>
                </div>
            </div>
        </li>
        @endif


        <!-- Photo Gallery -->
        @php if( in_array('Photo Gallery', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'photo-gallery') active @endif">
            <a class="nav-link" href="{{ route('admin.photo.index') }}">
                <i class="fas fa-camera"></i>
                <span>Fotoğraf Galerisi</span>
            </a>
        </li>
        @endif

        <!-- Video Gallery -->
        @php if( in_array('Video Gallery', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'video-gallery') active @endif">
            <a class="nav-link" href="{{ route('admin.video.index') }}">
                <i class="fas fa-video"></i>
                <span>Video Galerisi</span>
            </a>
        </li>
        @endif

        <!-- Product Section -->
        @php if( in_array('Product Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                <i class="fas fa-shopping-cart"></i>
                <span>Ürün Bölümü</span>
            </a>
            <div id="collapseProduct" class="collapse @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.product.index') }}">Ürün</a>
                    <a class="collapse-item" href="{{ route('admin.shipping.index') }}">Kargo</a>
                    <a class="collapse-item" href="{{ route('admin.coupon.index') }}">Kupon</a>
                </div>
            </div>
        </li>
        @endif

        <!-- Order -->
        @php if( in_array('Order Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'order') active @endif">
            <a class="nav-link" href="{{ route('admin.order.index') }}">
                <i class="fas fa-bookmark"></i>
                <span>Sipariş Bölümü</span>
            </a>
        </li>
        @endif

        <!-- Customer -->
        @php if( in_array('Customer Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'customer') active @endif">
            <a class="nav-link" href="{{ route('admin.customer.index') }}">
                <i class="fas fa-users"></i>
                <span>Müşteri Bölümü</span>
            </a>
        </li>
        @endif

        <!-- Why Choose Us -->
        @php if( in_array('Why Choose Us', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'why-choose') active @endif">
            <a class="nav-link" href="{{ route('admin.why_choose.index') }}">
                <i class="fas fa-arrows-alt"></i>
                <span>Ekipmanlar</span>
            </a>
        </li>
        @endif

        <!-- Services -->
        @php if( in_array('Service', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'service') active @endif">
            <a class="nav-link" href="{{ route('admin.service.index') }}">
                <i class="fas fa-certificate"></i>
                <span>Hizmet</span>
            </a>
        </li>
        @endif

        <!-- Testimonials -->
        @php if( in_array('Testimonial', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'testimonial') active @endif">
            <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
                <i class="fas fa-award"></i>
                <span>Yorum</span>
            </a>
        </li>
        @endif

        <!-- Team Members -->
        @php if( in_array('Team Member', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'team-member') active @endif">
            <a class="nav-link" href="{{ route('admin.team_member.index') }}">
                <i class="fas fa-user-plus"></i>
                <span>Ekip Üyesi</span>
            </a>
        </li>
        @endif

        <!-- FAQ -->
        @php if( in_array('FAQ', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'faq') active @endif">
            <a class="nav-link" href="{{ route('admin.faq.index') }}">
                <i class="fas fa-question-circle"></i>
                <span>S.S.S</span>
            </a>
        </li>
        @endif

        <!-- Email Template -->
        @php if( in_array('Email Template', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'email-template') active @endif">
            <a class="nav-link" href="{{ route('admin.email_template.index') }}">
                <i class="fas fa-envelope"></i>
                <span>E-Posta Şablonu</span>
            </a>
        </li>
        @endif

        <!-- Subscriber -->
        @php if( in_array('Subscriber Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'subscriber') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriber" aria-expanded="true" aria-controls="collapseSubscriber">
                <i class="fas fa-share-alt-square"></i>
                <span>Abone Bölümü</span>
            </a>
            <div id="collapseSubscriber" class="collapse @if($conName[1] == 'subscriber') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.subscriber.index') }}">Tüm Aboneler</a>
                    <a class="collapse-item" href="{{ route('admin.subscriber.send_email') }}">Abonelere E-posta Gönder</a>
                </div>
            </div>
        </li>
        @endif

        <!-- Social Media -->
        @php if( in_array('Social Media', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'social-media') active @endif">
            <a class="nav-link" href="{{ route('admin.social_media.index') }}">
                <i class="fas fa-basketball-ball"></i>
                <span>Sosyal Medya</span>
            </a>
        </li>
        @endif


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="btn btn-info btn-sm mt-3" href="{{ url('/') }}" target="_blank">
                            Siteyi Ziyaret Et
                        </a>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('name') }}</span>
                            <img class="img-profile rounded-circle" src="{{ asset('public/uploads/'.session('photo')) }}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            @if(session('id') == 1)
                            <a class="dropdown-item" href="{{ route('admin.profile_change') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profili Değiştir
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('admin.password_change') }}">
                                <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400"></i> Şifre Değiştir
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.photo_change') }}">
                                <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i> Fotoğraf Değiştir
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Çıkış Yap
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('admin_content')

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.includes.scripts-footer')

</body>
</html>
