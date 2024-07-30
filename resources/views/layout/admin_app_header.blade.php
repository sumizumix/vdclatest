@php
use Illuminate\Support\Facades\Auth;

@endphp

<!--  Header Start -->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                {{-- <a href="#" target="_blank" class="btn btn-primary">Download Free</a> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35"
                            height="35" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <div>
                            <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                data-bs-target="#bookSampleModal">
                            <i class="ti ti-user fs-6"></i>
                            <p class="mb-0 fs-3">My Profile</p>
                        </a></div>
                        <div>
                        <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#changepassword">
                                    
                                    {{-- <i class="bi bi-lock fs-6"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                                      </svg>
                                    <p class="mb-0 fs-3">Change Password</p>
                                </a></div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="modal fade" id="bookSampleModal" tabindex="-1" aria-labelledby="bookSampleModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    {{-- <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" /> --}}
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35"
                            height="35" class="rounded-circle">
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Edit Profile</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="passwordForm" action="{{ url('admin/about/updateprofile') }}" method="POST" onsubmit="return validatePasswords()">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>  
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" required>
                    </div>
                    <input type="hidden" value="profile" name="type">
             
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Submit">Submit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var bookNowModal = document.getElementById('bookSampleModal');
        bookNowModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var productId = button.getAttribute('data-product-id');
            var productName = button.getAttribute('data-product-name');

            // Update the modal's content with the product info
            var modalTitle = bookNowModal.querySelector('.modal-title');
            var productNameInput = bookNowModal.querySelector('#product_name');
            var productIdInput = bookNowModal.querySelector('#product_id');

            modalTitle.textContent = 'Book ' + productName;
            productNameInput.value = productName;
            productIdInput.value = productId;
        });
    });
</script>

<script>
    function validatePasswords() {
    var password = document.getElementById('exampleInputPassword1').value;
    var confirmPassword = document.getElementById('exampleInputPassword2').value;

    if (password !== confirmPassword) {
        alert('Passwords do not match. Please try again.');
        return false;
    }
    return true;
}
</script>
<!--  Header End -->
<div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="changepassword"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    {{-- <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" /> --}}
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35"
                            height="35" class="rounded-circle">
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Change password</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="passwordForm" action="{{ url('admin/about/updateprofile') }}" method="POST" onsubmit="return validatePasswords()">
                    @csrf
            
                    <div class="mb-12">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-12">
                        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                    </div>
                    <input type="hidden" value="password" name="type">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Submit">Submit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var bookNowModal = document.getElementById('changepassword');
        bookNowModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var productId = button.getAttribute('data-product-id');
            var productName = button.getAttribute('data-product-name');

            // Update the modal's content with the product info
            var modalTitle = bookNowModal.querySelector('.modal-title');
            var productNameInput = bookNowModal.querySelector('#product_name');
            var productIdInput = bookNowModal.querySelector('#product_id');

            modalTitle.textContent = 'Book ' + productName;
            productNameInput.value = productName;
            productIdInput.value = productId;
        });
    });
</script>