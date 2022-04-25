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
                        @if(session()->has("status"))
                        <div class="col col-md text-center">
                            <div class="aler alert-success">
                                <p>{{ session()->get('status') }}</p>
                            </div>
                        </div>
                        @endif
						<div class="col-lg-12">
							<h4 class="fz18 mb30">Jobs</h4>
						</div>
					</div>
					<div class="row applyed_job">
						<div class="col-sm-12 col-lg-12">

							<!-- UI Table & Message Box -->
                            <section class="job-location bgc-fa pb30">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <h4 class="fz20">Users</h4>
                                            <div class="ui_kit_table">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Actions</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($jobs as $job)
                                                        <tr>
                                                            <td><img style="height: 50px;width:50px" src="{{ $job->image }}" alt="" srcset=""></td>
                                                            <td>{{ $job->title }}</td>
                                                            <td>{{ $job->Type }}</td>
                                                            <td>{{ $job->Status }}</td>
                                                            <td>
                                                                <ul>
                                                                    <li class="list-inline-item"><a href="{{ route('job.show',$job->id) }}" data-toggle="tooltip" data-placement="top" title="Oglądaj"><span class="flaticon-eye btn btn-sm"></span></a></li>
                                                                    <li class="list-inline-item"><form method="POST" action="{{ route('admin.jobs.delete',$job->id) }}">@csrf @method('DELETE')<button class="btn btn-sm"  data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></form></li>
                                                                </ul>
                                                            </td>

                                                        </tr>

                                                        @endforeach
                                                    </tbody>
                                                    {{ $jobs->links('vendor.pagination.bootstrap-5') }}
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
						</div>
						{{-- <div class="col-sm-12 col-lg-12">
							<div class="fj_post">
								<div class="details">
									<h5 class="job_chedule text-thm mt0">Part Time</h5>
									<div class="thumb fn-smd">
										<img class="img-fluid" src="images/partners/2.jpg" alt="2.jpg">
									</div>
									<h4>General Ledger Accountant</h4>
									<p>Posted 23 August by <a class="text-thm" href="#">Robert Half Finance & Accounting</a></p>
									<ul class="featurej_post">
										<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">RG40, Wokingham</a></li>
										<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list float-right">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-sm-12 col-lg-12">
							<div class="fj_post">
								<div class="details">
									<h5 class="job_chedule text-thm mt0">Full Time</h5>
									<div class="thumb fn-smd">
										<img class="img-fluid" src="images/partners/3.jpg" alt="3.jpg">
									</div>
									<h4>Junior Digital Graphic Designer</h4>
									<p>Posted 23 August by <a class="text-thm" href="#">Parkside Recruitment - Uxbridge Finance</a></p>
									<ul class="featurej_post">
										<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">New Denham, UB8 1JG</a></li>
										<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list float-right">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-sm-12 col-lg-12">
							<div class="fj_post">
								<div class="details">
									<h5 class="job_chedule text-thm mt0">Full Time</h5>
									<div class="thumb fn-smd">
										<img class="img-fluid" src="images/partners/4.jpg" alt="4.jpg">
									</div>
									<h4>UX/UI Designer</h4>
									<p>Yesterday <a class="text-thm" href="#">NonStop Recruitment Ltd</a></p>
									<ul class="featurej_post">
										<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
										<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list float-right">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-sm-12 col-lg-12">
							<div class="fj_post">
								<div class="details">
									<h5 class="job_chedule text-thm mt0">Full Time</h5>
									<div class="thumb fn-smd">
										<img class="img-fluid" src="images/partners/3.jpg" alt="3.jpg">
									</div>
									<h4>Junior Digital Graphic Designer</h4>
									<p>Posted 23 August by <a class="text-thm" href="#">Parkside Recruitment - Uxbridge Finance</a></p>
									<ul class="featurej_post">
										<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">New Denham, UB8 1JG</a></li>
										<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list float-right">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-sm-12 col-lg-12">
							<div class="fj_post">
								<div class="details">
									<h5 class="job_chedule text-thm mt0">Full Time</h5>
									<div class="thumb fn-smd">
										<img class="img-fluid" src="images/partners/4.jpg" alt="4.jpg">
									</div>
									<h4>UX/UI Designer</h4>
									<p>Yesterday <a class="text-thm" href="#">NonStop Recruitment Ltd</a></p>
									<ul class="featurej_post">
										<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
										<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list float-right">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-sm-12 col-lg-12">
							<div class="fj_post">
								<div class="details">
									<h5 class="job_chedule text-thm mt0">Full Time</h5>
									<div class="thumb fn-smd">
										<img class="img-fluid" src="images/partners/4.jpg" alt="4.jpg">
									</div>
									<h4>UX/UI Designer</h4>
									<p>Yesterday <a class="text-thm" href="#">NonStop Recruitment Ltd</a></p>
									<ul class="featurej_post">
										<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
										<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list float-right">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

