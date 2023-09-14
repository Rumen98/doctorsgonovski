@extends('layouts.main')

@section('content') 
<style>
    .page-section {
        font-family: 'Arial, sans-serif';
        color: #333;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .post-thumb {
        display: block;
        margin: 0 auto 20px auto;
        border-radius: 10px;
        overflow: hidden;
    }
    .post-thumb img {
        width: 100%;
        height: auto;
        display: block;
    }
    .post-title {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #ff6600; /* You mentioned liking orange earlier */
    }
    .post-content {
        font-size: 1rem;
        line-height: 1.6;
    }
</style>
<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
                <img src="{{ asset('images/blog/orto.jpg') }}" alt="blog_3">
            </div>
            <h2 class="post-title h1">Профилактика на опорно-двигателния апарат на бебето</h2>
            <div class="post-content">
              <p>
                Профилактиката на опорно-двигателния апарат на бебето започва още от раждането,
                 а не чак когато то навърши 5-6 месеца, категоричен е д-р Кристиян Гоновски
              </p>
              <p>
                Изключително важна при малките деца е употребата на обувки с твърди подметки,
                 както и при всяка възможност те да бъдат оставени да ходят боси, 
                 тъй като неравностите „дразнят“ рецепторите на стъпалата и 
                 правят профилактика при т.н. плоскостъпие. 
              </p>

              <p>
                Първият профилактичен ортопедичен преглед се прави най-късно 6-8 седмица от раждането.
                 Прегледът включва клиничен преглед на горни и долни крайници, гръбначен стълб, 
                 както и ехография на тазобедрените стави. 
                Търсят се вродени заболявания на опорно-двигателния апарат, 
                най-вече дисплазия или луксация на тазобедрените стави. 
                Най-новите препоръки насочват този преглед да се провежда още в родилното, 
                преди изписване, като след това не се налага извършването му на 2-месечна възраст.
              </p>
            </div>
          </article> <!-- .blog-details -->
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
@endsection 
   