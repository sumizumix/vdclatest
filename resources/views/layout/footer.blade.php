<footer class="footer-dark bg-dark-blue pb-0 cover-background background-position-left-top"
    style="background-image: url({{ asset('frontend/images/demo-hosting-footer-bg.jpg') }})">
    <div class="container">
        <div class="row justify-content-center mb-5 md-mb-8 sm-mb-40px">
            <div class="col-6 col-lg-4 last-paragraph-no-margin order-sm-1 md-mb-40px xs-mb-30px">
                <a href="#" class="footer-logo mb-15px d-inline-block"><img
                        src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt /></a>
                <p class="w-90 lg-w-100"> Your Health, Our Priority at Vijaya Diagnostic Center, Trusted by You.</p>
                <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                    <ul class="small-icon light">
                        <li class="my-0">
                            <a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="my-0">
                            <a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i
                                    class="fa-brands fa-dribbble"></i></a>
                        </li>
                        <li class="my-0">
                            <a class="twitter" href="https://www.twitter.com/" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="my-0">
                            <a class="instagram" href="https://www.instagram.com/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-17 fw-500 d-block text-white mb-5px">Quick Links</span>
                <ul>
                    <!--<li><a href="{{ route('user.about') }}">About</a></li>-->
                    <li><a href="{{ route('user.about') }}">About</a></li>
                    <li><a href="{{ route('user.contactss') }}">Contact Us</a></li>


                    <li><a href="{{ route('covdi19') }}">Covid-19</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                <span class="fs-17 fw-500 d-block text-white mb-5px">Customer</span>
                <ul>
                    <li><a href="{{ route('user.patientspage') }}">Packages</a></li>
                    <li><a href="{{ route('user.testpage') }}">Test</a></li>

                    <!--<li><a href="#">Feedback</a></li>-->
                </ul>
            </div>

            <div class="col-6 col-lg-4 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-17 fw-500 d-block text-white mb-5px">Say hello</span>
                <span class="d-inline-flex w-100">Need support?</span>
                <a href="mailto:info@vijayadiagnosticcentre.com"
                    class="text-white lh-22 -text-decoration-line-bottom d-inline-block mb-20px">
                    <span>info@vijayadiagnosticcentre.com</span></a>
                <span class="d-inline-flex w-100">Customer care</span>
                <a href="tel:12345678910" class="text-white lh-22 d-inline-flex">+917034031188</a>
            </div>
        </div>
        <div class="border-top border-color-transparent-white-light pt-35px pb-35px text-center">
            {{-- <span class="fs-13 w-60 lg-w-70 md-w-100 d-block mx-auto lh-22">This site is protected by reCAPTCHA and
                the
                Google <a href="#" class="text-white text-decoration-line-bottom">privacy policy</a> and
                <a href="#" class="text-white text-decoration-line-bottom">terms of service</a> apply. You must
                not use
                this website if you disagree with any of these website standard terms
                and conditions.</span> --}}
            <div class="row justify-content-center">

                <div class="col-auto">
                    <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#Terms"> <span> Terms and Conditions</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#Privacy"> <span>Privacy Policy</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#Refund"><span>Refund Policy</span></a>
                </div>
                <div class="col-auto">
                    <a href="#" class="process-step-item d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#Cancel">
                        <span>Cancel and Return Policy</span></a>
                </div>
            </div>


            <div class="row justify-content-center pt-2">
                <div class="col-auto">

                    <p class="fs-13 lh-22">&copy; <span id="year"></span> Powered by <a
                            href="https://www.logiprompt.com/" target="_blank" class="text-white">Logiprompt Techno
                            Solutions India Pvt Ltd</a></p>
                </div>
            </div>



            <script>
                document.getElementById('year').textContent = new Date().getFullYear();
            </script>
        </div>
    </div>
</footer>

<div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
    <div class="elements-social social-icon-style-10">
        <ul class="fs-14">
            <li class="me-30px">
                <a class="facebook" href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-facebook-f me-10px"></i>
                    <span class="alt-font">Facebook</span>
                </a>
            </li>
            <li class="me-30px">
                <a class="dribbble" href="http://www.dribbble.com/" target="_blank">
                    <i class="fa-brands fa-dribbble me-10px"></i>
                    <span class="alt-font">Dribbble</span>
                </a>
            </li>
            <li class="me-30px">
                <a class="twitter" href="https://www.twitter.com/" target="_blank">
                    <i class="fa-brands fa-twitter me-10px"></i>
                    <span class="alt-font">Twitter</span>
                </a>
            </li>
            <li>
                <a class="instagram" href="https://www.instagram.com/" target="_blank">
                    <i class="fa-brands fa-instagram me-10px"></i>
                    <span class="alt-font">Instagram</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>




