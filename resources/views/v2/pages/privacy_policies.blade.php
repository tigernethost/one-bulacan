@extends('v2.layouts.app2')

@section('after_styles')
<!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <style type="text/css">
        .search_key{
            height: 36px;
        }
        .searchButton {
            height: 36px;
        }
        @media only screen and (max-width: 768px) {
            .search_key {
                height: 51px;
            }
            .searchButton {
                height: 51px;
            }
        }

        .main-category i{
            font-size: 30px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('v2/content/one/css/footer_search.css') }}">

    <style>
        @media only screen and (max-width: 768px) {
            /* #mfn-rev-slider {
                display: none;
            } */
            .wrap-bg {
                height: 400px !important;
            }
            .tp-fullwidth-forcer {
                height: 400px !important;
            }
        }
    </style>
@endsection

@section('body_class', "color-custom style-simple button-flat layout-full-width no-content-padding header-split minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu tr-content be-reg-209621")

@section('content')
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                @include('v2.partials.top_bar')
                <div class="mfn-main-slider" id="mfn-rev-slider">
                    <div class="wrap-bg" style="background:#FEC842;padding:0px;">
                        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                            <ul>
                                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="default" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <img src="{{ asset('v2/content/one/images/bg-sectionbg1.jpg') }}" data-bg="p:center bottom;" class="rev-slidebg fullscreen-container">
                                   
                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-80" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;">
                                            <!-- FULLSCREEN BANNER -->
                                            <div class="text-center">
                                                <h1 style="color: white; font-size: 50px; font-weight:700; ">Project One</h1>
                                                <h1 style="color:#44056C; font-size: 70px; font-weight: bold; line-height: 60px;">Privacy Policies</h1>
                                            </div>  
                                            <!-- END OF FULLSCREEN BANNER -->

                                            <!-- LOGO -->
                                            <!-- <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px">
                                                <div class="section_wrapper mcb-section-inner">
                                                    <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-70px !important;" data-mobile="no-up">
                                                        <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column one column_image">
                                                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                                    <div class="image_wrapper">
                                                                        <img class="scale-with-grid" src="{{ asset('v2/content/one/images/here_icon.png') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- END OFLOGO -->
                                    </div>
                                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="300%" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                                        data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;">
                                        <img class="scale-with-grid" src="{{ asset('v2/content/one/images/here_icon.png') }}">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div id="Content" style="display: none;">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">

                        <div class="section mcb-section mcb-section-cj2za4c54 bg-cover-ultrawide" style="padding-top:80px;/*background-image:url({{ asset('../content/seo3/images/seo3-sectionbg1.png') }});*/background-position:center;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap mcb-wrap-j3it3pb94 one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-u4wcjveg6 one column_column">
                                            <div class="column_attr clearfix" style="padding:0 8% 0 0;">
                                                <h2>Our Privacy Policy</h2>
                                                <hr class="no_line" style="margin: 0 auto 15px;">
                                                <p class="big">
                                                    Tigernet Host and IT Services is committed to protecting and respecting your privacy. This privacy policy (“Privacy Policy”) applies to the web application named One Pampanga and any services provided via the App (“Services”) and describes our practices relating to any Personal Information that we collect from you, or that you provide to us in connection with the App and any Services. By providing Personal Information to us, you agree to the terms and conditions of this Privacy Policy and consent to our use of your Personal Information in the manner set out below
                                                </p>
                                                <p class="big">
                                                    <strong>WHAT INFORMATION WE MAY COLLECT ABOUT YOU</strong><br>
                                                    “Personal Information” is information that identifies you as an individual, such as:
                                                </p>
                                                <p class="big">
                                                    Business Name,<br>
                                                    Business Address,<br>
                                                    Business Contact No.,<br>
                                                    Business Email address,<br>
                                                    Account ID,<br>
                                                    Financial iformation, such as payment details<br>
                                                    Any request made by you if combined with your name, email address or Account ID
                                                </p>
                                                <p class="big">
                                                    Please note that we may use a third-party payment service to process payments made through the App. If you wish to make a payment through the App, your Personal Information may be collected by such third party and not by us, and will be subject to the third party’s privacy policy, rather than this Privacy Policy. We have no control over, and are not responsible for, this third party’s collection, use and disclosure of your Personal Information.
                                                </p>
                                                <p class="big">
                                                    In addition, please note that “Personal Information” does not include any personal information of students or any other third parties that you collect, submit, post, transmit and/or otherwise process using the App. You are responsible for: (i) obtaining, and you represent and warrant that you have or will have obtained, any and all necessary legally required authorisations, consents and permissions from all students and/or their parents or guardians (as applicable) and any other third party to the extent that you collect, submit, post, transmit or otherwise process their personal data (including, without limitation, their images, footages ) using the App and (ii) complying with all the applicable laws and regulations (including data protection and privacy laws and regulations) relating to your collection and use of such information.
                                                </p>
                                                <p class="big">
                                                    <strong>HOW WE MAY COLLECT PERSONAL INFORMATION</strong><br>
                                                    We may collect the following Personal Information about you:
                                                </p>
                                                <p class="big">
                                                    Personal Information that you provide to us at the time of downloading the App or subscribing to any of the Services, posting material or requesting further services; and
                                                </p>
                                                <p class="big">
                                                    Personal Information that you provide to us when you report a problem with the App or otherwise contact us.
                                                </p>
                                                <p class="big">
                                                    <strong>OTHER INFORMATION WE MAY COLLECT</strong><br>
                                                    “Other Information” is any information that we collect in connection with your use of the App and Services that does not identify you as an individual, as follows.
                                                </p>
                                                <p class="big">
                                                    Device information: we may collect information about a Device or any computer you use to download or stream a copy of the App onto your Device, including, where available, the Device’s or computer’s unique device identifiers, operating system, browser type and mobile network information as well as the Device’s telephone number. We may use this information to ensure that the Services and App function properly and for the business purposes detailed below.
                                                </p>
                                                <p class="big">
                                                    Log information: we may automatically collect and store certain information about your use of the App and any Services in server logs, including but not limited to internet protocol addresses, internet service provider, clickstream data, browser type and language, viewed and exit pages and date or time stamps. We may use this information to ensure that the Services and App function properly and for the business purposes detailed below. Unique application numbers: when you install or uninstall the App or a Service containing a unique application number or when the App or Service searches for automatic updates, that number and information about your installation, for example, the type of operating system, may be sent to us. We may use this information to ensure that the Services and App function properly and for the business purposes detailed below.
                                                </p>
                                                <p class="big">
                                                    Location data: we may collect and process information about the geographical location of the Device through GPS, Bluetooth, or Wi-Fi Signals. We may use this information to ensure that the Services and App function properly, to personalize your experience on the App by presenting information tailored to you and to your geographic location and for the business purposes detailed below. we ask for your explicit opt-in permission. We will not store or track your device location on an going basis or without your permission. We don’t share precise geolocation data with third parties other than our service providers as necessary to provide the Services. If you no longer wish to allow us to track your location information, you may contact us or opt-out at any time by turning it off at the device level.
                                                </p>
                                                <p class="big">
                                                    Other Information is collected via cookies and other tracking technologies (including analytical cookies). Cookies are small files of information that are stored on your Devices. If you would like to find out more about cookies and their use go to http://www.allaboutcookies.org/. By using the App and Services, you understand that we may place cookies on your Device, in accordance with the terms of this policy.
                                                </p>
                                                <p class="big">
                                                    If you do not want information collected through the use of cookies, there is a simple procedure in most browsers that allows you to automatically decline cookies, or be given the choice of declining or accepting the transfer to your Device of a particular cookie (or cookies). Information about the procedure you are required to follow in order to disable cookies can be found on your Internet browser provider’s website via your help screen. Please be aware that if cookies are disabled not all features of the App or Services may operate as intended.
                                                </p>
                                                <p class="big">
                                                    We may obtain information including personal Information from third party sources to update our supplement information you provided or we collected automatically. Local Law may require you authorize third party to share your information with us before we can acquire it. This may include aggregated anonymous information or certain personal information that maybe provided by us. if we receive personal information from third parties we will handle it in accordance to this Privacy Policy.
                                                </p>
                                                <p class="big">
                                                    Please note that, to the extent that we combine Other Information with Personal Information, the combined information will be treated by us as Personal Information.
                                                </p>
                                                <p class="big">
                                                    <strong>HOW WE USE YOUR INFORMATION</strong><br>
                                                    First and foremost, Please keep in mind that information or content that you voluntarily disclose to others – including to other Project One use you interact with through the Service can be viewed, copies, store and used by the people you share with. We cannot control the actions of the people with whom you choose to share information and we are not responsible for collection, use or disclosure of such information or content by others. we post testimonials on our Service which may contain personal information such as the name photo and /or a video pf the individual in the testimonial we obtain the individual’s consent in advance to ensure we have permission to post this content publically.
                                                </p>
                                                <p class="big">
                                                    We may use your Personal Information and Other Information for the following purposes.
                                                </p>
                                                <p class="big">
                                                    To provide the App features and Services to you. To respond to your enquiries and fulfil your requests for information or customer support. your emails, submissions. To send you important information regarding the App and Services, changes to our terms, conditions, and policies and/or other administrative information. To send you marketing communications that we believe may be of interest to you.
                                                </p>
                                                <p class="big">
                                                    To allow third-party advertising companies to serve ads when you visit the App for free. These companies may collect your non – personal identifiable data through their own embedded technology such as cookies; information about your visits to our app and other applications that are contained in web cookies and other tracking technologies in order to provide advertisements about goods and services of interest to you; Project One uses Google’s AdMob advertising service” for Free Users Only (For detailed information refer to Google's Privacy Policy and Google’s uses of information). In case, you want to disable the advertising feature you may opt-out of receiving these advertising services through using the premium version of Project One Application.
                                                </p>
                                                <p class="big">
                                                    To personalize your experience on the App by presenting information tailored to you and to your geographic location.
                                                </p>
                                                <p class="big">
                                                    To protect our community by making sure the Service remain safe and secure .For our business purposes, such as data analysis, audits, developing new products, enhancing our App, improving our services, identifying usage trends and determining the effectiveness of our communications. As we believe to be necessary or appropriate: (a) under applicable law, including laws outside your country of residence; (b) to comply with legal process; (c) to respond to requests from public and government authorities including public and government authorities outside your country of residence; (d) to enforce our terms and conditions; (e) to protect our operations or those of any of our affiliates; (f) to protect our rights, privacy, safety or property, and/or that of our affiliates, you or others; and (g) to allow us to pursue available remedies or limit the damages that we may sustain.
                                                </p>
                                                <p class="big">
                                                    <strong>TO WHOM WE DISCLOSE YOUR INFORMATION</strong><br>
                                                    We may disclose your Personal Information and Other Information to any of our group companies or third party service providers (including analytics provider and data storage provider) to the extent required to assist us in providing and managing the App and Services.
                                                </p>
                                                <p class="big">
                                                    In addition, we may disclose your Personal Information and Other Information to third parties:
                                                </p>
                                                <p class="big">
                                                    in the event that we sell or buy any business or assets, in which case we may disclose your Personal Information.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column mcb-item-oqzvon80m one column_divider">
                                            <hr class="no_line" style="margin: 0 auto 60px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BEFORE FOOTER DECORATION  -->
                        <img src="{{ asset('v2/content/one/images/bg-sectionbg4.png') }}">  
                    </div>
                </div>
            @include('v2.partials.footer_search')
            @include('v2.partials.footer_v2')
            </div>
        </div>
    </div>
    
@endsection

@section('after_scripts')

    <script type="text/javascript">

        $(document).ready(function () {
            var menu = $('#menu');
            // $('#' + indexValue).addClass("selectedQuestion");
            $('li[id=privacy_menu]').addClass("current-menu-item");
        });
        var pageNumber = 1;
        var revapi1, tpj;
        ( function() {
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();
                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on")
                            tpj.noConflict();
                    }
                    if (tpj("#rev_slider_1_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                    } else {
                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                            sliderType : "standard",
                            sliderLayout : "fullscreen",
                            dottedOverlay : "none",
                            delay : 9000,
                            navigation : {
                                onHoverStop : "off",
                            },
                            visibilityLevels : [1240, 1024, 778, 480],
                            gridwidth : 1240,
                            gridheight : 800,
                            lazyType : "none",
                            parallax : {
                                type : "mouse",
                                origo : "slidercenter",
                                speed : 3000,
                                speedbg : 0,
                                speedls : 3000,
                                levels : [2, 4, 6, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                            },
                            shadow : 0,
                            spinner : "spinner2",
                            stopLoop : "on",
                            stopAfterLoops : 0,
                            stopAtSlide : 2,
                            shuffle : "off",
                            autoHeight : "off",
                            fullScreenAutoWidth : "off",
                            fullScreenAlignForce : "off",
                            fullScreenOffsetContainer : "",
                            fullScreenOffset : "",
                            disableProgressBar : "on",
                            hideThumbsOnMobile : "off",
                            hideSliderAtLimit : 0,
                            hideCaptionAtLimit : 0,
                            hideAllCaptionAtLilmit : 0,
                            debugMode : false,
                            fallbacks : {
                                simplifyAll : "off",
                                nextSlideOnWindowFocus : "off",
                                disableFocusListener : false,
                            }
                        });
                    };
                };
            }());
    </script>
      <script>
        $(document).ready(function () {
            $("#Content").show();
        });
    </script>
@endsection