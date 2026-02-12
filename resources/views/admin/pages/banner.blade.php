@extends('admin.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="container mt-4">

    <!-- ADD CATEGORY -->
    <button class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
        Add Banner
    </button>

    @if (session('success'))
    <div id="successMessage" class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('danger'))
    <div id="dangerMessage" class="alert alert-danger">{{ session('danger') }}</div>
    @endif

    <!-- ADD MODAL -->
    <!-- ADD BANNER MODAL -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form id="bannerForm" method="POST" enctype="multipart/form-data" class="modal-content shadow border-0">
                @csrf

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="fa fa-image me-2"></i> Add New Banner
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Banner Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter banner title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Banner Image</label>
                        <input type="file" name="image" id="add_image" class="form-control">

                        <div class="mt-3 text-center">
                            <img id="add_preview" src="" class="img-fluid rounded shadow-sm d-none" style="max-height:150px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fa fa-save me-1"></i> Save Banner
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- EDIT BANNER MODAL -->
    <!-- EDIT BANNER MODAL -->
    <div class="modal fade" id="editBannerModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form id="editBannerForm" method="POST" enctype="multipart/form-data" class="modal-content shadow border-0">
                @csrf
                @method('PUT')

                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title">
                        <i class="fa fa-edit me-2"></i> Edit Banner
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4">

                    <input type="hidden" id="edit_id" name="id">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Banner Title</label>
                        <input type="text" id="edit_title" name="title" class="form-control form-control-lg" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Current Image</label>
                        <div class="text-center">
                            <img id="edit_image_preview"
                                class="img-fluid rounded shadow-sm mb-3"
                                style="max-height:150px;">
                        </div>

                        <label class="form-label fw-semibold">Change Image</label>
                        <input type="file" name="image" id="edit_image" class="form-control">

                        <div class="text-center mt-3">
                            <img id="edit_new_preview"
                                class="img-fluid rounded shadow-sm d-none"
                                style="max-height:150px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <select id="edit_status" name="status" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning px-4">
                        <i class="fa fa-sync me-1"></i> Update Banner
                    </button>
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
                    <th>Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            ajax: "{{ route('admin.getbannerdata') }}",

            columns: [{
                    data: null,
                    orderable: false,
                    render: (data, type, row, meta) =>
                        meta.row + meta.settings._iDisplayStart + 1
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });

    /* EDIT */
    $(document).on('click', '.editBtn', function() {

        let id = $(this).data('id');
        let title = $(this).data('title');
        let image = $(this).data('image');
        let status = $(this).data('status');

        $('#edit_id').val(id);
        $('#edit_title').val(title);
        $('#edit_status').val(status);
        $('#edit_image_preview').attr('src', image);

        let url = "{{ route('admin.bannerupdate', ':id') }}";
        $('#editBannerForm').attr('action', url.replace(':id', id));

        $('#editBannerModal').modal('show');
    });
    /* DELETE CATEGORY – SweetAlert */
    /* DELETE BANNER */
    $(document).on('click', '.deleteBtn', function() {

        let id = $(this).data('id');
        let url = "{{ route('admin.bannerdelete', ':id') }}";
        url = url.replace(':id', id);

        Swal.fire({
            title: 'Are you sure?',
            text: "This banner will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: url,
                    type: "DELETE",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        if (response.status) {

                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            );

                            $('#categoryTable').DataTable().ajax.reload(null, false);
                        }
                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'Something went wrong!',
                            'error'
                        );
                    }
                });

            }
        });

    });


    $('#bannerForm').submit(function(e) {

        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.bannerstore') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                if (response.status) {

                    Swal.fire(
                        'Success!',
                        response.message,
                        'success'
                    );

                    $('#bannerForm')[0].reset();
                    $('#addCategoryModal').modal('hide');

                    // Reload DataTable if exists
                    if ($.fn.DataTable.isDataTable('#categoryTable')) {
                        $('#categoryTable').DataTable().ajax.reload(null, false);
                    }
                }
            },
            error: function(xhr) {

                let errors = xhr.responseJSON.errors;
                let errorMessage = '';

                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '<br>';
                });

                Swal.fire(
                    'Error!',
                    errorMessage,
                    'error'
                );
            }
        });

    });
    $('#editBannerForm').submit(function(e) {

        e.preventDefault();

        let formData = new FormData(this);
        let actionUrl = $(this).attr('action');

        $.ajax({
            url: actionUrl,
            type: "POST", // use POST because we send _method=PUT
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                if (response.status) {

                    Swal.fire(
                        'Success!',
                        response.message,
                        'success'
                    );

                    $('#editBannerModal').modal('hide');

                    $('#categoryTable').DataTable().ajax.reload(null, false);
                }
            },
            error: function(xhr) {

                let errors = xhr.responseJSON.errors;
                let errorMessage = '';

                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '<br>';
                });

                Swal.fire('Error!', errorMessage, 'error');
            }
        });

    });
</script>
@endpush