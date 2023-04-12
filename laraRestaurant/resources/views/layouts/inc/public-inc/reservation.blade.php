<!-- Reservation Start -->
<div id="reservation" class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="{{ $about ? $about->ad_video_link : 'https://www.youtube.com/embed/3ABiIs_I8bg' }}"
                    data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form action="{{ route('index.reservation') }}" method="GET">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Your Name">
                                <label for="name">Your Name</label>
                                <p style="color:red; text-align:end;">
                                    @error('name')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Your Email">
                                <label for="email">Your Email</label>
                                <p style="color:red; text-align:end;">
                                    @error('email')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="datetime-local" class="form-control" name="reservation_time"
                                    value="{{ old('reservation_time') }}" placeholder="Date & Time" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="num_guest"
                                    value="{{ old('num_guest') }}" placeholder="3">
                                <label for="num_guest">No Of People</label>
                                <p style="color:red; text-align:end;">
                                    @error('num_guest')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="special_req" placeholder="Special Request" style="height: 100px">{{ old('short_desc') }}</textarea>
                                <label for="message">Special Request</label>
                                <p style="color:red; text-align:end;">
                                    @error('special_req')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
                {{-- Success Alert --}}
                @if (session('msg1'))
                    <div class="row pt-3">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <div class="alert alert-success" role="alert">
                                <strong>Success!</strong> {{ session('msg1') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Start -->
