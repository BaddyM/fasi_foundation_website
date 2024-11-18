    @extends('common')

    @section('title')
        Fasi | Home
    @endsection

    @section('body')
        <div class="images-slider">
            <div><img class="img-fluid" src="{{ asset('assets/images/collage/thrive-ug/IMG_7108.jpeg') }}"></div>
            <div>
            </div>
            <div class="container-fluid d-flex justify-content-center w-100">
                <div class="row justify-content-between mission_vision text-center">
                    <div class="col-md-6">
                        <p class="mb-3 text-center btn bg-white rounded-0">Mission Statement</p>
                        <p class="bg-warning p-3">
                            Advancing socioeconomic outcomes for vulnerable communities through optimized resource
                            utilization
                            and social service accessibility.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-3 text-center btn bg-white rounded-0">Core Values</p>
                        <ul class="text-start bg-warning p-3 core_values">
                            <li><img src="{{ asset('assets/images/icons/9191543_stand_respect_people_human_organization_icon.png') }}"
                                    alt=""> Respect</li>
                            <li><img src="{{ asset('assets/images/icons/9191563_people_equality_legal_human_respect_icon.png') }}"
                                    alt=""> Equity</li>
                            <li><img src="{{ asset('assets/images/icons/8962903_cooperation_teamwork_collaboration_partnership_team_icon.png') }}"
                                    alt=""> Collaboration</li>
                            <li><img src="{{ asset('assets/images/icons/11474575_transparency_tool_edit_ui_designer_icon.png') }}"
                                    alt=""> Transparency</li>
                            <li><img src="{{ asset('assets/images/icons/1328821_alchemy_integrity_minimal_spiritual_icon.png') }}"
                                    alt=""> Integrity</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>{{-- Sliders --}}

        <div class="container my-3">
            <div class="title" data-aos="flip-right" data-aos-duration=2000>
                <div></div>
                <p class="mb-0">Thematic Areas</p>
                <div></div>
            </div>

            <div class="shadow-sm p-3 mb-5">
                <p data-aos="flip-left" data-aos-duration=2000 class="mb-3">
                <div class="bg-warning p-2 mb-1">
                    <p class="mb-0 text-uppercase fw-bold">Child Health</p>
                </div>
                <strong class="fst-italic">Thrive Ug</strong> is a child health venture being piloted with support from
                D-Prize
                under the alias Taasa-Abato Health
                link, with a vision to contribute to community health systems strengthening by improving the
                community-facility
                linkages. Our mission is to optimize child health in Uganda’s marginalized communities by facilitating the
                improved uptake and utilization of available health services.
                The 3 months pilot was launched in September 2024 in the slum communities of Rubaga division, aiming to link
                between 300-500 children to health facilities so they can receive their immunizations which would otherwise
                not
                occur. Afterwards, we hope to spend the following 21 months cascading to the rest of the divisions in
                Kampala,
                so we end the first two years reaching at least 10,000 people.
                Our team unites a diverse group of public health, community outreach, and project management professionals,
                all
                dedicated to reducing health disparities and improving outcomes for underserved populations. Driven by our
                mission to create lasting impact, we leverage proven strategies, innovation, and deep expertise to deliver
                sustainable health improvements so we can reduce vaccine-preventable diseases, lower healthcare costs and
                financial strain on families, while enhancing productivity through fewer missed school and work days. Our
                efforts will empower parents and caregivers with essential vaccine knowledge, fostering a positive shift
                toward
                healthier practices and long-term social change.
                </p>
                @php
                    $images = ['3.JPG', '4.jpeg', '5.jpeg', 'IMG_7147.jpeg', '8.jpeg', '9.jpeg'];
                @endphp

                <div class="w-100 row my-3 align-items-center d-flex justify-content-start">
                    @foreach ($images as $img)
                        <div class="col-md-4 my-4" data-aos="zoom-in" data-aos-duration=2000>
                            <div class="card">
                                <img class="img-fluid w-100 img-thumbnail"
                                    src="{{ asset('assets/images/collage/thrive-ug/' . $img . '') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>{{-- Child Health --}}

            <div class="shadow-sm p-3 mb-5">
                <p data-aos="flip-left" data-aos-duration=2000 class="mb-3">
                <div class="bg-warning p-2 mb-1">
                    <p class="mb-0 text-uppercase fw-bold">Nutrition and Food Security</p>
                </div>
                Community sensitisation through outreaches, door-to-door health education and home visits, peer club
                meetings, community dialogues, home based care, identification and referral of clients in need of
                institutionalised care, radio talk shows and partnering with other CSOs for stronger community engagement.
                </p>
                @php
                    $images = ['16.jpg', '20.jpg', '2.JPG'];
                @endphp

                <div class="w-100 row my-3 d-flex justify-content-start food_and_nutrition">
                    @foreach ($images as $img)
                        <div class="col-md-4 my-4" data-aos="zoom-in" data-aos-duration=2000>
                            <div class="card">
                                <img class="img-fluid w-100 img-thumbnail"
                                    src="{{ asset('assets/images/collage/' . $img . '') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>{{-- Food and Nutrition --}}

            <div class="shadow-sm p-3 mb-5">
                <p data-aos="flip-left" data-aos-duration=2000 class="mb-3">
                <div class="bg-warning p-2 mb-1">
                    <p class="mb-0 text-uppercase fw-bold">Diversity Reachout</p>
                </div>
                To ensure inclusion of diverse identities, we prioritize active engagement with various community groups and
                incorporate their perspectives add needs into our work, seen through our targeted health outreaches aimed at
                reaching people with disabilities, to bridge the access gap they face in accessing health facilities.
                </p>
                @php
                    $images = ['13.jpg','8.jpg','11.jpg'];
                @endphp

                <div class="w-100 row my-3 d-flex justify-content-start food_and_nutrition">
                    @foreach ($images as $img)
                        <div class="col-md-4 my-4" data-aos="zoom-in" data-aos-duration=2000>
                            <div class="card">
                                <img class="img-fluid w-100 img-thumbnail"
                                    src="{{ asset('assets/images/collage/' . $img . '') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>{{-- Diversity reachout --}}

            <div class="shadow-sm p-3 mb-5">
                <p data-aos="flip-left" data-aos-duration=2000 class="mb-3">
                <div class="bg-warning p-2 mb-1">
                    <p class="mb-0 text-uppercase fw-bold">CAPACITY BUILDING AND TECHNICAL ASSISTANCE</p>
                </div>
                Through needs-based trainings and transformative community dialogue, our team of diverse professionals equips community resource persons with the skills and knowledge to drive positive change and serve their communities effectively.
                </p>
                @php
                    $images = ['14.jpg','22.jpg','3.jpg'];
                @endphp

                <div class="w-100 row my-3 d-flex justify-content-start food_and_nutrition">
                    @foreach ($images as $img)
                        <div class="col-md-4 my-4" data-aos="zoom-in" data-aos-duration=2000>
                            <div class="card">
                                <img class="img-fluid w-100 img-thumbnail"
                                    src="{{ asset('assets/images/collage/' . $img . '') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>{{-- Capacity Building --}}


            <div class="title" data-aos="fade-right" data-aos-duration=2000>
                <div></div>
                <p class="mb-0">Be a member</p>
                <div></div>
            </div>

            <div class="row donation_volunteer mb-3" data-aos="fade-left" data-aos-duration=2000>
                <div class="col-md-3">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <p class="mb-0 fw-bold text-center">Become a Volunteer</p>
                        </div>
                        <img class="img-fluid"
                            src="{{ asset('assets/images/static/people-volunteering-donating-money_53876-66112.avif') }}"
                            alt="">
                        <div class="card-body">
                            <button type="button" id="volunteer_btn"
                                class="btn btn-warning fw-bold bg-gradient">Register</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <p class="mb-0 fw-bold text-center">Donate</p>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/images/static/make-a-donation-02.png') }}"
                            alt="">
                        <div class="card-body">
                            <button type="button" id="donate_btn"
                                class="btn btn-success fw-bold bg-gradient">Donate</button>
                        </div>
                    </div>
                </div>
            </div>{{-- volunteer/donate --}}
        </div>

        <div class="modal fade" id="donation_modal" tabindex="-1" data-bs-keyboard="false" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Donate to Fasi Foundation <i class="fa fa-circle-plus"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fw-bold text-danger">Coming Soon!</p>
                    </div>
                </div>
            </div>
        </div>{{-- Donation --}}

        <div class="modal fade" id="volunteer_modal" tabindex="-1" data-bs-keyboard="false" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Register to be a volunteer <i class="fa fa-circle-plus"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="volunteer_registrationg_form" method="post">
                            @csrf
                            <div class="mb-2 form-floating">
                                <input type="text" name="name" placeholder="Add Full Name" class="form-control"
                                    required>
                                <label>Full Name <strong class="text-danger">*</strong></label>
                            </div>
                            <div class="mb-2 form-floating">
                                <input type="text" name="name" placeholder="Add Full Name" class="form-control"
                                    required>
                                <label>Email or Phone Number <strong class="text-danger">*</strong></label>
                            </div>
                            <button class="btn btn-warning px-4 fw-bold bg-gradient mt-3" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>{{-- Volunteer --}}
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                $("#donate_btn").on("click", function() {
                    $("#donation_modal").modal("show");
                    setTimeout(() => {
                        $("#donation_modal").modal("hide");
                    }, 3000);
                });

                $("#volunteer_btn").on("click", function() {
                    $("#volunteer_modal").modal("show");
                });

                $("#volunteer_registrationg_form").on("submit", function(e) {
                    e.preventDefault();
                    $("#volunteer_modal").modal("hide");
                    $("#alert_modal").modal("show");
                    $("#alert_body").text("Registration successfully, we shall ge back to you shortly!");
                    setTimeout(() => {
                        $("#alert_modal").modal("hide");
                    }, 3000);
                });

                $("#volunteer_modal").on("hidden.bs.modal", function() {
                    $("#volunteer_registrationg_form")[0].reset();
                });
            });
        </script>
    @endpush
