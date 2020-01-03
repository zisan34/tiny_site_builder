@extends('admin.layouts.app')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sub Categories
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Draft Management</a></li>
            <li class="active">Draft List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Sub Categories</h3>
                        <div id="msg"></div>

                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">

                        <form action="{{route('subcategories.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attribute_type">Parent Category :<small style="color:red">*</small></label>
                                                <select id="parent_category" class="form-control" required name="parent_category">
                                                    <option value="" selected>--Select Parent Category--</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}"> {{$category->title}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attribute_type">Sub Category Title :<small style="color:red">*</small></label>
                                                <input type="text" name="title" class="form-control" title="Sub Category Title" placeholder="Sub Category Title" required="required">
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attribute_type">Sub Category Slug :<small style="color:red">*</small></label>
                                                <input type="text" name="slug" class="form-control" title="Sub Category Slug" placeholder="Sub Category Slug" required="required">
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="attribute_type">Sub Category Description :<small style="color:red">*</small></label>
                                            <textarea type="text" name="description" class="form-control" title="Sub Category Description" placeholder="Sub Category Description" required="required" style="padding: 8px 10px; " rows="8"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success pull-left" value="Save">

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>Parent Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $key => $subcategory)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $subcategory->title}}</td>
                                    <td>{{ $subcategory->post_category->title}}</td>
                                    <td>
                                        @if($subcategory->status == 1) 
                                        <a href="{{route('subcategories.toogle',['id'=>$subcategory->id])}}" class="btn btn-xs btn-danger inactivate">Deactivate</a> 
                                        @elseif($subcategory->status == 0)  
                                        <a href="{{route('subcategories.toogle',['id'=>$subcategory->id])}}" class="btn btn-xs btn-success activate">Activate</a>
                                        @endif
                                    </td>
                                    <td>

                                        <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$subcategory->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('subcategories.edit',$subcategory->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('subcategories.destroy',$subcategory) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $subcategory->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"
                                        ><i class="fa fa-trash"></i></a>
                                        <form method="POST" id="delete-form-{{ $subcategory->id }}" action="{{ route('subcategories.destroy', $subcategory->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
    <div id="category_view" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <small>Title:</small><h4 class="modal-title">Draft Title</h4>
                    <hr>
                    <small>Slug:</small><h4 class="modal-slug">Draft Slug</h4>
                    <hr>
                </div>
                <div class="modal-body">
                    <small>Description:</small>
                    <br>
                    <p class="modal-description">Draft Content here...</p>
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

    $('#parent_category').focus();

    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
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
            url: "subcategories/view_data",
            type:"POST",
            data: { 'id' : id },
            dataType: 'JSON',
            success:function(data){
                $('.modal-title').html(data.title);
                $('.modal-slug').html(data.slug);
                $('.modal-description').html(data.description);

                $('#category_view').modal('show');
            },error:function(){
                alert("error!!!!");
            }
        }); //end of ajax
    });

    });
    </script>
@endpush