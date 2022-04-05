@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
           <x-candidate id="{{ $candidate->id }}" name="{{ $candidate->first_name }}" address="active" city="{{ $candidate->city }}" country="{{ $candidate->country }}" image="{{ $candidate->image }}"></x-candidate>
            <div class="col-lg-8 col-xl-9">
                <div class="row">
                    @if(session()->has("status"))
                            <div class="col col-md text-center">
                                <div class="aler alert-success">
                                    <p>{{ session()->get('status') }}</p>
                                </div>
                            </div>
                            @endif
                    <div class="col-lg-12">
                        <h4 class="mb30">Dashboard</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                        <div class="ff_one">
                            <div class="icon"><span class="flaticon-paper-plane"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($candidate->jobs) }}</div>
                                <p>Stosowane</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                        <div class="ff_one style2">
                            <div class="icon"><span class="flaticon-favorites"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($candidate->favorites) }}</div>
                                <p>Ulubiona strona</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="application_statics">
                            <h4>Statistics</h4>
                            <div class="c_container"></div>
                        </div>
                    </div>
                    <div class="col-xl-11">
                        <div class="recent_job_apply">
                            <h4 class="title">Ostatnio złożone oferty pracy <a class="text-thm float-right" href="{{ route('jobs.index') }}">Przeglądaj wszystkie oferty pracy <span class="flaticon-right-arrow"></span></a></h4>
                            @foreach ($applied_jobs as $applied_job )
                            <div class="rj_grid">
                                <h4 class="sub_title">{{ $applied_job->title }}</h4>
                                <p class="text-thm float-left">{{ $applied_job->type }}</p>
                                <ul class="rj_post_address float-right">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span></a></li>
                                    <li class="list-inline-item"><a href="#">{{ $applied_job->city }}, {{ $applied_job->country }}</a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edytuj"><span class="flaticon-edit"></span></a></li>
                                    <li class="list-inline-item"><form method="POST" action="{{ route('delete.apply',$applied_job->id) }}">@csrf @method('DELETE')<button class="btn btn-sm"  data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></from></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
