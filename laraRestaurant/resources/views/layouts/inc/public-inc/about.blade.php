<!-- About Start -->
<div id="about" class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    {{-- Image 01 --}}
                    @if ($about)
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('storage/about/') }}/{{ $about->image1 }}" alt="about-1">
                        </div>
                    @else
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('public-assets/img/about-1.jpg') }}" alt="about-1">
                        </div>
                    @endif
                    {{-- Image 02 --}}
                    @if ($about)
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('storage/about/') }}/{{ $about->image2 }}" style="margin-top: 25%;"
                                alt="about-2">
                        </div>
                    @else
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('public-assets/img/about-2.jpg') }}" style="margin-top: 25%;"
                                alt="about-2">
                        </div>
                    @endif
                    {{-- Image 03 --}}
                    @if ($about)
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('storage/about/') }}/{{ $about->image3 }}" alt="about-3">
                        </div>
                    @else
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('public-assets/img/about-3.jpg') }}" alt="about-3">
                        </div>
                    @endif
                    {{-- Image 04 --}}
                    @if ($about)
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('storage/about/') }}/{{ $about->image4 }}" alt="about-4">
                        </div>
                    @else
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('public-assets/img/about-4.jpg') }}" alt="about-4">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i
                        class="fa fa-utensils text-primary me-2"></i>{{ $about ? $about->restaurant_name : 'laraResta' }}
                </h1>
                <p class="mb-4">
                    {{ $about ? $about->short_desc : 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet' }}
                </p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                {{ $about ? $about->exp_years : '15' }}
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                {{ $about ? $about->team_members : '30' }}
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Team Members</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="#menu">View Menu</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
