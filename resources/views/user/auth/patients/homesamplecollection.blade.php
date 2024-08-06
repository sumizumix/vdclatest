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
       

                <form id="bookSampleForm" class="row g-3" action="{{ route('user.booksample.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="homename" >
                        <div class="text-danger" id="name-home"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="homeemail" >
                        <div class="text-danger" id="email-home"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <!-- <textarea name="address" id="" required></textarea> -->
                        <input type="text" class="form-control" name="address" id="homeaddress" >
                        <div class="text-danger" id="address-home"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="row align-items-center justify-content-center d-flex">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone" id="homephone" >
                                <div class="text-danger" id="Phone-home"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" id="homeage" >
                                <div class="text-danger" id="age-home"></div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <label for="prescription" class="form-label">Select Package</label>
                        <select data-placeholder="Select Packages" multiple class="form-control" id="prescription"
                        name="package[]" >
                        @foreach ($pro as $row)
                        <option value="{{ $row->name }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                   
                    </div>
                    <div class="col-md-6">
                        <label for="test" class="form-label">Select Test</label>
                        <select data-placeholder="Select Tests" multiple class="chosen-select form-control"
                        id="test" name="test[]">
                        @foreach ($test as $row)
                        <option value="{{ $row->name }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                    {{-- <div class="text-danger" id="test-home"></div> --}}
                    </div>
                    <div class="text-danger" id="pack-home"></div>
                    <div class="col">
                        <div class="row justify-content-evenly align-items-center pt-2">
                            <div class="col-6">
                                <button type="button" onclick="validateformhomesample()" class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600 -mt-20px">
                                    <span>
                                        <span class="btn-double-text" data-text="Submit">Submit</span>
                                    </span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('cart.previoushomesamplecollection') }}" class="btn btn-warning btn-rounded float-end -me-3 -mt-3">
                                    Previous Booking
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
    </div>
</section>

<script>
    function validateformhomesample() {
        const phoneInput = document.getElementById('homephone').value;
        const emailInput = document.getElementById('homeemail').value;
    
        var emailPattern = /^(?!\.)[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const nameInput = document.getElementById('homename').value;
        const addInput = document.getElementById('homeaddress').value;
        const dateInput = document.getElementById('homeage').value;
        const preInput = document.getElementById('prescription').value;
        const testInput = document.getElementById('test').value;

        var validation = true;
        if (phoneInput.length < 10 || phoneInput.length > 15) {
            document.getElementById('Phone-home').innerHTML = "Please enter a valid number";
            validation = false;
        }
        if (!emailPattern.test(emailInput)) {
            document.getElementById('email-home').innerHTML = "Please enter a valid email";
            validation = false;
        } 
        if (nameInput.length === 0) {
            document.getElementById('name-home').innerHTML = "Please enter the name";
            validation = false;
        } 
        if (addInput.length === 0) {
            document.getElementById('address-home').innerHTML = "Please enter the address";
            validation = false;
        } 
        if (dateInput.length === 0) {
            document.getElementById('age-home').innerHTML = "Please enter the age";
            validation = false;
        }
        if (preInput.length === 0 && testInput.length === 0) {
            document.getElementById('pack-home').innerHTML = "select the Package or test";
            // document.getElementById('test-home').innerHTML = "select the test";
            validation = false;
        }
        // if (testInput.length === 0) {
        //     document.getElementById('test-home').innerHTML = "select the test";
        //     validation = false;
        // }
        if (validation) {
            document.getElementById('bookSampleForm').submit();

        }
    }
</script>

@include('layout.footer')

