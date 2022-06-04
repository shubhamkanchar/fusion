@extends('layouts.index')
@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>About {{ config('app.name', 'Laravel') }}</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
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
                <img src="{{ url('public/assets/images/why.jpg') }}" alt="">
            </div>
            <div class="col-lg-6 col-md-12 txtr">
                <h4>Why choose us ?</h4>
                <p>The Fusion Corporate Training Center (FCTC) is not a class or institute it is a family who cares about every family members.FCTC is dedicated to advancing the IT profession by setting high standards, providing quality training and creating job ready candidates.</p>

                <h4 class="mt-5">Our Key Features</h4>
                <p>1. Limited seat batches.</p>
                <p>2. Trainer-led sessions.</p>
                <p>3. Effective Resume Building.</p>
                <p>4. Weekly Mock Interviews.</p>
                <p>5. Building Leadership Skills.</p>
                <p>6. Creating Team work spirit.</p>
                <p>7. Interview Preparations.</p>
            </div>
        </div>
    </div>
</section>


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
@endsection