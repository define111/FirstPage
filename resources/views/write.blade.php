@extends('layouts.main')

@section('content')

<section class="hero-home dark-overlay mb-5"><img src="img/photo/photo-1467987506553-8f3916508521.jpg" alt="" class="bg-image">
  <div class="container py-7">
    <div class="overlay-content text-center text-white">
      <h1 class="display-3 text-serif font-weight-bold text-shadow mb-0">Teilen Sie Ihre Erfahrungen!</h1>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-10 mx-auto">
        <p class="lead mb-5">Sie können mit Ihrem Wissen den anderen helfen, glücklich in Ihren Beruf zu werden. Sind Sie Karriereberater, Coach oder Experte und wollen Ihre Erfahrungen teilen? Dann schreiben Sie uns eine <a href="/contact">Nachricht.</a> Ihr Feedback ist uns wichtig.</p>
        <figure class="figure mb-3"><img src="img/Tests.jpg" alt="Example blog post alt." class="figure-img img-fluid w-100">
          {{-- <figcaption class="figure-caption text-center">Pixabay License</figcaption> --}}
        </figure>
      </div>
    </div>
  </div>
</section>

@endsection
