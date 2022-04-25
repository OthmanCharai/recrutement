@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
                <div class="user_profile">
                    <div class="media">
                          <img src="{{ asset('images/team/8.jpg') }}" class="align-self-start mr-3 rounded-circle" alt="8.jpg">
                          <div class="media-body">
                            <h5 class="mt-0">Hi, {{ auth()->user()->username }}</h5>
                        </div>
                    </div>
                </div>
                <div class="dashbord_nav_list">
                    <ul>
                        <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><span class="flaticon-dashboard"></span> Dashboard</a></li>
                        <li class="{{ request()->is('admin/candidates_list') ? 'active' : '' }}" ><a href="{{ route('admin.candidates_list') }}"><span class="flaticon-profile"></span> Candidates</a></li>
                        <li class="{{ request()->is('admin/employes') ? 'active' : '' }}"><a href="{{ route('admin.employes') }}"><span class="flaticon-profile"></span> Employes</a></li>
                        <li class="{{ request()->is('admin/jobs') ? 'active' : '' }}"><a href="{{ route('admin.jobs') }}"><span class="flaticon-resume"></span> Jobs</a></li>
                        <li class="{{ request()->is('admin/candidate/1') ? 'active' : '' }}">
                            <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <span class="flaticon-logout"></span> Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </a>
                        </li>



                    </ul>
                </div>

            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb30">Dashboard</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one">
                            <div class="icon"><span class="flaticon-paper-plane"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($candidates) }}</div>
                                <p>Candidates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style2">
                            <div class="icon"><span class="flaticon-favorites"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($employes) }}</div>
                                <p>Employes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style3">
                            <div class="icon"><span class="flaticon-alarm"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($jobs) }}</div>
                                <p>Jobs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style4">
                            <div class="icon"><span class="flaticon-tag"></span></div>
                            <div class="detais">
                                <div class="timer">{{ count($application) }}</div>
                                <p>Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="application_statics">
                            <h4>Statistics</h4>
                            <div class="c_container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
