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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Package</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Package</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="service -page-content">
        <div class="container">
            <div class="row rounded">
                <div class="col-lg-8 wow fadeInUp">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column -ps-4">
                            <img src="{{ asset('uploads/' . $packages->image) }}"
                                class="rounded h-240px w-100 object-fit-cover" />
                            <h5 class="card-title -text-dark fw-700 pt-4 pb-4 text-base-color">{{ $packages->name }}
                            </h5>
                            <div class="card-text">
                                <div class="row pe-2 ps-4">
                                    <div class="col-7 bg-vdc-light-purple border-radius-6px">
                                        <!-- <p><strong>Description:</strong><br> -->
                                        <ul class="-bg-vdc-light-purple p-4 fw-600 border-radius-6px">
                                            <li>No parameter:{{ $packages->noparameter }}</li>
                                            <li>Pre requisite:{{ $packages->prerequisite }}</li>
                                            <li>Report time:{{ $packages->reporttime }}</li>
                                        </ul>

                                        </p>
                                    </div>
                                    <div class="col-5 -border-solid -border-radius-6px -border-2 -border-base-color">
                                        <div class="bg-vdc-light-yellow pt-40px pb-40px border-radius-6px">
                                            <ul class="-bg-vdc-medium-light-purple text-dark p-4 text-center">
                                                <li class="fw-600">Price: <span class="text-red fw-700 fs-24">₹
                                                        {{ $packages->price }}</span> </li>
                                            </ul>


                                            <div class="mt-auto justify-content-evenly d-flex">
                                                <button
                                                    class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow ms-5px"
                                                    onclick="handleAddToCart({{ $packages->id }})">
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
                                </div>
                                <div class="row pt-4">
                                    <div class="col-12">
                                        <h6 class="text-dark fw-600 fs-18">Parameter:</h6>
                                        <p>



                                            @foreach (explode(',', $packages->parameter) as $parameter)
                                                <span
                                                    class="border-solid border-radius-6px border-2 border-base-color pt-1 pb-1 pe-2 ps-2 ms-2 mb-10px d-inline-flex text-base-color fw-600 fs-14">
                                                    {{ $parameter }}
                                                </span>
                                            @endforeach

                                        </p>
                                        <!-- <p><strong> parameter:</strong> {{ $packages->parameter }}</p> -->
                                    </div>
                                </div>


                                <!-- <p><strong>Price:</strong> ${{ $packages->price }}</p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp mt-0 sm-mt-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column -ps-4">
                            <h6 class="text-base-color fw-700 fs-28 text-center text-uppercase">Patients Packages</h6>
                            <div
                                class="-outside-box-right-15 -xl-outside-box-right-20 -sm-outside-box-right-0 overflow-hidden">
                                <div class="swiper slider-one-slide -slider-shadow-right sm-slider-shadow-none -magic-cursor overflow-hidden p-2 -ps-25px sm-p-0"
                                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper pt-30px pb-30px">
                                        @foreach ($test as $product)
                                            <div class="swiper-slide">
                                                <div
                                                    class="box-shadow-extra-large services-box-style-01 hover-box last-paragraph-no-margin border-radius-6px overflow-hidden border-bottom border-4 border-base-color">
                                                    <div class="position-relative box-image">
                                                        <img src="{{ asset('uploads/' . $product->image) }}"
                                                            class="rounded h-240px w-100 object-fit-cover" />
                                                    </div>
                                                    <div class="bg-white">

                                                        <div
                                                            class="ps-20px min-h-150px pe-20px pt-35px sm-pt-35px sm-pe-20px sm-ps-20px sm-pb-0">
                                                            <h5
                                                                class="fw-600 lh-sm mb-10px text-dark-gray fs-18 line-2 ps-5px">
                                                                {{ $product->name }}</h5>
                                                            <p
                                                                class="mb-10px lh-sm fs-18 fw-bold text-base-color ps-5px">
                                                                ₹ {{ $product->price }}</p>

                                                            <a href="{{ URL::to('packages-knowmore/' . $product->slug) }}"
                                                                class="btn btn-very-small btn-vdc-orange btn-hover-animation-switch btn-round-edge btn-box-shadow"><i
                                                                    class="ti ti-pencil"></i>
                                                                Know More</a>
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
                type: "package"
            },
            success: function(response) {
                if (response.success) {
                    toastr.success('Product added to cart successfully!');
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);

                } else {
                    toastr.error('Failed to add product to cart. Please try again.');
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
    //dropdwon ->id search-input->controller search->web->header link
    $(function() {
        $("#search-input").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('search') }}",
                    data: {
                        s: request.term
                    },
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.name,
                                value: item.name
                            };
                        }));
                    }
                });
            },
            minLength: 1
        });
    });
</script>

@include('layout.footer')
