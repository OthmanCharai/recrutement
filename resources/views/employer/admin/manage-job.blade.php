@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="cnddte_fvrt our-dashbord dashbord">
    <div class="container">
        <div class="row">
            <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>
            <div class="col-sm-12 col-lg-8 col-xl-9">
                <div class="row">
                    @if(session()->has("status"))
                    <div class="col col-md text-center">
                        <div class="aler alert-success">
                            <p>{{ session()->get('status') }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-12">
                        <h4 class="mb30">Zarządzaj miejscami pracy</h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="icon_boxs">
                            <div class="icon"><span class="flaticon-work"></span></div>
                            <div class="details"><h4>{{ count($jobs) }} Job Posted</h4></div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="icon_boxs">
                            <div class="icon style2"><span class="flaticon-resume"></span></div>
                            <div class="details"><h4>{{ count($applied_jobs) }} Applications</h4></div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="icon_boxs">
                            <div class="icon style3"><span class="flaticon-work"></span></div>
                            <div class="details"><h4>{{ count($active_jobs) }} Active Jobs</h4></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="candidate_revew_search_box mt30">
                            <form class="form-inline my-2 my-lg-0" action={{ route("employes.find.job") }} method="POST">
                                @csrf
                                <input name="title" class="form-control mr-sm-2" type="search" placeholder="Serach" aria-label="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-search"></span></button>
                            </form>
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
                                        @foreach ($jobs as $job)
                                        <tr>
                                            <th scope="row">
                                                <h4>{{ $job->title }}</h4>
                                                <p><span class="flaticon-location-pin"></span> {{ $job->city }}, {{ $job->country }}</p>
                                                <ul>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">{{ $job->created_at->year }}</a></li>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
                                                    <li class="list-inline-item"><a class="color-black22" href="#">{{ $job->deadline_date }}</a></li>
                                                </ul>
                                            </th>
                                            <td><a href="{{ route('employes.candidates',$job->id) }}"><span class="color-black22">{{ count($job->candidates) }}</span> Application(s)</a></td>
                                            <td class="text-thm2"><a @if($job->status=="active")  class="text-thm2" @else  class="color-red"@endif  href="{{ route('employes.change.satus',$job->id) }}">{{ $job->status }}</a></td>
                                            <td>
                                                <ul class="view_edit_delete_list">
                                                    <li class="list-inline-item"><a href="{{ route('job.edit',$job->id) }}" data-toggle="tooltip" data-placement="bottom" title="Edytuj"><span class="flaticon-edit"></span></a></li>
                                                    <li class="list-inline-item"><form method="POST" action="{{ route('job.destroy',$job->id) }}">@csrf @method('DELETE')<button class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></form></li>
                                                </ul>
                                            </td>
                                        </tr>

                                        @endforeach
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
