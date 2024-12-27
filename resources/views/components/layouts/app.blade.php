<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet"  href="{{ asset('theme/css/elementor-styles.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet"  href="{{ asset('theme/css/styles.css') }}" type="text/css" media="all">
    <link rel="stylesheet"  href="{{ asset('theme/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet"  href="{{ asset('theme/css/ion.rangeSlider.min.css') }}" type="text/css" media="all">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    @livewireStyles
</head>
<body>
    <div class="rh_wrap rh_wrap_stick_footer">
        <div class="rh-responsive-header">
            <div class="rh-ultra-logo"><a href=""><img src="{{ asset('images/default-150x150.png') }}"></a></div>
            <div class="rh-responsive-header-inner">
                <div class="rh-ultra-responsive-nav hc-nav-original hc-nav-1"></div>
                <div class="rh-ultra-user-phone">
                    <svg class="rh-ultra-dark" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.24-.84-.39-1.71-.45-2.6z" opacity=".3"></path>
                        <path d="M20 21c.55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17zm-3.6-3.98c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.03 5h1.5c.07.89.22 1.76.46 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79z"></path>
                    </svg>
                    <a target="_blank" href="tel://18005554321" class="contact-number">1-800-555-4321</a>
                </div>
                <div class="rh-ultra-menu-user-profile">
                    <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 510 510">
                        <path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm0 76.5c43.35 0 76.5 33.15 76.5 76.5s-33.15 76.5-76.5 76.5-76.5-33.15-76.5-76.5 33.15-76.5 76.5-76.5zm0 362.1c-63.75 0-119.85-33.149-153-81.6 0-51 102-79.05 153-79.05S408 306 408 357c-33.15 48.45-89.25 81.6-153 81.6z"></path>
                    </svg>
                    <div class="rh-ultra-modal">
                        <div class="rh_modal__corner"></div>
                        <div class="rh_modal__wrap">
                            <div class="rh_modal__dashboard rh-trigger-nav">
                                <a href="https://ultra.realhomes.io/dashboard/?module=favorites" class="rh_modal__dash_link add-favorites-without-login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                                        <path d="M1172.32,262.318a4.5,4.5,0,0,1,6.36,6.364L1172,275l-6.68-6.318a4.5,4.5,0,0,1,6.36-6.364A0.425,0.425,0,0,0,1172.32,262.318Z" transform="translate(-1164 -261)"></path>
                                    </svg>
                                    <span>My Favorites</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="rh-responsive-toggle hc-nav-trigger hc-nav-1" href="https://ultra.realhomes.io/#" role="button" aria-label="Open Menu" aria-controls="hc-nav-1" aria-expanded="false"><span></span></a>
            </div>
        </div>

        <header id="masthead" class="site-header rh-ultra-header-wrapper">
            <div class="rh-ultra-logo">
                <a title="RealHomes Ultra" href="https://ultra.realhomes.io/">
                    <img alt="RealHomes Ultra" src="images/ultra-header-logo.png"></a>
            </div>
            <div class="rh-ultra-header-inner">
                <div class="rh-ultra-nav">
                    <div class="menu-main-menu-container rh-ultra-nav-menu">
                        <ul class="rh-ultra-main-menu clearfix">
                            @if (Auth::check())
                            <li><a href="http://127.0.0.1:8000/admin" target="_blank">Dashboard</a></li>
                            @else
                            <li><a href="{{ route('account.register')}}" class="nav-link text-dark">Register</a></li>
                            <li><a href="http://127.0.0.1:8000/admin/login">Login</a></li>
                            @endif
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="rh-ultra-nav-wrapper">
                    <div class="rh-ultra-social-contacts">
                        <div class="rh-ultra-header-social-list">
                            <a class="facebook" href="https://www.facebook.com/InspiryThemes/" target="_blank">
                                <i class="fab fa-facebook fa-lg"></i></a>
                            <a class="twitter" href="https://twitter.com/inspirythemes" target="_blank">
                                <i class="fab fa-twitter fa-lg"></i></a><a class="instagram" href="https://www.instagram.com/envato/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a><a class="youtube" href="https://www.youtube.com/user/Envato"
                            target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
                        </div>
                        <div class="rh-ultra-user-phone">
                            <svg class="rh-ultra-dark" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                <path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.24-.84-.39-1.71-.45-2.6z" opacity=".3"></path>
                                <path d="M20 21c.55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17zm-3.6-3.98c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.03 5h1.5c.07.89.22 1.76.46 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79z"></path>
                            </svg>
                            <a target="_blank" href="tel://18005554321" class="contact-number">9978835005</a>
                        </div>
                        <div class="rh-ultra-menu-user-profile">
                            <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 510 510">
                                <path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm0 76.5c43.35 0 76.5 33.15 76.5 76.5s-33.15 76.5-76.5 76.5-76.5-33.15-76.5-76.5 33.15-76.5 76.5-76.5zm0 362.1c-63.75 0-119.85-33.149-153-81.6 0-51 102-79.05 153-79.05S408 306 408 357c-33.15 48.45-89.25 81.6-153 81.6z"></path>
                            </svg>
                            <div class="rh-ultra-modal">
                                <div class="rh_modal__corner"></div>
                                <div class="rh_modal__wrap">
                                    <div class="rh_modal__dashboard rh-trigger-nav">
                                        <a href="https://ultra.realhomes.io/dashboard/?module=favorites" class="rh_modal__dash_link add-favorites-without-login">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                                                <path d="M1172.32,262.318a4.5,4.5,0,0,1,6.36,6.364L1172,275l-6.68-6.318a4.5,4.5,0,0,1,6.36-6.364A0.425,0.425,0,0,0,1172.32,262.318Z" transform="translate(-1164 -261)"></path>
                                            </svg>
                                            <span>My Favorites</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
        {{ $slot }} 
        
        @livewireScripts

        <div class="rh_sticky_wrapper_footer rh_apply_sticky_wrapper_footer">
            <footer id="colophon" class="site-footer">
                <div class="site-footer-bg site-footer-default-bg"></div>
                <div class="container">
                    <div class="site-footer-top">
                        <div class="site-footer-social-link">
                            <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook "></i></a><a class="twitter" href="https://twitter.com/inspirythemes" target="_blank"><i class="fab fa-twitter "></i></a>
                            <a class="instagram" href="#" target="_blank"><i class="fab fa-instagram "></i></a><a class="youtube" href="https://www.youtube.com/user/Envato" target="_blank"><i class="fab fa-youtube "></i></a>
                        </div>
                    </div>
                    <!-- .site-footer-top -->
                    <aside class="row site-footer-widget-area">
                        <div class="rh-footer-widgets columns-3">
                            <section id="text-2" class="widget clearfix widget_text">

                                <div class="rh-footer-widgets columns-3">
                                    <section id="nav_menu-2" class="widget clearfix widget_nav_menu">
                                        <div class="menu-footer-widget-menu-container">
                                            <ul id="menu-footer-widget-menu" class="menu">
                                                <li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-130 current_page_item menu-item-153 rh-active"><a href="https://ultra.realhomes.io/" aria-current="page">Home</a></li>
                                                <li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a href="https://ultra.realhomes.io/properties-grid-fullwidth/">Properties Listing</a></li>
                                                <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152"><a href="https://ultra.realhomes.io/blog/">Blog</a></li>
                                                <li id="menu-item-151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a href="https://ultra.realhomes.io/contact/">Contact</a></li>
                                            </ul>
                                        </div>
                                    </section>
                                </div>
                                <div class="rh-footer-widgets columns-3">
                                    <section id="search-2" class="widget clearfix widget_search">
                                        <form role="search" method="get" id="searchform" class="searchform" action="https://ultra.realhomes.io/">
                                            <div>
                                                <label class="screen-reader-text" for="s">Search for:</label>
                                                <input type="text" value="" name="s" id="s">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </section>
                                </div>
                    </aside>
                    <!-- .site-footer-widget-area -->
                    <div class="site-footer-contacts-wrapper">
                        <div class="site-footer-contacts">
                            <span class="rh-ultra-footer-help">Need Help?</span>
                            <a class="rh-ultra-footer-number rh-ultra-user-phone-footer" target="_blank" href="tel://1-800-555-4321">
                                <svg class="rh-ultra-dark" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.24-.84-.39-1.71-.45-2.6z" opacity=".3"></path>
                                    <path d="M20 21c.55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17zm-3.6-3.98c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.03 5h1.5c.07.89.22 1.76.46 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79z"></path>
                                </svg> <span>1-800-555-4321</span>
                            </a>
                            <a class="rh-ultra-footer-number rh-ultra-user-whatsapp-footer" target="_blank" href="https://api.whatsapp.com/send?phone=1-800-555-4321">
                                <svg class="rh-ultra-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <g>
                                        <path d="M12 19.3c-1.3 0-2.6-.4-3.8-1l-.3-.2-2.8.7.7-2.7-.2-.3c-.7-1.2-1.1-2.5-1.1-3.9 0-4.1 3.3-7.4 7.4-7.4 2 0 3.8.8 5.2 2.2 1.4 1.4 2.3 3.3 2.3 5.2.1 4.1-3.3 7.4-7.4 7.4z" opacity=".3"></path>
                                        <g>
                                            <path d="M12 4.8c1.9 0 3.7.7 5 2.1 1.4 1.4 2.2 3.2 2.2 5 0 3.9-3.2 7.1-7.2 7.1-1.2 0-2.4-.3-3.4-.9l-.6-.3-.7.2-1.7.4.4-1.5.2-.7-.4-.7c-.6-1.1-.9-2.3-.9-3.6C4.9 8 8.1 4.8 12 4.8M12 3c-4.9 0-8.9 4-8.9 8.9 0 1.6.4 3.1 1.2 4.5L3 21l4.7-1.2c1.3.7 2.8 1.1 4.3 1.1 4.9 0 9-4 9-8.9 0-2.4-1-4.6-2.7-6.3S14.4 3 12 3z"></path>
                                        </g>
                                        <path d="M16.1 13.8c-.2-.1-1.3-.7-1.5-.7-.3-.1-.4-.1-.6.1-.1.2-.6.7-.7.9-.1.1-.3.2-.5.1-1.3-.7-2.2-1.2-3-2.7-.2-.4.2-.4.7-1.2.1-.1 0-.3 0-.4-.1-.1-.5-1.2-.7-1.7-.2-.4-.4-.4-.5-.4h-.4c-.1 0-.4.1-.6.3-.3.2-.8.7-.8 1.8s.8 2.2.9 2.3c.1.1 1.6 2.4 3.8 3.4 1.4.6 2 .7 2.7.6.4-.1 1.3-.5 1.5-1.1.2-.5.2-1 .1-1.1-.1 0-.2-.1-.4-.2z"></path>
                                    </g>
                                </svg> <span>1-800-555-4321</span>
                            </a>
                            <a class="rh-ultra-footer-number rh-ultra-user-email-footer" target="_blank" href="mailto:hello@yoursite.com">
                                <svg class="rh-ultra-dark" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"></path>
                                    <path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"></path>
                                </svg>
                                <span>hello@yoursite.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="site-footer-bottom space-between">
                        <p class="copyrights">© 2024. All rights reserved.</p>
                        <p class="designed-by">Designed by <a href="">Inspiry Themes</a></p>
                    </div>
                </div>
            </footer>
        </div>


<script src="{{ asset('theme/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('theme/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('theme/js/slick.min.js') }}"></script>
<script src="{{ asset('theme/js/custom.js') }}"></script>


<script>
    $( document ).ready(function() {
        $('.single-item').slick();

        $('.latestProperties').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerPadding: '20px',
        });
    });
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('customJs') {{--
<script>
    $(document).ready(function(){
        $('#user').change(function(){
            window.location = this.value;
        });
        $('#area').change(function(){
            window.location = this.value;
        });
        $('#city2').change(function(){
            window.location = this.value;
        });
    });
</script> --}}

</body>
</html>