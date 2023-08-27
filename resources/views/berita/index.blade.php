@extends('layouts.head-title')

@section('heading', 'List Berita Desa Seraya')

@section('content')
    <section class="vc_row">
        <div class="container">
            <div class="row">
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
                               <time class="liquid-lp-date text-uppercase size-sm" datetime="2017-09-25">December 19,
                                  2017</time>
                            </header>
                            <div class="liquid-lp-excerpt">
                               <p>Bee Breeders announced the winners of the Modern Collective Living, one part of
                                  their Global Housing Crisis competition series.</p>
                            </div>
                         </article>
                      </div> -->
                    </div>

                    <div id="load-data">
                        <span class="ld-sf-spinner">
                            <span>Mengirim </span>
                        </span>
                    </div>

                    <div id="moreBerita" class="lqd-column col-md-10 col-md-offset-1 text-center"
                        data-custom-animations="true" style="cursor: pointer"
                        data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":100,"initValues":{"translateY":80,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                        <span
                            class="btn btn-solid bg-dark text-uppercase round btn-bordered border-thin font-size-14 font-weight-semibold">
                            <span>
                                <img style="display: inline" id="haLoading" width="40" height="40"
                                    src="assets/img/spinners/spinner-4-light.svg" alt="" />
                                <span class="btn-txt">Lihat lebih banyak...</span>
                            </span>
                        </span>
                    </div>
                    <!-- <div class="page-nav">
                      <nav aria-label="Page navigation">
                         <ul class="pagination">
                            <li>
                               <span aria-current="page" class="page-numbers current">1</span>
                            </li>
                            <li>
                               <a class="page-numbers" href="#">2</a>
                            </li>
                            <li>
                               <a class="next page-numbers" href="#">
                                  <span aria-hidden="true">
                                     <i class="fa fa-angle-right"></i>
                                  </span>
                               </a>
                            </li>
                         </ul>
                      </nav>
                   </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection
