@include('layout.header')

<section class="cover-background full-screen bg-dark-gray ipad-top-space-margin position-relative section-dark md-h-auto"
    style="background-image: url('{{ asset('frontend/vdc_images/vdc-banner-01.webp') }}')">
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
        data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#ed00a8", "#ed00a8", "#ed00a8", "#ed00a8"]},"shape": {"type": "edge","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.8,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 5,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-xl-7 col-lg-8 col-md-10 text-white position-relative text-center text-lg-start">
                <div class="fs-55 sm-fs-60 xs-fs-40 fw-600 -mb-20px ls-minus-2px overflow-hidden">
                    <div class="d-inline-block"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900 }'>
                        Your Trusted
                        <div class="highlight-separator" data-shadow-animation="true" data-animation-delay="1500">
                            Laboratory
                        </div>
                    </div>
                </div>
                <div class="fs-18 fw-300 mb-30px w-80 sm-w-100 opacity-6 d-block mx-auto mx-lg-0 overflow-hidden">
                    <span class="d-inline-block lh-32"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 300 }'>Discover
                        the most trusted and advanced diagnostic laboratories dedicated to providing accurate and
                        reliable testing services.</span>
                </div>
                <div class="overflow-hidden pt-5px">
                    <a href="{{ route('user.patientspage') }}"
                        class="btn btn-extra-large btn-yellow btn-rounded  btn-box-shadow btn-switch-text d-inline-block me-15px xs-m-10px align-middle fw-600"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                        <span>
                            <span class="btn-double-text" data-text="Book Now">Book Now</span>
                            <span><i class="feather icon-feather-arrow-right"></i></span>

                        </span>
                    </a>
                    <div class="text-white fs-15 d-inline-block last-paragraph-no-margin align-middle"
                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 700 }'>
                        <div class="-opacity-6 ls-minus-05px text-white d-inline-block cursor-pointer">
                            <i class="feather icon-feather-map-pin" aria-hidden="true"></i>
                            <span class="fw-500 d-inline-block">Kerala</span>
                        </div>
                    </div>
                    {{-- whatsapp --}}
                    <!--        <div class="container">-->

                    <!--            <p>Contact Us on WhatsApp</p>-->

                    {{-- <a id="whatsapp-link"
               target="_blank"
            class="btn btn-success">
          <i class="bi bi-whatsapp"></i> Chat on WhatsApp
            </a> --}}
                    <!--        </div>-->
                    {{-- whatsapp --}}
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
            </div>
        </div>
    </div>
</section>

