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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Home Sample Collection</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Home Sample Collection</li>
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
                
{{-- <div class="modal fade" id="bookSampleModal" tabindex="-1" 
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Book Home Sample Collection</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}
                <span class="fw-bold text-orange">Book Home Sample Collection</span>
                <table class="table mb-0 align-middle" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                           
                            <th scope="col">Address</th>
                            <th scope="col">Age</th>
                            <th scope="col">Package</th>
                            <th scope="col">Test</th>
                            <th scope="col">Download Result</th>
                     
                        </tr>
                    </thead>
                    <tbody id="tableContent">
                        @foreach ($booksamplecollection as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->usname }}</td>
                              
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->age }}</td>

                                <td>

                                    @if ($row->package == NULL)
                                                    No package
                                                    @else
                                                    {{ $row->package }}
                                                    @endif
                                   
                                </td>
                                <td>

                                    @if ($row->test == NULL)
                                                    No test
                                                    @else
                                                    {{ $row->test }}
                                                    @endif
                                   
                                </td>
                              
                               <td>
                                @if($row->image== Null)

                                
                                <a href="{{ route('cart.locationtracking') }}" class="btn btn-warning btn btn-sm  btn-hover-animation-switch btn-round-edge btn-box-shadow">
                                    Location tracking
                                </a>
                                {{-- <button class="btn btn-warning btn-sm" disabled>
                                    <i class="fa-solid fa-hourglass"></i>
                                     Pending
                                </button> --}}
                                @else
                                <a href="{{ asset('uploads/' . $row->image) }}"
                                    target="_blank" download
                                    class="btn btn-sm btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-success">
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
                    </tbody>
                </table>
            {{-- </div>
        </div>
    </div>
</div> --}}



</div>
</div>
</div>
</section>

@include('layout.footer')


