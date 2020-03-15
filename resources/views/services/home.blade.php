<section id="blog-1" class="wide-60 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-md-12 section-title center">

                <!-- Title -->
                <h2 class="h2-xs darkblue-color">Our Stories & Latest News</h2>

                <!-- Text -->
                <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                    felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
                </p>

            </div>
        </div>	 <!-- END SECTION TITLE -->


        <!-- BLOG POSTS HOLDER -->
        <div class="row">


            <!-- BLOG POST #1 --> @foreach ($articles as $article )
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">


                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-30">{{$article->image}}
                        <img class="img-fluid" src="images/blog/post-1-img.jpg" alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt icon-xs">

                        <!-- Post Data -->
                        <p class="post-meta">{{$article->created_at}}August 10, 2019 in <span>{{$article->category}}Immigration Visa</span></p>

                        <!-- Title -->
                        <h5 class="h5-lg darkblue-color">{{$article->title}}What Visa Do I Need to Work Legally in Singapore?</h5>

                        <!-- Text -->
                        <p >{{$article->excerpt}}Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae
                            auctor congue magna tempor sodales sapien ...
                        </p>

                        <!-- Link -->
                        <a href="single-post.html" class="primary-color">Read More</a>

                    </div>


                </div>
            </div>	<!-- END  BLOG POST #1 -->
        @endforeach

            <!-- BLOG POST #2 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">


                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-30">
                        <img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt icon-xs">

                        <!-- Post Data -->
                        <p class="post-meta">August 1, 2019 in <span>Working Visa</span></p>

                        <!-- Title -->
                        <h5 class="h5-lg darkblue-color">Top Reasons for Australian Working Visa Rejection</h5>

                        <!-- Text -->
                        <p >Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae
                            auctor congue magna tempor sodales sapien ...
                        </p>

                        <!-- Link -->
                        <a href="single-post.html" class="primary-color">Read More</a>

                    </div>


                </div>
            </div>	<!-- END  BLOG POST #2 -->


            <!-- BLOG POST #3 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">


                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-30">
                        <img class="img-fluid" src="images/blog/post-3-img.jpg" alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt icon-xs">

                        <!-- Post Data -->
                        <p class="post-meta">July, 2019 in <span>PR Visa</span></p>

                        <!-- Post Title -->
                        <h5 class="h5-lg darkblue-color">The United Kingdom Immigration & Permanent Residency Consultants</h5>

                        <!-- Text -->
                        <p >Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae
                            auctor congue magna tempor sodales sapien ...
                        </p>

                        <!-- Link -->
                        <a href="single-post.html" class="primary-color">Read More</a>

                    </div>


                </div>
            </div>	<!-- END  BLOG POST #3 -->


        </div>	<!-- END BLOG POSTS HOLDER -->


    </div>	   <!-- End container -->
</section>	<!-- END BLOG-1 -->








            <div class="btn-holder">
                <a class="btn has-arrow opener" href="#">View <span class="more">more</span> <span class="less">less</span> testimonials</a>
            </div>
        </div>
    </div>
</section>


