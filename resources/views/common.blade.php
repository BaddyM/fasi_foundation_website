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
</head>

<body>
    <div class="top_header p-1 shadow">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 row">
                <div class="d-flex align-items-center col-md-6" style="gap:10px;">
                    <i class="fa fa-envelope"></i>
                    <p class="mb-0">info@fasifoundationug.org</p>
                </div>
                <div class="d-flex align-items-center col-md-6" style="gap:10px;">
                    <i class="fa fa-phone"></i>
                    <p class="mb-0">+256704842321</p>
                </div>
            </div>
            <div class="col-md-2">
                <a class="btn bg-white rounded-5"><i class="bi bi-whatsapp"></i></a>
                <a class="btn bg-white rounded-5" style="color: blue;"><i class="bi bi-facebook"></i></a>
                <a class="btn bg-white rounded-5" style="color:rgb(252, 155, 171);"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center logo my-3">
        <div>
            <img src="{{ asset('fasi-logo.png') }}" alt="">
        </div>
        <p class="mb-0">Fasi Foundation</p>
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">FasiFoundation</a>
        <button class="navbar-toggler d-lg-none text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
        <i class="fa fa-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("home") }}" aria-current="page"><i class="fa fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("about") }}"><i class="fa fa-newspaper"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("collage") }}"><i class="fa fa-photo-film"></i> Collage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("jobs") }}"><i class="fa fa-user-doctor"></i> Opportunities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("contact") }}"><i class="fa fa-phone"></i> Reach Us</a>
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

    @include("alert")

    <div class="">
        @yield('body')
    </div>
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/tiny_slider.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#search_form").on("submit",function(e){
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
