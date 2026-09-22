@extends('layouts.app')

@section('title', __('pages.about.meta_title'))
@section('description', __('pages.about.meta_title'))

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.about.page_title') }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.about.breadcrumb_home') }}</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.about.page_title') }}</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row about-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="position-relative pr-15 res-991-pr-0">
                            <div class="row mb-30">
                                <div class="col-sm-7">
                                    <!-- ttm_single_image-wrapper -->
                                    <div class="ttm_single_image-wrapper ttm-991-center">
                                        <img class="img-fluid" src="{{ asset('assets/images/single-img-three.jpg') }}" title="single-img-three" alt="single-img-three">
                                    </div><!-- ttm_single_image-wrapper end -->
                                </div>
                                <div class="col-sm-5">
                                    <!-- ttm_single_image-wrapper -->
                                    <div class="ttm_single_image-wrapper ttm-991-center res-575-mt-30">
                                        <img class="img-fluid" src="{{ asset('assets/images/single-img-four.jpg') }}" title="single-img-four" alt="single-img-four">
                                    </div><!-- ttm_single_image-wrapper end -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <!-- ttm_single_image-wrapper -->
                                        <div class="ttm_single_image-wrapper w100">
                                            <img class="img-fluid" src="{{ asset('assets/images/single-img-five.jpg') }}" title="single-img-five" alt="single-img-five">
                                        </div><!-- ttm_single_image-wrapper end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="pl-15 res-991-pl-0 res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title pr-60 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{ __('pages.about.intro_title') }}</h2> <br>
                                    <h4>{{ __('pages.about.intro_subtitle') }}</h4>
                                </div>
                                <div class="title-desc">
                                    <p>{{ __('pages.about.intro_p1') }}</p>
                                    <p>{{ __('pages.about.intro_p2') }}</p>
                                    <u><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}" class="ttm-textcolor-skincolor">{{ __('pages.about.learn_more') }}</a></u>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-top-section clearfix" style="padding-bottom:100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="pl-45 res-991-pl-0 res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{ __('pages.about.history_title') }}</h2>
                                </div>
                                <div class="title-desc">{{ __('pages.about.history_text') }}</div>
                            </div><!-- section title end -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="position-relative">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper ttm-991-center res-991-mt-30">
                                <img class="img-fluid" src="{{ asset('assets/images/single-img-ten.jpg') }}" title="single-img-ten" alt="single-img-ten">
                            </div><!-- ttm_single_image-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- process-section -->
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img3 process-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-1"></div>
                    <div class="col-md-6 col-sm-10">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>{{ __('pages.about.how_it_works_eyebrow') }}</h5>
                                <h2 class="title">{{ __('pages.about.how_it_works_title') }}</h2> {{ __('pages.about.how_it_works_subtitle') }}
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-3 col-sm-1"></div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row ttm-processbox-wrapper">
                            <div class="col-lg-4">
                                <div class="ttm-processbox">
                                    <div class="ttm-box-image">
                                        <div class="process-num"><span class="number">01</span></div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title"><h5>{{ __('pages.about.step1_title') }}</h5></div>
                                        <div class="ttm-box-description">{{ __('pages.about.step1_desc') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ttm-processbox mt-50 res-991-mb-50">
                                    <div class="ttm-box-image">
                                        <div class="process-num"><span class="number">02</span></div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title"><h5>{{ __('pages.about.step2_title') }}</h5></div>
                                        <div class="ttm-box-description">{{ __('pages.about.step2_desc') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ttm-processbox">
                                    <div class="ttm-box-image">
                                        <div class="process-num"><span class="number">03</span></div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title"><h5>{{ __('pages.about.step3_title') }}</h5></div>
                                        <div class="ttm-box-description">{{ __('pages.about.step3_desc') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- process-section end -->

        <section class="ttm-row row-title2-section clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <div class="row-title text-center">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>{{ __('pages.about.difference_eyebrow') }}</h5>
                                    <h2 class="title">{{ __('pages.about.difference_title') }}</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mb-20" href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.about.apply_now') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

@endsection
