@extends('common')

@section('title')
    Fasi | Collage
@endsection

@section('body')
    <nav class="breadcrumb mt-2">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-item active" aria-current="page">Collage</span>
    </nav>

    @php
        $images = [
            '1.JPG',
            '2.JPG',
            '3.JPG',
            '4.jpeg',
            '5.jpeg',
            '6.jpeg',
            '7.jpg',
            '8.jpeg',
            '9.jpeg',
            '10.jpeg',
            '11.jpeg',
        ];

        $images_others = [
            '1.jpg' => '',
            '2.jpg' => '',
            '3.jpg' => '',
            '4.jpg' => '',
            '5.jpg' => '',
            '6.jpg' => '',
            '7.jpg' => 'Outreach to offer assessment services to families of children living with disabilities',
            '8.jpg' => 'Outreach to offer assessment services to families of children living with disabilities',
            '9.jpg' => 'Outreach to offer assessment services to families of children living with disabilities',
            '10.jpg' => '',
            '11.jpg' => 'Outreach to offer assessment services to families of children living with disabilities',
            '13.jpg' => '',
            '14.jpg' => 'Training workshop for community resource persons',
            '15.jpg' => ' One-on-one counselling and psychosocial support services',
            '16.jpg' => 'Nutrition assessment of children under 5 years by VHTs during home visits',
            '19.jpg' => 'Nutrition assessment at integrated community outreaches',
            '20.jpg' => 'Integrated community outreaches',
            '21.jpg' => ' Use of relevant IEC materials at outreaches',
            '22.jpg' => 'Provision of nutrition assessment tools for household level nutrition and growth monitoring',
        ];
    @endphp

    <div class="title" data-aos="flip-right" data-aos-duration=2000>
        <div></div>
        <p class="mb-0">Our Work</p>
        <div></div>
    </div>

    <div class="w-100 row my-3 align-items-center d-flex justify-content-center">
        @foreach ($images as $img)
            <div class="col-md-4 my-4" data-aos="zoom-in" data-aos-duration=2000>
                <div class="card shadow">
                    <img class="img-fluid w-100 img-thumbnail"
                        src="{{ asset('assets/images/collage/thrive-ug/' . $img . '') }}" alt="">
                </div>
            </div>
        @endforeach
    </div>{{-- pictorial-thrive --}}

    <div class="w-100 row my-3 align-items-center d-flex justify-content-center">
        @foreach ($images_others as $key => $value)
            <div class="col-md-4 my-4" data-aos="zoom-in" data-aos-duration=2000>
                <div class="card shadow">
                    <img class="img-fluid w-100 img-thumbnail" src="{{ asset('assets/images/collage/' . $key . '') }}"
                        alt="">
                    @if ($value != null)
                        <div class="card-footer">
                            <p class="mb-0">{{ $value }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>{{-- pictorial-others --}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
