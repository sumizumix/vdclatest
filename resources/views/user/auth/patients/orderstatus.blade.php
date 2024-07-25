@include('layout.header')

{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center -small-screen extra-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h3 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Order
                        Status</span>
                </h3>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Patients</li>
                        <li>Order status</li>
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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Order status</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Patients</li>
                        <li>Order status</li>
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="bg-base-color text-white">Sl No.</th>
                            <th class="bg-base-color text-white">Product/ Test name</th>
                            <th class="bg-base-color text-white">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($cart && $cart->count() > 0)
                            @foreach ($cart as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->tname ? $row->tname : $row->pname }}</td>
                                    <td>
                                        @if ($row->status == 'pending')
                                            <i class="bi bi-exclamation-circle-fill text-yellow"></i>
                                            <span class="text-capitalize fw-600 text-yellow">{{ $row->status }}</span>
                                        @elseif ($row->status == 'approved' && $row->paystatus == 0)
                                            <i class="bi bi-check-circle-fill text-success"></i>
                                            <span class="text-capitalize fw-600 text-success">{{ $row->status }}</span>
                                            @elseif ($row->status == 'approved' && $row->paystatus == 1)
                                            <i class="bi bi-check-circle-fill text-success"></i>
                                            <span class="text-capitalize fw-600 text-success">Paid</span>
                                        @else
                                            <i class="bi bi-exclamation-circle-fill text-yellow"></i>
                                            <span class="text-capitalize fw-600 text-yellow">{{ $row->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center pt-60px pb-60px">
                                    <img src="{{ asset('frontend/vdc_images/no-reports-found.svg') }}"
                                        alt="No reports found image" class="opacity-3">
                                    <p class="pt-20px">No orders found</p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
