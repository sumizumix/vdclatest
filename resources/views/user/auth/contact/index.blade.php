@include('layout.header')

<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center -small-screen extra-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h3 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Nearest
                        Lab</span>
                </h3>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li>Nearest lab</li>
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
                    class="bg-white d-flex justify-content-center h-100 rounded box-shadow-medium p-45px md-p-20px last-paragraph-no-margin">
                    <div class="select flex-fill">
                        <select class="form-control border-radius-4px border-color-dark" name="select"
                            id="select-location" aria-label="select-location">
                            <option value="">All Locations</option>
                            @foreach ($center as $row)
                                <option value="{{ $row->address }}">{{ $row->address }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-base-color rounded ms-10px" onclick="updateLocation()">
                        <i class="bi bi-search m-0 me-5px"></i>Search
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="p-0 pb-50px">
    <div class="container">
        <div class="row pt-40px pb-40px justify-content-evenly align-items-center">
            <div class="col-10">
                <div class="d-flex align-items-center justify-content-center">
                    <h5 class="fw-700 text-dark-gray text-center fs-30 m-0">
                        Vijaya Diagnostic Centers in
                    </h5>
                    <div class="d-flex align-items-center justify-content-center bg-base-color rounded-pill text-white px-4 py-1 ms-10px">
                        <i class="bi bi-geo-alt-fill fs-16 "></i>
                        <span id="location-display" class="fs-18 fw-700 ms-5px text-capitalize">Kerala</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5">
            @foreach ($center as $row)
                <div class="col-12 col-md-4 transition-inner-all location-card" data-place="{{ $row->address }}">
                    <div
                        class="feature-box justify-content-between border border-2 border-color-base-color text-start p-0 border-radius-6px -box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-content min-h-200px p-20px">
                            <h4 class="fw-600 lh-sm mb-10px text-dark-gray fs-20 line-2">{{ $row->name }}
                            </h4>
                            <p class="mb-10px lh-sm fs-15 fw-500 text-base-color">
                                <i class="bi bi-clock-history me-10px"></i>{{ $row->time }}
                            </p>
                            <p class="mb-10px lh-sm fs-15 fw-500 text-base-color">
                                <i class="bi bi-geo-alt me-10px"></i>{{ $row->location }}
                            </p>
                            <p class="mb-10px lh-sm fs-15 fw-500 text-base-color">
                                <i class="bi bi-building-add me-10px"></i>{{ $row->address }}
                            </p>
                        </div>

                        <div class="w-100 position-relative">
                            <a href="{!! $row->maplink !!}" target="_blank"
                                class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow position-absolute top-100 start-50 translate-middle">
                                <span>
                                    <span class="btn-text">Navigate to Map</span>
                                    <span class="btn-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                    <span class="btn-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                </span>
                            </a>
                            {!! $row->mapcode !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

<script>
    function updateLocation() {
        const selectedLocation = document.getElementById('select-location').value;
        const locationDisplay = document.getElementById('location-display');
        const locationCards = document.querySelectorAll('.location-card');

        console.log('Selected Location:', selectedLocation); // Debugging

        locationDisplay.textContent = selectedLocation || 'All Locations';

        locationCards.forEach(card => {
            console.log('Card Place:', card.getAttribute('data-place')); // Debugging
            if (selectedLocation === '' || card.getAttribute('data-place') === selectedLocation) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@include('layout.footer')
