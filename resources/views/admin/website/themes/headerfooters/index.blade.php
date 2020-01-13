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
            Header Footer
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Header Footer Management</a></li>
            <li class="active">Header Footer</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Header Footer</h3>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('headerfooters.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if(isset($headerfooter))
                            <input type="hidden" name="headerfooter_id" value="{{$headerfooter->id}}">
                            @endif

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"> Title: </label>
                                    <input class="form-control" type="text" name="title" value="{{$headerfooter ? $headerfooter->title : ''}}" />
                                </div>
                                <div class="col-md-6">
                                    <label for="subtitle"> Subtitle :</label>
                                    <input class="form-control" type="text" name="subtitle"  value="{{$headerfooter ? $headerfooter->subtitle : ''}}"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="developer"> Developer: </label>
                                    <input class="form-control" type="text" name="developer" value="{{$headerfooter ? $headerfooter->developer : ''}}" />
                                </div>
                                <div class="col-md-6">
                                    <label for="credit"> Credit :</label>
                                    <input class="form-control" type="text" name="credit" value="{{$headerfooter ? $headerfooter->credit : ''}}"  />
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-right" value="Update">
                                    </div>
                                </div>
                            </div>
                        </form>
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
