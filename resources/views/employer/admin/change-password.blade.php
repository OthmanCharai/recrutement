@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3 dn-smd">
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
                        <li><a href="page-employer-resume.html"><span class="flaticon-analysis"></span> Shortlisted Resumes</a></li>
                        <li><a href="page-employer-packages.html"><span class="flaticon-favorites"></span> Packages</a></li>
                        <li><a href="page-employer-transactions.html"><span class="flaticon-chat"></span> Transactions</a></li>
                        <li class="active"><a href="page-employer-change-password.html"><span class="flaticon-locked"></span> Change Password</a></li>
                        <li><a href="page-log-reg.html"><span class="flaticon-logout"></span> Logout</a></li>
                        <li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="password_change_form">
                    <h4>Change Password</h4>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="*******">
                        </div>
                        <button type="submit" class="btn btn-thm">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
