@extends('layouts.main')

@section('content')

<section class="position-relative py-6"><img src="img/photo/photo-1467987506553-8f3916508521.jpg" alt="" class="bg-image">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="bg-white rounded-lg shadow p-5"><strong class="text-uppercase text-secondary d-inline-block mb-2 text-sm">Empfohlen</strong>
          <h2 class="mb-3">Mehr Ausgleich für Sie</h2>
          <p class="text-muted">Ihr Wohlbefinden und Ihre Gesundheit sind sehr wichtig. Sie haben viele verschiedenen Talente und Fähigkeiten, die vielleicht noch nicht ganz in Ihrem Beruf zur Geltung kommen.  Entdecken Sie Ihre Stärken...</p><a href="\art1" class="btn btn-link p-0">Lesen Sie weiter<i class="fa fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-6">
  <div class="container">
    <div class="row mb-5">
      <!-- blog item-->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card shadow border-0 h-100"><a href="/tests"><img src="img/Coach.jpg" alt="..." class="img-fluid card-img-top"/></a>
          <div class="card-body"><a href="/tests" class="text-uppercase text-muted text-sm letter-spacing-2">Persönlichkeitstests</a>
            <h5 class="my-2"><a href="post.html" class="text-dark">Lernen Sie Ihre Stärken besser kennen!</a></h5>
            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>17.08.2019</p>
            <p class="my-2 text-muted text-sm">Die Analyse von Ihren Stärken kann Sie dabei unterstützen, erfolgreich und glücklich in Ihrem Beruf zu sein.</p><a href="/tests" class="btn btn-link pl-0">Lesen Sie weiter<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <!-- blog item-->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card shadow border-0 h-100"><a href="/cv"><img src="img/resume.jpg" alt="..." class="img-fluid card-img-top"/></a>
          <div class="card-body"><a href="/cv" class="text-uppercase text-muted text-sm letter-spacing-2">Lebenslaufcheck</a>
            <h5 class="my-2"><a href="post.html" class="text-dark">Was können Sie gut?</a></h5>
            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>17.08.2019</p>
            <p class="my-2 text-muted text-sm">Ihre wahren Stärken lassen nach einer Analyse von Ihrem bisherigen Werdegang leichter identifizieren.</p><a href="/cv" class="btn btn-link pl-0">Lesen Sie weiter<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <!-- blog item-->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card shadow border-0 h-100"><a href="/jobswap"><img src="img/dream.jpg" alt="..." class="img-fluid card-img-top"/></a>
          <div class="card-body"><a href="/jobswap" class="text-uppercase text-muted text-sm letter-spacing-2">JobSwap</a>
            <h5 class="my-2"><a href="post.html" class="text-dark">Probieren Sie Ihren Traumberuf aus!</a></h5>
            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>17.08.2019</p>
            <p class="my-2 text-muted text-sm">Was wäre Ihr Traumberuf? Wenn Sie einmal Job tauschen würden, mit wem würden Sie tauschen?</p><a href="/jobswap" class="btn btn-link pl-0">Lesen Sie weiter<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
          </div>
        </div>
      </div>

    {{-- <!-- Pagination -->
    <nav aria-label="Blog pagination">
      <ul class="pagination justify-content-between mb-5">
        <li class="page-item"><a href="#" class="page-link text-sm rounded"> <i class="fa fa-chevron-left mr-1"></i>Older posts</a></li>
        <li class="page-item disabled"><a href="#" tabindex="-1" class="page-link text-sm rounded">Newer posts  <i class="fa fa-chevron-right ml-1">                            </i></a></li>
      </ul>
    </nav> --}}
  </div>
</section>

@endsection
