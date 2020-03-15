@extends('layouts.main')

@section('content')
    @parent

<div class="inner-page-wrapper">




    <!-- BLOG LISTING PAGE HERO
    ============================================= -->
    <section id="blog-listing-page" class="page-hero-section division">
        <div class="container">
            <div class="row">


                <!-- PAGE HERO TEXT -->
                <div class="col-md-7">
                    <div class="hero-txt white-color">
                        <h2 class="h2-xs">Our Blog</h2>
                    </div>
                </div>	<!-- END PAGE HERO TEXT -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END BLOG LISTING PAGE HERO -->




    <!-- BREADCRUMB
    ============================================= -->
    <div id="breadcrumb" class="bg-darkblue division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb white-color">
                            <li class="breadcrumb-item"><a href="demo-1.html">&#91; Home &#93;</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Latest News & Articles</li>
                        </ol>
                    </nav>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>	<!-- END BREADCRUMB -->




    <!-- BLOG PAGE CONTENT
    ============================================= -->
    <section id="blog-page" class="wide-100 blog-page-section division">
        <div class="container">
            <div class="row">


                <!-- BLOG POSTS HOLDER -->
                <div class="col-lg-8">
                    <div class="posts-holder pr-15">

@foreach ($threads as $thread)
                        <!-- BLOG POST #1 -->
                        <div class="blog-post">


                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img mb-30">
                                <img class="img-fluid" src="images/blog/post-4-img.jpg" alt="blog-post-image" />
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt icon-xs">

                                <!-- Post Data -->
                                <p class="post-meta">August 10, 2019 in <span>PR & Immigration</span></p>

                                <!-- Title -->
                                <h4 class="h4-xs deepblue-color">{{$thread->title}}</h4>

                                <!-- Text -->
                                <p >{{$thread->excerpt}}
                                </p>

                                <!-- Link -->
                                <a href="/threads/{{$thread->id}}" class="darkblue-color">Read More</a>

                            </div>


                        </div>	<!-- END BLOG POST #1 -->


