@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url({{url('images/doctors/cabinet_new.jpg')}}); background-size: cover; background-position: center;">
  <div class="hero-section d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Добре Дошли в онлайн кабинета ни от</span>
      <h1 class="display-4">Доктори Гоновски</h1>
      <a href="#bookAppointment" class="btn btn-primary custom-btn">Запази час</a>
    </div>
  </div>
</div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                    <i class="fas fa-comment-medical"></i>
              </div>
              <p><span>Прегледи</span> от Кардиолог</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                    <i class="fa-solid fa-shield-heart"></i>
              </div>
              <p><span>Прегледи</span> от Ортопед</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                    <i class="fa-solid fa-stethoscope"></i>
              </div>
              <p><span>Винаги</span> на вашите нужди</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Добре Дошли в нашия<br> кабинет</h1>
            <p class="text-grey mb-4">Предлагаме ви прегледи свързани с кардиологични
              и ортопедични проблеми. Вашето здраве е най-важното нещо както за вас, така и за нас.
            </p>
            <a href="{{ route('about.index') }}" class="btn btn-primary custom-btn">Научете повече за нас</a>
          </div>

          <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor d-flex flex-column">
                        <div class="header">
                            <img src="{{ asset('images/doctors/gonovska.jpg') }}" class="card-img-top">
                            <div class="meta">
                                <a href="tel:+359899152547"><i class="fa-solid fa-phone"></i></a>
                                <a href="https://wa.me/+359899152547"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="body mt-auto">
                            <p class="mb-0" style="font-size: 13px">Д-р Иванка Кулевска-Гоновска</p>
                            <span class="text-sm text-grey">Кардиолог</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor d-flex flex-column">
                        <div class="header">
                            <img src="{{ asset('images/doctors/gonovski.jpeg') }}">
                            <div class="meta">
                                <a href="tel:+359899152547"><i class="fa-solid fa-phone"></i></a>
                                <a href="https://wa.me/+359899152547"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="body mt-auto">
                            <p class="mb-0" style="font-size: 13px">Д-р Кристиян Гоновски</p>
                            <span class="text-sm text-grey">Ортопед</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>
      </div>
    </div>
  </div>

<div class="page-section" id="bookAppointment">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Запази Час</h1>
        <div class="col-12 wow fadeInUp" style="padding-top: 20px">
            <a href="https://superdoc.bg/lekar/d-r-kristian-gonovski-9873" target="_blank">
                <button type="button" class="btn btn-primary custom-btn">Запази</button>
            </a>
        </div>
    </div> <!-- .container -->

</div> <!-- .page-section -->

@endsection

