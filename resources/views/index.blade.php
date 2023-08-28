@extends('layouts.app')

@section('content')
    <section id="home" class="py-5 bg-center bg-cover vc_row fullheight d-flex align-items-center mb-60"
        data-row-bg="./assets/img/background/banner.jpg">
        <span class="row-bg-loader"></span>
        <div class="container">
            <div class="flex-wrap row d-flex align-items-center">
                <div class="lqd-column col-md-6" data-custom-animations="true"
                    data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"150", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                    <div class="ld-fancy-heading mask-text">
                        <p class="text-white font-size-18" data-split-text="true" data-split-options='{ "type": "words" }'>
                            <span class="ld-fh-txt">
                                <!-- <i class="mb-4 mr-3 fa fa-youtube-play fa-2x"></i> -->
                                <span class="opacity-06">Website Resmi dari</span>
                            </span>
                        </p>
                    </div>
                    <div class="ld-fancy-heading">
                        <h2 class="text-white ltr-sp--015" data-fittext="true"
                            data-fittext-options='{"compressor":0.675,"maxFontSize":"70","minFontSize":"45"}'
                            data-split-text="true" data-split-options='{ "type": "lines" }' data-text-rotator="true">
                            <span class="ld-fh-txt">
                                Desa Seraya
                                <span class="txt-rotate-keywords">
                                    <span class="keyword active">Karangasem</span>
                                    <span class="keyword">Bali</span>
                                </span>
                            </span>
                        </h2>
                    </div>
                    <div class="ld-fancy-heading mask-text">
                        <p class="text-white font-size-21" data-split-text="true" data-split-options='{ "type": "words" }'>
                            <span class="ld-fh-txt">
                                <span class="opacity-06">Desa wisata alam yang kaya Sumber Daya Alam</span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- section video profile --}}
    <section id="hasil-desa" class="vc_row pt-80 pb-120">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-12">
                    <header class="fancy-title" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-32,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                        <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">
                            Profil Desa
                        </h6>
                        <h2 class="mb-4 mt-md-4 pr-md-7">
                            Selamat Datang di Desa Seraya
                        </h2>
                    </header>
                </div>
                {{-- video --}}
                <div class="youtube-container">
                    <iframe data-custom-animations="true" style="width: 100%;" height="515" allowfullscreen
                        src="https://www.youtube.com/embed/JjOO8U_T4L8?modestbranding=1&autohide=1&showinfo=0&controls=0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="hasil-desa" class="vc_row pt-80 pb-120">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-6">
                    <header class="fancy-title" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-32,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                        <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">
                            Sumber Daya Alam
                        </h6>
                        <h2 class="mb-4 mt-md-4 pr-md-7">
                            Pertanian, Perikanan, dan Wisata Alam.
                        </h2>
                        <div class="row">
                            <div class="pt-3 mb-4 lqd-column col-xs-4 col-sm-2">
                                <div class="lqd-h-sep">
                                    <span class="lqd-h-sep-inner"></span>
                                </div>
                            </div>
                            <div class="lqd-column col-sm-10 col-xs-12">
                                <p>
                                    Desa Seraya memiliki hasil sumber daya alam utama berupa jagung. Sementara dalam sektor
                                    perikanan berupa ikan tongkol. Desa seraya juga memiliki wisata alam berupa pantai yang
                                    tersebar di beberapa banjar.
                                </p>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="lqd-column col-lg-5 col-md-6 col-lg-offset-1">
                    <div class="lqd-iconbox-stack" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","startDelay":"400","delay":"100","easing":"easeOutQuint","direction":"forward","initValues":{"scaleX":0.25,"scaleY":0.25,"opacity":0},"animations":{"scaleX":1,"scaleY":1,"opacity":1}}'>
                        <div class="bg-center bg-cover iconbox iconbox-round iconbox-shadow d-inline-flex iconbox-first"
                            style="
      background-image: url(assets/img/background/sda-jagung.jpeg);
    ">
                            <div class="contents">
                                <p class="font-size-14">
                                    <strong>Jagung</strong>
                                </p>
                            </div>
                        </div>

                        <div class="bg-center bg-cover iconbox iconbox-round iconbox-shadow d-inline-flex iconbox-second"
                            style="
      background-image: url(assets/img/background/sda-pantai.jpeg);
    ">
                            <div class="contents">
                                <p class="font-size-14">
                                    <strong>Pantai</strong>
                                </p>
                            </div>
                        </div>

                        <div class="bg-center bg-cover iconbox iconbox-round iconbox-shadow d-inline-flex iconbox-third"
                            style="
      background-image: url(assets/img/background/sda-tongkol.jpeg);
    ">
                            <div class="contents">
                                <p class="font-size-14">
                                    <strong>Ikan Tongkol</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi" class="vc_row pt-60 pb-90">
        <div class="container">
            <div class="flex-wrap row d-flex align-items-center">
                <div class="mb-5 lqd-column col-lg-7 col-md-6">
                    <div class="liquid-img-group-single stretch-to-left" data-shadow-style="4" data-roundness="4"
                        data-inview="true" data-animate-shadow="true" data-reveal="true"
                        data-reveal-options='{"direction":"rl","bgcolor":"rgb(25, 38, 47)"}'>
                        <div class="liquid-img-group-img-container">
                            <div class="liquid-img-container-inner">
                                <figure>
                                    <img src="assets/img/background/lokasi-maps.png" alt="Banner" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pl-5 lqd-column col-lg-5 col-md-5 mb-md-0" data-custom-animations="true"
                    data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":160,"initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                    <header class="fancy-title mb-60">
                        <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">
                            Wilayah Desa
                        </h6>
                        <h2 class="mt-4 mb-4">Luas, Geografis, Pembagian Wilayah,</h2>
                        <p>
                            Secara topografi, Desa Seraya, Kecamatan Karangasem,
                            Kabupaten Karangasem merupakan daerah kering dengan
                            ketinggian 0 s/d 1153 meter di atas permukaan laut, curah
                            hujan relatif rendah
                        </p>
                        <a href="wilayah"
                            class="btn btn-solid bg-dark text-uppercase round btn-bordered border-thin font-size-14 font-weight-semibold">
                            <span>
                                <span class="btn-txt">Lihat Wilayah</span>
                            </span>
                        </a>
                    </header>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="vc_row pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-8 col-md-offset-2">
                    <header class="text-center fancy-title mb-75" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":100,"initValues":{"translateY":80,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                        <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">
                            Kumpulan berita
                        </h6>
                        <h2 class="title h1">Informasi, Pengumuman, Acara</h2>
                        <p class="font-size-20 lh-16">
                            Lihatlah berita-berita terbaru dari Desa Seraya
                        </p>
                    </header>
                </div>
                <div class="lqd-column col-md-12">
                    <div id="list-post" class="row">
                        <!-- <div class="lqd-column col-md-4 col-sm-6 masonry-item">
                       <article class="liquid-lp mb-60">
                          <figure class="liquid-lp-media">
                             <a href="berita.html">
                                <img src="assets/img/background/blog.jpg" alt="Lates Post">
                             </a>
                          </figure>
                          <header class="liquid-lp-header">
                             <h2 class="liquid-lp-title h4"><a href="berita.html">Global resorts network GRN
                                   putting
                                   timeshares to shame</a></h2>
                             <time class="liquid-lp-date text-uppercase size-sm" datetime="2017-09-25">December 19,
                                2017</time>
                          </header>
                          <div class="liquid-lp-excerpt">
                             <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                their Global Housing Crisis competition series.</p>
                          </div>
                       </article>
                    </div>

                    <div class="lqd-column col-md-4 col-sm-6 masonry-item">
                       <article class="liquid-lp mb-60">
                          <figure class="liquid-lp-media">
                             <a href="berita.html">
                                <img src="assets/img/background/blog.jpg" alt="Lates Post">
                             </a>
                          </figure>
                          <header class="liquid-lp-header">
                             <h2 class="liquid-lp-title h4"><a href="berita.html">Business meeting 2017 in
                                   London</a></h2>
                             <time class="liquid-lp-date text-uppercase size-sm" datetime="2017-09-25">December 19,
                                2017</time>
                          </header>
                          <div class="liquid-lp-excerpt">
                             <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                their Global Housing Crisis competition series.</p>
                          </div>
                       </article>
                    </div>

                    <div class="lqd-column col-md-4 col-sm-6 masonry-item">
                       <article class="liquid-lp mb-60">
                          <figure class="liquid-lp-media">
                             <a href="berita.html">
                                <img src="assets/img/background/blog.jpg" alt="Lates Post">
                             </a>
                          </figure>
                          <header class="liquid-lp-header">
                             <h2 class="liquid-lp-title h4"><a href="berita.html">Free beauty samples: What
                                   they are and how
                                   to find them</a></h2>
                             <time class="liquid-lp-date text-uppercase size-sm" datetime="2017-09-25">December 19,
                                2017</time>
                          </header>
                          <div class="liquid-lp-excerpt">
                             <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                their Global Housing Crisis competition series.</p>
                          </div>
                       </article>
                    </div>

                    <div class="lqd-column col-md-4 col-sm-6 masonry-item">
                       <article class="liquid-lp mb-60">
                          <figure class="liquid-lp-media">
                             <a href="berita.html">
                                <img src="assets/img/background/blog.jpg" alt="Lates Post">
                             </a>
                          </figure>
                          <header class="liquid-lp-header">
                             <h2 class="liquid-lp-title h4"><a href="berita.html">Helen Keller: A teller and a
                                   seller</a></h2>
                             <time class="liquid-lp-date text-uppercase size-sm" datetime="2017-09-25">December 19,
                                2017</time>
                          </header>
                          <div class="liquid-lp-excerpt">
                             <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                their Global Housing Crisis competition series.</p>
                          </div>
                       </article>
                    </div>

                    <div class="lqd-column col-md-4 col-sm-6 masonry-item">
                       <article class="liquid-lp mb-60">
                          <figure class="liquid-lp-media">
                             <a href="berita.html">
                                <img src="assets/img/background/blog.jpg" alt="Lates Post">
                             </a>
                          </figure>
                          <header class="liquid-lp-header">
                             <h2 class="liquid-lp-title h4"><a href="berita.html">Global resorts network GRN
                                   putting
                                   timeshares to shame</a></h2>
                             <time class="liquid-lp-date text-uppercase size-sm" datetime="2017-09-25">December 19,
                                2017</time>
                          </header>
                          <div class="liquid-lp-excerpt">
                             <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                their Global Housing Crisis competition series.</p>
                          </div>
                       </article>
                    </div>

                    <div class="lqd-column col-md-4 col-sm-6 masonry-item">
                       <article class="liquid-lp mb-60">
                          <figure class="liquid-lp-media">
                             <a href="berita.html">
                                <img src="assets/img/background/blog.jpg" alt="Lates Post">
                             </a>
                          </figure>
                          <header class="liquid-lp-header">
                             <h2 class="liquid-lp-title h4"><a href="berita.html">Business meeting 2017 in
                                   London</a></h2>
                             <time class="liquid-lp-date text-uppercase size-sm">December 19,
                                2017</time>
                          </header>
                          <div class="liquid-lp-excerpt">
                             <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                their Global Housing Crisis competition series.</p>
                          </div>
                       </article>
                    </div> -->
                    </div>
                </div>

                <div class="text-center lqd-column col-md-10 col-md-offset-1" data-custom-animations="true"
                    data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":100,"initValues":{"translateY":80,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                    <a href="list-berita.html"
                        class="btn btn-solid bg-dark text-uppercase round btn-bordered border-thin font-size-14 font-weight-semibold">
                        <span>
                            <span class="btn-txt">Lihat Semua Berita</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="vc_row pt-90 pb-90"
        style="background-image: url(assets/img/background/bg.jpg);background-size: cover;" data-parallax="true"
        data-parallax-options='{"parallaxBG": true}' data-custom-animations="true"
        data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-column","duration":"1200","delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":44,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-8 col-md-offset-2">
                    <header class="text-center fancy-title">
                        <h2 class="mb-1 text-white">
                            Ada Pertanyaan, Keluhan, atau Saran?
                        </h2>
                        <p class="text-white font-size-20">
                            Pesan Anda akan dikirimkan melalui Aplikasi WhatsApp ke
                            pengurus Desa Seraya. Yuk jangan ragu untuk diskusi dengan
                            kami!
                        </p>
                    </header>
                </div>
                <div class="text-center lqd-column col-md-8 col-md-offset-2">
                    <div
                        class="ld-sf ld-sf--input-solid ld-sf--button-solid ld-sf--size-md ld-sf--round ld-sf--border-thin ld-sf--button-show ld-sf--button-inline">
                        <form id="ld_subscribe_form-5" class="ld_sf_form" target="_blank"
                            action="https://api.whatsapp.com/send" name="mc-embedded-subscribe-form" method="post">
                            <p class="pr-2 ld_sf_paragraph">
                                <input class="pl-4 ld_sf_text bg-gray" type="text" id="mce-EMAIL" name="text"
                                    placeholder="Tuliskan pesanmu disini" />
                                <input type="hidden" name="phone" type="text" value="+6282236706668" />
                            </p>
                            <button type="submit" class="px-4 text-white ld_sf_submit bg-dark">
                                <span class="submit-text">Kirim Pesan</span>
                                <span class="ld-sf-spinner">
                                    <span>Mengirim </span>
                                </span>
                            </button>
                        </form>
                        <div class="ld_sf_response"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
