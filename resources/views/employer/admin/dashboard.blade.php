@extends("layouts.layout")
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            @if($employe)
           <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>
           @else
           <x-employe name="{{ auth()->user()->name }}" image="" city="" country=""></x-employe>
           @endif
           <div class="col-sm-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb30">Dashboard</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="ff_one">
                            <div class="icon"><span class="flaticon-paper-plane"></span></div>
                            <div class="detais">

                                <div class="timer">{{ count($jobs) }}</div>
                                <p>Posted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="ff_one style3">
                            <div class="icon"><span class="flaticon-alarm"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($applied_jobs) }}</div>
                                <p>Applied</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="application_statics">
                            <h4>Statistics</h4>
                            <div class="c_container"></div>
                        </div>
                    </div>

                    <div class="col-xl-10">
                        <div class="recent_job_apply">
                            <h4 class="title">Latest Applications</h4>
                            @if($employe)
                            @foreach ($jobs as $job)
                            @foreach ($job->candidates as $candidate)
                            <div class="candidate_list_view style3 mb50">
                                <div class="thumb">
                                    <img class="img-fluid rounded-circle" src="{{ $candidate->image }}" alt="1.jpg">
                                    <div class="cpi_av_rating"><span>4.5</span></div>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ $candidate->first_name }} {{ $candidate->last_name }}<span class="verified text-thm pl10"><i class="fa fa-check-circle"></i></span></h4>
                                    <p>{{ $candidate->type }}</p>
                                    <ul class="review_list">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                                <ul class="freelancer_place mt25 float-right fn-xsd tac-xsd">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> {{ $candidate->city }}</a></li>
                                    <li class="list-inline-item"><a href="{{route('candidate.profile',$candidate->id)}}"><button class="btn btn-thm">Hire</button></a></li>
                                </ul>
                            </div>
                            @endforeach

                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
