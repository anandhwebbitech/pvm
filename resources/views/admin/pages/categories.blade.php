@extends('admin.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- <style>
/* ===== PREMIUM DATATABLE ===== */
.premium-table {
    background: #f4fbff;
    border-radius: 14px;
    padding: 12px;
    box-shadow: 0 12px 28px rgba(0, 153, 255, 0.15);
}

/* HEADER */
#categoryTable thead {
    background: linear-gradient(135deg, #00c6ff, #00c6ff);
}

#categoryTable thead th {
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    padding: 14px 12px;
    border: none;
}

/* BODY */
#categoryTable tbody td {
    font-size: 12px;
    color: #0f3057;
    padding: 12px;
    vertical-align: middle;
    background: #eaf6ff;
    border-bottom: 1px solid #dff2ff80;
}

/* EVEN ROW */
#categoryTable tbody tr:nth-child(even) td {
    background: #dff2ff;
}

/* HOVER */
#categoryTable tbody tr:hover td {
    background: #cce9ff;
}

/* IMAGE */
#categoryTable img {
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 102, 204, 0.25);
}

/* BADGE */
#categoryTable .badge {
    font-size: 11px;
    padding: 6px 12px;
    border-radius: 20px;
}

/* BUTTON */
#categoryTable .btn {
    font-size: 11px;
    padding: 6px 10px;
    border-radius: 6px;
}

/* DATATABLE CONTROLS */
.dataTables_wrapper label,
.dataTables_info {
    font-size: 12px;
}
</style> -->

<div class="container mt-4">

    <!-- ADD CATEGORY -->
    <button class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
        Add Category
    </button>

    @if (session('success'))
        <div id="successMessage" class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('danger'))
        <div id="dangerMessage" class="alert alert-danger">{{ session('danger') }}</div>
    @endif

    <!-- ADD MODAL -->
    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog">
            <form action="{{ route('admin.categorystore') }}" method="POST" enctype="multipart/form-data" class="modal-content" id="categoryForm">
                @csrf
                <div class="modal-header">
                    <h5>Add Category</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <label>Category Name</label>
                    <input type="text" name="name" class="form-control mb-3" required>

                   
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="editCategoryModal">
        <div class="modal-dialog">
            <form id="editCategoryForm" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5>Edit Category</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="edit_id">

                    <label>Name</label>
                    <input type="text" id="edit_name" name="name" class="form-control mb-3" required>

                    <label>Status</label>
                    <select id="edit_status" name="status" class="form-control mb-3">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>

                   
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
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
                    <th>Name</th>
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
    $(document).ready(function () {

    // SUCCESS MESSAGE AUTO HIDE
    if ($('#successMessage').length) {
        setTimeout(function () {
            $('#successMessage').fadeOut('slow');
        }, 3000); // 3 seconds
    }

    // ERROR MESSAGE AUTO HIDE
    if ($('#dangerMessage').length) {
        setTimeout(function () {
            $('#dangerMessage').fadeOut('slow');
        }, 3000); // 3 seconds
    }

});
$(function () {
    $('#categoryTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.getcategorydata') }}",

        columns: [
            {
                data: null,
                orderable: false,
                render: (data, type, row, meta) =>
                    meta.row + meta.settings._iDisplayStart + 1
            },
           
            { data: 'name' },
            {
                data: 'status',
                render: s =>
                    s == 1
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>'
            },
            { data: 'action', orderable: false, searchable: false }
        ]
    });

});

/* EDIT */
$(document).on('click', '.editBtn', function () {

    let id = $(this).data('id');

    $('#edit_name').val($(this).data('name'));
    $('#edit_status').val($(this).data('status'));
   

    let route = "{{ route('admin.categoryupdate', ':id') }}";
    $('#editCategoryForm').attr('action', route.replace(':id', id));

    $('#editCategoryModal').modal('show');
});
</script>
@endpush
