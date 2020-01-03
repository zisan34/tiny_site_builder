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
        <h1>Mess Management</h1>

        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Mess Management</a></li>
            <li class="active">Transaction List</li>
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
                        <div class="col-md-12">
                            <form action="" method="GET" id="">
                            <h3 class="col-md-3 box-title">Transaction List</h3>
                                <div class="col-md-5">
                                    <div class="input-daterange input-group">
                                        <input type="text" class="input-sm form-control" name="start" value="{{date('d-m-Y', strtotime($start))}}" />
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="input-sm form-control" name="end" value="{{date('d-m-Y', strtotime($end))}}" />
                                    </div>
                                </div>
                                <div class="col-md-1">                            
                                    <button  type="submit" class="btn btn-sm btn-info" >Search</button>
                                </div>
                            <a href="javascript:void(0)" id="createNewPayment" class="btn bg-green btn-sm pull-right "> <i class="fa fa-plus" style="font-size:12px;"></i> Add New Payment</a>
                            </form>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead style="background-color: #f1f1f1">
                                <tr class="bg-blue">
                                    <th style="width: 15px;">SL#</th>
                                    <th class="text-center" style="width: 65px;">Date</th>
                                    <th class="text-center">User</th>
                                    <th class="text-center" style="width: 40px;">Type</th>
                                    <th class="text-right" style="width: 120px;">Amount</th>
                                    <th class="text-center">Note</th>
                                    <th class="text-center" style="width: 60px;">Status</th>
                                    @can('confirm payment')
                                    <th class="text-center" style="width: 80px;">Action</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($user_transactions as $key => $transaction)
                            <tr>
                                <td class="text-center">{{$key + 1}}</td>
                                <td class="text-center">{{date('d-m-Y', strtotime($transaction->transaction_date))}}</td>
                                <th class="text-center">{{$transaction->user->name}}</th>
                                <td class="text-center {{$transaction->transaction_type == 1 ? 'bg-green' : 'bg-red'}}">{{$transaction->transaction_type == 1 ? 'In' : 'Out'}}</td>
                                <th class="text-right">{{$transaction->amount}} Tk.</th>
                                <td class="text-center">{{$transaction->note}}</td>
                                <th class="text-center {{$transaction->confimation == 1 ? 'text-success' : 'text-warning'}}"> 
                                    @if($transaction->confimation == 1)
                                        Confirmed
                                    @else
                                        Pending
                                        @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Mess Manager')) <a class="btn btn-xs btn-info" href="{{route('user-transaction.confirm_payment', $transaction->id)}}">Confirm</a> 
                                        @endif</th>
                                    @endif
                                @can('confirm payment')
                                <td class="text-center">
                                    @if($transaction->confimation == 0)
                                    <a href="{{ route('user-transaction.edit',$transaction->id) }}" class="btn btn-xs btn-info edit_transaction" data-id="{{$transaction->id}}" data-user_id="{{$transaction->user->id}}" data-user_balance="{{$transaction->user->user_account ? $transaction->user->user_account->acc_balance : 0}}" ><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('user-transaction.destroy',$transaction) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $transaction->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"
                                    ><i class="fa fa-trash"></i></a>
                                    <form method="POST" id="delete-form-{{ $transaction->id }}" action="{{ route('user-transaction.destroy', $transaction->id) }}" style="display:none">@csrf @method('DELETE')</form>
                                    
                                    @else

                                    <a href="#" disabled class="btn btn-xs btn-info" ><i class="fa fa-edit"></i></a>
                                    <a href="#" disabled class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                                    @endif
                                </td>
                                @endcan
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


    <div class="modal modal fade" id="payment_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('user-transaction.make_payment')}}" id="payment_form" method="post">
                    @csrf
                    <input type="hidden" name="user_id" id="payment_user_id" value="">
                    <input type="hidden" name="transaction_id" id="transaction_id" value="">

                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="modal_user_name"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="form-group col-md-6">
                                    <label for="pay_date"> Date:<small style="color:red">*</small> </label>
                                    <label id="pay_date-error" class="error" for="pay_date"></label>
                                    <input required class="form-control datepicker" type="text" id="pay_date" name="pay_date" readonly value="{{date('d-m-Y')}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user"> User: <small style="color:red">*</small> </label>
                                    <label id="user-error" class="error" for="user"></label>
                                    <select name="user" id="user_ddl" required class="select2 form-control" style="width: 100%;">
                                        <option value="">--Select User--</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}" data-user_balance="{{$user->user_account ? $user->user_account->acc_balance : 0}}" @if(Auth::user()->hasRole('Mess Member') && Auth::id() == $user->id) selected @endif>{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="balance_amount"> Balance Amount: </label>
                            <label id="balance_amount-error" class="error" for="balance_amount"></label>
                            <input required class="form-control" type="text" id="balance_amount" name="balance_amount" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="payment_amount"> Payment Amount:<small style="color:red">*</small> </label>
                            <label id="payment_amount-error" class="error" for="payment_amount"></label>
                            <input class="form-control text-right" required type="number" id="payment_amount" name="payment_amount" value="" min="0">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="reference"> Reference :</label>
                            <label id="reference-error" class="error" for="reference"></label>
                            <input type="text" rows="1" id="reference" name="reference" class="form-control" placeholder="Ex. Cash/Bkash">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
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


        $(document).on('click', '#createNewPayment', function(){
            $('#payment_modal').modal('show');
        });
            // pay_date
            // user
            // balance_amount
            // payment_amount
            // reference
        $(document).on('click', '.edit_transaction', function(e){
            e.preventDefault();
            var transaction_id = $(this).attr('data-id');
            var user_balance = $(this).attr('data-user_balance');
            var user_id = $(this).attr('data-user_id');
            $.get("{{ route('user-transaction.index') }}" +'/' + transaction_id +'/edit', function (data) {
                $('#transaction_id').val(transaction_id);
                $('#pay_date').val($.datepicker.formatDate('dd-mm-yy', new Date(data.transaction_date)));
                $('#user_ddl option[value="'+user_id+'"]').prop('selected', true);
                $('#balance_amount').val(user_balance);
                $('#reference').val(data.reference);
                $('#payment_amount').val(data.amount);

                $('.select2').select2();
                $('.datepicker').datepicker('update');
            });
            $('#payment_modal').modal('show');
        });

        $(document).on('change', '#user_ddl', function(){
            var balance = $(this).find(':selected').attr('data-user_balance');
            $('#balance_amount').val(balance);
        });

        // Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
        });

        $('.input-daterange').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
        });

        $('.select2').select2();
    });
</script>
@endpush

