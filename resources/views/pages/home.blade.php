@extends('layouts.app')

@section('title', __('pages.home.meta_title'))
@section('description', __('pages.home.meta_title'))

@section('content')

    <!-- Hero carousel (Owl Carousel, replacing broken Revolution Slider) -->
    <div class="hero-owl-carousel owl-carousel owl-theme">
        <div class="hero-slide hero-align-left" style="background-image:url('{{ asset('assets/images/slides/slider-mainbg-004.jpg') }}');">
            <div class="container">
                <div class="hero-slide-content">
                    <span class="hero-eyebrow ttm-textcolor-skincolor">{{ __('pages.home.slide1.eyebrow') }}</span>
                    <h2 class="hero-title">{{ __('pages.home.slide1.title') }}<br>{{ __('pages.home.slide1.title2') }}</h2>
                    <p class="hero-desc">{{ __('pages.home.slide1.desc') }}</p>
                    <div class="hero-buttons">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.home.slide1.cta1') }}</a>
                        <a class="hero-text-link" href="{{ route('about-us', ['locale' => app()->getLocale()]) }}">{{ __('pages.home.slide1.cta2') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide hero-align-right" style="background-image:url('{{ asset('assets/images/slides/slider-mainbg-003.jpg') }}');">
            <div class="container">
                <div class="hero-slide-content">
                    <span class="hero-eyebrow ttm-textcolor-skincolor">{{ __('pages.home.slide2.eyebrow') }}</span>
                    <h2 class="hero-title">{{ __('pages.home.slide2.title') }}<br>{{ __('pages.home.slide2.title2') }}</h2>
                    <p class="hero-desc">{{ __('pages.home.slide2.desc') }}</p>
                    <div class="hero-buttons">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.home.slide2.cta1') }}</a>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white" href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.home.slide2.cta2') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .hero-owl-carousel { position: relative; }
        .hero-owl-carousel .hero-slide {
            background-size: cover;
            background-position: center center;
            min-height: 640px;
            display: flex;
            align-items: center;
        }
        .hero-owl-carousel .hero-slide .container { display: flex; }
        .hero-slide-content { max-width: 560px; padding: 60px 0; }
        /* slide 1: subject on the right of the photo -> keep copy on the left */
        .hero-owl-carousel .hero-slide.hero-align-left .container { justify-content: flex-start; }
        /* slide 2: subject on the left of the photo -> push copy to the right so it never sits over her face */
        .hero-owl-carousel .hero-slide.hero-align-right .container { justify-content: flex-end; }
        .hero-owl-carousel .hero-slide.hero-align-right .hero-slide-content { text-align: left; }

        .hero-eyebrow {
            display: block;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 14px;
            padding-left: 18px;
            border-left: 4px solid #ff2440;
            margin-bottom: 18px;
        }
        .hero-title { font-weight: 700; color: #05062b; line-height: 1.25; margin: 0 0 20px; }
        .hero-desc { margin-bottom: 30px; font-size: 16px; color: #4a4d5e; }
        .hero-buttons { display: flex; align-items: center; flex-wrap: wrap; gap: 15px 22px; }
        .hero-buttons .ttm-btn { white-space: nowrap; }
        .hero-text-link { font-weight: 700; letter-spacing: .5px; color: #05062b; text-decoration: underline; }
        .hero-text-link:hover { color: #ff2440; }

        /* nav arrows */
        .hero-owl-carousel .owl-nav { position: absolute; top: 50%; left: 0; right: 0; transform: translateY(-50%); display: flex; justify-content: space-between; pointer-events: none; margin: 0 15px; }
        .hero-owl-carousel .owl-nav .owl-prev,
        .hero-owl-carousel .owl-nav .owl-next {
            pointer-events: all;
            width: 46px !important; height: 46px !important;
            display: flex !important; align-items: center; justify-content: center;
            background-color: rgba(5,6,43,.85) !important;
            color: #fff !important;
            font-size: 20px;
            border-radius: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
            transition: background-color .3s ease, opacity .3s ease;
        }
        .hero-owl-carousel .owl-nav .owl-prev:hover,
        .hero-owl-carousel .owl-nav .owl-next:hover { background-color: #ff2440 !important; }
        .hero-owl-carousel .owl-dots { display: none; }

        /* arrows appear only on hover, on devices that actually support hover (desktop) */
        @media (hover: hover) {
            .hero-owl-carousel .owl-nav .owl-prev,
            .hero-owl-carousel .owl-nav .owl-next { opacity: 0; }
            .hero-owl-carousel:hover .owl-nav .owl-prev,
            .hero-owl-carousel:hover .owl-nav .owl-next { opacity: 1; }
        }

        /* entrance animation, replicating Revolution Slider layer timing.
           Content is visible by default (opacity:1) so it never depends on
           carousel JS running for the text to appear; the animation is a
           progressive-enhancement replay that fires only once JS marks the
           slide active. */
        .hero-eyebrow, .hero-title, .hero-desc, .hero-buttons { opacity: 1; }
        .hero-owl-carousel .owl-item:not(.active) .hero-eyebrow,
        .hero-owl-carousel .owl-item:not(.active) .hero-title,
        .hero-owl-carousel .owl-item:not(.active) .hero-desc,
        .hero-owl-carousel .owl-item:not(.active) .hero-buttons {
            opacity: 0;
        }
        .hero-owl-carousel .owl-item.active .hero-eyebrow {
            animation: heroFadeInUp .7s ease-out .15s both;
        }
        .hero-owl-carousel .owl-item.active .hero-title {
            animation: heroFadeInUp .7s ease-out .35s both;
        }
        .hero-owl-carousel .owl-item.active .hero-desc {
            animation: heroFadeInUp .7s ease-out .55s both;
        }
        .hero-owl-carousel .owl-item.active .hero-buttons {
            animation: heroFadeInUp .7s ease-out .75s both;
        }
        @keyframes heroFadeInUp {
            from { opacity: 0; transform: translateY(35px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 767px) {
            /* mobile shows a shorter, centered version: only the title and
               button(s) over the photo - eyebrow and description are dropped. */
            .hero-owl-carousel .hero-slide {
                min-height: 304px;
            }
            .hero-owl-carousel .hero-slide .container {
                display: flex;
                justify-content: center;
                width: 100%;
            }
            .hero-slide-content,
            .hero-owl-carousel .hero-slide.hero-align-right .hero-slide-content {
                width: 100%;
                max-width: 100%;
                min-width: 0;
                flex: 1 1 100%;
                box-sizing: border-box;
                padding: 30px 20px;
                text-align: center;
            }
            .hero-eyebrow, .hero-desc { display: none; }
            .hero-title {
                font-size: clamp(19px, 6vw, 26px);
                margin-bottom: 20px;
                white-space: normal !important;
                overflow-wrap: break-word;
                word-break: break-word;
            }
            /* first line (the "Especialista em..." / "PEDIDO DE" intro) reads
               smaller than the bold second line, matching the reference design */
            .hero-title::first-line { font-size: 18px; font-weight: 600; }
            .hero-buttons { flex-direction: column; justify-content: center; align-items: center; gap: 12px; }
            /* slide 1 only shows its single candidature button on mobile - drop the text link */
            .hero-text-link { display: none; }
            .hero-buttons .ttm-btn {
                padding: 10px 22px !important;
                font-size: 12px !important;
            }
        }
    </style>

    <!--site-main start-->
    <div class="site-main">

        <!-- services-section -->
        <section class="ttm-row services2-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-3 col-sm-2"></div>
                    <div class="col-md-8 col-lg-6 col-sm-8">
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>{{ __('pages.home.services.eyebrow') }}</h5>
                                <h2 class="title">{{ __('pages.home.services.title') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3 col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="services-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/13.jpg') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="ti ti-shield"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}" tabindex="-1">{{ __('pages.home.services.item1_title') }}</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{ __('pages.home.services.item1_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/14.jpg') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="ti ti-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}" tabindex="-1">{{ __('pages.home.services.item2_title') }}</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{ __('pages.home.services.item2_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/15.jpg') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="ti ti-envelope"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}" tabindex="-1">{{ __('pages.home.services.item3_title') }}</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{ __('pages.home.services.item3_desc') }}</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.offers') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-section end -->

        <!-- about-section -->
        <section class="ttm-row about2-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="position-relative pr-15 res-991-pr-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <div class="ttm_single_image-wrapper w100">
                                            <img class="img-fluid" src="{{ asset('assets/images/single-img-five.jpg') }}" title="single-img-five" alt="single-img-five">
                                        </div>
                                        <div class="ttm-fid inside ttm-fid-view-lefticon ttm-highlight-fid-style2">
                                            <div class="ttm-fid-left">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="ti ti-world"></i>
                                                </div>
                                            </div>
                                            <div class="ttm-fid-contents text-left">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="5" data-before="" data-before-style="sup" data-after="+" data-after-style="sub">25</span>
                                                </h4>
                                                <h3 class="ttm-fid-title">{{ __('pages.home.about.years_label') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="pl-15 res-991-pl-0 res-991-mt-30">
                            <div class="section-title pr-60 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h5>{{ __('pages.nav.about') }}</h5>
                                    <h2 class="title">{{ __('pages.home.about.title') }}</h2>
                                </div>
                                <div class="title-desc">{{ __('pages.home.about.desc') }} <u>
                                    <a href="{{ route('about-us', ['locale' => app()->getLocale()]) }}" class="ttm-textcolor-skincolor">{{ __('pages.home.about.read_more') }}</a></u></div>
                            </div>
                            <div class="row no-gutters mt-40 mb-27">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon">
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">{{ __('pages.home.about.point1') }}</span></li>
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">{{ __('pages.home.about.point2') }}</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon">
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">{{ __('pages.home.about.point3') }}</span></li>
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">{{ __('pages.home.about.point4') }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="separator">
                                <div class="sep-line dashed"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!--strategy-section-->
        <section class="ttm-row strategy-section bg-layer bg-layer-equal-height break-1199-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="col-bg-img-three ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-left-span ttm-bgcolor-darkgrey spacing-3">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="section-title pr-60 res-991-pr-0 clearfix">
                                    <div class="title-header mb-50">
                                        <h2 class="title">{{ __('pages.home.strategy.title') }}</h2>
                                        <h5>{{ __('pages.home.strategy.eyebrow') }}</h5>
                                        <p>{{ __('pages.home.strategy.desc') }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="featured-icon-box style9 mb-30">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-marketing"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><h5>{{ __('pages.home.strategy.item1_title') }}</h5></div>
                                                <div class="featured-desc"><p>{{ __('pages.home.strategy.item1_desc') }}</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="featured-icon-box style9 mb-30">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-viral-marketing"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><h5>{{ __('pages.home.strategy.item2_title') }}</h5></div>
                                                <div class="featured-desc"><p>{{ __('pages.home.strategy.item2_desc') }}</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="featured-icon-box style9 mb-30">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-talk-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><h5>{{ __('pages.home.strategy.item3_title') }}</h5></div>
                                                <div class="featured-desc"><p>{{ __('pages.home.strategy.item3_desc') }}</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="featured-icon-box style9 mb-30">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-business-and-finance-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title"><h5>{{ __('pages.home.strategy.item4_title') }}</h5></div>
                                                <div class="featured-desc"><p>{{ __('pages.home.strategy.item4_desc') }}</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-right-span spacing-4">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--strategy-section end-->

        <!-- process-section -->
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img3 process-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-1"></div>
                    <div class="col-md-6 col-sm-10">
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>{{ __('pages.home.process.eyebrow') }}</h5>
                                <h2 class="title">{{ __('pages.home.process.title') }}</h2> {{ __('pages.home.process.subtitle') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row ttm-processbox-wrapper">
                            <div class="col-lg-4">
                                <div class="ttm-processbox">
                                    <div class="ttm-box-image">
                                        <div class="process-num"><span class="number">01</span></div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title"><h5>{{ __('pages.home.process.step1_title') }}</h5></div>
                                        <div class="ttm-box-description">{{ __('pages.home.process.step1_desc') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ttm-processbox mt-50 res-991-mb-50">
                                    <div class="ttm-box-image">
                                        <div class="process-num"><span class="number">02</span></div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title"><h5>{{ __('pages.home.process.step2_title') }}</h5></div>
                                        <div class="ttm-box-description">{{ __('pages.home.process.step2_desc') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ttm-processbox">
                                    <div class="ttm-box-image">
                                        <div class="process-num"><span class="number">03</span></div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title"><h5>{{ __('pages.home.process.step3_title') }}</h5></div>
                                        <div class="ttm-box-description">{{ __('pages.home.process.step3_desc') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section end -->

        <!-- client-section -->
        <section class="ttm-row team-work-section bg-img4 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-3 col-sm-1"></div>
                    <div class="col-md-8 col-lg-6 col-sm-10">
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header mb-60">
                                <h5>{{ __('pages.home.stats.eyebrow') }}</h5>
                                <h2 class="title">{{ __('pages.home.stats.title') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3 col-sm-1"></div>
                </div>
                <div class="row no-gutters mt-23 ttm-fid-view-topicon-row ttm-bgcolor-white">
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-light-bulb"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="273" data-interval="20" data-before="" data-before-style="sup" data-after="" data-after-style="sub">273</span></h4>
                                <h3 class="ttm-fid-title"><span>{{ __('pages.home.stats.stat1') }}</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-world"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="145" data-interval="20" data-before="" data-before-style="sup" data-after="" data-after-style="sub">145</span></h4>
                                <h3 class="ttm-fid-title"><span>{{ __('pages.home.stats.stat2') }}</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-pencil-alt"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="8910" data-interval="20" data-before="" data-before-style="sup" data-after="" data-after-style="sub">8910</span></h4>
                                <h3 class="ttm-fid-title"><span>{{ __('pages.home.stats.stat3') }}</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-user"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="5470" data-interval="20" data-before="" data-before-style="sup" data-after="" data-after-style="sub">5470</span></h4>
                                <h3 class="ttm-fid-title"><span>{{ __('pages.home.stats.stat4') }}</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator">
                    <div class="sep-line solid mt-50 mb-25 res-991-mb-0"></div>
                </div>
            </div>
        </section>
        <!-- client-section end-->

        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img5 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>{{ __('pages.home.testimonials.eyebrow') }}</h5>
                                <h2 class="title">{{ __('pages.home.testimonials.title') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slide2 owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                            <div class="testimonials style2 text-center mb-20 mt-15">
                                <div class="testimonial-content">
                                    {{ __('pages.home.testimonials.t1_text') }}
                                    <div class="testimonial-caption"><h6>SOPHIA O.</h6></div>
                                </div>
                            </div>
                            <div class="testimonials style2 text-center mb-20 mt-15">
                                <div class="testimonial-content">
                                    <blockquote>{{ __('pages.home.testimonials.t2_text') }}</blockquote>
                                    <div class="testimonial-caption"><h6>ALICE S.</h6></div>
                                </div>
                            </div>
                            <div class="testimonials style2 text-center mb-20 mt-15">
                                <div class="testimonial-content">
                                    <blockquote>{{ __('pages.home.testimonials.t3_text') }}</blockquote>
                                    <div class="testimonial-caption"><h6>AURELIEN V.</h6></div>
                                </div>
                            </div>
                            <div class="testimonials style2 text-center mb-20 mt-15">
                                <div class="testimonial-content">
                                    <blockquote>{{ __('pages.home.testimonials.t4_text') }}</blockquote>
                                    <div class="testimonial-caption"><h6>NICOLAS R.</h6></div>
                                </div>
                            </div>
                            <div class="testimonials style2 text-center mb-20 mt-15">
                                <div class="testimonial-content">
                                    <blockquote>{{ __('pages.home.testimonials.t5_text') }}</blockquote>
                                    <div class="testimonial-caption"><h6>LAURENT P.</h6></div>
                                </div>
                            </div>
                            <div class="testimonials style2 text-center mb-20 mt-15">
                                <div class="testimonial-content">
                                    <blockquote>{{ __('pages.home.testimonials.t6_text') }}</blockquote>
                                    <div class="testimonial-caption"><h6>MALLORY P.</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row row-title2-section clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <div class="row-title text-center">
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>{{ __('pages.home.cta.eyebrow') }}</h5>
                                    <h2 class="title">{{ __('pages.home.cta.title') }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mb-20" href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.home.cta.button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

@endsection

@push('scripts')
<script>
    jQuery(document).ready(function ($) {
        $('.hero-owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 700,
            touchDrag: true,
            mouseDrag: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    autoplayTimeout: 9000
                },
                768: {
                    autoplayTimeout: 6000
                }
            }
        });
    });
</script>
@endpush
