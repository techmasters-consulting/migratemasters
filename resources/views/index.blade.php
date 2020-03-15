@extends('layouts.main')

@section('content')
{{--    @parent--}}

    <!-- HERO-3
   ============================================= -->
    <section id="hero-3"  class="bg-scroll hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- HERO TEXT -->
                <div class="col-lg-7 col-xl-7">
                    <div class="hero-3-txt mb-40">



                        <!-- Title -->
                        <h2 class="darkblue-color">Professional Assistance of Visas and Immigration</h2>

                        <!-- Text Box #1 -->

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>

                            <p class="p-md">Professional Assistance of Study Abroad Processes
                            </p>

                        </div>
                        <!-- Text Box #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p class="p-md">Professional Assistance of Work Abroad Processes
                            </p>

                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>

                            <p class="p-md">Professional Assistance of Relocation Processes
                        </p>
                    </div>


                    </div>
                </div>	<!-- END HERO TEXT -->


                <!-- HERO REQUEST FORM -->
                <div  class="col-lg-5 col-xl-5">

                    @guest

                        <consultation-form></consultation-form>
                    @else
                        <div data-v-86e98a50="" role="alert" class="  spacing" >
                            <span class="darkblue-color">Ready for take off?</span>
                            <iframe id="cover-video" src="https://player.vimeo.com/video/324214320?api=1&amp;background=1&amp;mute=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" data-ready="true" frameborder="0"></iframe>
                            <span class="darkblue-color">

           </span>
                        </div>
                    @endguest
                </div>	<!-- END HERO REQUEST FORM -->


            </div>     <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END HERO-3 -->




    <!-- CALL TO ACTION-3
    ============================================= -->
    <section id="cta-3" class="bg-darkblue cta-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-12">
                    <div class="cta-txt text-center">
                        <h4 class="h4-xs txt-400">Need immigration & visa consultation? Send a request for free consultation using the form above.</h4>
                    </div>
                </div>


            </div>	  <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CALL TO ACTION-3 -->




    <!-- SERVICES-4
    ============================================= -->
    <section id="services-4" class="wide-70 services-section division">
        <div class="container">
            <div class="row">


                <!-- SERVICE BOX #1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="visa-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-431-bank"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md">Education Visa</h5>
                                <p>We are there to help you enrol at a qualified educational institution and obtain your student visa in any country of your choice.</p>
                            </div>

                        </a>
                    </div>
                </div>


                <!-- SERVICE BOX #2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="visa-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-033-user-2"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md">Job Seeker Visa</h5>
                                <p>This type of visa allows you to work in a certain country of your choice through a specific period of time and we are here to ensure that you collect this visa and simplify the process for obtaining it.</p>
                            </div>

                        </a>
                    </div>
                </div>


                <!-- SERVICE BOX #3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="visa-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-397-briefcase"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md">Business Visa</h5>
                                <p>This is a short term visa for business negotiations, discussions/presentations and our job is to assist you obtain it in case you are looking to travel abroad for a business trip.</p>
                            </div>

                        </a>
                    </div>
                </div>


                <!-- SERVICE BOX #4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="visa-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-102-sign"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md">PR Visa</h5>
                                <p>Our organization is there to assist you when looking for a permanent residential visa, which will allow you to live and work in any country of your choice on a permanent basis.</p>
                            </div>

                        </a>
                    </div>
                </div>


                <!-- SERVICE BOX #5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="visa-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-285-internet-2"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md">Tourist & Visitor Visa</h5>
                                <p>If you’re looking to have a good time abroad, then migration masters is the right agency for you, we are here to ensure that your tourist visa is processed on time and your journey is safe.</p>
                            </div>

                        </a>
                    </div>
                </div>


                <!-- SERVICE BOX #6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="visa-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-265-question"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md">Immigration Consult</h5>
                                <p>Our Company has consultants who would advise and assist you on emigrating from one country to another through legal and documentation process, to increase the chances of immigration for study, work, travel or business purpose.</p>
                            </div>

                        </a>
                    </div>
                </div>


            </div>    <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END SERVICES-4 -->




    <!-- HORIZONTAL GREY LINE -->
    <div class="section-divider"><div class="container"><div class="row"><div class="grey-border"></div></div></div></div>





    <!-- ABOUT-4
    ============================================= -->
    <section id="about-4" class="bg-lightgrey bg-tra-city pt-100 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- ABOUT TEXT -->
                <div class="col-lg-7 col-xl-6">
                    <div class="about-4-txt mb-40">

                        <!-- Section ID -->
                        <span class="section-id id-color">Professional Advisors</span>

                        <!-- Title -->
                        <h3 class="h3-lg darkblue-color">We provide the best consulting services in the industry since 2009</h3>

                        <!-- Text #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Our Company has a team of highly qualified and experienced consultants who have worked, studied and lived abroad, these consultants have travelled from time to time and they would love to advise and assist you according to their live experience on emigrating from country to country, through legal documentation process and to increase the chances of immigration for study, work, travel or business purpose.
                            </p>
                        </div>

                        <!-- Text #2 -->
                        <!--
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Quaerat sodales sapien undo euismod risus auctor egestas augue mauri undo viverra tortor
                                sapien sodales sapien and vitae donec  gravida donec enim blandit ipsum at porta justo integer
                            </p>
                        </div>
                        -->

                        <!-- Button -->
                        <a href="tel:123456789" class="btn btn-md btn-primary black-hover">
                            Call: +12 9 8765 4321
                        </a>

                    </div>
                </div> <!-- END ABOUT TEXT -->


                <!-- SERVICES IMAGE -->
                <div class="col-lg-5 col-xl-5 offset-xl-1">
                    <div class="about-4-img text-center">
                        <img class="img-fluid" src="images/image-04.png" alt="about-image" />
                    </div>
                </div>


            </div>    <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END ABOUT-4 -->




