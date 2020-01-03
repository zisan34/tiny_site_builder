@extends('admin.layouts.app')

@push('css_lib')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ URL::asset('backend/plugins/iCheck/all.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    {{-- summernote css --}}
    <link href="{{  URL::asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">

@endpush

@push('css_custom')
<style>
    .button_cus_up
    {
        margin-top: 20px;
    }
</style>
@endpush

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Videos
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Video Management</a></li>
            <li class="active">Video List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Videos</h3>

                        <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#videos_form">Add New</button>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Video</th>
                                <th>Creator</th>
                                <th style="width: 80px;" >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $key => $video)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $video->title }}</td>
                                <td>{{ $video->caption }}</td>
                                <td>
                                    <div class="serv_list" style="min-height: 270px; padding: 5px;">
                                    {{-- <video width="100%" height="200" controls>
                                        <source src="{{$video->video}}" type="video/mp4">
                                    </video> --}}
                                    <iframe width="300px" height="200px" src="{{str_replace("watch?v=","embed/",URL::asset($video->video))}}" allowfullscreen autoplay=false  controls></iframe>

                                    </div>
                                </td>
                                <td>{{ $video->user->name }}</td>
                                <td class="text-center">
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView"  id="view" data-value="{{$videos->id}}" onclick="show({{$videos->id}})"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="show" data-id="{{$videos->id}}" data-token="{{ csrf_token() }}">Try</a> --}}
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$video->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a> --}}

                                    <label class="">
                                          <div class="icheckbox_flat-green @if($video->status == 1) checked @endif " aria-checked="@if($video->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($video->status == 1) checked @endif class="flat-red active_status" data-id="{{$video->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <a href="{{ route('videos.edit',$video->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('videos.destroy',$video) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $video->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $video->id }}" action="{{ route('videos.destroy', $video->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
    <div id="widgets_view" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1a5010;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="text-center" style="color: white;"><span class="modal-name"></span></h4>
                </div>

                <div class="modal-image text-center align-items-center"><img src="" alt="" style="max-height: 200px;"></div>
                <div class="modal-info">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="videos_form" class="modal fade " data-backdrop="static" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add New video <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button></h4>
                </div>
                <div class="modal-body">                
                    <form action="{{route('videos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="title"> Video Title:<small style="color:red">*</small> </label>
                                <input required class="form-control" type="text" name="title"/>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="content_type">Content Type :<small style="color:red">*</small></label>
                                    <select class="form-control" id="content_type" name="content_type" title="Please select country." style="width: 100%;" required>
                                        <option selected="selected" value="1">Attach Link</option>
                                        <option value="2">Upload Here</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-8" id="video_link_div">
                                <label for="link"> Video Link:<small style="color:red">*</small> </label>
                                <input required class="form-control" id="video_link" type="url" name="link"/>
                            </div>

                            <div class="col-md-8" style="display: none;" id="video_upload_div">

                                <div class="form-group">
                                    <label for="exampleInputFile">Video upload :<small style="color:red">*</small></label>
                                    <input type="file" id="video_upload" name="video_upload" />

                                    <p class="help-block">
                                        Supported formates: <strong>mp4,mov</strong><br />
                                        Maximum Size: <strong>50MB</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="order"> Order:<small style="color:red">*</small> </label>
                                <input class="form-control" required type="number" name="order" value="1" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="caption"> Caption :</label>
                                <textarea type="text" id="caption" name="caption" class="form-control"> </textarea>
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-group">
                                    <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js_lib')
    <!-- DataTables -->
    <script src="{{ URL::asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    {{-- summernote js --}}
    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>


@endpush

@push('js_custom')
<script>
$(function () {


    $('.summernote').summernote({
        tabsize: 2,
        height: 100
    });

    $(document).on('change', '#content_type', function() {
        var thisValue = $(this).val();
        // alert(thisValue);

        if ("2" == thisValue) {
            $('#video_link_div').hide();
            $('#video_link').removeAttr('required');
            $('#video_upload_div').show();
            $('#video_upload').attr('required', 'required');
        } else {
            $('#video_upload_div').hide();
            $('#video_upload').removeAttr('required');
            $('#video_link_div').show();
            $('#video_link').attr('required', 'required');
        }
    });

    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".view").click(function(){
        var id = $(this).attr("data-id");
        $.ajax({
            url: "widgets/view_data",
            type:"POST",
            data: { 'id' : id },
            dataType: 'JSON',
            success:function(data){

                $('.modal-name').html(data.name);
                $('.modal-info').html(data.info);

                $('.modal-image').children('img').attr('src', data.image);

                $('#widgets_view').modal('show');
            },error:function(){
                alert("No data found!!!!");
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
    function active_action(id) {
        $.ajax({
            url: "{{route('videos.toogle')}}",
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

});
</script>
@endpush
