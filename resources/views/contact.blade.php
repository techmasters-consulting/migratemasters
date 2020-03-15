@extends('layouts.main')

@section('content')
    @parent


    <div class="inner-page-wrapper">




        <!-- CONTACTS PAGE HERO
        ============================================= -->
        <section id="contacts-page" class="page-hero-section division">
            <div class="container">
                <div class="row">


                    <!-- PAGE HERO TEXT -->
                    <div class="col-md-7">
                        <div class="hero-txt white-color">
                            <h2 class="h2-xs">Get In Touch</h2>
                        </div>
                    </div>	<!-- END PAGE HERO TEXT -->


                </div>    <!-- End row -->
            </div>	   <!-- End container -->
        </section>	<!-- END CONTACTS PAGE HERO -->




        <!-- BREADCRUMB
        ============================================= -->
        <div id="breadcrumb" class="bg-darkblue division">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb white-color">
                                <li class="breadcrumb-item"><a href="demo-1.html">&#91; Home &#93;</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>  <!-- End row -->
            </div>	<!-- End container -->
        </div>	<!-- END BREADCRUMB -->




        <!-- CONTACTS-4
        ============================================= -->
        <section id="contacts-4" class="bg-lightgrey wide-100 contacts-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-md-12 section-title center">

                        <!-- Title -->
                        <h2 class="h2-xs">Have Questions? Get in Touch</h2>

                        <!-- Text -->
                        <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                            felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
                        </p>

                    </div>
                </div>	 <!-- END SECTION TITLE -->


                <div class="row">


                    <div class="col-lg-5">
                        <div class="contact-boxes">


                            <!-- LOCATION -->
                            <div class="contact-box icon-xs clearfix mb-25">

                                <!-- Icon -->
                                <div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>

                                <!-- Text -->
                                <div class="contact-box-txt">
                                    <h5 class="h5-sm deepblue-color">121 King St, Melbourne</h5>
                                    <h5 class="h5-xs deepblue-color">VIC 3000 Australia</h5>
                                    <p class="grey-color">Our Location</p>
                                </div>

                            </div>


                            <!-- PHONES -->
                            <div class="contact-box icon-xs clearfix mb-25">

                                <!-- Icon -->
                                <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>

                                <!-- Text -->
                                <div class="contact-box-txt">
                                    <h5 class="h5-sm deepblue-color">P: +12 3 3456 7890</h5>
                                    <h5 class="h5-xs deepblue-color">F: +12 3 0987 6543</h5>
                                    <p class="grey-color">Let's Talk</p>
                                </div>

                            </div>


                            <!-- EMAIL -->
                            <div class="contact-box icon-xs clearfix">

                                <!-- Icon -->
                                <div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>

                                <!-- Text -->
                                <div class="contact-box-txt">
                                    <h5 class="h5-xs deepblue-color"><a href="mailto:yourdomain@mail.com">hello@domain.com</a></h5>
                                    <h5 class="h5-xs deepblue-color"><a href="mailto:yourdomain@mail.com">career@domain.com</a></h5>
                                    <p class="grey-color">Drop a Line</p>
                                </div>

                            </div>


                        </div>
                    </div>


                    <!-- CONTACT FORM -->
                    <div class="col-lg-7">
                        <div class="form-holder">
                            <form name="contactForm" class="row contact-form">

                                <!-- Contact Form Input -->
                                <div id="input-name" class="col-lg-12">
                                    <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
                                </div>

                                <!-- Contact Form Input -->
                                <div id="input-email" class="col-lg-12">
                                    <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
                                </div>

                                <!-- Contact Form Select -->
                                <div id="input-subject" class="col-lg-12 input-subject">
                                    <select id="inlineFormCustomSelect2" name="subject" class="custom-select subject" required>
                                        <option value="">Your Question About..</option>
                                        <option>Student Visa</option>
                                        <option>Travel visa</option>
                                        <option>Working Visa</option>
                                        <option>Business Visa</option>
                                        <option>Visitor Visa</option>
                                        <option>Other...</option>
                                    </select>
                                </div>

                                <!-- Contact Form Mesaage -->
                                <div id="input-message" class="col-lg-12 input-message">
                                    <textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
                                </div>

                                <!-- Contact Form Button -->
                                <div class="col-lg-12 mt-15 form-btn">
                                    <button type="submit" class="btn btn-primary tra-black-hover submit">Send Your Message</button>
                                </div>

                                <!-- Contact Form Message -->
                                <div class="col-lg-12 contact-form-msg text-center">
                                    <div class="sending-msg"><span class="loading"></span></div>
                                </div>

                            </form>
                        </div>
                    </div>	 <!-- END CONTACT FORM -->


                </div>    <!-- End row -->
            </div>	   <!-- End container -->
        </section>	<!-- END CONTACTS-4 -->
    </div>


@stop
