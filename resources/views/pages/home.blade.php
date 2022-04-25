@extends('layouts.layout')
@section('content')
<!-- Home Design -->
<section class="home-one parallax ulockd_bgih1" style="background-image: url({{ asset('images/about/home.jpg') }})" >
    <div class="container">
        <div class="row home-content">
            <div class="col-lg-8">
                <div class="home-text">
                    <h2 class="fz40">Znajdź pracę, która pasuje do Twojego życia</h2>
                    <p class="color-silver">Pracuj w Niemczech jako kierowca!
                        kontrakt 1 = 63 dni robocze
                        Od aut dostawczych do 3,5 tony,
                        po samochody ciężarowe.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="home-job-search-box mt20 mb20">
                    <form class="form-inline" action="{{ route('search.job') }}" method="post">
                        @csrf
                        <div class="search_option_one">
                            <div class="form-group">
                                <label for="exampleInputName"><span class="flaticon-search"></span></label>
                                <input type="text" name="title" class="form-control h70" id="exampleInputName" placeholder="Job Title or Keywords">
                            </div>
                        </div>
                        <div class="search_option_two">
                            <div class="form-group">
                                <label for="exampleInputEmail"><span class="flaticon-location-pin"></span></label>
                                <input type="text" name="city" class="form-control h70" id="exampleInputEmail" placeholder="Location">
                            </div>
                        </div>
                        <div class="search_option_button">
                            <button type="submit" class="btn btn-thm btn-secondary h70">Search</button>
                        </div>
                    </form>
                </div>
                <p class="color-silver"><span class="color-white">Trendy Słowa kluczowe:</span> Kierowca,  Developer,  Web,  IOS,  PHP,  Senior,  Engineer</p>
            </div>
        </div>
    </div>
</section>

<!-- How It's Work -->
<section class="popular-job">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ulockd-main-title">
                    <h3 class="mt0">Rodzaje umów</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 prpl5">
                <div class="icon_box_hiw">
                    <div class="icon"><div class="list_tag float-right"><p>1</p></div><span class="flaticon-job"></span></div>
                    <div class="details">
                        <h4>Kontrakt</h4>
                        <p>63 dni robocze </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
                <div class="icon_box_hiw">
                    <div class="icon middle"><div class="list_tag float-right"><p>2</p></div><span class="flaticon-job"></span></div>
                    <div class="details">
                        <h4>Kontrakt</h4>
                        <p>126 dni roboczych.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
                <div class="icon_box_hiw">
                    <div class="icon"><div class="list_tag float-right"><p>3</p></div><span class="flaticon-job"></span></div>
                    <div class="details">
                        <h4>Kontrakt</h4>
                        <p>na czas nieokreślony.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Popular Job Categories -->
<section class="popular-job bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ulockd-main-title">
                    <h3 class="mt0"> Umowa 1 (przykład)</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="icon_hvr_img_box sbbg1" style="background-image: url(images/service/1.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-pen"></span></div>
                        <div class="details">
                            <h5>Kierowca</h5>
                            <p> musi przepracować 63 dni
                                robocze, po czym umowa wygasa</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4">
                <a href="#" class="icon_hvr_img_box sbbg4" style="background-image: url(images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-interview"></span></div>
                        <div class="details">
                            <h5>Kierowca</h5>
                            <p> zostanie wywołany ponownie
                                zgodnie z zapotrzebowaniem</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="icon_hvr_img_box sbbg5" style="background-image: url(images/service/5.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-antenna"></span></div>
                        <div class="details">
                            <h5>Bezpieczeństwo</h5>
                            <p>Polska osoba kontaktowa w Niemczech</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4">
                <a href="#" class="icon_hvr_img_box sbbg7" style="background-image: url(images/service/7.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-customer-support"></span></div>
                        <div class="details">
                            <h5>Wszystkie umowy</h5>
                            <p>Wszystkie umowy na czas określony
                                wygasają automatycznie</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="icon_hvr_img_box sbbg8" style="background-image: url(images/service/8.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-care"></span></div>
                        <div class="details">
                            <h5>zdrowotne i emerytalne
                            </h5>
                            <p>Kierowcy w Niemczech mają ubezpieczenie
                                zdrowotne i emerytalne</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="icon_hvr_img_box sbbg5" style="background-image: url(images/service/5.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-antenna"></span></div>
                        <div class="details">
                            <h5>Bezpieczeństwo</h5>
                            <p>Polska osoba kontaktowa w Niemczech</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Browse Local Jobs -->
