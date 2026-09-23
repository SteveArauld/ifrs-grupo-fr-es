@extends('layouts.app')

@section('title', __('pages.contact.meta_title'))
@section('description', __('pages.contact.meta_title'))

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.contact.heading') }}</h1>
                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.contact.breadcrumb_home') }}</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.contact.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row contact-section clearfix">
            <div class="container">
                <div class="row">
                    <!-- contact info -->
                    <div class="col-lg-4">
                        <div class="contact-info-box">
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>{{ __('pages.contact.info_eyebrow') }}</h5>
                                    <h2 class="title">{{ __('pages.contact.info_title') }}</h2>
                                </div>
                            </div>
                            <ul class="contact-info-list">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <div>
                                        <strong>{{ __('pages.footer.address_title') }}</strong>
                                        <span>Rua Castilho 39, 1250-096 Lisboa, Portugal</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <div>
                                        <strong>{{ __('pages.footer.email_title') }}</strong>
                                        <span><a href="mailto:contato@ifrs-grupo.com">contato@ifrs-grupo.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <div>
                                        <strong>{{ __('pages.footer.phone_title') }}</strong>
                                        <span><a href="tel:+351912238950">+35 191 223 8950</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- contact form -->
                    <div class="col-lg-8">
                        <div class="ttm-col-bgcolor-yes ttm-bg z-index-2 p-50 res-991-margin_top30 res-991-p-15">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <form id="contactPageForm" method="POST" action="{{ route('contact.store', ['locale' => app()->getLocale()]) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group relativo mb-30 mb-sm-20">
                                                <label>{{ __('pages.contact.label_name') }}</label>
                                                <input type="text" class="text-input margin_bottom0" name="name" value="{{ old('name') }}" required>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group relativo mb-30 mb-sm-20">
                                                <label>{{ __('pages.contact.label_email') }}</label>
                                                <input type="text" class="text-input margin_bottom0" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group relativo mb-30 mb-sm-20">
                                                <label>{{ __('pages.contact.label_phone') }}</label>
                                                <input type="text" class="text-input margin_bottom0" name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group relativo mb-30 mb-sm-20">
                                                <label>{{ __('pages.contact.label_subject') }}</label>
                                                <input type="text" class="text-input margin_bottom0" name="subject" value="{{ old('subject') }}" required>
                                                @error('subject')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group relativo mb-30 mb-sm-20">
                                                <label>{{ __('pages.contact.label_message') }}</label>
                                                <textarea class="text-input margin_bottom0" name="message" rows="6" required>{{ old('message') }}</textarea>
                                                @error('message')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 text-center mt-30">
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" name="send">{{ __('pages.contact.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- map -->
        <section class="ttm-row contact-map-section clearfix">
            <iframe
                src="https://www.google.com/maps?q=Rua+Castilho+39,+1250-096+Lisboa,+Portugal&output=embed"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="{{ __('pages.contact.map_title') }}">
            </iframe>
        </section>

    </div><!--site-main end-->

    <style>
        .contact-info-box { padding-right: 20px; }
        .contact-info-list { list-style: none; margin: 20px 0 0; padding: 0; }
        .contact-info-list li { display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px; }
        .contact-info-list li i { font-size: 22px; color: #ff2440; margin-top: 3px; }
        .contact-info-list li strong { display: block; color: #05062b; margin-bottom: 4px; }
        .contact-info-list li span, .contact-info-list li a { color: #4a4d5e; }
        .contact-info-list li a { text-decoration: none; }
        .contact-info-list li a:hover { color: #ff2440; }
        .contact-map-section iframe { display: block; }
    </style>

@endsection
