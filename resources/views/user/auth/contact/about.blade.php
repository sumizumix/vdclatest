@include('layout.header')

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor" style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">About us</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-0 bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <h6 class="mb-20px xs-mb-20px text-base-color fs-18 fw-600 text-shadow-medium text-uppercase">
                    <span class="w-30px h-3px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-8px"></span>why vdc
                </h6>
                <h2 class="fw-700 text-dark-gray ls-minus-1px">{{ $page_about->name }}</h2>
                <p class="text-gray fw-600 mb-30px">
                    {!! strip_tags($page_about->description) !!}
                </p>
                <!-- <a href="{{ route('user.testpage') }}"
                    class="btn btn-large btn-base-color btn-rounded btn-switch-text btn-box-shadow">
                    <span>
                        <span class="btn-double-text" data-text="Book now">Book Test</span>
                        <span><i class="feather icon-feather-arrow-right"></i></span>
                    </span>
                </a> -->
            </div>
            <div class="col-lg-5 col-md-5 offset-lg-1 md-mt-50px animation-float" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                <img class="w-100 rounded" src="{{ asset('frontend/vdc_images/about-img.webp') }}" alt />
            </div>
        </div>
    </div>
</section>

<section class="bg-white pt-4">
    @if(!empty($page_about->mission)||!empty($page_about->vision))
    <div class="container">

        <div class="row justify-content-center appear anime-child anime-complete" data-anime='{ "el": "childs", "perspective": [1200, 1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0, 1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all mb-30px" style="">
                <div class="feature-box feature-box-left-icon-middle d-flex flex-column  text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin -border-start -border-warning -border-4">
                    <div class="feature-box-icon align-self-start mb-20px">
                        <i class="fa-solid fa-eye icon-double-large text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-base-color fw-600 mb-5px fs-24 ps-2 ls-minus-05px border-start border-4 border-warning">
                            Vision
                        </span>
                        <p class="text-light-opacity lh-base pt-2">
                            {!! strip_tags($page_about->vision) !!}
                            To prevent spread of infection, we all should take everyday actions that are proven to prevent the
                            spread of COVID-19. These include: avoiding close contact with people who are sick; avoiding
                            touching your eyes, nose and mouth with unwashed hands; washing your hands often with soap and water
                            for at least 20 seconds or using an alcohol-based hand sanitizer and staying at home.
                        </p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all mb-30px" style="">
                <div class="feature-box feature-box-left-icon-middle d-flex flex-column  text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-icon align-self-start mb-20px">
                        <i class="fa-solid fa-bullseye icon-double-large text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-base-color fw-600 mb-5px fs-24 ls-minus-05px border-start border-4 border-warning ps-2">
                            Mission
                        </span>
                        <p class="text-light-opacity lh-base pt-2 text-start">
                            {!! strip_tags($page_about->mission) !!}
                            To prevent spread of infection, we all should take everyday actions that are proven to prevent the
                            spread of COVID-19. These include: avoiding close contact with people who are sick; avoiding
                            touching your eyes, nose and mouth with unwashed hands; washing your hands often with soap and water
                            for at least 20 seconds or using an alcohol-based hand sanitizer and staying at home.

                        </p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>

        </div>


    </div>
    @endif
</section>

<!----------------------HOSPITALS SCROLL---------------------->

