@extends('layouts.dashboard-layout')

@section('content')

    @if (auth()->user()->hasRole('student'))

        <div class="account-settings profile style2 style3">
            <div  id="app" class="container">
                <flash message=""></flash>

                <div class="row">
                    <div class="col-lg-8 col-md-8 column-xl-9">
                        <h2 class="heading">My Testimonial</h2>
                        <div class="tabs-holder">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="study-tab" data-toggle="tab" href="#study" role="tab" aria-controls="study" aria-selected="true">All testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work" aria-selected="false">My Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="relocate-tab" data-toggle="tab" href="#relocate" role="tab" aria-controls="relocate" aria-selected="false">Add a testimonial</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="study" role="tabpanel" aria-labelledby="study-tab">


<testimonials></testimonials>



                                </div>
                                <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">

                                    <testimonials :user="{{Auth()->user()->id}}"></testimonials>



                                </div>
                                <div class="tab-pane fade" id="relocate" role="tabpanel" aria-labelledby="relocate-tab">
                                    <testimonial-form></testimonial-form>


                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 column-xl-3">
                        <div class="date">23:14, Thursday, Feb 26, 2018</div>

                        <div class="right-container style2">

                            <div class="inner align-right">
                                <strong class="heading d-block mb-2 pb-0">Featured Testimonial</strong>
                                <span class="sub-title d-block">Selected testimonial is Featured.</span>

<portal-target name="featured"></portal-target>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif

    @if (auth()->user()->hasRole('marker'))

        <div class="user-selection marker-reg">
            <h1>Thank you for your interest in marking!</h1>
            <p>We will contact you by the mail provided on how to complete your registration and provide basic requirements that qualifies you to be a marker.</p>
            <div class="btns-holder">
                <a href="#" class="btn full">Check My Mail</a>
            </div>
        </div>

    @endif


@stop
<script>
    import Testimonials
    export default {
        components: {Testimonials}
    }
</script>
