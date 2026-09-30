@extends('layouts.app')

@section('title', __('pages.legales.meta_title'))
@section('description', __('pages.legales.meta_title'))

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.legales.page_title') }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.legales.breadcrumb_home') }}</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.legales.page_title') }}</span>
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
                    <div class="e-con-inner">

                        <div id="texto-legal">
                            <p class="pt-3">
                                <span>{{ __('pages.legales.company_name') }}</span><br>
                                <span>{{ __('pages.legales.registered_office') }}</span><br>
                                <span>{{ __('pages.legales.director') }}</span><br>
                                <span>{{ __('pages.legales.email_label') }} <a href="mailto:contato@horizoncredit.com">contato@horizoncredit.com</a></span><br>
                                <span>{{ __('pages.legales.phone_label') }}</span><br>
                            </p>
                            <h5 class="mt-4">{{ __('pages.legales.section1_title') }}</h5>
                            <p>{{ __('pages.legales.section1_p1') }}</p>
                            <p>{{ __('pages.legales.section1_p2') }}</p>
                            <p>{{ __('pages.legales.section2_title') }}</p>
                            <p>{{ __('pages.legales.section2_text') }}</p>
                            <p>{{ __('pages.legales.section3_title') }}</p>
                            <p>{{ __('pages.legales.section3_text') }}</p>
                            <h5 class="mt-4">{{ __('pages.legales.section4_title') }}</h5>
                            <p>{{ __('pages.legales.section4_text') }}</p>
                            <h5 class="mt-4">{{ __('pages.legales.section5_title') }}</h5>
                            <p>{{ __('pages.legales.section5_p1') }}</p>
                            <p>{{ __('pages.legales.section5_p2') }}</p>
                        </div>

                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

@endsection
