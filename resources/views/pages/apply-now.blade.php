@extends('layouts.app')

@section('title', __('pages.apply.meta_title'))
@section('description', __('pages.apply.meta_title'))

@push('styles')
    <style>
        #applyNowForm .form-group {
            margin-bottom: 20px;
        }

        #applyNowForm label {
            display: block;
            margin-bottom: 8px;
        }

        #applyNowForm .text-input,
        #applyNowForm .text-select {
            display: block;
            width: 100%;
            height: 45px;
            padding: 8px 15px;
            border: 1px solid #e1e1e1;
            border-radius: 4px;
            box-sizing: border-box;
        }

        @media (max-width: 767px) {
            #applyNowForm .col-md-6 {
                margin-bottom: 10px;
            }
        }
    </style>
@endpush

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ __('pages.apply.heading') }}</h1>
                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="ti ti-home"></i>&nbsp;&nbsp;{{ __('pages.apply.breadcrumb_home') }}</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ __('pages.apply.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- about-section -->
        <section class="ttm-row about-top-section clearfix">
            <div class="container">

                <div class="ttm-col-bgcolor-yes ttm-bg z-index-2 p-50 res-991-margin_top30 res-991-p-15">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form id="applyNowForm" method="POST" action="{{ route('apply-now.store', ['locale' => app()->getLocale()]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('pages.apply.label_civ') }}</label>
                                        <select name="civ" style="height:45px" class="text-select margin_bottom0" required="required">
                                            <option value="" {{ old('civ') == '' ? 'selected' : '' }}>{{ __('pages.apply.civ_placeholder') }}</option>
                                            <option value="M." {{ old('civ') == 'M.' ? 'selected' : '' }}>{{ __('pages.apply.civ_mr') }}</option>
                                            <option value="Sra./Sra." {{ old('civ') == 'Sra./Sra.' ? 'selected' : '' }}>{{ __('pages.apply.civ_mrs') }}</option>
                                        </select>
                                        @error('civ')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('pages.apply.label_name') }}</label>
                                        <input name="name" class="text-input margin_bottom0" type="text" value="{{ old('name') }}" required="">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_first') }}</label>
                                        <input type="text" class="text-input margin_bottom0" name="first" value="{{ old('first') }}" required="">
                                        @error('first')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_email') }}</label>
                                        <input type="text" class="text-input margin_bottom0" name="email" value="{{ old('email') }}" required="">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_phone') }}</label>
                                        <input type="text" class="text-input margin_bottom0" name="phone" value="{{ old('phone') }}" required="">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_country') }}</label>
                                        <input type="text" class="text-input margin_bottom0" name="country" value="{{ old('country') }}" required>
                                        @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_address') }}</label>
                                        <input type="text" class="text-input margin_bottom0" name="codpost" value="{{ old('codpost') }}" required>
                                        @error('codpost')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <label><br/>{{ __('pages.apply.label_city') }}</label>
                                        <input type="text" name="city" class="text-input margin_bottom0" value="{{ old('city') }}" required="">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_amount') }}</label>
                                        <input type="text" name="montantpret" class="text-input margin_bottom0" value="{{ old('montantpret') }}" required="">
                                        @error('montantpret')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group relativo mb-30 mb-sm-20">
                                        <label>{{ __('pages.apply.label_duration') }}</label>
                                        <input type="text" name="dureepret" class="text-input margin_bottom0" value="{{ old('dureepret') }}" required="">
                                        @error('dureepret')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center mt-30">
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" name="newclient">{{ __('pages.apply.submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br><br>

                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

@endsection
