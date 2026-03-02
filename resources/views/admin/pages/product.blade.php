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
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" class="modal-content" style="background-color: #fff3f4;">
                @csrf

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
                                <input type="file" name="image" class="form-control"  accept="image/*" required>
                            </div>
                            <div class="col-md-4">
                                <label>Gallery  Image</label>
                                <input type="file" name="gallery[]" class="form-control" accept="image/*" multiple accept="image/*">
                            </div>
                            <div class="col-md-4">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <!-- Video Link -->
                       <h6 class="mt-4 text-primary">Video Link</h6>                        
                        <div class="row">
                            <div class="col-md-12">
                               <input type="text" name="video_link" id="video_link"class="mt-4 w-100 form-control" >
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

                        <h6 class="mt-4 text-primary d-flex justify-content-between align-items-center">
                            Technical Specifications
                            <button type="button" class="btn btn-sm btn-success" id="addSpecRow">
                                + Add Spec
                            </button>
                        </h6>

                        <div id="specificationsWrapper">
                            <!-- Dynamic rows will appear here -->
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
                                <div class="mb-2">
                                    <img id="edit_image_preview"
                                        src=""
                                        alt="Product Image"
                                        class="img-thumbnail"
                                        style="max-height: 150px; display: none;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- OLD IMAGE PREVIEW -->
                                <label>Product Image</label>
                                <input type="file" name="image" class="form-control">
                                <small class="text-muted">Leave empty to keep existing image</small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label>Gallery Images</label>
                                <!-- Old Gallery Preview -->
                                <div id="edit_gallery_preview" class="d-flex flex-wrap gap-2 mb-3"></div>

                                <!-- Upload New Gallery -->
                                <hr>
                                <input type="file" name="gallery[]" class="form-control" multiple>
                                <small class="text-muted">Leave empty to keep existing gallery</small>
                            </div>
                            <div class="col-md-4">
                                <label>Status</label>
                                <select name="status" id="edit_status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <h6 class="mt-4 text-primary">Video Link</h6>                        
                        <div class="row">
                            <div class="col-md-6">
                               <input type="text" name="edit_video_link" id="edit_video_link"class="mt-4 w-100 form-control" >
                               <p name="edit_video_link_old" id="edit_video_link_old"></p>
                            </div>
                            <div class="col-md-6">
                               <iframe width="100%" height="315" name="old_video_link" id="old_video_link"
                                    src=""
                                    frameborder="0"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- DESCRIPTION -->
                        <h6 class="mt-4 text-primary">Description</h6>
                        <textarea name="description" id="edit_description" rows="3" class="form-control"></textarea>

                        <!-- TECHNICAL SPECIFICATIONS -->
                        <h6 class="mt-4 text-primary d-flex justify-content-between align-items-center">
                            Technical Specifications
                            <button type="button" class="btn btn-sm btn-success" id="addEditSpec">
                                + Add
                            </button>
                        </h6>

                        <div class="row g-3" id="editSpecsWrapper">
                            <!-- dynamic specs will be injected here -->
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@push('scripts')
<script>
    $('#editProductModal').on('hidden.bs.modal', function () {
        $('#old_video_link').attr('src', '');
    });
    $(function() {

        /* ================= DATATABLE ================= */
        let table = $('#productTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.product.data') }}",
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
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

        /* ================= ADD PRODUCT SPECS ================= */
        let addSpecIndex = 0;

        $('#addSpecRow').on('click', function() {
            addSpecIndex++;
            $('#specificationsWrapper').append(specRow(addSpecIndex));
        });

        /* ================= EDIT PRODUCT ================= */
        $(document).on('click', '.editBtn', function() {

            let id = $(this).data('id');
            $("#edit_video_link").val('');

            $.get("{{ route('admin.product.edit', ':id') }}".replace(':id', id), function(data) {

                $('#edit_id').val(data.id);
                $('#edit_name').val(data.name);
                $('#edit_price').val(data.price);
                $('#edit_category').val(data.category_id);
                $('#edit_status').val(data.status);
                $('#edit_description').val(data.description);
                // $('#edit_video_link_old').text(data.video_url);
                if (data.video_url) {
                    $('#old_video_link').attr('src', data.video_url);
                    $('#old_video_link').show();
                } else {
                    $('#old_video_link').attr('src', '');
                    $('#old_video_link').hide();
                }


                /* ===== IMAGE PREVIEW ===== */
                if (data.image) {
                    $('#edit_image_preview')
                        .attr('src', "{{ asset('public/uploads/products/') }}/" + data.image)
                        .show();
                } else {
                    $('#edit_image_preview').hide();
                }
                /* ===== GALLERY PREVIEW ===== */
                const galleryWrapper = $('#edit_gallery_preview');
                galleryWrapper.empty();

                if (data.gallery) {

                    let gallery = [];

                    try {
                        gallery = Array.isArray(data.gallery)
                            ? data.gallery
                            : JSON.parse(data.gallery);
                    } catch (e) {
                        gallery = [];
                    }

                    if (gallery.length > 0) {
                        gallery.forEach(function(img) {

                            galleryWrapper.append(`
                                <div style="position:relative">
                                    <img src="{{ asset('public/uploads/products') }}/${img}"
                                        class="img-gallery"
                                        style="height:110px;">
                                </div>
                            `);

                        });
                    }
                }

                /* ===== RESET SPECS COMPLETELY ===== */
                const $wrapper = $('#editSpecsWrapper');
                $wrapper.empty();

                /* ===== PARSE SPECS SAFELY ===== */
                let specs = [];

                if (data.specifications && data.specifications !== '') {
                    try {
                        specs = Array.isArray(data.specifications) ?
                            data.specifications :
                            JSON.parse(data.specifications);
                    } catch (e) {
                        console.error('Invalid specifications JSON', e);
                        specs = [];
                    }
                }

                /* ===== APPEND ONLY VALID SPEC ROWS ===== */
                if (specs.length > 0) {
                    specs.forEach((spec, index) => {
                        $wrapper.append(editSpecRow(index, spec));
                    });
                } else {
                    // Optional: show one empty row if no specs
                    $wrapper.append(editSpecRow(0));
                }

                /* ===== SET FORM ACTION ===== */
                $('#editProductForm').attr(
                    'action',
                    "{{ route('admin.product.update', ':id') }}".replace(':id', id)
                );

                /* ===== OPEN MODAL ===== */
                const modalEl = document.getElementById('editProductModal');
                const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                modal.show();
            });
        });

        /* ================= ADD EDIT SPEC ================= */
        $('#addEditSpec').on('click', function() {
            let index = $('#editSpecsWrapper .spec-row').length;
            $('#editSpecsWrapper').append(editSpecRow(index));
        });

        /* ================= REMOVE SPEC ================= */
        $(document).on('click', '.removeSpec', function() {
            $(this).closest('.spec-row').remove();
        });

        /* ================= UPDATE PRODUCT ================= */
        $('#editProductForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function() {
                    $('#editProductModal').modal('hide');
                    table.ajax.reload(null, false);
                },
                error: function(xhr) {
                    alert('Update failed');
                    console.log(xhr.responseText);
                }
            });
        });

        /* ================= DELETE ================= */
        $(document).on('click', '.deleteBtn', function() {

            let id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "This product will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post("{{ route('admin.product.delete', ':id') }}".replace(':id', id), {
                        _method: 'DELETE',
                        _token: "{{ csrf_token() }}"
                    }, function() {
                        Swal.fire('Deleted!', 'Product deleted.', 'success');
                        table.ajax.reload(null, false);
                    });
                }
            });
        });

    });

    /* ================= SPEC ROW TEMPLATES ================= */
    function specRow(index) {
        return `
    <div class="row g-2 align-items-end mb-2 spec-row">
        <div class="col-md-4">
            <input type="text" name="specs[${index}][label]" class="form-control" placeholder="Specification" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="specs[${index}][value]" class="form-control" placeholder="Value" >
        </div>
        <div class="col-md-3">
            <input type="text" name="specs[${index}][unit]" class="form-control" placeholder="Unit">
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger btn-sm removeSpec">×</button>
        </div>
    </div>`;
    }

    function editSpecRow(index, spec = {}) {
        return `
    <div class="row g-2 align-items-end mb-2 spec-row">
        <div class="col-md-4">
            <input type="text" name="specs[${index}][label]" class="form-control" value="${spec.label ?? ''}">
        </div>
        <div class="col-md-4">
            <input type="text" name="specs[${index}][value]" class="form-control" value="${spec.value ?? ''}">
        </div>
        <div class="col-md-3">
            <input type="text" name="specs[${index}][unit]" class="form-control" value="${spec.unit ?? ''}">
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger btn-sm removeSpec">×</button>
        </div>
    </div>`;
    }
</script>

@endpush