@extends('layouts.admin')
@section('title', 'laraRestaurant - Edit About')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
        <a href="{{ route('index') }}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Live View</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Restaurant Name</label>
                                    <input type="text" class="form-control" name="restaurant_name"
                                        value="{{ $about->restaurant_name }}">
                                    <p style="color:red;">
                                        @error('restaurant_name')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tagline</label>
                                    <input type="text" class="form-control" name="tagline" value="{{ $about->tagline }}">
                                    <p style="color:red;">
                                        @error('tagline')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_desc" rows="2">{{ $about->short_desc }}</textarea>
                                <p style="color:red;">
                                    @error('short_desc')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Hero Image</label>
                                    <input type="file" class="form-control" name="hero_img">
                                    <p style="color:red;">
                                        @error('hero_img')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ad Video Link</label>
                                    <input type="text" class="form-control" name="ad_video_link"
                                        value="{{ $about->ad_video_link }}">
                                    <p style="color:red;">
                                        @error('ad_video_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Years of Experience</label>
                                    <input type="number" class="form-control" name="exp_years"
                                        value="{{ $about->exp_years }}">
                                    <p style="color:red;">
                                        @error('exp_years')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Members</label>
                                    <input type="number" class="form-control" name="team_members"
                                        value="{{ $about->team_members }}">
                                    <p style="color:red;">
                                        @error('team_members')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <input type="file" class="form-control" name="image1">
                                    <p style="color:red;">
                                        @error('image1')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input type="file" class="form-control" name="image2">
                                    <p style="color:red;">
                                        @error('image2')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input type="file" class="form-control" name="image3">
                                    <p style="color:red;">
                                        @error('image3')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <input type="file" class="form-control" name="image4">
                                    <p style="color:red;">
                                        @error('image4')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('admin.view-about') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
