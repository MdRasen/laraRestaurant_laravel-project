@extends('layouts.admin')
@section('title', 'laraRestaurant - Add Menu')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Menu</h1>
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
                            <a class="btn btn-sm" href="{{ route('admin.view-menu') }}">View Menus</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="#" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Menu Name</label>
                                    <input type="text" class="form-control" name="menu_name"
                                        value="{{ old('menu_name') }}" placeholder="Chicken Pizza">
                                    <p style="color:red;">
                                        @error('menu_name')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="category">
                                        <option value="Breakfast" selected>Breakfast
                                        </option>
                                        <option value="Lunch">Lunch</option>
                                        <option value="Dinner">Dinner</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_desc" rows="3" placeholder="Short description here">{{ old('short_desc') }}</textarea>
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
                                    <label>Price (Tk)</label>
                                    <input type="number" class="form-control" name="price" value="{{ old('price') }}"
                                        placeholder="260">
                                    <p style="color:red;">
                                        @error('price')
                                            *{{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
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
                                <button type="submit" class="btn btn-primary mr-2">Add Menu</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
