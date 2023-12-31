@extends('layouts.main')

@section('title', 'About Us')

@section('content')

    <div class="container mt-5 pb-5">
        <div class="text-center mb-4">
            <h1 class="custom-h1-style font-roboto">Добре дошли в нашия медицински кабинет,
                където вашето здраве и благополучие са на първо място.
                С голямо удоволствие ви представяме нашите водещи специалисти,
                които са посветени на задълбочените медицински прегледи и индивидуален
                подход към всеки пациент.</h1>
        </div>



        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/about/24.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/10.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/26.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/21.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/14.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/17.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/22.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/25.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/4.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_4.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_5.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_6.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_7.jpg') }}">
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
@endsection