<section class="job-location pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ulockd-main-title">
                    <h3 class="mt0">Zakwaterowanie</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <a target="_blanc" href="{{ asset('images/b.jpg') }}" class="job_loc_img_box">
                    <div class="thumb"><img class="img-fluid" src="{{ asset('images/b.jpg') }}" alt="9.jpg"></div>
                    <div class="details">
                        <h4>Niemcy</h4>
                        <h5>Nocleg kosztuje tylko 200 euro / miesiąc</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a target="_blanc" href="{{ asset('images/a.jpg') }}" class="job_loc_img_box">
                    <div class="thumb"><img class="img-fluid" src="{{ asset('images/a.jpg') }}" alt="10.jpg"></div>
                    <div class="details">
                        <h4>Niemcy</h4>
                        <h5>TELEWIZJA, Kuchnia</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a target="_blanc" href="{{ asset('images/d.jpg') }}" class="job_loc_img_box">
                    <div class="thumb"><img class="img-fluid" src="{{ asset('images/d.jpg') }}" alt="11.jpg"></div>
                    <div class="details">
                        <h4>Niemcy</h4>
                        <h5>Wszystko w cenie, Internet, Pralka</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a target="_blanc" href="{{ asset('images/c.jpg') }}" class="job_loc_img_box">
                    <div class="thumb"><img class="img-fluid" src="{{ asset('images/c.jpg') }}" alt="12.jpg"></div>
                    <div class="details">
                        <h4>Niemcy</h4>
                        <h5>Możesz zatrzymać się w jednym z
                            naszych miejsc noclegowych, wszystko
                            zorganizujemy za Ciebie</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="job_loc_img_box">
                    <div class="thumb"><img class="img-fluid" src="{{ asset('images/c.jpg') }}" alt="13.jpg"></div>
                    <div class="details">
                        <h4>New York</h4>
                        <h5>586,478</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="job_loc_img_box">
                    <div class="thumb"><img class="img-fluid" src="{{ asset('images/c.jpg') }}" alt="14.jpg"></div>
                    <div class="details">
                        <h4>Los Angeles</h4>
                        <h5>15,258</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- How It's Work -->
<section class="popular-job">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ulockd-main-title">
                    <h3 class="mt0">Zadania</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 prpl5">
                <div class="icon_box_hiw">
                    <div class="icon"><div class="list_tag float-right"><p>1</p></div><span class="flaticon-unlocked"></span></div>
                    <div class="details">
                        <h4>Rano skanowanie paczek w magazynie i
                            ich załadunek do pojazdu</h4>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
                <div class="icon_box_hiw">
                    <div class="icon middle"><div class="list_tag float-right"><p>2</p></div><span class="flaticon-job"></span></div>
                    <div class="details">
                        <h4>Dostawa paczek do klientów
                            Odbiór paczek od klientów</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
                <div class="icon_box_hiw">
                    <div class="icon"><div class="list_tag float-right"><p>3</p></div><span class="flaticon-trophy"></span></div>
                    <div class="details">
                        <h4>Przywożenie paczek do magazynu</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Job List Design -->
