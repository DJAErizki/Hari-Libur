<!DOCTYPE html>

<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Gym Template" />
    <meta name="keywords" content="Gym, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>harilibur</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <style>
      section {
        background-color: black;
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container py-5">
        <div class="row">
          <div
            class=""
            style="
              display: grid;
              grid-template-columns: repeat(2, 1fr);
              gap: 40px;
              justify-content: center;
            "
          >
            <div class="card mb-4" style="border-radius: 12px">
              <div class="card-body text-center">
                <img
                  src="img/hero/gymbro-removebg-preview.png"
                  alt="avatar"
                  class="rounded-circle img-fluid"
                  style="width: 600px"
                />
                <h5 class="my-3">Nazmujahir</h5>
                <p class="text-muted mb-1">Full Stack Developer</p>
                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4 mb-md-0" style="border-radius: 12px">
                  <div class="card-body" style="border-radius: 12px">
                    <p class="mb-4">
                      <span class="text-primary font-italic me-1"
                        >assigment</span
                      >
                      Project Status
                    </p>
                    <p class="mb-1" style="font-size: 0.77rem">Ketahanan</p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar "
                        style="width: 80%"
                        aria-valuenow="80 "
                        aria-valuemin="0 "
                        aria-valuemax="100 "
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">kekuatan</p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar "
                        style="width: 72%"
                        aria-valuenow="72 "
                        aria-valuemin="0 "
                        aria-valuemax="100 "
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">One Page</p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar "
                        style="width: 89%"
                        aria-valuenow="89 "
                        aria-valuemin="0 "
                        aria-valuemax="100 "
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">
                      Kecepatan
                    </p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar "
                        style="width: 55%"
                        aria-valuenow="55 "
                        aria-valuemin="0 "
                        aria-valuemax="100 "
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">
                      Durabilitas
                    </p>
                    <div class="progress rounded mb-2" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar "
                        style="width: 66%"
                        aria-valuenow="66 "
                        aria-valuemin="0 "
                        aria-valuemax="100 "
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="d-grid gap-2 mt-5">
                  <button
                    class="btn btn-primary rounded-3"
                    style="background-color: #24d376; border: none"
                    type="button"
                  >
                    Pesan
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Js Plugins -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
