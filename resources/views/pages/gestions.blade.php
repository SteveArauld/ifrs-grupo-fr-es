@extends('layouts.app')

@section('title', __('pages.gestions.meta_title'))
@section('description', __('pages.gestions.meta_title'))

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.gestions.page_title') }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.gestions.breadcrumb_home') }}
</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.gestions.page_title') }}</span>
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
                            <p>{{ __('pages.gestions.intro') }}</p>

                            <h5 class="mt-4">{{ __('pages.gestions.section1.title') }}</h5>
                            <p>{{ __('pages.gestions.section1.paragraph1') }}</p>

                            <h5 class="mt-4">{{ __('pages.gestions.section2.title') }}</h5>
                            <p>{{ __('pages.gestions.section2.paragraph1') }}</p>

                            <h5 class="mt-4">{{ __('pages.gestions.section3.title') }}</h5>
                            <p>
                                {{ __('pages.gestions.section3.paragraph1') }}
                                <br><br>
                                {{ __('pages.gestions.section3.paragraph2') }}
                            </p>

                            <h5 class="mt-4">{{ __('pages.gestions.section4.title') }}</h5>
                            <p>{{ __('pages.gestions.section4.paragraph1') }}</p>

                            <h5 class="mt-4">{{ __('pages.gestions.section5.title') }}</h5>
                            <p>{{ __('pages.gestions.section5.paragraph1') }}</p>

                            <h5 class="mt-4">{{ __('pages.gestions.section6.title') }}</h5>
                            <p>{{ __('pages.gestions.section6.paragraph1') }}</p>
                        </div>

                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

@endsection
