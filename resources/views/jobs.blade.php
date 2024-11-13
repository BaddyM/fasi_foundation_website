@extends('common')

@section('title')
    Fasi | Opportunities
@endsection

@section('body')
    <nav class="breadcrumb mt-2">
        <a class="breadcrumb-item" href="{{ route("home") }}">Home</a>
        <span class="breadcrumb-item active" aria-current="page">Opportunities</span>
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
