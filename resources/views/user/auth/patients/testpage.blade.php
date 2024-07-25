@include('layout.header')

<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center -small-screen extra-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Test</span>
                </h2>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Patients</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0 position-relative z-3" style="margin-top: -60px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div
                    class="bg-white d-flex justify-content-center h-100 flex-column box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                    <div class="search-form-box">

                        <form action="{{ route('testsearch') }}" method="get" class="-search-form -d-flex">
                            <div class="input-group">
                                <input type="search" class="form-control" id="search-input" placeholder="Search for a test"
                                    aria-label="Search for a test" aria-describedby="button-addon2" name="s">
                                <button class="btn btn-base-color btn-round-edge -btn-box-shadow" type="submit"
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


<section class="patient_test">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
            @foreach ($test as $product)
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="patient_test_card feature-box justify-content-start -border text-start p-20px sm-p-20px border-radius-6px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="-feature-box-icon mb-20px w-100">
                            <img src="{{ asset('uploads/' . $product->image) }}"
                                class="rounded h-240px w-100 object-fit-cover" />
                        </div>
                        <div class="feature-box-content min-h-100px">
                            <h4 class="fw-600 lh-sm mb-10px text-dark-gray fs-18 line-2">{{ $product->name }}</h4>
                            <p class="mb-10px lh-sm fs-18 fw-bold text-base-color">₹ {{ $product->price }}</p>
                        </div>
                        <!--<div class="mt-30px">-->
                           
                        <!--    <a href="{{ URL::to('test-knowmore/' . $product->id) }}"-->
                        <!--        class="btn btn-very-small btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow"><i class="ti ti-pencil"></i>-->
                        <!--        Know More</a>-->
                        <!--    <button-->
                        <!--        class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow ms-5px"-->
                        <!--        onclick="handleAddToCart({{ $product->id }})">-->
                        <!--        <span>-->
                        <!--            <span class="btn-text">Add to Cart</span>-->
                        <!--            <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>-->
                        <!--            <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>-->
                        <!--        </span>-->
                        <!--    </button>-->
                        <!--</div>-->
                        <div class="mt-30px">
                            <button
                                class="btn btn-very-small btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow"
                                data-bs-toggle="modal" data-bs-target="#productModal" data-name="{{ $product->name }}"
                                data-description="{{ $product->description }}" data-price="₹{{ $product->price }}">
                                <span>
                                    <span class="btn-text">Know More</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </button>
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
        <div class="row justify-content-center mt-5">
            <div class="col">
                {{ $test->links() }}
            </div>
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



//dropdown
    $(function() {
        $("#search-input").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('testsearch') }}",
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
