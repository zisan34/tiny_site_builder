@extends('admin.layouts.app')

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
            Pages
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Page Management</a></li>
            <li class="active">Page List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">All Pages</h3>

                        @can('add pages')
                        <a href="{{ route('pages.create') }}" class="btn btn-info btn-xs pull-right">Add New</a>
                        @endcan
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>Creator</th>
                                <th>Parent Page</th>
                                <th>Order</th>
                                <th>Visibility</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $key => $page)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>                                    
                                    @can('edit pages')
                                    <a href="{{ route('pages.edit', $page) }}">
                                    {{ $page->title }}
                                    </a>
                                    @else
                                    {{ $page->title }}
                                    @endcan
                                </td>
                                <td class="text-center">{{ $page->user->name }}</td>
                                <td>{{ $page->parent_page_id }}</td>
                                <td class="text-center">{{ $page->order }}</td>
                                <td class="text-center">
                                    @if($page->visibility == 1)
                                    Public
                                    @elseif($page->visibility == 2)
                                    Password Protected
                                    @elseif($page->visibility == 3)
                                    Private
                                    @else
                                    Not defined
                                    @endif
                                    </td>
                                <td class="text-center">
                                    @if($page->content_type == 1)
                                    <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$page->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                    @elseif($page->content_type == 2)<a href="{{URL::asset($page->content)}}" class="btn btn-xs btn-warning btnView" download><i class="fa fa-download"></i></a>
                                    @endif


                                    @can('edit pages')
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView"  id="view" data-value="{{$page->id}}" onclick="show({{$page->id}})"><i class="fa fa-eye"></i></a> --}}
                                    {{-- <a href="#" class="show" data-id="{{$page->id}}" data-token="{{ csrf_token() }}">Try</a> --}}
                                    <label class="">
                                          <div class="icheckbox_flat-green @if($page->publish_status == 1) checked @endif " aria-checked="@if($page->publish_status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($page->publish_status == 1) checked @endif class="flat-red active_status" data-id="{{$page->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <a href="{{ route('pages.edit',$page->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan

                                    @can('delete pages')
                                    <a href="{{ route('pages.destroy',$page) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $page->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $page->id }}" action="{{ route('pages.destroy', $page->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
    <div id="page_view" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Draft Title</h4>
                </div>
                <div class="modal-body">
                    <div class="modal-image text-center align-items-center"><img src="" alt="" style="max-height: 200px;"></div>
                    <br>
                    <p class="modal-details">Draft Content here...</p>
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
                url: "pages/view_data",
                type:"POST",
                data: { 'id' : id },
                dataType: 'JSON',
                success:function(data){

                    $('.modal-title').html(data.title);
                    $('.modal-details').html(data.content);

                    $('.modal-image').children('img').attr('src', data.image);

                    $('#page_view').modal('show');
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
            url: "{{route('pages.toogle')}}",
            type:"POST",
            data: { 'id' : id },
            dataType: 'JSON',
            success:function(response){
                toastr.success(response.message);
            },error:function(e){
                console.log(e);
            }
        });
    }
</script>
@endpush