@endforeach

                        <!-- BLOG PAGE PAGINATION -->
                        <div class="blog-page-pagination b-top">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center primary-pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a> </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>
                </div>	<!-- END BLOG POSTS HOLDER -->


                <!-- SIDEBAR -->
                <aside id="sidebar" class="col-lg-4">


                    <!-- SEARCH FIELD -->
                    <div id="search-field" class="sidebar-div mb-50">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                            <div class="input-group-append">
                                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>


                    <!-- BLOG CATEGORIES -->
                    <div class="blog-categories sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Categories</h5>

                        <ul class="blog-category-list clearfix">
                            <li><a href="#"><i class="fas fa-angle-double-right primary-color"></i> Study & Education</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right primary-color"></i> PR & Immigration</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right primary-color"></i> Business Visa</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right primary-color"></i> Tourist & Visitor Visa</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right primary-color"></i> Latest Updates</a></li>
                        </ul>

                    </div>


                    <!-- POPULAR POSTS -->
                    <div class="popular-posts sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Latest Posts</h5>

                        <ul class="latest-posts">

                            <!-- Latest Post #1 -->
                            <li class="clearfix">

                                <!-- Link -->
                                <h5 class="h5-sm">
                                    <a href="single-post.html">Etiam sapien accumsan molestie ante empor ultrice ligula risus</a>
                                </h5>

                                <!-- Text -->
                                <p>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat felis...</p>

                            </li>

                            <!-- Latest Post #2 -->
                            <li class="clearfix">

                                <!-- Link -->
                                <h5 class="h5-sm">
                                    <a href="single-post.html">Viverra dolor iaculis luctus placerat and massa empor ultrice</a>
                                </h5>

                                <!-- Text -->
                                <p>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat felis...</p>

                            </li>

                            <!-- Latest Post #3 -->
                            <li class="clearfix">

                                <!-- Link -->
                                <h5 class="h5-sm">
                                    <a href="single-post.html">Ligula risus auctor tempus dolor feugiat ante empor ultrice </a>
                                </h5>

                                <!-- Text -->
                                <p>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat felis...</p>

                            </li>
                        </ul>

                    </div>


                    <!-- TAGS CLOUD -->
                    <div class="tags-cloud sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Tags Cloud</h5>

                        <span class="badge"><a href="#">Consultations</a></span>
                        <span class="badge"><a href="#">Education</a></span>
                        <span class="badge"><a href="#">Embassy</a></span>
                        <span class="badge"><a href="#">Immigration</a></span>
                        <span class="badge"><a href="#">Travelling</a></span>
                        <span class="badge"><a href="#">Travel Tips</a></span>
                        <span class="badge"><a href="#">Tourism</a></span>
                        <span class="badge"><a href="#">Visa</a></span>
                    </div>


                    <!-- SIDEBAR COUNTRIES -->
                    <div class="sidebar-countries sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Countries: </h5>

                        <!-- List -->
                        <ul class="sidebar-country-list clearfix">

                            <li><a href="country-detail.html">
                                    <img class="img-fluid" src="images/sidebar-canada.jpg" alt="sidebar-image" />Canada</a>
                            </li>

                            <li><a href="country-detail.html">
                                    <img class="img-fluid" src="images/sidebar-uk.jpg" alt="sidebar-image" />United Kingdom</a>
                            </li>

                            <li><a href="country-detail.html">
                                    <img class="img-fluid" src="images/sidebar-usa.jpg" alt="sidebar-image" />United States of America</a>
                            </li>

                        </ul>

                    </div>


                </aside>	<!-- END SIDEBAR -->


            </div>    <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END ABOUT-9 -->




    <!-- FOOTER-3
    ============================================= -->
    <footer id="footer-3" class="bg-blue-map wide-40 footer division">
        <div class="container white-color">


            <!-- FOOTER CONTENT -->
            <div class="row">


                <!-- FOOTER CONTACTS -->
                <div class="col-md-4 col-lg-3 col-xl-3">
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
                <div class="col-md-4 col-lg-3 col-xl-3">
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
                <div class="col-md-4 col-lg-3 col-xl-3">
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


                <!-- FOOTER NEWSLETTER FORM -->
                <div class="col-lg-3 col-xl-3">
                    <div class="footer-form mb-20">

                        <!-- Title -->
                        <h5 class="h5-md">Stay Always In Touch</h5>

                        <!-- Newsletter Form Input -->
                        <form class="newsletter-form">

                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email address" required id="s-email">
                                <span class="input-group-btn">
												<button type="submit" class="btn btn-primary tra-white-hover">Subscribe</button>
											</span>
                            </div>

                            <!-- Newsletter Form Notification -->
                            <label for="s-email" class="form-notification"></label>

                        </form>

                    </div>
                </div>


            </div>	<!-- END FOOTER CONTENT -->


            <!-- BOTTOM FOOTER -->
            <div class="bottom-footer">
                <div class="row d-flex align-items-center">


                    <!-- FOOTER LOGO -->
                    <div class="col-md-4 col-lg-3">
                        <!-- Footer Logo -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 400 x 100 pixels) -->
                        <img src="images/logo-white.png" width="200" height="50" alt="footer-logo">
                    </div>


                    <!-- FOOTER SOCIALS LINKS -->
                    <div class="col-md-8 col-lg-9 text-right">
                        <p class="footer-copyright">&copy; Copyright <span>VisaPRO 2019</span>. All Rights Reserved</p>
                        <p class="p-sm"><a href="#">Privacy Policy</a></p>
                        <p class="p-sm"><a href="#">Terms & Conditions</a></p>
                        <p class="p-sm"><a href="#">Cookies</a></p>
                    </div>


                </div>
            </div>	<!-- END BOTTOM FOOTER -->


        </div>	   <!-- End container -->
    </footer>	<!-- END FOOTER-3 -->




</div>	<!-- END INNER PAGE WRAPPER -->
@stop
