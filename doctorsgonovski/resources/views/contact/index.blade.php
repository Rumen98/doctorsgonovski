@extends('layouts.main')

@section('content')
<div class="page-hero bg-image overlay-dark responsive-container" style="position: relative;">
    <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" muted autoplay loop>
      <source src="{{ asset('images/videos/C2748.mp4') }}" type="video/mp4" />
    </video>
      <div class="content" style="position: relative; z-index: 1;">
          <!-- Add your content here -->
      </div>
  </div>

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Свържете се с нас</h1>

        <form id="contactForm" class="contact-form mt-5" action="{{ route('contact.index') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Цяло име.." required>
                </div>
                <div class="col-sm-6 py-2 wow fadeInRight">
                    <input type="email" name="emailAddress" id="emailAddress" class="form-control" placeholder="Email.." required>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Причина.." required>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <textarea name="message" id="message" class="form-control" rows="8" placeholder="Въведете вашето съобщение.." required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary custom-btn wow zoomIn" onclick="handleSubmitForm(event)">Изпрати</button>
        </form>

        <div id="successAlert" class="alert alert-orange" role="alert" style="display: none;">
            Благодарим Ви, че се свързахте с нас!
        </div>

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

<script src="{{ asset('js/main.js') }}"></script>

@endsection
