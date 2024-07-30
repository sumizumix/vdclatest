@include('layout.header')
{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
<div class="container">
    <div class="row align-items-center small-screen -extra-very-small-screen -extra-small-screen">
        <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
            <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Covid-19
                    Test</span>
            </h2>
            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                <ul>
                    <li><a href="{{ url('/') }}" class="text-white text-white-hover">Home</a></li>
                    <li>Covid-19 Test</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section> --}}

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor" style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Covid-19 Test</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Home</li>
                        <li>Covid-19 Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-0 bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {{-- <span class="text-base-color fw-600 mb-15px text-uppercase d-block">Simple and intuitive</span> --}}
                <h2 class="fw-700 text-dark-gray ls-minus-1px">Covid-19 Test</h2>
                <p class="text-gray fw-600 mb-30px">
                    The collection of samples can happen only if prescribed by a qualified physician. We
                    offer a safe & hygienic collection method through qualified phlebotomists.
                </p>
                <a href="{{ route('user.testpage') }}" class="btn btn-large btn-base-color btn-rounded btn-switch-text btn-box-shadow">
                    <span>
                        <span class="btn-double-text" data-text="Book now">Book Test</span>
                        <span><i class="feather icon-feather-arrow-right"></i></span>
                    </span>
                </a>
            </div>
            <div class="col-lg-5 col-md-5 offset-lg-1 md-mt-50px animation-float" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                <img class="w-100 rounded" src="{{ asset('frontend/vdc_images/covid-19-test.webp') }}" alt />
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="bg-dark-gray rounded min-h-200px p-20px">
                    <h5 class="m-0 text-center text-white fw-600 pt-20px">
                        Documents to be presented for Covid-19 Test
                    </h5>
                </div>
            </div>
            <div class="col-10" style="margin-top: -60px">
                <div class="row justify-content-center bg-base-color rounded p-30px g-4">
                    <div class="col-12 col-md-4 text-white m-0 p-10px">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-virus-covid fa-3x text-orange"></i>
                            <p class="ms-10px lh-sm mb-0 fs-14 fw-bold">Prescription for COVID-19 Test</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-white m-0 p-10px">
                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-address-card fa-3x text-orange"></i>
                            <p class="ms-10px lh-sm mb-0 fs-14 fw-bold">Government Photo ID</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-white m-0 p-10px">
                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-file-lines fa-3x text-orange"></i>
                            <p class="ms-10px lh-sm mb-0 fs-14 fw-bold">Duly filled Specimen Referral Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <p class="m-0 lh-sm text-dark-gray mt-20px">
                        Prescription for COVID-19 test from a qualified physician Requirement may vary depending upon
                        mandate by the respective state government guideline.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-vdc-light-purple -mt-60px">
    <div class="container">
        <div class="row align-items-center" data-anime='{ "translateY": [0, 0], "opacity" : [0,1], "duration"
            : 600, "delay" : 0, "staggervalue" : 300, "easing" : "easeOutQuad" }'>
            <div class="col-12">
                <div class="border-radius-6px overflow-hidden position-relative">
                    <span class="text-uppercase text-base-color fs-14 lh-40 fw-700 border-radius-100px bg-gradient-light-gray-transparent d-inline-flex">
                        <i class="bi bi-patch-check fs-16 me-5px"></i>FAQs
                    </span>
                    <h3 class="fw-bold text-dark-gray ls-minus-1px">Coronavirus (COVID-19) FAQs</h3>
                    <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <i class="feather icon-feather-minus fs-20"></i>
                                        <span class="fs-17 fw-bold">What are the symptoms of COVID-19 ?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body text-base-color fw-600 last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                    <p class="w-90 sm-w-95 xs-w-100">
                                        The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some
                                        patients may have aches and pains, nasal congestion, runny nose, sore throat or
                                        diarrhea. These symptoms are usually mild and begin gradually. Some people
                                        become infected but don’t develop any symptoms and don’t feel unwell. Most
                                        people (about 80%) recover from the disease without needing special treatment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <i class="feather icon-feather-plus fs-20"></i>
                                        <span class="fs-17 fw-bold">What are the documents needed for (COVID-19)
                                            Testing?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body text-base-color fw-600 last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                    <p class="w-90 sm-w-95 xs-w-100">
                                        Mandatory documents defined by Govt. of India without which testing of COVID 19
                                        is not allowed: 1) Patient Information Form (Patient Proforma, to be provided by
                                        Agilus Lab personnel and filled by the patient) 2) Referring doctor’s
                                        prescription (requirement may vary depending upon mandate by the respective
                                        state government guidelines) and 3) Govt. photo-id ( Aadhaar card/ Voter Id /
                                        Passport) to support the current address and contact number of the suspect
                                        patient to be provided at the time of sample collection.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <i class="feather icon-feather-plus fs-20"></i>
                                        <span class="fs-17 fw-bold">Who should get tested?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body text-base-color fw-600 last-paragraph-no-margin border-bottom border-color-transparent">
                                    <p class="w-90 sm-w-95 xs-w-100">
                                        As per guidelines, if you develop the acute onset of fever and symptoms of
                                        respiratory illness, such as cough or shortness of breath you should visit your
                                        nearest health facility and the doctor will decide if you need to be tested for
                                        COVID-19, depending upon your history of travel to affected countries or contact
                                        with any suspects.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <i class="feather icon-feather-plus fs-20"></i>
                                        <span class="fs-17 fw-bold">What are Coronaviruses?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-04" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body text-base-color fw-600 last-paragraph-no-margin border-bottom border-color-transparent">
                                    <p class="w-90 sm-w-95 xs-w-100">
                                        Coronaviruses are a large family of viruses which may cause illness in animals
                                        or humans. In humans, several coronaviruses are known to cause respiratory
                                        infections ranging from the common cold to more severe diseases such as Middle
                                        East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS).
                                        The most recently discovered coronavirus called as 2019 Novel Coronavirus
                                        (2019-nCoV) causes coronavirus disease COVID-19.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 text-center appear anime-child anime-complete" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-base-color fw-600 mb-5px text-uppercase d-block" style="">
                    Specialties
                </span>
                <h5 class="text-dark-gray fw-700 ls-minus-1px" style="">Our Specialties in COVID-19 Testing</h5>
            </div>
        </div>
        <div class="row justify-content-center appear anime-child anime-complete" data-anime='{ "el": "childs", "perspective": [1200, 1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0, 1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all mb-30px" style="">
                <div class="feature-box feature-box-left-icon-middle d-flex flex-column  text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-icon align-self-start mb-20px">
                        <i class="fa-solid fa-virus-covid icon-double-large text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">
                            Identify infected patients
                        </span>
                        <p class="text-light-opacity lh-base">
                            At our labs, we also initiated temperature screening to help identify possibly infected
                            patients. If a patient's travel, health and contact history indicates possible COVID-19
                            infection, we are counselling the patient to follow the guidelines issued by the WHO on
                            2019-nCOV and inform the designated government authorities.
                        </p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all mb-30px" style="">
                <div class="feature-box feature-box-left-icon-middle d-flex flex-column  text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-icon align-self-start mb-20px">
                        <i class="fa-solid fa-virus-covid icon-double-large text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">
                            Protective equipment
                        </span>
                        <p class="text-light-opacity lh-base">
                            Our staff always ensures to wear personal protective equipment such as masks and gloves so
                            that they are protected from getting infected while handling patients and thus, do not pass
                            on the infection to others.
                        </p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all md-mb-30px" style="">
                <div class="feature-box feature-box-left-icon-middle d-flex flex-column  text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-icon align-self-start mb-20px">
                        <i class="fa-solid fa-virus-covid icon-double-large text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">
                            Well-trained staff
                        </span>
                        <p class="text-light-opacity lh-base">
                            Our staff is well trained to handle the situation and time-to-time advisories have been
                            issued on the dos and don'ts, such as how to prevent the spread of coronavirus, etc.
                        </p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all" style="">
                <div class="feature-box feature-box-left-icon-middle d-flex flex-column  text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-icon align-self-start mb-20px">
                        <i class="fa-solid fa-virus-covid icon-double-large text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">
                            Sanitization facility
                        </span>
                        <p class="text-light-opacity lh-base">
                            Our labs continue to adhere to strict sanitization protocols and our staff members follow
                            all universal safety protocols. We have also ensured that the sanitization facility is
                            available at our labs for the patients as well.
                        </p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-12">
                <p>
                    To prevent spread of infection, we all should take everyday actions that are proven to prevent the
                    spread of COVID-19. These include: avoiding close contact with people who are sick; avoiding
                    touching your eyes, nose and mouth with unwashed hands; washing your hands often with soap and water
                    for at least 20 seconds or using an alcohol-based hand sanitizer and staying at home.
                </p>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')