@extends('layouts.admin')
@section('title', 'laraRestaurant - View Reservations')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Reservations</h1>
        <a href="{{ route('admin.add-reservation') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Add Reservation</a>
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th style="width: 80px;">Time</th>
                                    <th style="width: 20px;">Guest</th>
                                    <th>Special Request</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($reservations as $item)
                                <tr>
                                    <th>{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->reservation_time }}</td>
                                    <td>{{ $item->num_guest }}</td>
                                    <td>{{ $item->special_req }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit-reservation', ['reservation_id' => $item->id]) }}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <button type="button" value="{{ $item->id }}"
                                            class="btn btn-danger btn-sm deleteReservationBtn">Delete</button>
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
    <div class="modal fade" id="deleteModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.delete-reservation') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <input type="hidden" id="reservation_id" name="reservation_id">
                    <div class="modal-body">Select "Delete" below if you are ready to delete the reservation.</div>
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
            $(document).on("click", ".deleteReservationBtn", function(e) {
                e.preventDefault();
                var reservation_id = $(this).val();
                $('#reservation_id').val(reservation_id);
                $('#deleteModal3').modal('show');
            });
        });
    </script>
@endsection
