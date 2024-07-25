@include('layout.header')
@if (Auth::check())

    {{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
        style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
        <div class="container">
            <div class="row align-items-center small-screen -extra-very-small-screen -extra-small-screen">
                <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                    <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                        <span class="d-inline-block"
                            data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Download
                            Result</span>
                    </h2>
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white text-white-hover">Home</a></li>
                            <li>Download Result</li>
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
                    <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Download Result</h4>
                </div>
                <div class="col">
                    <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                        <ul>
                            <li>Patients</li>
                            <li>Download Result</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="down-section" class="position-relative  overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 ">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="bg-base-color text-white">Sl No.</th>
                                    <th class="bg-base-color text-white">Name</th>
                                    <th class="bg-base-color text-white">Phone</th>
                                    <th class="bg-base-color text-white">Test Date</th>
                                    <th class="bg-base-color text-white">Report Date</th>
                                    <th class="bg-base-color text-white">Report</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($report && $report->count() > 0)
                                    @foreach ($report as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->testdate }}</td>
                                            <td>{{ $item->reportdate }}</td>
                                            <td>
                                                <a href="{{ asset('uploads/' . $item->report) }}" download
                                                    class="text-yellow fs-14 fw-600">
                                                    <i
                                                        class="bi bi-cloud-arrow-down-fill fs-18 me-5px align-middle"></i>Download
                                                </a>
                                                {{-- <a href="{{ asset('uploads/' . $item->report) }}" target="_blank" download
                                                class="btn btn-very-small btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow">
                                                <span>
                                                    <span class="btn-text">Download</span>
                                                    <span class="btn-icon"><i
                                                            class="feather icon-feather-download"></i></span>
                                                    <span class="btn-icon"><i
                                                            class="feather icon-feather-download"></i></span>
                                                </span>
                                            </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center pt-60px pb-60px">
                                            <img src="{{ asset('frontend/vdc_images/no-reports-found.svg') }}"
                                                alt="No reports found image" class="opacity-3">
                                            <p class="pt-20px">No reports found</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <div class="modal-body">
        <div class="container upload-container"
            style="display: flex; align-items: center; justify-content: center; height: 100%;">
            <div class="row w-100">
                <div class="col-md-6 welcome-message text-center" style="padding: 20px; border-right: 1px solid #ddd;">
                    <h4>Welcome to DDRC Agilus</h4>
                    <img src="{{ asset('/assets/images/products/package-9.jpg') }}" alt="DDRC Logo"
                        class="img-fluid my-3" style="max-width: 100%; height: auto;">
                </div>
                <div class="col-md-6 login-form text-center" style="padding: 20px;">
                    <h3>Login</h3>
                    <p>Please enter your mobile number to proceed</p>

                    <a href="#"
                        class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                        data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span>
                            <span class="btn-double-text" data-text="Login">Login</span>
                        </span>
                    </a>
                </div>

@endif
@include('layout.footer')
