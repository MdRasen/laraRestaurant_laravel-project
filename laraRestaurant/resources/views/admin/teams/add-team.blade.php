@extends('layouts.admin')
@section('title', 'laraRestaurant - Add Team')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Team</h1>
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
                            <a class="btn btn-sm" href="{{ route('admin.view-team') }}">View Teams</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        placeholder="Mohammad Rasen">
                                    <p style="color:red;">
                                        @error('name')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" name="designation"
                                        value="{{ old('designation') }}" placeholder="Chef">
                                    <p style="color:red;">
                                        @error('designation')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" class="form-control" name="profile_image"
                                        value="{{ old('profile_image') }}">
                                    <p style="color:red;">
                                        @error('profile_image')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" class="form-control" name="fb_link" value="{{ old('fb_link') }}"
                                        placeholder="https://www.facebook.com">
                                    <p style="color:red;">
                                        @error('fb_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Twitter Link</label>
                                    <input type="text" class="form-control" name="twitter_link"
                                        value="{{ old('twitter_link') }}" placeholder="https://www.twitter.com">
                                    <p style="color:red;">
                                        @error('twitter_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Instagram Link</label>
                                    <input type="text" class="form-control" name="insta_link"
                                        value="{{ old('insta_link') }}" placeholder="https://www.instagram.com">
                                    <p style="color:red;">
                                        @error('insta_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="Active" selected>Active
                                        </option>
                                        <option value="Hidden">Hidden</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary mr-2">Add Team</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
