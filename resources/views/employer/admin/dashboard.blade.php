@extends("layouts.layout")
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
                        <li class="active"><a href="page-employer-dashboard.html"><span class="flaticon-dashboard"></span> Dashboard</a></li>
                        <li><a href="page-employer-profile.html"><span class="flaticon-profile"></span> Company Profile</a></li>
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
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb30">Dashboard</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one">
                            <div class="icon"><span class="flaticon-paper-plane"></span></div>
                            <div class="detais">
                                <div class="timer">5246</div>
                                <p>Posted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style2">
                            <div class="icon"><span class="flaticon-favorites"></span></div>
                            <div class="detais">
                                <div class="timer">107</div>
                                <p>Review</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style3">
                            <div class="icon"><span class="flaticon-alarm"></span></div>
                            <div class="detais">
                                <div class="timer">835</div>
                                <p>Shortlist Resumes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="ff_one style4">
                            <div class="icon"><span class="flaticon-tag"></span></div>
                            <div class="detais">
                                <div class="timer">279</div>
                                <p>Meeting</p>
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
                            <h4 class="title">Latest Applications</h4>
                            <div class="candidate_list_view style3 mb50">
                                <div class="thumb">
                                    <img class="img-fluid rounded-circle" src="images/team/1.jpg" alt="1.jpg">
                                    <div class="cpi_av_rating"><span>4.5</span></div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Ali TUFAN<span class="verified text-thm pl10"><i class="fa fa-check-circle"></i></span></h4>
                                    <p>App Designer</p>
                                    <ul class="review_list">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                                <ul class="freelancer_place mt25 float-right fn-xsd tac-xsd">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Istanbul</a></li>
                                    <li class="list-inline-item"><a href="#"><button class="btn btn-thm">Hire</button></a></li>
                                </ul>
                            </div>
                            <div class="candidate_list_view style3 mb50">
                                <div class="thumb">
                                    <img class="img-fluid rounded-circle" src="images/team/c4.jpg" alt="c4.jpg">
                                    <div class="cpi_av_rating"><span>4.5</span></div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Peter KING<span class="verified text-thm pl10"><i class="fa fa-check-circle"></i></span></h4>
                                    <p>iOS Expert + Node Dev</p>
                                    <ul class="review_list">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                                <ul class="freelancer_place mt25 float-right fn-xsd tac-xsd">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Istanbul</a></li>
                                    <li class="list-inline-item"><a href="#"><button class="btn btn-thm">Hire</button></a></li>
                                </ul>
                            </div>
                            <div class="candidate_list_view style3">
                                <div class="thumb">
                                    <img class="img-fluid rounded-circle" src="images/team/c2.jpg" alt="c2.jpg">
                                    <div class="cpi_av_rating"><span>4.5</span></div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Nateila JOHN<span class="verified text-thm pl10"><i class="fa fa-check-circle"></i></span></h4>
                                    <p>Front-End Developer</p>
                                    <ul class="review_list">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                                <ul class="freelancer_place mt25 float-right fn-xsd tac-xsd">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span> Istanbul</a></li>
                                    <li class="list-inline-item"><a href="#"><button class="btn btn-thm">Hire</button></a></li>
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
