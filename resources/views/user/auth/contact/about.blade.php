@include('layout.header')

<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin cover-background md-py-0 pb-0"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }})">
    <div class="container">
        <div class="row align-items-center -small-screen extra-small-screen -extra-small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h3 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden text-center">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>About</span>
                </h3>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Hospital</li>
                        <li>Members</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="service -page-content">
    <div class="container">
        <div class="row rounded align-items-center">
            <div class="col-lg-6 wow fadeInUp">
                <h2 class="text-dark fw-700">{{ $page_about->name }}</h2>
                <div>
                    <span class="fw-bold text-danger">Departmental Facilities:</span>
                    <p>{!! strip_tags($page_about->description) !!}</p>
                </div>
            </div>
        </div>
    </div>

    @if(!empty($page_about->mission)||!empty($page_about->vision))
    <div class="container">
        <div class="bg-sg-dark mt-5 rounded p-4 p-md-5">
            <div class="row rounded-3 g-4">
                <div class="col-lg-6 wow fadeInUp">
                    <h4 class="text border-start border-4 border-warning ps-3 lh-1">Vision</h4>
                    <p class="text  mt-4 mb-0">{!! strip_tags($page_about->vision) !!}</p>
                </div>
                <div class="col-lg-6 wow fadeInUp">
                    <h4 class="text border-start border-4 border-warning ps-3 lh-1">Mission</h4>
                    <p class="text mt-4 mb-0">{!! strip_tags($page_about->mission) !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div>

<div class="container my-5">
    <h1>Hospital</h1>
    <div class="row">
        @foreach ($hospital as $row)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('uploads/' . $row->image) }}" class="card-img-top" alt="{{ $row->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $row->name }}</h5>
                    <p class="card-text"><strong>Address:</strong> {{ $row->address }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $row->phone }}</p>
                    <p class="card-text"><strong>Website:</strong> <a href="{{ $row->website }}" target="_blank">{{ $row->website }}</a></p>
                    <div class="mt-auto">
                        <a href="{!! $row->maplink !!}" target="_blank" class="btn btn-primary btn-sm">
                            Navigate to Map
                            <i class="bi bi-geo-alt-fill ms-2"></i>
                        </a>
                        {!! $row->mapcode !!}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container my-5">
    <h1>Members</h1>
    <div class="row">
        @foreach ($team as $row)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('uploads/' . $row->image) }}" class="card-img-top" alt="{{ $row->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $row->name }}</h5>
                    <p class="card-text"><strong>Designation:</strong> {{ $row->designation }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('layout.footer')

 