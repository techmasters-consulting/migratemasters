@extends('layouts.main')

@section('content')
    @parent

    <!-- INNER PAGE WRAPPER
			============================================= -->
    <div class="inner-page-wrapper">




        <!-- FAQs PAGE HERO
        ============================================= -->
        <section id="faqs-page" class="page-hero-section division">
            <div class="container">
                <div class="row">


                    <!-- PAGE HERO TEXT -->
                    <div class="col-md-7">
                        <div class="hero-txt white-color">
                            <h2 class="h2-xs">FAQs</h2>
                        </div>
                    </div>	<!-- END PAGE HERO TEXT -->


                </div>    <!-- End row -->
            </div>	   <!-- End container -->
        </section>	<!-- END FAQS PAGE HERO -->




        <!-- BREADCRUMB
        ============================================= -->
        <div id="breadcrumb" class="bg-darkblue division">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb white-color">
                                <li class="breadcrumb-item"><a href="demo-1.html">&#91; Home &#93;</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ol>
                        </nav>
                    </div>
                </div>  <!-- End row -->
            </div>	<!-- End container -->
        </div>	<!-- END BREADCRUMB -->



        <!-- FAQs-2
        ============================================= -->
        <section id="faqs-2" class="wide-80 faqs-section division">
            <div class="container">


                <!-- QUESTIONS ACCORDION -->
                <div id="accordion" role="tablist">
                    <div class="row">


                        <!-- LEFT COLUMN -->
                        <div class="col-lg-6">


                            <!-- CATEGORY TITLE  -->
                            <h5 class="h5-xl blue-color">General Questions</h5>


                            <!-- ACCORDION CARD #1 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="h5-xs">
                                        <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                            <span>1.How do I book an appointment with an immigration consultant?</span>
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>You can call us directly through this number or you can go to our home page and book a request for consultation.
                                        </p>

                                    </div>
                                </div>

                            </div>	<!-- END ACCORDION CARD #1 -->


                            <!-- ACCORDION CARD #2 -->
                            <div class="card">

                                <!-- Card Title ->
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>2.</span> What is the registration process?
                                        </a>
                                    </h5>
                                </div>
                            -->
                                <!-- Card Content -->
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <div class="box-list">
                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                            <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum
                                                vitae purus primis pretium ligula rutrum
                                            </p>
                                        </div>

                                        <!-- Text -->
                                        <div class="box-list">
                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                            <p>Nemo ipsam egestas volute turpis dolores aliquam quaerat sodales sapien
                                                pretium purus ligula tempus ipsum undo auctor a mauris lectus ipsum blandit
                                                porta justo integer feugiat primis ultrice ligula auctor eros dolor luctus
                                                odio tempor sapien
                                            </p>
                                        </div>
                            -->
                                    </div>
                                </div>

                            </div>	<!-- END ACCORDION CARD #2 -->


                            <!-- ACCORDION CARD #3 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            <span>3.</span> How can I update my personal information?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit
                                            tristique justo ut aliquam. Aliquam vitae molestie nuncert. Quisque sapien justo,
                                            aliquet molestie venenatis purus. Aliquam eget lacinia elit. Vestibulum
                                            tincidunt tincidunt massa
                                        </p>


                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie bibendum
                                        </p>

                                    </div>
                                </div>

                            </div>


                            <!-- CATEGORY TITLE  -->
                            <h5 class="h5-xl blue-color mt-40">PR & Migration Visa</h5>


                            <!-- ACCORDION CARD #4 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingFour">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
                                            <span>1.</span> How can VisaPRO help me?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna
                                            vitae auctor eros congue magna nihil impedit ligula risus. Mauris donec ociis et
                                            magnis sapien etiam sapien sem sagittis cubilia curae integer congue leo metus primis
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #4 -->


                            <!-- ACCORDION CARD #5 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingFive">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">
                                            <span>2.</span> What should I expect from Initial Consultation?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie aliquet at cubilia curae integer
                                            congue leo metus, primis in orci integer metus
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #5 -->


                            <!-- ACCORDION CARD #6 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingSix">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">
                                            <span>3.</span> What can prevent me from coming to Australia?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie bibendum quis, aliquet elementum massa.
                                            Vestibulum ut sagittis odio
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #6 -->


                            <!-- ACCORDION CARD #7 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingSeven">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="true" aria-controls="collapseSeven">
                                            <span>4.</span> Who is Authorized Representative?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Aliqum  mullam blandit tempor sapien gravida donec ipsum porta justo. Velna
                                            vitae auctor eros congue magna nihil impedit a ligula risus. Mauris donec ociis
                                            et magnis sapien etiam
                                        </p>

                                        <!-- Text -->
                                        <p>Nullam rutrum eget nunc varius etiam mollis risus congue aliquam etiam sapien egestas,
                                            congue gestas posuere cubilia and congue ipsum mauris lectus laoreet gestas neque vitae
                                        </p>

                                    </div>
                                </div>

                            </div>	<!-- END ACCORDION CARD #7 -->


                        </div>	<!-- END LEFT COLUMN -->


                        <!-- RIGHT COLUMN -->
                        <div class="col-lg-6">


                            <!-- CATEGORY TITLE  -->
                            <h5 class="h5-xl blue-color faqs-column">Tourist & Visitor Visa</h5>


                            <!-- ACCORDION CARD #8 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingEight">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">
                                            <span>1.</span> Qualification for a Canada Tourist Visa?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">

                                        <p>Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque
                                            vel laoreet turpis. Urna augue, viverra a augue eget, dictum tempor diam. Sed
                                            pulvinar consectetur nibh, vel imperdiet dui varius viverra. Pellentesque ac
                                            massa lorem
                                        </p>

                                    </div>
                                </div>

                            </div>	<!-- END ACCORDION CARD #8 -->


                            <!-- ACCORDION CARD #9 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingNine">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false" aria-controls="collapseNine">
                                            <span>2.</span> Do you guarantee a visa approval?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="box-list">
                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                            <p>Nemo ipsam egestas volute turpis dolores aliquam quaerat sodales sapien
                                                pretium purus ligula tempus ipsum undo auctor a mauris lectus ipsum blandit
                                                porta justo integer feugiat
                                            </p>
                                        </div>

                                        <!-- Text -->
                                        <div class="box-list">
                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                            <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum
                                                vitae purus primis pretium ligula rutrum
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #9 -->


                            <!-- ACCORDION CARD #10 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingTen">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTen" role="button" aria-expanded="false" aria-controls="collapseTen">
                                            <span>3.</span> How long does the application process take?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo.
                                            Velna vitae auctor eros congue magna nihil impedit ligula risus. Mauris donec
                                            ociis et magnis sapien etiam sapien sem sagittis congue tempor gravida donec
                                            enim ipsum
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #10 -->


                            <!-- CATEGORY TITLE  -->
                            <h5 class="h5-xl blue-color mt-40">Working Visa</h5>


                            <!-- ACCORDION CARD #11 -->
                            <div class="card">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingEleven">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseEleven" role="button" aria-expanded="false" aria-controls="collapseEleven">
                                            <span>1.</span> How do I get started?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit
                                            tristique justo ut aliquam. Aliquam vitae molestie nunc. Quisque sapien justo,
                                            aliquet non molestie sed, venenatis purus. Aliquam eget lacinia elit.
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #11 -->


                            <!-- ACCORDION CARD #12 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingTwelve">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwelve" role="button" aria-expanded="false" aria-controls="collapseTwelve">
                                            <span>2.</span> What is meant by the "locked-in" date?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseTwelve" class="collapse" role="tabpanel" aria-labelledby="headingTwelve" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit
                                            tristique justo ut aliquam vitae molestie nunc. Quisque at sapien justo,
                                            aliquet non molestie sed, venenatis purus. Aliquam eget lacinia elit.
                                            Vestibulum tincidunt tincidunt massa
                                        </p>

                                        <!-- Text -->
                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie bibendum quis, aliquet elementum massa.
                                            Vestibulum ut sagittis odio
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #12 -->


                            <!-- ACCORDION CARD #13 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingThirteen">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThirteen" role="button" aria-expanded="false" aria-controls="collapseThirteen">
                                            <span>3.</span> What can prevent me from coming to Canada?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseThirteen" class="collapse" role="tabpanel" aria-labelledby="headingThirteen" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie bibendum quis, aliquet elementum massa.
                                            Vestibulum ut sagittis odio. Aliquam eget lacinia elit aliquet non molestie sed,
                                            venenatis purus
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #13 -->


                            <!-- ACCORDION CARD #14 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingFourteen">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFourteen" role="button" aria-expanded="false" aria-controls="collapseFourteen">
                                            <span>4.</span> What is the registration process?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseFourteen" class="collapse" role="tabpanel" aria-labelledby="headingFourteen" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <div class="box-list">
                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                            <p>Nemo ipsam egestas volute turpis dolores aliquam quaerat sodales sapien pretium
                                                purus ligula tempus ipsum undo auctor a mauris lectus ipsum blandit porta justo
                                                integer feugiat
                                            </p>
                                        </div>

                                        <!-- Text -->
                                        <div class="box-list">
                                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                            <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus
                                                primis pretium ligula rutrum
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #14 -->


                            <!-- ACCORDION CARD #15 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingFifteen">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFifteen" role="button" aria-expanded="false" aria-controls="collapseFifteen">
                                            <span>5.</span> In what currency must I pay the government fees?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseFifteen" class="collapse" role="tabpanel" aria-labelledby="headingFifteen" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit
                                            tristique justo ut aliquam quisque sapien justo,  aliquet non molestie sed,
                                            venenatis nec purus. Aliquam eget lacinia elit
                                        </p>

                                        <!-- Text -->
                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie bibendum quis, aliquet elementum massa.
                                            Vestibulum ut sagittis odio
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #15 -->


                            <!-- ACCORDION CARD #16 -->
                            <div class="card no-border">

                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingSixteen">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseSixteen" role="button" aria-expanded="false" aria-controls="collapseSixteen">
                                            <span>6.</span> In what currency must I pay the government fees?
                                        </a>
                                    </h5>
                                </div>

                                <!-- Card Content -->
                                <div id="collapseSixteen" class="collapse" role="tabpanel" aria-labelledby="headingSixteen" data-parent="#accordion">
                                    <div class="card-body">

                                        <!-- Text -->
                                        <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                            dui. Nam lacus ligula, vulputate molestie bibendum quis, aliquet elementum massa.
                                            Vestibulum ut sagittis odio
                                        </p>

                                    </div>
                                </div>

                            </div>	  <!-- END ACCORDION CARD #16 -->


                        </div>	<!-- END RIGHT COLUMN -->


                    </div> <!-- End row -->
                </div>	<!-- END QUESTIONS ACCORDION -->


            </div>	   <!-- End container -->
        </section>	<!-- END FAQs-2 -->




        <!-- CALL TO ACTION-1
        ============================================= -->
        <section id="cta-1" class="bg-scroll bg-image cta-section division">
            <div class="container white-color">
                <div class="row d-flex align-items-center">


                    <!-- CALL TO ACTION TEXT -->
                    <div class="col-lg-8 col-xl-8">
                        <div class="cta-txt">

                            <!-- Title  -->
                            <h3 class="h3-md txt-400">Free Immigration & Visa Consultation</h3>

                            <!-- Text -->
                            <p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero
                                tempus, and blandit posuere ligula varius magna congue cursus porta ultrice
                            </p>

                        </div>
                    </div>


                    <!-- CALL TO ACTION BUTTON -->
                    <div class="col-lg-4 col-xl-3 offset-xl-1">
                        <div class="cta-btn text-center">

                            <!-- Phone Number -->
                            <p class="p-md">Call : <span>+12 9 8765 4321</span></p>

                            <!-- Button  -->
                            <a href="mailto:youremail@mail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                                <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                            </a>

                        </div>
                    </div>


                </div>	  <!-- End row -->
            </div>	   <!-- End container -->
        </section>	<!-- END CALL TO ACTION-1 -->




        <!-- FOOTER-2
        ============================================= -->
        <footer id="footer-2" class="wide-40 footer division">
            <div class="container">


                <!-- FOOTER CONTENT -->
                <div class="row">


                    <!-- FOOTER INFO -->
                    <div class="col-lg-5 col-xl-4">
                        <div class="footer-info mb-40">

                            <!-- Footer Logo -->
                            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 400 x 100 pixels) -->
                            <img src="images/logo-black.png" width="200" height="50" alt="footer-logo">

                            <!-- Text -->
                            <p class="mt-25">Aliquam orci a nullam tempor at sapien donec gravida  enim ipsum porta
                                justo velna auctor a congue magna laoreet an augue sapien feugiat primis ultrice ligula
                                risus auctor tempus feugiat dolor impedit auctor tempus accumsan
                            </p>

                        </div>
                    </div>


                    <!-- FOOTER CONTACTS -->
                    <div class="col-lg-3 col-xl-3">
                        <div class="footer-box mb-40">

                            <!-- Title -->
                            <h5 class="h5-md">Head Office</h5>

                            <!-- Address -->
                            <p>121 King Street, Melbourne,</p>
                            <p>Victoria 3000 Australia</p>

                            <!-- Phone -->
                            <p class="mt-20">Phone: +12 9 8765 4321</p>

                            <!-- Email -->
                            <p class="foo-email">Email: <a href="mailto:yourdomain@mail.com">hello@demo.com</a></p>

                            <!-- Phone -->
                            <p>Office Time: 9AM - 6PM</p>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-lg-2 col-xl-2">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h5 class="h5-md">Countries</h5>

                            <!-- Footer Links -->
                            <ul class="foo-links clearfix">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Australia</a></li>
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">USA</a></li>
                                <li><a href="#">Germany</a></li>
                                <li><a href="#">Netherlands</a></li>
                            </ul>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-lg-2 col-xl-3">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h5 class="h5-md">Visas</h5>

                            <!-- Footer Links -->
                            <ul class="foo-links clearfix">
                                <li><a href="#">Students Visa</a></li>
                                <li><a href="#">Travel Visa</a></li>
                                <li><a href="#">PR Visa</a></li>
                                <li><a href="#">Business Visa</a></li>
                                <li><a href="#">Work Visa</a></li>
                                <li><a href="#">Family Visa</a></li>
                            </ul>

                        </div>
                    </div>


                </div>	<!-- END FOOTER CONTENT -->


                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row d-flex align-items-center">


                        <!-- FOOTER COPYRIGHT -->
                        <div class="col-lg-6">
                            <p class="footer-copyright">&copy; Copyright <span>VisaPRO 2019</span>. All Rights Reserved</p>
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
        </footer>	<!-- END FOOTER-2 -->




    </div>	<!-- END INNER PAGE WRAPPER -->





@stop
