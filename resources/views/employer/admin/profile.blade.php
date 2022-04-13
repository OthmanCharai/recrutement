@extends('layouts.layout')

@section('content')
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord">
		<div class="container">
			<div class="row">

                @if($employe)
                <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>
				<div class="col-sm-12 col-lg-8 col-xl-9">
                    <form action="{{ route('employe.update',$employe->id) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       @method('PUT')

                        <div class="my_profile_form_area employer_profile">
                            @if(session()->has("status"))
                            <div class="col col-md text-center">
                                <div class="aler alert-success">
                                    <p>{{ session()->get('status') }}</p>
                                </div>
                            </div>
                            @endif
                            <div class="row">

                                <div class="col-lg-12">
                                    <h4 class="fz20 mb20">Profil firmy</h4>
                                </div>
                                <div class="col-lg-12">
                                    <div class="avatar-upload mb30">
                                        <div class="avatar-edit">
                                            <input name="image" class="btn btn-thm" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_thumb_edit"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput1">Nazwa firmy</label>
                                        <input name="name" type="text" class="form-control" id="formGroupExampleInput1" value="{{ $employe->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleFormControlInput1">Adres e-mail</label>
                                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="{{ $employe->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleInputPhone">Telefon</label>
                                        <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" value="{{ $employe->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput2">Istnieją. Od .</label>
                                        <input name="birthday" type="date" class="form-control " id="formGroupExampleInput2" >
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-12">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput2">Category</label>
                                        <input name="category" type="text" class="form-control " id="formGroupExampleInput2" value="{{ $employe->category }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_resume_textarea mt20">
                                         <div class="form-group">
                                            <label for="exampleFormControlTextarea1">About Company</label>
                                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">{{ $employe->description }}
                                            </textarea>
                                          </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <h4 class="fz18 mb20">Dane kontaktowe</h4>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_select_box form-group">
                                        <label for="exampleFormControlInput9">Kraj</label><br>
                                            <select name="country" class="selectpicker">
                                                @foreach ($countries as $country )
                                                    <option  @if($employe->country==$country) selected @endif  valeu="{{ $country->name }}">{{ $country->name }}</option>

                                            @endforeach

                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group ">
                                        <label for="exampleFormControlInput9">Miasto</label><br>
                                        <input name="city" type="text" class="form-control" id="formGroupExampleInput1"  value=" {{ $employe->city }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_resume_textarea mt20">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Full Address</label>
                                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $employe->address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my_profile_input">
                                        <button class="btn btn-lg btn-thm" >Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
                @else

                <x-employe name="{{ auth()->user()->name }}" image="" city="" country=""></x-employe>
				<div class="col-sm-12 col-lg-8 col-xl-9">
                    <form action="{{ route('employe.store') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="my_profile_form_area employer_profile">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="fz20 mb20">Profil firmy</h4>
                                </div>
                                <div class="col-lg-12">
                                    <div class="avatar-upload mb30">
                                        <div class="avatar-edit">
                                            <input name="image" class="btn btn-thm" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_thumb_edit"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput1">Nazwa firmy</label>
                                        <input name="name" type="text" class="form-control" id="formGroupExampleInput1" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleFormControlInput1">Adres e-mail</label>
                                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleInputPhone">Telefon</label>
                                        <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput2">Istnieją. Od .</label>
                                        <input name="birthday" type="date" class="form-control"  >
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-12">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput2">Kategoria</label>
                                        <input name="category" type="text" class="form-control " id="formGroupExampleInput2" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_resume_textarea mt20">
                                         <div class="form-group">
                                            <label for="exampleFormControlTextarea1">About Company</label>
                                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">
                                            </textarea>
                                          </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <h4 class="fz18 mb20">Dane kontaktowe</h4>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_select_box form-group">
                                        <label for="exampleFormControlInput9">Kraj</label><br>
                                            <select name="country" class="selectpicker">
                                                @foreach ($countries as $country )
                                                    <option   valeu="{{ $country->name }}">{{ $country->name }}</option>

                                            @endforeach

                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group ">
                                        <label for="exampleFormControlInput9">Miasto</label><br>
                                        <input name="city" type="text" class="form-control" id="formGroupExampleInput1"  >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_resume_textarea mt20">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Full Address</label>
                                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my_profile_input">
                                        <button class="btn btn-lg btn-thm" >Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>


                @endif
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
