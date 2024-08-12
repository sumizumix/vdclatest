@include('layout.header')
{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center small-screen -extra-very-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Feedback</span>
                </h2>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li><a href="{{ url('/') }}" class="text-white text-white-hover">Home</a></li>
                        <li>Feedback</li>
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
                    <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Feedback</h4>
                </div>
                <div class="col">
                    <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                        <ul>
                            <li>Patients</li>
                            <li>Feedback</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="bg-white position-relative">
    <div class="container">
        <div class="row" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col md-mb-50px sm-mb-40px" >
                <img src="{{ asset('frontend/vdc_images/feedback-form-img.webp') }}" class="h-100 w-100 object-fit-cover rounded">
            </div>
            <div class="col-lg-6 ps-20px sm-ps-20px" >
                <h4 class="text-dark-gray ls-minus-2px fw-700">Let Us Know Your Valuable Feedback </h4>
                <form action="{{ route('feedback.store') }}" method="post" class="contact-form-style-03">
                    @csrf
                    <label for="exampleInputEmail1"
                        class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Enter your name*</label>
                    <div class="position-relative form-group mb-20px">
                        <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                        <input
                            class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                            id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name" />
                    </div>
                    <label for="exampleInputEmail2" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Email address*</label>
<div class="position-relative form-group mb-20px">
    <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
    <input
        class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
        id="exampleInputEmail2" type="email" name="email"
        placeholder="Enter your email address"
        pattern="^[^\.].*"
        title="Email address should not start with a dot."
        required />
</div>

                    <label for="exampleInputEmail1"
                        class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Your feedback</label>
                    <div class="position-relative form-group form-textarea mb-0">
                        <textarea class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="comment"
                            placeholder="Enter your valuable feedback" rows="3"></textarea>
                        <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                    </div>
                    <div class="row mt-25px align-items-center">
                        <div class="col-xl-7 col-lg-12 col-sm-7 lg-mb-30px md-mb-0">
                            <p class="mb-0 fs-14 lh-22 text-center text-sm-start">We will never collect information
                                about you without your explicit consent.</p>
                        </div>
                        <div
                            class="col-xl-5 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start text-xl-end xs-mt-25px">
                            <input id="exampleInputEmail3" type="hidden" name="redirect" value>
                            <button class="btn btn-dark-gray btn-medium btn-round-edge btn-box-shadow"
                                type="submit">Send message</button>
                        </div>
                        <div class="col-12 mt-20px mb-0 text-center text-md-start">
                            <div class="form-results d-none"></div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@include('layout.footer')
