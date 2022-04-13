@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
           <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>
            <div class="col-lg-6 col-xl-6">
                @if(session()->has("status"))
                            <div class="col col-md text-center">
                                <div class="aler alert-success">
                                    <p>{{ session()->get('status') }}</p>
                                </div>
                            </div>
                @endif
                <div class="password_change_form">
                    <h4>Zmień hasło</h4>
                    <form action="{{ route('employes.save.password') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input name="email" type="email" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Nowe hasło</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword2" placeholder="*******">
                        </div>

                        <button type="submit" class="btn btn-thm">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
