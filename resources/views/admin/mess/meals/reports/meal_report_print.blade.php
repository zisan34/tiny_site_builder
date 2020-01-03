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
        <section id="Note" class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="col-md-12 text-center">
                                <h4 class="box-title">Meal List</h4>
                                <hr>
                                <strong>Date : {{date('d-m-Y', strtotime($start))}} <b>to</b> {{date('d-m-Y', strtotime($end))}}</strong>
                            </div>
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
