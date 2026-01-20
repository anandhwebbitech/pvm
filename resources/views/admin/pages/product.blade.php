@extends('admin.layouts.app')

@section('content')
<!-- <style>
    .premium-table {
        background: #f4fbff;
        border-radius: 14px;
        padding: 12px;
        box-shadow: 0 12px 28px rgba(0, 153, 255, 0.15);
    }

    #productTable thead {
        background: linear-gradient(135deg, #00c6ff, #00c6ff);
    }

    #productTable thead th {
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 14px 12px;
        border: none;
    }

    #productTable tbody td {
        font-size: 12px;
        padding: 12px;
        background: #eaf6ff;
        vertical-align: middle;
    }

    #productTable tbody tr:nth-child(even) td {
        background: #dff2ff;
    }
</style> -->

<div class="container mt-4">

    <!-- ADD PRODUCT BUTTON -->
    <button class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#addProductModal">
        Add Product
    </button>

    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif

    <!-- ================= ADD PRODUCT MODAL ================= -->
    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- BODY -->
                <div class="modal-body">
                    <div class="container-fluid">

                        <!-- BASIC DETAILS -->
                        <h6 class="mb-3 text-primary">Basic Details</h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label>Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                        </div>

                        <!-- IMAGE & STATUS -->
                        <div class="row g-3 mt-2">
                            <div class="col-md-4">
                                <label>Product Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <!-- DESCRIPTION -->
                        <h6 class="mt-4 text-primary">Description</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="description" rows="3" class="form-control"
                                    placeholder="Product description..."></textarea>
                            </div>
                        </div>

                        <!-- TECHNICAL SPECIFICATIONS -->
                        <h6 class="mt-4 text-primary">Technical Specifications</h6>

                        <div class="row g-3">

                            <div class="col-md-4">
                                <label>Work Table Size</label>
                                <div class="input-group">
                                    <input type="text" name="specs[work_table_size]" class="form-control" placeholder="1200 × 800">
                                    <span class="input-group-text">mm</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>X-Axis Travel</label>
                                <div class="input-group">
                                    <input type="number" name="specs[x_axis]" class="form-control" placeholder="1100">
                                    <span class="input-group-text">mm</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Y-Axis Travel</label>
                                <div class="input-group">
                                    <input type="number" name="specs[y_axis]" class="form-control" placeholder="750">
                                    <span class="input-group-text">mm</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Z-Axis Travel</label>
                                <div class="input-group">
                                    <input type="number" name="specs[z_axis]" class="form-control" placeholder="650">
                                    <span class="input-group-text">mm</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Spindle Speed</label>
                                <div class="input-group">
                                    <input type="number" name="specs[spindle_speed]" class="form-control" placeholder="24000">
                                    <span class="input-group-text">RPM</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Spindle Power</label>
                                <div class="input-group">
                                    <input type="number" step="0.1" name="specs[spindle_power]" class="form-control" placeholder="18.5">
                                    <span class="input-group-text">kW</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Tool Capacity</label>
                                <div class="input-group">
                                    <input type="number" name="specs[tool_capacity]" class="form-control" placeholder="40">
                                    <span class="input-group-text">Tools</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Positioning Accuracy</label>
                                <div class="input-group">
                                    <input type="text" name="specs[positioning_accuracy]" class="form-control" placeholder="0.003">
                                    <span class="input-group-text">mm</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Repeatability</label>
                                <div class="input-group">
                                    <input type="text" name="specs[repeatability]" class="form-control" placeholder="0.002">
                                    <span class="input-group-text">mm</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Max Load Capacity</label>
                                <div class="input-group">
                                    <input type="number" name="specs[max_load_capacity]" class="form-control" placeholder="800">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Rapid Traverse</label>
                                <div class="input-group">
                                    <input type="number" name="specs[rapid_traverse]" class="form-control" placeholder="48">
                                    <span class="input-group-text">m/min</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Machine Weight</label>
                                <div class="input-group">
                                    <input type="number" name="specs[machine_weight]" class="form-control" placeholder="9500">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger px-4">Save Product</button>
                </div>

            </form>
        </div>
    </div>

    <!-- ================= EDIT PRODUCT MODAL ================= -->
    <div class="modal fade" id="editProductModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <form id="editProductForm" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf
                @method('PUT')

                <input type="hidden" id="edit_id" name="id">

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- BODY -->
                <div class="modal-body">
                    <div class="container-fluid">

                        <!-- BASIC DETAILS -->
                        <h6 class="mb-3 text-primary">Basic Details</h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label>Product Name</label>
                                <input type="text" name="name" id="edit_name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label>Category</label>
                                <select name="category_id" id="edit_category" class="form-control" required>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Price</label>
                                <input type="number" name="price" id="edit_price" class="form-control">
                            </div>
                        </div>

                        <!-- IMAGE & STATUS -->
                        <div class="row g-3 mt-2">
                            <div class="col-md-4">
                                <label>Product Image</label>
                                <input type="file" name="image" class="form-control">
                                <small class="text-muted">Leave empty to keep existing image</small>
                            </div>

                            <div class="col-md-4">
                                <label>Status</label>
                                <select name="status" id="edit_status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <!-- DESCRIPTION -->
                        <h6 class="mt-4 text-primary">Description</h6>
                        <textarea name="description" id="edit_description" rows="3" class="form-control"></textarea>

                        <!-- TECHNICAL SPECIFICATIONS -->
                        <h6 class="mt-4 text-primary">Technical Specifications</h6>

                        <div class="row g-3">

                            @php
                            $specs = [
                            'work_table_size','x_axis','y_axis','z_axis','spindle_speed',
                            'spindle_power','tool_capacity','positioning_accuracy','repeatability',
                            'max_load_capacity','rapid_traverse','machine_weight'
                            ];
                            @endphp

                            @foreach($specs as $spec)
                            <div class="col-md-4">
                                <label>{{ ucwords(str_replace('_',' ', $spec)) }}</label>
                                <input type="text" name="specs[{{ $spec }}]" id="edit_{{ $spec }}" class="form-control">
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger px-4">Update Product</button>
                </div>

            </form>
        </div>
    </div>

    <!-- ================= PRODUCT TABLE ================= -->
    <div class="table-responsive premium-table">
        <table id="productTable" class="table w-100">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
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
    $(function() {

        let table = $('#productTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.product.data') }}",
            columns: [{
                    data: 'id'
                },
                {
                    data: 'image',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name'
                },
                {
                    data: 'category.name'
                },
                {
                    data: 'price'
                },
                {
                    data: 'status',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });

        /* EDIT BUTTON CLICK */
        $(document).on('click', '.editBtn', function() {

            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.product.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(data) {

                    $('#edit_id').val(data.id);
                    $('#edit_name').val(data.name);
                    $('#edit_price').val(data.price);
                    $('#edit_category').val(data.category_id);
                    $('#edit_status').val(data.status);
                    $('#edit_description').val(data.description);

                    // Technical specs
                    $('#edit_work_table_size').val(data.work_table_size);
                    $('#edit_x_axis').val(data.x_axis);
                    $('#edit_y_axis').val(data.y_axis);
                    $('#edit_z_axis').val(data.z_axis);
                    $('#edit_spindle_speed').val(data.spindle_speed);
                    $('#edit_spindle_power').val(data.spindle_power);
                    $('#edit_tool_capacity').val(data.tool_capacity);
                    $('#edit_positioning_accuracy').val(data.positioning_accuracy);
                    $('#edit_repeatability').val(data.repeatability);
                    $('#edit_max_load_capacity').val(data.max_load_capacity);
                    $('#edit_rapid_traverse').val(data.rapid_traverse);
                    $('#edit_machine_weight').val(data.machine_weight);

                    $('#editProductModal').modal('show');
                }
            });
        });

        /* UPDATE PRODUCT */
        $('#editProductForm').submit(function(e) {
            e.preventDefault();

            let id = $('#edit_id').val();
            let formData = new FormData(this);

            // IMPORTANT for PUT request
            formData.append('_method', 'PUT');

            $.ajax({
                url: "{{ route('admin.product.update', ':id') }}".replace(':id', id),
                type: "POST", // Laravel will treat as PUT
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    $('#editProductModal').modal('hide');
                    $('#productTable').DataTable().ajax.reload(null, false);
                },
                error: function(xhr) {
                    alert('Update failed');
                    console.log(xhr.responseText);
                }
            });
        });

        /* AUTO HIDE SUCCESS */
        setTimeout(() => {
            $('#successMessage').fadeOut('slow');
        }, 2000);

    });
    $(document).on('click', '.deleteBtn', function () {

    let id = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: "This product will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({
                url: "{{ route('admin.product.delete', ':id') }}".replace(':id', id),
                type: "POST",
                data: {
                    _method: "DELETE",
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {

                    Swal.fire(
                        'Deleted!',
                        'Product has been deleted successfully.',
                        'success'
                    );

                    $('#productTable').DataTable().ajax.reload(null, false);
                },
                error: function () {
                    Swal.fire(
                        'Error!',
                        'Something went wrong.',
                        'error'
                    );
                }
            });

        }
    });
});

</script>
@endpush