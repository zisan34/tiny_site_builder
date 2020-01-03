@extends('admin.layouts.app')


@push('css_lib')
    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Draft Type
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Draft Type Management</a></li>
            <li class="active">Draft Type List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Update Draft Type {{$type->title}}</h3>
                        <div id="msg"></div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('draft_type.update',$type->id)}}" method="post">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Draft Type Name :<small style="color:red">*</small></label>
                                        <input type="text" name="name" id="name" class="form-control" title="Draft Type Name" placeholder="Draft Type Name" required="required" value="{{$type->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="short_name">Draft Type Short Name :</label>
                                        <input type="text" id="short_name" name="short_name" class="form-control" title="Draft Type Short Name" placeholder="Draft Type Short Name" value="{{$type->short_name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order">Parent Type :</label>
                                        <select name="parent_type" class="form-control select2" style="width: 100%;">
                                            <option value="">--Select Parent Type--</option>
                                            @foreach($types as $type)
                                            <option value="{{$type->id}}"
                                                @if($type->parent_id == $type->id) selected @endif>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order">Order :<small style="color:red">*</small></label>
                                        <input type="number" id="order" name="order" class="form-control" title="Order" placeholder="Order" required="required"  value="{{$type->order}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{route('draft_type.index')}}" class="btn btn-danger pull-left" data-dismiss="modal">Go Back</a>
                                    <input type="submit" class="btn btn-success pull-right" value="Update Type">
                                </div>
                            </div>
                        </form>
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
@endsection

@push('js_lib')
<script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

@endpush

@push('js_custom')

<script>
$(function(){
    $('#name').focus();

    //Initialize Select2 Elements
    $('.select2').select2();
});
</script>
@endpush
