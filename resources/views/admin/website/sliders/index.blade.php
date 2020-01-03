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
            <li class="active">Slider List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">All Sliders</h3>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    @can('add sliders')
                    <div class="box-body">

                        <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="exampleInputFile">File upload :</label>
                                    <input type="file" id="file_upload" name="file_upload" />

                                    <p class="help-block">
                                        Supported formates: <strong>jpg, jpeg, png</strong><br />
                                        Maximum Size: <strong>2MB</strong>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <label for="order">Slider Caption</label>
                                    <input type="text" name="caption" class="form-control" placeholder="Caption of Slider">
                                </div>
                                <div class="col-md-2">
                                    <label for="position">Slider Position</label>
                                    <select class="form-control" name="position">
                                        <option value="0">Top</option>
                                        <option value="1">Middle</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="order">Order of Slider</label>
                                    <input type="number" name="order" class="form-control" value="1">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Upload">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endcan

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Image</th>
                                <th>Caption</th>
                                <th>Position</th>
                                <th>Creator</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key => $slider)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-center"><img src="{{URL(asset( $slider->image ))}}"></td>
                                <td>{{ $slider->caption }}</td>
                                <td class="text-center">{{ $slider->position == 1 ? 'Middle' : 'Top' }}</td>
                                <td class="text-center">{{ $slider->user->name }}</td>
                                <td class="text-center">{{ $slider->order }}</td>
                                <td class="text-center">
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$slider->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a> --}}
                                    @can('edit sliders')
                                    <label class="">
                                          <div class="icheckbox_flat-green @if($slider->status == 1) checked @endif " aria-checked="@if($slider->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($slider->status == 1) checked @endif class="flat-red active_status" data-id="{{$slider->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('delete sliders')                                    
                                    <a href="{{ route('sliders.destroy',$slider) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $slider->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $slider->id }}" action="{{ route('sliders.destroy', $slider->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
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
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass   : 'iradio_flat-green'
        });

        $(document).on("ifChecked", '.active_status', function (event) {
            var id = $(this).attr("data-id");
            // alert(id);
            active_action(id);

        });
        $(document).on("ifUnchecked", '.active_status', function (event) {
            var id = $(this).attr("data-id");
            // alert(id);
            active_action(id);

        });
        
        $('.table').DataTable();
    });

        function active_action(id) {
            $.ajax({
                url: "{{route('sliders.toogle')}}",
                type:"POST",
                data: { 'id' : id },
                dataType: 'JSON',
                success:function(response){
                    toastr.success(response.message);
                },error:function(e){
                    console.log(e);
                }
            }); //end of ajax
        }
</script>
@endpush
