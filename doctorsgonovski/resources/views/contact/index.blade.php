@extends('layouts.main')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url({{url('images/doctors/cabinet_new.jpg')}});">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="{{ route('main.index') }}" class="orange-text">Начало</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #fff;">Контакти</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Свържете се с нас</h1>
        <form class="contact-form mt-5">
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" id="fullName" class="form-control" placeholder="Цяло име.." required>
                </div>
                <div class="col-sm-6 py-2 wow fadeInRight">
                    <input type="email" id="emailAddress" class="form-control" placeholder="Email.." required>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <input type="text" id="subject" class="form-control" placeholder="Причина.." required>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <textarea id="message" class="form-control" rows="8" placeholder="Въведете вашето съобщение.." required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary custom-btn wow zoomIn">Изпрати</button>
        </form>
    </div>
</div>

<!-- Google Maps Embed -->
<div class="container">
    <div class="row wow fadeInUp">
        <div class="col-12 py-3 d-flex justify-content-center">
            <div style="max-width: 800px; width: 100%;"> <!-- You can adjust 800px to your preferred width -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11835.037029215568!2d24.7987875!3d42.1340368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd193468a68b9%3A0x83655cded4bb9e6e!2sDOCTORS%20Gonovski!5e0!3m2!1sbg!2sbg!4v1691823121289!5m2!1sbg!2sbg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
