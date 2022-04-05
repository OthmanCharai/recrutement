@extends('layouts.layout')
@section('content')
  <!-- Candidate Personal Info-->
  <section class="bgc-fa pt80 mt80 mbt45">
      <div class="container">
        @if(session()->has("status"))
        <div class="col col-md text-center">
            <div class="aler alert-success">
                <p>{{ session()->get('status') }}</p>
            </div>
        </div>
        @endif
          <div class="row">

              <div class="col-lg-8 col-xl-9">
                  <div class="candidate_personal_info style2">
                      <div class="thumb text-center">
                          <img class="img-fluid rounded" src="{{ asset('images/partners/cl1.jpg') }}" alt="cl1.jpg"><br><br>
                          <a class="mt25" href="">View all jobs <span class="flaticon-right-arrow pl10"></span></a>
                      </div>
                      <div class="details">
                          <small class="text-thm2">{{ $job->type }}</small>
                          <h3>{{ $job->title }}</h3>
                          <p>{{ $job->created_at->year }} by <a href="#" class="text-thm2">{{ $job->employe->first_name }}</a></p>
                          <ul class="address_list">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> {{ $job->city }}, {{ $job->country }}</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> {{ $job->salary }}</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-xl-3">
                  <div class="candidate_personal_overview style2">
                      <button class="btn btn-block btn-thm mb15">Apply Now <span class="flaticon-right-arrow pl10"></span></button>
                      <button class="btn btn-block btn-gray"><span class="flaticon-favorites pr10"></span> Shortlist</button>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Candidate Personal Info Details-->
  <section class="bgc-white pb30">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-xl-8">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="candidate_about_info style2">
                              <h4 class="fz20 mb30">Opis stanowiska pracy</h4>
                              <p class="mb30">{{ $job->description }}</p>

                              <button class="btn btn-lg btn-thm mb15">Apply Now <span class="flaticon-right-arrow pl10"></span></button>
                              <button class="btn btn-lg btn-gray float-right"><span class="flaticon-mail pr10"></span> Get Job Alerts</button>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="my_resume_eduarea">
                              <h4 class="title">Ludzie, którzy również oglądali</h4>
                          </div>
                      </div>
                      @foreach ($jobs as $job )
                        <div class="col-lg-12">
                            <div class="fj_post style2 one">
                                <div class="details">
                                    <h5 class="job_chedule text-thm2">{{ $job->status }}</h5>
                                    <div class="thumb fn-smd">
                                        <img style="height:120px;width:122px" class="img-fluid" src="{{ $job->image }}" alt="1.jpg">
                                    </div>
                                    <h4>{{ $job->title }}</h4>
                                    <p>{{ $job->created_at->day }} by <a class="text-thm2" href="#">Wiggle CRC</a></p>
                                    <ul class="featurej_post">
                                        <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">{{ $job->city }}, {{ $job->country }}</a></li>
                                        <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">{{ $job->salary }}</a></li>
                                    </ul>
                                </div>
                                <a class="favorit" href="{{ route('candidate.add.favorite',$job->id) }}"><span class="flaticon-favorites"></span></a>
                            </div>
                        </div>

                      @endforeach
                  </div>
              </div>
              <div class="col-lg-4 col-xl-4">
                  <h4 class="fz20 mb30">Informacje o stanowisku</h4>
                  <div class="candidate_working_widget style2 bgc-fa">
                      <div class="icon text-thm"><span class="flaticon-money"></span></div>
                      <div class="details">
                          <p class="color-black22">Oferowane wynagrodzenie</p>
                          <p>{{ $job->salary }}</p>
                      </div>
                      <div class="icon text-thm"><span class="flaticon-gender"></span></div>
                      <div class="details">
                          <p class="color-black22">Gender</p>
                          <p>{{ $job->gender }}</p>
                      </div>
                      <div class="icon text-thm"><span class="flaticon-controls"></span></div>
                      <div class="details">
                          <p class="color-black22">Prawo Jazdy</p>
                          <p>{{ $job->licence_driver }}</p>
                      </div>

                      <div class="icon text-thm"><span class="flaticon-mortarboard"></span></div>
                      <div class="details">
                          <p class="color-black22">Doświadczenie</p>
                          <p>{{ $job->experience }}</p>
                      </div>
                  </div>
                  <div class="job_info_widget">
                      <ul>
                          <li><span class="flaticon-24-hours-support text-thm2"></span> <span>{{ $day }}</span> <span>Day</h5></li>
                          <li><span class="flaticon-businessman-paper-of-the-application-for-a-job text-thm2"></span> <span>{{ count($job->candidates) }}</span> <span>Application</h5></li>
                      </ul>
                  </div>
                  <div class="map_sidebar_widget">
                      <h4 class="fz20 mb30">Lokalizacja pracy</h4>
                      <div class="h300" id="map-canvas"></div>
                  </div>
              </div>
          </div>
      </div>
  </section>

 <x-footer></x-footer>
@endsection