<section class="popular-job bgc-fa pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ulockd-main-title">
                    <h3 class="mt0">Praca na późnym etapie</h3>
                    <a class="text-thm float-right" href="#">Przeglądaj wszystkie oferty pracy <i class="flaticon-right-arrow pl15"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job )
                <div class="col-sm-12 col-lg-12">
                    <div class="fj_post">
                        <div class="details">
                            <h5 class="job_chedule text-thm mt0">{{ $job->type }}</h5>
                            <div class="thumb fn-smd">
                                <img class="img-fluid" style="hight:120px;width:122px" src="{{ $job->image }}" alt="1.jpg">
                            </div>
                            <h4>{{ $job->title }}</h4>
                            <p>{{ $job->created_at }} by <a class="text-thm" href="#">{{ $job->employe->name }}</a></p>
                            <ul class="featurej_post">
                                <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">{{ $job->city }},{{ $job->country }}</a></li>
                                <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">{{ $job->salary }}</a></li>
                            </ul>
                        </div>
                    <a class="btn btn-md btn-transparent float-right fn-smd" href="{{ route('job.show',$job->id) }}">Browse Job</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Expert Freelancer List -->
<section class="expert-freelancer bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ulockd-main-title">
                    <h3 class="mt0">Zatrudnij doświadczonego kierowcę</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ef_slider">
                    @foreach ($candidates as $candidate)
                        <div class="item">
                            <div class="ef_post">
                                <div class="ef_header">
                                    <a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
                                </div>
                                <div class="thumb text-center">
                                    <img class="img-fluid" src="{{ $candidate->image }}" alt="1.jpg">
                                </div>
                                <div class="freelancer_review">
                                    <div class="everage_rating">4.5</div>
                                    <ul class="rating_list">
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
                                    </ul>
                                    <h4 class="title">{{ $candidate->first_name }} {{ $candidate->last_name }}</h4>
                                    <p>{{ $candidate->type }}</p>
                                </div>
                                <div class="details">
                                    <div class="job_locate">
                                        <p class="float-left">Lokalizacja</p>
                                        <ul class="float-right">
                                            <li class="list-inline-item m0"><p>{{ $candidate->Country }}</p></li>
                                        </ul>
                                    </div>
                                    <div class="job_srate">
                                        <span class="float-left">Experince</span>
                                        <span class="float-right">{{ $candidate->experience }}</span>
                                    </div>
                                    <div class="ef_prf_link mt10">
                                        <a class="btn btn-block btn-transparent" href="{{ route('candidate.profile',$candidate->id) }}">View Profile <i class="flaticon-right-arrow pl10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="col-lg-12 col-xl-12">
                <div class="candidate_resume_uploader">
                    <p class="form_title">Załaduj CV</p>
                    <form class="" method="post" action="{{ route('comment.store') }}" enctype="multipart/form-data">
                        @csrf
                        <small class="form-text text-muted">Lub dodaj nowy</small>
                        <div class="form-group">
                            <label for="">Comment</label>
                            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button style="width:100%" class="upload btn-sm">Dodaj</button>
                    </form>
                      <small class="form-text text-muted">Suitable files are .doc,.docx,.pdf.</small>
                </div>
            </div>
      </div>
    </div>
</div>
<!--modal-->
<!-- Expert Freelancer List -->
<section class="expert-freelancer bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ulockd-main-title">
                    <h3 class="mt0">Co mówi nasz klient</h3>

                    <button data-toggle="modal" data-target="#exampleModalCenter" class="text-thm float-right" href="#">Dodaj komentarz<i class="flaticon-right-arrow pl15"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ef_slider">
                    @foreach ($comments as $comment)
                        <div class="item" style="width:100%;">
                            <div class="ef_post">
                                <div class="ef_header">
                                    <a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
                                </div>
                                <div class="thumb text-center">
                                    <img class="img-fluid" src="{{ $comment->candidate->image }}" alt="1.jpg">
                                </div>
                                <div class="freelancer_review">
                                    <div class="everage_rating">4.5</div>
                                    <ul class="rating_list">
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
                                    </ul>

                                    <h4 class="title">{{$comment->candidate->first_name}} {{$comment->candidate->last_name}} </h4>
                                </div>
                                <div class="details">
                                    <div class="job_locate">
                                        <div class="form-group">

                                            <textarea style="" name="" id="" cols="30" class="form-control" readonly >{{ $comment->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>


@endsection



