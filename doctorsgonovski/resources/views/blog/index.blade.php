@extends('layouts.main')

@section('title', 'About Us')

@section('content')

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    {{-- <a href="#">Ковид 19</a> --}}
                  </div>
                  <a href="{{ route('detail_1') }}" class="post-thumb">
                    <img src="{{ asset('images/blog/26.jpg') }}" alt="blog_4">
                </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="{{ route('detail_1') }}">
                      "Заклели сме се, че ще помагаме на хората независимо от времето и мястото"</a></h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    {{-- <a href="#">Витамини</a> --}}
                  </div>
                  <a href="{{ route('detail_2') }}" class="post-thumb">
                    <img src="{{ asset('images/blog/orto.jpg') }}" alt="blog_3">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="{{ route('detail_2') }}"> Профилактиката на опорно-двигателния апарат на бебето</a></h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
                <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        {{--  <a href="#"></a> --}}
                      </div>
                      <a href="{{ route('detail_3') }}" class="post-thumb">
                        <img src="{{ asset('images/blog/blog_2.jpg') }}" alt="blog_2">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title">
                        <a href="{{ route('detail_3') }}">Плазмотерапията е приложима при всички възпалителни ортопедични заболявания</a></h5>
                    </div>
                  </div>
            </div>

            {{-- <div class="col-sm-6 py-3">
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
            </div> --}}


            {{-- <div class="col-12 my-5">
                <nav aria-label="Page Navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#previous" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#page1">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#page2">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#page3">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#next">Next</a>
                    </li>
                  </ul>
                </nav>
              </div> --}}

          </div> <!-- .row -->
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

@endsection
