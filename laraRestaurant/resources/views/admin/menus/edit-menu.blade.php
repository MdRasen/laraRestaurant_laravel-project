@extends('layouts.admin')
@section('title', 'laraRestaurant - Edit Menu')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Menu</h1>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Menu Name</label>
                                    <input type="text" class="form-control" name="menu_name"
                                        value="{{ $menu->menu_name }}">
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
                                        <option value="Breakfast" {{ $menu->category == 'Breakfast' ? 'selected' : '' }}>
                                            Breakfast
                                        </option>
                                        <option value="Lunch" {{ $menu->category == 'Lunch' ? 'selected' : '' }}>Lunch
                                        </option>
                                        <option value="Dinner" {{ $menu->category == 'Dinner' ? 'selected' : '' }}>Dinner
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_desc" rows="3" placeholder="Short description here">{{ $menu->short_desc }}</textarea>
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
                                    <input type="number" class="form-control" name="price" value="{{ $menu->price }}"
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
                                        <option value="Active" {{ $menu->status == 'Active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="Hidden" {{ $menu->status == 'Hidden' ? 'selected' : '' }}>Hidden
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary mr-2">Update Menu</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
