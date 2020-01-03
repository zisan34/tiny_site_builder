@extends('admin.layouts.app')

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@push('css_custom')
<style type="text/css">
    .select2-container--default .select2-selection--multiple .select2-selection__rendered li{
        list-style: none;
        background-color: #027fbb;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered li span{
        list-style: none;
        color: #fff;
    }



    .select2-container--default .select2-search--inline .select2-search__field {
        background: #fff; 
        border: none;
        outline: 0;
        box-shadow: none;
        -webkit-appearance: textfield;
        padding: 5px 0px 0px 0px; 
        margin: 0;
    }
</style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Notes </h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Notes</a></li>
            <li class="active">Create Note</li>
        </ol>
    </section>

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Note</h3>
                        
                    </div>
                    <div class="box-body">
                        <form action="{{route('notes.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="note_id" id="note_id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="note_title">Note Name : <small style="color:red">*</small></label>
                                            <label id="note_title-error" class="error" for="note_title"></label>
                                            <input type="text" class="form-control" id="note_title" name="note_title" value=""placeholder="Note Name" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="reciever">Send To: <small style="color:red">*</small></label>
                                            <label id="reciever-error" class="error" for="reciever"></label>
                                            <select class="form-control select2" multiple="multiple" data-placeholder="Select User" id="reciever" name="reciever[]" required="required" autocomplete="false" style="width: 100%;">
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="note_description">Description : <small style="color:red">*</small></label>
                                            <label id="note_description-error" class="error" for="note_description"></label>
                                            <textarea id="note_description" name="note_description" required class="form-control" rows="5" placeholder="Enter Your Note ..." ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">                                
                                            <div class="checkbox" style="margin-top: 29px;" >
                                              <label>
                                                <input name="important" type="checkbox"> Important Task
                                              </label>
                                              <label>
                                                <input name="public" type="checkbox"> Public
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                <input type="submit" id="saveBtn" class="btn btn-success" value="Save">
                            </div>
                        </form>
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

