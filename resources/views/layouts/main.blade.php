<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Cooperini') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body style="padding-top: 72px;">
    <header class="header">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          {{-- Search --}}
          <div class="d-flex align-items-center"><a href="/" class="navbar-brand py-1"><img src="img/cooperini-logo.jpg" alt="Directory logo"></a>
            {{-- <form action="#" id="search" class="form-inline d-none d-sm-flex">
              <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3">
                <label for="search_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">Wonach suchen Sie?</span></label>
                <input id="search_search" placeholder="Suche" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas"></i></button>
              </div>
            </form> --}}
          </div>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            {{-- Search --}}
            {{-- <form action="#" id="searchcollapsed" class="form-inline mt-4 mb-2 d-sm-none">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label for="searchcollapsed_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">Wonach suchen Sie?</span></label>
                <input id="searchcollapsed_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas">           </i></button>
              </div>
            </form> --}}
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown"><a id="homeDropdownMenuLink" href="/coming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                  Inspirationen</a>
                <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu"><a href="/art1" class="dropdown-item">Info</a><a href="/tests" class="dropdown-item">Persönlichkeitstests</a><a href="/coming" class="dropdown-item">Interviews</a></div>
              </li>

              <li class="nav-item dropdown"><a id="homeDropdownMenuLink" href="/coming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                  Angebote</a>
                <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu"><a href="/cv" class="dropdown-item">Lebenslaufcheck</a><a href="/coming" class="dropdown-item">Ebook</a><a href="/jobswap" class="dropdown-item">JobSwap</a></div>
              </li>

              <li class="nav-item"><a href="/cooperini" class="nav-link">{{ config('app.name', 'Cooperini') }}</a>
              </li>

              <li class="nav-item"><a href="/contact" class="nav-link">Kontaktieren Sie uns</a>
              </li>

              <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a href="/write" class="btn btn-primary">Beitragen</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>
    @yield('content')
    <!-- Footer-->
    <footer class="position-relative z-index-10 d-print-none">
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-200 text-muted">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="font-weight-bold text-uppercase text-dark mb-3">Weitere Informationen</div>
              <p>Besuchen Sie unsere Profile auf Social Media.</p>
              <ul class="list-inline">
                {{-- <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li> --}}
                <li class="list-inline-item"><a href="https://www.facebook.com/groups/361426767811019/" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://www.meetup.com/de-DE/Cooperini/" target="_blank" title="meetup" class="text-muted text-hover-primary"><i class="fab fa-meetup"></i></a></li>
                {{-- <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li> --}}
              </ul>
            </div>
            {{-- <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Rentals</h6>
              <ul class="list-unstyled">
                <li><a href="index.html" class="text-muted">Rooms     </a></li>
                <li><a href="category-rooms.html" class="text-muted">Map on top     </a></li>
                <li><a href="category-2-rooms.html" class="text-muted">Side map     </a></li>
                <li><a href="category-3-rooms.html" class="text-muted">No map     </a></li>
                <li><a href="detail-rooms.html" class="text-muted">Room detail     </a></li>
              </ul>
            </div> --}}
            {{-- <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Pages</h6>
              <ul class="list-unstyled">
                <li><a href="contact.html" class="text-muted">Contact                                   </a></li>
                <li><a href="pricing.html" class="text-muted">Pricing                                   </a></li>
                <li><a href="text.html" class="text-muted">Text page                                   </a></li>
                <li><a href="faq.html" class="text-muted">F.A.Q.s  <span class="badge badge-info ml-1">New</span>                                   </a></li>
                <li><a href="coming-soon.html" class="text-muted">Coming soon                                   </a></li>
              </ul>
            </div> --}}
            <div class="col-lg-4">
              <h6 class="text-uppercase text-dark mb-3">Info</h6>
              <p class="mb-3">Falls Sie über neue Angebote informiert werden möchten, schreiben Sie uns eine <a href="/contact">Nachricht</a>.</p>
              {{-- <form action="#" id="newsletter-form">
                <div class="input-group mb-3">
                  <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control bg-transparent border-dark border-right-0">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-dark border-left-0"> <i class="fa fa-paper-plane text-lg"></i></button>
                  </div>
                </div>
              </form> --}}
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="text-sm mb-md-0">&copy; 2019 {{ config('app.name', 'Cooperini') }}.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                <li class="list-inline-item"><a href="/impressum">Impressum</a></li>
                <li class="list-inline-item"><a href="/datenschutzerklaerung">Datenschutz</a></li>
                {{-- <li class="list-inline-item"><img src="img/visa.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/mastercard.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/paypal.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/western-union.svg" alt="..." class="w-2rem"></li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer end-->
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('icons/orion-svg-sprite.svg');
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-1/icons/orion-svg-sprite.svg');

    </script>
    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
  </body>
</html>
