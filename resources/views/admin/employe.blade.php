@extends('layouts.layout')
@section('content')
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
                <div class="user_profile">
                    <div class="media">
                          <img src="images/team/8.jpg" class="align-self-start mr-3 rounded-circle" alt="8.jpg">
                          <div class="media-body">
                            <h5 class="mt-0">Hi, Martha Griffin</h5>
                            <p>Bothell, WA, USA</p>
                        </div>
                    </div>
                </div>
                <div class="dashbord_nav_list">
                    <ul>
                        <li><a href="page-candidates-dashboard.html"><span class="flaticon-dashboard"></span> Dashboard</a></li>
                        <li><a href="page-candidates-profile.html"><span class="flaticon-profile"></span> Profile</a></li>
                        <li><a href="page-candidates-my-resume.html"><span class="flaticon-resume"></span> Resume</a></li>
                        <li class="active"><a href="page-candidates-applied-jobs.html"><span class="flaticon-paper-plane"></span> Applied Jobs</a></li>
                        <li><a href="page-candidates-cv-manager.html"><span class="flaticon-analysis"></span> CV Manager</a></li>
                        <li><a href="page-candidates-favourite-jobs.html"><span class="flaticon-favorites"></span> Favourite Jobs</a></li>
                        <li><a href="page-candidates-message.html"><span class="flaticon-chat"></span> Messages</a></li>
                        <li><a href="page-candidates-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                        <li><a href="page-candidates-job-alert.html"><span class="flaticon-alarm"></span> Job Alerts</a></li>
                        <li><a href="page-candidates-change-password.html"><span class="flaticon-locked"></span> Change Password</a></li>
                        <li><a href="page-log-reg.html"><span class="flaticon-logout"></span> Logout</a></li>
                        <li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
                    </ul>
                </div>
                <div class="skill_sidebar_widget">
                    <h4>Skills Percentage <span class="float-right font-weight-bold">85%</span></h4>
                    <p>Put value for "Cover Image" field to increase your skill up to "15%"</p>
                    <ul class="skills">
                        <li class="progressbar3" data-width="85" data-target="85"></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="fz18 mb30">Users</h4>
                    </div>
                </div>
                <div class="row applyed_job">
                    <div class="col-sm-12 col-lg-12">
                        <div class="btn btn-success">Add Employer</div>
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
                                                        <th scope="col">Column 1</th>
                                                        <th scope="col">Column 2</th>
                                                        <th scope="col">Column 3</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Item</td>
                                                        <td>Item</td>
                                                        <td>Item</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item</td>
                                                        <td>Item</td>
                                                        <td>Item</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item</td>
                                                        <td>Item</td>
                                                        <td>Item</td>
                                                    </tr>
                                                </tbody>
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
