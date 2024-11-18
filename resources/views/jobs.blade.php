@extends('common')

@section('title')
    Fasi | Opportunities
@endsection

@section('body')
    <nav class="breadcrumb mt-2">
        <a class="breadcrumb-item" href="{{ route("home") }}">Home</a>
        <span class="breadcrumb-item active" aria-current="page">Opportunities</span>
    </nav>

    <div class="container">
        <div class="alert alert-warning p-2">
            <p class="mb-0">There aren't any opportunities yet, but as soon as they are available, we shall post them here. <br>
                Thank you.
            </p>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
