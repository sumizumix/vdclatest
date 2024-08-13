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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Previous Home Sample Collection</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li> Previous Home Sample Collection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h5 class="fw-600 fs-28 text-orange">Previous Booking</h5>
                <div class="table-responsive">
                    <table class="table -table-hover mb-0 align-middle fs-15 lh-sm" id="dataTable">
                        <thead>
                            <tr>
                                <th class="bg-base-color text-white">#</th>
                                <th class="bg-base-color text-white">Name</th>
                                <th class="bg-base-color text-white">Address</th>
                                <th class="bg-base-color text-white">Age</th>
                                <th class="bg-base-color text-white">Package</th>
                                <th class="bg-base-color text-white">Test</th>
                                <th class="bg-base-color text-white lh-sm">Download Result</th>
                            </tr>
                        </thead>
                        <tbody id="tableContent">

                            @if ($booksamplecollection->isEmpty())
                                <tr>
                                    <td colspan="7" class="text-center pt-60px pb-60px">
                                        <img src="{{ asset('frontend/vdc_images/no-reports-found.svg') }}"
                                            alt="No reports found image" class="opacity-3">
                                        <p class="pt-20px">No orders found</p>
                                    </td>
                                </tr>
                            @else
                                @foreach ($booksamplecollection as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->usname }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>{{ $row->age }}</td>
                                        <td>

                                            @if ($row->package == null)
                                                No package
                                            @else
                                                {{ $row->package }}
                                            @endif

                                        </td>
                                        <td>

                                            @if ($row->test == null)
                                                No test
                                            @else
                                                {{ $row->test }}
                                            @endif

                                        </td>

                                        <td>
                                            @if ($row->image == null)
                                                <a href="{{ route('cart.locationtracking') }}"
                                                    class="btn btn-sm btn-vdc-orange btn-hover-animation-switch btn-rounded btn-box-shadow lh-1">
                                                    Track Location
                                                </a>
                                                {{-- <button class="btn btn-warning btn-sm" disabled>
                                                <i class="fa-solid fa-hourglass"></i>
                                                Pending
                                            </button> --}}
                                            @else
                                                <a href="{{ asset('uploads/' . $row->image) }}" target="_blank"
                                                    download
                                                    class="btn btn-sm btn-dark-gray btn-hover-animation-switch btn-rounded btn-box-shadow btn-success">
                                                    <span>
                                                        <span class="btn-text">Download</span>
                                                        <span class="btn-icon"><i
                                                                class="feather icon-feather-download"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="feather icon-feather-download"></i></span>
                                                    </span>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')
