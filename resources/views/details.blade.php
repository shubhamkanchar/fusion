@extends('layouts.index')
@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>{{ $course->name ?? '' }}</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> {{ $course->name ?? '' }}</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->

<section class="with-medical">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-5">
                <h2>What is {{ $course->name ?? '' }} ?</h2>
                <p>{{ $course->desc ?? '' }}</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{ url('public/uploads/course/').'/'.$course->file }}" alt="{{ $course->name ?? '' }}">
            </div>
            <div class="col-lg-6 col-md-12">
                <h2>Syllabus</h2>
                @php $i=1; @endphp
                @foreach( explode(',',$course->syllabus) as $d )
                <p>{{ $i++}}. {{ $d }}</p>
                @endforeach
            </div>
            <div class="col-lg-6 col-md-12">
                <h4>Fees : {{ $course->fees }} only</h4>
                <h4>Duration : {{ $course->duration }} Months</h4>
                <h4></h4>
            </div>
            <div class="col-lg-6 col-md-12">
                <h2 class="mt-5">Tools</h2>
                @php $i=1; @endphp
                @foreach( explode(',',$course->tools) as $d )
                <p>{{ $i++}}. {{ $d }}</p>
                @endforeach
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
                    <span>YEARS OF EXPERIENCE</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ App\Models\cources::count() ?? 0}}</h3>
                    <span>COURSES</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ App\Models\instructor::count() ?? 0}}</h3>
                    <span>QUALIFIED STUFF</span>
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

                    <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                        <li><i class="fab fa-pinterest-p"></i></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection