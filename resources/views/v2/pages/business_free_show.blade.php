@extends('v2.layouts.single')

@section('after_styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <style>  

        /* SOCIAL MEDIA ICON */
        .icon_bar_facebook .t{
            color:white !important;
            background-color:#3B5998 !important;
            border-radius:3px;
            
        }
        .icon_bar_globe .t{
            color:white !important;
            background-color:#007bb5 !important;
            border-radius:3px;
            
        }
        .icon_bar_twitter .t{
            color:white !important;
            background-color:#55ACEE !important;
            border-radius:3px;
            
        }
        .icon_bar_instagram .t{
            color:white !important;
            background-color:#F75535 !important;
            border-radius:3px;
            
        }

        .business-info a,
        .business-info p
        {
            font-family: "Dosis", Helvetica, Arial, sans-serif;
            line-height: 10px;
            font-size: 18px; 
            font-weight:600;
            color: #44056C;
        }
        
        a .t{
            background-color: white !important;
        }

        .tags,
        .tags i
        {
            font-family: "Dosis", Helvetica, Arial, sans-serif;
            letter-spacing: 0;
            line-height: 25px;
            font-size: 11px;
            color: #666; 

        }
        .tags i{
            margin-right: 10px; 
        }

        .tags a{ 
            text-decoration: underline;
        }

        /* ONLINE PAYMENT */
        .online_payment_btn{
        position: relative;
        display: inline-flex;
        width: 180px;
        height: 55px;
        margin-top:5px;
        perspective: 1000px;
        }
        .online_payment_btn a{
        font-size: 19px;
        letter-spacing: 1px;
        transform-style: preserve-3d;
        transform: translateZ(-25px);
        transition: transform .25s;
        font-family: "dosis",Helvetica,Arial,sans-serif;
        
        }
        .online_payment_btn a:before,
        .online_payment_btn a:after{
        position: absolute;
        content: "Online Payment";
        height: 50px;
        width: 170px;
        display: flex;
        margin-top:5px;
        align-items: center;
        justify-content: center;
        font-weight:600;
        box-sizing: border-box;
        border-radius: 5px;
        }
        .online_payment_btn a:before{
        color: #fff;
        background: #ee2c2c;
        transform: rotateY(0deg) translateZ(25px);
        }
        .online_payment_btn a:after{
        color: #ee2c2c;
        transform: rotateX(90deg) translateZ(25px);
        }
        .online_payment_btn a:hover{
        transform: translateZ(-25px) rotateX(-90deg);
        }

        /* SOCIAL MEDIA LINK */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }.flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-links {
            display: flex;
        }

        .social-btn {
            cursor: pointer;
            height: 50px;
            width: 50px;
            font-family: 'Titillium Web', sans-serif;
            color: #333;
            border-radius: 10px;
            box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
            background: white;
            margin: 5px;
            transition: 1s;
        }

        .social-btn span {
            width: 0px;
            overflow: hidden;
            transition: 1s;
            text-align: center;
        }

        .social-btn:hover {
            width: 150px;
            border-radius: 5px;
        }

        .social-btn:hover span {
            padding: 2px;
            width: max-content;
        }

        #twitter svg {
            fill: #1da1f2;
        }

    </style> 
 <link rel="stylesheet" href="{{ asset('v2/content/one/css/footer_search.css') }}">
@endsection

@section('body_class', "color-custom style-simple button-flat layout-full-width no-content-padding header-split minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu tr-content be-reg-209621")

