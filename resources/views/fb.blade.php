<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fusion Institute</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        body {
            padding-top: 56px;
        }

        header {
            color: #fff;
        }

        .feature-box {
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .testimonial {
            padding: 60px 0;
        }

        .counter {
            color: #fff;
            padding: 60px 0;
        }

        .counter .count {
            font-size: 48px;
            font-weight: bold;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
        }

        footer {
            padding: 20px 0;
        }

        .carousel {
            margin: 50px auto;
        }

        .carousel .carousel-item {
            color: #999;
            overflow: hidden;
            min-height: 120px;
            font-size: 13px;
        }

        .carousel .media {
            position: relative;
            padding: 0 0 0 20px;
            margin-left: 20px;
        }

        .carousel .media img {
            width: 75px;
            height: 75px;
            display: block;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border: 2px solid #fff;
        }

        .carousel .testimonial {
            color: #fff;
            position: relative;
            background: #9b9b9b;
            padding: 15px;
            margin: 0 0 20px 20px;
        }

        .carousel .testimonial::before,
        .carousel .testimonial::after {
            content: "";
            display: inline-block;
            position: absolute;
            left: 0;
            bottom: -20px;
        }

        .carousel .testimonial::before {
            width: 20px;
            height: 20px;
            background: #9b9b9b;
            box-shadow: inset 12px 0 13px rgba(0, 0, 0, 0.5);
        }

        .carousel .testimonial::after {
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-bottom-color: #fff;
            border-left-color: #fff;
        }

        .carousel .carousel-item .row>div:first-child .testimonial {
            margin: 0 20px 20px 0;
        }

        .carousel .carousel-item .row>div:first-child .media {
            margin-left: 0;
        }

        .carousel .testimonial p {
            text-indent: 40px;
            line-height: 21px;
            margin: 0;
        }

        .carousel .testimonial p::before {
            content: "\201D";
            font-family: Arial, sans-serif;
            color: #fff;
            font-weight: bold;
            font-size: 68px;
            line-height: 70px;
            position: absolute;
            left: -25px;
            top: 0;
        }

        .carousel .overview {
            padding: 3px 0 0 15px;
        }

        .carousel .overview .details {
            padding: 5px 0 8px;
        }

        .carousel .overview b {
            text-transform: uppercase;
            color: #ff5555;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            background: #666;
            text-shadow: none;
            top: 4px;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 16px;
        }

        .carousel-control-prev {
            left: auto;
            right: 40px;
        }

        .carousel-control-next {
            left: auto;
        }

        .carousel-indicators {
            bottom: -80px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 17px;
            height: 17px;
            border-radius: 0;
            margin: 1px 5px;
            box-sizing: border-box;
        }

        .carousel-indicators li {
            background: #e2e2e2;
            border: 4px solid #fff;
        }

        .carousel-indicators li.active {
            color: #fff;
            background: #ff5555;
            border: 5px double;
        }

        .star-rating li {
            padding: 0 2px;
        }

        .star-rating i {
            font-size: 14px;
            color: #ffdc12;
        }

        .timeline {
            position: relative;
            /* background: #272e48; */
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            padding: 5rem;
            margin: 0 auto 1rem auto;
            overflow: hidden;
        }

        .timeline:after {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -2px;
            border-right: 2px dashed #4b546f;
            height: 100%;
            display: block;
        }

        .timeline-row {
            padding-left: 50%;
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-row .timeline-time {
            position: absolute;
            right: 50%;
            top: 15px;
            text-align: right;
            margin-right: 20px;
            /* color: #bcd0f7; */
            font-size: 1.7rem;
        }

        .timeline-row .timeline-time small {
            display: block;
            font-size: 0.8rem;
        }

        .timeline-row .timeline-content {
            position: relative;
            padding: 20px 30px;
            background: #1a233a;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .timeline-row .timeline-content:after {
            content: "";
            position: absolute;
            top: 20px;
            height: 16px;
            width: 16px;
            background: #1a233a;
        }

        .timeline-row .timeline-content:before {
            content: "";
            position: absolute;
            top: 20px;
            right: -49px;
            width: 20px;
            height: 20px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            z-index: 10;
            background: #272e48;
            border: 2px dashed #4b546f;
        }

        .timeline-row .timeline-content h4 {
            margin: 0 0 20px 0;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            line-height: 150%;
        }

        .timeline-row .timeline-content p {
            margin-bottom: 30px;
            line-height: 150%;
        }

        .timeline-row .timeline-content i {
            font-size: 1.2rem;
            line-height: 100%;
            padding: 15px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            background: #272e48;
            margin-bottom: 10px;
            display: inline-block;
        }

        .timeline-row .timeline-content .thumbs {
            margin-bottom: 20px;
            display: flex;
        }

        .timeline-row .timeline-content .thumbs img {
            margin: 5px;
            max-width: 60px;
        }

        .timeline-row .timeline-content .badge {
            color: #ffffff;
            background: linear-gradient(120deg, #00b5fd 0%, #0047b1 100%);
        }

        .timeline-row:nth-child(even) .timeline-content {
            margin-left: 40px;
            text-align: left;
        }

        .timeline-row:nth-child(even) .timeline-content:after {
            left: -8px;
            right: initial;
            border-bottom: 0;
            border-left: 0;
            transform: rotate(-135deg);
        }

        .timeline-row:nth-child(even) .timeline-content:before {
            left: -52px;
            right: initial;
        }

        .timeline-row:nth-child(odd) {
            padding-left: 0;
            padding-right: 50%;
        }

        .timeline-row:nth-child(odd) .timeline-time {
            right: auto;
            left: 50%;
            text-align: left;
            margin-right: 0;
            margin-left: 20px;
        }

        .timeline-row:nth-child(odd) .timeline-content {
            margin-right: 40px;
        }

        .timeline-row:nth-child(odd) .timeline-content:after {
            right: -8px;
            border-left: 0;
            border-bottom: 0;
            transform: rotate(45deg);
        }

        .nav-link{
            font-weight: 700;
        }

        @media (max-width: 992px) {
            .timeline {
                padding: 15px;
            }

            .timeline:after {
                border: 0;
            }

            .timeline .timeline-row:nth-child(odd) {
                padding: 0;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-time {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 10px 0;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content {
                margin: 0;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content:before {
                display: none;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content:after {
                display: none;
            }

            .timeline .timeline-row:nth-child(even) {
                padding: 0;
            }

            .timeline .timeline-row:nth-child(even) .timeline-time {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 10px 0;
                text-align: left;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content {
                margin: 0;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content:before {
                display: none;
            }

            .timeline .timeline-row:nth-child(even) .timeline-content:after {
                display: none;
            }
        }
        .error 
        {
            color: red;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <header class="border">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
            <div class="container">
                <h3>
                    <a href="https://fusion-institute.com">
                        <img src="https://fusion-institute.com/public/assets/images/logo3.jpg" alt="welcome">
                    </a>
                </h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto fs-5">
                        <li class="nav-item">
                            <a class="nav-link text-primary ms-2 me-2" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary ms-2 me-2" href="#courses">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary ms-2 me-2" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary ms-2 me-2" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="container-fluid p-5"
        style="background-image:url('https://img.freepik.com/free-vector/background-realistic-abstract-technology-particle_23-2148431735.jpg');background-repeat:no-repeat;background-size:cover">

        <header class="jumbotron row">
            <div class="col-md-6 p-5">
                <h1 class="display-3">Welcome to our Fusion Institute!</h1>
                <p class="lead">Empowering minds through quality education.</p>
                <a href="#contact" class="btn btn-primary btn-lg">Contact Us</a>
            </div>
            <div class="col-md-6 p-5">
                <video style="height: 500px;" id="myvideo" width="100%" controls>
                    <source src="{{ url('public/assets/video/course.mp4')}}" type="video/mp4">
                </video>
            </div>
        </header>
    </div>
    <div class="container">
        <h2 class="text-center m-5 text-primary">KEY FEATURES</h2>
        <div class="timeline">
            <div class="timeline-row">
                <div class="timeline-time">
                    Qualified and Experienced Instructors
                </div>
                <div class="timeline-content">
                    <i class="icon-attachment"></i>
                    {{-- <h4>Admin theme!</h4> --}}
                    <p class="text-white">Successful coaching classes typically employ qualified and experienced instructors who are
                        well-versed in the subjects they teach. These educators often have a strong academic
                        background and a deep understanding of the curriculum.</p>
                    {{-- <div class="thumbs">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar2.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            alt="Maxwell Admin">
                    </div>
                    <div class="">
                        <span class="badge badge-pill">Sales</span>
                        <span class="badge badge-pill">Admin</span>
                    </div> --}}
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-time">
                    Personalized Attention
                </div>
                <div class="timeline-content">
                    <i class="icon-code"></i>
                    {{-- <h4>Admin Dashboard!</h4> --}}
                    <p class="text-white">
                        One of the primary advantages of coaching classes is the ability to provide personalized
                            attention to students. Smaller class sizes or one-on-one sessions allow instructors to
                            identify and address individual learning needs, adapting their teaching methods accordingly.
                    </p>
                    {{-- <div class="thumbs">
                        <div class="thumbs">
                            <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                alt="Maxwell Admin">
                            <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                alt="Maxwell Admin">
                            <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                alt="Maxwell Admin">
                        </div>
                    </div>
                    <div class="">
                        <span class="badge badge-pill">Graphs</span>
                        <span class="badge badge-pill">Chat</span>
                    </div> --}}
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-time">
                    Structured Curriculum
                </div>
                <div class="timeline-content">
                    <i class="icon-turned_in_not"></i>
                    {{-- <h4>Best Admin Template!</h4> --}}
                    <p class="text-white">Coaching classes often follow a structured curriculum that complements the standard school
                        syllabus. This can help students reinforce their understanding of key concepts, fill gaps in
                        their knowledge, and gain a more comprehensive grasp of the subject matter.</p>
                    {{-- <div>
                        <span class="badge badge-pill">Invoice</span>
                        <span class="badge badge-pill">Tasks</span>
                    </div> --}}
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-time">
                    Regular Assessments and Feedback
                </div>
                <div class="timeline-content">
                    <i class="icon-directions"></i>
                    {{-- <h4>Maxwell Admin</h4> --}}
                    <p class="text-white">Continuous assessment and feedback are integral components of coaching classes. Regular
                        quizzes, tests, and assignments help instructors gauge students' progress, identify areas of
                        improvement, and provide constructive feedback to enhance their learning experience.</p>
                    {{-- <div>
                        <span class="badge badge-pill">Profile</span>
                        <span class="badge badge-pill">Sales</span>
                    </div> --}}
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-time">
                    Exam Preparation and Strategies
                </div>
                <div class="timeline-content">
                    <i class="icon-change_history"></i>
                    {{-- <h4>Maxwell Dashboard</h4> --}}
                    <p class="text-white">Many coaching classes focus on exam preparation, equipping students with effective study
                        strategies, time management skills, and test-taking techniques. This can be particularly
                        beneficial for competitive exams where specific strategies can make a significant
                        difference.</p>
                    {{-- <div class="thumbs">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar6.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar5.png"
                            alt="Maxwell Admin">
                    </div>
                    <div>
                        <span class="badge badge-pill">Analytics</span>
                        <span class="badge badge-pill">Contacts</span>
                    </div> --}}
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-time">
                    Technology Integration
                </div>
                <div class="timeline-content">
                    <i class="icon-code"></i>
                    <h4>Admin Dashboard!</h4>
                    <p class="text-white">
                        Modern coaching classes often leverage technology to enhance the learning experience. This
                        may include online resources, interactive learning platforms, or virtual classrooms,
                        providing students with additional tools to reinforce their understanding of the material.
                    </p>
                    {{-- <div class="thumbs">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar4.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            alt="Maxwell Admin">
                    </div>
                    <div class="">
                        <span class="badge badge-pill">Ecommerce</span>
                        <span class="badge badge-pill">CRM</span>
                    </div> --}}
                </div>
            </div>

            {{-- <div class="timeline-row">
                <div class="timeline-time">
                    Technology Integration
                </div>
                <div class="timeline-content">
                    <i class="icon-attachment"></i>
                    <h4>Admin Template!</h4>
                    <p>Maxwell Admin Dashboard contains C3 graphs, flot graphs, data tables, calendar, drag &amp; drop
                        and ion slider.</p>
                    <div class="thumbs">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar2.png"
                            alt="Maxwell Admin">
                        <img class="img-fluid rounded" src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            alt="Maxwell Admin">
                    </div>
                    <div class="">
                        <span class="badge badge-pill">Orders</span>
                        <span class="badge badge-pill">Sales</span>
                    </div>
                </div>
            </div>

            <div class="timeline-row">
                <div class="timeline-content">
                    <p class="m-0">Loading...</p>
                </div>
            </div> --}}

        </div>
    </div>

    <section id="courses" class="p-5" style="background-color: #5FBDFF">
        <div class="container m-5">
            <h2 class="text-center text-white mb-5">OUR COURSES</h2>
            <div class="row courc-ro">
                @foreach ($course as $c)
                    @if ($c->course_status == 'on')
                        <div class="col-md-4">
                            <div class="card shadow m-2">
                                <img class="card-img" src="{{ url('public/uploads/course/') . '/' . $c->file }}"
                                    alt="{{ $c->name }}" style="height: 200px">
                                <div class="card-body">
                                    <h6>{{ $c->name }}</h6>
                                    <ul>
                                        <li><i class="fas fa-graduation-cap"></i> TRAINER-LED <span>{{ $c->seats }}
                                                Seats</span></li>
                                        <li><i class="far fa-calendar-plus"></i> {{ $c->duration }} Months </li>
                                    </ul>
                                    <div class="text-center"><a href="{{ route('details', ['id' => $c->id]) }}"
                                            class="btn btn-success sm-btn">Read more</a></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonial">
        <div class="container-lg">
            <div class="row">
                <h2 class="text-center mb-5 text-primary">Customer <b>Testimonials</b></h2>
                <div class="col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Carousel indicators -->
                        {{-- <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol> --}}
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec
                                                turpis vel, semper malesuada ante.</p>
                                        </div>
                                        <div class="media">
                                            <img src="/examples/images/clients/1.jpg" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Paula Wilson</b></div>
                                                    <div class="details">Media Analyst / SkyNet</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit
                                                tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna
                                                consequat faucibus quam.</p>
                                        </div>
                                        <div class="media">
                                            <img src="/examples/images/clients/2.jpg" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Antonio Moreno</b></div>
                                                    <div class="details">Web Developer / SoftBee</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec
                                                turpis vel, semper malesuada ante.</p>
                                        </div>
                                        <div class="media">
                                            <img src="/examples/images/clients/3.jpg" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Michael Holz</b></div>
                                                    <div class="details">Web Developer / DevCorp</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit
                                                tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna
                                                consequat faucibus quam.</p>
                                        </div>
                                        <div class="media">
                                            <img src="/examples/images/clients/4.jpg" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Mary Saveley</b></div>
                                                    <div class="details">Graphic Designer / MarsMedia</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec
                                                turpis vel, semper malesuada ante.</p>
                                        </div>
                                        <div class="media">
                                            <img src="/examples/images/clients/5.jpg" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Martin Sommer</b></div>
                                                    <div class="details">SEO Analyst / RealSearch</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit
                                                tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna
                                                consequat faucibus quam.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="/examples/images/clients/6.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>John Williams</b></div>
                                                    <div class="details">Web Designer / UniqueDesign</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" style="background-color: #5FBDFF" class="pb-5 mb-5">
        <div class="container">
            <h2 class="pt-5 pb-3 text-center m-5 text-white">CONTACT US</h2>
            <div class="row">
                <div class="col-lg-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867.1463250800094!2d73.9404905458347!3d18.550636051084744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c399308c4df7%3A0x56a3dd07e2356fa1!2sStellar%20Spaces!5e0!3m2!1sen!2sin!4v1662384040653!5m2!1sen!2sin"
                        width="100%" height="100%" class="border border-0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 card p-3 shadow">
                    <h2>Request-a-Callback</h2>
                    <form id="callback" action="{{ route('request_mail') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="callback">
                        <div class="form-group row">
                            <div class="col-sm-12 p-2">
                                <label>Enter Name :</label>
                                <input type="text" placeholder="Enter Name" name="name"
                                    class="form-control input-sm" onkeydown="return /[a-zåäö ]/i.test(event.key)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 p-2">
                                <label>Email Address :</label>
                                <input type="text" name="email" placeholder="Enter Email Address"
                                    class="form-control input-sm" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 p-2">
                                <label>Mobile Number:</label>
                                <input type="number" name="mobile" placeholder="Enter Mobile Number"
                                    class="form-control input-sm"  required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 p-2">
                                <label>Select Course you are interested in :</label>
                                <select name="course" rows="5" placeholder="Enter select course"
                                    class="form-control input-sm" required>
                                    <option></option>
                                    <option>Advance Software Testing (Manual+ Automation)</option>
                                    <option>Java Full Stack Development</option>
                                    <option>Python Development</option>
                                    <option>.Net Full Stack Development</option>
                                    <option>RPA Development</option>
                                    <option>AWS/DevOps</option>
                                    <option>Power BI</option>
                                    <option>Salesforce</option>
                                    <option>SAP Material Management</option>
                                    <option>Data Science</option>
                                    <option>SAP Fieldglass</option>
                                    <option>SAP FICO</option>
                                    <option>Full Stack web development</option>
                                    <option>DevOps</option>
                                    <option>Big Data Hadoop</option>
                                    <option>Sap SD</option>
                                    <option>Microsoft Azure</option>
                                    <option>React JS</option>
                                    <option>Angular JS</option>
                                    <option>Oracle SQL &amp; PLSQL</option>
                                    <option>Data Analyst</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <button class="btn btn-primary" fdprocessedid="ckv1vs">
                                    <i class="fa fa-circle-notch fa-spin hidden mr-2 fa-spin-call d-none"></i> Request
                                    Callback
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll-to-top button -->
    <button class="scroll-to-top" onclick="topFunction()" id="scrollToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <footer class="footer mt-5">

        <!-- Widgets - Bootstrap Brain Component -->
        <section class=" py-xl-8 bg-light">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Get in Touch</h4>
                            <address class="mb-4">Office 101, 01st Floor, Stellar Spaces, Kharadi South Main Road,
                                opp. Zensar, IT Park,
                                Kharadi, Pune, Maharashtra 411014</address>
                            <p class="mb-1">
                                <a class="link-secondary text-decoration-none" href="tel:+917498992609">7498992609,
                                    7741817273, 7719987273</a>
                            </p>
                            <p class="mb-0">
                                <a class="link-secondary text-decoration-none"
                                    href="mailto:inquiry@fusion-institute.com">inquiry@fusion-institute.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Services</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#!" class="link-secondary text-decoration-none">AI Solutions</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#!" class="link-secondary text-decoration-none">Digital
                                        Marketing</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#!" class="link-secondary text-decoration-none">App Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#!" class="link-secondary text-decoration-none">SEO Consultancy</a>
                                </li>
                                <li class="mb-0">
                                    <a href="#!" class="link-secondary text-decoration-none">Web Design</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Company</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="{{ route('welcome') }}"
                                        class="link-secondary text-decoration-none">Home</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('about_us') }}"
                                        class="link-secondary text-decoration-none">About</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('contact_us') }}"
                                        class="link-secondary text-decoration-none">Contact</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('batches') }}"
                                        class="link-secondary text-decoration-none">Batches</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Our Newsletter</h4>
                            <p class="mb-4">Subscribe to our newsletter to get our news & discounts delivered to you.
                            </p>
                            <form action="#!">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="email-newsletter-addon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                </svg>
                                            </span>
                                            <input type="email" class="form-control" id="email-newsletter"
                                                value="" placeholder="Email Address"
                                                aria-label="email-newsletter"
                                                aria-describedby="email-newsletter-addon" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Copyright - Bootstrap Brain Component -->
        <div class="bg-light py-4 py-md-5 py-xl-8 border-top border-light-subtle">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-0">
                    <div class="col-xs-12 col-sm-6 col-md-4 order-0 order-md-0">
                        <div class="footer-logo-wrapper text-center text-sm-start">
                            <a href="#!">
                                <img src="https://fusion-institute.com/public/assets/images/logo3.jpg"
                                    alt="BootstrapBrain Logo" width="175" height="57">
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 order-2 order-md-1">
                        <div class="footer-copyright-wrapper text-center">
                            &copy; 2024. All Rights Reserved.
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 order-1 order-md-2">
                        <ul class="nav justify-content-center justify-content-sm-end">
                            <li class="nav-item">
                                <a class="nav-link link-dark"
                                    href="https://www.facebook.com/profile.php?id=100088395132564&amp;mibextid=ZbWKwL">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link link-dark" href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-dark" href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- Bootstrap JS and dependencies (version 5) -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
    <!-- Custom JS for animated scroll-to-top button -->
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollToTopBtn").style.display = "block";
            } else {
                document.getElementById("scrollToTopBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
<script>
    $(document).ready(function() {
        $("#callback").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                // comment: {
                //     required: true
                // },
                course: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: 'Please enter name',
                },
                email: {
                    required: 'Please enter email'
                },
                mobile: {
                    required: 'Please enter mobile number',
                    digits: 'Please enter valid mobile number'
                },
                // comment: {
                //     required: "Please enter message we would like to hear from you"
                // },
                course: {
                    required: 'Please select course',
                }
            },
            submitHandler: function(form, e) {
                $('.fa-spin-contact').removeClass('d-none');
                e.preventDefault();
                var form = $(form);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        $('.fa-spin-contact').addClass('d-none');
                        if (data.flag == 'success') {
                            toastr.success(data.msg);
                            document.getElementById("callback").reset();
                        } else if (data.flag == 'error') {
                            toastr.success(data.msg);
                        }
                    }
                });
            }
        });

        // $("#callback").submit(function(e) {
        //     e.preventDefault();


        // });
    });
</script>
</body>

</html>
