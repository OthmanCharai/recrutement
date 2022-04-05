@extends('layouts.layout')
@section('content')

<!-- Candidate Personal Info Details-->
<section class="mt70 bgc-fa mt50">
    <div class="container">
        <div class="row candidate_grid">
            <div class="col-lg-8 col-xl-8">
                <div class="candidate_personal_info">
                    <div class="thumb">
                        <img class="img-fluid rounded-circle" style="height: 150px;width:150px" src="{{$candidate->image}}" alt="cs2.jpg">
                        <div class="cpi_av_rating"><span>4.5</span></div>
                    </div>
                    <div class="details">

                        <h3>{{ $candidate->first_name }} {{ $candidate->last_name }}<small class="verified"><i class="fa fa-check-circle"></i></small></h3>
                        <p>Kierowca</p>
                        <ul class="address_list">
                            <li class="list-inline-item"><a href="#">{{ $candidate->address }}</a></li>
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('images/resource/usa.png') }}" alt="usa.png"></a></li>
                            <li class="list-inline-item"><a href="#">{{ $candidate->city }}</a></li>
                        </ul>
                        <ul class="review_list">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="candidate_personal_overview">
                    <ul class="timer_list">
                        <li class="list-inline-item"><div class="timer">{{ count($candidate->jobs) }}</div></li>
                        <li class="list-inline-item"><span>%</span></li>
                    </ul>
                    <p>Zgłoszona praca</p>
                    <ul class="skills">
                        <li class="progressbar3" data-width="85" data-target="90"></li>
                    </ul>
                    <div class="row mb10">
                        <div class="col col-sm-4 col-lg-4">
                            <div class="grid">
                                <div class="price">$84/hr</div>
                                <p>Hourly Rate</p>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-lg-4 text-center">
                            <div class="grid">
                                <div class="total_job">{{ count($candidate->jobs) }}</div>
                                <p>Wykonana praca</p>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-lg-4 text-right">
                            <div class="grid">
                                <div class="hire">234</div>
                                <p>Ponownie zatrudniony</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
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

<x-footer></x-footer>
@endsection