<section class="bg-very-light-gray pt-20px pb-20px sm-pt-40px"
    data-anime='{ "opacity": [0, 1], "translateY": [0, 0], "easing": "easeOutQuad", "duration": 1000,"staggervalue": 300, "delay": 600 }'>
    <div class="container overlap-section">
        <div
            class="row justify-content-between overlap-section border-radius-6px overflow-hidden row-gap-3 lg-p-20px p-30px bg-white g-0 box-shadow-extra-large">
            <div class="col-6 col-lg-2 process-step-style-07 position-relative p-0 float-left">







                @if (Auth::check())
                    <a href="{{ route('cart.homesamplecollection') }}"
                        class="process-step-item d-flex align-items-center">
                        <div class="process-step-icon-wrap position-relative">
                            <div
                                class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle -bg-black h-40px w-40px bg-base-color fs-17 fw-500">

                                <img class="-bg-vdc-orange rounded p-10px"
                                    src="{{ asset('frontend/vdc_images/blood-tube.png') }}" style="filter: invert(1);">
                            </div>
                        </div>
                        <div class="process-content ps-10px last-paragraph-no-margin">
                            <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">Book Home
                                Collection</span>
                        </div>
                    </a>
                @else
                    <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        <div class="process-step-icon-wrap position-relative">
                            <div
                                class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle -bg-black h-40px w-40px bg-base-color fs-17 fw-500">

                                <img class="-bg-vdc-orange rounded p-10px"
                                    src="{{ asset('frontend/vdc_images/blood-tube.png') }}" style="filter: invert(1);">
                            </div>
                        </div>
                        <div class="process-content ps-10px last-paragraph-no-margin">
                            <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">Book Home
                                Collection</span>
                        </div>
                    </a>
                @endif






                {{-- <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#bookSampleModal">
                    <div class="process-step-icon-wrap position-relative">
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle -bg-black h-40px w-40px bg-base-color fs-17 fw-500">
                            
                            <img class="-bg-vdc-orange rounded p-10px"
                                src="{{ asset('frontend/vdc_images/blood-tube.png') }}" style="filter: invert(1);">
                        </div>
                    </div>
                    <div class="process-content ps-10px last-paragraph-no-margin">
                        <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">Book Home
                            Collection</span>
                    </div>
                </a> --}}
            </div>
            <div class="col-6 col-lg-2 process-step-style-07 position-relative p-0 float-left">
                <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#bookctscan">
                    <div class="process-step-icon-wrap position-relative">
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle -bg-black h-40px w-40px bg-base-color fs-17 fw-500">
                            <img class="-bg-vdc-orange rounded p-10px"
                                src="{{ asset('frontend/vdc_images/medical-prescription.png') }}"
                                style="filter: invert(1);">
                        </div>
                    </div>
                    <div class="process-content ps-10px last-paragraph-no-margin">
                        <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">CT Scan</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-2 process-step-style-07 position-relative p-0 float-left">
                <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#uploadPrescriptionModal">
                    <div class="process-step-icon-wrap position-relative">
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle -bg-black h-40px w-40px bg-base-color fs-17 fw-500">
                            <!-- <span class="number position-relative z-index-1 text-white">02</span> -->
                            <img class="-bg-vdc-orange rounded p-10px"
                                src="{{ asset('frontend/vdc_images/medical-prescription.png') }}"
                                style="filter: invert(1);">
                        </div>
                    </div>
                    <div class="process-content ps-10px last-paragraph-no-margin">
                        <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">Upload a
                            Prescription</span>
                    </div>
                </a>
            </div>


            <div class="col-6 col-lg-2 process-step-style-07 position-relative p-0 float-left">
                <a href="{{ Auth::check() ? route('user.downloadpage') : '#' }}"
                    class="process-step-item d-flex align-items-center"
                    {{ Auth::check() ? '' : 'data-bs-toggle=modal data-bs-target=#loginModal' }}>
                    <div class="process-step-icon-wrap position-relative">
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-40px w-40px bg-base-color fs-17 fw-500">
                            <!-- <span class="number position-relative z-index-1 text-white">03</span> -->
                            <img class="-bg-vdc-orange rounded p-10px"
                                src="{{ asset('frontend/vdc_images/prescription.png') }}" style="filter: invert(1);">
                        </div>
                    </div>
                    <div class="process-content ps-10px last-paragraph-no-margin">
                        <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">Download your
                            Report</span>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-2 process-step-style-07 position-relative p-0 float-left">
                <a href="{{ route('user.contact') }}" class="process-step-item d-flex align-items-center">
                    <div class="process-step-icon-wrap position-relative">
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-40px w-40px bg-base-color fs-17 fw-500">
                            <!-- <span class="number position-relative z-index-1 text-white">03</span> -->
                            <img class="-bg-vdc-orange rounded p-10px"
                                src="{{ asset('frontend/vdc_images/microscope.png') }}" style="filter: invert(1);">
                        </div>
                    </div>
                    <div class="process-content ps-10px last-paragraph-no-margin">
                        <span class="d-block fw-600 text-dark-gray fs-14 ls-minus-05px lh-sm alt-font">Find Our
                            Lab</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-very-light-gray cover-background pt-5 xs-pt-8"
    style="background-image: url({{ asset('images/demo-hosting-home-06.jpg') }})">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-base-color fw-600 mb-5px text-uppercase d-block">Health Packages</span>
                <h2 class="text-dark-gray fw-700 ls-minus-2px">Specialized Health Packages</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-3 justify-content-center"
            data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200, 1200], "scale": [1.05, 1], "rotateX": [50, 0], "opacity": [0,1], "duration":600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            @foreach ($product as $rows)
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-white feature-box h-250px justify-content-between box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-30px border-radius-6px">
                        <div class="feature-box-content">
                            <span
                                class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">{{ $rows->name }}</span>
                            <p class="mb-10px fs-20">Rs {{ $rows->price }}/-</p>
                        </div>
                        <div class="d-flex justify-content-between w-100">



                            <a href="{{ URL::to('packages-knowmore/' . $rows->slug) }}"
                                class="btn btn-small btn-vdc-gray  btn-rounded btn-hover-animation-switch btn-round btn-box-shadow">
                                Know More</a>


                            </button>
                            @if (Auth::check())
                                <button
                                    class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                    onclick="handleAddToCart({{ $rows->id }},'package')">
                                    <span>
                                        <span class="btn-text">Book Now</span>

                                    </span>
                                @else
                                    <button
                                        class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                        data-bs-toggle="modal" data-bs-target="#loginModal">
                                        <span>
                                            <span class="btn-double-text" data-text="Login">Book Now</span>
                                        </span>
                                    </button>
                            @endif
                        </div>
                        {{-- <div class="d-flex justify-content-between w-100">
                            <button
                                class="btn btn-vdc-gray btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                data-bs-toggle="modal" data-bs-target="#knowMoreModal"
                                data-name="{{ $rows->name }}" data-description="{{ $rows->description }}"
                                data-price="₹{{ $rows->price }}" data-image="{{ asset('uploads/' . $rows->image) }}">
                                <span>
                                    <span class="btn-double-text" data-text="Know more">Know more</span>
                                </span>
                            </button>
                            @if (Auth::check())
                                <button
                                    class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                    onclick="handleAddToCart({{ $rows->id }})">
                                    <span>
                                        <span class="btn-double-text" data-text="Book Now">Book Now</span>
                                    </span>
                                </button>
                            @else
                                <button
                                    class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                    data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <span>
                                        <span class="btn-double-text" data-text="Login">Book Now</span>
                                    </span>
                                </button>
                            @endif
</div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->


    <div class="row justify-content-center mt-2">
        <div class="col-auto icon-with-text-style-08 sm-mb-10px"
            data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="feature-box feature-box-left-icon-middle">
                <div class="feature-box-icon me-10px">
                    <i class="bi bi-eye icon-small text-black"></i>
                </div>
                <div class="feature-box-content">
                    <span class="alt-font text-black fs-18">
                        <a href="{{ route('user.packages') }}"
                            class="text-decoration-line-bottom text-black fw-500">View All Health
                            Packages</a></span>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- about page -->
<section class="overflow-hidden bg-white">
    @foreach ($pageaboutitem as $row)
        <div class="container">
            <div class="row align-items-center justify-content-center -mb-6 -sm-mb-50px position-relative">
                <div class="col-lg-5 me-2 col-md-10 position-relative md-mb-30px"
                    data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <img class="w-100 rounded-5" src="{{ asset('frontend/vdc_images/about-img.webp') }}"
                        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                        alt />
                </div>
                <div class="col-lg-6 -offset-sm-1 last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "delay": 300, "easing": "easeOutCirc" }'>
                    <span class="text-base-color fw-600 mb-15px text-uppercase d-block">{{ $row->name }} </span>
                    <h2 class="fw-600 text-dark-gray w-90 lg-w-100 text-dark-gray fw-700 ls-minus-2px">Why Vijaya
                        Diagnostic
                        Center</h2>
                    <p class="w-90 sm-w-100">{{ $row->description }}</p>
                    <a href="{{ route('user.about') }}"
                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text mt-4">
                        <span>
                            <span class="btn-double-text" data-text="Know more">Know more</span>
                            <span><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    @endforeach
</section>

<!-- Individual Tests -->
<section
    class="overflow-hidden -bg-regal-blue -bg-gradient-light-to-medium-purple bg-vdc-light-purple -bg-primary-gradient position-relative -border-radius-6px -lg-border-radius-0px z-index-0">
    <div class="container">
        <div class="row align-items-center mb-3 sm-mb-9 text-start -text-lg-start">
            <div class="col-lg-5 md-mb-20px">
                <h3 class="text-black fw-700 mb-0 +ls-minus-1px mb-20px">Individual Tests</h3>
                <p class="fs-16 lh-base text-black">Experience cutting-edge diagnostics at laboratories that set the
                    standard for excellence</p>
            </div>
            <div class="col-lg-7 d-flex justify-content-start justify-content-lg-end">
                <div
                    class="slider-one-slide-prev-1 icon-extra-medium text-base-color swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-dark-light">
                    <i class="feather icon-feather-chevron-left"></i>
                </div>
                <div
                    class="slider-one-slide-next-1 icon-extra-medium text-base-color swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-dark-light">
                    <i class="feather icon-feather-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="row align-items-center mb-3">
            <div class="col-12">
                <div class="-outside-box-right-25 -sm-outside-box-right-0">
                    <div class="swiper -magic-cursor slider-one-slide"
                        data-slider-options='{
                            "slidesPerView": 1.2,
                            "spaceBetween": 20,
                            "loop": true,
                            "navigation": {
                                "nextEl": ".slider-one-slide-next-1",
                                "prevEl": ".slider-one-slide-prev-1"
                            },
                            "autoplay": {
                                "delay": 4000,
                                "disableOnInteraction": false
                            },
                            "keyboard": {
                                "enabled": true,
                                "onlyInViewport": true
                            },
                            "breakpoints": {
                                "1200": {
                                    "slidesPerView": 3
                                },
                                "992": {
                                    "slidesPerView": 3
                                },
                                "768": {
                                    "slidesPerView": 2.2
                                },
                                "320": {
                                    "slidesPerView": 1.2
                                }
                            },
                            "effect": "slide"
                        }'>
                        <div class="swiper-wrapper">
                            @foreach ($test as $row)
                                <div class="swiper-slide">
                                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                                        <div
                                            class="bg-white feature-box justify-content-start border text-start p-20px sm-p-20px border-radius-6px">
                                            <div class="-feature-box-icon mb-20px">
                                                <img src="{{ asset('frontend/vdc_images/test-01.svg') }}"
                                                    class="h-50px" alt="" />
                                            </div>
                                            <div class="feature-box-content min-h-150px">
                                                <h4 class="fw-600 lh-sm mb-10px text-dark-gray fs-18 line-2">
                                                    {{ $row->name }}</h4>
                                                <p class="mb-10px lh-sm fs-15">{{ $row->description }}</p>
                                            </div>

                                            <div class="d-flex justify-content-between w-100">


                                                <a href="{{ URL::to('test-knowmore/' . $row->slug) }}"
                                                    class="btn btn-very-small btn-vdc-gray btn-hover-animation-switch btn-rounded btn-box-shadow">
                                                    Know More</a>


                                                @if (Auth::check())
                                                    <button
                                                        class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                                        onclick="handleAddToCart({{ $row->id }},'test')">
                                                        <span>
                                                            <span class="btn-double-text"
                                                                data-text="Book
                                               Now">Book
                                                                Now</span>

                                                        </span>
                                                    </button>
                                                @else
                                                    <button
                                                        class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                                        data-bs-toggle="modal" data-bs-target="#loginModal">
                                                        <span>
                                                            <span class="btn-double-text" data-text="Login">Book
                                                                Now</span>
                                                        </span>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- popular health checkup -->
<section class="bg-very-light-gray">
    <div class="container">
        <div class="row align-items-center mb-6 xs-mb-8">
            <div class="col-md-6 text-center text-md-start sm-mb-20px"
                data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-black fw-700 mb-0 +ls-minus-1px mb-20px">
                    Popular Preventive
                    Health Check-Up Packages
                </h3>
            </div>
            <div class="col-md-6"
                data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="d-flex justify-content-center justify-content-md-end">
                    <a href="{{ route('user.patientspage') }}"
                        class="fw-600 alt-font text-dark-gray text-dark-gray-hover d-flex align-items-center">View
                        all<span
                            class="d-flex align-items-center justify-content-center bg-dark-gray h-40px w-40px text-center rounded-circle fs-16 text-white ms-10px"><i
                                class="feather icon-feather-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="-outside-box-right-25 -sm-outside-box-right-0">
                <div class="swiper -magic-cursor"
                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 20, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper pt-20px pb-20px">
                        @foreach ($pro as $row)
                            <div class="swiper-slide">
                                <div
                                    class="box-shadow-extra-large services-box-style-01 hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                    <div class="position-relative box-image">
                                        <img src="{{ asset('frontend/vdc_images/pack-04.webp') }}" alt />
                                    </div>
                                    <div class="bg-white" style="min-height: 150px;">
                                        <div class="ps-50px min-h-150px pe-50px pt-35px sm-p-35px sm-pb-0">
                                            <a href="{{ route('user.patientspage') }}"
                                                class="d-inline-block fs-20 primary-font fw-600 text-dark-gray mb-5px">{{ $row->name }}</a>
                                        </div>
                                        <div
                                            class="border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px mt-30px sm-ps-35px sm-pe-35px position-relative">

                                            <div class="fs-17"><span
                                                    class="text-dark-gray alt-font fs-26 fw-600 me-5px">₹{{ $row->price }}</span>
                                            </div>
                                            <a href="{{ route('user.patientspage') }}"
                                                class="d-flex justify-content-center align-items-center w-55px h-55px lh-55 rounded-circle bg-dark-gray position-absolute right-40px top-minus-30px"><i
                                                    class="bi bi-arrow-right-short text-white icon-very-medium"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center border-radius-8px p-4 xs-p-7 text-center text-lg-start g-0 cover-background"
            style="background-image: url({{ asset('frontend/images/demo-hosting-home-03.jpg') }})"
            data-bottom-top="transform:scale(1.1, 1.1) translateY(30px);"
            data-top-bottom="transform:scale(1.0, 1.0) translateY(-30px);">
            <div class="col-lg-6 col-md-9 md-mb-10px icon-with-text-style-08">
                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                    <div
                        class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle border border-2 border-color-transparent-white-light me-30px xs-me-25px">
                        <img src="{{ asset('frontend/vdc_images/appointment.svg') }}" class="w-50px h-50px" alt />
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <h5 class="d-inline-block fw-600 text-white mb-0">Take Control of Your Health Today</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="text-white d-inline-block last-paragraph-no-margin me-20px xs-m-10px">
                    <!-- <p class="opacity-8 d-inline-block">Starting at only</p> -->
                    <span class="fw-600 d-inline-block text-decoration-line-bottom">Schedule Your Appointment</span>
                </div>
                <a href="{{ route('user.patientspage') }}"
                    class="btn btn-medium btn-yellow btn-rounded fw-600 btn-switch-text btn-box-shadow">
                    <span>
                        <span class="btn-double-text" data-text="Book now">Book now</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-3">
            <div class="col-lg-10 col-md-10 sm-mb-15px"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="text-dark-gray fw-700 ls-minus-1px mb-0">Have a question?</h2>
            </div>
            <!-- <div
        class="col-lg-3 col-md-4 text-start text-md-end"
        data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'
    >
        <span class="text-dark-gray fs-30 align-middle fancy-text-style-4 ls-minus-1px"
            >&#128075; Say <span class="fw-600" data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span
        ></span>
    </div> -->
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion accordion-style-02" id="accordion-style-02"
                    data-active-icon="icon-feather-chevron-up" data-inactive-icon="icon-feather-chevron-down"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                aria-expanded="true" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                    <i class="feather icon-feather-chevron-up icon-extra-medium"></i><span
                                        class="fw-600 fs-18">What types of diagnostic tests does Vijayas Diagnostic
                                        Center offer?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                            data-bs-parent="#accordion-style-02">
                            <div
                                class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                <p>
                                    We offer a comprehensive range of diagnostic tests including blood tests, urine
                                    tests, imaging services (such as X-rays and ultrasounds), genetic testing,
                                    and specialized pathology services.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                    <i class="feather icon-feather-chevron-down icon-extra-medium"></i><span
                                        class="fw-600 fs-18">How long does it typically take to receive results for
                                        diagnostic tests?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-02" class="accordion-collapse collapse"
                            data-bs-parent="#accordion-style-02">
                            <div
                                class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                <p>
                                    The turnaround time for receiving results varies depending on the type of test. Most
                                    routine tests are processed within 24 to 48 hours, while specialized
                                    tests may take longer. Our team strives to provide accurate results in a timely
                                    manner to ensure prompt medical care.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-light-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03"
                                aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                    <i class="feather icon-feather-chevron-down icon-extra-medium"></i><span
                                        class="fw-600 fs-18">Can I schedule an appointment for diagnostic tests
                                        online?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-03" class="accordion-collapse collapse"
                            data-bs-parent="#accordion-style-02">
                            <div
                                class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                <p>
                                    Yes, you can easily schedule an appointment online through our website. Simply
                                    navigate to the appointment scheduling section, choose your desired date and
                                    time, and provide the required information. Our staff will confirm your appointment
                                    promptly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-transparent">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04"
                                aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                    <i class="feather icon-feather-chevron-down icon-extra-medium"></i><span
                                        class="fw-600 fs-18">Are the diagnostic tests performed at Vijayas Diagnostic
                                        Center reliable and accurate?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-04" class="accordion-collapse collapse"
                            data-bs-parent="#accordion-style-02">
                            <div
                                class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                <p>
                                    Yes, we maintain strict quality control measures to ensure the reliability and
                                    accuracy of all diagnostic tests. Our laboratory is equipped with
                                    state-of-the-art technology and staffed by experienced professionals who adhere to
                                    industry standards and guidelines. You can trust us to deliver precise
                                    results for informed healthcare decisions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-8 position-relative text-center text-xl-start lg-mb-15px"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-base-color fw-600 mb-15px text-uppercase d-block">Client feedback</span>
                <h3 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-20px mx-auto">What do people say about our
                    services?</h3>

                <div class="d-flex justify-content-center justify-content-xl-start">
                    <div class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray"
                        tabindex="0" role="button" aria-label="Previous slide">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray"
                        tabindex="0" role="button" aria-label="Next slide">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-10 overflow-hidden"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-15 xl-outside-box-right-20 sm-outside-box-right-0">
                    <div class="swiper slider-one-slide slider-shadow-right sm-slider-shadow-none -magic-cursor overflow-visible ps-25px sm-p-0"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px pb-30px">
                            @foreach ($testimonial as $row)
                                <div class="swiper-slide review-style-06" style="cursor: pointer;">
                                    <div
                                        class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-40px md-p-30px border-radius-6px last-paragraph-no-margin">
                                        <p class="line-clamp-4">{{ $row->description }}</p>

                                        <div class="mt-20px d-flex align-items-center">
                                            <img class="rounded-circle w-60px h-60px me-20px"
                                                src="{{ asset('uploads/' . $row->image) }}" alt />
                                            <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                <div class="alt-font text-dark-gray fw-600 fs-18">{{ $row->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="testModal" tabindex="-1" aria-labelledby="bookNowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="bookNowModalLabel">Book Individual Tests</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Booking form -->
                <form action="{{ route('admin.testbooking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" id="product_id" name="product_id">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Test Name</label>
                        <input type="text" class="form-control" id="product_name" name="test_name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bookNowModal" tabindex="-1" aria-labelledby="bookNowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="bookNowModalLabel">Book Now</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Booking form -->
                <form action="{{ route('admin.auth.booking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" id="product_id" name="product_id">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Package Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadPrescriptionModal" tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Upload Prescription</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="uploadprescription" action="{{ route('user.prescription.store') }}" class="row g-3" method="POST"
                    enctype="multipart/form-data" >
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="prename" name="name" >
                        <div class="text-danger" id="name-val"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="prephone" name="phone">
                        <div class="text-danger" id="Phone-val"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="prescription" class="form-label">Prescription</label>
                        <input type="file" class="form-control" id="prepre" name="prescription" >
                        <div class="text-danger" id="pre-val"></div>
                    </div>
                    <div class="col">
                       <button type="button" onclick="validateFormprescription()"
                            class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Upload">Upload</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bookSampleModal" tabindex="-1" aria-labelledby="bookSampleModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Book Home Sample Collection</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="bookSampleForm" class="row g-3" action="{{ route('user.booksample.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Address</label>
                        <input type="tel" class="form-control" name="address" id="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">phone No</label>
                        <input type="tel" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="prescription" class="form-label">Select Package</label>
                        <select class="form-control" id="prescription" name="package" required>
                            <option value="null" selected>Select</option>
                            @foreach ($pro as $row)
                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="test" class="form-label">Select Test</label>
                        <select class="form-control" id="test" name="test" required>
                            <option value="null" selected>Select</option>
                            @foreach ($test as $row)
                                <option value="prescription1">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit"
                            class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Submit">Submit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bookctscan" tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Book CT Scan Appointment</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="ctScanBookingForm" class="row g-3" action="{{ route('admin.ctscan.store') }}"
                    method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="patientName" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="patientName" name="patient_name">
                        <div class="text-danger" id="name-validation"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="patientPhone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="patientPhone" name="phone">
                        <div class="text-danger" id="Phone-validation"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="patientEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="patientEmail" name="email" required>
                        <div class="text-danger" id="email-validation"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="appointmentDate" class="form-label">Preferred Appointment Date</label>
                        <input type="date" class="form-control" id="appointmentDate" name="date">
                        <div class="text-danger" id="date-validation"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="additionalInfo" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additionalInfo" name="additional" rows="3"></textarea>
                        <div class="text-danger" id="add-validation"></div>
                    </div>
                    <div class="col">
                        <button type="button" onclick="validateFormctscan()"
                            class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Book now">Book Appointment</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var bookNowModal = document.getElementById('bookNowModal');
        bookNowModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var productId = button.getAttribute('data-product-id');
            var productName = button.getAttribute('data-product-name');

            // Update the modal's content with the product info
            var modalTitle = bookNowModal.querySelector('.modal-title');
            var productNameInput = bookNowModal.querySelector('#product_name');
            var productIdInput = bookNowModal.querySelector('#product_id');

            modalTitle.textContent = 'Book ' + productName;
            productNameInput.value = productName;
            productIdInput.value = productId;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var testModal = document.getElementById('testModal');

        // Add an event listener to the modal
        testModal.addEventListener('show.bs.modal', function(event) {
            // Get the button that triggered the modal
            var button = event.relatedTarget;

            // Extract test name from the button's data-test-name attribute
            var testName = button.getAttribute('data-test-name');

            // Set the test name in the modal
            var testNameElement = testModal.querySelector('#product_name');
            testNameElement.value = testName;
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#download-report-link').click(function(event) {
            event.preventDefault();

            @if (Auth::check())

                window.location.href = "#";
            @else

                $('#loginModal').modal('show');
            @endif
        });
    });
</script>
<script>
    function handleAddToCart(productId, type) {
        var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};
        if (isAuthenticated) {
            addToCart(productId, type);
        } else {
            // Show login modal
            $('#loginModal').modal('show');
        }
    }

    function addToCart(productId, type) {
        $.ajax({
            url: '{{ route('cart.add') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
                type: type
            },
            success: function(response) {
                if (response.success) {
                    window.location.reload();
                    toastr.success('Added to cart successfully!');
                } else {
                    toastr.error('Failed to add. Please try again.');
                }
            },
            error: function() {
                toastr.error('An error occurred. Please try again.');
            }
        });
    }

    // Handle login form submission
    $('#loginForm').submit(function(e) {
        e.preventDefault();

        var phone = $('#phone').val();

        // Make AJAX request to login endpoint
        $.ajax({
            url: '/login', // Update with your login route
            method: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                phone: phone
            },
            success: function(response) {
                if (response.success) {
                    // Hide the login modal
                    $('#loginModal').modal('hide');

                    // Set isAuthenticated to true
                    isAuthenticated = true;

                    // Optionally, call addToCart if it was interrupted
                    // addToCart(productId); // Uncomment if you want to add to cart automatically after login
                } else {
                    alert('Login failed. Please check your credentials and try again.');
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
            }
        });
    });
</script>
{{-- whatsapp --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var whatsappLink = document.getElementById('whatsapp-link');
        var phone = '9605347997';
        var message = encodeURIComponent('Hello, I need some information.');
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        if (/android/i.test(userAgent)) {
            whatsappLink.href = 'https://wa.me/' + phone + '?text=' + message;
        } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            whatsappLink.href = 'https://wa.me/' + phone + '?text=' + message;
        } else {
            whatsappLink.href = 'https://web.whatsapp.com/send?phone=' + phone + '&text=' + message;
        }
    });
</script> --}}


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var whatsappLink = document.getElementById('whatsapp-link');
        var phone = '00000000';
        var message = encodeURIComponent('Hello, I need some information.');
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        if (/android/i.test(userAgent)) {
            whatsappLink.href = 'https://wa.me/' + phone + '?text=' + message;
        } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            whatsappLink.href = 'https://wa.me/' + phone + '?text=' + message;
        } else {
            whatsappLink.href = 'https://web.whatsapp.com/send?phone=' + phone + '&text=' + message;
        }
    });
