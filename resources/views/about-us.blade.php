@extends('layouts.index')
@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>About {{ config('app.name', 'Laravel') }}</h2>
            <ul>
                <li> <a href="{{ route('welcome') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
                
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->

<section class="with-medical">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="{{ url('public/assets/images/why.jpg') }}" alt="why choose us">
                <button style="top:50%" id="play-video" class="video-play-button" data-toggle="modal" data-target="#exampleModal1"> <span></span></button>
            </div>
            <div class="col-lg-6 col-md-12 txtr">
                <h4>Why choose us ?</h4>
                <p>The Fusion Software Institute is not a class or institute, it is a family who cares about every family members. We are dedicated to advance the IT profession by setting high standards, providing quality training and creating job ready candidates.</p>

                <h4 class="mt-5">Our Key Features</h4>
                <p>1. Limited seat batches.</p>
                <p>2. Trainer-led sessions.</p>
                <p>3. Effective Resume Building.</p>
                <p>4. Weekly Mock Interviews.</p>
                <p>5. Building Leadership Skills.</p>
                <p>6. Creating Team work spirit.</p>
                <p>7. Interview Preparations.</p>
            </div>
            <div class="col-lg-12 col-md-12 mt-4">
                <h4>What is Corporate Training?</h4>
                <p>We defines training as partnering with students in a thought-provoking, challenging and creative process that inspires them to maximize their personal and professional potential. The process of traning often unlocks previously untapped sources of imagination, productivity and leadership quality of both students and trainers. We all have goals we want to reach, challenges we’re striving to overcome and times when we feel stuck. Partnering with a trainer can change your life, setting you on a path to greater personal and professional fulfillment.</p>
            </div>
            <div class="col-lg-6 col-md-12 mt-4">
                <h4>Our Vision</h4>
                <p>Our vision is to provide optimal, job oriened and real time training.</p>
            </div>
            <div class="col-lg-6 col-md-12 mt-4">
                <h4>Our Mission</h4>
                <p>Our Mission is to place students in IT industry and make them financially strong, productive and successful.</p>
            </div>
        </div>
    </div>
</section>


<!-- ################# University Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row session-title">
                <h2>{{ config('app.name', 'Laravel') }} In Numbers</h2>
                <!-- <p>Our Mission is to place students in IT industry and make them financially strong, productive and successful.</p> -->
            </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>500+</h3>
                    <span>STUDENTS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ App\Models\cources::count() ?? 0}}</h3>
                    <span>COURSES</span>
                </div>
                <div class="col-sm-3 numb">
                    <!-- <h3>{{ App\Models\instructor::count() ?? 0}}</h3> -->
                    <h3>20</h3>
                    <span>QUALIFIED TRAINERS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>95%</h3>
                    <span>PLACEMENT PERCENTAGE</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ################# Our Instructors Starts Here#######################--->

@if(isset($instructor) && count($instructor) > 0)
<div class="our-instructor">
    <div class="container">
        <div class="session-title row">
            <h2>Our Instructors</h2>
        </div>
        <div class="instruct-row row">
            @foreach($instructor as $i)
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="{{ url('public/uploads/instructor/').'/'.$i->file }}" alt="{{ $i->name }}">
                    <h6>{{ $i->name }}</h6>
                    <p>{{ $i->course }}</p>

                    <!-- <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                        <li><i class="fab fa-pinterest-p"></i></li>
                    </ul> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Why Choose Us?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <video id="myvideo1" width="70%" controls>
                    <source src="{{ url('public/assets/video/fusion-promotion.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

@endsection


@section('jspage')
<script>
    $(document).ready(function() {

        //play/pause on double click on the video
        $('video').on('click', function(e) {
            if (this.paused) {
                this.play();
            } else {
                this.pause();
            }
        });

        //play/pause of the video when the modal opens/closes. 
        $('.modal').on('show.bs.modal', function() { //show modal event for an element which has class 'modal'
            var id = $(this).attr('id'); //saves in the var the ID value of the opened modal
            var video = document.getElementById(id).querySelectorAll("video"); //Find the element 'video' inside of the modal defined by the ID previosly saved

            $(video)[0].play(); //plays what we saved on 'video' variable      
        });

        $('.modal').on('hidden.bs.modal', function() { //show modal event for an element which has class 'modal'
            var id = $(this).attr('id'); //saves in the var the ID value of the closed modal
            var video = document.getElementById(id).querySelectorAll("video"); //Find the element 'video' inside of the modal defined by the ID previosly saved

            $(video)[0].pause(); //pauses the video
            $(video)[0].currentTime = 0; //rests the video to 0 for have it from the beging when the user opens the modal again
        });

    });
</script>
@endsection