<div class="modal fade" id="Terms" tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Terms and Conditions</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- <h5>Terms and Conditions</h5> --}}

                <h6 class="fs-22 fw-600"> 1. Introduction</h6>
                <p>
                    These Terms and Conditions govern the use of services provided by Vijaya Diagnostic Centers. By
                    accessing or using our services, you agree to be bound by these terms.
                </p>
                <h6 class="fs-22 fw-600"> 2. Services Provided</h6>
                <p>
                    Vijaya Diagnostic Centers offers diagnostic and medical testing services. The services provided are
                    subject to availability and may vary based on the location and specific needs of each patient.
                </p>



                <h6 class="fs-22 fw-600">
                    3. Appointments and Scheduling</h6>
                <p>
                    Booking: Appointments can be made through our website, over the phone, or in person.
                    Cancellation/Rescheduling: We request that cancellations or rescheduling of appointments be done at
                    least 24 hours in advance. Failure to do so may result in a cancellation fee.
                </p>
                <h6 class="fs-22 fw-600"> 4. Payments</h6>
                <p>
                    Fees: The fees for our services are outlined at the time of booking and must be paid at the time the
                    services are rendered.
                    Payment Methods: We accept various forms of payment, including credit/debit cards, online banking,
                    and cash.
                    Refunds: Refunds for services are generally not provided, except in cases of service errors or other
                    extenuating circumstances.
                </p>
                <h6 class="fs-22 fw-600"> 5. Confidentiality and Privacy</h6>
                <p> Vijaya Diagnostic Centers is committed to protecting your personal information. All patient
                    information is handled in accordance with our Privacy Policy, which complies with relevant data
                    protection laws.
                </p>
                <h6 class="fs-22 fw-600"> 6. Limitation of Liability</h6>
                <p> While we strive to provide accurate and timely diagnostic services, Vijaya Diagnostic Centers is not
                    liable for any indirect, incidental, or consequential damages arising from the use of our services.
                    This includes, but is not limited to, errors in diagnostic results, delays, or unavailability of
                    services.
                </p>
                <h6 class="fs-22 fw-600"> 7. Changes to Terms</h6>
                <p> Vijaya Diagnostic Centers reserves the right to modify these Terms and Conditions at any time. Any
                    changes will be effective immediately upon posting on our website. It is your responsibility to
                    review these terms regularly.
                </p>
                <h6 class="fs-22 fw-600">
                    8. Governing Law</h6>
                <p> These Terms and Conditions are governed by the laws of [Your Jurisdiction]. Any disputes arising out
                    of or relating to these terms shall be subject to the exclusive jurisdiction of the courts in [Your
                    Jurisdiction].
                </p>
                <h6 class="fs-22 fw-600"> 9. Contact Information</h6>
                <p> For any questions or concerns regarding these Terms and Conditions, please contact us at:

                    Vijaya Diagnostic Centers<br>
                    Near Vijaya Jubilee Hospital, Pulamon, Kottarakkara<br>
                    +91 7034031188 / +917034031199<br>
                    info@vijayadiagnosticcentre.com</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Privacy" tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Privacy Policy</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <h6>Privacy Policy</h6> --}}
                <p>
                    At Vijaya Diagnostic Centers, we value your privacy and are committed to protecting your personal
                    information. We collect and use your data only to provide you with our diagnostic services. Your
                    information will not be shared with third parties without your consent, except as required by law.
                    We take appropriate measures to ensure the security of your data. By using our services, you agree
                    to the collection and use of your information in accordance with this policy.</p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Refund" tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Refund Policy</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <h6>Refund Policy</h6> --}}
                <p>

                    All payments made to Vijaya Diagnostic Centers are non-refundable. Please ensure the accuracy of
                    your transactions before proceeding with payment</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Cancel"tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel"
    aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-40px">
                <div class="modal-header p-0 border-0 pb-20px">
                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" class="h-20px" />
                    <span class="px-2 opacity-5">|</span>
                    <span class="fw-bold text-orange">Cancel and Return Policy</span>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <h6>Cancel and Return Policy</h6> --}}
                <p>

                    Cancellations and returns are not accepted once services have been rendered at Vijaya Diagnostic
                    Centers. Please review your appointments and purchases carefully before confirming.

                </p>
            </div>
        </div>
    </div>
</div>
<!-- Toastr Notification Script -->
@if (session()->has('toastr'))
    {!! session('toastr') !!}
@endif
@include('pages.modal')
{{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css"> --}}
{{-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/vendors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}

<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />

<script>
    // console.log($('.chosencontainer'))
    $(document).on('ready', function() {

        $("#prescription").chosen({
            no_results_text: "Oops, nothing found!"
        })
        $("#test").chosen({
            no_results_text: "Oops, nothing found!"
        })
    })
</script>

{{-- dropdown --}}
{{-- <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script> --}}
<script>
    function payment(amount, user_id) {

        $("#buy-now-button").prop("disabled", true);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", 'public/payment/initiateJuspayPayment.php', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                var response = JSON.parse(xhr.responseText);
                if (xhr.status == 200) {
                    if (response.status === 'NEW') {
                        var url = response.paymentLinks.web;
                        return window.location.href = url;
                    }
                }
                alert(`http status code: ${xhr.status} message: ${response.message}`);
            }
        };
        // const body = JSON.stringify({
        //     amount: amount
        // });

        xhr.send('amount=' + amount + '&user_id=' + user_id);
    }
</script>
<script>
    function validateForm() {
        const phoneInput = document.getElementById('loginInput').value;

        var validation = true;
        if (phoneInput.length < script 10 || phoneInput.length > 15) {
            document.getElementById('phone-validation').innerHTML = "Please enter a valid number";
            validation = false;
        }
        if (validation) {
            document.getElementById('registrationForm').submit();

        }
    }
</script>


{{-- dropdown --}}

</body>

</html>
