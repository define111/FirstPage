@extends('layouts.main')

@section('content')

<!-- Hero Section-->
<section class="hero py-6 py-lg-7 text-white dark-overlay"><img src="img/photo/photo-1522143049013-2519756a52d4.jpg" alt="How can we help you today?" class="bg-image">
  <div class="container overlay-content">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb text-white justify-content-center no-border mb-0">
      <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Cooperini') }}</a></li>
      <li class="breadcrumb-item active">Kontakt                         </li>
    </ol>
@if(session()->has('message'))
    <h1 class="hero-heading">Vielen Dank für Ihre Nachricht!</h1>
    <h1 class="hero-heading">Wir werden sie schnellstmöglich beantworten.</h1>
  </div>
</section>
@else
    <h1 class="hero-heading">Wie können wir Ihnen heute helfen?</h1>
  </div>
</section>
<section class="py-6">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center text-md-left mb-4 mb-md-0">
        <div class="icon-rounded mb-4 bg-primary-light">
          <svg class="svg-icon w-2rem h-2rem text-primary">
            <use xlink:href="#landline-1"> </use>
          </svg>
        </div>
        <h3 class="h5">Rufen Sie uns an</h3>
        <p class="text-muted"><strong>+49 176 954 94 056</strong></p>
      </div>
      <div class="col-md-4 text-center text-md-left mb-4 mb-md-0">
        <div class="icon-rounded mb-4 bg-primary-light">
          <svg class="svg-icon w-2rem h-2rem text-primary">
            <use xlink:href="#mail-1"> </use>
          </svg>
        </div>
        <h3 class="h5">E-mail</h3>
        <p class="text-muted">Schreiben Sie uns gerne eine E-Mail.</p>
        <ul class="list-unstyled text-muted">
          <li>contact@cooperini.de</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="py-6 bg-gray-100">
  <div class="container">
    <h2 class="h4 mb-5">Schreiben Sie uns eine Nachricht</h2>
    <div class="row">
      <div class="col-md-7 mb-5 mb-md-0">
        <form id="contact-form" method="post" action="/contact" class="form">
          <div class="controls">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name" class="form-label">Ihr Vorname *</label>
                  <input type="text" name="name" id="name" placeholder="Ihr Vorname" value="{{ old ('name')}}" required="required" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="surname" class="form-label">Ihr Nachname *</label>
                  <input type="text" name="surname" id="surname" placeholder="Ihr Nachname" value="{{ old ('surname')}}" required="required" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Ihre E-mail *</label>
              <input type="email" name="email" id="email" placeholder="Ihre E-mail" value="{{ old ('email')}}"required="required" class="form-control">
            </div>
            <div class="form-group">
              <label for="message" class="form-label">Ihre Nachricht *</label>
              <textarea rows="4" name="message" id="message" placeholder="Ihre Nachricht" value="{{ old ('message')}}" required="required" class="form-control"></textarea>
            </div>
            @csrf
            <button type="submit" class="btn btn-outline-primary">Senden</button>
          </div>
        </form>
      </div>
      <div class="col-md-5">
        <div class="pl-lg-4">
          <p class="text-muted">Besuchen Sie unsere Profile auf Social Media.</p>
          <div class="social">
            <ul class="list-inline">
              {{-- <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li> --}}
              <li class="list-inline-item"><a href="https://www.facebook.com/groups/361426767811019/" target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="https://www.meetup.com/de-DE/Cooperini/" target="_blank"><i class="fab fa-meetup"></i></a></li>
              {{-- <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-vimeo"></i></a></li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection
