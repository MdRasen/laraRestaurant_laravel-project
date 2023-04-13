@extends('layouts.admin')
@section('title', 'laraRestaurant - View Teams')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Teams</h1>
        <a href="{{ route('admin.add-team') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-solid fa-share text-white-50"></i> Add Team</a>
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
                                    <th>Designation</th>
                                    <th>Image</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Instagram</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($teams as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->designation }}</td>
                                    <td>
                                        <img class="img-fluid" width="60px"
                                            src="{{ asset('storage/team_images') }}/{{ $item->profile_image }}"
                                            alt="profile image">
                                    </td>
                                    <td>{{ $item->fb_link }}</td>
                                    <td>{{ $item->twitter_link }}</td>
                                    <td>{{ $item->insta_link }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit-team', ['team_id' => $item->id]) }}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <button type="button" value="{{ $item->id }}"
                                            class="btn btn-danger btn-sm deleteTeamBtn">Delete</button>
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
    <div class="modal fade" id="deleteModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.delete-team') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <input type="hidden" id="team_id" name="team_id">
                    <div class="modal-body">Select "Delete" below if you are ready to delete the team.</div>
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
            $(document).on("click", ".deleteTeamBtn", function(e) {
                e.preventDefault();
                var team_id = $(this).val();
                $('#team_id').val(team_id);
                $('#deleteModal4').modal('show');
            });
        });
    </script>
@endsection
