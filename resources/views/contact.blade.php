@extends('common')

@section('title')
    Fasi | Reach Us
@endsection

@section('body')
    <nav class="breadcrumb mt-2">
        <a class="breadcrumb-item" href="{{ route("home") }}">Home</a>
        <span class="breadcrumb-item active" aria-current="page">Contact Us</span>
    </nav>

    <div class="container">
        <form id="contact_form" method="post">
            @csrf
            <div class="form-floating mb-2">
                <input type="text" placeholder="Add full name" class="form-control" name="name" required>
                <label>Full Name <strong class="text-danger">*</strong></label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" placeholder="Add Email or Phone Number" class="form-control" name="phone_email" required>
                <label>Email or Phone Number <strong class="text-danger">*</strong></label>
            </div>
            <div class="form-floating mb-2">
                <textarea style="height: 200px;" placeholder="Add Message" class="form-control" name="message" required></textarea>
                <label>Message <strong class="text-danger">*</strong></label>
            </div>
            <button class="btn btn-warning px-4 mt-4" type="submit">Submit</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#contact_form").on("submit",function(e){
                e.preventDefault();
                $(this)[0].reset();
                $("#alert_modal").modal("show");
                $("#alert_body").text("We have received your message and we shall respond as soon as possible");
                setTimeout(() => {
                    $("#alert_modal").modal("hide");
                }, 3000);
            })
        });
    </script>
@endpush
