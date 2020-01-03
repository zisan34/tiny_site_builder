@extends('admin.layouts.app')


@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('backend/bower_components/chosen/chosen.css') }}">

    <link rel="stylesheet" href="{{  URL::asset('backend/bower_components/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/custom.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
@endpush

@push('css_custom')
    <style>
        .menu_modal{
            position: relative;

        }

        .menu_modal_eye{
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .text-center{
            text-align: center!important;
        }
        .table>thead:first-child>tr:first-child>th {
            border: 1px solid #0073b7;}

        .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
            border: 1px solid #0073b7;
        }
    </style>
@endpush

@section('content')
    <!-- Content Header (Post header) -->
    <section class="content-header">
        <h1>Meal Calender</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Mess</a></li>
            <li class="active">Meal Calender</li>
        </ol>
    </section>
@php
$get_metod_user = $_GET ? $_GET['user'] : '';
$start = $_GET ? date('Y-m-d', strtotime($_GET['start'])) : date('Y-m-01');
$end = $_GET ? date('Y-m-d', strtotime($_GET['end'])) : date('Y-m-t');
@endphp
    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
            <form action="{{route('mess.user_meal_calendar')}}" method="get">
                <div class="box-header with-border">
                    <div class="col-md-1">
                        <label>User:</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"aria-hidden="true" name="user" required>
                                <option value="">--Select User--</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}" @if($get_metod_user == $user->id) selected @endif>{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="input-daterange input-group">
                            <input type="text" class="input-sm form-control" name="start" value="{{date('d-m-Y', strtotime($start))}}">
                            <span class="input-group-addon">to</span>
                            <input type="text" class="input-sm form-control" name="end" value="{{date('d-m-Y', strtotime($end))}}">
                        </div>
                    </div>
                    <div class="col-md-1">                            
                        <button style="padding: 6px 20px; margin: 0; margin-bottom: 4px;"  type="submit" class="btn btn-sm btn-info" >Search</button>
                    </div>
                </div>
            </form>

            @if(isset($user_meals))
            <div class="box-body">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-stripped table-hover">
                        <thead>
                            <tr class="bg-blue">
                                <th>Date</th>
                                @foreach ($food_categories as $key => $category)
                                <th>{{$category->name}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $fromDate = new DateTime($start);
                        $toDate = new DateTime($end);
                        $toDate = $toDate->modify('+1 day');

                        //$start_date = explode('-', $fromDate);
                        //$end_date = explode('-', $toDate);
                        //$day_count = $end_date[0] - $start_date[0] + 1;

                        $interval = new DateInterval('P1D');
                        $daterange = new DatePeriod($fromDate, $interval ,$toDate);

                        $user_meals = json_decode(json_encode($user_meals), true);



                        $sorted_meals = array();

                        foreach ($user_meals as $key => $meal) {
                            $sorted_meals[$meal['meal_date']][$meal['meal_type']] = $meal;
                        }

                        //echo '<pre/>';
                        //print_r($daterange);

                        //exit();
                        @endphp
                            @foreach($daterange as $date)
                                @php 
                                    $search_date = $date->format('Y-m-d'); 
                                @endphp
                                <tr>
                                    <td class="text-center">
                                        <strong style="font-size: 18px;"><?php echo $date->format("d-m-Y"); ?></strong>
                                    </td>

                                    @foreach ($food_categories as $key => $category)

                                        @if (array_key_exists("$search_date", $sorted_meals) && array_key_exists($category->id, $sorted_meals["$search_date"]))

                                            <td class="menu_modal">
                                                <strong style="font-size: 14px">Menu :</strong>
                                                <strong style="font-size: 18px;"> {{$sorted_meals["$search_date"]["$category->id"]['menu_count']}}</strong> <br>

                                                <strong style="font-size: 14px">Price :</strong>
                                                <strong style="font-size: 18px;">{{$sorted_meals["$search_date"]["$category->id"]['total_price']}} <small>Tk</small></strong>

                                                <a href="#" class="btn btn-xs bg-green menu_modal_eye view_data" data-meal_type="{{$category->id}}" data-meal_type_name="{{$category->name}}" data-start="{{$search_date}}" data-end="{{$search_date}}" data-date="{{$search_date}}"><i class="fa fa-eye"></i></a>
                                            </td>
                                        @else

                                        <td class="menu_modal">

                                            <a href="#" class="btn btn-xs bg-yellow menu_modal_eye view_data" data-meal_type_name="{{$category->name}}" data-meal_type="{{$category->id}}" data-date="{{$search_date}}" data-start="{{$search_date}}" data-end="{{$search_date}}"><i class="fa fa-eye"></i></a>
                                        </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>
            @endif
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

<div class="modal fade in" id="menu_modal_view" data-backdrop="static" style="padding-right: 17px;" >
    <div class="modal-dialog">
        <div class="modal-content">            
            <form action="{{route('meals.insert')}}" method="post">
            @csrf
            <input type="hidden" name="user" value="{{$get_metod_user}}">
            <input type="hidden" name="meal_date" id="meal_date_input" value="">
            <input type="hidden" name="meal_id" id="meal_id_input" value="">
            <input type="hidden" name="meal_type" id="meal_type_input" value="">
            <input type="hidden" name="total_amt" id="total_amt_input" value="">
            <input type="hidden" name="entry_from" value="meal_calendar">
            <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Food Menu Select</h4>
            </div>

            <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">
                         <table id="DetailsTable" class="table table-stripped table-bordered">

                                <thead class="bg-blue">
                                    <tr>
                                        <th colspan="5" id="meal_category"></th>
                                    </tr>
                                        <tr>
                                        <th class="text-center">Sl#</th>
                                        <th class="text-center">Menu</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="menu_modal_tbody">
                                </tbody>
                                <tfoot class="bg-gray">
                                    <tr id="menu_modal_tfoot">
                                    </tr>
                                </tfoot>
                            </form>
                         </table>
                     </div>
                 </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn bg-red pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-green">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js_lib')
    <!-- Select2 -->
    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>
    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.proto.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endpush

@push('js_custom')
<script>
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('body').addClass('sidebar-collapse');

    //Initialize Select2 Elements
    $('.select2').select2();

    $('.input-daterange').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
    });


    $(document).on('click', '.view_data', function(e){
        e.preventDefault();

        var user_id = {{$_GET ? $_GET['user'] : '0'}};
        var start = $(this).attr('data-start');
        var end = $(this).attr('data-end');
        var meal_type = $(this).attr('data-meal_type');
        var meal_type_name = $(this).attr('data-meal_type_name');

        
        var meal_type = $(this).attr('data-meal_type');
        var date = $(this).attr('data-date');

        $('#meal_category').html(meal_type_name);
        $('#menu_modal_tbody').empty();
        $('#menu_modal_tfoot').empty();


        $.ajax({
            url: "{{route('foodmenu.get_filtered')}}",
            type: "get",
            data: {
                'user_id': user_id,
                'date' : date,
                'food_category' : meal_type
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
                    var priceTotal = 0;
                    var qtyTotal = 0;
                    var grandTotal = 0;

                    var table_html;
                    $.each(data, function(i, d){
                        var quantity = (d.meal_id > 0) ? d.quantity : "";
                        var price = (d.meal_id > 0) ? d.price : "";
                        var subtotal = parseFloat(d.price * quantity) == null ? 0 : parseFloat(d.price * quantity).toFixed(2);


                        table_html += '<tr class="tr-row">';
                        table_html += '<td class="text-center">'+ parseInt(i+1) +'</td>';
                        table_html += '<th class="text-center">'+ d.name +'</th>';
                        table_html += '<td class="text-right">'+ parseFloat(price * 1).toFixed(2) +' <small>Tk</small><input type="hidden" class="form-control rate" name="rate[]" value="'+ price +'"></td>';
                        table_html += '<td class="text-center">';
                        table_html += '<input type="hidden" name="meal_child_id[]" value="'+ d.meal_child_id +'">';
                        table_html += '<input type="hidden" class="form-control" class="food_menus food_menus_input" name="food_menus[]" value="'+ d.id +'">';
                        table_html += '<input type="number" min="0" class="form-control meal_qty_input quantity" name="quantity[]" value="'+ quantity +'" style="width: 100px; margin: auto; text-align: center;">';
                        table_html += '</td>';
                        table_html += '<th class="text-right"><span class="subtotal">'+ (subtotal == null ? '0.00' : subtotal) +' </span><small>Tk</small>';
                        table_html += '<input type="hidden" class="subtotal_input" name="subtotals[]" value="'+ (subtotal == null ? '0.00' : subtotal) +'">';
                        table_html += '</th>';
                        table_html += '</tr>';

                        grandTotal += parseFloat(subtotal);
                        priceTotal += parseFloat(price);
                        qtyTotal += parseFloat(quantity);

                    });


                    $.each(data, function(i, d){
                        if(d.meal_id != null)
                        {
                            $('#meal_id_input').val(d.meal_id);
                        }
                    });


                    $('#meal_date_input').val(date);
                    $('#meal_type_input').val(meal_type);

                    $('#menu_modal_tbody').empty();
                    $('#menu_modal_tbody').append(table_html);

                    var menu_modal_tfoot_html = '<th  colspan="4" class="text-right">Total </th>'; 
                    menu_modal_tfoot_html += '<th id="grand_total" class="text-right"> '+grandTotal;
                    menu_modal_tfoot_html += '<small></small> ';
                    menu_modal_tfoot_html += '<input type="hidden" id="total_amt" name="total_amt" value="'+grandTotal+'">';
                    menu_modal_tfoot_html += '</th>';

                    $('#menu_modal_tfoot').html(menu_modal_tfoot_html);

                    $('#menu_modal_view').modal('show');

                }
            },
            error: function(data){
                // console.log(data);
                alert("Unknown error occured");
            }
        });

    });

    $(document).on('keyup change', '.meal_qty_input' ,function(){
        var row = $(this).parent().parent();
        var thisValue = $(this).val();

        setSubTotal(row);
    });

});

function setSubTotal(row) {
    // alert('test');
    var quantity = row.find('.meal_qty_input').val();
    var rate = row.find('.rate').val();
    var subtotal = parseFloat(quantity*rate).toFixed(2);
    row.find('.subtotal').html(subtotal);
    row.find('.subtotal_input').val(subtotal);

    setGrandTotal();
}

function setGrandTotal() {
    var rows = $("#DetailsTable > tbody > tr.tr-row");
    var grandTotal = 0;
    $(rows).each(function(){
        var cls = $(this).attr('class');
        if(cls == 'tr-row'){
            var subtotal = $(this).find('.subtotal_input').val();
            subtotal = parseFloat(subtotal).toFixed(2);
            if(!isNaN(subtotal)){
                grandTotal += parseFloat(subtotal);
            }
        }
    });

    grandTotal = grandTotal;
    $('#grand_total').text(grandTotal+' Tk.');


    $('#total_amt_input').val(grandTotal);
    $('#total_amt').val(grandTotal);
    
}
</script>
@endpush
