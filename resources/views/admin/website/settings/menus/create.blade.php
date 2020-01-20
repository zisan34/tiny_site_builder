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
                      <li class="active"><a href="#menu" data-toggle="tab" aria-expanded="true">Add Menu</a></li>
                      {{-- <li class=""><a href="#submenu" data-toggle="tab" aria-expanded="false">Add Submenu</a></li> --}}
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="menu">
                        <form action="{{route('menus.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label for="parent_menu_ddl"> Parent Menu : </label>
                                    <select name="parent_menu" id="parent_menu_ddl" class="select2 form-control">
                                        <option value="" selected>--Select Parent Menu--</option>
                                        
                                        @foreach($menus as $menu)
                                        <option value="{{$menu->id}}"> {{$menu->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="navigation_label_txt"> Title :<small style="color:red">*</small></label>
                                    <input class="form-control" type="text" name="navigation_label" id="navigation_label_txt" required />
                                </div>
                                <div class="col-md-6" id="menu_from_div">
                                    <label for="menu_from_ddl"> Menu From : </label>
                                    <select name="menu_from" id="menu_from_ddl" class="form-control" required>
                                        <option value="">--Select Please--</option>
                                        <option value="pages">Pages</option>
                                        <option value="posts">Posts</option>
                                        <option value="custom">Custom Links</option>
                                        <option value="post_category">Post Category</option>
                                        <option value="photo_gallery">Photo Gallery</option>
                                        <option value="photo_album">Photo Album</option>
                                        <option value="video_gallery">Video Gallery</option>
                                    </select>
                                </div>
                                <div class="col-md-6" id="relational_menu_ddl_div" style="margin-bottom: 10px; display: none;">
                                    <label for="relational_menu_ddl"> Menu :<small style="color:red">*</small></label>
                                    <select name="relational_menu" id="relational_menu_ddl" class="select2 form-control" style="width: 100%;">
                                        <option value="" selected>Select Menu</option>
                                    </select>
                                </div>
                                <div class="col-md-6" id="menu_link_txt_div" style="display: none;">
                                    <label for="menu_link_txt"> Link :<small style="color:red">*</small></label>
                                    <input class="form-control" type="text" name="menu_link" id="menu_link_txt" />
                                    <input class="form-control" type="text" id="menu_link_view" style="display: none;" />
                                </div>
                                <div class="col-md-6">
                                    <label for="menu_location_ddl"> Menu Location : </label>
                                    <select name="menu_location" id="menu_location_ddl" class="form-control">
                                        <option value="primary_menu" selected>Header Menu (Primary)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="menu_order_txt"> Menu Order :<small style="color:red">*</small></label>
                                    <input class="form-control" type="number" name="menu_order" id="menu_order_txt" value="1" />
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Save">
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
    $('.select2').select2();

    // Initial Focused field
    $('#menu_from_ddl').focus();

    $(document).on('change', '#parent_menu_ddl', function(e){
        let selected = $(this).val();

        if(selected != "")
        {
            $("#menu_from_div").show();            
        }
    })

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
            $('#menu_link_view').show();
            $('#menu_link_txt').attr('required', 'required');
            $('#menu_link_txt').attr('readonly', 'readonly');
            $('#menu_link_txt').val("/photo-gallery");
            $('#menu_link_txt').css('display', 'none');
            $('#menu_link_view').val("{{route('photo_gallery')}}");
            $('#menu_link_view').attr('readonly', 'readonly');

        }
        else if("video_gallery" == thisValue)
        {
            $('#menu_link_txt').val();                    
            $('#relational_menu_ddl_div').hide();
            $('#menu_link_txt_div').show();
            $('#menu_link_view').show();
            $('#menu_link_txt').attr('required', 'required');
            $('#menu_link_txt').attr('readonly', 'readonly');
            $('#menu_link_txt').val("/video-gallery");
            $('#menu_link_txt').css('display', 'none');
            $('#menu_link_view').val("{{route('video_gallery')}}");
            $('#menu_link_view').attr('readonly', 'readonly');


        }
        else {
            $('#relational_menu_ddl_div').show();
            $('#menu_link_txt_div').hide();
            $('#menu_link_txt').removeAttr('required');
            $('#menu_link_txt').removeAttr('readonly');

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

    });


    });

</script>
@endpush