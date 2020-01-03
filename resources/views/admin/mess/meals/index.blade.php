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
        <h1>Meal Management</h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Meal</a></li>
            <li class="active">Meal List</li>
        </ol>
    </section>

    @php
    $meal_report_type = isset($_GET['meal_report_type']) ? $_GET['meal_report_type'] : 1;

    $start = $meal_report_type == 2 ? (isset($_GET['searchMonth']) ? date('Y-m-01', strtotime('01-'.$_GET['searchMonth'])) : date('Y-m-01', strtotime(now()))) : '';
    $end = $meal_report_type == 2 ? (isset($_GET['searchMonth']) ? date('Y-m-t', strtotime('01-'.$_GET['searchMonth'])) : date('Y-m-t', strtotime(now()))) : '';

    $searchMonth = isset($_GET['searchMonth']) ? date('m-Y', strtotime('01-'.$_GET['searchMonth'])) : date('m-Y', strtotime(now()));


    @endphp

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="col-md-4">
                            <h3 class="box-title">Meal List</h3>
                        </div>
                        <form action="" method="GET" id="">

                            <div class="col-md-4">

                            <div class="form-group">
                                <label class="" style="cursor: pointer;">
                                    <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative; margin-right:10px; margin-bottom:6px;">
                                        <input type="radio" id="local_radio" value="1" name="meal_report_type" class="flat-red" {{$meal_report_type == 1 ? 'checked' : ''}} style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    <span style="font-size:18px; margin-top:-5px;">All Time</span>
                                </label>

                                <label class="" style="cursor: pointer;">
                                    <div class="iradio_flat-green" aria-checked="true" aria-disabled="false" style="position: relative; margin-right:10px; margin-bottom:6px; margin-left:10px;"> 
                                        <input type="radio" id="foreign_radio" value="2" name="meal_report_type" {{$meal_report_type == 2 ? 'checked' : ''}} class="flat-red" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    <span style="font-size:18px; margin-top:-5px;">Monthly</span>
                                </label>
                            </div>
                            </div>
                            <div id="date_range_div" @if($meal_report_type == 1) style="display: none;" @endif>                                
                            <div class="col-md-3">
                                <input type="text" class="text-center input-sm form-control" id="searchMonth" name="searchMonth" value="{{$searchMonth}}" />
                            </div>
                            </div>                            
                            <div class="col-md-1">                            
                                <button style="padding: 6px 20px; margin: 0; margin-bottom: 4px;"  type="submit" class="btn btn-sm btn-info" >Search</button>
                            </div>
                        </form>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                                <tr class="bg-blue">
                                    <th style="width:20px;" class="text-center">SL#</th>
                                    <th class="text-center">User</th>
                                    <th style="width:80px;" class="text-center">Total Meals</th>
                                    <th style="width:90px;" class="text-right">Total Cost</th>
                                    <th class="text-right">Balance</th>
                                    @can('meal entry')
                                    <th class="text-center">Meal entry</th>
                                    @endcan
                                    <th style="width:90px;" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td class="text-center">{{$key + 1}}</td>
                                <th class="text-center">{{$user->name}}</th>
                                @if($meal_report_type == 2)
                                <td class="text-center">{{count($user->meals->whereBetween('meal_date',  [$start, $end]))}}</td>
                                <th class="text-right">{{$user->meal_cost($start, $end)}} Tk.</th>
                                @else
                                <td class="text-center">{{count($user->meals)}}</td>
                                <th class="text-right">{{$user->all_meal_cost()}} Tk.</th>                                
                                @endif
                                <td class="text-right">{{$user->user_account ? $user->user_account->acc_balance : 0}} Tk.</td>
                                @can('meal entry')
                                <td class="text-center">
                                    <a href="{{route('meals.entry',$user->id)}}" data-id="{{$user->id}}" class="btn btn-xs btn-info">Meal Entry</a>
                                </td>
                                @endcan
                                <td class="text-center">
                                    <a href="#" title="View Details" class="btn btn-xs btn-warning btnView view_data" data-user_id="{{$user->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-eye"></i></a>
                                    <a href="#" title="Make Payment" class="btn btn-xs btn-success btnView payment" data-user_balance="{{$user->user_account ? $user->user_account->acc_balance : 0}}" data-user_id="{{$user->id}}"  data-token="{{ csrf_token() }}"><i class="fa fa-dollar"></i></a>


                                    <a href="#" class="btn btn-xs btn-info" onclick="document.getElementById('print-form-{{$user->id}}').submit(); event.preventDefault();"
                                    ><i class="fa fa-print"></i></a>

                                    <form method="POST" target="_blank" id="print-form-{{$user->id}}" action="{{route('meals.user_meal_report_print')}}" style="display:none">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <input type="hidden" name="start" value="{{$start}}">
                                        <input type="hidden" name="end" value="{{$end}}">
                                    </form>
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
        </div>
    </section>



    <div class="modal modal fade" id="meal_details_modal" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="modal_user_name"></h4>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead style="background-color: #f1f1f1">
                                <tr class="bg-blue">
                                    <th style="vertical-align: middle;" rowspan="2">Date</th>
                                    <th style="vertical-align: middle;" rowspan="2">Meal Type</th>
                                    <th colspan="4">Item</th>
                                </tr>
                                <tr class="bg-blue">
                                    <th class="text-center">Item</th>
                                    <th class="text-center">Qty</th>
                                    <th>Rate</th>
                                    <th class="text-center">Price</th>
                                </tr>
                            </thead>

                            <tbody id="meal_details_table">

                            </tbody>

                            <tfoot>
                                <tr class="bg-gray">
                                    <td colspan="5" class="text-right">
                                        <strong>Grand Total :</strong>
                                    </td>
                                    <td class="text-right"><strong id="grand_total_div">Tk</strong></td>
                                </tr>

                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-info pull-right" id="print_btn" data-user_id="">Print</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
    </div>


    <div class="modal modal fade" id="payment_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('meals.make_payment')}}" id="" method="post">
                    @csrf
                    <input type="hidden" name="user_id" id="payment_user_id" value="">

                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="modal_user_name"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="pay_date"> Date: </label>
                            <label id="pay_date-error" class="error" for="pay_date"></label>
                            <input required class="form-control datepicker" type="text" id="pay_date" name="pay_date" readonly value="{{date('d-m-Y')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="due_amount"> Balance Amount: </label>
                            <label id="due_amount-error" class="error" for="due_amount"></label>
                            <input required class="form-control" type="text" id="due_amount" name="due_amount" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="payment_amount"> Payment Amount:<small style="color:red">*</small> </label>
                            <label id="payment_amount-error" class="error" for="payment_amount"></label>
                            <input class="form-control text-right" placeholder="0.00" required type="number" id="payment_amount" name="payment_amount" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reference"> Reference :</label>
                            <label id="reference-error" class="error" for="reference"></label>
                            <input type="text" rows="1" id="reference" name="reference" class="form-control" placeholder="Ex. Cash/Bkash">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Confirm Payment</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
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
        $('#add_meal').on('shown.bs.modal', function () {
            $('#name').focus();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.data-table').DataTable({'autoWidth': false});

        $(document).on('click', '#createNewFoodMenu', function(){
            $('#add_meal').modal('show');

        });

        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });


        $(document).on('click', '.view_data', function(e){
            e.preventDefault();
            var user_id = $(this).attr('data-user_id');
            var start = "{{$start}}";
            var end = "{{$end}}";
            $.ajax({
                url: "{{route('meals.view')}}",
                type: "post",
                data: {
                    'user_id': user_id,
                    'start': start,
                    'end': end
                },
                dataType: 'json',
                success: function(data){
                    // console.log(data);
                    if(data.error)
                    {
                        toastr.error(data.error);
                    }
                    else
                    {
                        $('#modal_user_name').html(data.user_name);

                        var table_html='';

                        // console.log(data.meals);
                        var grandTotal = 0;

                        var prev_date = '';
                        var curr_date = '';

                        $.each(data.meals, function(i, meal){

                            var sl = parseInt(i+1);
                            var subtotal = 0;

                            curr_date = meal.meal_date;

                            $.each(meal.meal_children, function(iterator, meal_child){

                                if(iterator>0)
                                {
                                    meal_type = '';
                                    date = '';
                                }
                                else
                                {
                                    meal_type = meal.meal_type;
                                    date = meal.meal_date;
                                }

                                if(prev_date == curr_date)
                                {
                                    date = '';
                                }

                                var price = meal_child.item.price * meal_child.quantity;

                                table_html += '<tr> <td class="text-center">'+ date +'</td> <td class="text-center">'+ meal_type +'</td>  <td>'+ meal_child.item.name +'</td>  <td class="text-center">'+ meal_child.quantity +'</td>  <td class="text-right">'+ meal_child.item.price +' Tk</td>  <td class="text-right">'+  price +'Tk.</td>  </tr>';

                                grandTotal += parseInt(price);
                                subtotal += parseInt(price);
                            });
                            table_html += '<tr style="font-style: italic; background-color: #f4f4f4;"><th class="text-right" colspan="5">Sub Total</th><th class="text-right">'+ subtotal +' Tk</th></tr>'

                            prev_date = curr_date;

                        });

                        $('#meal_details_table').empty();

                        $('#meal_details_table').append(table_html);
                        $('#grand_total_div').html(grandTotal);

                        $('#print_btn').attr('data-user_id', user_id);

                        $('#meal_details_modal').modal('show');

                        // console.log(table_html);
                    }
                },
                error: function(data){
                    console.log(data);
                    alert("Unknown error occured");
                }
            })
        });

        $(document).on('click', '#print_btn', function(e){
            e.preventDefault();
            var user_id = $('#print_btn').attr('data-user_id');

            $('#print-form-'+user_id).submit();

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

        $(document).on('click', '.payment', function(e){
            var user_id = $(this).attr('data-user_id');
            var user_balance = $(this).attr('data-user_balance');
            $('#payment_user_id').val(user_id);
            $('#due_amount').val(user_balance);
            $('#payment_modal').modal('show');
        });


        $(document).on("ifChecked", 'input[type="radio"][name="meal_report_type"]', function (event) {
            var thisValue = $(this).val();

            // alert(thisValue);

            if (thisValue == 1) {
                $("#date_range_div").hide();
                $('#searchMonth').val('');
                // $("#lc_no").removeAttr('required');
            } 
            else {
                $("#date_range_div").show();                
                $('#searchMonth').val('');                
                $('#searchMonth').val($.datepicker.formatDate('mm-yy', new Date()));
                $('#searchMonth').datepicker('update');
                // $("#lc_no").attr('required', 'required');

            }
        });

        // Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
        });



        $('#searchMonth').datepicker({
            format: "mm-yyyy",
            startView: 1,
            minViewMode: 1,
            autoclose: true,
        });
        $('.input-daterange').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
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

