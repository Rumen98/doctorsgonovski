@extends('layouts.main')

@section('content')
<div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                <div class="card-doctor d-flex flex-column">
                    <div class="header">
                        <img src="{{ asset('images/doctors/gonovska.jpg') }}" class="card-img-top" alt="Dr. Stein Albert">
                        <div class="meta">
                            <a href="#"><i class="fa-solid fa-phone"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="body mt-auto">
                        <p class="mb-0">Д-р Иванка Кулевска-Гоновска</p>
                        <span class="text-sm text-grey">Кардиолог</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                <div class="card-doctor d-flex flex-column">
                    <div class="header">
                        <img src="{{ asset('images/doctors/gonovski.jpeg') }}">
                        <div class="meta">
                            <a href="#"><i class="fa-solid fa-phone"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="body mt-auto">
                        <p class="mb-0">Д-р Кристиян Гоновски</p>
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
                    <input type="text" class="form-control form-control-lg" placeholder="Цяло Име..">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Имейл адрес..">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="date" class="form-control form-control-lg" placeholder="Избери Дата">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <select name="departement" id="departement" class="form-control form-control-lg">
                        <option value="default" cardiology>Избери Специалист</option>
                        <option value="cardiology">Кардиолог</option>
                        <option value="ortoped">Ортопед</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Телефонен Номер..">
                </div>
                <div class="col-12 mb-3">
                    <textarea name="message" id="message" class="form-control form-control-lg" rows="6" placeholder="Остави Бележка.."></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary custom-btn">Запази</button>
                </div>
            </div>
        </form>
    </div> <!-- .container -->
</div> <!-- .page-section -->

@endsection
