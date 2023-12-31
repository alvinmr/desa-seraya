@include('layouts.inc.header')

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern"
    data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
    <div id="wrap">
        <div class="titlebar titlebar-sm scheme-light text-center" data-parallax="true"
            data-parallax-options='{ "parallaxBG": true }'
            style="background-image: url(assets/img/background/banner.jpg)">
            @include('layouts.inc.navbar')
            <div class="titlebar-inner">
                <div class="container titlebar-container">
                    <div class="row titlebar-container">
                        <div class="titlebar-col col-md-12">
                            <h1 data-fittext="true" data-fittext-options='{ "maxFontSize": 80, "minFontSize": 32 }'>
                                @yield('heading')
                            </h1>
                            <a class="titlebar-scroll-link" href="#content" data-localscroll="true"><i
                                    class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main id="content" style="padding: 30px" class="content">
            @yield('content')
        </main>

        <footer class="main-footer bg-dark pt-70">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="lqd-column col-md-4 col-sm-6">
                            <figure class="mb-30">
                                <img width="64" src="assets/img/logo/logo-seraya.png" alt="Logo" />
                            </figure>
                            <p>
                                Desa Seraya adalah sebuah desa yang dapat memanjakan mata para
                                pengunjungnya karena memiliki pemandangan indah serta kaya
                                akan sumber daya alam.
                            </p>
                        </div>
                        <div class="lqd-column col-md-3 col-sm-6 col-md-offset-2">
                            <h3 class="widget-title text-white">Navigasi</h3>
                            <ul class="lqd-custom-menu reset-ul text-white">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#hasil-desa">Profil Desa</a></li>
                                <li><a href="#lokasi">Lembaga Desa</a></li>
                                <li><a href="list-berita.html">Publikasi</a></li>
                                <li><a href="#kontak">Kontak</a></li>
                            </ul>
                        </div>
                        <div class="lqd-column col-md-3 col-sm-6">
                            <h3 class="widget-title text-white">Kontak</h3>
                            <p>
                                <!-- <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                           data-cfemail="e28a878e8e8da2839487cc818d8f">[email&#160;protected]</a>
                        <br>
                        <br> -->
                                Desa Seraya, Kecamatan Karangasem, Karangasem, Bali, Indonesia
                                <br />
                                <br />
                                +62 813 3818 8144
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bt-fade-white-015 pt-35 pb-35 mt-50">
                <div class="container">
                    <div class="row">
                        <div class="lqd-column col-md-6">
                            <ul class="lqd-custom-menu reset-ul inline-nav">
                                <li><a href="index.html">Desa Seraya</a></li>
                                <li><a href="list-berita.html">Semua Berita</a></li>
                            </ul>
                        </div>
                        <div class="lqd-column col-md-6 text-md-right">
                            <p class="my-0" style="font-size: 15px">
                                Copyright 2023 <span class="text-white">Desa Seraya</span>.
                                All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>

        <a id="to-top" class="scroll-to-top btn" aria-label="Scroll to top"></a>
    </div>

    @include('layouts.inc.footer')
