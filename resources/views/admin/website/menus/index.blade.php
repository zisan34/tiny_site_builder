@extends('layouts.app')

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Draft Management
            <small>available drafts</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Draft Management</a></li>
            <li class="active">Draft List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Draft List</h3>
                        <a href="{{ route('draft.create') }}" class="btn btn-info btn-xs pull-right">Create a Draft</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Creator</th>
                                <th>Draft Title</th>
                                <th>Draft Type</th>
                                <th>Version</th>
                                <th>Assigned To</th>
                                <th>Last Modified</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($drafts as $key=>$draft)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $draft->user->name }}</td>
                                <td class="draft_title">{{ $draft->draft_title }}</td>
                                <td>{{ $draft->draft_type->name }}</td>
                                <td>{{ $draft->version_number }}</td>
                                <!-- <td>{{ $draft->assigned_to }}</td> -->
                                <td>Saimun</td>
                                <td>{{ $draft->updated_at }}</td>
                                <td>{{ $draft->status }}</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-warning btnView" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('draft.edit',$draft) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('draft.destroy',$draft) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $draft->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $draft->id }}" action="{{ route('draft.destroy', $draft->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                            <tfoot>
                            <tr>
                                <th>SL#</th>
                                <th>Creator</th>
                                <th>Draft Title</th>
                                <th>Draft Type</th>
                                <th>Version</th>
                                <th>Assigned To</th>
                                <th>Last Modified</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Draft Title</h4>
                </div>
                <div class="modal-body">
                    <p>Draft Content here...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js_lib')
    <!-- DataTables -->
    <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endpush

@push('js_custom')
    <script>
        $(function () {
            $('#example2').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            });

        });
    </script>
@endpush
