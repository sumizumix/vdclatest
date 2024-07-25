@include('layout.header')
{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center small-screen -extra-very-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Departments</span>
                </h2>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white text-white-hover">Home</a></li>
                        <li>Departments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}

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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Departments</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Doctors</li>
                        <li>Departments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center"
            data-anime='{ "el": "childs", "perspective": [1200, 1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0, 1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            @foreach ($department as $row)
                <div class="col-md-6  col-lg-4 icon-with-text-style-02 transition-inner-all mb-30px">
                    <div
                        class="feature-box -feature-box-left-icon-middle text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-10px  overflow-hidden last-paragraph-no-margin align-items-start justify-content-start border-bottom border-4 border-base-color">
                        <div class="feature-box-icon w-100 m-0">
                            <img src="{{ asset('uploads/' . $row->image) }}" class="w-100 h-250px"
                                alt="department Image" style="aspect-ratio:383/287;object-fit: cover;">
                        </div>
                        <div class="feature-box-content p-30px">
                            <span
                                class="d-inline-block text-base-color fw-bold mb-5px fs-18 ls-minus-05px text-capitalize pe-none">
                                {{ $row->name }}
                            </span>
                            <p class="text-light-opacity lh-base pe-none">
                                {{ $row->description }}
                            </p>
                        </div>
                        <div class="feature-box-overlay bg-base-color"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layout.footer')
