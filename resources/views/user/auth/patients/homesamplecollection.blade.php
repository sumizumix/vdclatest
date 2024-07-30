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
                <div class="right-fixed-end ">

                    <a href="{{ route('cart.previoushomesamplecollection') }}"
                        class="btn btn-success btn-rounded  float-end me-3 mt-3">
                        Previous Booking
                    </a>

                </div>



                <form id="bookSampleForm" class="row g-3" action="{{ route('user.booksample.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Address</label>
                        <input type="tel" class="form-control" name="address" id="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">phone No</label>
                        <input type="tel" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="prescription" class="form-label">Select Package</label>
                        {{-- <select class="form-control" id="prescription" name=""> --}}
                        <select data-placeholder="Select Packages" multiple class="form-control" id="prescription"
                            name="package[]" required>
                            @foreach ($pro as $row)
                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                            @endforeach
                        </select>




                    </div>

                    <div class="col-md-6">
                        <label for="prescription" class="form-label">Select Package</label>
                        {{-- <select class="form-control" id="prescription" name=""> --}}
                        <select data-placeholder="Select Tests" multiple class="form-control" id="test"
                            name="test[]" required>
                            @foreach ($test as $row)
                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                            @endforeach
                        </select>




                    </div>


                    {{-- <div class="col-md-6">
                        <label for="test" class="form-label">Select Test</label>
                        <select class="form-control" id="test" name="test" required>
                            <option value="null" selected>Select</option>
                            @foreach ($test as $row)
                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="col">
                        <button type="submit"
                            class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Submit">Submit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


{{-- <div class="modal fade" id="bookSampleModal" tabindex="-1" aria-labelledby="bookSampleModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Book Home Sample Collection</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <table class="table mb-0 align-middle" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                           
                            <th scope="col">Address</th>
                         
                            <th scope="col">Package</th>
                            <th scope="col">Test</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableContent">
                        @foreach ($booksamplecollection as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                              
                                <td>{{ $row->address }}</td>
                               
                                <td>{{ $row->package }}</td>
                                <td>{{ $row->test }}</td>
                                <td class="text-nowrap">
                                    @if ($row->status == 'approved')
                                        <button class="btn btn-success btn-sm" disabled>
                                            <i class="fa-solid fa-check-circle"></i> Approved
                                        </button>
                                    @elseif($row->status == 'rejected')
                                        <button class="btn btn-danger btn-sm" disabled>
                                            <i class="fa-solid fa-times-circle"></i> Rejected
                                        </button>
                                    @else

                                    
                                    <a href="{{ URL::to('homesamplecollectionremove/' . $row->bid) }}"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('Are you sure?');"><i
                                            class="ti ti-trash"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}


@include('layout.footer')
