@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url({{url('images/doctors/cabinet_new.jpg')}}); background-size: cover; background-position: center;">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item">
                <a href="{{ route('main.index') }}" class="orange-text">Начало</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">За нас</li>
          </ol>
        </nav>
        {{-- <h1 class="font-weight-normal">За нас</h1> --}}
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
                <i class="fas fa-comment-medical"></i>
            </div>
            <p><span>Прегледи</span> от Кардиолог</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
                <i class="fa-solid fa-shield-heart"></i>
            </div>
            <p><span>Прегледи</span> от Ортопед</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
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

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Добре дошли в нашия кабинет</h1>
          <div class="text-lg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.</p>
            <p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo, incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum nulla voluptatibus vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
          </div>
        </div>

        <div class="col-lg-10">
            <div class="row">
                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor d-flex flex-column">
                        <div class="header">
                            <img src="{{ asset('images/doctors/gonovska.jpg') }}" class="card-img-top">
                            <div class="meta">
                                <a href="#"><i class="fa-solid fa-phone"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
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
                                <a href="#"><i class="fa-solid fa-phone"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
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
@endsection
