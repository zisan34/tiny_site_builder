@extends('admin.layouts.app')

@push('css_lib')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ URL::asset('backend/plugins/iCheck/all.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
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
                    <div class="box-header with-border">
                        <h3 class="box-title">All Widgets</h3>

                        <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#widgets_form">Add New</button>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>Display Pages</th>
                                <th>Type</th>
                                <th>Creator</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($widgets as $key => $widget)
                            <?php
                                $widget_page_id = explode(',', $widget->parent_page_id);
                            ?>
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $widget->title }}</td>
                                <td>
                                    @if (in_array( 0, $widget_page_id )) All
                                    @endif

                                    {{-- {{print_r($widget_page_id})} --}}
                                    <?php $pagetitle = ''; ?>
                                    @foreach($pages as $page)
                                        @if(in_array( $page->id, $widget_page_id ))
                                            <?php $pagetitle .= $page->title.', '; ?>
                                        @endif
                                    @endforeach
                                    <?php echo rtrim($pagetitle, ', '); ?>
                                </td>
                                <td class="text-center">
                                    @if($widget->type == 1)
                                        Member Information
                                    @elseif($widget->type ==2)
                                        Multiple Links
                                    @elseif($widget->type == 3)
                                        Single Link
                                    @endif
                                </td>
                                <td class="text-center">{{ $widget->user->name }}</td>
                                <td class="text-center">
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView"  id="view" data-value="{{$widgets->id}}" onclick="show({{$widgets->id}})"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="show" data-id="{{$widgets->id}}" data-token="{{ csrf_token() }}">Try</a> --}}
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$widget->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a> --}}
                                    <label class="">
                                    <div class="icheckbox_flat-green @if($widget->status == 1) checked @endif " aria-checked="@if($widget->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($widget->status == 1) checked @endif class="flat-red active_status" data-id="{{$widget->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>

                                    <a href="{{ route('widgets.edit',$widget->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('widgets.destroy',$widget) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $widget->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $widget->id }}" action="{{ route('widgets.destroy', $widget->id) }}" style="display:none">@csrf @method('DELETE')</form>
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
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    <div id="widgets_view" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1a5010;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="text-center" style="color: white;"><span class="modal-name"></span></h4>
                </div>

                <div class="modal-image text-center align-items-center"><img src="" alt="" style="max-height: 200px;"></div>
                <div class="modal-info">
                    <p></p>
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
                    <form action="{{route('widgets.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title"> Widget Title:<small style="color:red">*</small> </label>
                                <input class="form-control" type="text" name="title"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="parent_page_ddl"> Display Page :<small style="color:red">*</small> </label>
                                <select name="parent_page[]" id="parent_page_ddl" class="   form-control select2" multiple style="width: 100%">
                                    <option selected value="0">All Page</option>
                                    @foreach($pages as $page)
                                    <option value="{{$page->id}}"> {{$page->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type_ddl"> Category :<small style="color:red">*</small> </label>
                                <select name="type" id="type_ddl" class=" form-control" required>
                                    <option value="">--Select Category--</option>
                                    <option value="1">Members</option>
                                    <option value="2">Multi Links</option>
                                    <option value="3">Informative</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="order"> Order:<small style="color:red">*</small> </label>
                                <input class="form-control" required type="number" name="order" value="1" />
                            </div>
                            <div class="form-group col-md-4" id="checkbox" style="display: none;">
                                <div class="checkbox" style="margin-top: 29px;" >
                                  <label>
                                    <input name="popup" type="checkbox"> Enable Popup
                                  </label>
                                  <label>
                                    <input name="short_desc" type="checkbox"> Enable Short Description
                                  </label>
                                </div>
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


@endpush

@push('js_custom')
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '#type_ddl', function(e) {
            e.preventDefault();

            var value = $(this).val();
            if(value == 1)
            {
                $('#checkbox').show();
            }
            else
            {
                $('#checkbox').hide();
            }
        })

        $(document).on('click', '.view', function(e) {
            e.preventDefault();

            var id = $(this).attr("data-id");
            $.ajax({
                url: "widgets/view_data",
                type:"POST",
                data: { 'id' : id },
                dataType: 'JSON',
                success:function(data){

                    $('.modal-name').html(data.name);
                    $('.modal-info').html(data.info);

                    $('.modal-image').children('img').attr('src', data.image);

                    $('#widgets_view').modal('show');
                },error:function(){
                    alert("No data found!!!!");
                }
            }); //end of ajax
        });


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

        $('#example1').DataTable();
    });


    function active_action(id) {
        $.ajax({
            url: "{{route('widgets.toogle')}}",
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
</script>
@endpush
