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

    .album_image{
        position: relative;
    }
    .album_img_delete{
        position: absolute;
        background-color: #ffffff4d;
        height: 100%;
        width: 100%;
        transform: scale(0);
        transition: all 0.5s;
    }
    .album_image:hover .album_img_delete{
        transform: scale(1);
    }
/*    .main_image{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }*/

</style>
@endpush

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Album {{$album->title}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Album Management</a></li>
            <li class="active">Image List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Images</h3>
                        <a href="{{route('albums.index')}}" class="btn btn-info btn-xs pull-right"> Go Back </a>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('album-images.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="album" value="{{$album->id}}">
                            <label>Select Image</label>
                            <input id="images" type="file" name="images[]" multiple style="display: inline;">
                            <input type="submit" class="pull-right btn btn-success" value="Upload">
                        </form>
                    </div>
                    <div class="box-body">
                        <div class="row">
                        @php $i=1; @endphp 
                        @foreach($album->images as $image)
                        <div class="col-md-3 album_image">
                            <div class="album_img_delete">
                                <a href="{{ route('album-images.destroy',$image) }}" class="btn btn-lg btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $image->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }" href="#" class="btn bg-red"><i class="fa fa-trash"></i></a>
                            </div>
                            <img class="main_image" src="{{URL::asset($image->image)}}" style="width: 100%">
                            <form method="POST" id="delete-form-{{ $image->id }}" action="{{ route('album-images.destroy', $image->id) }}" style="display:none">@csrf @method('DELETE')</form>
                        </div>
                        @if($i%4 == 0)
                        </div>
                        <br>
                        <div class="row">
                        @endif
                        @php $i++; @endphp
                        @endforeach
                        </div>
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

        $('#images').focus();
        
        $('.summernote').summernote({
            tabsize: 2,
            height: 100
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


        $('.select2').select2();
    });
</script>
@endpush
