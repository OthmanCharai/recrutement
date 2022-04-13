@extends('layouts.layout')
@section('content')
<!-- Our Dashbord -->
<!-- Candidate Personal Info Details-->
<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">
        <x-employe name="{{ $employe->name }}" image="{{ $employe->image }}" city="{{ $employe->city }}" country="{{ $employe->country }}"></x-employe>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb30">{{ $candidate->first_name }} CV</h4>
                    </div>
                    <div class="col-lg-12 mb30">
                        <div class="candidate_job_reivew cv_manager">
                            <div class="table-responsive job_review_table">
                                <table class="table">
                                    <tbody>
                                        <tr class="mb30">
                                            <th scope="row">
                                                <ul>
                                                    <li class="list-inline-item"><a href="#"><span class="flaticon-doc font"></span></a></li>
                                                    <li class="list-inline-item cv_sbtitle"><a href="#">{{ $cv }}</a></li>
                                                </ul>
                                            </th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <ul class="view_edit_delete_list">
                                                    <li class="list-inline-item"><a href="{{ $cv }}" data-toggle="tooltip" target="_blank" data-placement="top" title="Pliki do pobrania"><span class="flaticon-download"></span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @foreach ($candidate->cvs as $cv )
                                            <tr class="mb30">
                                                <th scope="row">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-doc font"></span></a></li>
                                                        <li class="list-inline-item cv_sbtitle"><a href="#">{{ $cv->title }}</a></li>
                                                    </ul>
                                                </th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <ul class="view_edit_delete_list">
                                                        <li class="list-inline-item"><a href="{{ $cv->path }}" data-toggle="tooltip" target="_blank" data-placement="top" title="Pliki do pobrania"><span class="flaticon-download"></span></a></li>
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


            <div class="col-xl-4" >
                <div class="col-lg-12 mt-4">
                   <h4 class="mb30">Informacje o kandydatach</h4>
                </div>
                <div class="candidate_working_widget">
                    <div class="icon text-thm"><span class="flaticon-man"></span></div>
                    <div class="details">
                        <h4>Pełna Nazwa</h4>
                        <p>{{ $candidate->first_name }} {{ $candidate->last_name }}</p>
                    </div>
                    <div class="icon text-thm"><span class="flaticon-old-age-man"></span></div>
                    <div class="details">
                        <h4>Urodziny</h4>
                        <p>{{ $age }}</p>
                    </div>
                    <div class="icon text-thm"><span class="flaticon-man"></span></div>
                    <div class="details">
                        <h4>Telefon</h4>
                        <p>{{ $candidate->phone }}</p>
                    </div>
                    <div class="icon text-thm"><span class="flaticon-man"></span></div>
                    <div class="details">
                        <h4>Adress</h4>
                        <p>{{ $candidate->phone }}</p>
                    </div>
                    <div class="icon text-thm"><span class="flaticon-man"></span></div>
                    <div class="details">
                        <h4>Języki</h4>
                        <p>{{ $candidate->language }}</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
