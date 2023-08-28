@php
    $custom_pages = App\Models\Page::all();
@endphp
<header class="main-header main-header-overlay" data-react-to-megamenu="true" data-sticky-header="true"
    data-sticky-options='{ "stickyTrigger": "first-section" }'>
    <div class="mainbar-wrap">
        <div class="megamenu-hover-bg"></div>
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="px-4 row mainbar-row align-items-lg-stretch">
                    <div class="col">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#home" rel="home">
                                <span class="navbar-brand-inner">
                                    <img width="62" class="logo-dark" src="assets/img/logo/logo-seraya.png"
                                        alt="Logo" />
                                    <img width="62" class="logo-sticky" src="assets/img/logo/logo-seraya.png"
                                        alt="Logo" />
                                    <img width="62" class="mobile-logo-default"
                                        src="assets/img/logo/logo-seraya.png" alt="Logo" />
                                    <img width="80" class="logo-default" src="assets/img/logo/logo-seraya.png"
                                        alt="Logo" />
                                </span>
                            </a>
                            <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile"
                                data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false"
                                data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="bars">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse navbar-collapse" id="main-header-collapse">
                            <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-center"
                                data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'>
                                <li>
                                    <a href="/">
                                        <span class="link-txt">
                                            <span class="txt"> Home </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="">
                                        <span class="link-txt">
                                            <span class="txt"> Profil Desa </span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="visi-misi">Visi & Misi</a>
                                        </li>
                                        <li>
                                            <a href="pemerintahan">Pemerintahan</a>
                                        </li>
                                        <li><a href="sejarah">Sejarah Desa</a></li>
                                        <li><a href="wilayah">Wilayah Desa</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/lembaga">
                                        <span class="link-txt">
                                            <span class="txt"> Lembaga Desa </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="">
                                        <span class="link-txt">
                                            <span class="txt"> Publikasi </span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        {{-- <li><a href="#">Artikel Berita</a></li> --}}
                                        @foreach ($custom_pages as $page)
                                            <li><a href="{{ $page->slug }}">{{ $page->judul }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="/#kontak">
                                        <span class="link-txt">
                                            <span class="txt"> Kontak </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-5 text-right col">
                        <div class="header-module">
                            <ul class="social-icon social-icon-sm">
                                <li>
                                    <a href="https://www.facebook.com" target="_blank"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=+6282236706668&text=Halo,%20Desa%20Seraya."
                                        target="_blank"><i class="fa fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
