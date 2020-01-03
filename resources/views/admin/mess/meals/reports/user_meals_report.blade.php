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
        <h1>Meal Report</h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Meal</a></li>
            <li class="active">Meal Report</li>
        </ol>
    </section>

    @php

    $start = isset($_GET['start']) ? date('Y-m-d', strtotime($_GET['start'])) : date('Y-m-01');
    $end = isset($_GET['end']) ? date('Y-m-d', strtotime($_GET['end'])) : date('Y-m-t');
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';

    @endphp

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="col-md-3">
                            <h3 class="box-title">Meal List</h3>
                        </div>
                        <form action="{{route('meals.user_meal_report')}}" method="GET" id="">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control select2" name="user_id" required>
                                        <option value="">Select User</option>
                                        @foreach($users as $opt_user)
                                        <option value="{{$opt_user->id}}" @if($user_id == $opt_user->id) selected @endif>{{$opt_user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="input-daterange input-group">
                                    <input type="text" class="input-sm form-control" name="start" value="{{date('d-m-Y', strtotime($start))}}" />
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" name="end" value="{{date('d-m-Y', strtotime($end))}}" />
                                </div>
                            </div>
                            <div class="col-md-1">                            
                                <button style="padding: 6px 20px; margin: 0; margin-bottom: 4px;"  type="submit" class="btn btn-sm btn-info" >Search</button>
                            </div>
                        </form>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive">                        
                    @if(((isset($meals)) && count($meals)>0))
                    <div class="text-center">
                        <h3>{{$user->name}}</h3>
                        Date :<strong> {{date('d-m-Y', strtotime($start))}} </strong>to<strong> {{date('d-m-Y', strtotime($end))}}</strong>
                    </div>
                        <table class="table table-bordered table-striped table-hover">
                            <thead style="background-color: #f1f1f1">
                                <tr class="bg-blue">
                                    <th style="vertical-align: middle;" rowspan="2">Date</th>
                                    <th style="vertical-align: middle;" rowspan="2">Meal No</th>
                                    <th colspan="4">Menu Details</th>
                                </tr>
                                <tr class="bg-blue">
                                    <th class="text-center">Menu</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-right">Rate</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>

                            <tbody id="meal_details_table">

                                @php            
                                    $grandTotal = 0;
                                    $prev_date = '';
                                    $curr_date = '';
                                @endphp

                                @foreach($meals as $key => $meal)
                                    @php
                                        $subtotal = 0;
                                        $curr_date = date('d-m-Y', strtotime($meal->meal_date));
                                    @endphp

                                    @foreach($meal->meal_children as $child_key => $meal_child)

                                        @php
                                        if($child_key > 0)
                                        {
                                            $meal_type = '';
                                            $date = '';
                                        }
                                        else
                                        {
                                            $meal_type = $meal->meal_type;
                                            $date = date('d-m-Y', strtotime($meal->meal_date));
                                        }
                                        if($prev_date == $curr_date)
                                        {
                                            $date = '';
                                        }
                                        $price = $meal_child->item->price * $meal_child->quantity;
                                        @endphp


                                        <tr> 
                                            <td class="text-center"> {{$date}}</td> 
                                            <td class="text-center"> {{$meal_type}}</td>  
                                            <td class="text-center"> {{$meal_child->item->name}}</td>  
                                            <td class="text-center"> {{$meal_child->quantity}}</td>  
                                            <td class="text-right"> {{$meal_child->item->price}} Tk.</td>  
                                            <td class="text-right">  {{$price}} Tk.</td>  
                                        </tr>
                                        @php
                                            $grandTotal += $price;
                                            $subtotal += $price;
                                        @endphp
                                    @endforeach
                                    <tr style="font-style: italic; background-color: #f4f4f4;">
                                        <th class="text-right" colspan="5">Sub Total</th>
                                        <th class="text-right">{{$subtotal}} Tk.</th>
                                    </tr>

                                    @php $prev_date = $curr_date; @endphp

                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr class="bg-gray">                
                                    <td colspan="5" class="text-right">
                                        <strong>Grand Total :</strong>
                                    </td>
                                    <td class="text-right"><strong id="grand_total_div">{{$grandTotal}} Tk.</strong></td>
                                </tr>

                            </tfoot>
                        </table>
                        <br>
                        <div class="col-xs-12">
                            <form method="POST" target="_blank" action="{{route('meals.user_meal_report_print')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user_id}}">
                                <input type="hidden" name="start" value="{{$start}}">
                                <input type="hidden" name="end" value="{{$end}}">
                                <button type="submit" class="btn btn-default"><i class="fa fa-print"></i> Print</button>

                            </form>
                        </div>
                    @elseif(isset($msg))
                    <div class="col-md-12">                        
                        <h1>{{$msg}}</h1>
                    </div>
                    @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
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
    $('.input-daterange').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
    });
    $('.select2').select2();
});
</script>
@endpush