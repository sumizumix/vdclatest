@include('layout.header')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center -small-screen extra-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h3 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Packages</span>
                </h3>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Patients</li>
                        <li>Packages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0 position-relative z-3" style="margin-top: -60px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-10"
                data-anime='{ "el": "childs", "perspective": [1200, 1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0, 1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div
                    class="bg-white d-flex justify-content-center h-100 flex-column box-shadow-medium p-45px md-p-20px border-radius-6px last-paragraph-no-margin">
                    <div class="search-form-box">
                        <form action="{{ route('search') }}" method="get" class="-search-form -d-flex">
                            <div class="input-group ">
                                <input type="text" class="form-control" id="search-input"
                                    placeholder="Search for packages"
                                    aria-label="Search for packages" aria-describedby="button-addon2"
                                    name="s">
                                <button class="btn btn-base-color -btn-box-shadow btn-round-edge" type="submit"
                                    id="button-addon2">
                                    <i class="feather icon-feather-search m-0 me-5px" aria-hidden="true"></i>Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="patient_packages">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            @foreach ($product as $product)
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="patient_packages_card feature-box justify-content-start -border text-start p-20px sm-p-20px border-radius-6px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="-feature-box-icon mb-20px w-100">
                            <img src="{{ asset('uploads/' . $product->image) }}"
                                class="rounded h-240px w-100 object-fit-cover" />
                        </div>
                        <div class="feature-box-content min-h-100px">
                            <h4 class="fw-600 lh-sm mb-10px text-dark-gray fs-18 line-2">{{ $product->name }}</h4>
                            <p class="mb-10px lh-sm fs-18 fw-bold text-base-color">₹ {{ $product->price }}</p>
                        </div>
                        <div class="mt-30px">
                            
                       


                        <a href="{{ URL::to('packages-knowmore/' . $product->id) }}"
                           class="btn btn-very-small btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow"><i class="ti ti-pencil"></i>
                         Know More</a>

                            <button
                                class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow ms-5px"
                                onclick="handleAddToCart({{ $product->id }})">
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

<!-- Modal -->
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
<!-- Login Modal -->
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
                type:"package"
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
{{-- <script>
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
            minLength: 2
        });
    });
</script> --}}

@include('layout.footer')
