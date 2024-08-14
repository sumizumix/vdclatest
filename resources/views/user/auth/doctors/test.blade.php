@include('layout.header')

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span
                        class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Test</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Doctors</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row  gy-4 justify-content-start"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            @foreach ($test as $row)
                <div class="col-sm-12 col-md-6 col-lg-4 transition-inner-all md-mb-30px">
                    <div
                        class="bg-white feature-box justify-content-between h-100 text-start p-20px sm-p-20px border-radius-6px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        {{-- <div class="-feature-box-icon mb-20px w-100">
                            <img src="{{ asset('uploads/' . $row->image) }}"
                                class="rounded h-250px w-100 object-fit-cover" />
                        </div> --}}
                        <div class="feature-box-content">
                            <h4 class="fw-600 lh-sm mb-10px text-dark-gray fs-18 line-2">{{ $row->name }}</h4>
                            <p class="mb-10px lh-sm fs-18 fw-bold text-base-color">₹ {{ $row->price }}</p>
                            @if (!empty($row->parameter))
                                @php
                                    $parameters = (array) json_decode($row->parameter);
                                    $totalParameters = count($parameters);
                                    $limit = 3; // Maximum number of parameters to show
                                @endphp

                                <div class="mt-15px">
                                    <p class="fs-13 mb-10px lh-1 text-orange">Parameters</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($parameters as $index => $parameter)
                                            @if ($index < $limit)
                                                <span
                                                    class="px-2 py-1 border-radius-6px shadow-sm border border-1 lh-base border-base-color d-inline-flex text-base-color fw-600 fs-14 m-0">
                                                    {{ $parameter }}
                                                </span>
                                            @endif
                                        @endforeach

                                        @if ($totalParameters > $limit)
                                            <span
                                                class="px-2 py-1 border-radius-6px shadow-sm border border-1 lh-base border-base-color d-inline-flex text-base-color fw-600 fs-14 m-0">
                                                +{{ $totalParameters - $limit }} more
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="w-100 d-flex justify-content-between mt-30px">
                            <a href="{{ URL::to('test-knowmore/' . $row->slug) }}"
                                class="btn btn-link-gradient expand btn-large text-orange d-table d-lg-inline-block xl-mb-15px md-mb-10px">
                                Know more
                                <span class="bg-orange"></span>
                            </a>
                            <a href="#"
                                class="btn btn-link btn-hover-animation-switch btn-large fw-700 text-base-color d-table d-lg-inline-block xl-mb-15px md-mb-10px"
                                onclick="handleAddToCart({{ $row->id }})">
                                <span>
                                    <span class="btn-text">Add to Cart</span>
                                    <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col">
                {{ $test->links() }}
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8);">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 id="modalProductName" class="fs-22 fw-bold text-base-color lh-sm"></h4>
                <p id="modalProductDescription"></p>
            </div>
            <div class="modal-footer bg-base-color">
                <p class="fs-24 fw-bold text-white" id="modalProductPrice"></p>
            </div>
        </div>
    </div>
</div>
<script>
    var productModal = document.getElementById('productModal');
    productModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var name = button.getAttribute('data-name'); // Extract info from data-* attributes
        var description = button.getAttribute('data-description');
        var price = button.getAttribute('data-price');

        var modalProductName = productModal.querySelector('#modalProductName');
        var modalProductDescription = productModal.querySelector('#modalProductDescription');
        var modalProductPrice = productModal.querySelector('#modalProductPrice');

        modalProductName.textContent = name;
        modalProductDescription.textContent = description;
        modalProductPrice.textContent = price;
    });
</script>


{{-- <script>
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
            url: '{{ route('carttest.add') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId
            },
            success: function(response) {
                if (response.success) {
                    alert('Product added to cart successfully!');
                } else {
                    alert('Failed to add product to cart. Please try again.');
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
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
</script> --}}

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
