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
            Albums
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Album Management</a></li>
            <li class="active">Album List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Albums</h3>
                        
                        @can('delete photo albums')
                        <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#albums_form">Add New</button>
                        <div id="msg"></div>
                        @endcan

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Cover Image</th>
                                <th>Creator</th>
                                <th style="width: 80px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($albums as $key => $album)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><a href="{{route('albums.images',['id'=>$album->id])}}">{{ $album->title }}</a></td>
                                <td>{{ $album->caption }}</td>
                                <td class="text-center">
                                    @if(isset($album->image->image) || $album->cover_image)
                                    <img src="{{$album->cover_image ? URL::asset($album->cover_image) : URL::asset($album->image->image)}}" style="max-height: 50px;" alt="{{$album->title}}">
                                    @endif
                                </td>
                                <td class="text-center">{{ $album->user->name }}</td>
                                <td class="text-center">
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView"  id="view" data-value="{{$albums->id}}" onclick="show({{$albums->id}})"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="show" data-id="{{$albums->id}}" data-token="{{ csrf_token() }}">Try</a> --}}
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$album->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a> --}}
                                    @can('edit photo albums')
                                    <label class="">
                                          <div class="icheckbox_flat-green @if($album->status == 1) checked @endif " aria-checked="@if($album->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($album->status == 1) checked @endif class="flat-red active_status" data-id="{{$album->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <a href="{{ route('albums.edit',$album->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('delete photo albums')
                                    <a href="{{ route('albums.destroy',$album) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $album->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $album->id }}" action="{{ route('albums.destroy', $album->id) }}" style="display:none">@csrf @method('DELETE')</form>
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

    <div id="albums_form" class="modal fade " data-backdrop="static" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add New Album</h4>
                </div>

                <div class="modal-body">
                    <form action="{{route('albums.store')}}" id="album_form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="title"> Album Title:<small style="color:red">*</small> </label>
                                <label id="title-error" class="error" for="title"></label>
                                <input required class="form-control" type="text" id="title" name="title"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cover_image"> Cover Image:</label>
                                <label id="cover_image-error" class="error" for="cover_image"></label>
                                <input type="file" id="cover_image" name="cover_image" value="1" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="order"> Order:<small style="color:red">*</small> </label>
                                <label id="order-error" class="error" for="order"></label>
                                <input class="form-control" required type="number" id="order" name="order" value="1" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="caption"> Caption :</label>
                                <label id="caption-error" class="error" for="caption"></label>
                                <textarea type="text" rows="1" id="caption" name="caption" class="form-control"> </textarea>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="album_visibility">Visibility Type :<small style="color:red">*</small></label>
                                            <label id="album_visibility-error" class="error" for="album_visibility"></label>
                                            <select name="album_visibility" id="album_visibility" class="form-control" required>
                                                <option value="0">Public</option>
                                                <option value="1">Password Protected</option>
                                                <option value="2">Private</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" id="protected_pass_div" style="display: none;">
                                            <label for="protected_pass">&nbsp;</label>
                                            <label id="protected_pass-error" class="error" for="protected_pass"></label>
                                            <input type="text" class="form-control" name="protected_pass" placeholder="Enter Password" id="protected_pass" value="">
                                        </div>  
                                    </div> 
                                </div>                             
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-group">
                                    <button type="submit" id="savebtn" class="button_cus_up btn btn-block btn-success pull-left">Save</button>
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

    $('.table').DataTable();

    $('.select2').select2();

    $(document).on('change', '#album_visibility', function() {
        var thisValue = $(this).val();
        // alert(thisValue);

        if ("1" == thisValue) {
            $('#protected_pass_div').show();
            $('#protected_pass').attr('required', 'required');
        } else {
            $('#protected_pass_div').hide();
            $('#protected_pass').removeAttr('required');
        }
    });

    $(document).on('click', '#savebtn', function(){
        $('#album_form').validate({
            debug: true,

            submitHandler: function(form) {
                form.submit();
            }
        });
    })
    
});
    
    function active_action(id) {
        $.ajax({
            url: "{{route('albums.toogle')}}",
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
