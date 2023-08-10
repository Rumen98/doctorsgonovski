@extends('layouts.main')

@section('title', 'About Us')

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{ route('main.index') }}" class="orange-text">Начало</a></li>
            <li class="breadcrumb-item active" aria-current="page">Блог</li>
          </ol>
        </nav>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Ковид 19</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{ asset('images/blog/blog_4.jpg') }}" alt="blog_4">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="blog-details.html">Лист с държавите с най-много заразени</a></h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Витамини</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{ asset('images/blog/blog_3.jpg') }}" alt="blog_3">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="blog-details.html">Какви витамини трябва да приемаме?</a></h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
                <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Ковид 19</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="{{ asset('images/blog/blog_2.jpg') }}" alt="blog_2">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title">
                        <a href="blog-details.html">Лист с държавите с най-много заразени</a></h5>
                    </div>
                  </div>
            </div>

            <div class="col-sm-6 py-3">
                <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Нервната система</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="{{ asset('images/blog/blog_1.jpg') }}" alt="blog_1">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title">
                        <a href="blog-details.html">Най-честите проблеми с нервната система</a></h5>
                    </div>
                  </div>
            </div>


            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

@endsection
