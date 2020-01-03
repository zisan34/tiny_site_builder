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

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Update Album</h3>
                        <div id="msg"></div>

                        <a href="{{ route('widgets.index') }}" class="btn btn-info btn-xs pull-right">Go back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{route('videos.update',$video->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('put')}}
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="title"> Video Title:<small style="color:red">*</small> </label>
                                    <input required class="form-control" type="text" name="title" value="{{$video->title}}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="order"> Order:<small style="color:red">*</small> </label>
                                    <input class="form-control" required type="number" name="order" value="1" value="{{$video->order}}" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="caption"> Caption :</label>
                                    <textarea type="text" id="caption" name="caption" class="form-control">{{$video->caption}}</textarea>
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Update">
                                    </div>
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

@endsection

