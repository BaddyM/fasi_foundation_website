<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('fasi-logo.png') }}?v2" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/tiny_slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}">
</head>

<body>
    <div id="body" class="d-none">
        <div class="d-flex justify-content-center d-none">
            <div class="top_header p-1 shadow text-center w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 row">
                        <div class="d-flex align-items-center col-md-5" style="gap:10px;">
                            <i class="fa fa-envelope"></i>
                            <p class="mb-0">info@fasifoundationug.org</p>
                        </div>
                        <div class="d-flex align-items-center col-md-5" style="gap:10px;">
                            <i class="fa fa-phone"></i>
                            <p class="mb-0">+256704842321</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn bg-white rounded-5" href="Use: https://wa.me/0704842321"><i class="bi bi-whatsapp"></i></a>
                        <a class="btn bg-white rounded-5" style="color: blue;"><i class="bi bi-facebook"></i></a>
                        <a class="btn bg-white rounded-5" style="color:rgb(252, 155, 171);"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center logo my-3">
            <div>
                <img src="{{ asset('fasi-logo.png') }}" alt="">
            </div>
            <p class="mb-0">Fasi Foundation</p>
        </div>

        <nav class="navbar navbar-expand-sm navbar-dark bg-primary w-100">
            <a class="navbar-brand fw-bold text-warning" href="{{ route('home') }}">FasiFoundation</a>
            <button class="navbar-toggler d-lg-none text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" aria-current="page"><i class="fa fa-house"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}"><i class="fa fa-newspaper"></i> Who we are</a>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link" href="{{ route('collage') }}"><i class="fa fa-photo-film"></i> Collage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobs') }}"><i class="fa fa-user-doctor"></i> Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><i class="fa fa-phone"></i> Reach Us</a>
                    </li>
                </ul>
                <form id="search_form" class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>

        @include('alert')


        @yield('body')

        <footer class="mt-5">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-1 text-center mb-3">
                    <img class="footer_logo" src="{{ asset('fasi-logo.png') }}" alt="">
                    <p class="mb-0 text-white fw-bold">Fasi Foundation</p>
                </div>
                <div class="col-md-2 text-white mb-3">
                    <a class="nav-link mb-2" href="tel:+256709613795"><i class="fa fa-telephone"></i> +256709613795</a>
                    <a class="nav-link mb-2"><i class="fa fa-envelope"></i> info@fasifoundationug.org</a>
                    <a class="nav-link" href="+256709613795"><i class="bi bi-linkedin"></i> fasifoundation</a>
                </div>
                <div class="col-md-2 text-center">
                    <p class="mb-2 text-white fw-bold text-decoration-underline">Our Partners</p>
                    <div class="partners">
                        <a href="" class="nav-link"><img src="{{ asset("assets/images/partners/D-Prize Logo PNG.png") }}" alt=""></a>
                        <a href="" class="nav-link"><img src="{{ asset("assets/images/partners/Early-Years-Count-Uganda-logo-1-07.svg") }}" alt=""></a>
                        <a href="" class="nav-link"><img src="{{ asset("assets/images/partners/SSA_Uganda_Logo.jpg") }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="my-2 text-white">
                    @php
                        $year = date("Y",strtotime(now()));
                    @endphp
                    Copyright {{ $year }} <i class="bi bi-c-circle"></i> fasifoundationug
                </p>
            </div>
        </footer>
    </div>

    <div class="page_loader" id="page_loader">
        <img class="img-fluid" src="{{ asset('assets/images/loader/loading.gif') }}" alt="">
    </div>

    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/tiny_slider.js') }}"></script>
    <script src="{{ asset('assets/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(window).on("load", function() {
            $("#page_loader").addClass("d-none");
            $("#body").removeClass("d-none");
        });

        $(document).ready(function() {
            $("#search_form").on("submit", function(e) {
                e.preventDefault();
                $(this)[0].reset();
                $("#alert_modal").modal("show");
                $("#alert_body").text("No Results Found!");
                setTimeout(() => {
                    $("#alert_modal").modal("hide");
                }, 3000);
            })
        })
    </script>
    @stack('scripts')
</body>

</html>
