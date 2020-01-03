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
        <h1>Daily Meal Budget</h1>

        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Mess Management</a></li>
            <li><a href="#">Report</a></li>
            <li class="active">Meal Budget</li>
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
                            <h3 class="box-title">Daily Meal Budget</h3>
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
                                    <th class="text-center">Date</th>
                                    <th class="text-left">Menu</th>
                                    <th class="text-center">Breakfast</th>
                                    <th class="text-center">Lunch</th>
                                    <th class="text-center">Dinner</th>
                                    <th class="text-center">Extra</th>
                                    <th class="text-center">Total Meal</th>
                                    <th class="text-center">Total Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td rowspan="3" class="text-center">02-11-2019</td>
                                    <td class="text-left">Khichuri</td>
                                    <td class="text-center">50</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">210</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Khichuri with Egg</td>
                                    <td class="text-center">50</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">210</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Fried Egg</td>
                                    <td class="text-center">50</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">210</td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr class="bg-gray">
                                    <th colspan="2"> Total</th>
                                    <th>210</th>
                                    <th>210</th>
                                    <th>255</th>
                                    <th>265</th>
                                    <th>80</th>
                                    <th>810</th>
                                </tr>
                            </tfoot>
                        </table>
                        <br>
                        <div class="col-xs-12">
                            <form action="{{route('meals.meal_budget_print')}}" target="_blank">
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