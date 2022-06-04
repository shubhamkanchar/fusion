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
                                <h1 class="slider-title">Best Free University Template</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                <a href="{{ route('cources') }}" class="btn btn-success hidden-xs">View All Cources</a>
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
                            <p class="slider-text hidden-xs">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.</p>
                            <a href="#" class="btn btn-success hidden-xs">Schedule A Visit</a>
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
                            <h1 class="slider-title">Best Free University Template</h1>
                            <p class="slider-text hidden-xs">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.</p>
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
            <h2>Our Cources</h2>
        </div>
        <div class="row courc-ro">
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="{{ url('public/assets/images/cources/cource-1.jpg') }}" alt="">
                    <div class="cource-det">
                        <h6>Graphic Design</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="{{ url('public/assets/images/cources/cource-2.jpg') }}" alt="">
                    <div class="cource-det">
                        <h6>Online Marketing</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="{{ url('public/assets/images/cources/cource-3.jpg') }}" alt="">
                    <div class="cource-det">
                        <h6>App Programing</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
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
                    <h3>12+</h3>
                    <span>YEARS OF EXPEREANCE</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>10</h3>
                    <span>Cources</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>15</h3>
                    <span>QUALIFIED STUFF</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>99%</h3>
                    <span>Satisfaction Rate</span>
                </div>
            </div>
        </div>

    </div>

</div>




<!-- ################# Our Instructors Starts Here#######################--->

<div class="our-instructor">
    <div class="container">
        <div class="session-title row">
            <h2>Our Instructors</h2>
        </div>
        <div class="instruct-row row">
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="{{ url('public/assets/images/team/avatar-2.jpg') }}" alt="">
                    <h6>Andre Jhon</h6>
                    <p>Graphic Design</p>

                    <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                        <li><i class="fab fa-pinterest-p"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="{{ url('public/assets/images/team/avatar-3.jpg') }}" alt="">
                    <h6>Ahalkji Jhon</h6>
                    <p>Graphic Design</p>

                    <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                        <li><i class="fab fa-pinterest-p"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="{{ url('public/assets/images/team/avatar-5.jpg') }}" alt="">
                    <h6>Reniju Sam</h6>
                    <p>Graphic Design</p>

                    <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                        <li><i class="fab fa-pinterest-p"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="{{ url('public/assets/images/team/avatar-4.jpg') }}" alt="">
                    <h6>Depak Andrw</h6>
                    <p>Graphic Design</p>

                    <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                        <li><i class="fab fa-pinterest-p"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ################# Our Blog Starts Here#######################--->


<div class="our-blog">
    <div class="container">
        <div class="session-title row">
            <h2>Upcoming Batch</h2>
        </div>
        <div class="row-blog row">
            <div class="col-md-10 vbf mx-auto">
                <div class="blog-card row">
                    <div class="col-2">
                        <div class="date-box">
                            <span>Jun</span>
                            <p>3</p>
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
                        <img src="{{ url('public/assets/images/cources/cource-1.jpg') }}" alt="">
                    </div>
                </div>

                <div class="blog-card row">
                    <div class="col-2">
                        <div class="date-box">
                            <span>Jun</span>
                            <p>2</p>
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
                </div>


                <div class="blog-card row">
                    <div class="col-2">
                        <div class="date-box">
                            <span>Jun</span>
                            <p>4</p>
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
                        <img src="{{ url('public/assets/images/cources/cource-3.jpg') }}" alt="">
                    </div>
                </div>


                <div class="blog-card row">
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
                </div>
                
            </div>
        </div>
        <div class="text-center mb-5">
            <a href="{{ route('batches') }}" class="btn btn-primary">View All Batches</a>
        </div>
    </div>
</div>
@endsection