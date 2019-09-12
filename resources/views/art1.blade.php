@extends('layouts.main')

@section('content')

<section class="hero-home dark-overlay mb-5"><img src="img/photo/photo-1467987506553-8f3916508521.jpg" alt="" class="bg-image">
  <div class="container py-7">
    <div class="overlay-content text-center text-white">
      <h1 class="display-3 text-serif font-weight-bold text-shadow mb-0">Mehr Ausgleich für Sie</h1>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-10 mx-auto">
        <p class="py-3 mb-5 text-muted text-center font-weight-light"><a href=""><img src="img/avatar/avatar-11.jpg" alt="" class="avatar mr-2"></a> Verfasst vom <a href="/cooperini" class="font-weight-bold">Cooperini</a><span class="mx-1">|</span> 22.08.2019 in <a href="blog.html" class="font-weight-bold">München</a><span class="mx-1">|</span>
        <p class="lead mb-5">Ihr Wohlbefinden und Ihre Gesundheit sind sehr wichtig. Sie haben viele verschiedenen <strong>Talente</strong> und <strong>Fähigkeiten</strong>, die vielleicht noch nicht ganz in Ihrem Beruf zur Geltung kommen. Entdecken Sie Ihre Stärken in unserem Bereich mit den <a href="/tests">Persönlichkeitstests</a>.</p>
        <figure class="figure mb-3"><img src="img/Tests.jpg" alt="Example blog post alt." class="figure-img img-fluid w-100">
          {{-- <figcaption class="figure-caption text-center">Pixabay License</figcaption> --}}
        </figure>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-8 col-lg-10 mx-auto">
        <p class="lead mb-5">Als eine Inspiration für Sie Ihre Talente noch besser zu entfalten, führen wir regelmäßig Gespräche mit den Karriereberatern. Lesen Sie die Interviews <a href="#">hier</a>.</p>
        <figure class="figure mb-3"><img src="img/Coach.jpg" alt="Example blog post alt." class="figure-img img-fluid w-100">
          {{-- <figcaption class="figure-caption text-center">Pixabay License</figcaption> --}}
        </figure>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-8 col-lg-10 mx-auto">
        <p class="lead mb-5">Was würden Sie noch gerne erfahren? Was inspiriert Sie? <a href="/contakt">Schreiben Sie uns eine Nachricht.</a> Ihr Feedback ist uns wichtig.</p>
      </div>
    </div>

        {{-- <!-- comments-->
        <div class="mt-5">
          <h6 class="text-uppercase text-muted mb-4">2 comments</h6>
          <!-- comment-->
          <div class="media mb-4"><img src="img/avatar/avatar-0.jpg" alt="Julie Alma" class="avatar avatar-lg mr-4">
            <div class="media-body">
              <h5>Julie Alma</h5>
              <p class="text-uppercase text-sm text-muted"><i class="far fa-clock"></i> September 23, 2017 at 12:00 am</p>
              <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p><a href="#" class="btn btn-link text-primary"><i class="fa fa-reply"></i> Reply</a></p>
            </div>
          </div>
          <!-- /comment-->
          <!-- comment-->
          <div class="media mb-4"><img src="img/avatar/avatar-8.jpg" alt="Louise Armero" class="avatar avatar-lg mr-4">
            <div class="media-body">
              <h5>Louise Armero</h5>
              <p class="text-uppercase text-sm text-muted"><i class="far fa-clock"></i> June 23, 2017 at 12:35 pm</p>
              <p class="text-muted">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              <p><a href="#" class="btn btn-link text-primary"><i class="fa fa-reply"></i> Reply</a></p>
            </div>
          </div>
          <!-- /comment-->
        </div>
        <!-- /comments-->

        <!-- comment form-->
        <div class="mb-5">
          <button type="button" data-toggle="collapse" data-target="#leaveComment" aria-expanded="false" aria-controls="leaveComment" class="btn btn-outline-primary">Leave a comment</button>
          <div id="leaveComment" class="collapse mt-4">
            <h5 class="mb-4">Leave a comment</h5>
            <form id="comment-form" method="post" action="#" class="form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="form-label">Name <span class="required">*</span></label>
                    <input id="name" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                    <input id="email" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="comment" class="form-label">Comment <span class="required">*</span></label>
                <textarea id="comment" rows="4" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary"><i class="far fa-comment"></i> Comment                                   </button>
            </form>
          </div>
        </div>
        <!-- /comment form--> --}}
      </div>

</section>

@endsection
