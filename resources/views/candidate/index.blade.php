@extends('layouts.layout')
@section('content')

<!-- Our Candidate List -->
<section class="our-faq bgc-fa mt50">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-xl-3 dn-smd">
              <div class="faq_search_widget mb30">
                  <h4 class="fz20 mb15">Wyszukaj słowa kluczowe</h4>
                  <form action="{{ route('candidate.search') }}" method="post">
                    @csrf
                      <div class="input-group mb-3">
                          <input type="text" name="value"  class="form-control" placeholder="Znajdź swoje pytanie" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <input type="hidden" name="key" value="first_name">
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span class="flaticon-search"></span></button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="faq_search_widget mb30">
                  <h4 class="fz20 mb15">Lokalizacja</h4>
                  <form action="{{ route('candidate.search') }}" method='POST'>
                      @csrf
                        <div class="input-group mb-3">
                            <input type="hidden" name="key" class="form-control" value="country">
                            <input type="text" name="value" class="form-control" placeholder="Znajdź swoje pytanie" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span class="flaticon-location-pin"></span></button>
                            </div>
                        </div>
                    </form>
              </div>

              <div class="cl_skill_checkbox mb30">
                  <h4 class="fz20 mb20">język</h4>
                  <div class="content ui_kit_checkbox text-left">
                    <form action="{{ route('candidate.search') }}" method="post">
                        @csrf
                        <input type="hidden" name="key" value="language">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="value" value="allmand">
                            <label class="custom-control-label" for="customCheck1">Allmand</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="value" value="polonais">
                            <label class="custom-control-label" for="customCheck2">Polonais</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="value" value="english">
                            <label class="custom-control-label" for="customCheck3">English</label>
                        </div>

                        <button  class="btn btn-thm" style="position: 0">znaleźć</button>

                    </form>
                  </div>
              </div>

              <div class="cl_skill_checkbox mb30">
                <h4 class="fz20 mb20">język</h4>
                <div class="content ui_kit_checkbox text-left">
                    <form action="{{ route('candidate.search') }}" method="post">
                        <input type="hidden" name="key" value="gender">
                        <div class="panel-body">
                            <div class="ui_kit_checkbox">
                                <div class="custom-control custom-checkbox">
                                    <input type="radiobox" class="custom-control-input" name="value" value="male" id="customCheck22">
                                    <label class="custom-control-label" for="customCheck22">Male</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="value" value="female" id="customCheck23">
                                    <label class="custom-control-label" for="customCheck23">Female</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-thm">znaleźć</button>
                </form>
                </div>
            </div>


          </div>
          <div class="col-lg-9 col-xl-9">
              <div class="row">
                  <div class="col-sm-6 col-lg-6">
                      <div class="candidate_job_alart_btn">
                          <h4 class="fz20 mb15">{{ count($candidates) }} Znaleziono kandydatów</h4>
                          <a class="btn btn-thm" href="#"><span class="flaticon-mail"></span> Get Job Alerts</a>
                          <button class="btn btn-thm btns dn db-991 float-right">Show Filter</button>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                      <div class="candidate_revew_select text-right mt50">
                          <ul>
                              <li class="list-inline-item">Sort by:</li>
                              <li class="list-inline-item">
                                  <select class="selectpicker show-tick">
                                      <option>Newest</option>
                                      <option>Recent</option>
                                      <option>Old Review</option>
                                  </select>
                              </li>
                          </ul>
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
                            <a class="btn btn-transparent float-right fn-lg" href="{{ route('candidate.profile',$candidate->id) }}">Zobacz profil <span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                  @endforeach

              </div>
          </div>
      </div>
  </div>
</section>

<x-footer></x-footer>
@endsection
