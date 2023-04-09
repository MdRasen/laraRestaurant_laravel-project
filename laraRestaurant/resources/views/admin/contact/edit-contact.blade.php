@extends('layouts.admin')
@section('title', 'laraRestaurant - Edit Contact')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Contact</h1>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Restaurant Address</label>
                                    <textarea class="form-control" name="address" rows="2">{{ $contact->address }}</textarea>
                                    <p style="color:red;">
                                        @error('address')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{ $contact->phone }}">
                                    <p style="color:red;">
                                        @error('phone')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="email" class="form-control" name="email" value="{{ $contact->email }}">
                                    <p style="color:red;">
                                        @error('email')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" class="form-control" name="fb_link"
                                        value="{{ $contact->fb_link }}">
                                    <p style="color:red;">
                                        @error('fb_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Twitter Link</label>
                                    <input type="text" class="form-control" name="twitter_link"
                                        value="{{ $contact->twitter_link }}">
                                    <p style="color:red;">
                                        @error('twitter_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Youtube Link</label>
                                    <input type="text" class="form-control" name="yt_link"
                                        value="{{ $contact->yt_link }}">
                                    <p style="color:red;">
                                        @error('yt_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Linkedin Link</label>
                                    <input type="text" class="form-control" name="linkedin_link"
                                        value="{{ $contact->linkedin_link }}">
                                    <p style="color:red;">
                                        @error('linkedin_link')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('admin.view-contact') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
