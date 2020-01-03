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
            Sliders
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Slider Management</a></li>
            <li class="active">Edit Slider</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Edit Slider</h3>
                        <a href="{{route('sliders.index')}}" class="btn btn-danger btn-xs pull-right">Go back</a>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <form action="{{route('sliders.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('put')}}
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputFile">File upload :</label>
                                    <input type="file" id="file_upload" name="file_upload" />

                                    <p class="help-block">
                                        Supported formates: <strong>jpg, jpeg, png</strong><br />
                                        Maximum Size: <strong>2MB</strong>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <label for="order">Slider Caption</label>
                                    <input type="text" name="caption" class="form-control" placeholder="Caption of Slider" value="{{$slider->caption}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="position">Slider Position</label>
                                    <select class="form-control" name="position">
                                        <option value="0" @if($slider->position == 0) selected @endif>Top</option>
                                        <option value="1" @if($slider->position == 1) selected @endif>Middle</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="order">Order of Slider</label>
                                    <input type="number" name="order" class="form-control" value="{{$slider->order}}">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Update">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Current Slider Image: <img src="{{$slider->image}}" style="max-height: 100px;"></p>
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
    <div id="slider_view" class="modal fade" role="dialog">
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
            $('#example1').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".view").click(function(){
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "slider/view_data",
                    type:"POST",
                    data: { 'id' : id },
                    dataType: 'JSON',
                    success:function(data){

                        $('.modal-title').html(data.title);
                        $('.modal-category').html(data.category);
                        $('.modal-body').html(data.content);

                        $('#slider_view').modal('show');
                    },error:function(){
                        alert("error!!!!");
                    }
                }); //end of ajax
            });
        });
    </script>
@endpush
