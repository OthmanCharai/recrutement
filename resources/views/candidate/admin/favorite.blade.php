@extends('layouts.layout')
@section('content')
	<!-- Our Dashbord -->
    @inject('carbon', 'Carbon\Carbon')
    <section class="cnddte_fvrt our-dashbord dashbord">
		<div class="container">
			<div class="row">
                <x-candidate id="{{ $candidate->id }}" name="{{ $candidate->first_name }}" address="active" city="{{ $candidate->city }}" country="{{ $candidate->country }}" image="{{ $candidate->image }}"></x-candidate>
				<div class="col-xl-9">
					<div class="row">
                        @if(session()->has("status"))
                            <div class="col col-md text-center">
                                <div class="aler alert-success">
                                    <p>{{ session()->get('status') }}</p>
                                </div>
                            </div>
                            @endif
						<div class="col-lg-12">

							<h4 class="mb30">Ulubione miejsca pracy</h4>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="candidate_revew_search_box">
								<form method="" action="{{ route('favorite.get') }}" class="form-inline my-2 my-lg-0">
                                    @csrf
							    	<input name="title" class="form-control mr-sm-2" type="search" placeholder="Serach" aria-label="Search">
							    	<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-search"></span></button>
							    </form>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="cnddte_fvrt_job candidate_job_reivew">
								<div class="table-responsive job_review_table">
									<table class="table">
										<thead class="thead-light">
									    	<tr>
									    		<th scope="col">Nazwa stanowiska pracy</th>
									    		<th scope="col"></th>
									    		<th scope="col"></th>
									    		<th scope="col">Data zapisania</th>
									    		<th scope="col"></th>
									    	</tr>
										</thead>
										<tbody>
                                            @foreach ($jobs as $job )
                                                <tr>
                                                    <th scope="row">
                                                        <img class="img-fluid" src="{{ $job->image }}" alt="10.jpg">
                                                    </th>
                                                    <td>
                                                        <h4>{{ $job->title }}</h4>
                                                        <p>{{ $job->type }}</p>
                                                        <ul>
                                                            <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span></a></li>
                                                            <li class="list-inline-item"><a href="#">{{ $job->city }}, {{ $job->country }} </a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <td>{{ $job->created_at->year }} on {{ $job->created_at->month }}</td>
                                                    <td>
                                                        <ul class="view_edit_delete_list">
                                                            <li class="list-inline-item"><a href="{{ route('job.show',$job->id) }}" data-toggle="tooltip" data-placement="top" title="Oglądaj"><span class="flaticon-eye"></span></a></li>
                                                            <li class="list-inline-item"><form method="POST" action="{{ route('candidate.delete.favorite',$job->id) }}">@csrf @method('DELETE')<button class="btn btn-sm"  data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></form></li>
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