{{--    <!-- STATISTIC-2--}}
{{--    ============================================= -->--}}
{{--    <div id="statistic-2" class="bg-blue-map wide-60 statistic-section division">--}}
{{--        <div class="container">--}}


{{--            <!-- SECTION TITLE -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 section-title white-color center">--}}

{{--                    <!-- Title -->--}}
{{--                    <h2 class="h2-xs 1darkblue-color">Why Choose VisaPRO?</h2>--}}

{{--                    <!-- Text -->--}}
{{--                    <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,--}}
{{--                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa--}}
{{--                    </p>--}}

{{--                </div>--}}
{{--            </div>	 <!-- END SECTION TITLE -->--}}


{{--            <div class="row">--}}


{{--                <!-- STATISTIC BLOCK #1 -->--}}
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="statistic-block icon-sm">--}}

{{--                        <!-- Icon -->--}}
{{--                        <span class="flaticon-316-mortarboard darkblue-color"></span>--}}

{{--                        <!-- Text -->--}}
{{--                        <h5 class="primary-color"><span class="count-element">820</span>+</h5>--}}
{{--                        <p class="p-md darkblue-color">Students</p>--}}

{{--                        <!-- Text -->--}}
{{--                        <p>The magnis pretium dolor sapien  augue iaculis purus as tempor magna pretium undo ipsum--}}
{{--                            purus a primis undo at ligula luctus--}}
{{--                        </p>--}}

{{--                        <!-- Link -->--}}
{{--                        <a href="#" class="darkblue-color">Read Testimonials</a>--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--                <!-- STATISTIC BLOCK #2 -->--}}
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="statistic-block icon-sm">--}}

{{--                        <!-- Icon -->--}}
{{--                        <span class="flaticon-431-bank darkblue-color"></span>--}}

{{--                        <!-- Text -->--}}
{{--                        <h5 class="primary-color"><span class="count-element">127</span></h5>--}}
{{--                        <p class="p-md darkblue-color">Universities</p>--}}

{{--                        <!-- Text -->--}}
{{--                        <p>The magnis pretium dolor sapien  augue iaculis purus as tempor magna pretium undo ipsum--}}
{{--                            purus a primis undo at ligula luctus--}}
{{--                        </p>--}}

{{--                        <!-- Link -->--}}
{{--                        <a href="#" class="darkblue-color">Meet Partners</a>--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--                <!-- STATISTIC BLOCK #3 -->--}}
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="statistic-block icon-sm">--}}

{{--                        <!-- Icon -->--}}
{{--                        <span class="flaticon-285-internet-2 darkblue-color"></span>--}}

{{--                        <!-- Text -->--}}
{{--                        <h5 class="primary-color"><span class="count-element">81</span></h5>--}}
{{--                        <p class="p-md darkblue-color">Countries</p>--}}

{{--                        <!-- Text -->--}}
{{--                        <p>The magnis pretium dolor sapien  augue iaculis purus as tempor magna pretium undo ipsum--}}
{{--                            purus a primis undo at ligula luctus--}}
{{--                        </p>--}}

{{--                        <!-- Link -->--}}
{{--                        <a href="#" class="darkblue-color">View Countries</a>--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--                <!-- STATISTIC BLOCK #4 -->--}}
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="statistic-block icon-sm">--}}

{{--                        <!-- Icon -->--}}
{{--                        <span class="flaticon-067-suitcase-1 darkblue-color"></span>--}}

{{--                        <!-- Text -->--}}
{{--                        <h5 class="primary-color"><span class="count-element">969</span></h5>--}}
{{--                        <p class="p-md darkblue-color">Immigrations</p>--}}

{{--                        <!-- Text -->--}}
{{--                        <p>The magnis pretium dolor sapien  augue iaculis purus as tempor magna pretium undo ipsum--}}
{{--                            purus a primis undo at ligula luctus--}}
{{--                        </p>--}}

{{--                        <!-- Link -->--}}
{{--                        <a href="#" class="darkblue-color">Read More</a>--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>	<!-- End row -->--}}
{{--        </div>	 <!-- End container -->--}}
{{--    </div>	 <!-- END STATISTIC-2 -->--}}




    <!-- ABOUT-5
    ============================================= -->
{{--    <section id="about-5" class="wide-60 about-section division">--}}
{{--        <div class="container">--}}


{{--            <!-- SECTION TITLE -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 section-title">--}}

{{--                    <!-- Title -->--}}
{{--                    <h3 class="h3-lg darkblue-color">Find a consultant by:</h3>--}}

{{--                    <!-- Text -->--}}
{{--                    <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,--}}
{{--                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa--}}
{{--                    </p>--}}

{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="row">--}}


{{--                <!-- ABOUT TEXT	-->--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="row">--}}

{{--                        <div class="col-sm-6">--}}
{{--                            <div class="about-5-txt mb-40">--}}

{{--                                <!-- Title -->--}}
{{--                                <h5 class="h5-xl darkblue-color">Country:</h5>--}}

{{--                                <!-- List -->--}}
{{--                                <ul class="abox-list">--}}
{{--                                    <li><a href="#">Canada</a></li>--}}
{{--                                    <li><a href="#">Australia</a></li>--}}
{{--                                    <li><a href="#">United Kingdom</a></li>--}}
{{--                                    <li><a href="#">USA</a></li>--}}
{{--                                    <li><a href="#">Germany</a></li>--}}
{{--                                    <li><a href="#">Netherlands</a></li>--}}
{{--                                    <li class="more-info-link darkblue-color"><a href="#">View All</a></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-sm-6">--}}
{{--                            <div class="about-5-txt mb-40">--}}

{{--                                <!-- Title -->--}}
{{--                                <h5 class="h5-xl darkblue-color">Pratice Area:</h5>--}}

{{--                                <!-- List -->--}}
{{--                                <ul class="abox-list">--}}
{{--                                    <li><a href="#">Student Visa</a></li>--}}
{{--                                    <li><a href="#">Working Visa</a></li>--}}
{{--                                    <li><a href="#">Business visa</a></li>--}}
{{--                                    <li><a href="#">PR Visa</a></li>--}}
{{--                                    <li><a href="#">Tourist & Visitor Visa</a></li>--}}
{{--                                    <li><a href="#">Immigration Consult</a></li>--}}
{{--                                    <li class="more-info-link darkblue-color"><a href="#">View All</a></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>	<!-- END ABOUT TEXT	-->--}}


{{--                <!-- ABOUT IMAGE -->--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="about-5-img text-center mb-40">--}}
{{--                        <img class="img-fluid" src="images/world-map.png" alt="about-image" />--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>	  <!-- End row -->--}}
{{--        </div>	   <!-- End container -->--}}
{{--    </section>	<!-- END ABOUT-5 -->--}}




    <!-- TABS-1
    ============================================= -->
    <section id="tabs-1" class="bg-lightgrey wide-100 tabs-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">

                    <!-- Title -->
                    <h2 class="h2-xs darkblue-color">Select Country & Visa Type</h2>

                    <!-- Text -->
                    <p class="p-md">Select a country of your choice from the list below and choose the type of visa you would like according to your period of stay.
                    </p>

                </div>
            </div>	 <!-- END SECTION TITLE -->


            <div class="row">


                <!-- TABS NAVIGATION -->
                <div class="col-lg-4">
                    <div class="tabs-nav clearfix">
                        <ul class="tabs-1">

                            <!-- TAB-1 LINK -->
                            <li class="tab-link current" data-tab="tab-1">
                                <span>Canada</span>
                                <img src="images/flags/canada.png" alt="flag-icon" />
                            </li>

                            <!-- TAB-2 LINK -->
                            <li class="tab-link" data-tab="tab-2">
                                <span>Australia</span>
                                <img src="images/flags/australia.png" alt="flag-icon" />
                            </li>

                            <!-- TAB-3 LINK -->
                            <li class="tab-link" data-tab="tab-3">
                                <span>United Kingdom</span>
                                <img src="images/flags/united-kingdom.png" alt="flag-icon" />
                            </li>

                            <!-- TAB-4 LINK -->
                            <li class="tab-link" data-tab="tab-4">
                                <span>USA</span>
                                <img src="images/flags/united-states-of-america.png" alt="flag-icon" />
                            </li>

                            <!-- TAB-5 LINK -->
                            <li class="tab-link" data-tab="tab-5">
                                <span>Germany</span>
                                <img src="images/flags/germany.png" alt="flag-icon" />
                            </li>

                            <!-- TAB-6 LINK -->
                            <li class="tab-link" data-tab="tab-6">
                                <span>Netherlands</span>
                                <img src="images/flags/netherlands.png" alt="flag-icon" />
                            </li>

                            <!-- TAB-7 LINK -->
                            <li class="tab-link" data-tab="tab-7">
                                <span>France</span>
                                <img src="images/flags/france.png" alt="flag-icon" />
                            </li>

                        </ul>
                    </div>
                </div>	<!-- END TABS NAVIGATION -->


                <!-- TABS CONTENT -->
                <div class="col-lg-8">
                    <div class="tabs-content">


                        <!-- TAB-1 CONTENT -->
                        <div id="tab-1" class="tab-content current">
                            <div class="owl-carousel owl-theme owl-loaded tab-carousel">

                                @foreach($canada as $cdn)
                                    @foreach($cdn as $cdns)

                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="{{url('/storage/'.$cdns->featured_image)}}" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">{{$cdns->title ?? ''}}</h5>

                                    <!-- Text -->
                                    <p>{{$cdns->excerpt ?? ''}}</p>

                                </div>

                                @endforeach
                                @endforeach


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-1 CONTENT -->


                        <!-- TAB-2 CONTENT -->
                        <div id="tab-2" class="tab-content">
                            <div class="owl-carousel owl-theme owl-hidden tab-carousel">


                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/study-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Student Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #2 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/travel-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Travel Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #3 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/family-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Family Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #4 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/migrate-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">PR Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #5 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/job-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Job Seeker Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #6 -->
                                <div class="tbox-1">


                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/business-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Business Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-2 CONTENT -->


                        <!-- TAB-3 CONTENT -->
                        <div id="tab-3" class="tab-content">
                            <div class="owl-carousel owl-theme owl-hidden tab-carousel">


                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/study-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Student Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #2 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/travel-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Travel Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #3 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/family-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Family Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #4 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/migrate-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">PR Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #5 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/job-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Job Seeker Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #6 -->
                                <div class="tbox-1">


                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/business-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Business Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-3 CONTENT -->


                        <!-- TAB-4 CONTENT -->
                        <div id="tab-4" class="tab-content">
                            <div class="owl-carousel owl-theme owl-hidden tab-carousel">


                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/study-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Student Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #2 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/travel-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Travel Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #3 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/family-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Family Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #4 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/migrate-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">PR Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #5 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/job-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Job Seeker Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #6 -->
                                <div class="tbox-1">


                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/business-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Business Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-4 CONTENT -->


                        <!-- TAB-5 CONTENT -->
                        <div id="tab-5" class="tab-content">
                            <div class="owl-carousel owl-theme owl-hidden tab-carousel">


                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/study-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Student Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #2 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/travel-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Travel Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #3 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/family-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Family Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #4 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/migrate-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">PR Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #5 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/job-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Job Seeker Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #6 -->
                                <div class="tbox-1">


                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/business-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Business Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-5 CONTENT -->


                        <!-- TAB-6 CONTENT -->
                        <div id="tab-6" class="tab-content">
                            <div class="owl-carousel owl-theme owl-hidden tab-carousel">


                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/study-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Student Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #2 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/travel-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Travel Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #3 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/family-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Family Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #4 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/migrate-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">PR Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #5 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/job-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Job Seeker Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #6 -->
                                <div class="tbox-1">


                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/business-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Business Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-6 CONTENT -->


                        <!-- TAB-7 CONTENT -->
                        <div id="tab-7" class="tab-content">
                            <div class="owl-carousel owl-theme owl-hidden tab-carousel">


                                <!-- TAB BOX #1 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/study-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Student Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #2 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/travel-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Travel Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #3 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/family-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Family Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #4 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/migrate-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">PR Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #5 -->
                                <div class="tbox-1">

                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/job-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Job Seeker Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                                <!-- TAB BOX #6 -->
                                <div class="tbox-1">


                                    <!-- Image -->
                                    <div class="hover-overlay">

                                        <img class="img-fluid" src="images/business-600x800.jpg" alt="tab-box-image" />
                                        <div class="item-overlay"></div>

                                        <!-- Box Link -->
                                        <div class="tbox-link">
                                            <a href="#" class="btn btn-sm btn-tra-white primary-hover btn-arrow">
                                                <span>Read More <i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h5 class="h5-xs darkblue-color">Business Visa</h5>

                                    <!-- Text -->
                                    <p>Porta semper lacus cursus, feugiat primis ultrice ligula in risus and auctor tempus</p>

                                </div>


                            </div>	<!-- End tab-carousel -->
                        </div>	<!-- END TAB-7 CONTENT -->


                    </div>	<!-- END TABS CONTENT -->


                </div>
            </div>     <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END TABS-1 -->




    <!-- TABS-2
    ============================================= -->
{{--    <section id="tabs-2" class="wide-60 tabs-section division">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}


{{--                <!-- TABS NAVIGATION -->--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="tabs-nav clearfix">--}}
{{--                        <ul class="tabs-2 primary-tabs">--}}

{{--                            <!-- TAB-1 LINK -->--}}
{{--                            <li class="tab-link displayed" data-tab="tab-11">--}}
{{--                                <span>Goverment Approved</span>--}}
{{--                            </li>--}}

{{--                            <!-- TAB-2 LINK -->--}}
{{--                            <li class="tab-link" data-tab="tab-12">--}}
{{--                                <span>No Hidden Costs</span>--}}
{{--                            </li>--}}

{{--                            <!-- TAB-3 LINK -->--}}
{{--                            <li class="tab-link" data-tab="tab-13">--}}
{{--                                <span>Fast, Easy & Secure</span>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>	<!-- END TABS NAVIGATION -->--}}


{{--                <!-- TABS CONTENT -->--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="tabs-content">--}}


{{--                        <!-- TAB-1 CONTENT -->--}}
{{--                        <div id="tab-11" class="tab-content displayed">--}}
{{--                            <div class="row d-flex align-items-center">--}}


{{--                                <!-- TAB-1 IMAGE -->--}}
{{--                                <div class="col-md-6 mb-40">--}}
{{--                                    <div class="tab-img text-center">--}}
{{--                                        <img class="img-fluid" src="images/image-01.png" alt="tab-image" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <!-- TAB-1 TEXT -->--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="txt-block pc-20 mb-40">--}}

{{--                                        <!-- Title -->--}}
{{--                                        <h3 class="h3-lg darkblue-color">We make the visa process faster</h3>--}}

{{--                                        <!-- Text -->--}}
{{--                                        <p>Semper lacus cursus porta, feugiat primis ligula risus auctor and rhoncus in ultrice--}}
{{--                                            ligula purus ipsum primis in cubilia augue vitae laoreet augue in cubilia augue egestas--}}
{{--                                            an ipsum turpis--}}
{{--                                        </p>--}}

{{--                                        <!-- Small Title -->--}}
{{--                                        <h5 class="h5-md darkblue-color">Cubilia augue vitae laoreet</h5>--}}

{{--                                        <!-- Text Box #1 -->--}}
{{--                                        <div class="box-list">--}}
{{--                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>--}}
{{--                                            <p>Fringilla risus nec, luctus mauris orci auctor purus euismod at pretium purus pretium--}}
{{--                                                ligula rutrum viverra tortor sapien sodales congue magna undo pretium purus pretium an--}}
{{--                                                magnis nulla--}}
{{--                                            </p>--}}
{{--                                        </div>--}}

{{--                                        <!-- Text Box #2 -->--}}
{{--                                        <div class="box-list">--}}
{{--                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>--}}
{{--                                            <p>Quaerat sodales sapien undo euismod risus auctor egestas augue mauri undo viverra tortor--}}
{{--                                                sapien sodales sapien and vitae donec dolor sapien augue erat iaculis euismod--}}
{{--                                            </p>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>  <!-- End row -->--}}
{{--                        </div>	<!-- END TAB-1 CONTENT -->--}}


{{--                        <!-- TAB-2 CONTENT -->--}}
{{--                        <div id="tab-12" class="tab-content">--}}
{{--                            <div class="row d-flex align-items-center">--}}


{{--                                <!-- TAB-2 IMAGE -->--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="tab-img text-center mb-40">--}}
{{--                                        <img class="img-fluid" src="images/image-03.png" alt="tab-image" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <!-- TAB-2 TEXT -->--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="txt-block pc-20 mb-40">--}}

{{--                                        <!-- Title -->--}}
{{--                                        <h3 class="h3-lg darkblue-color">Thousands of people choose our services</h3>--}}

{{--                                        <!-- Text -->--}}
{{--                                        <p>Semper lacus cursus porta, feugiat primis ligula risus auctor and rhoncus in ultrice--}}
{{--                                            ligula purus ipsum primis in cubilia augue vitae laoreet augue in cubilia augue egestas--}}
{{--                                            an ipsum turpis magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien etiam--}}
{{--                                        </p>--}}

{{--                                        <!-- Text -->--}}
{{--                                        <p>An enim nullam tempor sapien gravida donec enim blandit ipsum at porta justo integer velna--}}
{{--                                            vitae auctor integer congue magna pretium purus pretium. An magnis nulla dolor sapien augue--}}
{{--                                            erat iaculis--}}
{{--                                        </p>--}}

{{--                                        <!-- Button -->--}}
{{--                                        <a href="#" class="btn btn-tra-grey primary-hover btn-arrow">--}}
{{--                                            <span>Discover More <i class="fas fa-arrow-right"></i></span>--}}
{{--                                        </a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>  <!-- End row -->--}}
{{--                        </div>	<!-- END TAB-2 CONTENT -->--}}


{{--                        <!-- TAB-3 CONTENT -->--}}
{{--                        <div id="tab-13" class="tab-content">--}}
{{--                            <div class="row d-flex align-items-center">--}}


{{--                                <!-- TAB-3 IMAGE -->--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="tab-img text-center mb-40">--}}
{{--                                        <img class="img-fluid" src="images/image-02.png" alt="tab-image" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <!-- TAB-3 TEXT -->--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="txt-block pc-20 mb-40">--}}

{{--                                        <!-- Title -->--}}
{{--                                        <h3 class="h3-lg darkblue-color">Get guarantee success with our advisors</h3>--}}

{{--                                        <!-- Text Box #1 -->--}}
{{--                                        <div class="box-list">--}}
{{--                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>--}}
{{--                                            <p>Semper lacus cursus porta, feugiat primis ligula risus auctor and rhoncus in ultrice--}}
{{--                                                ligula purus ipsum primis in cubilia augue vitae laoreet augue in cubilia augue egestas--}}
{{--                                                an ipsum turpis--}}
{{--                                            </p>--}}
{{--                                        </div>--}}

{{--                                        <!-- Text Box #2 -->--}}
{{--                                        <div class="box-list">--}}
{{--                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>--}}
{{--                                            <p>Fringilla risus nec, luctus mauris orci auctor purus euismod at pretium purus pretium--}}
{{--                                                ligula rutrum viverra tortor sapien sodales congue magna undo pretium purus pretium an--}}
{{--                                                magnis nulla--}}
{{--                                            </p>--}}
{{--                                        </div>--}}

{{--                                        <!-- Text Box #3 -->--}}
{{--                                        <div class="box-list">--}}
{{--                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>--}}
{{--                                            <p>Quaerat sodales sapien undo euismod risus auctor egestas augue mauri undo viverra tortor--}}
{{--                                                sapien sodales sapien and vitae donec dolor sapien augue erat iaculis euismod--}}
{{--                                            </p>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>  <!-- End row -->--}}
{{--                        </div>	<!-- END TAB-3 CONTENT -->--}}


{{--                    </div>--}}
{{--                </div>	<!-- END TABS CONTENT -->--}}


{{--            </div>    <!-- End row -->--}}
{{--        </div>     <!-- End container -->--}}
{{--    </section>	<!-- END TABS-2 -->--}}




    <!-- CALL TO ACTION-1
    ============================================= -->
    <section id="cta-1" class="bg-image bg-scroll cta-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-8 col-xl-8">
                    <div class="cta-txt">

                        <!-- Title  -->
                        <h3 class="h3-md txt-400">Free Immigration & Visa Consultation</h3>

                        <!-- Text -->
                        <p class="p-md">Consultation available at no cost, all you have to do is click the contact below and get started.
                        </p>

                    </div>
                </div>


                <!-- CALL TO ACTION BUTTON -->
                <div class="col-lg-4 col-xl-3 offset-xl-1">
                    <div class="cta-btn text-center">

                        <!-- Phone Number -->
                        <p class="p-md">Call : <span>+12 9 8765 4321</span></p>

                        <!-- Button  -->
                        <get-consultation></get-consultation>

                    </div>
                </div>


            </div>	  <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CALL TO ACTION-1 -->




    <!-- TESTIMONIALS-1
    ============================================= -->
{{--    <section id="reviews-1" class="wide-100 reviews-section division">--}}
{{--        <div class="container">--}}


{{--            <!-- SECTION TITLE -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 section-title center">--}}

{{--                    <!-- Title -->--}}
{{--                    <h2 class="h2-xs darkblue-color">What Our Clients Say</h2>--}}

{{--                    <!-- Text -->--}}
{{--                    <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,--}}
{{--                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa--}}
{{--                    </p>--}}

{{--                </div>--}}
{{--            </div>	 <!-- END SECTION TITLE -->--}}


{{--            <!-- TESTIMONIALS CONTENT -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="owl-carousel owl-theme reviews-holder">--}}


{{--                        <!-- TESTIMONIAL #1 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>Sagittis congue etiam sapien at velna accumsan suscipit egestas at lobortis magna, a--}}
{{--                                porttitor sodales an aenean mauris tempor aenean cubilia blandit porta justo integer--}}
{{--                                velna vitae auctor integer a congue magna sapien gravida donec ultrice ligula risus--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-1.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Robert</h5>--}}
{{--                                    <span>(UK Business Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                        <!-- TESTIMONIAL #2 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>Sapien sem accumsan vitae at purus diam integer congue magna sodales. Magna vitae and aenean--}}
{{--                                mauris tempor augue in cubilia laoreet magna suscipit magna ipsum vitae purus ipsum primis--}}
{{--                                cubilia laoreet and augue ultrice ligula egestas magna suscipit lectus gestas at magna viverra--}}
{{--                                dolor neque gravida--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-2.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Evelyn W.</h5>--}}
{{--                                    <span>(Canada Studients Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                        <!-- TESTIMONIAL #3 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>Etiam sapien gravida and donec sagittis congue. An augue cubilia laoreet magna suscipit egestas--}}
{{--                                magna ipsum and vitae purus ipsum primis undo cubilia laoreet augue ultrice ligula and egestas--}}
{{--                                suscipit  magna lectus gestas magna as viverra dolor neque est gravida--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-3.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Leslie Serpas</h5>--}}
{{--                                    <span>(Singapore PR Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                        <!-- TESTIMONIAL #4 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>An augue in cubilia laoreet undo magna suscipit egestas magna ipsum egestas vitae purus ipsum--}}
{{--                                primis cubilia laoreet augue ultrice ligula egestas and magna suscipit lectus gestas magna a--}}
{{--                                viverra dolor neque est gravida--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-4.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Dan Hodges</h5>--}}
{{--                                    <span>(USA Studients Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                        <!-- TESTIMONIAL #5 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>An orci nullam tempor sapien, gravida donec enim ipsum a porta. An augue in cubilia laoreet--}}
{{--                                magna suscipit egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue ultrice--}}
{{--                                at ligula egestas magna suscipit lectus gestas magna viverra dolor neque est gravida justo--}}
{{--                                integer and velna auctor--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-5.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Amelie Peterson</h5>--}}
{{--                                    <span>(France Working Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                        <!-- TESTIMONIAL #6 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>An augue cubilia laoreet magna suscipit egestas magna ipsum vitae purus undo ipsum primis--}}
{{--                                in cubilia laoreet augue ultrice ligula egestas magna at suscipit lectus gestas magna viverra--}}
{{--                                dolor neque est gravida. Mauris donec ociis magnis sapien etiam sapien sem sagittis--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-6.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Scott Boxer</h5>--}}
{{--                                    <span>(Germany Travel Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                        <!-- TESTIMONIAL #7 -->--}}
{{--                        <div class="review-1">--}}

{{--                            <!-- Testimonial Text -->--}}
{{--                            <p>At sagittis congue augue egestas undo magna ipsum vitae purus ipsum primis in cubilia--}}
{{--                                laoreet augue ociis at nullam tempor sapien gravida porta integer at odio velna auctor.--}}
{{--                                An augue in cubilia laoreet magna suscipit egestas magna ipsum vitae purus ipsum primis--}}
{{--                                cubilia laoreet augue ultrice ligula egestas--}}
{{--                            </p>--}}

{{--                            <!-- Testimonial Author -->--}}
{{--                            <div class="author-data clearfix">--}}

{{--                                <!-- Author Avatar -->--}}
{{--                                <div class="testimonial-avatar">--}}
{{--                                    <img src="images/review-author-7.jpg" alt="testimonial-avatar">--}}
{{--                                </div>--}}

{{--                                <!-- Author Data -->--}}
{{--                                <div class="review-author">--}}
{{--                                    <h5 class="h5-xs darkblue-color">Evelyn</h5>--}}
{{--                                    <span>(Austrlia PR Visa)</span>--}}
{{--                                </div>--}}

{{--                            </div>	<!-- End Testimonial Author -->--}}

{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>	<!-- END TESTIMONIALS CONTENT -->--}}


{{--        </div>	   <!-- End container -->--}}
{{--    </section>	 <!-- END TESTIMONIALS-1 -->--}}




    <!-- BRANDS-2
    ============================================= -->
{{--    <div id="brands-2" class="bg-tra-map bg-lightgrey wide-70 brands-section division">--}}
{{--        <div class="container">--}}


{{--            <!-- TEXT -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center mb-10">--}}
{{--                    <h5 class="h5-md grey-color">We partner with companies of all sizes, all around the world</h5>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <!-- BRANDS HOLDER -->--}}
{{--            <div class="row brands-holder">--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-1.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-2.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-3.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-5.png" alt="brand-logo">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-6.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-7.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- BRAND LOGO IMAGE -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="brand-logo">--}}
{{--                        <img class="img-fluid" src="images/brand-8.png" alt="brand-logo" />--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>	<!-- END BRANDS HOLDER -->--}}


{{--        </div>     <!-- End container -->--}}
{{--    </div>	<!-- END BRANDS-2 -->--}}




    <!-- BLOG-1
    ============================================= -->




@stop

