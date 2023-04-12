<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                    {{ $about ? $about->tagline : 'Enjoy Our Delicious Meal' }}
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                    {{ $about ? $about->short_desc : 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet' }}
                </p>
                <a href="#reservation" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                    Table</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                @if ($about)
                    <img class="img-fluid" src="{{ asset('storage/about/') }}/{{ $about->hero_img }}" alt="hero-img">
                @else
                    <img class="img-fluid" src="{{ asset('public-assets/img/hero.png') }}" alt="hero-img">
                @endif
            </div>
        </div>
    </div>
</div>
