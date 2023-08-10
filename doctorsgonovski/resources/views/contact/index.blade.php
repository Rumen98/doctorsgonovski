@extends('layouts.main')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url({{ asset('assets/img/bg_image_1.jpg') }});">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="{{ route('main.index') }}" class="orange-text">Начало</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контакти</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Get in Touch</h1>
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

<div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
</div>

@endsection


@push('scripts')
    <script src="{{ asset('/resources/js/main.js') }}"></script>
@endpush
