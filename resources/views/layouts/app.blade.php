<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="{{ __('pages.meta.keywords') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title', __('pages.meta.title'))</title>
<meta name="description" content="@yield('description', __('pages.meta.title'))" />

<!-- favicon icon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}"/>

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}"/>

@stack('styles')

<style>
/* The theme positions the desktop nav purely via float (.site-branding
   float:left, .header-btn/.ttm-menu-toggle float:right) with no flex/width
   rule holding #site-navigation itself in the middle gap. That only "works"
   by accident when the menu labels are short enough to fit the leftover
   space (French); longer Spanish labels overflow it and the whole <nav>
   drops below the logo. Force an explicit flex layout on desktop so it
   holds regardless of label length/language. */
@media (min-width: 992px) {
    #site-header-menu #site-navigation {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        flex-wrap: nowrap;
        float: none;
        width: auto;
    }
    #site-header-menu #site-navigation .menu { order: 1; flex: 0 1 auto; min-width: 0; }
    #site-header-menu #site-navigation .header-btn { order: 2; flex-shrink: 0; }
    #site-header-menu #site-navigation .ttm-rt-contact { order: 3; flex-shrink: 0; }
    #site-header-menu #site-navigation .menu > ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        align-items: center;
    }
    #site-header-menu #site-navigation .menu > ul > li { white-space: nowrap; }
    #site-header-menu #site-navigation .menu > ul > li > a { padding-left: 12px; padding-right: 12px; }
}
</style>
</head>

<body>

    <!--page start-->
    <div class="page">

        <header id="masthead" class="header ttm-header-style-classic">
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact ttm-highlight-left text-left">
                            <li><i class="fa fa-home"></i><a href="#">Rua Castilho 39, 1250-096 Lisboa, Portugal</a></li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:contato@ifrs-grupo.com">contato@ifrs-grupo.com</a></li>
                                <li><i class="fa fa-phone"></i>+35 191 223 8950</li>
                            </ul>
                            <ul class="top-contact ttm-lang-switcher">
                                <li><a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'fr'])) }}" class="{{ app()->getLocale() === 'fr' ? 'active-lang' : '' }}">FR</a></li>
                                <li> / </li>
                                <li><a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'es'])) }}" class="{{ app()->getLocale() === 'es' ? 'active-lang' : '' }}">ES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->

            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="{{ route('home', ['locale' => app()->getLocale()]) }}" rel="home">
                                        <img id="logo-img" class="img-center" src="{{ asset('assets/images/logooo.png') }}" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="header-btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.apply_now') }}</a>
                                    </div>
                                    <div class="ttm-rt-contact">
                                        <div class="ttm-header-icons"></div>
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="">
                                            <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.home') }}</a></li>
                                            <li class="{{ Route::currentRouteName() === 'about-us' ? 'active' : '' }}"><a href="{{ route('about-us', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.about') }}</a></li>
                                            <li class="{{ Route::currentRouteName() === 'nos-credits' ? 'active' : '' }}"><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.offers') }}</a></li>
                                            <li class="{{ Route::currentRouteName() === 'apply-now' ? 'active' : '' }}"><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.apply') }}</a></li>
                                            <li class="{{ Route::currentRouteName() === 'condition' ? 'active' : '' }}"><a href="{{ route('condition', ['locale' => app()->getLocale()]) }}">{{ __('pages.nav.conditions') }}</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

        @yield('content')

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="first-footer-inner">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center" src="{{ asset('assets/images/footer-logo.png') }}" alt="">
                            </div>
                            <div class="row no-gutters footer-box">
                                <div class="col-md-4 widget-area">
                                    <div class="featured-box text-center">
                                        <div class="featured-content">
                                            <div class="featured-title"><h5>{{ __('pages.footer.address_title') }}</h5></div>
                                            <div class="featured-desc"><p>Rua Castilho 39, 1250-096 Lisboa, Portugal</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 widget-area">
                                    <div class="featured-box text-center">
                                        <div class="featured-content">
                                            <div class="featured-title"><h5>{{ __('pages.footer.phone_title') }}</h5></div>
                                            <div class="featured-desc"><p>+35 191 223 8950</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 widget-area">
                                    <div class="featured-box text-center">
                                        <div class="featured-content">
                                            <div class="featured-title"><h5>{{ __('pages.footer.email_title') }}</h5></div>
                                            <div class="featured-desc"><p>contato@ifrs-grupo.com</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">{{ __('pages.footer.about_title') }}</h3>
                            <div class="textwidget widget-text">
                                {{ __('pages.footer.about_text') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">{{ __('pages.footer.links_title') }}</h3>
                            <ul id="menu-footer-services">
                                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.link_contact') }}</a></li>
                                <li><a href="{{ route('about-us', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.link_about') }}</a></li>
                                <li><a href="{{ route('apply-now', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.link_apply') }}</a></li>
                                <li><a href="{{ route('condition', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.link_conditions') }}</a></li>
                                <li><a href="{{ route('legales', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.link_legal') }}</a></li>
                                <li><a href="{{ route('gestions', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.link_cookies') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">{{ __('pages.footer.offers_title') }}</h3>
                            <ul id="menu-footer-services">
                                <li><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.offer_personal') }}</a></li>
                                <li><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.offer_student') }}</a></li>
                                <li><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.offer_loans') }}</a></li>
                                <li><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.offer_leasing') }}</a></li>
                                <li><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.offer_car') }}</a></li>
                                <li><a href="{{ route('nos-credits', ['locale' => app()->getLocale()]) }}">{{ __('pages.footer.offer_other') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix">
                            <h3 class="widget-title">{{ __('pages.footer.contact_title') }}</h3>
                            <div class="textwidget widget-text">
                                <ul class="ttm-our-location-list">
                                    <li><i class="fa fa-phone"></i>+35 191 223 8950</li>
                                    <li><i class="fa fa-map-marker"></i>Rua Castilho 39, 1250-096 Lisboa, Portugal</li>
                                    <li><i class="fa fa-envelope-o"></i>contato@ifrs-grupo.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12">
                        <span>{{ __('pages.footer.copyright') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <style>
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50px;
        padding: 10px 20px;
        text-decoration: none;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        font-family: Arial, sans-serif;
        font-weight: bold;
        transition: all 0.3s ease;
        z-index: 1000;
    }
    .whatsapp-float img { width: 28px; height: 28px; margin-right: 10px; }
    .whatsapp-float:hover { background-color: #1ebe5d; box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4); transform: translateY(-3px); }
    @media only screen and (max-width: 600px) {
        .whatsapp-float span { display: none; }
        .whatsapp-float { padding: 10px; border-radius: 50%; }
        .whatsapp-float img { margin: 0; }
    }
    .ttm-lang-switcher { margin-left: 15px; }
    .ttm-lang-switcher a.active-lang { font-weight: bold; text-decoration: underline; }
    </style>

    <a href="https://wa.me/351912238950" target="_blank" class="whatsapp-float">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        <span>+35 191 223 8950</span>
    </a>

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/numinate.min69596959.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    @stack('scripts')

</body>
</html>
