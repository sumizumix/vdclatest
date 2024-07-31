@include('layout.header')

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor" style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>
                    VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Location Tracking</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Location Tracking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <h6 class="text-base-color fs-30">Thanks for your Order..!</h6>
            <div class="col-lg-4">
                <p>
                <ul class="bg-vdc-medium-light-purple text-white p-4 fw-600 border-radius-6px">
                    <li>Booking id: <span></span></li>
                    <li>Date: <span></span></li>
                </ul>
                </p>
            </div>
            <div class="col-lg-4">

                <p>
                <ul class="bg-vdc-medium-light-purple text-white p-4 fw-600 border-radius-6px mt-4">
                    <li>Package: <span></span></li>
                    <li>Test: <span></span></li>
                </ul>
                </p>
            </div>
        </div>
        <!-- <div class="container"> -->
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-10 hh-grayBox pt45 pb20 border-radius-6px w-100">
                <div class="row justify-content-between">

                    <div class="order-tracking completed">
                        <span class="is-complete"></span>
                        <i class="fa-solid fa-calendar-check fs-30 text-base-color"></i>
                        <p>Booking Confirmed<br><span>Mon, June 24</span></p>
                    </div>
                    <div class="order-tracking completed">
                        <span class="is-complete"></span>
                        <i class="fa-solid fa-vial-circle-check fs-30 text-base-color"></i>
                        <p>Sample Collected<br><span>Tue, June 25</span></p>
                    </div>
                    <div class="order-tracking completed">
                        <span class="is-complete"></span>
                        <i class="fa-solid fa-clock fs-30 text-base-color"></i>
                        <p>Processing<br><span>Tue, June 25</span></p>
                    </div>
                    <div class="order-tracking">
                        <span class="is-complete"></span>
                        <i class="fa-solid fa-clipboard-list fs-30 text-base-color"></i>
                        <p>Result Published<br><span>Fri, June 28</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center d-flex text-center pt-4">
            <div class="col-12 col-md-12">
                <a href="#" target="_blank" download class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-success">
                    <span>
                        <span class="btn-text">Download Result</span>
                        <span class="btn-icon"><i class="feather icon-feather-download"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-download"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- </div> -->
    </div>
</section>



@include('layout.footer')