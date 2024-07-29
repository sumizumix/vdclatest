<footer class="footer-dark bg-dark-blue pb-0 cover-background background-position-left-top"
    style="background-image: url({{ asset('frontend/images/demo-hosting-footer-bg.jpg') }})">
    <div class="container">
        <div class="row justify-content-center mb-5 md-mb-8 sm-mb-40px">
            <div class="col-6 col-lg-4 last-paragraph-no-margin order-sm-1 md-mb-40px xs-mb-30px">
                <a href="#" class="footer-logo mb-15px d-inline-block"><img
                        src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt /></a>
                <p class="w-90 lg-w-100">Explore top-tier diagnostic labs committed to delivering precise and dependable results</p>
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
                <li><a href="{{ route('user.about') }}">About</a></li>
                  {{-- <li><a href="{{ route('dashboard') }}">About</a></li> --}}
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
            {{-- <span class="fs-13 w-60 lg-w-70 md-w-100 d-block mx-auto lh-22">This site is protected by reCAPTCHA and the
                Google <a href="#" class="text-white text-decoration-line-bottom">privacy policy</a> and
                <a href="#" class="text-white text-decoration-line-bottom">terms of service</a> apply. You must
                not use
                this website if you disagree with any of these website standard terms
                and conditions.</span> --}}
            <p class="fs-13 lh-22">&copy; <span id="year"></span> Powered by <a href="https://www.logiprompt.com/"
                    target="_blank" class="text-white">Logiprompt Techno Solutions India Pvt Ltd</a></p>
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


<!-- Toastr Notification Script -->

@if (session()->has('toastr'))
    {!! session('toastr') !!}
@endif


@include('pages.modal')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
{{-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/vendors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




{{-- dropdown --}}
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
{{-- dropdown --}}

</body>
</html>