@section('content')
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                @include('v2.partials.top_bar')
            </header>
        </div>
        <div id="Content" style="background-image:url({{ url('v2/content/one/images/bg-sectionbg6.png')}}); background-size:100%;">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section bg-cover" style="padding-top:15px; padding-bottom:15px; background-image:url({{ url('v2/content/one/images/bg-sectionbg5.jpg')}}); background-repeat:no-repeat; background-position:center top; min-height:110px;">
                        </div>
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px">

                        </div>
                        <div class="text-center" style="padding-bottom:20px;">
                            <h3 style="font-size:60px;"><b>{{ $business->name }}</b></h3>
                        </div>
                            
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="column one column_map" style="margin:0;">
                                                <!-- Google map area -->
                                                <div class="google-map" id="map" name="map" style="width:100%; height:200px;">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section mcb-section " style="padding-top:0px; padding-bottom:0px">
                            <div class="section_wrapper mcb-section-inner business-info">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column one-fourth">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid business-logo-free" src="{{ asset($business->logo) }}">
                                            </div>                  
                                        </div>
                                        <div class="column three-fourth column-margin-10px" >
                                            <div class="column_attr clearfix business-feature" style="padding-left: 20px;">
                                                <hr class="no_line" style="margin:0 auto 5px">
                                                <p>
                                                    <i  class="icon-pinboard"></i>
                                                    {{$business->address1}}, {{$business->baranggay_name}}, {{$business->location_name}}
                                                </p>
                                                <p>
                                                    <i  class="icon-mobile"></i>
                                                    <a href="tel:{{$business->mobile}}"> {{$business->mobile}}</a>
                                                </p>
                                                @if($business->telephone)
                                                <p>
                                                    <i class="icon-phone" ></i>
                                                    <a href="tel:{{$business->telephone}}"> {{$business->telephone}}</a>
                                                </p>
                                                @endif
                                                <p>
                                                    <i class="icon-mail"></i>
                                                    <a href="mailto:{{$business->email}}?Subject=Inquiry from One Pampanga" target="_top"> {{$business->email}}</a>
                                                </p>
                                                {{-- @if($business->website)
                                                <p>
                                                    {{ $business->website }}
                                                </p>
                                                @endif --}}

                                                <hr class="no_line" style="margin:0 auto 10px">

                                                
                                                <p>
                                                    @if(count($tag_categories)>0)
                                                        <h6 class = "tags"><i class="icon-tag"></i>
                                                        @foreach($tag_categories as $tag_category)
                                                            @if($loop->last)
                                                            <a href="{{ asset('businesses/'.$tag_category->category_slug) }}">{{$tag_category->category_name}}</a>
                                                            @else
                                                            <a href="{{ asset('businesses/'.$tag_category->category_slug) }}">{{$tag_category->category_name}}</a>, 
                                                            @endif
                                                        @endforeach
                                                        </h6>
                                                    @endif
                                                </p>

                                                <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,600&display=swap" rel="stylesheet">
                                                        <div class='social-links'>
                                                            <!-- WEBSITE -->
                                                            @if($business->website)
                                                            <a href="{{$business->website}}" target="_blank">
                                                                <div class='social-btn flex-center'>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="#7CB342" d="M24 4C13 4 4 13 4 24s9 20 20 20s20-9 20-20S35 4 24 4z"/><path fill="#0277BD" d="M45 24c0 11.7-9.5 21-21 21S3 35.7 3 24S12.3 3 24 3s21 9.3 21 21zm-21.2 9.7c0-.4-.2-.6-.6-.8c-1.3-.4-2.5-.4-3.6-1.5c-.2-.4-.2-.8-.4-1.3c-.4-.4-1.5-.6-2.1-.8h-4.2c-.6-.2-1.1-1.1-1.5-1.7c0-.2 0-.6-.4-.6c-.4-.2-.8.2-1.3 0c-.2-.2-.2-.4-.2-.6c0-.6.4-1.3.8-1.7c.6-.4 1.3.2 1.9.2c.2 0 .2 0 .4.2c.6.2.8 1 .8 1.7v.4c0 .2.2.2.4.2c.2-1.1.2-2.1.4-3.2c0-1.3 1.3-2.5 2.3-2.9c.4-.2.6.2 1.1 0c1.3-.4 4.4-1.7 3.8-3.4c-.4-1.5-1.7-2.9-3.4-2.7c-.4.2-.6.4-1 .6c-.6.4-1.9 1.7-2.5 1.7c-1.1-.2-1.1-1.7-.8-2.3c.2-.8 2.1-3.6 3.4-3.1l.8.8c.4.2 1.1.2 1.7.2c.2 0 .4 0 .6-.2c.2-.2.2-.2.2-.4c0-.6-.6-1.3-1-1.7c-.4-.4-1.1-.8-1.7-1.1c-2.1-.6-5.5.2-7.1 1.7s-2.9 4-3.8 6.1c-.4 1.3-.8 2.9-1 4.4c-.2 1-.4 1.9.2 2.9c.6 1.3 1.9 2.5 3.2 3.4c.8.6 2.5.6 3.4 1.7c.6.8.4 1.9.4 2.9c0 1.3.8 2.3 1.3 3.4c.2.6.4 1.5.6 2.1c0 .2.2 1.5.2 1.7c1.3.6 2.3 1.3 3.8 1.7c.2 0 1-1.3 1-1.5c.6-.6 1.1-1.5 1.7-1.9c.4-.2.8-.4 1.3-.8c.4-.4.6-1.3.8-1.9c.1-.5.3-1.3.1-1.9zm.4-19.4c.2 0 .4-.2.8-.4c.6-.4 1.3-1.1 1.9-1.5c.6-.4 1.3-1.1 1.7-1.5c.6-.4 1.1-1.3 1.3-1.9c.2-.4.8-1.3.6-1.9c-.2-.4-1.3-.6-1.7-.8c-1.7-.4-3.1-.6-4.8-.6c-.6 0-1.5.2-1.7.8c-.2 1.1.6.8 1.5 1.1c0 0 .2 1.7.2 1.9c.2 1-.4 1.7-.4 2.7c0 .6 0 1.7.4 2.1h.2zM41.8 29c.2-.4.2-1.1.4-1.5c.2-1 .2-2.1.2-3.1c0-2.1-.2-4.2-.8-6.1c-.4-.6-.6-1.3-.8-1.9c-.4-1.1-1-2.1-1.9-2.9c-.8-1.1-1.9-4-3.8-3.1c-.6.2-1 1-1.5 1.5c-.4.6-.8 1.3-1.3 1.9c-.2.2-.4.6-.2.8c0 .2.2.2.4.2c.4.2.6.2 1 .4c.2 0 .4.2.2.4c0 0 0 .2-.2.2c-1 1.1-2.1 1.9-3.1 2.9c-.2.2-.4.6-.4.8c0 .2.2.2.2.4s-.2.2-.4.4c-.4.2-.8.4-1.1.6c-.2.4 0 1.1-.2 1.5c-.2 1.1-.8 1.9-1.3 2.9c-.4.6-.6 1.3-1 1.9c0 .8-.2 1.5.2 2.1c1 1.5 2.9.6 4.4 1.3c.4.2.8.2 1.1.6c.6.6.6 1.7.8 2.3c.2.8.4 1.7.8 2.5c.2 1 .6 2.1.8 2.9c1.9-1.5 3.6-3.1 4.8-5.2c1.5-1.3 2.1-3 2.7-4.7z"/></svg>
                                                                </div>
                                                            </a>
                                                            @endif
                                                            <!-- FACEBOOK -->
                                                            @if($business->facebook)
                                                            <a href="{{$business->facebook}}" target="_blank">
                                                                <div class='social-btn flex-center'>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path d="M9.5 3H12V0H9.5C7.57 0 6 1.57 6 3.5V5H4v3h2v8h3V8h2.5l.5-3H9V3.5c0-.271.229-.5.5-.5z" fill="#2e467b"/></svg>
                                                                </div>
                                                            </a>
                                                            @endif
                                                            <!-- TWITTER -->
                                                            @if($business->twitter)
                                                            <a href="http://twitter.com/{{$business->twitter}}" target="_blank">
                                                                <div class='social-btn flex-center' id="twitter">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                                                    <span>@</span><span>{{$business->twitter}}</span>
                                                                </div>
                                                            </a>
                                                            @endif
                                                            <!-- INSTAGRAM -->
                                                            @if($business->instagram)
                                                            <a href="http://instagram.com/{{$business->instagram}}" target="_blank">
                                                                <div class='social-btn flex-center' id="linkedin">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.465 1.066C8.638 1.012 9.012 1 12 1c2.988 0 3.362.013 4.534.066c1.172.053 1.972.24 2.672.511c.733.277 1.398.71 1.948 1.27c.56.549.992 1.213 1.268 1.947c.272.7.458 1.5.512 2.67C22.988 8.639 23 9.013 23 12c0 2.988-.013 3.362-.066 4.535c-.053 1.17-.24 1.97-.512 2.67a5.396 5.396 0 0 1-1.268 1.949c-.55.56-1.215.992-1.948 1.268c-.7.272-1.5.458-2.67.512c-1.174.054-1.548.066-4.536.066c-2.988 0-3.362-.013-4.535-.066c-1.17-.053-1.97-.24-2.67-.512a5.397 5.397 0 0 1-1.949-1.268a5.392 5.392 0 0 1-1.269-1.948c-.271-.7-.457-1.5-.511-2.67C1.012 15.361 1 14.987 1 12c0-2.988.013-3.362.066-4.534c.053-1.172.24-1.972.511-2.672a5.396 5.396 0 0 1 1.27-1.948a5.392 5.392 0 0 1 1.947-1.269c.7-.271 1.5-.457 2.67-.511zm8.98 1.98c-1.16-.053-1.508-.064-4.445-.064c-2.937 0-3.285.011-4.445.064c-1.073.049-1.655.228-2.043.379c-.513.2-.88.437-1.265.822a3.412 3.412 0 0 0-.822 1.265c-.151.388-.33.97-.379 2.043c-.053 1.16-.064 1.508-.064 4.445c0 2.937.011 3.285.064 4.445c.049 1.073.228 1.655.379 2.043c.176.477.457.91.822 1.265c.355.365.788.646 1.265.822c.388.151.97.33 2.043.379c1.16.053 1.507.064 4.445.064c2.938 0 3.285-.011 4.445-.064c1.073-.049 1.655-.228 2.043-.379c.513-.2.88-.437 1.265-.822c.365-.355.646-.788.822-1.265c.151-.388.33-.97.379-2.043c.053-1.16.064-1.508.064-4.445c0-2.937-.011-3.285-.064-4.445c-.049-1.073-.228-1.655-.379-2.043c-.2-.513-.437-.88-.822-1.265a3.413 3.413 0 0 0-1.265-.822c-.388-.151-.97-.33-2.043-.379zm-5.85 12.345a3.669 3.669 0 0 0 4-5.986a3.67 3.67 0 1 0-4 5.986zM8.002 8.002a5.654 5.654 0 1 1 7.996 7.996a5.654 5.654 0 0 1-7.996-7.996zm10.906-.814a1.337 1.337 0 1 0-1.89-1.89a1.337 1.337 0 0 0 1.89 1.89z" fill="#f24a37"/></svg>
                                                                    <span>/{{$business->instagram}}</span>
                                                                </div>
                                                            </a>
                                                            @endif
                                                           
                                                           
                                                             
                                                             
                                                        </div>
                                                        @if($business->paybizWallet)
                                                            @if($business->paybizWallet->active)
                                                            <!-- ONLINE PAYMENT -->
                                                                <div class="online_payment_btn"><a href="#"></a></div>
                                                            @endif
                                                        @endif  

                                            </div>

                                            
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section mcb-section no-margin-v" style="padding-top:0px; padding-bottom:0px">
                            <div class="section_wrapper mcb-section-inner">

                                <div class="wrap mcb-wrap one valign-top clearfix" style="padding:20px 0 0 0">
                                    <div class="mcb-wrap-inner">
                                        @if($business->description)
                                            <div class="column mcb-column one-second column_column">
                                                <div class="column_attr clearfix mobile_align_center">
                                                    <h4>Description</h4>
                                                </div>
                                            </div>
                                            <div class="column mcb-column one column_column">
                                                <div class="column_attr clearfix align_left mobile_align_center" style="border-bottom:1px solid #d4ceca;">
                                                    {!! $business->description !!}
                                                </div>

                                                <hr>
                                            </div>
                                        @endif
                                        
                                        @if($business->about)
                                            {{-- <div class="column mcb-column one column_column">
                                                <div class="column_attr clearfix mobile_align_center">
                                                    <h4>About</h4>
                                                </div>
                                            </div> --}}
                                            <div class="column mcb-column one column_column">
                                                <div class="column_attr clearfix align_left mobile_align_center" style=" border-bottom:1px solid #d4ceca;">
                                                    {!! $business->about !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <img src="{{ asset('v2/content/one/images/bg-sectionbg4.png') }}">  
            @include('v2.partials.footer_search')
            @include('v2.partials.footer_v2')
        </div>
    </div>
@endsection

@section('after_scripts')
  
    <script>
        $(document).ready(function () {
            var menu = $('#menu');
            // $('#' + indexValue).addClass("selectedQuestion");
            $('li[id=faq_menu]').addClass("current-menu-item")
            
        });
    
    </script>

    <!-- GOOGLE MAPS SCRIPT -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVBcx1Fi-u32Cec-QaXpaPL7NTt3G6HHQ&map_ids=8f49a54f3d37eefa&callback=initMap&libraries=&v=weekly" async></script>
    <script>
        var latLong;
        var latitude;
        var longitude;
        let marker;

        latitude  = {{ $business->latitude ? $business->latitude : 0 }};
        longitude = {{ $business->longitude ? $business->longitude : 0 }};

        function initMap()
        {
            const myLatlng = { lat: latitude ? latitude : 15.04426482138687, lng: longitude ? longitude : 120.68958740315281 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatlng,
                mapId: '8f49a54f3d37eefa',
            });

            // Create / Show Marker
            marker = new google.maps.Marker({
                map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                position: myLatlng,
            });

            // Create the initial InfoWindow.
            // let infoWindow = new google.maps.InfoWindow({
            //     // content: "Set your business location by gradding and clicking the map.",
            //     position: myLatlng,
            // });
            // infoWindow.open(map);

        }
    </script>
@endsection

