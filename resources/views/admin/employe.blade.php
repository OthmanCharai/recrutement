@extends('layouts.layout')
@section('content')
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
                        <h4 class="fz18 mb30">Employes</h4>
                    </div>
                </div>
                <div class="row applyed_job">
                    <div class="col-sm-12 col-lg-12">
                        <!-- UI Table & Message Box -->
                        <section class="job-location bgc-fa pb30">
                            <div class="container">
                                <div class="row">
                                    @if(session()->has("status"))
                                    <div class="col col-md text-center">
                                        <div class="aler alert-success">
                                            <p>{{ session()->get('status') }}</p>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-md-12 col-lg-12">
                                        <h4 class="fz20">Employes</h4>
                                        <div class="ui_kit_table">
                                            <table class="table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($employes as $employe)
                                                    <tr>
                                                        <td><img style="width:50px;height:50px" src="{{ $employe->image }}" alt=""></td>
                                                        <td>{{ $employe->name }}</td>
                                                        <td>{{ $employe->category }}</td>
                                                        <td>{{ $employe->phone }}</td>
                                                        <td>
                                                            <ul>
                                                               {{--  <li class="list-inline-item"><a href="{{ route('candidate.profile',$employe->id) }}" data-toggle="tooltip" data-placement="top" title="Oglądaj"><span class="flaticon-eye btn btn-sm"></span></a></li> --}}
                                                                <li class="list-inline-item"><form method="POST" action="{{ route('employe.destroy',$employe->id) }}">@csrf @method('DELETE')<button class="btn btn-sm"  data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></form></li>
                                                            </ul>
                                                        </td>

                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                                {{ $employes->links('vendor.pagination.bootstrap-5') }}
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
