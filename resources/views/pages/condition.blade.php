@extends('layouts.app')

@section('title', __('pages.condition.meta_title'))
@section('description', __('pages.condition.meta_title'))

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.condition.page_title') }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.condition.breadcrumb_home') }}</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.condition.page_title') }}</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row faq-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <!-- section title -->
                        <div class="section-title text-center with-desc mb-40 clearfix">
                            <div class="title-header mb-60"><!-- title-header -->
                                <h2 class="title">{{ __('pages.condition.section_title') }}</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper text-center">
                                <img class="img-fluid" src="{{ asset('assets/images/footer.png') }}" title="{{ __('pages.condition.image_title') }}" alt="{{ __('pages.condition.image_title') }}">
                            </div><!-- ttm_single_image-wrapper end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- acadion -->
                        <div class="accordion res-991-mt-30">
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ __('pages.condition.prereq_title') }}</a>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        * {{ __('pages.condition.prereq_point1') }} <br>
                                        * {{ __('pages.condition.prereq_point2') }} <br>
                                        * {{ __('pages.condition.prereq_point3') }} <br>
                                        * {{ __('pages.condition.prereq_point4') }}
                                    </p>
                                </div>
                            </div><!-- toggle end -->

                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">{{ __('pages.condition.docs_title') }}</a>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        * {{ __('pages.condition.docs_point1') }} <br>
                                        * {{ __('pages.condition.docs_point2') }} <br>
                                        * {{ __('pages.condition.docs_point3') }} <br>
                                        * {{ __('pages.condition.docs_point4') }} <br>
                                    </p>
                                </div>
                            </div><!-- toggle end -->

                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ __('pages.condition.rate_title') }}</a>
                                </div>
                                <div class="toggle-content"><p>{{ __('pages.condition.rate_text') }}</p></div>
                            </div><!-- toggle end -->

                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ __('pages.condition.term_title') }}</a>
                                </div>
                                <div class="toggle-content"><p>{{ __('pages.condition.term_text') }}</p></div>
                            </div><!-- toggle end -->

                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ __('pages.condition.payment_title') }}</a>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        {{ __('pages.condition.payment_intro') }}
                                        <br/>
                                        {{ __('pages.condition.payment_point1') }} <br/>
                                        {{ __('pages.condition.payment_point2') }} <br/>
                                        {{ __('pages.condition.payment_point3') }} <br/>
                                        {{ __('pages.condition.payment_point4') }} <br/>
                                        {{ __('pages.condition.payment_point5') }} <br/>
                                        {{ __('pages.condition.payment_point6') }} <br/>
                                    </p>
                                </div>
                            </div><!-- toggle end -->

                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ __('pages.condition.contract_title') }}</a>
                                </div>
                                <div class="toggle-content">
                                    <p>{{ __('pages.condition.contract_text') }}</p>
                                </div>
                            </div><!-- toggle end -->

                        </div><!-- accordion end-->
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

@endsection
