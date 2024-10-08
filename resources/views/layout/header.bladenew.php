<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('sweetalert::alert')
    <title>VDC</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="" />

    <link rel="shortcut icon" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link rel="stylesheet" href="{{ asset('frontend/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/demos/hosting/hosting.css') }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color class="bg-very-light-gray">
    <header class="header-with-topbar">
        <div class="header-top-bar bg-white top-bar-dark cover-background -border-bottom -border-color-extra-medium-gray"
            style="-background-image: url('images/demo-hosting-header-bg.jpg')">
            <div class="container-fluid">
                <div class="row h-42px align-items-center m-0">
                    <div class="col-6 col-md-4 text-center text-md-start">
                        <div class="d-flex flex-wrap fs-13">
                            <span class="opacity-6 me-5px text-black lh-sm">For Home Collection</span>
                            <a href="" class="fw-bold text-black lh-sm">+917034031188</a>

                        </div>
                    </div>
                    <div class="col-6 col-md-8 text-end">
                        <a href="#" class="widget fs-13 me-20px">
                            <i class="feather icon-feather-phone"></i>
                            <span class="text-black opacity-8">Customer care</span>
                            <span class="text-black fw-bold">+917034031188</span>
                        </a>
                        <a href="#" class="widget fs-13 -me-20px">
                            <i class="feather icon-feather-mail"></i>
                            <span class="text-black opacity-8">Customer care</span>
                            <span class="text-black fw-bold">+917034031199</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white -header-transparent -bg-transparent header-reverse border-top border-color-extra-medium-gray"
            data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt class="default-logo" />
                        <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt class="alt-logo" />
                        <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt class="mobile-logo" />
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                            <li class="nav-item dropdown submenu">
                                <a href="#" class="nav-link">Patients</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="d-lg-flex mega-menu m-auto -px-5 -pt-3">
                                        <div class="row row-cols-1 row-cols-md-5 row-cols-lg-5 g-4 w-100 mx-0">
                                            <div class="col">

                                                <a href="{{ route('user.patientspage') }}"
                                                    class="d-flex gap-2 align-items-center -opacity-10">
                                                    <img src="{{ asset('frontend/vdc_images/package.svg') }}" />
                                                    <span class="alt-font fw-500 "> Packages</span>
                                                </a>

                                            </div>
                                            <div class="col">
                                                <a href="{{ route('user.testpage') }}"
                                                    class="d-flex gap-2 align-items-center opacity-10">
                                                    <img src="{{ asset('frontend/vdc_images/microscope.svg') }}" />
                                                    <span class="alt-font fw-500 "> Test</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ Auth::check() ? route('cartorderindex.view') : '#' }}"
                                                    class="d-flex gap-2 align-items-center opacity-10"
                                                    {{ Auth::check() ? '' : 'data-bs-toggle=modal data-bs-target=#loginModal' }}>
                                                    <img src="{{ asset('frontend/vdc_images/order-status.svg') }}" />
                                                    <span class="alt-font fw-500">Order status</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ Auth::check() ? route('user.downloadpage') : '#' }}"
                                                    class="d-flex gap-2 align-items-center opacity-10"
                                                    {{ Auth::check() ? '' : 'data-bs-toggle=modal data-bs-target=#loginModal' }}>
                                                    <img src="{{ asset('frontend/vdc_images/download.svg') }}" />
                                                    <span class="alt-font fw-500">Download result</span>
                                                </a>

                                            </div>
                                            <div class="col">
                                                <a href="{{ route('user.feedback') }}"
                                                    class="d-flex gap-2 align-items-center opacity-10">
                                                    {{-- <i class="fa fa-heartbeat fa-2x me-3" aria-hidden="true"></i> --}}
                                                    <img src="{{ asset('frontend/vdc_images/feedback.svg') }}" />
                                                    <span class="alt-font fw-500 "> Feedback</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a href="#" class="nav-link">Doctors</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 w-100 mx-0">
                                            <div class="col">
                                                <a href="{{ route('user.department') }}"
                                                    class="d-flex gap-2 align-items-center -opacity-10">
                                                    {{-- <i class="bi bi-house-heart-fill fa-2x me-3"></i> --}}
                                                    <img src="{{ asset('frontend/vdc_images/department.svg') }}" />
                                                    <span class="alt-font fw-500"> Department</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('user.test') }}"
                                                    class="d-flex gap-2 align-items-center opacity-10">
                                                    {{-- <i class="bi bi-thermometer-high fa-2x me-3"></i> --}}
                                                    <img src="{{ asset('frontend/vdc_images/test.svg') }}" />
                                                    <span class="alt-font fw-500"> Tests</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('user.packages') }}"
                                                    class="d-flex gap-2 align-items-center opacity-10">
                                                    {{-- <i class="fa fa-address-card fa-2x me-3" aria-hidden="true"> </i> --}}
                                                    <img src="{{ asset('frontend/vdc_images/package.svg') }}" />
                                                    <span class="alt-font fw-500"> Packages</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('user.contactss') }}"
                                                    class="d-flex gap-2 align-items-center opacity-10">
                                                    {{-- <i class="fa fa-file-text fa-2x me-3" aria-hidden="true"></i> --}}
                                                    <img src="{{ asset('frontend/vdc_images/contact.svg') }}" />
                                                    <span class="alt-font fw-500"> Contact us</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="{{ route('user.contact') }}" class="nav-link">Nearest
                                    Lab</a></li>
                            <li class="nav-item"> <a href="#" class="nav-link" data-bs-toggle="modal"
                                    data-bs-target="#callbackModal">Request Call Back</a></li>
                            <li class="nav-item"><a href="{{ route('covdi19') }}" class="nav-link">Covid-19 Test</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto -col-lg-2 text-end lg-pe-5px">
                    <div class="header-icon">
                        {{-- <div class="header-search-icon icon d-none d-sm-flex">

                            <div class="search-form-wrapper">
                                <button title="Close" type="button" class="search-close">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-left"
                                    action="">
                                    <div class="search-form-box">
                                        <h2 class="text-dark-gray fw-700 ls-minus-2px text-center mb-4 alt-font">What
                                            are you looking for?</h2>
                                        <input class="search-input" id="search-form-input5e219ef164995"
                                            placeholder="Enter your keywords..." name="s" value type="text"
                                            autocomplete="off" />
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        @php
                            use Illuminate\Support\Facades\Auth;
                            use Illuminate\Support\Facades\DB;

                            if (Auth::check()) {
                                $cartCount = DB::table('cart')->where('user_id', Auth::id())->where('paystatus', 0)->count();
                            } else {
                                $cartCount = 0;
                            }
                        @endphp

                        <div>
                            {{-- <a href="{{ route('cart.view') }}" class="text-decoration-none text-dark">
                                <i class="bi bi-cart-plus fs-4"></i>
                                <span class="badge bg-danger">{{ $cartCount }}</span>
                            </a> --}}
                            <a href="{{ route('cart.view') }}" class="position-relative p-10px me-15px">
                                <i class="bi bi-cart-plus fs-4 text-dark"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $cartCount }}
                                </span>
                            </a>
                        </div>
                        <div class="header-button ms-30px xxl-ms-10px xs-ms-0">
                            @if (Auth::check())
                                <a href="{{ route('logout') }}"
                                    class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span>
                                        <span class="btn-double-text" data-text="Logout"> Hi {{ Auth::user()->name }}
                                        </span>

                                    </span>

                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            @else
                                <a href="#"
                                    class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                    data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <span>
                                        <span class="btn-double-text" data-text="Login">Login</span>
                                    </span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel"
        aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                {{-- <div class="modal-header">
                        <h5 class="modal-title" id="callbackModalLabel">Request Call Back</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div> --}}
                <div class="modal-body">
                    <div class="modal-header p-0 border-0 pb-20px">
                        <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                        <span class="px-2 opacity-5">|</span>
                        <span class="fw-bold text-orange" id="callbackModalLabel">Request Call Back</span>
                        <button type="button" class="btn-close " data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('callback.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        <button type="submit"
                            class="btn btn-small btn-dark-gray btn-round-edge btn-hover-animation w-100 d-block mt-20px lg-mb-15px md-mx-auto">
                            <span>
                                <span class="btn-text">Request Call Back</span>
                                <span class="btn-icon"><i class="bi bi-telephone-inbound"></i></span>
                            </span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Download Result</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if (Auth::check())
                    <div class="modal-body">
                        <h3 style="color: red; font-weight: bold; text-align: center;">RESULT</h3>
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>sl.no</th>
                                <th>name</th>
                                <th>test date</th>
                            </tr>
                        </table>
                    </div>
                @else
                    <div class="modal-body">
                        <div class="container upload-container"
                            style="display: flex; align-items: center; justify-content: center; height: 100%;">
                            <div class="row w-100">
                                <div class="col-md-6 welcome-message text-center"
                                    style="padding: 20px; border-right: 1px solid #ddd;">
                                    <h4>Welcome to vdc  Agilus</h4>
                                    <img src="{{ asset('/assets/images/products/package-9.jpg') }}" alt="vdc Logo"
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
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            const registrationModal = new bootstrap.Modal(document.getElementById('registrationModal'));

            document.getElementById('showSignUp').addEventListener('click', function() {
                loginModal.hide();
                registrationModal.show();
            });

            document.getElementById('showLogin').addEventListener('click', function() {
                registrationModal.hide();
                loginModal.show();
            });
        });
    </script>
