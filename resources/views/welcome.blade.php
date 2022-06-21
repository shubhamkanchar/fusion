@extends('layouts.index')

@section('content')
<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel ">
        <div class="slider-img">
            <div class="item">
                <div class="slider-img"><img src="{{ url('public/assets/images/slider/slider-1.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Fusion Software Institute</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range career problems.</p>
                                <a href="{{ route('cources') }}" class="btn btn-success hidden-xs">View All Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="{{ url('public/assets/images/slider/slider-2.jpg') }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions">
                            <h1 class="slider-title">Education Learning Course</h1>
                            <p class="slider-text hidden-xs">Get expert advise and Q&A session</p>
                            <a type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success hidden-xs text-white">Book demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"> <img src="{{ url('public/assets/images/slider/slider-3.jpg') }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions">
                            <h1 class="slider-title">Best Institute to learn and Grow</h1>
                            <p class="slider-text hidden-xs">Learn by working on live project in top tech company</p>
                            <a href="{{ route('login') }}" class="btn btn-success hidden-xs">Join Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ################# Key Features Starts Here#######################--->
<div class="key-features">
    <div class="container">
        <div class="row key-row no-margin">
            <div class="box c1">
                <i class="fas fa-project-diagram"></i>
                <p>IT Industry Experts</p>
            </div>
            <div class="box c2">
                <i class="fas fa-space-shuttle"></i>
                <p>Quality Training</p>
            </div>
            <div class="box c1">
                <i class="fas fa-globe-americas"></i>
                <p>Live Sessions</p>
            </div>
            <div class="box c2">
                <i class="fas fa-feather-alt"></i>
                <p>Innovative Culture</p>
            </div>
            <div class="box c1">
                <i class="fab fa-app-store-ios"></i>
                <p>Course Completion Certificate</p>
            </div>
        </div>
    </div>
</div>

<!-- ################# popular Cources Starts Here#######################--->
<div class="popular-cources">
    <div class="container">
        <div class="session-title row">
            <h2>Our Courses</h2>
        </div>
        <div class="row courc-ro">
            @foreach($course as $c)
            <div class="col-md-4">
                <div class="courc-card">
                    <img style="height: 200px;" src="{{ url('public/uploads/course/').'/'.$c->file }}" alt="">
                    <div class="cource-det">
                        <h6>{{ $c->name }}</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> TRAINER-LED <span>{{ $c->seats }} Seats</span></li>
                            <li><i class="far fa-calendar-plus"></i> {{ $c->duration }} Months</li>
                        </ul>
                        <!-- <div class="text-center"><a href="{{ route('details',['id'=>$c->id]) }}" class="btn btn-success sm-btn">Read more</a></div> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('cources') }}" class="btn btn-primary">View All Courses</a>
        </div>
    </div>
</div>



<!-- ################# University Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row session-title">
                <h2>{{ config('app.name', 'Laravel') }} in numbers</h2>
                <p>Our Mission is to place students in IT industry and make them financially strong, productive and successful.</p>
            </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>100+</h3>
                    <span>STUDENTS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ App\Models\cources::count() ?? 0}}</h3>
                    <span>COURSES</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ App\Models\instructor::count() ?? 0}}</h3>
                    <span>QUALIFIED STAFF</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>99%</h3>
                    <span>SATISFACTION RATE</span>
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
                    <img src="{{ url('public/uploads/instructor/').'/'.$i->file }}" alt="">
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
<!-- ################# Our Blog Starts Here#######################--->


<div class="our-blog">
    <div class="container">
        <div class="session-title row">
            <h2>Upcoming Batch</h2>
        </div>
        <div class="row-blog row">
            <div class="col-md-10 vbf mx-auto">
                @foreach($batch as $b)
                <div class="blog-card row">
                    <div class="col-2">
                        <div class="date-box">
                            <span>{{ date_format(date_create($b->date),"F") }}</span>
                            <p>{{ date_format(date_create($b->date),"d") }}</p>
                            <small>{{ date_format(date_create($b->date),"Y") }}</small>
                        </div>
                    </div>
                    <div class="col-10 setv">
                        <h4>{{ $b->name }}</h4>
                        <ul>
                            <li>{{ date('h:i a', strtotime($b->time)); }}</li>
                            <li>{{ $b->days }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <!-- <div class="blog-card row">
                    <div class="col-2">
                        <div class="date-box">
                            <span>Jun</span>
                            <p>6</p>
                            <small>2019</small>
                        </div>
                    </div>
                    <div class="col-7 setv">
                        <h4>Photo Exibition in the Library</h4>
                        <ul>
                            <li>8:00 - 12:00</li>
                            <li>Forest, Avenue, Aenean egestas</li>
                        </ul>
                    </div>
                    <div class="col-3 img-cv">
                        <img src="{{ url('public/assets/images/cources/cource-2.jpg') }}" alt="">
                    </div>
                </div> -->
            </div>
        </div>
        <div class="text-center mb-5">
            <a href="{{ route('batches') }}" class="btn btn-primary">View All Batches</a>
        </div>
    </div>
</div>
@endsection