@extends('layouts.index')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Batches</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Batches</li>
            </ul>
        </div>
    </div>
</div>

<div class="our-blog bb3 pc2">
    <div class="container">
        <div class="row-blog row">
            <div class="col-md-6 vbf mx-auto">
                <h3>Upcoming Batches</h3>
                @foreach($batch as $b)
                <div class="blog-card row">
                    <div class="col-3">
                        <div class="date-box">
                            <span>{{ date_format(date_create($b->date),"F") }}</span>
                            <p>{{ date_format(date_create($b->date),"d") }}</p>
                            <small>{{ date_format(date_create($b->date),"Y") }}</small>
                        </div>
                    </div>
                    <div class="col-9 setv">
                        <h4>{{ $b->name }}</h4>
                        <ul>
                            <li>{{ date('h:i a', strtotime($b->time)); }}</li>
                            <li>{{ $b->days }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 vbf mx-auto">
            <h3>Ongoing Batches</h3>
                @foreach($onbatch as $b)
                <div class="blog-card row">
                    <div class="col-3">
                        <div class="date-box">
                            <span>{{ date_format(date_create($b->date),"F") }}</span>
                            <p>{{ date_format(date_create($b->date),"d") }}</p>
                            <small>{{ date_format(date_create($b->date),"Y") }}</small>
                        </div>
                    </div>
                    <div class="col-9 setv">
                        <h4>{{ $b->name }}</h4>
                        <ul>
                            <li>{{ date('h:i a', strtotime($b->time)); }}</li>
                            <li>{{ $b->days }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row-blog row">
        
        </div>
    </div>
</div>
@endsection