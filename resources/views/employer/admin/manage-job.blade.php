@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="cnddte_fvrt our-dashbord dashbord">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
                <div class="user_profile">
                    <div class="media">
                          <img src="images/team/e1.png" class="align-self-start mr-3 rounded-circle" alt="e1.png">
                          <div class="media-body">
                            <h5 class="mt-0">Hi, Martha Griffin</h5>
                            <p>Bothell, WA, USA</p>
                        </div>
                    </div>
                </div>
                <div class="dashbord_nav_list">
                    <ul>
                        <li><a href="page-employer-dashboard.html"><span class="flaticon-dashboard"></span> Dashboard</a></li>
                        <li><a href="page-employer-profile.html"><span class="flaticon-profile"></span> Company Profile</a></li>
                        <li><a href="page-employer-post-job.html"><span class="flaticon-resume"></span> Post a New Job</a></li>
                        <li class="active"><a href="page-employer-manage-job.html"><span class="flaticon-paper-plane"></span> Manage Jobs</a></li>
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
                        <h4 class="mb30">Manage Jobs</h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="icon_boxs">
                            <div class="icon"><span class="flaticon-work"></span></div>
                            <div class="details"><h4>2 Job Posted</h4></div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="icon_boxs">
                            <div class="icon style2"><span class="flaticon-resume"></span></div>
                            <div class="details"><h4>3 Applications</h4></div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="icon_boxs">
                            <div class="icon style3"><span class="flaticon-work"></span></div>
                            <div class="details"><h4>1 Active Jobs</h4></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="candidate_revew_search_box mt30">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Serach" aria-label="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-search"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="candidate_revew_select text-right mt30">
                            <ul>
                                <li class="list-inline-item">Sort by:</li>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>Newest</option>
                                        <option>Recent</option>
                                        <option>Old Review</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="cnddte_fvrt_job candidate_job_reivew style2">
                            <div class="table-responsive job_review_table">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Applications</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <h4>General Ledger Accountant</h4>
                                                <p><span class="flaticon-location-pin"></span> RG40, Wokingham</p>
                                                <ul>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">Dec 03, 2017</a></li>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">Oct 22, 2018</a></li>
                                                </ul>
                                            </th>
                                            <td><span class="color-black22">17</span> Application(s)</td>
                                            <td class="text-thm2">Inactive</td>
                                            <td>
                                                <ul class="view_edit_delete_list">
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <h4>Financed Bank</h4>
                                                <p><span class="flaticon-location-pin"></span> London, United Kingdom</p>
                                                <ul>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">Dec 03, 2017</a></li>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">Oct 22, 2018</a></li>
                                                </ul>
                                            </th>
                                            <td><span class="color-black22">14</span> Application(s)</td>
                                            <td class="color-red">Active</td>
                                            <td>
                                                <ul class="view_edit_delete_list">
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <h4>UX/UI Designer</h4>
                                                <p><span class="flaticon-location-pin"></span> RG40, Wokingham</p>
                                                <ul>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">Dec 03, 2017</a></li>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">Oct 22, 2018</a></li>
                                                </ul>
                                            </th>
                                            <td><span class="color-black22">05</span> Application(s)</td>
                                            <td class="color-red">Active</td>
                                            <td>
                                                <ul class="view_edit_delete_list">
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>
                                                    <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection