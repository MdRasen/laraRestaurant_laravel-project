@extends('layouts.admin')
@section('title', 'laraRestaurant - View Services')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Services</h1>
        <a href="{{ route('admin.add-service') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Add Service</a>
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
                                    <th>Icon Class</th>
                                    <th>Short Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($services as $item)
                                <tr>
                                    <td>{{ $item->service_name }}</td>
                                    <td>{{ $item->icon_class }}</td>
                                    <td>{{ $item->short_desc }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit-service', ['service_id' => $item->id]) }}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <button type="button" value="{{ $item->id }}"
                                            class="btn btn-danger btn-sm deleteServiceBtn">Delete</button>
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
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.delete-service') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <input type="hidden" id="service_id" name="service_id">
                    <div class="modal-body">Select "Delete" below if you are ready to delete the service.</div>
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
            $(document).on("click", ".deleteServiceBtn", function(e) {
                e.preventDefault();
                var service_id = $(this).val();
                $('#service_id').val(service_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
