

<section id="testimonials" class="our-students">
    <div class="container">
        <div class="header">
            <h2>Hear From Our Students</h2>
            <p>Our students love Prepmewell.com, we have nothing to hide.</p>
        </div>
        <div class="student-holder testimonial">

            @foreach ($userTestimonials as $userTestimonial )
                <a href="/testimonials/{{$userTestimonial->id}}">
                    @if ($userTestimonial->id % 2 == 0)
                <div class="holder">
                    @else
                        <div class="holder odd">
                            @endif
                    <div class="img-box">
                        <img src="images/img02.png" width="400" height="300" alt="img description">
                    </div>
                    <div class="text-box">

                        <p>{{$userTestimonial->excerpt}}
                            My writing skills improved by a 100%… Even after getting 9.0 at the IELTS exams, I still find myself here</p>
                        <strong class="title">Obi Arinze</strong>
                        <span class="country">Lagos, Nigeria</span>
                    </div>
                </div>
                </a>
                @endforeach




            <div class="btn-holder">
                <a class="btn has-arrow opener" href="#">View <span class="more">more</span> <span class="less">less</span> testimonials</a>
            </div>
        </div>
    </div>
</section>


