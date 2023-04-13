@extends('layouts.admin')
@section('title', 'laraRestaurant - View Menus')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Menus</h1>
        <a href="{{ route('admin.add-menu') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Add Menu</a>
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th style="width: 300px;">Short Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($menus as $item)
                                <tr>
                                    <td>{{ $item->menu_name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>
                                        <img class="img-fluid" width="60px"
                                            src="{{ asset('storage/menu_images') }}/{{ $item->menu_image }}"
                                            alt="menu image">
                                    </td>
                                    <td>{{ $item->short_desc }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit-menu', ['menu_id' => $item->id]) }}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <button type="button" value="{{ $item->id }}"
                                            class="btn btn-danger btn-sm deleteMenuBtn">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.delete-menu') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <input type="hidden" id="menu_id" name="menu_id">
                    <div class="modal-body">Select "Delete" below if you are ready to delete the menu.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on("click", ".deleteMenuBtn", function(e) {
                e.preventDefault();
                var menu_id = $(this).val();
                $('#menu_id').val(menu_id);
                $('#deleteModal2').modal('show');
            });
        });
    </script>
@endsection
