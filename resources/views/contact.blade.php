@extends('common')

@section('title')
    Fasi | Reach Us
@endsection

@section('body')
    <nav class="breadcrumb mt-2">
        <a class="breadcrumb-item" href="{{ route("home") }}">Home</a>
        <span class="breadcrumb-item active" aria-current="page">Contact Us</span>
    </nav>

    <div class="images-slider">
        
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
