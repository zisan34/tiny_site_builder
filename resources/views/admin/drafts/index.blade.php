@extends('admin.layouts.app')



@push('css_lib')

    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/all.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">



@endpush



@section('content')

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            Draft Management

            <small>available drafts</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="#">Draft Management</a></li>

            <li class="active">Draft List</li>

        </ol>

    </section>



    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-xs-12">



                <div class="box">

                    <div class="box-header">

                        <h3 class="box-title">Draft List</h3>
                        @can('add drafts')
                        <a href="{{ route('drafts.create') }}" class="btn btn-info btn-xs pull-right">Create a Draft</a>
                        @endcan

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">

                            <thead>

                            <tr>

                                <th>SL#</th>

                                <th>Reference</th>

                                <th width="15%">Draft Title</th>

                                <th>Volume No</th>

                                <th>Branch</th>

                                <th>Type</th>

                                <th>Assigned To</th>

                                <th>Process Status</th>

                                <th>Creator</th>

                                <th>Last Modified</th>

                                {{-- <th>Status</th> --}}

                                <th style="width: 120px !important;" class="text-center">Action</th>

                            </tr>

                            </thead>

                            <tbody>

                            @foreach($drafts as $key=>$draft)

                            <tr>

                                <td class="text-center">{{ $key + 1 }}</td>

                                <td>{{ $draft->reference }}</td>

                                <td class="draft_title">{{ $draft->draft_title }}<br>(v-{{ $draft->version_number }})</td>

                                <td class="text-center">{{ $draft->volume_no }}</td>

                                <td>{{ $draft->branch->name }}</td>

                                <td>{{ $draft->draft_type->name }}</td>

                                <td>

                                    @foreach($draft->users as $user)

                                        {{$user->name}}, 

                                    @endforeach

                                </td>

                                <td>

                                    {{$draft->process_stat()}}

                                </td>

                                <td>{{ $draft->user->name }}</td>

                                <td class="text-center">{{ date("d-m-y", strtotime($draft->updated_at))}}</td>

                                {{-- <td>{{ $draft->status }}</td> --}}

                                <td class="text-center">

                                    <label class="">

                                          <div class="icheckbox_flat-green @if($draft->status == 1) checked @endif " aria-checked="@if($draft->status == 1) true @endif " aria-disabled="false" style="position: relative;"><input type="checkbox" @if($draft->status == 1) checked @endif class="flat-red active_status" data-id="{{$draft->id}}"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>

                                    </label>

                                    @if($draft->file_type == 1)

                                    <a href="#" class="btn btn-xs btn-warning btnView view" data-id="{{$draft->id}}" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></a>

                                    @elseif($draft->file_type == 2)<a href="{{URL::asset($draft->draft_details)}}" class="btn btn-xs btn-warning btnView" download><i class="fa fa-download"></i></a>

                                    @endif  

                                    <a href="{{ route('drafts.edit',$draft) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>

                                    <a href="{{ route('drafts.destroy',$draft) }}" class="btn btn-xs btn-danger" onclick="if(confirm('Are you really want to delete this?')){

                                        event.preventDefault();

                                        document.getElementById('delete-form-{{ $draft->id }}').submit();

                                        }else{

                                        event.preventDefault();

                                        }"

                                    ><i class="fa fa-trash"></i></a>

                                    <form method="POST" id="delete-form-{{ $draft->id }}" action="{{ route('drafts.destroy', $draft->id) }}" style="display:none">@csrf @method('DELETE')</form>

                                </td>

                            </tr>

                            @endforeach

                            </tbody>



                            <!-- <tfoot>

                            <tr>

                                <th>SL#</th>

                                <th>Creator</th>

                                <th>Draft Title</th>

                                <th>Draft Type</th>

                                <th>Version</th>

                                <th>Assigned To</th>

                                <th>Last Modified</th>

                                <th>Status</th>

                                <th>Action</th>

                            </tr>

                            </tfoot> -->

                        </table>

                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->

            </div>

            <!-- /.col -->

        </div>

        <!-- /.row -->

    </section>

    <!-- /.content -->

    <!-- Modal -->

    <div id="myModal" class="modal fade" role="dialog">

        <div class="modal-dialog  modal-lg ">



            <!-- Modal content-->

            <div class="modal-content">

                <div class="modal-header bg-green">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Draft Title</h4>

                </div>

                <div class="modal-body text-center">

                    <table width="100%">

                        <thead>

                            <th></th>

                            <th></th>

                            <th></th>

                            <th></th>

                        </thead>

                        <tbody>                            

                            <tr> 

                                <td><h4 class="pull-letf">Reference No: <small><span id="ref_no"></span></small></h4></td>

                                <td><h4 class="pull-letf">Volume No: <small><span id="vol_no"></span></small></h4></td>

                                <td><h4 class="pull-letf">Branch: <small><span id="branch"></span></small></h4></td>

                                <td><h4 class="pull-letf">Status: <small><span id="status"></span></small></h4></td>

                            </tr>

                        </tbody>

                    </table>

                    <h2>Draft Details</h2>

                    <p class="modal-details">Draft Content here...</p>

                </div>



                <div class="modal-footer">



                    <form action="{{route('drafts.review')}}" method="post">                        

                        @csrf

                        <input type="hidden" name="id" class="draft_id" value="">

                        <div class="row text-left">

                            <div class="col-md-10">

                                <div class="form-group">

                                    <div class="col-sm-4">                            

                                        <label for="status">@if(Auth::user()->can('approve drafts')) Approve @else Send For approval : @endif<small style="color:red">*</small></label>

                                    </div>



                                    <div class="col-sm-8" @if(Auth::user()->can('approve drafts')) style="display: none;" @endif>                            

                                        <select class="form-control select2" multiple="multiple" data-placeholder="Select User" id="sent_to" name="sent_to[]" autocomplete="false" style="width: 100%;">

                                                <option value="">--Select Approver--</option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <input type="submit" class="btn btn-success review_submit" value="@if(Auth::user()->can('approve drafts')) Approve @else Send @endif">

                            </div>

                        </div>

                    </form>

                </div>

            </div>



        </div>

    </div>

