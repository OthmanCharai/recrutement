@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
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
                        <li class="active"><a href="page-candidates-dashboard.html"><span class="flaticon-dashboard"></span> Dashboard</a></li>
                        <li><a href="page-candidates-profile.html"><span class="flaticon-profile"></span> Profile</a></li>
                        <li><a href="page-candidates-my-resume.html"><span class="flaticon-resume"></span> Resume</a></li>
                        <li><a href="page-candidates-applied-jobs.html"><span class="flaticon-paper-plane"></span> Applied Jobs</a></li>
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
                        <h4 class="mb30">Dashboard</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one">
                            <div class="icon"><span class="flaticon-paper-plane"></span></div>
                            <div class="detais">
                                <div class="timer">20</div>
                                <p>Applied</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style2">
                            <div class="icon"><span class="flaticon-favorites"></span></div>
                            <div class="detais">
                                <div class="timer">26</div>
                                <p>Favorite</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style3">
                            <div class="icon"><span class="flaticon-alarm"></span></div>
                            <div class="detais">
                                <div class="timer">11</div>
                                <p>Alerts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style4">
                            <div class="icon"><span class="flaticon-tag"></span></div>
                            <div class="detais">
                                <div class="timer">79</div>
                                <p>Latest Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="application_statics">
                            <h4>Statistics</h4>
                            <div class="c_container"></div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="recent_job_trafic">
                            <h4>Traffic</h4>
                            <div class="trafic_details">
                                <div class="circlechart" data-percentage="60">1.5 M</div>
                                <h4>Traffic for the day</h4>
                                <p>Traffic through the sources google and facebook for the day</p>
                                <ul class="trafic_list float-left">
                                    <li>40%</li>
                                    <li class="list-inline-item"><span class="bgc-fb"></span></li>
                                    <li class="list-inline-item">Facebook</li>
                                </ul>
                                <ul class="trafic_list">
                                    <li>60%</li>
                                    <li class="list-inline-item"><span class="bgc-gogle"></span></li>
                                    <li class="list-inline-item">Facebook</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="recent_job_apply">
                            <h4 class="title">Recent Apply Jobs <a class="text-thm float-right" href="#">Browse All Jobs <span class="flaticon-right-arrow"></span></a></h4>
                            <div class="rj_grid">
                                <h4 class="sub_title">UX/UI Designer</h4>
                                <p class="text-thm float-left">Wiggle CRC</p>
                                <ul class="rj_post_address float-right">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span></a></li>
                                    <li class="list-inline-item"><a href="#">Bothell, WA, USA</a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                </ul>
                            </div>
                            <div class="rj_grid">
                                <h4 class="sub_title">Regional Sales Manager South east Asia</h4>
                                <p class="text-thm float-left">Wiggle CRC</p>
                                <ul class="rj_post_address float-right">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span></a></li>
                                    <li class="list-inline-item"><a href="#">Bothell, WA, USA</a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                </ul>
                            </div>
                            <div class="rj_grid">
                                <h4 class="sub_title">C Developer (Senior) C .Net</h4>
                                <p class="text-thm float-left">Wiggle CRC</p>
                                <ul class="rj_post_address float-right">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span></a></li>
                                    <li class="list-inline-item"><a href="#">Bothell, WA, USA</a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                </ul>
                            </div>
                            <div class="rj_grid mb0">
                                <h4 class="sub_title">UX/UI Designer</h4>
                                <p class="text-thm float-left">Wiggle CRC</p>
                                <ul class="rj_post_address float-right">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span></a></li>
                                    <li class="list-inline-item"><a href="#">Bothell, WA, USA</a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>
                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="recent_job_activity">
                            <h4 class="title">Activity</h4>
                            <div class="grid">
                                <div class="color_bg float-left"></div>
                                <ul>
                                    <li><span>Dobrick </span>published an article</li>
                                    <li>2 hours ago</li>
                                </ul>
                            </div>
                            <div class="grid">
                                <div class="color_bg two float-left"></div>
                                <ul>
                                    <li><span>Stella </span>created an event</li>
                                    <li>2 hours ago</li>
                                </ul>
                            </div>
                            <div class="grid">
                                <div class="color_bg three float-left"></div>
                                <ul>
                                    <li><span>Peter </span>submitted the reports</li>
                                    <li>2 hours ago</li>
                                </ul>
                            </div>
                            <div class="grid">
                                <div class="color_bg four float-left"></div>
                                <ul>
                                    <li><span>Nateila </span>updated the docs</li>
                                    <li>2 hours ago</li>
                                </ul>
                            </div>
                            <div class="grid">
                                <div class="color_bg float-left"></div>
                                <ul>
                                    <li><span>Dobrick </span>published an article</li>
                                    <li>2 hours ago</li>
                                </ul>
                            </div>
                            <div class="grid mb0">
                                <div class="color_bg two float-left"></div>
                                <ul>
                                    <li><span>Stella </span>created an event</li>
                                    <li>2 hours ago</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
