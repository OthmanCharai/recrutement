@extends('layouts.layout')
@section('content')
	<!-- Our Dashbord -->
    @inject('carbon', 'Carbon\Carbon')

	<section class="our-dashbord dashbord">
		<div class="container">
			<div class="row">
                <x-candidate id="{{ $candidate->id }}" name="{{ $candidate->first_name }}" address="active" city="{{ $candidate->city }}" country="{{ $candidate->country }}" image="{{ $candidate->image }}"></x-candidate>
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
							<h4 class="fz18 mb30">Dotyczy pracy</h4>
						</div>
					</div>
					<div class="row applyed_job">
                        @foreach ($jobs as  $job)
                            <div class="col-sm-12 col-lg-12">
                                <div class="fj_post">
                                    <div class="details">
                                        <h5 class="job_chedule text-thm mt0">{{ $job->type }}</h5>
                                        <div class="thumb fn-smd">
                                            <img class="img-fluid" style="height:122px;width:120px" src="{{ $job->image }}" alt="1.jpg">
                                        </div>
                                        <h4>{{ $job->title }}</h4>

                                        <p>{{ $carbon::parse($job->created_at) }} by <a class="text-thm" href="#">{{ $job->employe->first_name }}</a></p>
                                        <ul class="featurej_post">
                                            <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">{{ $job->city }}, {{ $job->country }}</a></li>
                                            <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">{{ $job->salary }}</a></li>
                                        </ul>
                                    </div>
                                    <ul class="view_edit_delete_list float-right">
                                        <li class="list-inline-item"><a href="{{ route('job.show',$job->id) }}" data-toggle="tooltip" data-placement="top" title="Oglądaj"><span class="flaticon-eye"></span></a></li>
                                        <li class="list-inline-item"><form method="POST" action="{{ route('candidate.remove.job',$job->id) }}">@csrf @method('DELETE')<button class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></form></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
