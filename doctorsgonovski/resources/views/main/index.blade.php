  @extends('layouts.main')

  @section('title', 'Home Page')

  @section('content')
  <div class="page-hero bg-image overlay-dark responsive-container">
    <video class="video_style" muted autoplay loop playsinline>
        <source src="{{ asset('images/videos/C2748.mp4') }}" type="video/mp4" />
      </video>
      <div class="content">
          <!-- Add your content here -->
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
                        <p class="font-rubik"><span class="font-rubik">Прегледи</span> от Кардиолог</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <p class="font-rubik"><span class="font-rubik">Прегледи</span> от Ортопед</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <i class="fa-solid fa-stethoscope"></i>
                        </div>
                        <p class="font-rubik"><span class="font-rubik">Винаги</span> на вашите нужди</p>
                    </div>
                </div>
            </div>
        </div>

      </div>

      <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <p class="text-grey mb-4 font-roboto font-2rem">Предлагаме ви прегледи свързани с кардиологични
                    и ортопедични проблеми. Вашето здраве е най-важното нещо както за вас, така и за нас.
                    </p>
                    <a href="{{ route('about.index') }}" class="btn btn-primary custom-btn font-rubik">Научете повече за нас</a>
                </div>


                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 py-3 wow zoomIn">
                            <!-- Card 1 -->
                            <div class="card-doctor d-flex flex-column">
                                <div class="header">
                                    <img src="{{ asset('images/doctors/gonovska.jpg') }}" class="card-img-top">
                                    <div class="meta">
                                        <a href="tel:+359899152547"><i class="fa-solid fa-phone"></i></a>
                                        <a href="https://wa.me/+359899152547"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <div class="body mt-auto text-center font-rubik">
                                    <p class="mb-2 font-07em">Д-р Иванка Кулевска-Гоновска</p>
                                    <span class="text-sm text-grey d-block mb-2 font-roboto-serif">Кардиолог</span>
                                    <a href="https://superdoc.bg/lekar/d-r-ivanka-kulevska-gonovska-9946"  class="text-center" target="_blank">
                                        <button type="button" class="btn btn-primary custom-btn font-rubik font-8em">Запази Час</button>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 py-3 wow zoomIn">
                            <!-- Card 2 -->
                            <div class="card-doctor d-flex flex-column">
                                <div class="header">
                                    <img src="{{ asset('images/doctors/gonovski.jpg') }}">
                                    <div class="meta">
                                        <a href="tel:+359899152547" title="Call Us"><i class="fa-solid fa-phone"></i></a>
                                        <a href="https://wa.me/+359899152547" title="WhatsApp Us"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <div class="body mt-auto text-center font-rubik"> <!-- Added text-center class here -->
                                    <p class="mb-2 font-07em">Д-р Кристиян Гоновски</p> <!-- Adjusted margin-bottom -->
                                    <span class="text-sm text-grey d-block mb-2 font-roboto-serif">Ортопед</span> <!-- Adjusted margin-bottom and added d-block class -->
                                    <a href="https://superdoc.bg/lekar/d-r-kristian-gonovski-9873" target="_blank" class="text-center">
                                        <button type="button" class="btn btn-primary custom-btn font-rubik" class="font-8em">Запази Час</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
  @endsection