@endsection



@push('js_lib')

    <!-- DataTables -->

    <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script src="{{asset('backend/plugins/iCheck/icheck.min.js') }}"></script>

    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>



@endpush



@push('js_custom')

<script>

    $(function () {

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $('body').addClass('sidebar-collapse');



        //Initialize Select2 Elements

        $('.select2').select2();



        $('#example1').DataTable();

        $('#example2').DataTable({

          'paging'      : true,

          'lengthChange': false,

          'searching'   : false,

          'ordering'    : true,

          'info'        : true,

          'autoWidth'   : false

        });



        $(document).on('click', '.btnView', function() {

            var thisValue = $(this).find('.draft_title').html();

            // alert(thisValue);



        });



        

        //iCheck for checkbox and radio inputs

            //Flat red color scheme for iCheck

        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({

          checkboxClass: 'icheckbox_flat-green',

          radioClass   : 'iradio_flat-green'

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

        $(".view").click(function(){

            var id = $(this).attr("data-id");

            $.ajax({

                url: "{{route('drafts.view')}}",

                type:"POST",

                data: { 'id' : id },

                dataType: 'JSON',

                success:function(data){



                    $('.modal-title').html(data.title);

                    $('.modal-details').html(data.content);

                    $('.draft_id').val(data.id);

                    $('#ref_no').text(data.ref_no);

                    $('#vol_no').text(data.vol_no);

                    $('#branch').text(data.branch);

                    $('#status').text(data.status);

                    if(data.status == "Approved")

                    {

                        $('.modal-footer').html('');

                    }

                    $('#myModal').modal('show');

                    $.each(data.users, function(i, d) {

                        $('#sent_to').append('<option value="' + d.id + '">' + d.name + '</option>');

                    });

                },error:function(e){

                    console.log(e);

                }

            }); //end of ajax

        });

    function active_action(id) {

        $.ajax({

            url: "{{route('drafts.toogle')}}",

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

    });



</script>

@endpush

