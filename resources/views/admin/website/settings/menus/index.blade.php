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
                        <a href="{{route('menus.create')}}" class="btn btn-info btn-xs pull-right">Add New</a>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    
                    <!-- /.box-body -->
                    
                    @if(isset($menus))
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Order</th>
                                <th style="width:100px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $key => $menu)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                    @if(count($menu->submenus)>0)

                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div >
                                                <div  role="tab" id="headingOne">
                                                  <h4 class="panel-title">

                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key+1}}" aria-expanded="true" aria-controls="collapse{{$key+1}}">
                                                      <i class="fa fa-angle-down pull-left"></i>
                                                    {{ $menu->name }}
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
                                                            <th>Parent Menu</th>
                                                            <th>Link</th>
                                                            <th>Order</th>
                                                            <th style="width:100px;">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($menu->submenus as $sub_key => $submenu)
                                                            <tr>
                                                                <td>{{ $sub_key + 1 }}</td>
                                                                <td>{{ $submenu->name }}</td>
                                                                <td>{{ $submenu->parentMenu->name }}</td>
                                                                <td>{{ $submenu->link }}</td>
                                                                <td class="text-center">{{ $submenu->order }}</td>
                                                                <td class="text-center">
                                                                <label class="">
                                                                <div class="icheckbox_flat-green @if($submenu->status == 1) checked @endif " aria-checked="@if($submenu->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($submenu->status == 1) checked @endif class="flat-red active_status" data-id="{{$submenu->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                </label>
                                                                <a href="{{ route('menus.edit',$submenu->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>                               
                                                                <a href="{{ route('menus.destroy',$submenu) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                                                    event.preventDefault();
                                                                    document.getElementById('delete-form-{{ $submenu->id }}').submit();
                                                                    }else{
                                                                    event.preventDefault();
                                                                    }"
                                                                ><i class="fa fa-trash"></i></a>
                                                                <form method="POST" id="delete-form-{{ $submenu->id }}" action="{{ route('menus.destroy', $submenu->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
                                        {{ $menu->name }}
                                    @endif

                                    </td>
                                    <td>{{ $menu->link }}</td>
                                    <td class="text-center">{{ $menu->order }}</td>
                                    <td class="text-center">
                                        <label class="">
                                        <div class="icheckbox_flat-green @if($menu->status == 1) checked @endif " aria-checked="@if($menu->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($menu->status == 1) checked @endif class="flat-red active_status" data-id="{{$menu->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        </label>
                                        <a href="{{ route('menus.edit',$menu->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                        @if(count($menu->submenus) == 0)
                                        <a href="{{ route('menus.destroy',$menu) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Do you really want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $menu->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"
                                        ><i class="fa fa-trash"></i></a>
                                        @endif
                                        <form method="POST" id="delete-form-{{ $menu->id }}" action="{{ route('menus.destroy', $menu->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    <div id="logo_view" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Draft Title</h4>
                    <hr>
                    <h6 class="modal-category">Draft Category</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    <p>Draft Content here...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection



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
                } else {
                    $('#relational_menu_ddl_div').show();
                    $('#menu_link_txt_div').hide();
                    $('#menu_link_txt').removeAttr('required');

                    $.ajax({
                        url: "menus/get",
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


            //Date picker
            $('.date').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',


            });

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
                    url: "{{route('menus.toogle')}}",
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