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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Packages</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Doctors</li>
                        <li>Packages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row justify-content-start gy-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            @foreach ($packages as $row)
                <div class="col-sm-12 col-md-6 col-lg-4 transition-inner-all">
                    <div
                        class="bg-white feature-box justify-content-between h-100 text-start p-20px sm-p-20px border-radius-6px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        {{-- <div class="-feature-box-icon mb-20px">
                            <img src="{{ asset('uploads/' . $row->image) }}"
                                style="aspect-ratio:383/287;object-fit: cover;" class="rounded" />
                        </div> --}}
                        <div class="feature-box-content position-relative w-100">
                            <h4 class="fw-600 lh-sm mb-10px  fs-18 line-2">
                                <a href="{{ URL::to('packages-knowmore/' . $row->slug) }}"
                                    class="stretched-link text-dark-gray">
                                    {{ $row->name }}
                                </a>
                            </h4>
                            <p
                                class="mb-10px lh-sm fs-18 fw-bold text-white bg-vdc-orange d-inline-block px-2 py-1 rounded-pill">
                                <span class="">₹</span> {{ $row->price }}
                            </p>
                            @php
                                $totalParameters = count(explode(',', $row->parameter));
                                $limit = 3; // Maximum number of parameters to show
                            @endphp

                            <div class="mt-15px">
                                <p class="fs-13 mb-10px lh-1 text-dark-gray">Parameters</p>
                                <div class="d-flex flex-wrap gap-1">
                                    @foreach (explode(',', $row->parameter) as $index => $parameter)
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
                        </div>
                        <div class="w-100 d-flex justify-content-between mt-30px">
                            <a href="{{ URL::to('packages-knowmore/' . $row->slug) }}"
                                class="btn btn-link-gradient expand btn-large text-orange d-table d-lg-inline-block xl-mb-15px md-mb-10px">
                                Know more
                                <span class="bg-orange"></span>
                            </a>
                            <button
                                class="btn btn-link btn-hover-animation-switch btn-large fw-700 text-base-color d-table d-lg-inline-block xl-mb-15px md-mb-10px"
                                onclick="handleAddToCart({{ $row->id }})">
                                <span>
                                    <span class="btn-text">Add to Cart</span>
                                    <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
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


    $('#loginForm').submit(function(e) {
        e.preventDefault();

        var phone = $('#phone').val();

        $.ajax({
            url: '/login',
            method: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                phone: phone
            },
            success: function(response) {
                if (response.success) {

                    $('#loginModal').modal('hide');

                    isAuthenticated = true;


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
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#search-box').on('keyup', function() {
            let query = $(this).val();

            if (query.length > 2) {
                $.ajax({
                    url: "{{ route('search.products') }}",
                    type: "GET",
                    data: { query: query },
                    success: function(data) {
                        let results = $('#search-results');
                        results.empty();

                        data.forEach(function(product) {
                            results.append('<a href="#" class="list-group-item list-group-item-action">' + product.name + '</a>');
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            } else {
                $('#search-results').empty();
            }
        });
    });
</script> --}}

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@include('layout.footer')
