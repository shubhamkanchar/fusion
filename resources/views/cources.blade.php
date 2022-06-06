@extends('layouts.index')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Courses</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Courses</li>
            </ul>
        </div>
    </div>
</div>
<!-- ######## Page  Title End ####### -->

<!-- ################# popular Cources Starts Here#######################--->
<div class="popular-cources pc2">
    <div class="container">
        <div class="row courc-ro">
            @foreach($course as $c)
            <div class="col-md-4">
                <div class="courc-card">
                    <img style="height: 200px;" src="{{ url('public/uploads/course/').'/'.$c->file }}" alt="">
                    <div class="cource-det">
                        <h6>{{ $c->name }}</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>{{ $c->seats }} Seats</span></li>
                            <li><i class="far fa-calendar-plus"></i> {{ $c->duration }} Months </li>
                        </ul>
                        <div class="text-center"><a href="{{ route('details',['id'=>$c->id]) }}" class="btn btn-success sm-btn">Read more</a></div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        <div class="row courc-ro">
        {{ $course->links() }}
        </div>
    </div>
</div>
@endsection