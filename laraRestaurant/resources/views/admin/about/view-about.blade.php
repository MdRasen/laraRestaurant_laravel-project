@extends('layouts.admin')
@section('title', 'laraRestaurant - About')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About</h1>
        <a href="{{ route('index') }}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Live View</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    {{-- Success Alert --}}
                    @if (session('msg1'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('msg1') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Restaurant Name</p>
                            <p class="text-dark mb-0">{{ $about->restaurant_name }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0">Tagline</p>
                            <p class="text-dark mb-0">{{ $about->tagline }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Short Description</p>
                            <p class="text-dark mb-0">{{ $about->short_desc }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0">Hero Image</p>
                            @if ($about->hero_img)
                                <img class="img-fluid" width="80px"
                                    src="{{ asset('storage/about') }}/{{ $about->hero_img }}" alt="hero-img">
                            @else
                                <img class="img-fluid" width="80px" src="{{ asset('public-assets/img/hero.png') }}"
                                    alt="hero-img">
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Years of Experience</p>
                            <p class="text-dark mb-0">{{ $about->exp_years }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0">Team Members</p>
                            <p class="text-dark mb-0">{{ $about->team_members }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Image 1</p>
                            @if ($about->image1)
                                <img class="img-fluid" width="80px"
                                    src="{{ asset('storage/about') }}/{{ $about->image1 }}" alt="image1">
                            @else
                                <img class="img-fluid" width="80px" src="{{ asset('public-assets/img/about-1.jpg') }}"
                                    alt="image1">
                            @endif
                        </div>
                        <div class="col-sm-3">
                            <p class="mb-0">Image 02</p>
                            @if ($about->image2)
                                <img class="img-fluid" width="80px"
                                    src="{{ asset('storage/about') }}/{{ $about->image2 }}" alt="image2">
                            @else
                                <img class="img-fluid" width="80px" src="{{ asset('public-assets/img/about-2.jpg') }}"
                                    alt="image2">
                            @endif
                        </div>
                        <div class="col-sm-3">
                            <p class="mb-0">Image 3</p>
                            @if ($about->image3)
                                <img class="img-fluid" width="80px"
                                    src="{{ asset('storage/about') }}/{{ $about->image3 }}" alt="image3">
                            @else
                                <img class="img-fluid" width="80px" src="{{ asset('public-assets/img/about-3.jpg') }}"
                                    alt="image3">
                            @endif
                        </div>
                        <div class="col-sm-3">
                            <p class="mb-0">Image 04</p>
                            @if ($about->image4)
                                <img class="img-fluid" width="80px"
                                    src="{{ asset('storage/about') }}/{{ $about->image4 }}" alt="image4">
                            @else
                                <img class="img-fluid" width="80px" src="{{ asset('public-assets/img/about-4.jpg') }}"
                                    alt="image4">
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mb-0">Ad Video Link</p>
                            <p class="text-dark mb-0">{{ $about->ad_video_link }}</p>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="justify-content-center">
                            <a href="{{ route('admin.edit-about') }}" class="btn btn-primary mr-1">Edit
                                About</a>
                            <a href="#" class="btn btn-outline-primary">Change
                                Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
