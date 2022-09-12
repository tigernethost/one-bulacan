<!DOCTYPE html>
<html lang="en" style="@yield('html_style')">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="{{env('GLOBAL_META_DESCRIPTION')}}">
        <meta name="keywords" content="{{env('GLOBAL_META_TAGS')}}">
        <meta name="author" content="">
        <meta property="og:url" content="{{ env('APP_URL') }}" />
        <meta property="og:description" content="{{env('GLOBAL_META_DESCRIPTION')}}">
        <meta property="og:image" content="https://onepampanga.com/uploads/OnePampangaCover.jpg">

        <meta name="twitter:title" content="One {{ env('LOCATION') ?? 'Project One'}} | Online Directory for {{ env('LOCATION') ?? 'Project One'}}">
        <meta name="twitter:description" content="{{env('GLOBAL_META_DESCRIPTION')}}">
        <meta name="twitter:image" content="https://onepampanga.com/uploads/OnePampangaCover.jpg">
        <meta name="twitter:card" content="https://onepampanga.com/uploads/OnePampangaCover.jpg">

        <meta property="fb:app_id" content="920655518349251"/>

        <title>One {{ env("LOCATION") ?? "Project One"}} | Online Directory for {{ env("LOCATION") ?? "Project One"}}</title>

        @yield('before_styles')

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <!-- FONTS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,400italic,500,600,700,700italic,900'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dosis:100,200,300,400,400italic,500,600,700,700italic,900'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>

        <!-- FONT AWESOME KIT -->
        <script src="{{ asset('js/8e38ce13e4.js') }}" crossorigin="anonymous"></script>
        <!-- {{ asset('js/8e38ce13e4.js') }} -->
        <!-- CSS -->
        <link rel='stylesheet' href="{{ asset('v2/css/global.css') }}">
        <link rel='stylesheet' href="{{ asset('v2/content/one/css/structure.css') }}">
        <link rel='stylesheet' href="{{ asset('v2/content/one/css/one.css') }}">
        <link rel='stylesheet' href="{{ asset('v2/content/one/css/custom.css') }}">

        <!-- Revolution Slider -->
        <link rel="stylesheet" href="{{ asset('plugins/rs-plugin-6.custom/css/rs6.css') }}">

        @yield('after_styles')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157710972-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-157710972-1');
        </script>
    </head>
    <body class="@yield('body_class')" style="@yield('body_style')">
        @yield('before_scripts')

        @yield('content')

        <div id="Side_slide" class="right dark" data->
            <div class="close-wrapper">
                <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
            </div>
            <div class="menu_wrapper"></div>
            <div class="extras">
                <a id="get_listed" href="{{ asset('registration') }}" class="" target="_self">Get listed now <i class="icon-right-open"></i></a>
            </div>
            <div class="extras-wrapper"></div>
        </div>

        <div id="body_overlay"></div>

        <!-- JS -->
        <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

        <script src="{{ asset('js/mfn.menu.js') }}"></script>
        <script src="{{ asset('js/jquery.plugins.js') }}"></script>
        <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
        <script src="{{ asset('js/animations/animations.js') }}"></script>
        <script src="{{ asset('js/translate3d.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/email.js') }}"></script>
        <script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/631eb59937898912e9688af0/1gcnvaoq1';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    
        @yield('after_scripts')
    </body>
</html>