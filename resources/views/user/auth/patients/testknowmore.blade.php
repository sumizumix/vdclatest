@include('layout.header')

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span
                        class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>
                    VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Test</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="pb-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="card-title -text-dark fw-700 text-base-color bg-white box-shadow rounded-3 pt-2 pb-2 pe-4 ps-4 border border-2 border-solid">{{ $packages->name }}</h5>
            </div>
        </div>
    </div>
</section> --}}

<section>
    <div class="service -page-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 wow fadeInUp">
                    <div class="bg-white box-shadow-quadruple-large border-0 border-radius-6px sm-p-15px p-25px">
                        <div class="">
                            {{-- <img src="{{ asset('uploads/' . $packages->image) }}" class="rounded h-240px w-100 object-fit-cover" /> --}}
                            <h5 class="fw-700 text-dark-gray mb-15px">{{ $packages->name }}</h5>
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="bg-vdc-purple p-20px border-radius-6px h-100 text-white">

                                        <div class="row">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <i class="bi bi-caret-right-fill lh-sm fs-15 text-orange me-2"></i>
                                                    <span class="lh-sm fs-15">Test code</span>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="d-flex gap-1">
                                                    <span class="lh-sm">:</span>
                                                    <h5 class="fw-600 fs-16 d-inline m-0 lh-sm">
                                                        {{ $packages->testcode }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-10px">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <i class="bi bi-caret-right-fill lh-sm fs-15 text-orange me-2"></i>
                                                    <span class="lh-sm fs-15">Schedule</span>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="d-flex gap-1">
                                                    <span class="lh-sm">:</span>
                                                    <h5 class="fw-600 fs-16 d-inline m-0 lh-sm">
                                                        {{ $packages->Schedule }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-10px">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <i class="bi bi-caret-right-fill lh-sm fs-15 text-orange me-2"></i>
                                                    <span class="lh-sm fs-15">Pre-requisite</span>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="d-flex gap-1">
                                                    <span class="lh-sm">:</span>
                                                    <h5 class="fw-600 fs-16 d-inline m-0 lh-sm">
                                                        {{ $packages->prerequisite }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-10px">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <i class="bi bi-caret-right-fill lh-sm fs-15 text-orange me-2"></i>
                                                    <span class="lh-sm fs-15">Report time</span>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="d-flex gap-1">
                                                    <span class="lh-sm">:</span>
                                                    <h5 class="fw-600 fs-16 d-inline m-0 lh-sm">
                                                        {{ $packages->reporttime }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-0 sm-mt-4">
                                    <div
                                        class="bg-vdc-light-yellow p-20px border-radius-6px h-100 d-flex flex-column justify-content-center">
                                        <div class="d-flex justify-content-between">
                                            <p class="fw-600 m-0 text-dark-gray">Price: </p>
                                            <h5 class="text-orange fw-700 fs-24 m-0">₹{{ $packages->price }}</h5>
                                        </div>
                                        <div class="mt-20px">
                                            <button
                                                class="btn btn-very-small w-100 btn-vdc-orange btn-hover-animation-switch btn-round-edge btn-box-shadow"
                                                onclick="handleAddToCart({{ $packages->id }})">
                                                <span>
                                                    <span class="btn-text">Add to Cart</span>
                                                    <span class="btn-icon">
                                                        <i class="feather icon-feather-shopping-cart"></i></span>
                                                    <span class="btn-icon">
                                                        <i class="feather icon-feather-shopping-cart"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($packages->parameter == null)
                            @else
                                @php
                                    $parameters = (array) json_decode($packages->parameter);
                                @endphp
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <h5 class="text-dark-gray fw-600 mb-15px fs-24 lh-sm">Parameter</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach ($parameters as $index => $parameter)
                                                <span
                                                    class="px-2 py-1 border-radius-6px shadow-sm border border-1 lh-base border-base-color d-inline-flex text-base-color fw-600 fs-14 m-0">
                                                    {{ $parameter }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 wow fadeInUp mt-0 lg-mt-4">
                    <div class="bg-white box-shadow-quadruple-large border-0 border-radius-6px sm-p-15px p-25px">
                        <div class="card-body d-flex flex-column -ps-4">
                            <h6 class="text-base-color fw-700 fs-26 text-start mb-15px">Popular Tests</h6>
                            <div class="overflow-hidden">
                                <div class="swiper slider-one-slide -slider-shadow-right sm-slider-shadow-none -magic-cursor overflow-hidden p-0"
                                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 15, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 1 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper">
                                        @foreach ($test as $product)
                                            <div class="swiper-slide">
                                                <div
                                                    class="patient_packages_card feature-box justify-content-between bg-white text-start p-15px sm-p-15px border-radius-6px border-start border-2 border-base-color">
                                                    <div class="feature-box-content position-relative w-100">
                                                        <h4 class="fw-600 lh-sm mb-10px  fs-18 line-2">
                                                            <a href="{{ URL::to('test-knowmore/' . $product->slug) }}"
                                                                class="stretched-link text-dark-gray">
                                                                {{ $product->name }}
                                                            </a>
                                                        </h4>
                                                        <p
                                                            class="mb-10px lh-sm fs-18 fw-bold text-orange d-inline-block">
                                                            <span class="">₹</span> {{ $product->price }}
                                                        </p>

                                                        @if (!empty($product->parameter))
                                                            @php
                                                                $parameters = (array) json_decode($product->parameter);
                                                                $totalParameters = count($parameters);
                                                                $limit = 3; // Maximum number of parameters to show
                                                            @endphp

                                                            <div class="mt-15px">
                                                                <p class="fs-13 mb-10px lh-1 text-dark-gray">Parameters
                                                                </p>
                                                                <div class="d-flex flex-wrap gap-1">
                                                                    @foreach ($parameters as $index => $parameter)
                                                                        @if ($index < $limit)
                                                                            <span
                                                                                class="px-2 py-1 rounded-pill border border-1 border-base-color d-inline text-base-color fw-600 fs-13 lh-1 m-0">
                                                                                {{ strlen($parameter) > 6 ? substr($parameter, 0, 6) . '...' : $parameter }}
                                                                            </span>
                                                                        @endif
                                                                    @endforeach

                                                                    @if ($totalParameters > $limit)
                                                                        <span
                                                                            class="px-2 py-1 rounded-pill border border-1 border-base-color d-inline text-base-color fw-600 fs-13 lh-1 m-0">
                                                                            +{{ $totalParameters - $limit }} more
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="mt-30px">
                                                        <a href="{{ URL::to('test-knowmore/' . $product->slug) }}"
                                                            class="btn btn-very-small btn-dark-gray btn-hover-animation-switch btn-rounded btn-box-shadow">
                                                            <span>
                                                                <span class="btn-text">Know More</span>
                                                                <span class="btn-icon"><i
                                                                        class="feather icon-feather-arrow-right"></i></span>
                                                                <span class="btn-icon"><i
                                                                        class="feather icon-feather-arrow-right"></i></span>
                                                            </span>
                                                        </a>
                                                        <button
                                                            class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-rounded btn-box-shadow ms-5px"
                                                            onclick="handleAddToCart({{ $product->id }})">
                                                            <span>
                                                                <span class="btn-text">Add to Cart</span>
                                                                <span class="btn-icon"><i
                                                                        class="feather icon-feather-shopping-cart"></i></span>
                                                                <span class="btn-icon"><i
                                                                        class="feather icon-feather-shopping-cart"></i></span>
                                                            </span>
                                                        </button>
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
            </div>
        </div>
    </div>
</section>
<script>
    function handleAddToCart(productId) {
        var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};
        if (isAuthenticated) {
            addToCart(productId);

        } else {
            // Show login modal
            $('#loginModal').modal('show');
        }
    }

    function addToCart(productId) {
        $.ajax({
            url: '{{ route('cart.add') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
                type: "test"
            },
            success: function(response) {
                if (response.success) {
                    toastr.success('test added to cart successfully!');

                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                } else {
                    toastr.error('Failed to add test to cart. Please try again.');
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
@include('layout.footer')
