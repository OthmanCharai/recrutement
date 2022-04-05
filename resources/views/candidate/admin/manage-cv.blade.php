@extends('layouts.layout')
@section('content')
	<!-- Our Dashbord -->
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
							<h4 class="mb30">CV Manager</h4>
						</div>
						<div class="col-lg-12 mb30">
							<div class="candidate_job_reivew cv_manager">
								<div class="table-responsive job_review_table">
									<table class="table">
										<tbody>
                                            @foreach ($cvs as $cv)
                                                <tr class="mb30">
                                                    <th scope="row">
                                                        <ul>
                                                            <li class="list-inline-item"><a href="{{ $cv->path }}"><span class="flaticon-doc font"></span></a></li>
                                                            <li class="list-inline-item cv_sbtitle"><a href="#">{{ $cv->title }}</a></li>
                                                        </ul>
                                                    </th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <ul class="view_edit_delete_list">
                                                            <li class="list-inline-item"><a href="{{ $cv->path }}" data-toggle="tooltip" data-placement="top" title="Pokaż"><span class="flaticon-eye"></span></a></li>
                                                            <li class="list-inline-item"><form method="POST" action="{{ route('cvs.destroy',$cv->id) }}">@csrf @method('DELETE')<button class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Usuń"><span class="flaticon-rubbish-bin"></span></button></form></li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-8">
							<div class="candidate_resume_uploader">
								<p class="form_title">Curriculum Vitae</p>
								<form class="form-inline" method="post" action="{{ route('cvs.store') }}" enctype="multipart/form-data">
									@csrf
                                    <input name="title" class="upload-path" placeholder="Tytuł"/>
									<label class="upload">
									    <input name="path" type="file" />
									    <p><span class="flaticon-download"></span> Prześlij CV</p>
									</label>
                                    <button style="margin-left:100px" class=" upload">Zapisz zmiany</button>
								</form>
							  	<small class="form-text text-muted">Suitable files are .doc,.docx,.pdf.</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
