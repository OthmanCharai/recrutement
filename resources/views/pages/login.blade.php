@extends('layouts.layout')
@section('content')

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="breadcrumb_title float-left">Login/Register</h4>
					<ol class="breadcrumb float-right">
					    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<!-- Our LogIn Register -->
	<section class="our-log-reg bgc-fa text-6">
		<div class="container">
			<div class="row ">
                <div class="col-md-3">

                </div>
				<div class="col-sm-12 col-lg-6">
					<div class="login_form">
						<form action="{{ route('login') }}" method="post">
                            @csrf
							<div class="heading">
								<h3 class="text-center">Szybkie logowanie</h3>
								<p class="text-center">Nie masz konta? <a class="text-thm" href="{{ route('register') }}">Sign Up!</a></p>
							</div>
                                <div class="form-group d-flex justify-content-around">
                                    <label class="radio-inline">
                                        <input type="radio" value="candidate" name="user_type"> Kandydat
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" value="employe" name="user_type"> Pracodawca
                                    </label>
                                </div>
							 <div class="form-group">
						    	<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
							<div class="form-group">
						    	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Pamiętaj o mnie</label>
								<a class="tdu text-thm float-right" href="#">Forgot Password?</a>
							</div>
							<button type="submit" class="btn btn-log btn-block btn-thm">Logowanie</button>
							<hr>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection
