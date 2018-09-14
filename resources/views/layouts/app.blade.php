<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Site Title-->
    <title>@yield('title', 'Мебель для гостиниц')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="@yield('description', '')">
    <meta name="keywords" content="@yield('keywords', '')">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Libre+Franklin:200,300,500,600,300italic%7CCormorant+Garamond:300,400,400i,600,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page">
    <!--END PANEL-->
    <div class="preloader">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
    </div>
    <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar_transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="120px" data-xl-stick-up-offset="35px" data-xxl-stick-up-offset="35px" data-body-class="rd-navbar-absolute">
                <!-- RD Navbar Top Panel-->
                <div class="rd-navbar-top-panel">
                    <div class="rd-navbar-top-panel__main">
                        <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                        <div class="rd-navbar-top-panel__content">
                            <ul class="rd-navbar-items-list">
                                <li>
                                    {!! $textBlocks->get('header_phones') !!}
                                </li>
                                <li>
                                    {!! $textBlocks->get('header_socials') !!}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-inner rd-navbar-search-wrap">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel rd-navbar-search_collapsable">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="brand-name" href="{{ route('page.show') }}"><img src="{{ asset('images/logo-140x44.png') }}" alt="" width="140" height="44"/></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                        <div class="rd-navbar-search_collapsable">
                            @includeWhen($menu->get('menu_main'), 'layouts.partials.header_menu', ['menu' => $menu])
                            <div class="sticky__contacts">
                                {!! $textBlocks->get('header_phones') !!}
                            </div>
                            <!-- /.sticky__contacts -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper-->
    
    @yield('content')
    
    <!-- Page Footer -->
    <section class="pre-footer-corporate">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
                <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3">
                    <h6>About</h6>
                    <p>Quali is one of the leading online stores providing affordable and reliable furniture to all American citizens. After years of development, we continue to share our passion and excitement for all things “home” by providing quality products, timeless designs and expert guidance.</p>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
                    <h6>Navigation</h6>
                    <ul class="list-xxs">
                        <li><a href="#">BEDROOM</a></li>
                        <li><a href="#">DINING ROOM</a></li>
                        <li><a href="#">LIVING ROOM</a></li>
                        <li><a href="#">OFFICE</a></li>
                    </ul>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
                    <h6>Recent Comments</h6>
                    <ul class="list-xs">
                        <li>
                            <!-- Comment minimal-->
                            <article class="comment-minimal">
                                <p class="comment-minimal__author">Brian Williamson on</p>
                                <p class="comment-minimal__link"><a href="standard-post.html">Meet the Brand of the Week: KEM WEBER’s Furniture</a></p>
                            </article>
                        </li>
                        <li>
                            <!-- Comment minimal-->
                            <article class="comment-minimal">
                                <p class="comment-minimal__author">Brian Williamson on</p>
                                <p class="comment-minimal__link"><a href="standard-post.html">Furniture styles profile: Art Deco</a></p>
                            </article>
                        </li>
                        <li>
                            <!-- Comment minimal-->
                            <article class="comment-minimal">
                                <p class="comment-minimal__author">Brian Williamson on</p>
                                <p class="comment-minimal__link"><a href="standard-post.html">Meet the Brand of the Week: KEM WEBER’s Furniture</a></p>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
                    <h6>Contacts</h6>
                    <ul class="list-xs">
                        <li>
                            <dl class="list-terms-minimal">
                                <dt>Address</dt>
                                <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-minimal">
                                <dt>Phones</dt>
                                <dd>
                                    <ul class="list-semicolon">
                                        <li><a href="tel:#">(800) 123-0045</a></li>
                                        <li><a href="tel:#">(800) 123-0045</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-minimal">
                                <dt>E-mail</dt>
                                <dd><a href="mailto:#">info@demolink.org</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-minimal">
                                <dt>We are open</dt>
                                <dd>Mn-Fr: 10 am-8 pm</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-corporate">
        <div class="container">
            <div class="footer-corporate__inner">
                <p class="rights"><span>Quali ©</span><span>&nbsp;</span><span class="copyright-year"></span>.<a href="privacy-policy.html">Privacy Policy</a></p>
                <ul class="list-inline-xxs">
                    <li><a class="icon icon-xxs icon-gray-4 fa fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-gray-4 fa fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-gray-4 fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-gray-4 fa fa-vimeo" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-gray-4 fa fa-youtube" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-gray-4 fa fa-pinter"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Modal login window-->
    <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog modal-dialog_custom">
            <!-- Modal content-->
            <div class="modal-dialog__inner">
                <button class="close" type="button" data-dismiss="modal"></button>
                <div class="modal-dialog__content">
                    <h5>Login Form</h5>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_responsive">
                        <div class="form-wrap form-wrap_icon linear-icon-envelope">
                            <input class="form-input" id="modal-login-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="modal-login-email">Your e-mail</label>
                        </div>
                        <div class="form-wrap form-wrap_icon linear-icon-lock">
                            <input class="form-input" id="modal-login-password" type="password" name="password" data-constraints="@Required">
                            <label class="form-label" for="modal-login-password">Your password</label>
                        </div>
                        <button class="button button-primary" type="submit">Login</button>
                    </form>
                    <ul class="list-small">
                        <li><a href="#">Forgot your username?</a></li>
                        <li><a href="#">Forgot your password?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal register window-->
    <div class="modal fade" id="modalRegister" role="dialog">
        <div class="modal-dialog modal-dialog_custom">
            <!-- Modal content-->
            <div class="modal-dialog__inner">
                <button class="close" type="button" data-dismiss="modal"></button>
                <div class="modal-dialog__content">
                    <h5>Register Form</h5>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_responsive" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap form-wrap_icon linear-icon-envelope">
                            <input class="form-input" id="modal-register-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="modal-register-email">Your e-mail</label>
                        </div>
                        <div class="form-wrap form-wrap_icon linear-icon-lock">
                            <input class="form-input" id="modal-register-password" type="password" name="password" data-constraints="@Required">
                            <label class="form-label" for="modal-register-password">Your password</label>
                        </div>
                        <div class="form-wrap form-wrap_icon linear-icon-lock">
                            <input class="form-input" id="modal-register-password2" type="password" name="password2" data-constraints="@Required">
                            <label class="form-label" for="modal-register-password2">Confirm password</label>
                        </div>
                        <div class="form-wrap">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="remember">Remember me
                            </label>
                        </div>
                        <button class="button button-primary" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- PhotoSwipe Gallery-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript-->
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>