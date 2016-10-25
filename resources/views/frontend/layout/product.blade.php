<!DOCTYPE html>
<html dir="ltr" lang="en-US" @yield('htmlschema')>
      <head>
        @yield('seo')
        @yield('json-ld')

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="{!! url('favicon.ico') !!}">

        @yield('goodrelations')
 
	@include('frontend/layout/parts/default-styles')
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->

        @yield('header_styles')
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/important.css') !!}">
        <link rel="stylesheet" href="{!! asset('/frontend/css/responsive.css') !!}" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->


        @yield('scripts')
        @yield('ppscripts')

        <!-- Document Title
    ============================================= -->

        <title>@yield('title', 'Shop | The Grace Company')</title>

        <script>
                            (function(i, s, o, g, r, a, m)
                            {
                                i['GoogleAnalyticsObject'] = r;
                                i[r] = i[r] || function()
                                {
                                    (i[r].q = i[r].q || []).push(arguments)
                                }, i[r].l = 1 * new Date();
                                a = s.createElement(o),
                                        m = s.getElementsByTagName(o)[0];
                                a.async = 1;
                                a.src = g;
                                m.parentNode.insertBefore(a, m)
                            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                                    ga('create', '{!! $settings['ga_code']  or 'UA - 78414244 - 2' !!}', 'auto');
                                    //ga('create', 'UA-78414244-2', 'auto', {'name': 'devTracker'});
                                    ga('require', 'ec');
                            ga('require', 'displayfeatures');
                            ga('require', 'linkid');
                                    @yield('inline-ga-pi')
                                    @yield('inline-ga-atc')
                                    @yield('inline-ga-action')
                                    ga('send', 'pageview');
                            //      ga('devTracker.send', 'pageview');
        </script>


        @yield('inline-ga-func')

    </head>

    <body class=" @yield('bodytag') stretched" @yield('bodyschema')>
          <div id="wrapper" class="clearfix">

            <!-- Top Bar
            ============================================= -->
 {{--           @include('frontend.shop.partials.layout.shoptop') --}}

        <!--  Header
        ============================================= -->
            @include('frontend.layout.partials.header.header',[$cart,$total])  
{{-- @include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_shop->roots()]) --}}
      


            @yield('slider')

            @yield('intro')
            
            
            @yield('page-title')
            
            
            @yield('sidebar')

            <section id="content">
                <div class="content-wrap">
                    <div class="container clearfix">
                        @yield('content')
                    </div>
                </div>
            </section>{{--  #content end --}}


            <footer id="footer" class="dark">
                <div class="container">
                    @include('frontend.layout.partials.footer.footer-widgets')
                </div>

                <div id="copyrights">
                    @include('frontend.layout.partials.footer.copyr')
                </div>{{--  #copyrights end --}}
            </footer>{{--  #footer end --}}


        </div>{{--  #wrapper end --}}

        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- External JavaScripts
        ============================================= -->

        <script type="text/javascript" src="{!! asset('/frontend/js/jquery.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/frontend/js/scripts.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('frontend/js/plugins/jquery.equalheights.js') !!}"></script>

        <script type="text/javascript" src="{!! asset('/frontend/js/plugins.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/frontend/js/functions.js') !!}"></script>

        @yield('footer_scripts')
        @yield('pp_footer_scripts')
        @yield('inlinejs')


    </body>
</html>
