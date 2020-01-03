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
        


        <div class="col-md-12 text-center">
            <h1>{{$user->name}}</h1>
            Date :<strong> {{date('d-m-Y', strtotime($start))}} </strong>to<strong> {{date('d-m-Y', strtotime($end))}}</strong>
        </div>


        <table class="table table-bordered table-striped table-hover">
            <thead style="background-color: #f1f1f1">
                <tr class="bg-blue">
                    <th class="text-center" style="vertical-align: middle;" rowspan="2">Date</th>
                    <th class="text-center" style="vertical-align: middle;" rowspan="2">Meal No</th>
                    <th colspan="4" class="text-center">Menu Details</th>
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
    </div>
</body>
</html>
