@extends('admin.layouts.app')

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Food Cagetory</h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Food Menu</a></li>
            <li class="active">Food Cagetory</li>
        </ol>
    </section>

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Food Cagetory List</h3>
                        <a href="javascript:void(0)" id="createNewFoodCategory" class="btn bg-green btn-sm pull-right"> <i class="fa fa-plus" style="font-size:12px;"></i> Add Category</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="add_food_category" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" >
                                    <h5 class="modal-title" id="modelHeading">Add Category</h5>
                                </div>
                                <form id="categoryForm" name="categoryForm" method="post">
                                    <input type="hidden" name="category_id" id="category_id">
                                    <div class="modal-body">
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Category Name : <small style="color:red">*</small></label>
                                                        <label id="name-error" class="error" for="name"></label>
                                                        <input type="text" class="form-control" id="name" name="name" value=""placeholder="Category Name" autofocus required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="short_name">Category Short Name : <small style="color:red">*</small></label>
                                                        <label id="short_name-error" class="error" for="short_name"></label>
                                                        <input type="text" class="form-control" id="short_name" name="short_name" value=""placeholder="Category Short Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Description : </label>
                                                        <label id="description-error" class="error" for="description"></label>
                                                        <textarea id="description" name="description" class="form-control" rows="5" placeholder="Enter Category Description ..." ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                        <input type="submit" id="saveBtn" class="btn btn-success" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                            <tr>
                                <th style="width:10px;" class="text-center">SL#</th>
                                <th style="width:100px;" class="text-center">Name</th>
                                <th style="width:80px;" class="text-center">Short Name</th>
                                <th style="width:150px;" class="text-center">Description</th>
                                <th style="width:30px;" class="text-center">Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@push('js_lib')
    <!-- bootstrap datepicker -->
    <script src="{{ asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endpush

@push('js_custom')
<script type="text/javascript">
    $(function () {
        $('#add_food_category').on('shown.bs.modal', function () {
            $('#name').focus();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('food-category.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', class: 'text-center'},
                {data: 'name', name: 'name', class: 'text-center text-bold'},
                {data: 'short_name', name: 'short_name', class: 'text-center'},
                {data: 'description', name: 'description', class: 'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center'},
            ],
            createdRow: function( row, data, dataIndex ) {
                // Set the data-status attribute, and add a class
                // $( row ).find('td:eq(2)').addClass('text-center');
                // $( row ).find('td:eq(3)').addClass('text-center');
                // $( row ).find('td:eq(4)').addClass('text-center');
                // $( row ).find('td:eq(5)').addClass('text-center');
            }
        });

        $(document).on('click', '#createNewFoodCategory', function (e) {
            $('#saveBtn').val("Save");
            $('#category_id').val('');
            $('#categoryForm').trigger("reset");
            $('#modelHeading').html("Add New Category");
            $('#add_food_category').modal('show');
        });

        $(document).on('click', '#saveBtn', function (e) {

            $("#categoryForm").validate({
                debug: true,

                submitHandler: function(form) {
                // var files = $('#Note_photo')[0].files[0];
                // console.log(files);

                    $("#saveBtn").html('Sending..');
                    $.ajax({
                        data: $('#categoryForm').serialize(),
                        url: "{{ route('food-category.store') }}",
                        type: "POST",
                        dataType: 'json',
                        success: function (data) {
                            $('#categoryForm').trigger("reset");
                            $('#add_food_category').modal('hide');
                            table.draw();
                            toastr.success(data.success, { timeOut: 10000 });
                        },
                        error: function (data) {
                            // console.log('Error:', data);
                            $.each(data.responseJSON.errors, function(error){
                                toastr.error(data.responseJSON.errors[error], { timeOut: 10000 });
                            });
                            $('#saveBtn').html('Save');
                        }
                    });
                }
            });
        });

        $('body').on('click', '.editCategory', function () {

            var category_id = $(this).data('id');
            $.get("{{ route('food-category.index') }}" +'/' + category_id +'/edit', function (data) {

                // console.log(data);

                $('#modelHeading').html("Edit Category");
                $('#saveBtn').html("Update Category");
                $('#category_id').val(category_id);
                $('#name').val(data.name);
                $('#short_name').val(data.short_name);
                $('#description').val(data.description);

                $('#add_food_category').modal('show');
            })
        });

        $('body').on('click', '.deleteCategory', function () {

            var category_id = $(this).data("id");
            if(confirm("Are You sure want to delete? This will delete all menus of this Category."))
                {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('food-category.store') }}"+'/'+category_id,
                    success: function (data) {
                        if(data.success)
                        {
                            toastr.success(data.success, { timeOut: 10000 });
                        }
                        else
                        {
                            toastr.error(data.error, { timeOut: 10000 });
                        }

                        table.draw();
                    },
                    error: function (data) {
                        //console.log('Error:', data);                        
                        $.each(data.responseJSON.errors, function(error){
                            toastr.error(data.responseJSON.errors[error], { timeOut: 10000 });
                        });
                    }
                });
            }
        });

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            todayBtn: true,
        });
        $('.select2').select2();
    });
</script>
@endpush

