@extends('layouts.admin')
@section('title', 'laraRestaurant - Add Service')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Service</h1>
        <a href="{{ route('index') }}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Live View</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Service Name</label>
                                    <input type="text" class="form-control" name="service_name"
                                        value="{{ old('service_name') }}" placeholder="Customer Support">
                                    <p style="color:red;">
                                        @error('service_name')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Icon Class</label>
                                    <input type="text" class="form-control" name="icon_class"
                                        value="{{ old('icon_class') }}" placeholder="fa fa-user">
                                    <p style="color:red;">
                                        @error('icon_class')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
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
                            <div class="col-sm-12">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_desc" rows="3">{{ old('short_desc') }}</textarea>
                                <p style="color:red;">
                                    @error('short_desc')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary mr-2">Add Service</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
