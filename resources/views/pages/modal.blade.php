<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true"
    style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content overflow-hidden">
            <div class="modal-body p-0 position-relative">
                <div class="-d-flex row m-0">
                    <div class="col-12 col-lg-6 flex-fill p-0 d-none d-lg-block">
                        <img src="{{ asset('frontend/vdc_images/login-modal-img.jpg') }}" class="w-100 h-100"
                            alt="login image">
                    </div>
                    <div class="col-12 col-lg-6 p-40px d-flex flex-column justify-content-evenly">
                        <div class="modal-header p-0 border-0 pb-20px">
                            <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                            <span class="px-2 opacity-5">|</span>
                            <span class="fw-bold text-orange">Login</span>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form class="-p-40px" id="registrationForm" action="{{ route('user.login.check') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="loginInput" class="form-label text-dark-gray">Phone Number</label>
                                <input type="number" class="form-control" id="loginInput" name="phone">
                                <div class="text-danger" id="phone-validation"></div>
                            </div>

                             <button type="submit" onclick="validateForm()"
                                class="btn btn-small btn-dark-gray btn-round-edge btn-hover-animation w-100 d-block mt-20px lg-mb-15px md-mx-auto">
                                <span>
                                    <span class="btn-text">Login</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </button>


                        </form>
                        <div class="d-flex mt-20px justify-content-between">
                            <p class="fs-13 mb-0">Don't have an account?
                                <button type="button" class="btn p-0 fs-13 text-base-color" id="showSignUp">
                                    Sign Up
                                </button>
                            </p>
                            <a href="{{ route('admin.login') }}" class="fs-13 text-yellow">Admin login</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="-d-flex row m-0">
                    <div class="col-12 col-lg-6 flex-fill p-0 d-none d-lg-block">
                        <img src="{{ asset('frontend/vdc_images/login-modal-img.jpg') }}" class="w-100 h-100"
                            alt="login image">
                    </div>
                    <div class="col-12 col-lg-6 p-40px d-flex flex-column justify-content-evenly">
                        <div class="modal-header p-0 border-0 pb-20px">
                            <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                            <span class="px-2 opacity-5">|</span>
                            <span class="fw-bold text-orange">Sign Up</span>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form id="registrationForm" action="{{ route('user.userreg.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="regName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="regName" name="uname" required>
                            </div>
                            <div class="mb-3">
                                <label for="regPhone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="regPhone" name="uphone" required>
                            </div>
                            {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                            {{-- <div class="mb-3">
                                <label for="regEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="regEmail" name="umail" required>
                            </div>
                            <div class="mb-3">
                                <label for="regPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="regPassword" name="upassword"
                                    required>
                            </div> --}}
                            <button type="submit"
                                class="btn btn-small btn-dark-gray btn-round-edge btn-hover-animation w-100 d-block mt-20px lg-mb-15px md-mx-auto">
                                <span>
                                    <span class="btn-text">Sign Up</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </button>
                        </form>

                        <div class="d-flex mt-20px justify-content-between">
                            <p class="fs-13 mb-0">Already have an account?
                                <button type="button" class="btn p-0 fs-13 text-base-color" id="showLogin">
                                    Login
                                </button>
                            </p>
                            <a href="{{ route('admin.login') }}" class="fs-13 text-yellow">Admin login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="knowMoreModal" tabindex="-1" role="dialog" aria-labelledby="knowMoreModal"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8);">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <style>
                            .knowMoreImageOverlay::after {
                                content: '';
                                position: absolute;
                                background: rgb(244, 121, 32);
                                background: linear-gradient(90deg, rgba(244, 121, 32, .6) 0%, rgba(244, 121, 32, .6) 100%);
                                inset: 0;
                                z-index: 10;
                            }
                        </style>
                        <div class="col p-0 knowMoreImageOverlay position-relative z-1 d-none d-lg-block">
                            <img src="" id="knowMoreImage" class="h-400px w-100 object-fit-cover">
                        </div>
                        <div class="col p-0 d-flex flex-column justify-content-between">
                            <div class="modal-header">
                                <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                                <button type="button" class="btn-close " data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="p-20px">
                                <h4 id="knowMoreTitle" class="fs-22 fw-bold text-base-color lh-sm m-0 mb-10px"></h4>
                                <span class="fs-14 fw-bold text-orange">Package Includes:</span>
                                <p id="knowMoreDesc" class="m-0"></p>
                            </div>
                            <div class="bg-base-color p-20px">
                                <p class="fs-24 fw-bold text-white m-0" id="knowMorePrice"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer bg-base-color">
                <p class="fs-24 fw-bold text-white" id="knowMorePrice"></p>
            </div> --}}
        </div>
    </div>
