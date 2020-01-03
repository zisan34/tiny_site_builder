@extends('admin.layouts.app')
@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ URL::asset('backend/plugins/iCheck/all.css') }}">
@endpush

@push('css_custom')

@endpush

@section('content')

<section class="content-header">
    <h1>Meal Entry</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('meals.index') }}">Meals</a></li>
        <li class="active">Create</li>
    </ol>
</section>

<!-- Main content -->

<section id="product_details" class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <form action="{{route('meals.store')}}" method="post">
                    @csrf
                    <div class="box-header with-border">
                        <h3 class="box-title">User: <strong>{{$user->name}}</strong></h3>
                        <input type="hidden" id="user" name="user" value="{{$user->id}}">
                    </div>
                    <div class="box-header">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="meal_date">Date : <span class="text-red">*</span></label>
                                <input type="text" class="form-control datepicker" id="meal_date" name="meal_date" value="{{ date('d-m-Y') }}" title="" placeholder="" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="meal_type">Meal Type : <span class="text-red">*</span></label>
                                <select class="form-control" id="meal_type" name="meal_type" required>
                                    <option value="">--Select Type--</option>
                                    @foreach($food_menu_categories as $category)
                                    <option data-id="{{$category->id}}" value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="user">Credit Amount :</label>
                                <input type="text" class="form-control text-right" value="{{$user->user_account ? $user->user_account->acc_balance : 0}} Tk" placeholder="" style="font-size: 20px; color: green; font-weight: bold;" readonly />
                                <input type="hidden" id="user_credit" value="{{$user->user_account ? $user->user_account->acc_balance : 0}}"/>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="user">Balance :</label>
                                <input type="text" class="form-control text-right user_balance" value="{{$user->user_account ? $user->user_account->acc_balance : 0}} Tk" readonly />
                                <input type="hidden" id="user_balance" value="{{$user->user_account ? $user->user_account->acc_balance : 0}} Tk" readonly />
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-body table-responsive">
                        @csrf
                        <table id="DetailsTable" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-blue">
                                    <th class="text-center"></th>
                                    <th class="text-center">Food Menu</th>
                                    <th class="text-center">Note</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center" style="min-width: 100px;">Rate</th>
                                    <th class="text-center" style="min-width: 100px;">Total</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr class="bg-gray">
                                    <th colspan="5" class="text-right">Grand Total</th>
                                    <th class="text-right" id="grand_total">0.0</th>
                                    <input type="hidden" id="grand_total_input" value="">
                                    <th></th>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">Balance :</td>
                                    <td>
                                        <input type="text" class="form-control text-right user_balance" value="{{$user->user_account ? $user->user_account->acc_balance : 0}} Tk" readonly />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">Paid Amount:</td>
                                    <td>
                                        <input class="form-control text-right" type="number" id="paid_amt" name="paid_amt" value="0" min="0">                                        
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="add_box_buttons text-right">
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ route('meals.index') }}" class="btn btn-info pull-left">Back</a>
                        {{-- <button type="button" class="btn btn-info">Back</button> --}}

                        <input type="submit" id="puchase_submit" class="btn btn-success pull-right" value="Save">
                        {{-- <button type="submit" class="btn btn-success pull-right">Save</button> --}}

                        <input type="hidden" id="TotalRow" name="TotalRow" value="1">
                        <input type="hidden" id="total_amt" name="total_amt" value="0">
                        {{-- <input type="hidden" id="TotalRow" name="TotalRow" value="1"> --}}

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Hidden row for append at plus button event -->
<div style="display: none;">
    <table id="hiddenTable">
        <tfoot id="appendRow">
            <tr class="tr-row">
                <td class="text-center" style="width: 50px;">
                    <button type="button" class="btn bg-red btn-sm rowRemove"><i class="fa fa-remove"></i></button>
                </td>

                <td class="text-center" style="width: 30%">
                    <select class="form-control select2 item_ddl" name="food_menus[]" required="required" aria-hidden="true" style="width: 100%;">
                        <option value="" selected="selected">--- Select ---</option>
                        @foreach ($food_menus as $food_menu)
                            <option data-menu-rate="{{ $food_menu->price }}" value="{{ $food_menu->id }}" >{{ $food_menu->name }}</option>
                        @endforeach
                    </select>
                </td>

                <td class="text-center" style="width: 20%">
                    <input type="text" class="form-control text-center note" name="note[]" value="" placeholder="">
                </td>

                <td class="text-center">
                    <input type="number" class="form-control text-right quantity" name="quantity[]" required="required" value="" placeholder="0">
                </td>

                <td class="text-center">
                    <input type="number" class="form-control text-right rate" required="required" name="rate[]" value="" title="Rate" readonly  placeholder="Rate">
                </td>

                <td class="text-center">
                    <input type="number" class="form-control text-right subtotal" required="required" name="subtotals[]" value="" title="Total" placeholder="0.00">
                </td>

                <td class="text-center" style="width: 50px;">
                    <button type="button" class="btn bg-purple btn-sm rowAdd"><i class="fa fa-plus-square"></i></button>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<!-- ********END**********-->

