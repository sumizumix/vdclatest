@include('layout.header')

{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-contact-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center small-screen -extra-very-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Contact
                        us</span>
                </h2>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white text-white-hover">Home</a></li>
                        <li>Contact us</li>
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
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Contact us</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Doctors</li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-700 ls-minus-2px w-90 md-w-100">Get in touch!</h3>
                <p class="w-95 md-w-100">Give us a call or drop by anytime, we try to answer all enquiries within 24
                    hours on business days.</p>
                <div class="row row-cols-1 justify-content-center mt-30px">
                    <div class="col icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded bg-yellow w-80px h-80px rounded-circle me-20px">
                                <i class="bi bi-envelope text-white icon-very-medium"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block ls-minus-05px">Mail us</span>
                                <span class="d-block fs-22 text-dark-gray ls-minus-05px fw-600">
                                    <a href="mailto:info@vijayadiagnosticcentre.com"
                                        class="text-dark-gray text-decoration-line-bottom">
                                        <span class="">info@vijayadiagnosticcentre.com</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 md-mt-25px">
                <div class="row justify-content-center">
                    <div class="contact-form">
                        <div class="bg-white box-shadow-extra-large border-radius-6px p-25px">
                            <h5 class="text-dark-gray fw-700 ls-minus-1px">Contact Us</h5>
                            <form action="{{ route('contact.store') }}" method="post" class="contact-form-style-03">
                                @csrf
                                <div class="form-group" style="margin-bottom: 15px;">
                                    <input type="text" id="name" name="name" placeholder="Name" required
                                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                                </div>
                                <div class="form-group" style="margin-bottom: 15px;">
                                    <input type="email" id="email" name="email" placeholder="Email" required
                                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                                </div>
                                <div class="form-group" style="margin-bottom: 15px;">
                                    <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                        required
                                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                                </div>
                                <div class="form-group" style="margin-bottom: 15px;">
                                    <textarea id="message" name="message" rows="3" placeholder="Message"
                                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn-base-color btn-large btn-rounded d-table d-lg-inline-block lg-mb-15px md-mx-auto">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@include('layout.footer')
