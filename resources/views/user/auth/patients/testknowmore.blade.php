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
                        <li>Home</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="service -page-content">
    <div class="container">
        <div class="row rounded align-items-center">
            <div class="col-lg-6 wow fadeInUp">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <img src="{{ asset('uploads/' . $packages->image) }}"
                        class="rounded h-240px w-100 object-fit-cover" />
                        <h2 class="card-title text-dark fw-700">{{ $packages->name }}</h2>
                        <div class="card-text">
                            <p><strong>Description:</strong> {{ $packages->description }}</p>
                            <p><strong>Price:</strong> ${{ $packages->price }}</p>
                        </div>
                        <div class="mt-auto">
                            <button
                                class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow"
                                onclick="handleAddToCart({{ $packages->id }})">
                                <span>
                                    <span class="btn-text">Add to Cart</span>
                                    <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-shopping-cart"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
