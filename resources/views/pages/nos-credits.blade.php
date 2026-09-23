@extends('layouts.app')

@section('title', __('pages.nos_credits.meta_title'))
@section('description', __('pages.nos_credits.meta_title'))

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.nos_credits.page_title') }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.nos_credits.breadcrumb_home') }}
</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.nos_credits.page_title') }} </span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row blog-grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-grid-1.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.personal_loan.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                    <p>{{ __('pages.nos_credits.personal_loan.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-grid-2.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.debt_consolidation.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                    <p>{{ __('pages.nos_credits.debt_consolidation.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-grid-3.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.revolving_credit.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                  {{ __('pages.nos_credits.revolving_credit.desc') }}
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-grid-4.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.student_loan.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                   <p>{{ __('pages.nos_credits.student_loan.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-grid-5.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.mortgage_loan.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                   <p>{{ __('pages.nos_credits.mortgage_loan.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-grid-6.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.leasing.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                   <p>{{ __('pages.nos_credits.leasing.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog-grid-4.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.car_loan.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                   <p>{{ __('pages.nos_credits.car_loan.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog-grid-5.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.investments.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                   <p>{{ __('pages.nos_credits.investments.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('assets/images/blog-grid-4.jpg') }}" alt="">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nos_credits.other_financing.title') }}</a></h5>
                                </div>
                                <div class="post-meta">
                                   <p>{{ __('pages.nos_credits.other_financing.desc') }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                </div><!-- row end-->

            </div>
        </section>

    </div><!--site-main end-->

@endsection
