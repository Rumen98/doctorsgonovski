@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="container text-center">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6">
            <div class="img-place custom-img-1">
                <img src="{{ asset('images/doctors/doctor_1.jpg') }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                    <img src="{{ asset('images/doctors/doctor_1.jpg') }}" class="card-img-top" alt="Dr. Stein Albert">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Stein Albert</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                    <img src="{{ asset('images/doctors/doctor_1.jpg') }}" class="card-img-top" alt="Dr. Stein Albert">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
        <h1 class="text-center">Make an Appointment</h1>

        <form class="main-form mt-5">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <select name="departement" id="departement" class="form-select">
                        <option value="general">General Health</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control" placeholder="Number..">
                </div>
                <div class="col-12 mb-3">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </div>
        </form>
    </div> <!-- .container -->
</div> <!-- .page-section -->


@endsection