@endsection

@push('js_lib')
    <!-- Select2 -->
    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
@endpush

@push('js_custom')

<script>
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
        todayBtn: true,
        todayHighlight: true
    });
    //initial grand total
    var grandTotal = 0;
    //initial load
    var totalRow = 1;
    var appendRow = $("#hiddenTable tfoot#appendRow").html();
    $("#DetailsTable tbody").append(appendRow);
    //Initialize Select2 Elements
    $('.select2').select2();

    // Initial Focused field
    // $('#supplier_ddl').select2('open');

    //For add a new row
    $(document).on("click", '.rowAdd', function(e) {
        e.preventDefault();
        var row = $(this).parent().parent();

        // if (totalRow < 15){
        $("#DetailsTable tbody").append(appendRow);
        //Initialize Select2 Elements
        $('.select2').select2();

        totalRow = $('#DetailsTable tbody tr').length;
        $("#TotalRow").attr("value", totalRow);
        // }

        row.find(".rowAdd").hide();

    });

    //For remove a row
    $(document).on("click", '.rowRemove', function(e) {
        e.preventDefault();
        var row = $(this).parent().parent();
        var totalRow = $('#DetailsTable tbody tr').length;

        if (totalRow > 1) {
            row.remove();

            totalRow = $('#DetailsTable tbody tr').length;
            $("#TotalRow").attr("value", totalRow);
        }
        var last_row = $("#DetailsTable > tbody > :last-child");
        last_row.find(".rowAdd").show();
        // console.log(aaa);

        setGrandTotal();
    });
    $(document).on('keyup change', '.rate' ,function(){
        var row = $(this).parent().parent();

        setSubTotal(row);
        setGrandTotal();
    });

    $(document).on('keyup', '#paid_amt', function(){
        setDue();
    });



    $(document).on('change', '#meal_type', function(e) {
        e.preventDefault();

        var thisValue = $(this).find(':selected').attr('data-id');

        $('#item_ddl').empty().append('<option value="" selected>Select Menu</option>');

            $.ajax({
                url: "{{route('food_menu.get')}}",
                type:"POST",
                data: {
                    'category_id' : thisValue 
                },
                dataType: 'JSON',
                success:function(data){
                    $.each(data, function(i, d) {
                        $('#item_ddl').append('<option value="' + d.id + '">' + d.title + '</option>');
                    });
                },error:function(error){
                    console.log(error);
                    alert("error!!!!");
                }
            }); //end of ajax
    });    

    $(document).on('keyup change', '.quantity' ,function(){
        var row = $(this).parent().parent();
        var thisValue = $(this).val();

        setSubTotal(row);
        setGrandTotal();
    });

    $(document).on("change", ".item_ddl", function () {
        // var thisValue = $(this).val();

        var item_price = $(this).children("option:selected").attr('data-menu-rate');
        // alert(item_price);
        var thisRow = $(this).parent().parent();

        thisRow.find($('.rate')).val(item_price);
        thisRow.find($('.quantity')).val(1);

        setSubTotal(thisRow);
        setGrandTotal();
    });

});

function setSubTotal(row) {
    // alert('test');
    var quantity = row.find('.quantity').val();
    var rate = row.find('.rate').val();
    var subtotal = quantity*rate;
    row.find('.subtotal').val(subtotal.toFixed(2));
}

function setDue() {
    var paid_amt = parseFloat($('#paid_amt').val()) || 0;
    var user_credit = parseFloat($('#user_credit').val()) || 0;
    var grand_total = parseFloat($('#grand_total_input').val()) || 0;

    var new_balance = parseFloat(user_credit) - parseFloat(grand_total) + parseFloat(paid_amt);


    $('.user_balance').val((new_balance.toFixed(2)) + 'Tk');
}



function setGrandTotal() {
    var rows = $("#DetailsTable > tbody > tr.tr-row");
    console.log(rows);
    var grandTotal = 0.00;
    $(rows).each(function(){
        var cls = $(this).attr('class');
        if(cls == 'tr-row'){
            var subtotal = $(this).find('.subtotal').val();
            subtotal = parseFloat(subtotal);
            if(!isNaN(subtotal)){
                grandTotal += subtotal;
            }
        }
    });

    grandTotal = grandTotal.toFixed(2);
    $('#grand_total').text(grandTotal);

    var user_credit = $('#user_credit').val();
    $('.user_balance').val((parseFloat(user_credit) - parseFloat(grandTotal)) + 'Tk');

    $('#total_amt').val(grandTotal);
    $('#grand_total_input').val(grandTotal);
    
    setDue();
}

</script>
@endpush
