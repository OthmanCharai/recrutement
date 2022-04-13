@extends('layouts.layout')

@section('content')


  <!-- Our Candidate List -->
  <section class="our-faq bgc-fa mt50">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-xl-3 dn-smd">
                  <div class="faq_search_widget mb30">
                      <h4 class="fz20 mb15">Search Keywords</h4>
                      <form action="{{ route('employes.find') }}" method='post'>
                        @csrf
                          <div class="input-group mb-3">
                              <input type="text" name="title" class="form-control" placeholder="e.g. web design" aria-label="Recipient's username" aria-describedby="button-addon2">
                              <input type="hidden" value="title" name="key">
                              <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span class="flaticon-search"></span></button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="faq_search_widget mb30">
                      <h4 class="fz20 mb15">Location</h4>
                      <form action="{{ route('employes.find') }}" method='POST'>
                        @csrf
                            <div class="input-group mb-3">
                                <input type="hidden" value="city" name='key'>
                                <input name="value"  type="text" class="form-control" placeholder="All Location" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon3"><span class="flaticon-location-pin"></span></button>
                                </div>
                            </div>
                      </form>
                  </div>
                  <div class="cl_latest_activity mb30">
                      <h4 class="fz20 mb15">Date Posted</h4>
                      <form action="{{ route('employes.find.date') }}" method="post">
                        @csrf
                      <div class="ui_kit_radiobox">
                          <div class="radio">
                              <input type="hidden" name="key" value="created_at">
                              <input id="radio_one" name="radio" value="7"  type="radio" checked="">
                              <label for="radio_one"><span class="radio-label"></span> Last Hour</label>
                          </div>
                          <div class="radio">
                              <input id="radio_two" name="radio" value="24" type="radio">
                              <label for="radio_two"><span class="radio-label"></span> Last 24 hours</label>
                          </div>
                          <div class="radio">
                              <input id="radio_three" name="radio" value="168" type="radio">
                              <label for="radio_three"><span class="radio-label"></span> Last 7 days</label>
                          </div>
                          <div class="radio">
                              <input id="radio_four" name="radio" value="14" type="radio">
                              <label for="radio_four"><span class="radio-label"></span> Last 14 days</label>
                          </div>
                          <div class="radio">
                              <input id="radio_five" name="radio" value="30" type="radio">
                              <label for="radio_five"><span class="radio-label"></span> Last 30 days</label>
                          </div>
                          <button class="text-thm2 pl30 btn" >Find<span class="flaticon-right-arrow pl10"></span></button>
                      </div>
                    </form>
                  </div>
                  <div class="cl_latest_activity mb30">
                      <form action="{{ route('employes.find') }}" method='post'>
                        @csrf
                          <h4 class="fz20 mb15">Job Type</h4>
                          <div class="ui_kit_whitchbox">
                              <div class="custom-control custom-switch">
                                  <input type="hidden" name="key" value="type">
                                  <input type="checkbox" name="type" value="Freelance" class="custom-control-input" id="customSwitch1">
                                  <label class="custom-control-label" for="customSwitch1">Freelance</label>
                              </div>
                              <div class="custom-control custom-switch">
                                  <input type="checkbox" name="type" value="Full Time" class="custom-control-input" id="customSwitch2">
                                  <label class="custom-control-label" for="customSwitch2">Full Time</label>
                              </div>
                              <div class="custom-control custom-switch">
                                  <input type="checkbox" name="type" value="Part Time" class="custom-control-input" id="customSwitch3">
                                  <label class="custom-control-label" for="customSwitch3">Part Time</label>
                              </div>
                              <div class="custom-control custom-switch">
                                  <input type="checkbox" name="type" value="Internship" class="custom-control-input" id="customSwitch4">
                                  <label class="custom-control-label" for="customSwitch4">Internship</label>
                              </div>
                              <div class="custom-control custom-switch">
                                  <input type="checkbox" name="type" value="Temporary" class="custom-control-input" id="customSwitch5">
                                  <label class="custom-control-label" for="customSwitch5">Temporary</label>
                              </div>
                          </div>
                          <button class="text-thm2 pl30 btn" >Find<span class="flaticon-right-arrow pl10"></span></button>
                      </form>
                  </div>
                  <div class="cl_pricing_slider mb30">
                      <form action="{{ route('employes.find') }}" method="post">
                        @csrf
                          <h4 class="fz20 mb20">Rate</h4>
                          <div id="slider-range"></div>
                          <p class="text-center">
                              <input class="sl_input" name="value" type="text" id="amount">
                              <input type="hidden" name="key" value='salary'>
                          </p>
                          <button class="text-thm2 pl30 btn" >Find<span class="flaticon-right-arrow pl10"></span></button>
                      </form>

                  </div>

                  <div class="cl_carrer_lever">
                      <div class="cl_according">
                            <div id="accordion" class="panel-group">

                              <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a href="#panelBodyTwo" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Experince</a>
                                      </h4>
                                    </div>
                                  <div id="panelBodyTwo" class="panel-collapse collapse">
                                      <form action="{{ route('employes.find') }}" method="POST">
                                        @csrf
                                          <div class="panel-body">
                                              <div class="ui_kit_checkbox">
                                                  <input type="hidden" name="key" value="experience">
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="value" value="1Year to 2Year" class="custom-control-input" id="customCheck18">
                                                      <label class="custom-control-label" for="customCheck18">1Year to 2Year</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="value" value="2Year to 3Year" class="custom-control-input" id="customCheck19">
                                                      <label class="custom-control-label" for="customCheck19">2Year to 3Year</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="value" value="3Year to 4Year" class="custom-control-input" id="customCheck20">
                                                      <label class="custom-control-label" for="customCheck20">3Year to 4Year</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="value" value="4Year to 5Year" class="custom-control-input" id="customCheck21">
                                                      <label class="custom-control-label" for="customCheck21">4Year to 5Year</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <button class="text-thm2 pl30 btn" >Find<span class="flaticon-right-arrow pl10"></span></button>
                                      </form>
                                  </div>
                              </div>
                              <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Gender</a>
                                      </h4>
                                    </div>
                                    <form action="{{ route('employes.find') }}" method="post">
                                        @csrf
                                        <div id="panelBodyThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="ui_kit_checkbox">
                                                    <input type="hidden" name="key" value="gender">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="value" value="Male" class="custom-control-input" id="customCheck22">
                                                        <label class="custom-control-label"  for="customCheck22">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="value" value="Female" class="custom-control-input" id="customCheck23">
                                                        <label class="custom-control-label" for="customCheck23">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="value" value="None" id="customCheck24">
                                                        <label class="custom-control-label" for="customCheck24">None</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="text-thm2 pl30 btn" >Find<span class="flaticon-right-arrow pl10"></span></button>
                                        </div>
                                    </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-9 col-xl-9">
                  <div class="row">
                      <div class="col-sm-12 col-lg-6">
                          <div class="candidate_job_alart_btn">
                              <h4 class="fz20 mb15">{{ $totale }} Job Found</h4>
                              <a class="btn btn-thm" href="{{ route('job.index') }}"><span class="flaticon-eye"></span> Get All Job </a>
                              <button class="btn btn-thm btns dn db-991 float-right">Show Filter</button>
                          </div>
                      </div>

                      @foreach ($jobs as $job )
                      <div class="col-lg-12 mt30">
                          <div class="fj_post style2">
                              <div class="details">
                                  <h5 class="job_chedule text-thm">{{ $job->type }}</h5>
                                  <div class="thumb fn-smd">
                                      <img class="img-fluid" style="height:120px;width:122px" src="{{ $job->image }}" alt="1.jpg">
                                  </div>
                                  <h4>{{ $job->title }}, </h4>
                                  <p>Posted {{ $job->created_at->day }} {{ $job->created_at->month }} by <a class="text-thm" href="#">{{ $job->employe->name }}</a></p>
                                  <ul class="featurej_post">
                                      <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">{{ $job->city }} & {{ $job->country }}</a></li>
                                      <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">{{ $job->salary }}</a></li>
                                  </ul>
                              </div>
                              <a class="favorit" href="{{ route('job.show',$job->id) }}"><span class="flaticon-eye"></span></a>
                          </div>
                      </div>

                      @endforeach
                      <div class="col-lg-12">
                        <div class="mbp_pagination">
                            {{ $jobs->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <x-footer></x-footer>

@endsection
