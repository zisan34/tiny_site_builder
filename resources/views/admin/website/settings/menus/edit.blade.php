@extends('admin.layouts.app')

@push('css_lib')
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

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
        Menu Settings
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Website Management</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Menus</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Menu Settings</h3>
                    <a href="{{ route('menus.index') }}" class="btn btn-danger btn-xs pull-right">Back to List</a>
                </div>
                <!-- /.box-header -->
                
                <!-- /.box-body -->
                <div class="box-body">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#menu" data-toggle="tab" aria-expanded="true">Edit Menu</a></li>
                      {{-- <li class=""><a href="#submenu" data-toggle="tab" aria-expanded="false">Add Submenu</a></li> --}}
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="menu">
                        <form action="{{route('menus.update', $menu->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('put')}}
                            <div class="row">
                                <div class="col-md-4" id="menu_from_div">
                                    <label for="menu_from_ddl"> Menu From : </label>
                                    <select name="menu_from" id="menu_from_ddl" class="form-control" required>
                                        <option value="">--Select Please--</option>
                                        <option value="pages" 
                                        @if($menu->relational_type == "pages") selected @endif >Pages</option>
                                        <option value="posts" 
                                        @if($menu->relational_type == "posts") selected @endif >Posts</option>
                                        <option value="custom" 
                                        @if($menu->relational_type == "custom") selected @endif >Custom Links</option>

                                        <option value="post_category"
                                        @if($menu->relational_type == "post_category") selected @endif>Post Category</option>

                                        <option value="photo_gallery" 
                                        @if($menu->relational_type == "photo_gallery") selected @endif>Photo Gallery</option>

                                        <option value="photo_album" 
                                        @if($menu->relational_type == "photo_album") selected @endif>Photo Album</option>

                                        <option value="video_gallery" 
                                        @if($menu->relational_type == "video_gallery") selected @endif>Video Gallery</option>

                                    </select>
                                </div>

                                <div class="col-md-4" id="relational_menu_ddl_div" style="@if(($menu->relational_type == "custom") || ($menu->relational_type == "photo_gallery") || ($menu->relational_type == "video_gallery")) display: none; @endif">
                                    <label for="relational_menu_ddl"> Menu :<small style="color:red">*</small></label>
                                    <select name="relational_menu" id="relational_menu_ddl" class="select2 form-control" style="width: 100%;">
                                        <option value="" selected>Select Menu</option>
                                        @foreach($relational_menus as $relational_menu)
                                        <option value="{{$relational_menu->id}}" 
                                            @if($relational_menu->id == $menu->relational_id)
                                            selected
                                            @endif > {{$relational_menu->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4" id="menu_link_txt_div" style="@if(($menu->relational_type == "pages") || ($menu->relational_type == "posts") || ($menu->relational_type == "post_category") || ($menu->relational_type == "photo_album")) display: none; @endif">
                                    <label for="menu_link_txt"> Link :<small style="color:red">*</small></label>
                                    <input @if(($menu->relational_type == "photo_gallery") || ($menu->relational_type == "video_gallery")) style="display: none;" 
                                    @endif class="form-control" type="text" name="menu_link" id="menu_link_txt" value="{{$menu->link}}" />
                                    <input class="form-control" type="text" id="menu_link_view" value="{{$_SERVER['REQUEST_URI']}}{{$menu->link}}" name="tmp_link" readonly />

                                </div>

                                <div class="col-md-4">
                                    <label for="navigation_label_txt"> Navigation Label :<small style="color:red">*</small></label>
                                    <input class="form-control" type="text" name="navigation_label" id="navigation_label_txt" value="{{$menu->name}}" required />
                                </div>
                                <div class="col-md-4">
                                    <label for="title_attribute_txt"> Title Attribute :<small style="color:red">*</small></label>
                                    <input class="form-control" type="text" name="title_attribute" id="title_attribute_txt" value="{{$menu->title_attribute}}" required />
                                </div>
                                <div class="col-md-4">
                                    <label for="menu_location_ddl"> Menu Location : </label>
                                    <select name="menu_location" id="menu_location_ddl" class="form-control">
                                        <option value="primary_menu" selected>Header Menu (Primary)</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="parent_menu_ddl"> Parent Menu : </label>
                                    <select name="parent_menu" id="parent_menu_ddl" class="select2 form-control">
                                        <option value="" selected>--Select Parent Menu--</option>
                                        
                                        @foreach($menus as $select_menu)
                                        <option value="{{$select_menu->id}}"
                                            @if($menu->parentMenu)
                                            @if($menu->parentMenu->id == $select_menu->id)
                                            selected
                                            @endif
                                            @endif  > {{$select_menu->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="menu_order_txt"> Menu Order :<small style="color:red">*</small></label>
                                    <input class="form-control" required type="number" name="menu_order" id="menu_order_txt" value="{{$menu->order}}" />
                                </div>
                                <div class="col-md-4">                                    
                                    <a href="{{route('menus.index')}}"  class="button_cus_up btn btn-block btn-danger pull-left">Cancel</a>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-right" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@push('js_lib')
    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
@endpush

@push('js_custom')

<script>
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Initial Focused field
        $('#menu_from_ddl').focus();

        $(document).on('change', '#menu_from_ddl', function(e) {
            e.preventDefault();
            var thisValue = $(this).val();
            // alert(thisValue);

            $('#relational_menu_ddl').empty().append('<option value="" selected>Select Menu</option>');

            if ("custom" == thisValue) {
                $('#relational_menu_ddl_div').hide();
                $('#menu_link_txt_div').show();
                $('#menu_link_txt').attr('required', 'required');
            }
            else if("photo_gallery" == thisValue)
            {
                $('#menu_link_txt').val();                    
                
                $('#relational_menu_ddl_div').hide();
                $('#menu_link_txt_div').show();
                $('#menu_link_txt').attr('required', 'required');
                $('#menu_link_txt').attr('readonly', 'readonly');
                $('#menu_link_txt').val("/photo-gallery");
                $('#menu_link_txt').css('display', 'none');
                $('#menu_link_view').val("{{route('photo_gallery')}}");
                $('#menu_link_view').show();
                $('#menu_link_view').attr('readonly', 'readonly');

            }
            else if("video_gallery" == thisValue)
            {
                $('#menu_link_txt').val();                    
                $('#relational_menu_ddl_div').hide();
                $('#menu_link_txt_div').show();
                $('#menu_link_txt').attr('required', 'required');
                $('#menu_link_txt').attr('readonly', 'readonly');
                $('#menu_link_txt').val("/video-gallery");
                $('#menu_link_txt').css('display', 'none');
                $('#menu_link_view').val("{{route('video_gallery')}}");
                $('#menu_link_view').show();
                $('#menu_link_view').attr('readonly', 'readonly');

            }
            else {
                $('#relational_menu_ddl_div').show();
                $('#menu_link_txt_div').hide();
                $('#menu_link_txt').removeAttr('required');

                $.ajax({
                    url: "{{route('menus.getMenus')}}",
                    type:"POST",
                    data: {
                        'menu_type' : thisValue 
                    },
                    dataType: 'JSON',
                    success:function(data){
                        $.each(data, function(i, d) {
                            $('#relational_menu_ddl').append('<option value="' + d.id + '">' + d.title + '</option>');
                        });
                    },error:function(){
                        alert("error!!!!");
                    }
                }); //end of ajax
            }
        });


        $(document).on('change', '#relational_menu_ddl', function(e) {
            e.preventDefault();
            var thisValue = $(this).find('option:selected').text();
            $('#navigation_label_txt').val(thisValue);
            $('#title_attribute_txt').val(thisValue);
        });

        $('#navigation_label_txt').keyup(function(){
            var input = $('#navigation_label_txt').val();
            $('#title_attribute_txt').val(input);
        })

        $('.select2').select2();


    });

</script>
@endpush