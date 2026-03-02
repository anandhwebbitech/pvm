@extends('admin.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="container mt-4">

    <!-- ADD Milestones -->
    <button class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#addMilestoneModal">
        Add Milestones
    </button>

    @if (session('success'))
    <div id="successMessage" class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('danger'))
    <div id="dangerMessage" class="alert alert-danger">{{ session('danger') }}</div>
    @endif

    <!-- ADD MODAL -->
    <div class="modal fade" id="addMilestoneModal">
        <div class="modal-dialog">
            <form action="{{ route('admin.milestonestore') }}"
                method="POST"
                class="modal-content"
                id="milestoneForm">
                @csrf

                <div class="modal-header">
                    <h5>Add Milestones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <label>Year</label>
                    <select name="year" class="form-control mb-3" required>
                        <option value="">Select Year</option>
                        @for ($year = date('Y'); $year >= 2010; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>

                    <label>Milestone Description</label>
                    <textarea name="description"
                        class="form-control mb-3"
                        rows="4"
                        placeholder="Enter milestone description..."
                        required></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="editMilestoneModal">
        <div class="modal-dialog">
            <form id="editMilestoneForm"
                method="POST"
                class="modal-content">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5>Edit Milestone</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <!-- Hidden ID -->
                    <input type="hidden" id="edit_id" name="id">

                    <label>Year</label>
                    <select name="year" id="edit_year" class="form-control mb-3" required>
                        <option value="">Select Year</option>
                        @for ($year = date('Y'); $year >= 2010; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>   

                    <label>Milestone Description</label>
                    <textarea name="description"
                        id="edit_description"
                        class="form-control mb-3"
                        rows="4"
                        required></textarea>

                    <label>Status</label>
                    <select name="status" id="edit_status" class="form-control mb-3">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- TABLE -->
    <div class="table-responsive premium-table">
        <table id="categoryTable" class="table w-100">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {

        // SUCCESS MESSAGE AUTO HIDE
        if ($('#successMessage').length) {
            setTimeout(function() {
                $('#successMessage').fadeOut('slow');
            }, 3000); // 3 seconds
        }

        // ERROR MESSAGE AUTO HIDE
        if ($('#dangerMessage').length) {
            setTimeout(function() {
                $('#dangerMessage').fadeOut('slow');
            }, 3000); // 3 seconds
        }

    });
    $(function() {
        $('#categoryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.getmilestonedata') }}",

            columns: [{
                    data: null,
                    orderable: false,
                    render: (data, type, row, meta) =>
                        meta.row + meta.settings._iDisplayStart + 1
                },

                {
                    data: 'year'
                },
                {
                    data: 'description'
                },
                {
                    data: 'status',
                    render: s =>
                        s == 1 ?
                        '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });

    });

    /* EDIT */
    $(document).on('click', '.editBtn', function() {
        let id = $(this).data('id');
        $('#edit_id').val(id);
        $('#edit_year').val($(this).data('year'));
        $('#edit_description').val($(this).data('description'));
        $('#edit_status').val($(this).data('status'));

        let route = "{{ route('admin.milestoneupdate', ':id') }}";
        $('#editMilestoneForm').attr('action', route.replace(':id', id));

        $('#editMilestoneModal').modal('show');
    });
    /* DELETE CATEGORY – SweetAlert */
$(document).on('click', '.deleteBtn', function () {

    let id = $(this).data('id');
    let url = "{{ route('admin.milestonedelete', ':id') }}".replace(':id', id);
    Swal.fire({
        title: 'Are you sure?',
        text: "This Milestone will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    Swal.fire(
                        'Deleted!',
                        response.message,
                        'success'
                    );

                    $('#categoryTable').DataTable().ajax.reload(null, false);
                },
                error: function () {

                    Swal.fire(
                        'Error!',
                        'Something went wrong. Try again.',
                        'error'
                    );
                }
            });
        }
    });
});
</script>
@endpush