@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<style>
 .container h1 {
            font-size: 1.5rem;
            line-height: 1.4;
            font-family: 'Arial, sans-serif';
            text-align: center;
            margin: 0 auto 20px auto;
            max-width: 750px;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
    <div class="container mt-5 pb-5">
        <div class="text-center mb-4">
            <h1>Добре дошли в нашия медицински кабинет, 
                където вашето здраве и благополучие са на първо място. 
                С голямо удоволствие ви представяме нашите водещи специалисти, 
                които са посветени на задълбочените медицински прегледи и индивидуален 
                подход към всеки пациент.</h1>
        </div>


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/about/about_1.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_2.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_4.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_5.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_6.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_7.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/about/about_8.jpg') }}" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
