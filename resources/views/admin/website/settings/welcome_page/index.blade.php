@extends('admin.layouts.app')

@push('css_custom')
<style>
    
tbody tr td img{
    width: 100px;
}
.button_cus_up{
    margin-top: 25px;
}
</style> 
@endpush

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Welcome Page Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active">Welcome Page Settings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Welcome Page Settings</h3>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('welcome-settings.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="site_title"> Welcome Page: </label>

                                            <select name="welcome_page" id="welcome_page_ddl" class="select2 form-control" required>
                                                <option value="">--Select Page--</option>
                                                @foreach($pages as $page)
                                                <option value="{{$page->id}}" @if($welcome_settings && $welcome_settings->welcome_page_id == $page->id) selected @endif >{{$page->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="site_title"> Welcome Page Categories To Display: </label>
                                            @php
                                                $welcome_cats = $welcome_settings ? explode(',', $welcome_settings->welcome_cats) : [];
                                            @endphp
                                            <select name="welcome_cats[]" id="welcome_cats_ddl" multiple class="select2 form-control" required>
                                                @foreach($postcategories as $category)
                                                <option value="{{$category->id}}" @if(in_array($category->id,  (array) $welcome_cats)) selected @endif >{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="disp_m_sliders"> Middle Sliders: </label>
                                    <input type="checkbox" @if($welcome_settings && $welcome_settings->enable_middle_sliders == 1) checked @endif name="disp_m_sliders" id="disp_m_sliders">
                                </div>
                                <div class="col-md-2">
                                    <label for="disp_photo"> Latest Photo: </label>

                                    <input type="checkbox" @if($welcome_settings && $welcome_settings->enable_recent_images == 1) checked @endif name="disp_photo" id="disp_photo">

                                </div>
                                <div class="col-md-2">
                                    <label for="disp_vdo"> Latest Video: </label>
                                    <input type="checkbox" @if($welcome_settings && $welcome_settings->enable_recent_video == 1) checked @endif name="disp_vdo" id="disp_vdo">
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Save">
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
    <!-- /.content -->
@endsection




@push('js_custom')

<script>
    $(function() {
        $('.select2').select2();
    });

</script>
@endpush