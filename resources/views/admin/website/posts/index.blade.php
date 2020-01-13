@extends('admin.layouts.app')

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')
    <!-- Content Header (Post header) -->
    <section class="content-header">
        <h1>
            Posts
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Post Management</a></li>
            <li class="active">Post List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">All Posts</h3>
                        <div id="msg"></div>


                        {{-- edit posts --}}
                        {{-- add posts --}}
                        {{-- view all posts --}}
                        {{-- delete posts --}}
                        @can('add posts')
                        <a href="{{ route('posts.create') }}" class="btn btn-info btn-xs pull-right">Add New</a>
                        @endcan
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 30px;">SL#</th>
                                <th class="text-left">Title</th>
                                <th>Creator</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td><a href="{{ route('posts.edit', $post) }}">
                                    {{ $post->title }}
                                </a></td>
                                <td class="text-center">{{ $post->user->name }}</td>
                                <td class="text-center">{{ $post->post_category->title }}</td>
                                <td class="text-center">
                                    @if($post->post_sub_category) 
                                        {{ $post->post_sub_category->title }} 
                                    @endif
                                </td>
                                <td class="text-center">

                                    {{-- edit posts --}}
                                    {{-- add posts --}}
                                    {{-- view all posts --}}
                                    {{-- delete posts --}}
                                    @if($post->content_type == 1)
                                    <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$post->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                    @elseif($post->content_type == 2)<a href="{{URL::asset($post->content)}}" class="btn btn-xs btn-warning btnView" download><i class="fa fa-download"></i></a>
                                    @endif
                                    @can('edit posts')
                                    <label class="">
                                          <div class="icheckbox_flat-green @if($post->status == 1) checked @endif " aria-checked="@if($post->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($post->status == 1) checked @endif class="flat-red active_status" data-id="{{$post->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>

                                    <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @else
                                    @endcan
                                    @can('delete posts')
                                    <a href="{{ route('posts.destroy',$post) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $post->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
    <div id="post_view" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Title</h4>
                    <small class="modal-category">Category</small>
                </div>
                <div class="modal-body">
                    <div class="modal-image text-center align-items-center"><img src="" alt="" style="max-height: 200px;"></div>
                    <br>
                    <p class="modal-details">Content here...</p>
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
            url: "posts/view_data",
            type:"POST",
            data: { 'id' : id },
            dataType: 'JSON',
            success:function(data){

                $('.modal-title').text(data.title);
                $('.modal-category').html('Category: <b>'+data.category+'</b>');
                $('.modal-details').html(data.content);
                $('.modal-image').children('img').attr('src', data.image);


                $('#post_view').modal('show');
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
            url: "{{route('posts.toogle')}}",
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
