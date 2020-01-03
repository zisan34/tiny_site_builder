@extends('admin.layouts.app')

@push('css_lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">


    <style>
        .select2-container .select2-selection--single {
            height: 34px !important;
        }
    </style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Food Menu </h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Food Menu</a></li>
            <li class="active">Food List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Food List</h3>
                        <a href="javascript:void(0)" id="createNewFoodMenu" class="btn bg-green btn-sm pull-right"> <i class="fa fa-plus" style="font-size:12px;"></i> Add New Menu</a>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="add_food_menu" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" >
                                    <h5 class="modal-title" id="modelHeading">Add Notes</h5>
                                </div>
                                <form id="foodMenuForm" name="foodMenuForm" action="{{route('food-menu.store')}}" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="food_menu_id" id="food_menu_id">
                                    <div class="modal-body">
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date">Date : <small style="color:red">*</small></label>
                                                        <label id="date-error" class="error" for="date"></label>
                                                        <input type="text" class="form-control datepicker" id="date" name="date" title="Meal Menu Date" required="required" value="{{ date("d-m-Y", strtotime(now()))}}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="category">Category: <small style="color:red">*</small></label>
                                                        <label id="category-error" class="error" for="category"></label>
                                                        <select class="form-control select2" id="category" name="category" required="required" style="width: 100%; height: 34px;" autofocus>
                                                            <option value="">Select</option>
                                                            @foreach($food_menu_categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="name">Menu Name : <small style="color:red">*</small></label>
                                                        <label id="name-error" class="error" for="name"></label>
                                                        <input type="text" class="form-control" id="name" name="name" value=""placeholder="Menu Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="price">Menu Price : <small style="color:red">*</small></label>
                                                        <label id="price-error" class="error" for="price"></label>
                                                        <input type="number" class="form-control" id="price" name="price" value="" placeholder="Menu Price" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="image">Image :</label>
                                                        <label id="image-error" class="error" for="image"></label>
                                                        <input type="file" class="form-control" id="image" name="image">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Description :</label>
                                                        <label id="description-error" class="error" for="description"></label>
                                                        <textarea id="description" name="description" class="form-control" rows="5" placeholder="Enter Your Note ..." ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                        <input type="submit" id="saveBtn" class="btn btn-success" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                                <tr class="bg-blue">
                                    <th style="width:20px;" class="text-center">SL#</th>
                                    <th class="text-center">Date</th>
                                    <th style="width:80px;" class="text-center">Category</th>
                                    <th class="text-center">Name</th>
                                    <th style="width:90px;" class="text-center">Price</th>
                                    <th class="text-center">Description</th>
                                    <th style="width:90px;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach($food_menus as $key => $food_menu)
                            <tr>
                                <td class="text-center">{{$key + 1}}</td>
                                <th class="text-center">{{date('d-m-Y', strtotime($food_menu->menu_date))}}</th>
                                <th class="text-center">{{$food_menu->category->name}}</th>
                                <th class="text-center">{{$food_menu->name}}</th>
                                <th class="text-right">{{$food_menu->price}} Tk.</th>
                                <td class="text-center">{{$food_menu->description}}</td>
                                <td class="text-center">
                                    {{-- <a href="#" class="btn btn-xs btn-warning btnView view_data" data-id="{{$food_menu->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a> --}}
                                    <label class="">
                                      <div class="icheckbox_flat-green @if($food_menu->status == 1) checked @endif " aria-checked="@if($food_menu->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($food_menu->status == 1) checked @endif class="flat-red active_status" data-id="{{$food_menu->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <a href="{{ route('food-menu.edit',$food_menu->id) }}" class="btn btn-xs btn-info edit_menu" data-id={{$food_menu->id}}><i class="fa fa-edit"></i></a>
                                    @if($food_menu->used() == 0)
                                    <a href="{{ route('food-menu.destroy',$food_menu) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $food_menu->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $food_menu->id }}" action="{{ route('food-menu.destroy', $food_menu->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                    @else
                                    <a href="#" disabled class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="view_FoodMenu_info" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="Note_info_popup_header bg-green" colspan="2">Note Information</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><strong>Title</strong></td>
                                        <td id="name"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Description</strong></td>
                                        <td id="description"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sent To:</strong></td>
                                        <td id="sent_to"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection

@push('js_lib')
    <!-- Select2 -->
    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endpush

@push('js_custom')
<script type="text/javascript">
    $(function () {
        $('.select2').focus();
        $('#add_food_menu').on('shown.bs.modal', function () {
            $('#name').focus();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.data-table').DataTable({'autoWidth': false});

        $(document).on('click', '#createNewFoodMenu', function(){
            $('#add_food_menu').modal('show');

        });
// name
// category
// price
// image
// description
        $(document).on('click', '.edit_menu', function (e) {

            e.preventDefault();

            var food_menu_id = $(this).data('id');
            $.get("{{ route('food-menu.index') }}" +'/' + food_menu_id +'/edit', function (data) {

                // console.log(data);

                $('#modelHeading').html("Edit Food Menu");
                $('#saveBtn').html("Update Food Menu");
                $('#food_menu_id').val(food_menu_id);
                $('#name').val(data.name);
                $('#price').val(data.price);

                $('#date').val($.datepicker.formatDate('dd-mm-yy', new Date(data.menu_date)))

                $('#description').val(data.description);

                $('#category option[value="'+data.category_id+'"]').prop('selected', true);


                $('.select2').select2();
                $('.datepicker').datepicker('update');

                $('#add_food_menu').modal('show');
            })
        });

        $(document).on('click', '.view_data', function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{route('food-menu.view')}}",
                type: "post",
                data: {'id': id},
                dataType: 'json',
                success: function(data){
                    if(data.error)
                    {
                        toastr.error(data.error);
                    }
                    else
                    {
                        $('#name').html(data.title);
                        $('#description').html(data.description);
                        $('#sent_to').html(data.users);
                        $('#view_FoodMenu_info').show();
                    }
                },
                error: function(data){
                    alert("Unknown error occured");
                }
            })
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

        
        //Date picker

        $('.datepicker').datepicker({
            autoclose: true,
            format: "dd-mm-yyyy",
            todayBtn: "linked",
            todayHighlight: true
        });

        $('.select2').select2();
    });

    function active_action(id) {
        $.ajax({
            url: "{{route('food-menu.toggle')}}",
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

