@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
           <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>

            <div class="col-lg-9 col-xl-9">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="candidate_job_alart_btn">
                            <h4 class="fz20 mb15">{{ count($candidates) }} Znaleziono kandydatów</h4>
                        </div>
                    </div>
                    @foreach ($candidates as $candidate )
                      <div class="col-lg-12">
                          <div class="candidate_list_view">
                              <div class="thumb">
                                  <img class="img-fluid rounded-circle" style="height:103px;width:106px" src="{{ $candidate->image }}" alt="c1.jpg">
                                  <div class="cpi_av_rating"><span>4.5</span></div>
                              </div>
                              <div class="content">
                                  <h4 class="title">{{ $candidate->first_name }} {{ $candidate->last_name }}</h4>
                                  <p>kierowca</p>
                                  <ul class="review_list">
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                  </ul>
                                  <ul class="address_list">
                                      <li class="list-inline-item"><a href="#"><h4>Location</h4> <span class="flaticon-location-pin"></span> {{ $candidate->address }}, {{ $candidate->city }}, {{ $candidate->country }}</a></li>
                                      {{-- <li class="list-inline-item"><a href="#"><h4>Rate</h4> <span class="flaticon-price"></span> $18.00 hour</a></li>
                                      <li class="list-inline-item"><a href="#"><h4>Job Success</h4> 95%</a></li> --}}
                                  </ul>
                              </div>
                              <a class="btn btn-transparent float-right fn-lg" href="{{ route('candidate.profile',['id'=>$candidate->id,'job'=>$job->id]) }}">Zobacz profil <span class="flaticon-right-arrow"></span></a>
                          </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
