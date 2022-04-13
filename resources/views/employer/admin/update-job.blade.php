@extends('layouts.layout')
@section('content')
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord">
		<div class="container">
			<div class="row">
                <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>

				<div class="col-sm-12 col-lg-8 col-xl-9">
					<div class="my_profile_form_area employer_profile">
                      
                        <form action="{{ route('job.update',$job->id) }}" method="post" enctype="multipart/form-data">
						@csrf
                        @method('PUT')
                            <div class="row">
                                @if(session()->has("status"))
                            <div class="col col-md text-center">
                                <div class="aler alert-success">
                                    <p>{{ session()->get('status') }}</p>
                                </div>
                            </div>
                            @endif
							<div class="col-lg-12">
								<h4 class="fz20 mb20">Zamieść nową pracę</h4>
							</div>
                            <div class="col-lg-12">
                                <div class="avatar-upload mb30">
                                    <div class="avatar-edit">
                                        <input value="{{ $job->image }}" name="image" class="btn btn-thm" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"></div>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-12 mt30">
								<div class="my_profile_thumb_edit"></div>
							</div>
							<div class="col-lg-12">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput2">Nazwa stanowiska pracy</label>
							    	<input name="title" type="text" class="form-control" id="formGroupExampleInput2" value="{{ $job->title }}">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="my_resume_textarea">
									 <div class="form-group">
									    <label for="exampleFormControlTextarea1">Opis stanowiska pracy</label>
									    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present
									    </textarea>
									  </div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInputDate">Data zakończenia przyjmowania wniosków</label>
							    	<input name="deadline_date" type="date" class="form-control" id="formGroupExampleInputDate" value="{{ $job->deadline_date }}">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput1">Rodzaj pracy</label>
							    	<input name="type" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $job->type }}">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput1">wynagrodzenie</label>
							    	<input name="salary" type="text" class="form-control" id="formGroupExampleInput1" value="{{ $job->salary }}">
								</div>
								</div>



							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="formGroupExampleInput1">Doświadczenie</label><br>
							    	<select name="experience" class="selectpicker">
										<option @if($job->experience=="1Year to 2Year") selected @endif>1Year to 2Year</option>
										<option @if($job->experience=="2Year to 3Year") selected @endif>2Year to 3Year</option>
										<option @if($job->experience=="3Year to 4Year") selected @endif>3Year to 4Year</option>
										<option @if($job->experience=="4Year to 5Year") selected @endif>4Year to 5Year</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="formGroupExampleInput1">Płeć</label><br>
							    	<select name="gender" class="selectpicker">
										<option value="Male" @if($job->gender=="Male") selected @endif >Male</option>
										<option @if($job->gender=="Female") selected @endif value="Female">Female</option>
										<option @if($job->gender=="None") selected @endif>None</option>
									</select>
								</div>
							</div>
                            <div class="col-md-6 col-lg-12">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput2">Prawo Jazdy</label><br>
                                    <select name="driver_licence" class="selectpicker" multiple data-actions-box="true">
                                                <option @if($job->licence_driver=="A") selected @endif value="A">A</option>
                                                <option @if($job->licence_driver=="B") selected @endif value="B">B</option>
                                                <option @if($job->licence_driver=="C") selected @endif value="C">C</option>
                                                <option @if($job->licence_driver=="D") selected @endif value="D">D</option>
                                    </select>
                                </div>
                            </div>

							<div class="col-lg-12">
								<h4 class="fz18 mb20">Adres / Lokalizacja</h4>
							</div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput9">Kraj</label><br>
                                        <select name="country" class="selectpicker">
                                            @foreach ($countries as $country )
                                                <option  @if($job->country==$country) selected @endif  valeu="{{ $country->name }}">{{ $country->name }}</option>

                                        @endforeach

                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group ">
                                    <label for="exampleFormControlInput9">Miasto</label><br>
                                    <input name="city" type="text" class="form-control" id="formGroupExampleInput1"  value=" {{ $job->city }}">
                                </div>
                            </div>
							<div class="col-lg-12">
								<div class="my_resume_textarea">
									<div class="form-group">
									    <label for="exampleFormControlTextarea2">Pełny adres</label>
									    <textarea name="address" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $job->address }}</textarea>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="my_profile_input">
									<button class="btn btn-lg btn-thm" >Save Changes</button>
								</div>
							</div>
						</div>
                    </form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('afterJs')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    </script>

@endsection

