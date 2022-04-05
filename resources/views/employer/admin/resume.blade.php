@extends('layouts.layout')
@section('content')
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
					<div class="user_profile">
						<div class="media">
						  	<img src="images/team/e1.png" class="align-self-start mr-3 rounded-circle" alt="e1.png">
						  	<div class="media-body">
						    	<h5 class="mt-0">Hi, CreativeLayers</h5>
						    	<p>Bothell, WA, USA</p>
							</div>
						</div>
					</div>
					<div class="dashbord_nav_list">
						<ul>
							<li><a href="page-employer-dashboard.html"><span class="flaticon-dashboard"></span> Dashboard</a></li>
							<li><a href="page-employer-profile.html"><span class="flaticon-profile"></span> Company Profile</a></li>
							<li><a href="page-employer-post-job.html"><span class="flaticon-resume"></span> Post a New Job</a></li>
							<li><a href="page-employer-manage-job.html"><span class="flaticon-paper-plane"></span> Manage Jobs</a></li>
							<li class="active"><a href="page-employer-resume.html"><span class="flaticon-analysis"></span> Shortlisted Resumes</a></li>
							<li><a href="page-employer-packages.html"><span class="flaticon-favorites"></span> Packages</a></li>
							<li><a href="page-employer-transactions.html"><span class="flaticon-chat"></span> Transactions</a></li>
							<li><a href="page-employer-change-password.html"><span class="flaticon-locked"></span> Change Password</a></li>
							<li><a href="page-log-reg.html"><span class="flaticon-logout"></span> Logout</a></li>
							<li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-lg-12">
							<h4 class="fz20">Shortlisted Resumes</h4>
						</div>
						<div class="col-lg-12">
							<div class="candidate_list_view style2">
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="images/team/c2.jpg" alt="c2.jpg">
									<div class="cpi_av_rating"><span>4.5</span></div>
								</div>
								<div class="content">
									<h4 class="title">Kathleen Moreno <small class="verified text-thm2 pl10"><i class="fa fa-check-circle"></i></small></h4>
									<p>Development Manager at <span class="text-thm2">Wiggle CRC</span></p>
									<ul class="review_list">
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
									</ul>
									<ul class="address_list">
										<li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> $13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list mt25 float-right fn-xl">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Download CV"><span class="flaticon-resume"></span> Download CV</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Send Message"><span class="flaticon-open-envelope-with-letter"></span> Send Message</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="candidate_list_view style2">
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="images/team/c3.jpg" alt="c3.jpg">
									<div class="cpi_av_rating"><span>4.5</span></div>
								</div>
								<div class="content">
									<h4 class="title">Ralph Johnson <small class="verified text-thm2 pl10"><i class="fa fa-check-circle"></i></small></h4>
									<p>Development Manager at <span class="text-thm2">Wiggle CRC</span></p>
									<ul class="review_list">
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
									</ul>
									<ul class="address_list">
										<li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> $13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list mt25 float-right fn-xl">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Download CV"><span class="flaticon-resume"></span> Download CV</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Send Message"><span class="flaticon-open-envelope-with-letter"></span> Send Message</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="candidate_list_view style2">
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="images/team/c4.jpg" alt="c4.jpg">
									<div class="cpi_av_rating"><span>4.5</span></div>
								</div>
								<div class="content">
									<h4 class="title">Shirley Snyder</h4>
									<p>Development Manager at <span class="text-thm2">Wiggle CRC</span></p>
									<ul class="review_list">
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
									</ul>
									<ul class="address_list">
										<li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> $13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list mt25 float-right fn-xl">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Download CV"><span class="flaticon-resume"></span> Download CV</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Send Message"><span class="flaticon-open-envelope-with-letter"></span> Send Message</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="candidate_list_view style2">
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="images/team/c5.jpg" alt="c5.jpg">
									<div class="cpi_av_rating"><span>4.5</span></div>
								</div>
								<div class="content">
									<h4 class="title">Rebecca Cox <small class="verified text-thm2 pl10"><i class="fa fa-check-circle"></i></small></h4>
									<p>Development Manager at <span class="text-thm2">Wiggle CRC</span></p>
									<ul class="review_list">
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
									</ul>
									<ul class="address_list">
										<li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> $13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list mt25 float-right fn-xl">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Download CV"><span class="flaticon-resume"></span> Download CV</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Send Message"><span class="flaticon-open-envelope-with-letter"></span> Send Message</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="candidate_list_view style2">
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="images/team/c1.jpg" alt="c1.jpg">
									<div class="cpi_av_rating"><span>4.5</span></div>
								</div>
								<div class="content">
									<h4 class="title">Rodney Wells <small class="verified text-thm2 pl10"><i class="fa fa-check-circle"></i></small></h4>
									<p>Development Manager at <span class="text-thm2">Wiggle CRC</span></p>
									<ul class="review_list">
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
									</ul>
									<ul class="address_list">
										<li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> $13.00 - $18.00 per hour</a></li>
									</ul>
								</div>
				    			<ul class="view_edit_delete_list mt25 float-right fn-xl">
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Download CV"><span class="flaticon-resume"></span> Download CV</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Send Message"><span class="flaticon-open-envelope-with-letter"></span> Send Message</a></li>
				    				<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
				    			</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
