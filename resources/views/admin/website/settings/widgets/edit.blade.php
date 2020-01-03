@extends('admin.layouts.app')

@push('css_lib')
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

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
                        <form action="{{route('widgets.update',$widget->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title"> Widget Title:<small style="color:red">*</small> </label>
                                <input class="form-control" type="text" name="title" value="{{$widget->title}}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="parent_page_ddl"> Display Page :<small style="color:red">*</small> </label>
                                <select name="parent_page[]" id="parent_page_ddl" class="   form-control select2" multiple  style="width: 100%">
                                    <?php
                                        $widget_page_id = explode(',', $widget->parent_page_id);
                                    ?>
                                    <option value="0" @if($widget->parent_page_id == '0') selected @endif>All Page</option>
                                    @foreach($pages as $page)
                                    <option value="{{$page->id}}" 
                                        @if(in_array( $page->id, $widget_page_id )) selected @endif> {{$page->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="order"> Order:<small style="color:red">*</small> </label>
                                <input class="form-control" required type="number" name="order" value="{{$widget->order}}" />
                            </div>
                            <div class="form-group col-md-4" id="checkbox" @if($widget->type != 1) style="display: none;" @endif>
                                <div class="checkbox" style="margin-top: 29px;" >
                                  <label>
                                    <input name="popup" type="checkbox" @if($widget->popup == 1) checked @endif> Enable Popup
                                  </label>
                                  <label>
                                    <input name="short_desc" type="checkbox" @if($widget->short_desc == 1) checked @endif> Enable Short Description
                                  </label>
                                </div>
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

@push('js_lib')

    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>


@endpush

@push('js_custom')
<script>
    $(function () {


        $('.select2').select2();
    });
</script>
@endpush

