@extends('common')

@section('title')
    Fasi | Home
@endsection

@section('body')
    <div class="images-slider">
        <div>
            <img class="img-fluid" src="{{ asset('assets/images/collage/1.jpg') }}" alt="">
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('assets/images/collage/2.jpg') }}" alt="">
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('assets/images/collage/3.jpg') }}" alt="">
        </div>
        <div>
            <img class="img-fluid" src="{{ asset('assets/images/collage/4.jpg') }}" alt="">
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(window).on("load", function() {
            var slider = tns({
                container: '.images-slider',
                items: 3,
                slideBy: 'page',
                autoplay: true,
                controls: false,
                nav: false,
                touch: true
            });
        });

        $(document).ready(function() {

        });
    </script>
@endpush
