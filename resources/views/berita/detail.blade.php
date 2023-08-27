@extends('layouts.app')

@section('content')
    <div class="blog-single-cover scheme-light" data-fullheight="true" data-inview="true"
        data-inview-options='{ "onImagesLoaded": true }' style="background-color: #1f1f1f">
        <figure class="blog-single-media filter-darken" data-responsive-bg="true" data-parallax="true"
            data-parallax-options='{ "parallaxBG": true, "triggerHook": "onLeave" }'
            data-parallax-from='{ "translateY": "0%" }' data-parallax-to='{ "translateY": "20%" }'>
            <img src="./assets/img/background/banner.jpg" alt="Blog single" />
        </figure>
        <div class="blog-single-details">
            <div class="container">
                <div class="row" data-custom-animations="true"
                    data-ca-options='{"triggerHandler":"inview","animationTarget":".animationku", "animateTargetsWhenVisible": true, "duration":1000,"delay":100,"easing":"easeOutQuint","initValues":{"scale":0.75, "opacity": 0},"animations":{"scale":1, "opacity": 1}}'>
                    <div class="lqd-column col-md-3 col-sm-12 mb-50 animationku">
                        <div class="ld-media-item">
                            <figure data-responsive-bg="true">
                                <div class="thumbnail center-cropped"
                                    style="
                background-image: url('https://storage.googleapis.com/svbaksos-ti.appspot.com/puff_395262fa8c.svg');
              ">
                                </div>
                            </figure>
                            <div
                                class="ld-media-item-overlay d-flex flex-column align-items-center text-center justify-content-center">
                                <div class="ld-media-bg"></div>
                                <div class="ld-media-content">
                                    <span class="ld-media-icon">
                                        <span class="ld-media-icon-inner">
                                            <i class="icon-ld-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <a href="assets/img/background/bg.jpg" class="thumbnail liquid-overlay-link fresco"
                                data-fresco-group="media-group-3"></a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <header class="entry-header blog-single-header">
                            <h1 class="mt-0 mb-3 entry-title h2 animationku">
                                <div class="lds-ellipsis">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </h1>
                            <div class="post-meta">
                                <span class="byline">
                                    <span class="block text-uppercase ltr-sp-1">Pembuat:</span>
                                    <span class="author vcard text-white">
                                        <div class="lds-ellipsis">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </span>
                                </span>
                                <span class="posted-on">
                                    <span class="block text-uppercase ltr-sp-1">Pada tanggal:</span>
                                    <time class="entry-date published updated text-white">
                                        <div class="lds-ellipsis">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </time>
                                </span>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <article class="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-single-content entry-content pull-up expanded">
                        <p class="text-center">Loading Content...</p>
                    </div>
                    <nav class="post-nav">
                        <div class="nav-previous invisible">
                            <a id="prev-link" href="#" rel="prev">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444"
                                    stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"
                                    width="24" height="24">
                                    <g>
                                        <line stroke-miterlimit="10" x1="22" y1="12" x2="2"
                                            y2="12" stroke-linejoin="miter" stroke-linecap="butt"></line>
                                        <polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 "
                                            stroke-linejoin="miter"></polyline>
                                    </g>
                                </svg>
                                <span class="screen-reader-text">Previous Article</span>
                                <span aria-hidden="true" class="nav-subtitle">Previous Article</span>
                                <span class="nav-title">Compare prices find the best computer accessory</span>
                            </a>
                        </div>
                        <div class="nav-next invisible">
                            <a id="next-link" href="#" rel="next">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444"
                                    stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"
                                    width="24" height="24">
                                    <g transform="rotate(180 12,12) ">
                                        <line stroke-miterlimit="10" x1="22" y1="12" x2="2"
                                            y2="12" stroke-linejoin="miter" stroke-linecap="butt"></line>
                                        <polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 "
                                            stroke-linejoin="miter"></polyline>
                                    </g>
                                </svg>
                                <span class="screen-reader-text">Next Article</span>
                                <span aria-hidden="true" class="nav-subtitle">Next Article</span>
                                <span class="nav-title">Enhance wellness by doing something different!</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </article>
@endsection