<section class="bg-very-light-gray">
    <div class="container">
        <div class="row align-items-center mb-6 xs-mb-8">
            <div class="col-md-6 text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h6 class="mb-20px xs-mb-20px text-base-color fs-18 fw-600 text-shadow-medium text-uppercase">
                    <span class="w-30px h-3px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-8px"></span> vdc
                </h6>
                <h3 class="text-black fw-700 mb-0 +ls-minus-1px mb-20px">
                    Our Hospitals
                </h3>
            </div>
            <div class="col-md-6 d-flex justify-content-start justify-content-lg-end">
                <div class="slider-one-slide-prev-1 icon-extra-medium text-base-color swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-dark-light">
                    <i class="feather icon-feather-chevron-left"></i>
                </div>
                <div class="slider-one-slide-next-1 icon-extra-medium text-base-color swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-dark-light">
                    <i class="feather icon-feather-chevron-right"></i>
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="-outside-box-right-25 -sm-outside-box-right-0">
                <div class="swiper -magic-cursor" data-slider-options='{
                            "slidesPerView": 1.2,
                            "spaceBetween": 20,
                            "loop": true,
                            "navigation": {
                                "nextEl": ".slider-one-slide-next-1",
                                "prevEl": ".slider-one-slide-prev-1"
                            },
                            "autoplay": {
                                "delay": 4000,
                                "disableOnInteraction": false
                            },
                            "keyboard": {
                                "enabled": true,
                                "onlyInViewport": true
                            },
                            "breakpoints": {
                                "1200": {
                                    "slidesPerView": 3
                                },
                                "992": {
                                    "slidesPerView": 3
                                },
                                "768": {
                                    "slidesPerView": 2.2
                                },
                                "320": {
                                    "slidesPerView": 1.2
                                }
                            },
                            "effect": "slide"
                        }'>
                    <div class="swiper-wrapper pt-20px pb-20px">
                        @foreach ($hospital as $row)
                        <div class="swiper-slide">
                            <div class="box-shadow-extra-large services-box-style-01 hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                <div class="position-relative box-image">
                                    <img src="{{ asset('uploads/' . $row->image) }}" class="img-fluid h-img" alt />
                                </div>
                                <div class="bg-white border-bottom border-warning border-4" style="min-height: 150px;">
                                    <div class="ps-15px min-h-150px pe-10px pt-15px sm-p-35px sm-pb-0">
                                        <a href="{{ route('user.patientspage') }}" class="d-inline-block fs-20 primary-font fw-600 text-dark-gray mb-5px">{{ $row->name }}</a>
                                        <div class="row justify-content-between align-items-center d-flex pb-2">
                                            <div class="col-6">
                                                <ul class="p-0">
                                                    <li class="card-text"><strong><i class="fa-solid fa-location-dot -icon-double-large text-base-color fs-14 mb-15px"></i></strong> {{ $row->address }}</li>
                                                    <li class="card-text"><strong><i class="fa-solid fa-phone -icon-double-large text-base-color fs-14 mb-15px"></i></strong> {{ $row->phone }}</li>
                                                    <li class="card-text"><strong><i class="fa-solid fa-earth-americas -icon-double-large text-base-color fs-14"></i></strong> <a href="{{ $row->website }}" target="_blank">{{ $row->website }}www.vdc.com</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 pt-0">
                                                <a href="{!! $row->maplink !!}" target="_blank">
                                                    <span class="card-text"><strong><i class="fa-solid fa-diamond-turn-right -icon-double-large text-base-color fs-14"></i></strong>{!! $row->mapcode !!}</span>
                                                </a>
                                            </div>
                                            
                                            
                                        </div>
                                        {{-- <div class="w-100 position-relative">
                                            <a href="{!! $row->maplink !!}" target="_blank" class="btn btn-very-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow position-absolute top-100 start-50 translate-middle">
                                                <span>
                                                     <span class="btn-text">Navigate to Map</span>
                                                     <span class="btn-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                                   <span class="btn-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                                </span>
                                          </a>
                                            {!! $row->mapcode !!}
                                         </div> --}}
                                    </div>
                                    {{-- <div class="border-top border-color-extra-medium-gray pt-10px pb-20px ps-30px pe-30px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                        <a href="#" class="btn btn-small btn-base-color btn-box-shadow btn-rounded btn-switch-text mt-4">
                                            <span>
                                                <span class="btn-double-text" data-text="Know more">Know more</span>
                                                <span><i class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                      

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------------------HOSPITALS END---------------------->

<!----------------------BORAD MEMBERS---------------------->

<section class="bg-white">
    <div class="container">
        <div class="row align-items-center mb-6 xs-mb-8">
            <div class="col-md-6 text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h6 class="mb-20px xs-mb-20px text-base-color fs-18 fw-600 text-shadow-medium text-uppercase">
                    <span class="w-30px h-3px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-8px"></span> board members
                </h6>
                <h3 class="text-black fw-700 mb-0 +ls-minus-1px mb-20px">
                    Our Members
                </h3>
            </div>
            <div class="col-md-6 d-flex justify-content-start justify-content-lg-end">
                <div class="slider-one-slide-prev-1 icon-extra-medium text-base-color swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-dark-light">
                    <i class="feather icon-feather-chevron-left"></i>
                </div>
                <div class="slider-one-slide-next-1 icon-extra-medium text-base-color swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-dark-light">
                    <i class="feather icon-feather-chevron-right"></i>
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="-outside-box-right-25 -sm-outside-box-right-0">
                <div class="swiper -magic-cursor" data-slider-options='{
                            "slidesPerView": 1.2,
                            "spaceBetween": 20,
                            "loop": true,
                            "navigation": {
                                "nextEl": ".slider-one-slide-next-1",
                                "prevEl": ".slider-one-slide-prev-1"
                            },
                            "autoplay": {
                                "delay": 4000,
                                "disableOnInteraction": false
                            },
                            "keyboard": {
                                "enabled": true,
                                "onlyInViewport": true
                            },
                            "breakpoints": {
                                "1200": {
                                    "slidesPerView": 3
                                },
                                "992": {
                                    "slidesPerView": 3
                                },
                                "768": {
                                    "slidesPerView": 2.2
                                },
                                "320": {
                                    "slidesPerView": 1.2
                                }
                            },
                            "effect": "slide"
                        }'>
                    <div class="swiper-wrapper pt-20px pb-20px">
                    @foreach ($team as $row)
                        <div class="swiper-slide">
                            <div class="box-shadow-extra-large services-box-style-01 hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                <div class="position-relative box-image">
                                    <img src="{{ asset('uploads/' . $row->image) }}" class="img-fluid h-img" alt />
                                </div>
                                <div class="bg-white border-bottom border-warning border-4" style="min-height: 150px;">
                                    <div class="ps-30px min-h-150px pe-30px pt-35px sm-p-35px sm-pb-0">
                                        <a href="{{ route('user.patientspage') }}" class="d-inline-block fs-20 primary-font fw-600 text-dark-gray mb-5px">{{ $row->name }}</a>
                                        <div class="row">
                                           
                                            <span class="card-text"><strong><i class="fa-solid fa-tag -icon-double-large text-base-color fs-14"></i></strong> {{ $row->designation }}</span>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="border-top border-color-extra-medium-gray pt-10px pb-20px ps-30px pe-30px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                        <a href="#" class="btn btn-small btn-base-color btn-box-shadow btn-rounded btn-switch-text mt-4">
                                            <span>
                                                <span class="btn-double-text" data-text="Know more">Know more</span>
                                                <span><i class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>

                                    </div> -->
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------BORAD MEMBERS END---------------------->

@include('layout.footer')