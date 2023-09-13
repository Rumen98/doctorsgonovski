@extends('layouts.main')

@section('content')
<div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                <div class="card-doctor d-flex flex-column">
                    <div class="header">
                        <img src="{{ asset('images/doctors/gonovska.jpg') }}" class="card-img-custom">
                        <div class="meta">
                            <a href="tel:+359899152547"><i class="fa-solid fa-phone"></i></a>
                            <a href="https://wa.me/+359899152547"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="body mt-auto">
                        <p class="mb-0-custom" style="font-size: 13px">Д-р Иванка Кулевска-Гоновска</p>
                        <span class="text-sm-custom text-grey-custom">Кардиолог</span>
                    </div>
                    <div class="body mt-auto">
                        <h6 class="heading-custom">Образование</h6>
                        <p class="description-custom">Завършва Медицински университет София в 2011 г. Своята специалност Кардиология придобива през 2016 г. Успешно завършва магистратура по Социална медицина и здравен мениджмънт.</p>
                        <h6 class="heading-custom">Квалификации</h6>
                        <ul class="ul-style-custom">
                            <li class="ul-li-custom">Член на Български лекарски съюз и Дружество на кардиолозите в България;</li>
                            <li class="ul-li-custom">Член на ESC (Европейско дружество на кардиолозите);</li>
                            <li class="ul-li-custom">Участие в многобройни европейски, национални конгреси и семинари по специалността.</li>
                        </ul>
                        <h6 class="heading-custom">Биография</h6>
                        <p class="description-custom">След своето дипломиране 2012 г. д-р Кулевска-Гоновска работи в УМБАЛ Царица Йоанна - ИСУЛ София, МЦ Димед и ДКЦ 6 Пловдив. Към момента приема пациенти в собствен кабинет в Пловдив и Асеновград и е част от екипа специалисти на ДКЦ Пълмед Пловдив. Владее английски и немски език.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                <div class="card-doctor d-flex flex-column">
                    <div class="header">
                        <img src="{{ asset('images/doctors/gonovski.jpeg') }}">
                        <div class="meta">
                            <a href="tel:+359899152547"><i class="fa-solid fa-phone"></i></a>
                            <a href="https://wa.me/+359899152547"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="body mt-auto">
                        <p class="mb-0" style="font-size: 13px">Д-р Кристиян Гоновски</p>
                        <span class="text-sm text-grey">Ортопед</span>
                        <div class="description mt-2" style="font-size: 12px;">
                            <h6 class="heading-custom">Образование</h6>
                            <p>Завършва Медицински университет Пловдив през 2009 г. Своята специалност Ортопедия и травматология придобива през 2015 г. През 2014 г. придобива ОКС магистър по Обществено здраве и здравен мениджмент – професионална квалификация „Здравен мениджър”.</p>

                            <h6 class="heading-custom">Квалификации</h6>
                            <ul>
                                <li>Курс по Артроскопия и Ендопротезиране на стави</li>
                                <li>Курс Колянна хирургия в Stolzalpe, Австрия</li>
                                <li>АО сертификат от Европейското дружество по травматология от Graz Австрия по хирургия на тазобедрена става и фрактури на таза</li>
                            </ul>

                            <h6 class="heading-custom">Специализации</h6>
                            <ul>
                                <li>Ехография на тазобедрените стави при деца</li>
                                <li>Хирургия на ръка</li>
                            </ul>

                            <h6 class="heading-custom">Биография</h6>
                            <ul>
                                <li>Член на Български лекарски съюз и Българска ортопедична и травматологична асоциация БОТА</li>
                                <li>Член на Българската асоциация по артроскопия и спортна травматология БААСТ</li>
                                <li>Участие в многобройни национални конгреси и семинари по специалността</li>
                            </ul>

                            <strong>Биография</strong>
                            <p>След своето дипломиране през 2009 г. д-р Гоновски започва работа в УМБАЛ Пловдив. От 2016 г. до момента е част от екипа специалисти на МЦ 6 Пловдив. От 2017 г. практикува в УМБАЛ Еврохоспитал, Пловдив, а от 2019 г. работи като специалист ортопед-травматолог в УМБАЛ Пълмед Пловдив.</p>
                        </div>
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
        <h1 class="text-center wow fadeInUp">Запази Час</h1>
        <div class="col-12 wow fadeInUp" style="padding-top: 20px">
            <a href="https://superdoc.bg/lekar/d-r-kristian-gonovski-9873" target="_blank">
                <button type="button" class="btn btn-primary custom-btn">Запази</button>
            </a>
        </div>
    </div> <!-- .container -->

</div> <!-- .page-section -->

@endsection
