{{--
    Shared content for every HTTP error page (404, 403, 419, 429, 500, 503...).
    Expects a $code variable matching a 'pages.errors.{code}' translation key.
--}}

<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title">{{ __('pages.errors.'.$code.'.title') }}</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.errors.breadcrumb_home') }}</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span>{{ __('pages.errors.'.$code.'.eyebrow') }}</span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">
    <section class="ttm-row error-page-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="error-page-code">{{ $code }}</div>
                        <div class="section-title with-desc text-center clearfix">
                            <div class="title-header">
                                <h5>{{ __('pages.errors.'.$code.'.eyebrow') }}</h5>
                                <h2 class="title">{{ __('pages.errors.'.$code.'.title') }}</h2>
                            </div>
                            <div class="title-desc">{{ __('pages.errors.'.$code.'.desc') }}</div>
                        </div>
                        <div class="mt-20">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mb-20" href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('pages.errors.cta_home') }}</a>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-20" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('pages.errors.cta_contact') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!--site-main end-->

<style>
    .error-page-section { padding: 100px 0; }
    .error-page-code {
        font-size: 140px;
        font-weight: 800;
        line-height: 1;
        color: #f4f5f9;
        -webkit-text-stroke: 2px #ff2440;
        margin-bottom: 10px;
    }
    @media (max-width: 767px) {
        .error-page-code { font-size: 80px; }
        .error-page-section { padding: 60px 0; }
    }
</style>
