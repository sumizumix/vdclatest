@include('layout.header')


<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium" >
                    <span
                        class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0" >Packages</h4>
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



{{-- <section class="p-0 position-relative z-3" style="margin-top: -60px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-10">
<div class="input-group mb-3">
  
    <input type="text" id="search-box" class="form-control" placeholder="Search products...">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>  <div id="search-results" class="list-group mt-3"></div>
  </div>
</div>
</div>
</div>
</section> --}}
{{-- <section class="p-0 position-relative z-3" style="margin-top: -60px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-10">
<div class="input-group mb-3">
  
    <input type="search" class="form-control" id="search_product" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
  </div>
</div>
</div>
</div>
</section> --}}
<section class="">
    <div class="container">
        <div class="row align-items-center justify-content-center gy-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            @foreach ($packages as $row)
                <div class="col-sm-12 col-md-6 col-lg-4 icon-with-text-style-07 transition-inner-all">
                    <div
                        class="bg-white feature-box justify-content-start -border text-start p-20px sm-p-20px border-radius-6px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="-feature-box-icon mb-20px">
                            <img src="{{ asset('uploads/' . $row->image) }}"
                                style="aspect-ratio:383/287;object-fit: cover;" class="rounded" />
                        </div>
                        <div class="feature-box-content min-h-100px">
                            <h4 class="fw-600 lh-sm mb-10px text-dark-gray fs-18 line-2">{{ $row->name }}</h4>
                            <p class="mb-10px lh-sm fs-18">₹ {{ $row->price }}</p>
                        </div>
                        <div class="w-100 d-flex justify-content-between">
                            <a href="#"
                                class="btn btn-link-gradient expand btn-large text-orange d-table d-lg-inline-block xl-mb-15px md-mb-10px"
                                data-bs-toggle="modal" data-bs-target="#productModal" data-name="{{ $row->name }}"
                                data-description="{{ $row->description }}" data-price="₹ {{ $row->price }}">
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

<script>
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
 
  
//   var availableTags = [];
//   $.ajax({
//       method : 'GET',
//       url : '/product-list',
     
    
//        success : function(response) {  
//         console.log('success', response);
//     };
//         });



//   $( "#search_product" ).autocomplete({
//     source: availableTags
//   });

// var availableTags = [];
//     $.ajax({
//         method: 'GET',
//         url: '/product-list',
//         success: function(response) {
//             console.log('success', response);
//             availableTags = response; // Assign the response to availableTags
//         },
//         error: function(xhr, status, error) {
//             console.error('Error:', status, error);
//         }
//     });

//     $(document).ready(function() {
//         $("#search_product").autocomplete({
//             source: availableTags
//         });
//     });





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
