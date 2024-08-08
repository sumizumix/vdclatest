@include('layout.header')

@php $user_id = Auth::id();@endphp
{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center small-screen -extra-very-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Cart</span>
                </h2>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white text-white-hover">Home</a></li>
                        <li>Cart</li>
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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Cart</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="{{ $cart->isEmpty() ? 'bg-vdc-light-purple' : '' }}">
    <div class="container">
        <div class="row gy-3 align-items-center justify-content-center">
            <div class="col-lg-6">
                @php
                    $totalAmount = 0;
                @endphp

                @if ($cart->isEmpty())

                    <div class="text-center">
                        <img src="{{ asset('frontend/vdc_images/empty-cart.svg') }}" alt="No items in cart" class="mb-3 "
                            style="width: 200px" />
                        <h5 class="fs-16 fw-bold text-base-color">Cart is empty!</h5>
                    </div>
                @endif



                @if (!$cart->isEmpty())
                                <div class="bg-white p-20px shadow-sm rounded h-100">
                                    <h6 class="mb-20px text-dark-gray fw-500 fs-24">
                                        <i class="bi bi-cart-plus fs-4 text-dark"></i>
                                        My Cart
                                    </h6>


                                    @php    $count = 1; @endphp
                                    @foreach ($data as $item)
                                        @if ($item->pstatus == 0)
                                            <div class="col-md-12 ps-2">
                                                <div
                                                    class="d-flex flex-wrap align-items-center border rounded px-3 py-2 position-relative mb-3 ">
                                                    <span
                                                        class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-vdc-purple">
                                                        {{ $count }}
                                                    </span>

                                                    <div class="col-12 col-lg-8">
                                                        <h5 class="m-0 fs-18 fw-600 lh-sm">
                                                            {{ $item->pname }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-6 md-mt-15px">
                                                        <p class="fw-bold text-base-color m-0">Price:
                                                            {{ $item->productprice }}/-
                                                        </p>
                                                    </div>
                                                    <div class="col-6 md-mt-15px text-end">
                                                        <form action="{{ route('cartorderdelete.delete', $item->cid) }}" method="post">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-yellow btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                                                                <span>
                                                                    <span class="btn-double-text" data-text="Remove"> Remove
                                                                    </span>
                                                                </span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @php            $count++ @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bg-white p-20px shadow-sm rounded h-100">
                                    @php
                                        $isApprovedProductDisplayed = false;
                                    @endphp
                                    @php    $count = 1; @endphp
                                    @foreach ($data as $item)
                                                @if ($item->cart_status == 'approved' && $item->pstatus == 0)
                                                            @if (!$isApprovedProductDisplayed)
                                                                    <h6 class="mb-20px text-dark-gray fw-500 fs-24">
                                                                        Price Detail
                                                                    </h6>
                                                                    @php
                                                                        $isApprovedProductDisplayed = true;
                                                                    @endphp
                                                            @endif
                                                            <div class="col-md-12 ps-2">
                                                                <div
                                                                    class="d-flex flex-wrap align-items-center border rounded px-3 py-2 position-relative mb-3 ">
                                                                    <span
                                                                        class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-vdc-purple">
                                                                        {{ $count }}
                                                                    </span>
                                                                    <div class="col-12 col-md-8">
                                                                        <h5 class="m-0 fs-18 fw-600 lh-sm">
                                                                            {{ $item->pname }}
                                                                        </h5>
                                                                    </div>
                                                                    <div class="col-12 col-md-4 md-mt-15px text-end">
                                                                        <p class="fw-bold text-base-color m-0">₹
                                                                            {{ $item->productprice }}/-
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $totalAmount += $item->productprice;
                                                                $email = $item->email;
                                                                $userid = $item->user_id;

                                                                $pstatus = $item->paystatus;

                                                            @endphp
                                                            @php            $count++ @endphp
                                                @endif

                                    @endforeach

                                    <div class="row mt-4">
                                        <div class="col-md-12 text-end">
                                            <div class="d-flex justify-content-between align-items-center mb-20px">
                                                <h5 class="fw-bold fs-20 text-base-color m-0">Total: </h5>
                                                <p class="fw-bold fs-20 text-base-color m-0">{{ $totalAmount }}/-</p>
                                            </div>

                                            <div class="text-center">
                                                <!-- <form action="{{ route('razorpay.payment.store') }}" method="POST">
                                                                                                                                                                                                    @csrf
                                                                                                                                                                                                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}"
                                                                                                                                                                                                        data-amount="{{ $totalAmount * 100 }}" data-buttontext="Book Now" data-name="vdc" data-description="VDC payment"
                                                                                                                                                                                                        data-image="/images/logo-icon.png" data-prefill.name="ABC" data-prefill.email="abc@gmail.com"
                                                                                                                                                                                                        data-theme.color="#ff7529"></script>
                                                                                                                                                                                                </form> -->

                                                <button
                                                    class="btn btn-base-color btn-box-shadow btn-switch-text btn-lg text-white rounded" id="buy-now-button"
                                                    onclick="payment({{$totalAmount}},{{$user_id}})">Buy Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
</section>
<style>
    /* Custom style for Razorpay button */
    .razorpay-payment-button {
        background-color: rgb(28, 203, 28) !important;
        color: white !important;
        border: none !important;
        padding: 10px 20px !important;
        font-size: 16px !important;
        cursor: pointer !important;
        border-radius: 5px !important;
    }
</style>
@include('layout.footer')

{{-- @include('layout.header')


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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Cart</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="{{ $data->isEmpty() ? 'bg-vdc-light-purple' : '' }}">
    <div class="container">
        <div class="row gy-4">
            @php
            $totalAmount = 0;
            @endphp

            @if ($data->isEmpty())
            <div class="text-center">
                <img src="{{ asset('frontend/vdc_images/empty-cart.svg') }}" alt="No items in cart" class="mb-3 "
                    style="width: 200px" />
                <h5 class="fs-16 fw-bold text-base-color">Cart is empty!</h5>
            </div>
            @else
            @foreach ($data as $item)
            <div class="col-md-12">
                <div class="d-flex flex-wrap align-items-center shadow-lg rounded px-5 py-4 position-relative">
                    <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-vdc-purple">
                        {{ $loop->iteration }}
                    </span>
                    <div class="col-12 col-lg-8">
                        <h5 class="m-0 fs-18 fw-600">
                            {{ $item->tname ? $item->tname : $item->pname }}
                        </h5>
                    </div>
                    <div class="col-6 md-mt-15px">
                        <p class="fw-bold text-base-color m-0">Price:
                            {{ $item->testprice ? $item->testprice : $item->productprice }}/-
                        </p>
                    </div>
                    <div class="col-6 md-mt-15px text-end">
                        <form action="{{ route('cartorderdelete.delete', $item->cid) }}" method="post">
                            @csrf
                            <button type="submit"
                                class="btn btn-yellow btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                                <span>
                                    <span class="btn-double-text" data-text="Remove"> Remove
                                    </span>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @php
            $totalAmount += $item->testprice ? $item->testprice : $item->productprice;
            @endphp




            @endforeach
            @endif

        </div>

        @if (!$data->isEmpty())
        <div class="row mt-4">
            <div class="col-md-12 text-end">
                <h5 class="fw-500 fs-18">Total Amount: <span class="fw-bold fs-20">{{ $totalAmount }}/-</span></h5>

                <div class="card card-default">

                    <div class="card-body text-center">
                        <form action="{{ route('razorpay.payment.store') }}" method="POST">
                            @csrf
                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{ env('RAZORPAY_KEY') }}" data-amount="{{$totalAmount*100}}"
                                data-buttontext="PAY" data-name="vdc" data-description="VDC payment"
                                data-image="/images/logo-icon.png" data-prefill.name="ABC"
                                data-prefill.email="abc@gmail.com" data-theme.color="#ff7529">
                                </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<style>
    /* Custom style for Razorpay button */
    .razorpay-payment-button {
        background-color: rgb(28, 203, 28) !important;
        color: white !important;
        border: none !important;
        padding: 10px 20px !important;
        font-size: 16px !important;
        cursor: pointer !important;
        border-radius: 5px !important;
    }
</style>
@include('layout.footer') --}}