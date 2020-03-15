<!Doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="TravelMasters"/>
    <meta name="description" content="Immigration and Visa Consulting with Migration Masters"/>
    <meta name="keywords" content=" Travel, Canada, Coaching, Consulting, Mauritius, Immigration, Visa">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>..:: @yield('title') - {{ config('app.name', 'Immigration and Visa Consulting') }} ::.. </title>




    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}" type="text/css" charset="utf-8" />
{{--    <link media="all" href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
{{--    <link media="all" href="{{ asset('css/main.css') }}" rel="stylesheet">--}}

    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="apple-touch-icon.html" type="image/x-icon">

    <!-- GOOGLE FONTS -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONT ICONS -->

    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link id="effect" href="{{ asset('css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
    <link href="{{ asset('css/tweenmax.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{ asset('css/red.css') }}" rel="stylesheet">

    <!-- STYLE SWITCHER CSS -->
{{--    <link href="css/aqua.css" rel="alternate stylesheet" title="aqua-theme">--}}
{{--    <link href="css/blue.css" rel="alternate stylesheet" title="blue-theme">--}}
{{--    <link href="css/darkred.css" rel="alternate stylesheet" title="darkred-theme">--}}
{{--    <link href="css/green.css" rel="alternate stylesheet" title="green-theme">--}}
{{--    <link href="css/olive.css" rel="alternate stylesheet" title="olive-theme">--}}
{{--    <link href="css/orange.css" rel="alternate stylesheet" title="orange-theme">--}}
{{--    <link href="css/salmon.css" rel="alternate stylesheet" title="salmon-theme">--}}
{{--    <link href="css/teal.css" rel="alternate stylesheet" title="teal-theme">--}}
{{--    <link href="css/yellow.css" rel="alternate stylesheet" title="yellow-theme">--}}

    <!-- RESPONSIVE CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body>




<h4>@yield('auth-header')</h4>


<!-- PRELOADER SPINNER
		============================================= -->
<div id="loader-wrapper">
    <div id="loader"><div class="cssload-box-loading"></div></div>
</div>




<!-- PAGE CONTENT
============================================= -->
<div id="page" class="page">




    <!-- HEADER
    ============================================= -->
    <header id="header-2" class="header white-menu">
        <div class="header-wrapper"  id="app">


            <!-- MOBILE HEADER -->
            <div class="wsmobileheader clearfix">
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                <span class="smllogo"><img src="{{ asset('images/logo-black.png') }}" width="180" height="65" alt="mobile-logo"/></span>
                <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
            </div>


            <!-- HEADER STRIP -->
            <div class="headtoppart bg-white clearfix">
                <div class="headerwp clearfix">

                    <!-- Infotmation -->
                    <div class="headertopleft">

                        <div class="header-info clearfix">

                            @guest
                               <span class="txt-400"><i class="fas fa-user-alt"></i> Welcome Guest!</span>
                            @else
                                {{--                            <a href="{{ route('dashboard') }}" class="header-btn btn-primary tra-black-hover last-link">DashBoard</a>--}}
                                {{--                           --}}
                                <span class="txt-400"><i class="fas fa-user-alt"></i>  Hi {{{ Auth::user()->name }}},</span>
                                <a class="header-btn btn-primary tra-black-hover last-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest



                        </div>
                    </div>

                    <!-- Contacts -->
                    <div class="headertopright header-contacts">
                        <a href="tel:123456789" class="callusbtn txt-400"><i class="fas fa-phone"></i>+230 57241414,</a>
                        <a href="tel:123456789" class="callusbtn b-right txt-400">&#8194;+1 730 005 7686</a>
                        <a href="mailto:findus@@migrationmasters.consulting" class="txt-400"><i class="far fa-envelope-open"></i>findus@migrationmasters.consulting</a>
                    </div>

                </div>
            </div>	<!-- END HEADER STRIP -->


            <!-- NAVIGATION MENU -->
            <div class="wsmainfull menu clearfix">
                <div class="wsmainwp clearfix">


                    <!-- LOGO IMAGE -->
                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 90 pixels) -->
                    <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-blackk"><img src="{{ asset('images/logo-blackk.png') }}" width="180" height="60" alt="header-logo"></a></div>
                    <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-white"><img src="{{ asset('images/logo-white.png') }}" width="180" height="60" alt="header-logo"></a></div>


                    <!-- MAIN MENU -->
                    <nav class="wsmenu clearfix blue-header">
                        <ul class="wsmenu-list">


                            <!-- DROPDOWN MENU -->
                            <li ><a href="/">Home</a>
{{--                                <ul class="sub-menu">--}}
{{--                                    <li aria-haspopup="true"><a href="demo-1.html">Homepage-1</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-2.html">Homepage-2</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-4.html">Homepage-4</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-5.html">Homepage-5</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-6.html">Homepage-6</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-7.html">Homepage-7</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-8.html">Homepage-8</a></li>--}}
{{--                                    <li aria-haspopup="true"><a href="demo-9.html">Homepage-9</a></li>--}}
{{--                                </ul>--}}
                            </li>	<!-- END DROPDOWN MENU -->

                            <li><a href="about">About Us</a>
                            <li><a href="/faq">Faq</a>
{{--                            <!-- PAGES -->--}}
{{--                            <li aria-haspopup="true"><a href="#">Pages <span class="wsarrow"></span></a>--}}
{{--                                <div class="wsmegamenu clearfix">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="row">--}}

{{--                                            <!-- MEGAMENU LINKS -->--}}
{{--                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list">--}}
{{--                                                <li class="title">Standard Pages:</li>--}}
{{--                                                <li><a href="about.html">About Us Page</a></li>--}}
{{--                                                <li><a href="courses-list.html">Courses List Page</a></li>--}}
{{--                                                <li><a href="course-details.html">Course Details Page</a></li>--}}
{{--                                                <li><a href="partners.html">Partners & Colleges</a></li>--}}
{{--                                                <li><a href="faqs.html">FAQs Page</a></li>--}}
{{--                                            </ul>--}}

{{--                                            <!-- MEGAMENU LINKS -->--}}
{{--                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list">--}}
{{--                                                <li class="title">Special Pages:</li>--}}
{{--                                                <li><a href="country-details.html">Countries List Page</a></li>--}}
{{--                                                <li><a href="country-details.html">Country Details Page</a></li>--}}
{{--                                                <li><a href="visa-list-1.html">Visa List Page #1</a></li>--}}
{{--                                                <li><a href="visa-list-2.html">Visa List Page #2</a></li>--}}
{{--                                                <li><a href="visa-details.html">Visa Details Page</a></li>--}}
{{--                                            </ul>--}}

{{--                                            <!-- MEGAMENU LINKS -->--}}
{{--                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list">--}}
{{--                                                <li class="title">Auxiliary Pages:</li>--}}
{{--                                                <li><a href="blog-listing.html">Blog Listing Page</a></li>--}}
{{--                                                <li><a href="single-post.html">Single Blog Post</a></li>--}}
{{--                                                <li><a href="contacts-1.html">Contact Style #1</a></li>--}}
{{--                                                <li><a href="contacts-2.html">Contact Style #2</a></li>--}}
{{--                                                <li><a href="contacts-3.html">Contact Style #3</a></li>--}}
{{--                                            </ul>--}}

{{--                                        </div>  <!-- End row -->--}}
{{--                                    </div>  <!-- End container -->--}}
{{--                                </div>  <!-- End wsmegamenu -->--}}
{{--                            </li>	<!-- END PAGES -->--}}


                            <!-- MEGAMENU -->
                            <li aria-haspopup="true"><a href="#">Services <span class="wsarrow"></span></a>
                                <div class="wsmegamenu clearfix">
                                    <div class="container">
                                        <div class="row">


                                            <!-- MEGAMENU QUICK LINKS -->
                                            <div class="col-md-12 col-lg-3">

                                                <!-- Title -->
                                                <h3 class="title">What We Offer:</h3>

                                                <ul class="link-list">
                                                    @foreach($services as $service)
                                                    <li><a href="/services/{{$service->slug ?? ''}}">{{$service->title ?? ''}}</a></li>

                                                        @endforeach
                                                </ul>

                                            </div>	<!-- END MEGAMENU QUICK LINKS -->


                                            <!-- MEGAMENU FEATURED NEWS -->
                                            <div class="col-md-12 col-lg-5">

                                                <!-- Title -->
                                                <h3 class="title">Featured News:</h3>

                                                <!-- Image -->
                                                <div class="fluid-width-video-wrapper mb-15"><img src="{{url('/storage/'.$articles[0]->featured_image)}}" alt="featured-news" /></div>

                                                <!-- Text -->
                                                <h5 class="h5-md"><a href="/articles/{{$articles[0]->slug ?? ''}}">{{$articles[0]->title ?? ''}}</a></h5>
                                                <p class="wsmwnutxt">{{$articles[0]->excerpt ?? ''}}
                                                </p>

                                            </div>	<!-- END MEGAMENU FEATURED NEWS -->


                                            <!-- MEGAMENU LATEST NEWS -->
                                            <div class="col-md-12 col-lg-4">

                                                <!-- Title -->
                                                <h3 class="title">Latest News:</h3>

                                                <!-- Latest News -->
                                                <ul class="latest-news">

                                                    <!-- Post #1 -->
                                                    <li class="clearfix d-flex align-items-center">

                                                        <!-- Image -->
                                                        <img class="img-fluid" src="{{url('/storage/'.$articles [0]->featured_image) ?? ''}}" alt="blog-post-preview" />

                                                        <!-- Text -->
                                                        <div class="post-summary">
                                                            <a href="/articles/{{$articles[0]->slug ?? ''}}">{{$articles[0]->title ?? ''}}</a>
                                                            <p>43 Comments</p>
                                                        </div>

                                                    </li>

                                                    <!-- Post #2 -->
                                                    <li class="clearfix d-flex align-items-center">

                                                        <!-- Image -->
                                                        <img class="img-fluid" src="{{url('/storage/'.$articles[1]->featured_image) ?? ''}}" alt="blog-post-preview" />

                                                        <!-- Text -->
                                                        <div class="post-summary">
                                                            <a href="/articles/{{$articles[1]->slug ?? '' }}">{{$articles[1]->title ?? ''}}</a>
                                                            <p>38 Comments</p>
                                                        </div>

                                                    </li>

                                                    <!-- Post #3 -->
                                                    <li class="clearfix d-flex align-items-center">

                                                        <!-- Image -->
                                                        <img class="img-fluid" src="{{url('/storage/'.$articles[2]->featured_image) ?? ''}}" alt="blog-post-preview" />

                                                        <!-- Text -->
                                                        <div class="post-summary">
                                                            <a href="/articles/{{$articles[2]->slug ?? ''}}">{{$articles[2]->title ?? ''}}</a>
                                                            <p>29 Comments</p>
                                                        </div>

                                                    </li>
                                                </ul>
                                            </div>	<!-- END MEGAMENU LATEST NEWS -->


                                        </div>  <!-- End row -->
                                    </div>  <!-- End container -->
                                </div>  <!-- End wsmegamenu -->
                            </li>	<!-- END MEGAMENU -->


                            <!-- SIMPLE NAVIGATION LINK -->
                            <li class="nl-simple" aria-haspopup="true"><a href="contact">Contact Us</a></li>


                            <!-- LAST NAVIGATION LINK -->
                            <li class="nl-simple" aria-haspopup="true">
                                @guest
                                <a href="{{ route('dashboard') }}" class="header-btn btn-primary tra-black-hover last-link">Get Started</a>
                                    @else
                                    <a href="{{ route('dashboard') }}" class="header-btn btn-primary tra-black-hover last-link">DashBoard</a>
                                @endguest
                            </li>


                        </ul>
                    </nav>	<!-- END MAIN MENU -->

                </div>
            </div>	<!-- END NAVIGATION MENU -->


        </div>     <!-- End header-wrapper -->
    </header>	<!-- END HEADER -->


@yield('content')


    <!-- FOOTER-1
    ============================================= -->
    <footer id="footer-1" class="bg-blue-map wide-40 footer division">
        <div class="container white-color">


            <!-- FOOTER CONTENT -->
            <div class="row">


                <!-- FOOTER INFO -->
                <div class="col-lg-4 col-xl-3">
                    <div class="footer-info mb-40">

                        <!-- Footer Logo -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 400 x 100 pixels) -->
                        <img src="images/logo-white.png" width="200" height="70" alt="footer-logo">

                        <!-- Text -->
                        <p class="mt-25">Aliquam orci a nullam tempor and sapien gravida donec enim ipsum porta
                            justo velna auctor a congue magna laoreet augue sapien
                        </p>

                    </div>
                </div>


                <!-- FOOTER CONTACTS -->
                <div class="col-lg-3 col-xl-3">
                    <div class="footer-box mb-40">

                        <!-- Title -->
                        <h5 class="h5-md">Head Office</h5>

                        <!-- Address -->
                        <p>Avenue Des Melon, Flic en Flac</p>
                        <p>Black River Business District, Mauritius</p>

                        <!-- Phone -->
                        <p class="mt-20">Phone: +230 57241414</p>

                        <!-- Email -->
                        <p class="foo-email">Email: <a href="mailto:findus@migrationmasters.consulting">findus@migrationmasters.consulting</a></p>

                        <!-- Phone -->
                        <p>Office Time: 9AM - 6PM</p>

                    </div>
                </div>


                <!-- FOOTER LINKS -->
                <div class="col-lg-2 col-xl-3">
                    <div class="footer-links mb-40">

                        <!-- Title -->
                        <h5 class="h5-md">Quick Links</h5>

                        <!-- Footer Links -->
                        <ul class="foo-links clearfix">
                            <li><a href="#">About MigrationMasters</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Fees</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">From the Blog</a></li>
                        </ul>

                    </div>
                </div>


                <!-- FOOTER NEWSLETTER FORM -->
                <div class="col-lg-3 col-xl-3">
                    <div class="footer-form mb-20">

                        <!-- Title -->
                        <h5 class="h5-md">Stay Informed</h5>

                        <!-- Text -->
                        <p>Subscribe to our newsletters to get the latest news</p>

<newsletter-form></newsletter-form>

                    </div>
                </div>


            </div>	  <!-- END FOOTER CONTENT -->


            <!-- BOTTOM FOOTER -->
            <div class="bottom-footer">
                <div class="row d-flex align-items-center">


                    <!-- FOOTER COPYRIGHT -->
                    <div class="col-lg-6">
                        <p class="footer-copyright">&copy; Copyright <span>MigrationMasters 20<?php echo date('y')?></span>. All Rights Reserved</p>
                    </div>


                    <!-- FOOTER SOCIALS LINKS -->
                    <div class="col-lg-6 text-right">
                        <ul class="foo-socials text-center clearfix">

                            <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>

                            <!--
                            <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
                            <li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
                            <li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
                            -->

                        </ul>
                    </div>


                </div>
            </div>	<!-- END BOTTOM FOOTER -->


        </div>	   <!-- End container -->
    </footer>	<!-- END FOOTER-1 -->




</div>	<!-- END PAGE CONTENT -->




<script src="{{ asset('js/app.js') }}"></script>
<!-- EXTERNAL SCRIPTS
============================================= -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/materialize.js"></script>
<script src="js/jquery.scrollto.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<!-- Custom Script -->
<script src="js/custom.js"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!-- [if lt IE 9]>
    <script src="js/html5shiv.js" type="text/javascript"></script>
    <script src="js/respond.min.js" type="text/javascript"></script>
</body>
</html>

<script>
    import NewsletterForm from "../../js/components/NewsletterForm";

    export default {
        components: {NewsletterForm}
    }
</script>
