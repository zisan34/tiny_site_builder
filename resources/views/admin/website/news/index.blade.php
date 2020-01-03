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
            News
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">News Management</a></li>
            <li class="active">News List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All News</h3>
                        <div id="msg"></div>

                        <a href="{{ route('news.create') }}" class="btn btn-info btn-xs pull-right">Add New</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th >Title</th>
                                <th>Creator</th>
                                <th>Publish Date</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th style="min-width: 100px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_news as $key => $news)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td ><a href="{{ route('news.edit', $news) }}">
                                    {{ $news->title }}
                                </a></td>
                                <td>{{ $news->user->name }}</td>
                                <td>{{ date("d-m-Y", strtotime($news->publish_date))}}</td>
                                <td>{{ $news->news_category->title }}</td>
                                <td>
                                    @if($news->status == 1) 
                                    <a href="{{route('news.toogle',['id'=>$news->id])}}" class="btn btn-xs btn-danger inactivate">Deactivate</a> 
                                    @else 
                                    <a href="{{route('news.toogle',['id'=>$news->id])}}" class="btn btn-xs btn-success activate">Activate</a>
                                    @endif
                                </td>
                                <td style="min-width: 100px;">
                                    @if($news->type == 2)
                                    <a href="{{URL::asset($news->content)}}" class="btn btn-xs btn-warning btnView" target="blank" data-id="{{$news->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                    @else
                                    <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$news->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                    @endif


                                    <a href="{{ route('news.edit',$news->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('news.destroy',$news) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $news->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $news->id }}" action="{{ route('news.destroy', $news->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
    <div id="news_view" class="modal fade" role="dialog">
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
$(document).ready(function () {
$(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    });

});
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.view', function(e) {
        e.preventDefault();
        console.log('success');

        var id = $(this).attr("data-id");
        $.ajax({
            url: "news/view_data",
            type:"POST",
            data: { 'id' : id },
            dataType: 'JSON',
            success:function(data){

                $('.modal-title').html(data.title);
                $('.modal-category').html(data.category);
                $('.modal-body').html(data.content);

                $('#news_view').modal('show');
            },
            error:function() {
                alert("error!!!!");
            }
        }); //end of ajax
    });

});
</script>
@endpush
