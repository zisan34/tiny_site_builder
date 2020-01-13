@extends('admin.layouts.app')

@push('css_lib')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ URL::asset('backend/plugins/iCheck/all.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link href="{{ asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">
@endpush

@push('css_custom')
<style>
    .button_cus_up
    {
        margin-top: 20px;
    }
    .sidebar .side_header {
    background-color: #966CD8;
    padding: 10px 0;
    }
    .sidebar .side_header h5 {
    margin: 0;
    color: #fff;
    }
    .side_content li {
    display: list-item;
    text-align: -webkit-match-parent;
    }
    user agent stylesheet
    .side_content ul {
        list-style-type: disc;
        list-style: none;
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

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">All Widgets</h3>

                        <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#widgets_form">
                          Add Data
                        </button>
                    </div>


                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                        @if(count($widgets) > 0)
                        @php
                        $i=1;
                        @endphp
                        @foreach($widgets as $widget)
                        @if(count($widget->datas) > 0)
                            <div class="col-md-4">
                                <div class="sidebar text-center">
                                    <div class="side_header" style="border-radius: 10px 10px 0 0;">
                                        <h5>{{$widget->title}}</h5>
                                    </div>
                                    @if($widget->type == 1)
                                    @foreach($widget->datas as $data)
                                    <div class="side_content text-center" style="border: 1px solid rgb(199, 210, 252); border: 1px solid rgb(199, 210, 252); margin-bottom: 5px;" title="{{$data->member->name}}">
                                        <img class="w-50" style="max-height: 200px;" src="{{ asset($data->member->image) }}" alt="{{$data->member->name}}">
                                        <h5>
                                            <small>{{$data->member->member_category->title}}</small><br />
                                            {{$data->member->name}} <small>@if(isset($data->member->member_subcategory->title)) ,{{$data->member->member_subcategory->title}}@endif </small>
                                        </h5>
                                        <p id="info" style="text-align: justify; padding: 5px; font-size: 16px;">
                                            @if($widget->short_desc == 1)
                                            {!!$data->member->info!!}
                                            @endif
                                        </p>
                                        <a href="{{ route('widget-data.destroy',$data) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){event.preventDefault(); document.getElementById('delete-form-{{ $data->id }}').submit();}else{event.preventDefault();}">
                                                <i class="fa fa-trash"></i></a>
                                        <form method="POST" id="delete-form-{{ $data->id }}" action="{{ route('widget-data.destroy', $data->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                    </div>
                                    @endforeach

                                    @elseif($widget->type == 2)
                                    <div class="side_content text-left" style="border: 1px solid rgb(199, 210, 252); max-height: 300px; overflow-x: auto;">
                                        <ul style="list-style: none; color: black;">
                                            @foreach($widget->datas as $data)
                                            @if($data->link_type == 3)
                                            <li><span><i class="fab fa fa-angle-right"></i></span> <a style="color: black !important;" target="_blank" href="{{$data->link}}">{!!$data->link_title!!}</a>

                                            <a href="{{ route('widget-data.destroy',$data) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{ $data->id }}').submit();}else{event.preventDefault();}"><i class="fa fa-trash"></i></a>
                                            </li>

                                            @elseif($data->link_type == 2)
                                            <li><span><i class="fab fa fa-angle-right"></i></span> <a style="color: black !important;" target="_blank" href="{{route('post',$data->model_id)}}">{{$data->post->title}}</a>

                                            <a href="{{ route('widget-data.destroy',$data) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){event.preventDefault(); document.getElementById('delete-form-{{ $data->id }}').submit();}else{event.preventDefault();}">
                                                <i class="fa fa-trash"></i></a>
                                            </li>

                                            @elseif($data->link_type == 1)
                                            <li><span><i class="fab fa fa-angle-right"></i></span> <a style="color: black !important;" target="_blank" href="{{route('page',$data->model_id)}}">{{$data->page->title}}</a>

                                            <a href="{{ route('widget-data.destroy',$data) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){event.preventDefault(); document.getElementById('delete-form-{{ $data->id }}').submit();}else{event.preventDefault();}"><i class="fa fa-trash"></i></a>
                                            </li>
                                            @endif
                                            <form method="POST" id="delete-form-{{ $data->id }}" action="{{ route('widget-data.destroy', $data->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @elseif($widget->type == 3)
                                    <div class="side_content text-center" style="border: 1px solid rgb(199, 210, 252);  max-height: 300px;">
                                        @foreach($widget->datas as $data)
                                        {!!$data->info_data!!}
                                        <a href="{{ route('widget-data.destroy',$data) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){event.preventDefault(); document.getElementById('delete-form-{{ $data->id }}').submit();}else{event.preventDefault();}"><i class="fa fa-trash"></i></a>
                                        <form method="POST" id="delete-form-{{ $data->id }}" action="{{ route('widget-data.destroy', $data->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>

                        @if($i%3 == 0)
                            </div>
                            <div class="row">
                        @endif
                        @php
                        $i++;
                        @endphp

                        @endif
                        @endforeach
                        @endif
                        </div>
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
    <div id="widgets_view" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="modal-name"></span>,<span class="modal-post"></span></h4><span class="modal-designation"></span>
                </div>

                <div class="modal-image text-center align-items-center"><img src="" alt="" style="max-height: 200px;"></div>
                <div class="modal-info">
                    <p>Modal Content here...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="widgets_form" class="modal fade " data-backdrop="static" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add New Widget <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button></h4>
                    

                </div>
                <div class="modal-body">
                    <form action="{{route('widget-data.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="widget_ddl"> Select Widget :<small style="color:red">*</small> </label>
                                <select name="widget" id="widget_ddl" class="form-control select2" style="width: 100%;">
                                    <option value="" selected>--Select Widget--</option>
                                    @foreach($widgets as $widget)
                                    <option value="{{$widget->id}}"> {{$widget->title}} 
                                        (
                                        @if($widget->type == 1)
                                            Member Information
                                        @elseif($widget->type == 2)
                                            Multi Links
                                        @elseif($widget->type == 3)
                                            Informative
                                        @endif
                                        ) - 
                                    <?php
                                        $widget_page_id = explode(',', $widget->parent_page_id);
                                    ?>
                                    @if(in_array( 0, $widget_page_id )) All
                                    @endif

                                    @foreach($pages as $page)
                                        @if(in_array( $page->id, $widget_page_id )) {{$page->title}} 
                                        @endif
                                    @endforeach

                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="order"> Order:<small style="color:red">*</small> </label>
                                <input class="form-control" required type="number" name="order" value="1" />
                            </div>
                            <div id="link_type_div" class="form-group col-md-4" style="display: none;">
                                <label for="link_type"> Data Link Type:<small style="color:red">*</small> </label>
                                <select class="form-control" name="link_type" id="link_type">
                                    <option value="">--Select Type--</option>
                                    <option value="1">Page</option>
                                    <option value="2">Post</option>
                                    <option value="3">Custom</option>
                                </select>
                            </div>
                            <div id="link_title_div" class="form-group col-md-4" style="display: none;">
                                <label for="link_title_txt"> Data Title:<small style="color:red">*</small> </label>
                                <input class="form-control" type="text" id="link_title_txt" name="link_title"/>
                            </div>
                            <div id="link_div" class="form-group col-md-4" style="display: none;">
                                <label for="link"> Data Link:<small style="color:red">*</small> </label>
                                <input class="form-control" type="url" id="link" name="link"/>
                            </div>
                            <div id="info_data_div" class="form-group col-md-12" style="display: none;">
                                <label for="link"> Detailed Info:<small style="color:red">*</small> </label>
                                <textarea id="info_data_txt" name="info_data" class="form-control summernote"></textarea>
                            </div>
                            <div id="post" class="form-group col-md-8" style="display: none;">
                                <label for="post_ddl"> Select Post :<small style="color:red">*</small> </label>
                                <select name="post" id="post_ddl" class="form-control select2" style="width: 100%;">
                                    <option value="" selected>--Select Post--</option>
                                    @foreach($posts as $post)
                                    <option value="{{$post->id}}"> {{$post->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="page" class="form-group col-md-8" style="display: none;">
                                <label for="page_ddl"> Select Page :<small style="color:red">*</small> </label>
                                <select name="page" id="page_ddl" class="form-control select2" style="width: 100%;">
                                    <option value="" selected>--Select Page--</option>
                                    @foreach($pages as $page)
                                    <option value="{{$page->id}}"> {{$page->title}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-group">
                                    <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Save">
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
    <!-- iCheck 1.0.1 -->
    <script src="{{ URL::asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ URL::asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    
    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>


@endpush

@push('js_custom')
<script>

    $(function () {


        $('.summernote').summernote({
            tabsize: 2,
            height: 325
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#example1').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        });


        $('#widget_ddl').on('change',function () {
            var value = $(this).val();

            $.ajax({
                url: 'widgets/type',
                type:"POST",
                data: { 'id' : value },
                dataType: 'JSON',
                success:function(data){
                    if(data.type == 1)
                    {
                        $('#info_data_div').hide();
                        $('#info_data_txt').removeAttr('required');

                        $('#member_div').show();
                        $('#member_ddl').attr('required', 'required');

                        $('#link_type_div').hide();
                        $('#link_type').removeAttr('required');

                        $('#title').removeAttr('required');
                        $('#link').removeAttr('required');

                        $('#post_ddl').removeAttr('required');
                        $('#page_ddl').removeAttr('required');

                    } else if(data.type == 3)
                    {
                        $('#info_data_div').show();
                        $('#info_data_txt').attr('required', 'required');

                        $('#member_div').hide();
                        $('#member_ddl').removeAttr('required');

                        $('#link_type_div').hide();
                        $('#link_type').removeAttr('required');

                        $('#title').removeAttr('required');
                        $('#link').removeAttr('required');

                        $('#post_ddl').removeAttr('required');
                        $('#page_ddl').removeAttr('required');

                    }
                    else
                    {
                        $('#link_type_div').show();
                        $('#member_div').hide();


                        $('#info_data_div').hide();
                        $('#info_data_txt').removeAttr('required');
                        
                        $('#link_type').attr('required', 'required');
                    }
                },error:function(){
                    alert("error!!!!");
                }
            }); //end of ajax
        });


        $('#link_type').on('change', function(){
            var value = $(this).val();
            if(value == 1)
            {
                $('#post').hide();
                $('#link_title_div').hide();
                $('#link_div').hide();
                $('#page').show();
                $('#title').removeAttr('required');
                $('#link').removeAttr('required');
                $('#member').removeAttr('required');
                $('#post_ddl').removeAttr('required');
                $('#page_ddl').attr('required','required');
            }
            else if(value == 2)
            {
                $('#page').hide();
                $('#link_title_div').hide();
                $('#link_div').hide();
                $('#post').show();
                $('#title').removeAttr('required');
                $('#link').removeAttr('required');
                $('#member').removeAttr('required');
                $('#page_ddl').removeAttr('required');
                $('#post_ddl').attr('required','required');

            }
            else if(value == 3)
            {
                $('#page').hide();
                $('#post').hide();
                $('#member_div').hide();
                $('#link_title_div').show();
                $('#link_div').show();
                $('#page_ddl').removeAttr('required');
                $('#post_ddl').removeAttr('required');
                $('#member').removeAttr('required');
                $('#title').attr('required', 'required');
                $('#link').attr('required', 'required');
            }
        });

        $(".view").click(function(){
            var id = $(this).attr("data-id");
            $.ajax({
                url: "widgets/view_data",
                type:"POST",
                data: { 'id' : id },
                dataType: 'JSON',
                success:function(data){

                    $('.modal-name').html(data.name);
                    $('.modal-post').html(data.post);
                    $('.modal-designation').html(data.designation);
                    $('.modal-info').html(data.info);

                    $('.modal-image').children('img').attr('src', data.image);

                    $('#widgets_view').modal('show');
                },error:function(){
                    alert("error!!!!");
                }
            }); //end of ajax
        });


        $('.select2').select2();

        var getWelcomeContnetWords = $('#info').text().split(" ");
        var message = "";
        var max_length = getWelcomeContnetWords.length > 120 ? 120 :getWelcomeContnetWords.length;
        for (i = 0; i < max_length; i++) 
        {
          message += getWelcomeContnetWords[i] + " ";
        }
        message += getWelcomeContnetWords[121] + "...";

        $('#info').text(message);
    });
</script>
@endpush
