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
            <div class="col-lg-6 col-md-12">
                <h2>Course Name : {{ $course->name ?? '' }}</h2>
                
                <h4 class="mt-3">Course Description :</h4> 
                <p>{{ $course->desc ?? '' }}</p>
                
                <h4 class="mt-3">Language : </h4> 
                <p>{{ $course->lang }}</p>
                
                <h4 class="mt-3">Requirement / Prerequisite</h4>
                @php $i=1; @endphp
                @foreach( explode(',',$course->pre) as $d )
                @if($d != '')
                <p>{{ $i++}}. {{ $d }}</p>
                @endif
                @endforeach

                <h4 class="mt-3">Who this course id for :</h4> 
                <p>{{ $course->for }}</p>

                <h4 class="mt-3">Tools</h4>
                @php
                $i=1;
                $array=explode(',',$course->tools);
                @endphp

                @foreach($array as $d )
                @if($d != '')
                <p>{{ $i++}}. {{ $d }}</p>
                @endif
                @endforeach
            </div>
            <div class="col-lg-6 col-md-12">
                <img style="width: 100%;" src="{{ url('public/uploads/course/').'/'.$course->file }}" alt="{{ $course->name ?? '' }}">
                <h4 class="mt-3">Fees : {{ $course->fees }} only</h4>
                <h4 class="mt-3">Duration : {{ $course->duration }} Months</h4>

                <h4 class="mt-3">This course includes</h4>
                @php $i=1; @endphp
                @foreach( explode(',',$course->pre) as $d )
                @if($d != '')
                <p>{{ $i++}}. {{ $d }}</p>
                @endif
                @endforeach

                

                @if(!empty($course->pdf))
                <a class="btn btn-primary mt-3" href="{{ route('download_pdf',['file'=>$course->pdf,'course'=>$course->name]) }}">Download syllabus</a>
                @endif
            </div>
            
            <!-- <div class="col-lg-6 col-md-12 mt-3">
                <h2>Requirement / Prerequisite</h2>
                @php $i=1; @endphp
                @foreach( explode(',',$course->pre) as $d )
                @if($d != '')
                <p>{{ $i++}}. {{ $d }}</p>
                @endif
                @endforeach
            </div>
            <div class="col-lg-6 col-md-12">
                <h4 class="mt-5">Fees : {{ $course->fees }} only</h4>
                <h4>Duration : {{ $course->duration }} Months</h4>
            </div>
           
            <div class="col-lg-6 col-md-12 mt-2">
                <h2>Tools</h2>
                @php
                $i=1;
                $array=explode(',',$course->tools);
                @endphp

                @foreach($array as $d )
                @if($d != '')
                <p>{{ $i++}}. {{ $d }}</p>
                @endif
                @endforeach

            </div> -->
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