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
        <h1>Member Ledger</h1>

        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Mess Management</a></li>
            <li><a href="#">Report</a></li>
            <li class="active">Member Ledger</li>
        </ol>
    </section>

    @php

    $start = isset($_GET['start']) ? date('Y-m-d', strtotime($_GET['start'])) : date('Y-m-01');
    $end = isset($_GET['end']) ? date('Y-m-d', strtotime($_GET['end'])) : date('Y-m-t');

    @endphp

    <!-- Main content -->
    <section id="Note" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="col-md-6">
                            <h3 class="box-title">Member Ledger</h3>
                        </div>
                        <form action="" method="GET" id="">
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
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                                <tr class="bg-blue">
                                    <th style="width:8%;" class="text-center">SL#</th>
                                    <th style="width:40%;" class="text-center">User</th>
                                    <th style="width:14%;" class="text-center">Total Meals</th>
                                    <th style="width:19%;" class="text-right">Total Price</th>
                                    <th style="width:19%;" class="text-right">Balance</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $g_total_meal = 0;
                                $g_total_meal_cost = 0;
                                $g_total_balance = 0;
                                @endphp

                                @foreach($users as $key => $user)
                                    @php
                                        $g_total_meal += count($user->meals->whereBetween('meal_date', [$start, $end]));
                                        $g_total_meal_cost += $user->meal_cost($start, $end);
                                        $g_total_balance += ($user->user_account) ? $user->user_account->acc_balance : 0;
                                    @endphp
                                <tr>
                                    <td class="text-center">{{$key + 1}}</td>
                                    <th class="text-center">{{$user->name}}</th>
                                    <td class="text-center">{{count($user->meals->whereBetween('meal_date', [$start, $end]))}}</td>
                                    <th class="text-right">{{$user->meal_cost($start, $end)}} <small>Tk.</small></th>
                                    <td class="text-right">{{$user->user_account ? $user->user_account->acc_balance : 0}} <small>Tk.</small></td>
                                </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr class="bg-gray">
                                    <th class="text-right" colspan="2"> Grand Total</th>
                                    <th class="text-center">{{ $g_total_meal }}</th>
                                    <th class="text-right">{{ number_format($g_total_meal_cost,2) }} <small>Tk.</small></th>
                                    <th class="text-right">{{ number_format($g_total_balance,2) }} <small>Tk.</small></th>
                                </tr>
                            </tfoot>
                        </table>
                        <br>
                        <div class="col-xs-12">
                            <form action="{{route('meals.meal_report_print')}}" target="_blank">
                                <input type="hidden" name="start" value="{{$start}}">
                                <input type="hidden" name="end" value="{{$end}}">      
                                <button type="submit" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                            </form>
                        </div>
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
})
</script>
@endpush