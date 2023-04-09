@extends('layouts.admin')
@section('title', 'laraRestaurant - Contact')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact</h1>
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
                        <div class="col-sm-12">
                            <p class="mb-0">Restaurant Address</p>
                            <p class="text-dark mb-0">{{ $contact->address }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Phone</p>
                            <p class="text-dark mb-0">{{ $contact->phone }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0">Phone</p>
                            <p class="text-dark mb-0">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Facebook Link</p>
                            <p class="text-dark mb-0">{{ $contact->fb_link }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0">Twitter Link</p>
                            <p class="text-dark mb-0">{{ $contact->twitter_link }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Youtube Link</p>
                            <p class="text-dark mb-0">{{ $contact->yt_link }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0">Linkedin Link</p>
                            <p class="text-dark mb-0">{{ $contact->linkedin_link }}</p>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="justify-content-center">
                            <a href="{{ route('admin.edit-contact') }}" class="btn btn-primary mr-1">Edit
                                Contact</a>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
