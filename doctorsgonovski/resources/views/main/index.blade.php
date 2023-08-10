@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
  <div class="page-hero bg-image overlay-dark" style="background-image: url({{url('images/doctors/cabinet_new.jpg')}});">
    <div class="hero-section d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="container text-center">
        <span class="subhead">Добре Дошли в онлайн кабинета ни от</span>
        <h1 class="display-4">Доктори Гоновски</h1>
        <a href="{{ route('about.index') }}" class="btn btn-primary">Повече за нас</a>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service">
              <div class="circle-shape bg-secondary text-white">
                    <i class="fas fa-comment-medical"></i>
              </div>
              <p><span>Прегледи</span> от Кардиолог</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service">
              <div class="circle-shape bg-primary text-white">
                    <i class="fa-solid fa-shield-heart"></i>
              </div>
              <p><span>Прегледи</span> от Ортопед</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service">
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
          <div class="col-lg-6 py-3">
            <h1>Добре Дошли в нашия<br> кабинет</h1>
            <p class="text-grey mb-4">Предлагаме ви прегледи свързани с кардиологични
              и ортопедични проблеми. Вашето здраве е най-важното нещо както за вас, така и за нас.
            </p>
            <a href="about.html" class="btn btn-primary">Научете повече за нас</a>
          </div>
          <div class="col-lg-6">
            <div class="img-place custom-img-1">
                <img src="{{ asset('images/doctors/bg_image_1.jpg') }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light d-flex justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="{{ asset('images/doctors/gonovska.jpg') }}" class="card-img-top" alt="Dr. Stein Albert">
                                <div class="meta">
                                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">Д-р Иванка Кулевска-Гоновска</p>
                                <span class="text-sm text-grey">Кардиолог</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow zoomIn">
                        <div class="card-doctor">
                          <div class="header">
                              <img src="{{ asset('images/doctors/gonovski.jpeg') }}">
                            <div class="meta">
                              <a href="#"><span class="mai-call"></span></a>
                              <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                          </div>
                          <div class="body">
                            <p class="text-xl mb-0">Д-р Кристиян Гоновски</p>
                            <span class="text-sm text-grey">Ортопед</span>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
        <h1 class="text-center">Запази Час</h1>

        <form class="main-form mt-5">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Цяло Име..">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Имейл адрес..">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="date" class="form-control" placeholder="Избери Дата">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <select name="departement" id="departement" class="form-select">
                        <option value="default" cardiology>Избери Специалист</option>
                        <option value="cardiology">Кардиолог</option>
                        <option value="ortoped">Ортопед</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control" placeholder="Телефонен Номер..">
                </div>
                <div class="col-12 mb-3">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Остави Бележка.."></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Запази</button>
                </div>
            </div>
        </form>
    </div> <!-- .container -->
</div> <!-- .page-section -->


@endsection
