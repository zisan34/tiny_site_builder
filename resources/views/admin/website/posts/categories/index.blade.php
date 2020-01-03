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
            Categories
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

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">All Categories</h3>  
                        @can('add post categories')
                        <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#categories_form">Add New</button>
                        @endcan

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>order</th>
                                <th style="width:100px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>
                                        @if(count($category->post_subcategories)>0)

                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div >
                                                <div  role="tab" id="headingOne">
                                                  <h4 class="panel-title">

                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key+1}}" aria-expanded="true" aria-controls="collapse{{$key+1}}">
                                                      <i class="fa fa-angle-down pull-left"></i>
                                                    {{ $category->title }}
                                                    </a>
                                                  </h4>
                                                </div>
                                                <div id="collapse{{$key+1}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                  <div class="panel-body">

                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>SL#</th>
                                                            <th>Title</th>
                                                            <th>Status</th>
                                                            <th style="width:100px;">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($category->post_subcategories as $sub_key => $subcat)
                                                            <tr>
                                                                <td class="text-center">{{ $sub_key + 1 }}</td>
                                                                <td>{{ $subcat->title }}</td>
                                                                <td class="text-center">{{ $subcat->order }}</td>
                                                                <td class="text-center">
                                                                <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$category->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                                                @can('edit post categories')
                                                                    <a href="{{ route('categories.edit',$subcat->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                                                    <label class="">
                                                                          <div class="icheckbox_flat-green @if($subcat->status == 1) checked @endif " aria-checked="@if($subcat->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($subcat->status == 1) checked @endif class="flat-red @if(count($subcat->post_subcategories) == 0)  active_status @else not_tooglable @endif" data-id="{{$subcat->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                    </label>
                                                                @endcan
                                                                @can('delete post categories')
                                                                    <a href="{{ route('categories.destroy',$subcat) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                                                        event.preventDefault();
                                                                        document.getElementById('delete-form-{{ $subcat->id }}').submit();
                                                                        }else{
                                                                        event.preventDefault();
                                                                        }"
                                                                    ><i class="fa fa-trash"></i></a>
                                                                    <form method="POST" id="delete-form-{{ $subcat->id }}" action="{{ route('menus.destroy', $subcat->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                                                @endcan
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                            {{ $category->title }}
                                        @endif
                                    </td>
                                    <td class="text-center">{{$category->order}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$category->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>

                                        @can('edit post categories')
                                        <label class="">
                                              <div class="icheckbox_flat-green @if($category->status == 1) checked @endif " aria-checked="@if($category->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($category->status == 1) checked @endif class="flat-red @if(count($category->post_subcategories) == 0)  active_status @else not_tooglable @endif" data-id="{{$category->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        </label>
                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('delete post categories')
                                        @if(count($category->post_subcategories) == 0 && $category->slug != 'unit-informations')
                                        <a href="{{ route('categories.destroy',$category) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $category->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"
                                        ><i class="fa fa-trash"></i></a>
                                        @endif
                                        <form method="POST" id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
        <!-- /.row -->
        </div>
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

    <div id="categories_form" class="modal fade " data-backdrop="static" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add New Album <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button></h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="attribute_type">Category Title :<small style="color:red">*</small></label>
                                            <input type="text" name="title" id="title" class="form-control" title="Category Title" placeholder="Category Title" required="required">
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="attribute_type">Category Slug :<small style="color:red">*</small></label>
                                    <input type="text" id="slug" name="slug" class="form-control" title="Category Slug" placeholder="Category Slug" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="attribute_type">Category Description :</label>
                                    <textarea type="text" name="description" class="form-control" title="Category Description" placeholder="Category Description" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="attribute_type">Parent Category :</label>
                                    <select id="parent_category" class="form-control" name="parent_category">
                                        <option value="" selected>--Select Parent Category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}"> {{$category->title}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">                      
                                        <label for="order">Order :</label>
                                        <input type="number" name="order" class="form-control"   required="required" value="1">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-success btn-block pull-right"  style="margin-top: 24px;" value="Save">
                                        </div>
                                    </div>
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
            url: "categories/view_data",
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


    $(document).on('keyup', '#title', function(e) {
        var title = $(this).val();
        var slug = convertToSlug(title);
        $('#slug').val(slug);

    });
    function convertToSlug(Text)
    {
        return Text
            .toLowerCase()
            .replace(/ /g,'-')
            .replace(/[^\w-]+/g,'')
            ;
    }
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
    $(document).on("ifChecked", '.not_tooglable', function (event) {
        toastr.error("This category have subcategory");
    });
    $(document).on("ifUnchecked", '.not_tooglable', function (event) {
        toastr.error("This category have subcategory");
    });
    
    $('.table').DataTable();

});
function active_action(id) {
    $.ajax({
        url: "{{route('post-categories.toogle')}}",
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