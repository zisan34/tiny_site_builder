@extends('admin.layouts.app')

@push('css_custom')
<style>
    
tbody tr td img{
    width: 100px;
}
.button_cus_up{
    margin-top: 25px;
}
</style> 
@endpush
@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Logo
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Logo Management</a></li>
            <li class="active">Logo List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    {{-- <div class="box-header">
                        <h3 class="box-title">Logo</h3>
                        <div id="msg"></div>
                    </div> --}}
                    <!-- /.box-header -->
                    <div class="box-body">
                        @can('edit logos')
                            <form action="{{route('logos.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="primary_logo">Primary Logo :</label>
                                        <input type="hidden" id="logo_id" name="logo_id" value="{{$logo ? $logo->id : ''}}" />
                                        <input type="file" id="file_upload" name="primary_logo" />

                                        <p class="help-block">
                                            Supported formates: <strong>jpg, jpeg, png</strong><br />
                                            Maximum Size: <strong>2MB</strong>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="secondary_logo">Secondary Logo :</label>
                                        <input type="file" id="file_upload" name="secondary_logo" />

                                        <p class="help-block">
                                            Supported formates: <strong>jpg, jpeg, png</strong><br />
                                            Maximum Size: <strong>2MB</strong>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Upload">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        @endcan
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Primary Logo</th>
                                <th>Secondary Logo</th>
                                <th>Creator</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($logo))
                                <tr class="text-center">
                                    <td>@if($logo->primary) <img src="{{URL(asset( $logo->primary ))}}"> @endif</td>
                                    <td>@if($logo->secondary) <img src="{{URL(asset( $logo->secondary ))}}"> @endif</td>
                                    <td>{{ $logo->user->name }}</td>
                                </tr>
                            @endif
                            </tbody>
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
    <div id="logo_view" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Draft Title</h4>
                    <hr>
                    <h6 class="modal-category">Draft Category</h6>
                    <hr>
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
    <script src="{{ URL::asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>


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
