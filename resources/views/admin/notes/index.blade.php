@extends('admin.layouts.app')

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Notes </h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Notes</a></li>
            <li class="active">Note List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Incoming Note Information</h3>
                        
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                            <tr>
                                <th style="width:10px;" class="text-center">SL#</th>
                                <th style="width:100px;" class="text-center">Title</th>
                                <th style="width:80px;" class="text-center">Description</th>
                                <th style="width:90px;" class="text-center">From</th>
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

    <!-- Modal -->
    <div class="modal fade" id="view_Note_info" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="Note_info_popup_header bg-green" colspan="2">Note Information</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><strong>Title</strong></td>
                                        <td id="name"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Description</strong></td>
                                        <td id="description"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sent To:</strong></td>
                                        <td id="sent_to"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection

@push('js_lib')
    <!-- Select2 -->
    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endpush

@push('js_custom')
<script type="text/javascript">
    $(function () {
        $('#add_note').on('shown.bs.modal', function () {
            $('#note_title').focus();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('notes.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', class: 'text-center'},
                {data: 'title', name: 'title', class: 'text-center text-bold'},
                {data: 'DT_description', name: 'DT_description', class: 'text-left'},
                {data: 'DT_from', name: 'DT_from', class: 'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center'},
            ],
            createdRow: function( row, data, dataIndex ) {
                // Set the data-status attribute, and add a class
                // $( row ).find('td:eq(2)').addClass('text-center');
                // $( row ).find('td:eq(3)').addClass('text-center');
                // $( row ).find('td:eq(4)').addClass('text-center');
                // $( row ).find('td:eq(5)').addClass('text-center');
            }
        });        // name
        // description
        // sent_to
        $(document).on('click', '.view_data', function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{route('notes.view')}}",
                type: "post",
                data: {'id': id},
                dataType: 'json',
                success: function(data){
                    if(data.error)
                    {
                        toastr.error(data.error);
                    }
                    else
                    {                            
                        $('#name').html(data.title);
                        $('#description').html(data.description);
                        $('#sent_to').html(data.users);
                        $('#view_Note_info').show();
                    }
                },
                error: function(data){
                    alert("Unknown error occured");
                }
            })
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

