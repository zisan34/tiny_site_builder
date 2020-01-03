@extends('admin.layouts.app')

@push('css_custom')
<style>
    .button_cus_up
    {
        margin-top: 20px;
    }
</style>
@endpush


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Widgets
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Widget Management</a></li>
            <li class="active">Widget List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Update Widget</h3>
                        <div id="msg"></div>

                        <a href="{{ route('widgets.index') }}" class="btn btn-info btn-xs pull-right">Go back</a>
                    </div>

                    <div class="box-body">
                        <form action="{{route('widgets.update',['widget'=>$widget->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-6">                                    
                                    <div class="col-md-12">
                                        <label for="name"> Name: </label>
                                        <input class="form-control" type="text" name="name" value="{{$widget->name}} " />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="post"> Post: </label>
                                        <input class="form-control" type="text" name="post" value="{{$widget->post}} "/>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="designation"> Designation: </label>
                                        <input class="form-control" type="text" name="designation" value="{{$widget->designation}} "/>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="col-md-12">
                                        <label for="info"> Info :</label>
                                        <textarea class="form-control" type="text" name="info" cols="30" rows="2"> {{$widget->info}} "</textarea>
                                    </div>     
                                    <div class="col-md-12">
                                        <label for="info"> Featured Image :</label>
                                        <input type="file" name="image"/>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-body">
                        <label for="">Current Image</label>
                        <img src="{{URL::asset($widget->image)}}" style="max-height: 100px;">
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

