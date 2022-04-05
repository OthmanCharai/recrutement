@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            @if($candidate)
                <x-candidate id="{{ $candidate->id}}" name="{{ ($candidate) ? $candidate->first_name : '' }}" address="active" city="{{ ($candidate)?$candidate->city:'' }}" country="{{($candidate) ? $candidate->country :'' }}" image="{{ ($candidate) ? $candidate->image :'' }}"></x-candidate>
                    <div class="col-sm-12 col-lg-8 col-xl-9">
                        <div class="my_profile_form_area employer_profile">
                            @if(session()->has("status"))
                            <div class="col col-md text-center">
                                <div class="aler alert-success">
                                    <p>{{ session()->get('status') }}</p>
                                </div>
                            </div>
                            @endif
                            <form action="{{ route('candidate.update',$candidate->id) }}" method='POST' enctype='multipart/form-data'>
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="fz20 mb20">Mój profil</h4>
                                        @if(session()->has('status'))
                                            <div class="alert aler-success">{{ session()->get('status') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="avatar-upload mb30">
                                            <div class="avatar-edit">
                                                <input name="image" class="btn btn-thm" value={{ $candidate->image }} type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
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
                                            <label for="formGroupExampleInput1">imię</label>
                                            <input type="text" name="first_name" class="form-control" id="formGroupExampleInput1"  value="{{ $candidate->first_name }} ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label for="formGroupExampleInput1">nazwisko</label>
                                            <input name="last_name" type="text" class="form-control" id="formGroupExampleInput1"  value=" {{ $candidate->last_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label for="formGroupExampleInput2">Nazwa stanowiska pracy</label>
                                            <input name="type" type="text" class="form-control" id="formGroupExampleInput2" value="{{ $candidate->type }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label for="exampleInputPhone">Telefon</label>
                                            <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber"  value="{{ $candidate->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_select_box form-group">
                                            <label for="exampleFormControlInput5">Experience</label><br>
                                            <select name="experience" class="selectpicker">
                                                <option  @if($candidate->experience=='6-10 Years') selected @endif value="6-10 Years">6-10 Years</option>
                                                <option @if($candidate->experience=='4-6 Years') selected @endif  value="4-6 Years">4-6 Years</option>
                                                <option @if($candidate->experience=='4-5 Years') selected @endif value="4-5 Years">4-5 Years</option>
                                                <option @if($candidate->experience=='3-4 Years') selected @endif value="3-4 Years">3-4 Years</option>
                                                <option @if($candidate->experience=='2-3 Years') selected @endif value="2-3 Years">2-3 Years</option>
                                                <option @if($candidate->experience=='0-1 Years') selected @endif value="0-1 Years">0-1 Years</option>
                                                <option @if($candidate->experience=='None') selected @endif value="None">None</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label for="exampleFormControlInput6">urodziny</label><br>
                                            <input name="birthday" type="date" class="form-control" id="formGroupExampleInput1"  value=" {{ $candidate->birthday }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_select_box form-group">
                                            <label for="exampleFormControlInput7">Poziomy wykształcenia</label><br>



                                            <select name="education_levels" class="selectpicker">
                                                <option @if($candidate->education_levels=='Certificate') selected @endif  value='Certificate'>Certificate</option>
                                                <option @if($candidate->education_levels=='Masters') selected @endif value="Masters">Masters</option>
                                                <option @if($candidate->education_levels=='Bachlors') selected @endif value="Bachlors">Bachlors</option>
                                                <option @if($candidate->education_levels=='Diploma') selected @endif value="Diploma">Diploma</option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_select_box form-group">
                                            <label for="exampleFormControlInput8">Languages</label><br>
                                            <select name="language" class="selectpicker" multiple data-actions-box="true">
                                                <option @if($candidate->language=='English') selected @endif value="English">English</option>
                                                <option @if($candidate->language=='Allmand') selected @endif value="Allmand">Allmand</option>
                                                <option @if($candidate->language=='Polonais') selected @endif value="Polonais">Polonais</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="my_profile_select_box form-group">
                                            <label for="exampleFormControlInput2">	Prawo Jazdy</label><br>
                                            <select name="driver_licence" class="selectpicker" multiple data-actions-box="true">


                                                <option @if($candidate->driver_licence=='A') selected @endif value="A">A</option>
                                                <option @if($candidate->driver_licence=='B') selected @endif value="B">B</option>
                                                <option @if($candidate->driver_licence=='C') selected @endif  value="C">C</option>
                                                <option @if($candidate->driver_licence=='D') selected @endif value="D">D</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="my_resume_textarea mt20">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description</label>
                                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">{{ $candidate->description }}
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
                                                    <option  @if($candidate->country==$country) selected @endif  valeu="{{ $country->name }}">{{ $country->name }}</option>

                                            @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group ">
                                            <label for="exampleFormControlInput9">Miasto</label><br>
                                            <input name="city" type="text" class="form-control" id="formGroupExampleInput1"  value=" {{ $candidate->city }}">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="my_resume_textarea mt20">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1"> Adres</label>
                                                <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $candidate->address }}</textarea>
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
            @else
            <x-candidate id="{{ auth()->user()->id }}" name="{{  auth()->user()->name }}" address="active" city="" country="" image=""></x-candidate>
            <div class="col-sm-12 col-lg-8 col-xl-9">
                <div class="my_profile_form_area employer_profile">
                    <div class="col alert alert-danger">{{ $message }}</div>
                    <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="fz20 mb20">Mój profil</h4>
                            </div>
                            <div class="col-lg-12">
                                <div class="avatar-upload mb30">
                                    <div class="avatar-edit">
                                        <input name="image" class="btn btn-thm"  type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
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
                                    <label for="formGroupExampleInput1">imię</label>
                                    <input type="text" name="first_name" class="form-control" id="formGroupExampleInput1"  value="{{ old('first_name') }} ">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="formGroupExampleInput1">nazwisko</label>
                                    <input name="last_name" type="text" class="form-control" id="formGroupExampleInput1"  value=" {{ old('last_name') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="formGroupExampleInput2">Nazwa stanowiska pracy</label>
                                    <input name="type" type="text" class="form-control" id="formGroupExampleInput2" value="{{ old('type') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleInputPhone">Telefon</label>
                                    <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber"  value="{{ old('phone') }}">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput5">Experience</label><br>
                                    <select name="experience" class="selectpicker">
                                        <option value="6-10 Years">6-10 Years</option>
                                        <option value="4-6 Years">4-6 Years</option>
                                        <option value="4-5 Years">4-5 Years</option>
                                        <option value="3-4 Years">3-4 Years</option>
                                        <option value="2-3 Years">2-3 Years</option>
                                        <option value="0-1 Years">0-1 Years</option>
                                        <option value="None">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleFormControlInput6">urodziny</label><br>
                                    <input name="birthday" type="date" class="form-control" id="formGroupExampleInput1"  value=" {{ old('birthday') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput7">Poziomy wykształcenia</label><br>
                                    <select name="education_levels" class="selectpicker">
                                        <option value='Certificate'>Certificate</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Bachlors">Bachlors</option>
                                        <option value="Diploma">Diploma</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput8">Languages</label><br>
                                    <select name="language" class="selectpicker" multiple data-actions-box="true">
                                        <option value="English">English</option>
                                        <option value="Allmand">Allmand</option>
                                        <option value="Polonais">Polonais</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput2">	Prawo Jazdy</label><br>
                                    <select name="driver_licence" class="selectpicker" multiple data-actions-box="true">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="my_resume_textarea mt20">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">{{ old('description') }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h4 class="fz18 mb20">Dane kontaktowe</h4>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_select_box form-group">
                                    <label for="exampleFormControlInput9">Country</label><br>
                                    <select name="country" class="selectpicker">
                                        @foreach ($countries as $country )
                                        <option valeu="{{ $country->name }}">{{ $country->name }}</option>

                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleFormControlInput9">City</label><br>
                                    <input name="city" type="text" class="form-control" id="formGroupExampleInput1"  value=" {{ old('city') }}">

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_resume_textarea mt20">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"> Address</label>
                                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('address') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="my_profile_input">
                                    <button class="btn btn-lg btn-thm" href="#">Save Changes</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
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