</div>

<div class="modal fade" id="testKnowMoreModal" tabindex="-1" role="dialog" aria-labelledby="testKnowMoreModal"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8);">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <style>
                            .knowMoreImageOverlay::after {
                                content: '';
                                position: absolute;
                                background: rgb(244, 121, 32);
                                background: linear-gradient(90deg, rgba(244, 121, 32, .6) 0%, rgba(244, 121, 32, .6) 100%);
                                inset: 0;
                                z-index: 10;
                            }
                        </style>
                        <div class="col p-0 knowMoreImageOverlay position-relative z-1 d-none d-lg-block">
                            <img src="" id="testKnowMoreImage" class="h-400px w-100 object-fit-cover">
                        </div>
                        <div class="col p-0 d-flex flex-column justify-content-between">
                            <div class="modal-header">
                                <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                                <button type="button" class="btn-close " data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="p-20px">
                                <h4 id="testKnowMoreTitle" class="fs-22 fw-bold text-base-color lh-sm m-0 mb-10px">
                                </h4>
                                <span class="fs-14 fw-bold text-orange">Test Includes:</span>
                                <p id="testKnowMoreDesc" class="m-0"></p>
                            </div>
                            <div class="bg-base-color p-20px">
                                <p class="fs-24 fw-bold text-white m-0" id="testKnowMorePrice"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer bg-base-color">
                <p class="fs-24 fw-bold text-white" id="knowMorePrice"></p>
            </div> --}}
        </div>
    </div>
</div>

<script>
    var knowMoreModal = document.getElementById('knowMoreModal');
    knowMoreModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var name = button.getAttribute('data-name'); // Extract info from data-* attributes
        var description = button.getAttribute('data-description');
        var price = button.getAttribute('data-price');
        var image = button.getAttribute('data-image');

        var knowMoreTitle = knowMoreModal.querySelector('#knowMoreTitle');
        var knowMoreDesc = knowMoreModal.querySelector('#knowMoreDesc');
        var knowMorePrice = knowMoreModal.querySelector('#knowMorePrice');
        var knowMoreImgage = knowMoreModal.querySelector('#knowMoreImgage');

        knowMoreTitle.textContent = name;
        knowMoreDesc.textContent = description;
        knowMorePrice.textContent = price;
        knowMoreImage.src = image;
    });

    var testKnowMoreModal = document.getElementById('testKnowMoreModal');
    testKnowMoreModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var name = button.getAttribute('data-name'); // Extract info from data-* attributes
        var description = button.getAttribute('data-description');
        var price = button.getAttribute('data-price');
        var image = button.getAttribute('data-image');

        var testKnowMoreTitle = testKnowMoreModal.querySelector('#testKnowMoreTitle');
        var testKnowMoreDesc = testKnowMoreModal.querySelector('#testKnowMoreDesc');
        var testKnowMorePrice = testKnowMoreModal.querySelector('#testKnowMorePrice');
        var testKnowMoreImage = testKnowMoreModal.querySelector('#testKnowMoreImage');

        testKnowMoreTitle.textContent = name;
        testKnowMoreDesc.textContent = description;
        testKnowMorePrice.textContent = price;
        testKnowMoreImage.src = image;
    });
</script>

<script>
    $(document).ready(function() {
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Validation Error');
            @endforeach
        @endif
    });
</script>
<script>
function validateForm() {
    const phoneInput = document.getElementById('loginInput').value;

    var validation = true;
    if (phoneInput.length <script 10 || phoneInput.length > 15) {
        document.getElementById('phone-validation').innerHTML = "Please enter a valid number";
        validation = false;
    }
    if (validation) {
        document.getElementById('registrationForm').submit();

    }
}

</script>
{{-- <script>
    document.getElementById('sendOtpBtn').addEventListener('click', function() {
        var phone = document.getElementById('phoneInput').value;
        fetch('/send-otp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ phone: phone })
        }).then(response => response.json()).then(data => {
            if (data.success) {
                document.getElementById('phoneDiv').style.display = 'none';
                document.getElementById('sendOtpBtn').style.display = 'none';
                document.getElementById('otpDiv').style.display = 'block';
                document.getElementById('verifyOtpBtn').style.display = 'block';
            } else {
                alert(data.message);
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    });

    document.getElementById('verifyOtpBtn').addEventListener('click', function() {
        var phone = document.getElementById('phoneInput').value;
        var otp = document.getElementById('otpInput').value;
        fetch('/verify-otp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ phone: phone, otp: otp })
        }).then(response => response.json()).then(data => {
            if (data.success) {
                alert('Login successful');
                window.location.reload();
            } else {
                alert(data.message);
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    });
    </script> --}}
