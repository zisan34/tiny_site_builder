@extends('admin.layouts.app')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Types
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
                        <h3 class="box-title">All Types</h3>
                        <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#types_form">Add New</button>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Order</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $key => $type)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td class="text-center">
                                        @if(count($type->subTypes)>0)

                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div >
                                                <div  role="tab" id="headingOne">
                                                  <h4 class="panel-title">

                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key+1}}" aria-expanded="true" aria-controls="collapse{{$key+1}}">
                                                      <i class="fa fa-angle-down"></i>
                                                    {{ $type->name }}
                                                    </a>
                                                  </h4>
                                                </div>
                                                <div id="collapse{{$key+1}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                  <div class="panel-body">

                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>SL#</th>
                                                            <th>Name</th>
                                                            <th>Short_name</th>
                                                            <th>Order</th>
                                                            <th style="width:100px;">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($type->subTypes as $sub_key => $sType)
                                                            <tr>
                                                                <td class="text-center">{{ $sub_key + 1 }}</td>
                                                                <td>{{ $sType->name }}</td>
                                                                <td>{{ $sType->short_name }}</td>
                                                                <td class="text-center">{{ $sType->order }}</td>
                                                                <td>
                                                                    <label class="">
                                                                          <div class="icheckbox_flat-green @if($sType->status == 1) checked @endif " aria-checked="@if($sType->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($sType->status == 1) checked @endif class="flat-red @if(count($sType->subTypes) == 0)  active_status @else not_tooglable @endif" data-id="{{$sType->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                    </label>
                                                                    <a href="{{ route('draft_type.edit',$sType->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>                               
                                                                    <a href="{{ route('draft_type.destroy',$sType) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                                                        event.preventDefault();
                                                                        document.getElementById('delete-form-{{ $sType->id }}').submit();
                                                                        }else{
                                                                        event.preventDefault();
                                                                        }"
                                                                    ><i class="fa fa-trash"></i></a>
                                                                    <form method="POST" id="delete-form-{{ $sType->id }}" action="{{ route('draft_type.destroy', $sType->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
                                            {{ $type->name }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        {{ $type->short_name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $type->order }}
                                    </td>
                                    <td class="text-center">

                                        {{-- <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$type->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a> --}}

                                        <label class="">
                                              <div class="icheckbox_flat-green @if($type->status == 1) checked @endif " aria-checked="@if($type->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($type->status == 1) checked @endif class="flat-red active_status" data-id="{{$type->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        </label>
                                        <a href="{{ route('draft_type.edit',$type->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('draft_type.destroy',$type) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $type->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"
                                        ><i class="fa fa-trash"></i></a>
                                        <form method="POST" id="delete-form-{{ $type->id }}" action="{{ route('draft_type.destroy', $type->id) }}" style="display:none">@csrf @method('DELETE')</form>
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

    <div id="types_form" class="modal fade " data-backdrop="static" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add New Album <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button></h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('draft_type.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Draft Type Name :<small style="color:red">*</small></label>
                                    <input type="text" name="name" id="name" class="form-control" title="Draft Type Name" placeholder="Draft Type Name" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="short_name">Draft Type Short Name :</label>
                                    <input type="text" id="short_name" name="short_name" class="form-control" title="Draft Type Short Name" placeholder="Draft Type Short Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order">Parent Type :</label>
                                    <select name="parent_type" class="form-controll select2" style="width: 100%;">
                                        <option value="">--Select Parent Type--</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order">Order :<small style="color:red">*</small></label>
                                    <input type="number" id="order" name="order" class="form-control" title="Order" placeholder="Order" required="required" value="1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success pull-right" value="Add Type">
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
<script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

@endpush

@push('js_custom')

<script>
$(function () {
    $('#types_form').on('shown.bs.modal', function () {
        $('#name').focus();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //Initialize Select2 Elements
    $('.select2').select2();
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
            url: "{{route('draft_type.toogle')}}",
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