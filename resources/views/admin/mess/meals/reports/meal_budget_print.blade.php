<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Meal Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/AdminLTE.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
    <div class="container-fluid">
        <!-- Main content -->

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
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover data-table">
                                <thead>
                                    <tr class="bg-blue">
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Breakfast</th>
                                        <th class="text-center">Lunch</th>
                                        <th class="text-center">Dinner</th>
                                        <th class="text-center">Guest</th>
                                        <th class="text-center">Total Meal</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="text-center">02-11-2019</td>
                                        <td class="text-center">50</td>
                                        <td class="text-center">70</td>
                                        <td class="text-center">70</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">210</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">03-11-2019</td>
                                        <td class="text-center">50</td>
                                        <td class="text-center">70</td>
                                        <td class="text-center">65</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">205</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">04-11-2019</td>
                                        <td class="text-center">50</td>
                                        <td class="text-center">50</td>
                                        <td class="text-center">70</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">190</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">05-11-2019</td>
                                        <td class="text-center">60</td>
                                        <td class="text-center">65</td>
                                        <td class="text-center">60</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">205</td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr class="bg-gray">
                                        <th class="text-center"> Total</th>
                                        <th class="text-center">210</th>
                                        <th class="text-center">255</th>
                                        <th class="text-center">265</th>
                                        <th class="text-center">80</th>
                                        <th class="text-center">810</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>

    </div>
</body>
</html>
