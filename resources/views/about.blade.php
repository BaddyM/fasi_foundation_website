@extends('common')

@section('title')
    Fasi | About
@endsection

@section('body')
    <nav class="breadcrumb mt-2">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active" aria-current="page">About</span>
    </nav>

    <div class="mt-4 container">
        <div class="card shadow border-0" data-aos="slide-right" data-aos-duration="2000">
            <div class="card-body">
                <div class="title" data-aos="flip-right" data-aos-duration=2000>
                    <div></div>
                    <p class="mb-0">Who we are</p>
                    <div></div>
                </div>

                <div class="text-center col-md-1 w-100 my-3">
                    <img class="img-fluid" src="{{ asset("fasi-logo.png") }}" alt="">
                </div>

                <p>
                    <strong>Family Support Initiative (FASI)</strong> is a registered community-based organisation in Kampala district which was founded by a consortium of families greatly affected by poverty and other effects of the HIV/AIDS epidemic, with an aim to respond in a comprehensive and sustainable way to the challenges faced by families in Uganda in similar situations. Its work started on a voluntary basis in 2008, with the members reaching out to vulnerable families and supporting them to cope with and address the effects of HIV/AIDS. <br>
                    As the need to reach out further grew, the members decided to formalise their activities, and apply technical skills and resources to achieve their goal.
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