</script>
<script>
    function validateFormctscan() {
        const phoneInput = document.getElementById('patientPhone').value;
        const emailInput = document.getElementById('patientEmail').value;
        // var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var emailPattern = /^(?!\.)[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const nameInput = document.getElementById('patientName').value;
        const addInput = document.getElementById('additionalInfo').value;
        const dateInput = document.getElementById('appointmentDate').value;
        // var emailPattern =^[^\.].*;
        // e.preventDefault();
        var validation = true;
        if (phoneInput.length < 10 || phoneInput.length > 15) {
            document.getElementById('Phone-validation').innerHTML = "Please enter a valid number";
            validation = false;
        }
        if (!emailPattern.test(emailInput)) {
            document.getElementById('email-validation').innerHTML = "Please enter a valid email";
            validation = false;
        } 
        if (nameInput.length === 0) {
            document.getElementById('name-validation').innerHTML = "Please enter the name";
            validation = false;
        } 
        if (addInput.length === 0) {
            document.getElementById('add-validation').innerHTML = "Please enter the additional information";
            validation = false;
        } 
        if (dateInput.length === 0) {
            document.getElementById('date-validation').innerHTML = "select the date";
            validation = false;
        }
        if (validation) {
            document.getElementById('ctScanBookingForm').submit();

        }
    }
</script>




<script>
    function validateFormprescription() {
        const phoneInput = document.getElementById('prephone').value;   
        const nameInput = document.getElementById('prename').value;
        const preInput = document.getElementById('prepre').value;
     
        var validation = true;
        if (phoneInput.length < 10 || phoneInput.length > 15) {
            document.getElementById('Phone-val').innerHTML = "Please enter a valid number";
            validation = false;
        }
    
        if (nameInput.length === 0) {
            document.getElementById('name-val').innerHTML = "Please enter the name";
            validation = false;
        } 
        if (preInput.length === 0) {
            document.getElementById('pre-val').innerHTML = "Upload the prescription";
            validation = false;
        } 
       
        if (validation) {
            document.getElementById('uploadprescription').submit();

        }
    }
</script>
