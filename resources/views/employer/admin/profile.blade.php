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
							<li class="active"><a href="page-employer-profile.html"><span class="flaticon-profile"></span> Company Profile</a></li>
							<li><a href="page-employer-post-job.html"><span class="flaticon-resume"></span> Post a New Job</a></li>
							<li><a href="page-employer-manage-job.html"><span class="flaticon-paper-plane"></span> Manage Jobs</a></li>
							<li><a href="page-employer-resume.html"><span class="flaticon-analysis"></span> Shortlisted Resumes</a></li>
							<li><a href="page-employer-packages.html"><span class="flaticon-favorites"></span> Packages</a></li>
							<li><a href="page-employer-transactions.html"><span class="flaticon-chat"></span> Transactions</a></li>
							<li><a href="page-employer-change-password.html"><span class="flaticon-locked"></span> Change Password</a></li>
							<li><a href="page-log-reg.html"><span class="flaticon-logout"></span> Logout</a></li>
							<li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-lg-8 col-xl-9">
					<div class="my_profile_form_area employer_profile">
						<div class="row">
							<div class="col-lg-12">
								<h4 class="fz20 mb20">Company Profile</h4>
							</div>
							<div class="col-lg-12">
							    <div class="avatar-upload mb30">
							        <div class="avatar-edit">
							            <input class="btn btn-thm" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
							            <label for="imageUpload"></label>
							        </div>
							        <div class="avatar-preview">
							            <div id="imagePreview"></div>
							        </div>
							    </div>
							</div>
							<div class="col-lg-12">
								<div class="my_profile_thumb_edit"></div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput1">Company Name</label>
							    	<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="CreativeLayers">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput1">Email address</label>
							    	<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="creativelayers088@gmail.com">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleInputPhone">Phone</label>
							    	<input type="email" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="+90 587 658 96 32">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput2">Website</label>
							    	<input type="email" class="form-control" id="exampleFormControlInput2" placeholder="www.careerup.com">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput2">Est. Since</label>
							    	<input type="text" class="form-control datepicker" id="formGroupExampleInput2" placeholder="22/05/2010">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput3">Team Size</label><br>
							    	<select class="selectpicker">
										<option>50-100</option>
										<option>100-150</option>
										<option>150-200</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput2">Categories</label><br>
							    	<select class="selectpicker" multiple data-actions-box="true">
										<option>Banking</option>
										<option>Digital&Creative</option>
										<option>Retail</option>
										<option>Business</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput2">Allow In Search & Listing</label><br>
							    	<select class="selectpicker">
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="my_resume_textarea mt20">
									 <div class="form-group">
									    <label for="exampleFormControlTextarea1">About Company</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9">Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present
									    </textarea>
									  </div>
								</div>
							</div>
							<div class="col-lg-12">
								<h4 class="fz18 mb20">Social Network</h4>
							</div>
						    <div class="col-md-6 col-lg-6">
						    	<div class="my_profile_input form-group">
							      	<label for="validationServerUsername">Facebook</label>
							        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
						    	</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    	<div class="my_profile_input form-group">
							      	<label for="validationServerUsername2">Twitter</label>
							      	<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
						    	</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    	<div class="my_profile_input form-group">
							      	<label for="validationServerUsername2">Linkedin</label>
							      	<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
						    	</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    	<div class="my_profile_input form-group">
							      	<label for="validationServerUsername2">Google Plus</label>
							      	<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
						    	</div>
						    </div>
							<div class="col-lg-12">
								<h4 class="fz18 mb20">Contact Information</h4>
							</div>
						    <div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput9">Country</label><br>
							    	<select class="selectpicker">
										<option>United Kingdom</option>
										<option>United State</option>
										<option>Ukraine</option>
										<option>Uruguay</option>
										<option>UK</option>
										<option>Uzbekistan</option>
										<option>Uganda</option>
									</select>
								</div>
							</div>
						    <div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput9">City</label><br>
							    	<select class="selectpicker">
										<option>London</option>
										<option>Manchester</option>
										<option>Birmingham</option>
										<option>Liverpool England</option>
										<option>Bristol</option>
										<option>City of London</option>
										<option>Leeds</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="my_resume_textarea mt20">
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Full Address</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">London, United Kingdom</textarea>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="my_profile_input form-group">
							    	<label for="exampleInputLat">Latitude</label>
							    	<input type="email" class="form-control" id="exampleInputLat" aria-describedby="latNumber" placeholder="51.5073509">
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="my_profile_input form-group">
							    	<label for="exampleInputLat">Longitude</label>
							    	<input type="email" class="form-control" id="exampleInputLat" aria-describedby="latNumber" placeholder="-0.12775829999998223">
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="my_profile_input form-group">
							    	<label for="exampleInputLat">Zoom</label>
							    	<input type="email" class="form-control" id="exampleInputLat" aria-describedby="latNumber" placeholder="16">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="h300" id="map-canvas"></div>
							</div>
							<div class="col-lg-4">
								<div class="my_profile_input">
									<a class="btn btn-lg btn-thm" href="#">Save Changes</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
