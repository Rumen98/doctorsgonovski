  @extends('layouts.main')

  @section('title', 'Home Page')

  @section('content')
  <div class="page-hero bg-image overlay-dark responsive-container" style="position: relative;">
    <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" muted autoplay loop playsinline>
        <source src="{{ asset('images/videos/C2748.mp4') }}" type="video/mp4" />
      </video>
      <div class="content" style="position: relative; z-index: 1;">
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
                        <p class="font-lato"><span class="font-open-sans">Прегледи</span> от Кардиолог</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <p class="font-lato"><span class="font-open-sans">Прегледи</span> от Ортопед</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <i class="fa-solid fa-stethoscope"></i>
                        </div>
                        <p class="font-lato"><span class="font-open-sans">Винаги</span> на вашите нужди</p>
                    </div>
                </div>
            </div>
        </div>

      </div>

      <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <p class="text-grey mb-4 font-lato" style="font-size: 2em;">Предлагаме ви прегледи свързани с кардиологични
                    и ортопедични проблеми. Вашето здраве е най-важното нещо както за вас, така и за нас.
                    </p>
                    <a href="{{ route('about.index') }}" class="btn btn-primary custom-btn font-open-sans">Научете повече за нас</a>
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
                                <div class="body mt-auto text-center font-lato">
                                    <p class="mb-2" style="font-size: 14px">Д-р Иванка Кулевска-Гоновска</p>
                                    <span class="text-sm text-grey d-block mb-2 font-open-sans">Кардиолог</span>
                                    <a href="https://superdoc.bg/lekar/d-r-ivanka-kulevska-gonovska-9946" target="_blank" style="text-align: center;">
                                        <button type="button" class="btn btn-primary custom-btn font-lato" style="font-size:13px;">Запази Час</button>
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
                                <div class="body mt-auto text-center font-lato"> <!-- Added text-center class here -->
                                    <p class="mb-2" style="font-size: 14px">Д-р Кристиян Гоновски</p> <!-- Adjusted margin-bottom -->
                                    <span class="text-sm text-grey d-block mb-2">Ортопед</span> <!-- Adjusted margin-bottom and added d-block class -->
                                    <a href="https://superdoc.bg/lekar/d-r-kristian-gonovski-9873" target="_blank" style="text-align: center;">
                                        <button type="button" class="btn btn-primary custom-btn" style="font-size: 13px;">Запази Час</button>
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

