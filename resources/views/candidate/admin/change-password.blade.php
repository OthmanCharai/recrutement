@extends('layouts.layout')
@section('content')

<!-- Our Dashbord -->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
            <x-candidate id="{{ $candidate->id }}" name="{{ $candidate->first_name }}" address="active" city="{{ $candidate->city }}" country="{{ $candidate->country }}" image="{{ $candidate->image }}"></x-candidate>
            <div class="col-lg-6 col-xl-6">
                <div class="password_change_form">
                    <h4>Zmień hasło</h4>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Stare hasło</label>
                            <input name="old_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Nowe hasło</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3">Potwierdź hasło</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="*******">
                        </div>
                        <button type="submit" class="btn btn-thm">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
