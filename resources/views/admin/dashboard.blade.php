@extends('admin.layouts.app')

@push('css_lib')
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{URL::asset('backend/plugins/timepicker/bootstrap-timepicker.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('backend/plugins/fullcalendar/fullcalendar.css')}}">
<link rel="stylesheet" href="{{ URL::asset('backend/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" />
<!-- daterange picker -->
<link rel="stylesheet" href="{{URL::asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{URL::asset('backend/dist/css/custom.css')}}" media="all">
@endpush




@push('css_custom')
<style>
    .home_Quote {
        position: relative;
        border: 1px solid #545454;
        margin-bottom: 20px;
        border-radius: 50px;
        padding-right: 40px;
        color: #545454;
        margin-right: 15px;
        margin-left: 15px;
    }

    .home_Quote button {
        position: absolute;
        width: 39px;
        height: 95%;
        right: 1px;
        top: 1px;
        color: #00a65a;
        border-radius: 0px 50px 50px 0px;
        font-size: 18px;
        background-color: transparent;
    }
    .disabled-style {background-color: #eee; cursor: not-allowed; color: #000;}
</style>
@endpush

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        {{-- Welcome Message --}}

        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-8 home_Quote">
                <marquee>
                    <h1 style="font-style: italic; font-size: 26px; height: 50px; line-height: 60px; margin:0px;"></h1>
                </marquee>
                <button href="#" class="btn" id="edit_quote"><i class="fa fa-pencil"></i></button>
            </div>
            <div class="col-md-2"></div>
        </div>
        
        
        
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$visitors_today}}</h3>
                        <p>Visitors Today</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$visitors_this_month}}</h3>
                        <p>Visitors This month</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$hits_today}}</h3>
                        <p>Total hits Today</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-globe"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{$hits_this_month}}</h3>
                        <p>Total Hits This Month</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-globe"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <div class="row">
            <!-- Left col -->

            <section class="col-lg-8 col-lg-offset-2 connectedSortable">

                <!-- TO DO List -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">To Do List</h3>
                        <div class="box-tools pull-right">
                            <ul class="pagination pagination-sm inline">
                                <li class="enabled-prevbtn"><a href="#" class="todo-prev" id="todo-prev">&laquo;</a></li>
                                <li class="disabled-prevbtn" style="display: none;"><span class="disabled-style">&laquo;</span></li>

                                <li class="enabled-nextbtn"><a href="#" class="todo-next" id="todo-next">&raquo;</a></li>
                                <li class="disabled-nextbtn" style="display: none;"><span class="disabled-style">&raquo;</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="todo box-body">
                        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                        <ul class="todo-list user-todo-list">
                            <li>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer clearfix no-border">
                        <button type="button" id="createNewTask" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                    </div>
                </div>
                <!-- /.box -->
            </section>


            {{-- 
            <section class="col-lg-6 connectedSortable">
                <!-- Map box -->
                <div class="box box-solid bg-light-blue-gradient">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                                <i class="fa fa-calendar"></i></button>
                            <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->

                        <i class="fa fa-map-marker"></i>

                        <h3 class="box-title">
                                Visitors
                              </h3>
                    </div>
                    <div class="box-body">
                        <div id="world-map" style="height: 250px; width: 100%;"></div>
                    </div>
                    <!-- /.box-body-->
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div id="sparkline-1"></div>
                                <div class="knob-label">Visitors</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div id="sparkline-2"></div>
                                <div class="knob-label">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center">
                                <div id="sparkline-3"></div>
                                <div class="knob-label">Exists</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->
            </section> 
            --}}



            <!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-8 col-md-offset-2">
                <!-- Calendar -->
                <div class="box box-solid" style="border: 1px solid #999;">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">
                            Calendar
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right">
                            <!-- button with a dropdown -->
                            <button type="button" class="btn btn-sm btn-success" id="add_event">Add Event</button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                            <div id="fullcalendar"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                        <div class="row">
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>

    <!-- /.content -->


    <div id="events_form_modal" class="modal fade " data-backdrop="static" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add Event</h4>
                </div>
                <form action="" method="post" id="events_form">
                    <input type="hidden" id="event_id" name="event_id" value="">
                    <div class="modal-body">
                        <div class="row">
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <label for="daterange">
                                Date : <small style="color:red">*</small>
                            </label>                                
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="event_start" id="event_start" value="{{ date('d-m-Y') }}" readonly="readonly" style="padding: 17px 0px;">
                                <span class="input-group-addon">To</span>
                                <input required="required" type="text" class="input-sm form-control" name="event_end" id="event_end" value="{{ date('d-m-Y') }}" readonly="readonly" style="padding: 17px 0px;">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="event_title">Event Title : <small style="color:red">*</small></label>
                                <label id="event_title-error" class="error" for="event_title"></label>
                                <input type="text" class="form-control" id="event_title" name="event_title" value="" placeholder="Event Title" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="event_color">Color:</label>
                                <label id="event_color-error" class="error" for="event_color"></label>
                                <input type="text" id="event_color" name="event_color"  class="form-control my-colorpicker1 colorpicker-element ">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="event_description">Description :</label>
                                    <label id="event_description-error" class="error" for="event_description"></label>
                                    <textarea type="text" class="form-control" id="event_description" name="event_description" value="" placeholder="Description" autofocus></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" id="save_event" class="button_cus_up btn btn-success pull-right">Save</button>
                            <button style="display: none;" type="button" data-id="" id="delete_event" class="button_cus_up btn btn-danger pull-right">Delete Event</button> &nbsp;&nbsp;
                            <button class="btn bg-red pull-left" data-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

<!-- Quote Modal -->

<div id="quotes_form_modal" class="modal fade " data-backdrop="static" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Quote Of the day</h4>
            </div>
                <form action="" method="post" id="quotes_form" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="quote"> Quote:<small style="color:red">*</small> </label>
                                <label id="quote-error" class="error" for="quote"></label>
                                <textarea autofocus class="form-control" required id="quote" name="quote"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="form-group">
                            <button type="submit" id="save_quote" class="button_cus_up btn btn-success pull-right">Save</button>
                            <button class="btn bg-red pull-left" data-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
                </form>
        </div>

    </div>
</div>

<!-- Todo Modal -->
<div class="modal fade" id="add_todo" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header bg-green" >
                <h5 class="modal-title" id="modalHeading">Add Todo</h5>
            </div>
            <form id="taskForm" name="taskForm" method="post">
                <input type="hidden" name="todo_id" id="todo_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="task">Task : <small style="color:red">*</small></label>
                                <label id="task-error" class="error" for="task"></label>
                                <input type="text" class="form-control" id="task" name="task" value=""placeholder="todo Name" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row" style="display: block;">  
                                    <div class="col-md-12">
                                        <label for="todo_deadline_date">Deadline : <small style="color:red;">*</small></label>
                                        <label id="todo_deadline_date-error" class="error" for="todo_deadline_date"></label>
                                        <label id="todo_deadline_time-error" class="error" for="todo_deadline_time"></label>
                                    </div>
                                </div>
                                
                                <div class="input-group">

                                    <div class="input-group-addon" style="padding: 0px; border: 0px;">
                                        <input id="todo_deadline_date" name="todo_deadline_date" required readonly class="form-control datepicker" value="{{date('d-m-Y', strtoTIme(now()))}}">
                                    </div>
                                    <div class="input-group-addon" style="padding: 0px; border: 0px;">
                                        <input type="text" class="form-control timepicker" id="todo_deadline_time" name="todo_deadline_time" value="{{date('h:i A', strtoTIme(now()))}}" required readonly placeholder="time" >
                                    </div>
                                    <input type="hidden"  id="todo_deadline" name="todo_deadline" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <input type="submit" id="saveTask" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<div id="event_view_modal" class="modal fade " data-backdrop="static" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 id="td_event_title" style="margin-top: 0px;"></h2>
                            </div>
                            <div class="col-md-6">
                                <h4 class="event_data m-0" style="margin-top: 10px!important;">Time</h4>
                                <span class="" id="td_event_start" style="font-weight: 500"></span> &nbsp TO &nbsp <span class="" id="td_event_end" style="font-weight: 500"></span>  
                            </div>

                            <div class="col-md-12">
                                <h4 class="event_data m-0" style="margin-top: 10px!important;">Description</h4>
                                <span class="" id="td_event_description" style="font-weight: 500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ad, tenetur voluptatem similique ipsum! Deleniti eveniet tempore officia, quia voluptatibus, ipsum vero omnis reprehenderit, quisquam iure dicta distinctio cupiditate, nostrum.</span>
                            </div>
                        </div>
                        <div class="row" style="border-top: 1px dotted #00b3a2; margin-top: 10px;">

                            <div class="col-md-6">
                                <h4 class="event_data_informative m-0" style="margin-top: 10px!important;">Creator</h4>
                                <span class="" id="td_event_creator" style="font-weight: 500"></span>
                            </div>

                            <div class="col-md-6">
                                <h4 class="event_data_informative m-0" style="margin-top: 10px!important;">Created At</h4>
                                <span class="" id="td_event_created_at" style="font-weight: 500"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button class="btn btn-info pull-right" id="editEvent" data-dismiss="modal" aria-label="Edit">Edit</button>
                    <button class="btn bg-red pull-left" data-dismiss="modal" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js_lib')
<!-- bootstrap time picker -->
<script src="{{URL::asset('backend/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('backend/dist/js/pages/dashboard.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ URL::asset('backend/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ URL::asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{URL::asset('backend/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>

<script src="{{ URL::asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ URL::asset('backend/plugins/fullcalendar/fullcalendar.js') }}"></script>

@endpush

@push('js_custom')

<script>
    var P_SKIP_NO = 0;
    var P_TAKE_NO = 0;

    var A_SKIP_NO = 0;
    var A_TAKE_NO = 0;

    var SITEURL = "{{url('/')}}";

    function getQuote()
    {
        $.ajax({
            url: "{{route('dashboard.getQuote')}}",
            type: 'GET',
            dataType: 'json',
            success: function(data){
                if(data)
                    $('marquee h1').html(data.quote);
                    
            }
        })
    }

    function getTodos()
    {
        $('.user-todo-list').empty();
        var initHtml = '<span class="col-md-2 col-md-offset-5 text-center text-danger" title="Loading"> <i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>';
        $('.user-todo-list').append(initHtml);

        $.ajax({
            url: "{{route('dashboard.getTodos')}}",
            type: 'GET',
            data: {'skip_no' : P_SKIP_NO},
            dataType: 'json',
            success: function(data){
                // console.log(data);
                P_SKIP_NO = data.skip_no;
                P_TAKE_NO = data.take_no;

                if(parseInt(parseInt(P_SKIP_NO) + parseInt(P_TAKE_NO)) >= data.todo_count)
                {
                    $('.enabled-nextbtn').hide();
                    $('.disabled-nextbtn').show();

                    $('.enabled-prevbtn').show();
                    $('.disabled-prevbtn').hide();
                }
                else
                {
                    $('.enabled-nextbtn').show();
                    $('.disabled-nextbtn').hide();

                    $('.enabled-prevbtn').show();
                    $('.disabled-prevbtn').hide();                    
                }
                if(parseInt(P_SKIP_NO) == 0)
                {
                    $('.enabled-prevbtn').hide();
                    $('.disabled-prevbtn').show();

                    $('.enabled-nextbtn').show();
                    $('.disabled-nextbtn').hide();
                }
                $('.user-todo-list').empty();


                if(data.todo_count < 1)
                {
                    $('.user-todo-list').empty();
                    var li_html = '<li class="text-center"><span class="handle"></span> <span class="text text-danger"> No Todos found! </span><small class="label"></small><div class="tools"></div></li>';
                    
                    $('.user-todo-list').append(li_html);
                }
                else
                {
                    $.each(data['todos'], function(i, d){
                        let date = moment(d.deadline, "YYYY-MM-DD HH-mm-ss").utcOffset('+0600');
                        // alert(date);

                        var duration = moment.duration(date.diff(moment()));
                        var hours = duration.asHours();
                        var labelClass = '';

                        labelClass = (Number(hours) > 0) ? 'label-success' : 'label-danger';

                        var done_class = '';
                        var check_input = '';
                        var checked_flag = '';
                        var edit_btn = '';

                        if(d.status == 1)
                        {
                            done_class = 'done';
                            checked_flag = 'checked';
                        }

                        check_input = '<input class="todoCheck" '+ checked_flag +' type="checkbox" value="' + d.id +'">';
                        edit_btn = '<i class="fa fa-edit editTodo" data-id ="'+ d.id +' "></i>';

                        var li_html = '<li class="'+ done_class +'"> '+ check_input +' <span class="text"> '+ d.task +'</span><small class="label '+labelClass+'"><i class="fa fa-clock-o"></i> '+ date.fromNow() +'</small><div class="tools"> '+ edit_btn +'<i class="fa fa-trash-o deleteTodo" data-id ="'+ d.id +' "></i> </div><span class="pull-right"></span></li>';

                        $('.user-todo-list').append(li_html);

                    });
                }
            },
            error: function(error){
                // console.log(error);
            }
        })
    }
    function toggleTodo(id) {
        
        $.ajax({
            url: "{{route('todos.toogle')}}",
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

    function editEventFormGenerate(event_id)
    {

        $.ajax({
            type: "get",
            url: SITEURL + '/admin/events/' + event_id +'/edit',
            success: function (response) {
                if(response.error)
                {
                    toastr.error(response.error, { timeOut: 10000 });
                    return;
                }
                $('#event_id').val(response.id);
                $('#event_title').val(response.title);
                $("#event_start").datepicker("setDate", new Date(response.start));
                $("#event_end").datepicker("setDate", new Date(response.end));

                // $('#event_start').val($.datepicker.formatDate('dd-mm-yy', new Date(response.start)));


                $('#event_color').val(response.color);

                $('#event_color').css('background-color', response.color);
                $('#event_color').css('color', 'white');
                $('#event_color').colorpicker('setValue', response.color);


                $('.select2').select2();

                $('#event_description').val(response.description);

                $('.input-daterange').datepicker('update');

                $('#delete_event').show();
                $('#delete_event').attr('data-id', response.id);

                $('#event_creator_name').html(response.creator_name);
                $('#event_create_time').html('('+ $.datepicker.formatDate('dd-mm-yy', new Date(response.created_at)) +')');


                $('#events_form_modal').modal('show');
            }
        });
    }
    $(function(){
        //Timepicker
        $('.timepicker').timepicker({
          showInputs: false,
          interval: 5,
        });

        // Date picker
        $('.input-daterange').datepicker({
            format: "dd-mm-yyyy",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });


        $('.my-colorpicker1').colorpicker();

        $(document).on('change', '#event_color', function(){
            var selected_color = $(this).val();
            var white = 0xFFFFFF;
            var selected_color_hex = selected_color.replace("#", "0x");
            var text_color_hex = white - selected_color_hex;
            $(this).css("background-color",selected_color);
            $(this).css("color",'#'+text_color_hex.toString(16));
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        getQuote();
        getTodos();



        var calendar = $('#fullcalendar').fullCalendar({
            editable:false,
            events: {
              url : "{{route('events.index')}}",
            },
            selectable:false,
            selectHelper:false,
            displayEventTime: false,
            header: {
                left: 'prev,next today',
                center: 'title'
            },
            eventClick: function (event, jsEvent) {

                if ((jsEvent.type == 'click') && (jsEvent.altKey)) {
                    editEventFormGenerate(event.id);
                }
                else
                {
                    $.ajax({
                        type: "get",
                        url: SITEURL + '/admin/events/' + event.id ,
                        success: function (response) {
                            if(response.error)
                            {
                                toastr.error(response.error, { timeOut: 10000 });
                                return;
                            }
                            $('#event_view_modal').modal('show');
                            
                            $('#editEvent').data('id', response.id);

                            $('#td_event_title').html(response.title);
                            $('#td_event_start').html($.datepicker.formatDate('dd-mm-yy', new Date(response.start)));
                            $('#td_event_end').html($.datepicker.formatDate('dd-mm-yy', new Date(response.end)));
                            $('#td_event_creator').html(response.creator_name);
                            $('#td_event_created_at').html($.datepicker.formatDate('dd-mm-yy', new Date(response.created_at)));
                            $('#td_event_description').html(response.description);
                        }
                    });
                }
            }
        
        });

        
        $(document).on('click', '#editEvent', function(e){
            e.preventDefault();
            $(this).modal('hide');
            thisId = $('#editEvent').data('id');
            editEventFormGenerate(thisId);

        });
        $(document).on('click', '#add_event', function(){
            $('#delete_event').attr('data-id', '');
            $('#events_form').trigger("reset");
            $('#delete_event').hide();
            $('#events_form_modal').modal('show');
        });
        $(document).on('click', '#save_event', function(e){
            $("#events_form").validate({
            debug: true,
            submitHandler: function(form) {
                $("#save_event").html('Sending..');
                $.ajax({
                    data: $('#events_form').serialize(),
                    url: SITEURL + "/admin/events",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#events_form').trigger("reset");
                        $('#events_form_modal').modal('hide');
                        // calendar.fullCalendar( 'refetchEvents' );
                        $('#fullcalendar').fullCalendar('render');
                        calendar.fullCalendar('refetchEvents');
                        toastr.success(data.success, { timeOut: 10000 });
                    },
                    error: function (data) {
                        // console.log('Error:', data);
                        $.each(data.responseJSON.errors, function(error){
                            toastr.error(data.responseJSON.errors[error], { timeOut: 10000 });
                        });
                        $('#save_event').html('Save');
                    }
                });
                $("#save_event").html('Save');
            }
            });
        });

        $(document).on('click', '#delete_event', function(e){
            if (confirm("Are you sure you want to cancel the event?")) {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: SITEURL + '/admin/events/' + id,
                    type: "delete",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        calendar.fullCalendar('refetchEvents');
                        $('#delete_event').attr('data-id', '');
                        $('#events_form').trigger("reset");
                        $('#delete_event').hide();
                        $('#events_form_modal').modal('hide');
                        toastr.success(data.success, { timeOut: 10000 });
                    }
                })
            }
        })

        $(document).on('click', '.fc-event', function(e){
            e.preventDefault();
            var id = $(this).attr('href');
        });


        $(document).on('click', '#edit_quote', function(){
            $("#quotes_form_modal").modal('show');
            $("#quote").focus();
            $("#quote").html($('marquee h1').html());
        });
        $(document).on('click', '#save_quote', function(e){
            $("#quotes_form").validate({
            debug: true,

            submitHandler: function(form) {
                $("#save_quote").html('Sending..');
                $.ajax({
                    data: $('#quotes_form').serialize(),
                    url: "{{ route('dashboard.saveQuote') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#quotes_form').trigger("reset");
                        $('#quotes_form_modal').modal('hide');
                        getQuote();
                        toastr.success(data.success, { timeOut: 10000 });
                    },
                    error: function (data) {
                        // console.log('Error:', data);
                        $.each(data.responseJSON.errors, function(error){
                            toastr.error(data.responseJSON.errors[error], { timeOut: 10000 });
                        });
                        $('#save_quote').html('Save');
                    }
                });
            }
            });
        });

        $('#add_todo').on('shown.bs.modal', function () {
            $('#task').focus();
        });

        $(document).on('click', '.todo-prev', function(e){
            e.preventDefault();
            SKIP_NO = parseInt(parseInt(SKIP_NO) - parseInt(TAKE_NO));
            getTodos();
        });
        $(document).on('click', '.todo-next', function(e){
            e.preventDefault();
            SKIP_NO = parseInt(parseInt(SKIP_NO) + parseInt(TAKE_NO));
            getTodos();
        });


        $(document).on('click', '#createNewTask', function (e) {
            $('#saveTask').val("Save");
            // $('#saveTask').html("Save");
            $('#todo_id').val('');
            $('#taskForm').trigger("reset");
            $('#modalHeading').html("Add new Task");
            $('#add_todo').modal('show');
        });

        $(document).on('click', '#saveTask', function (e) {

            $('#todo_deadline').val($('#todo_deadline_date').val() + ' ' +$('#todo_deadline_time').val());

            // console.log($('#todo_deadline').val());

            $("#taskForm").validate({
                debug: true,
                ignore: '*:not([name])',

                submitHandler: function(form) {
                // var files = $('#todo_photo')[0].files[0];
                // console.log(files);

                    $("#saveTask").html('Sending..');
                    $.ajax({
                        data: $('#taskForm').serialize(),
                        url: "{{ route('todos.store') }}",
                        type: "POST",
                        dataType: 'json',
                        success: function (data) {
                            $('#taskForm').trigger("reset");
                            $('#add_todo').modal('hide');
                            toastr.success(data.success, { timeOut: 10000 });
                            getTodos();
                        },
                        error: function (error) {
                            console.log(error);
                            // console.log('Error:', data);
                            $.each(data.responseJSON.errors, function(error){
                                toastr.error(data.responseJSON.errors[error], { timeOut: 10000 });
                            });
                            $('#saveTask').html('Save');
                        }
                    });
                }
            });
        });

        $('body').on('click', '.editTodo', function () {

            // $('select[name="reciever"] option').removeAttr('selected');

            var todo_id = $(this).data('id');
            // alert(todo_id);

            $.get("{{ route('todos.index') }}" +'/' + todo_id +'/edit', function (data) {
                // alert(data.deadlinetime);
                // console.log(data);

                $('#modalHeading').html("Edit todo");
                $('#saveTask').html("Update todo");
                $('#add_todo').modal('show');
                $('#todo_id').val(todo_id);
                $('#task').val(data.task);
                $('#todo_deadline_date').val($.datepicker.formatDate('dd-mm-yy', new Date(data.deadline)));
                $('#todo_deadline_time').timepicker('setTime', data.deadlinetime);

                if(data.important == 1)
                {
                    $('input[name=important]').prop( "checked", true );
                }
                if(data.public == 1)
                {
                    $('input[name=public]').prop( "checked", true );
                }

                $('#todo_deadline_date').datepicker('update');
                $('#todo_deadline_time').timepicker('update');
            });
        });

        $('body').on('click', '.deleteTodo', function () {

            var todo_id = $(this).data("id");
            // alert(todo_id);
            if(confirm("Are You sure want to delete !"))
                {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('todos.store') }}"+'/'+todo_id,
                    success: function (data) {
                        if(data.success)
                        {
                            toastr.success(data.success, { timeOut: 10000 });
                        }
                        else
                        {
                            toastr.error(data.error, { timeOut: 10000 });
                        }
                        getTodos();

                    },
                    error: function (data) {
                        //console.log('Error:', data);                        
                        $.each(data.responseJSON.errors, function(error){
                            toastr.error(data.responseJSON.errors[error], { timeOut: 10000 });
                        });
                    }
                });
            }
        });

        //Date picker
        $('#todo_deadline_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            todayBtn: true,
        });
        $('.select2').select2();
        $(document).on('change', '.todoCheck', function(){

            var id = $(this).val();
            var item = $(this);
            // alert(id);
            if (item.prop('checked'))
            {
                $(this).parent().addClass("done");
                item.checked = false;
                toggleTodo(id);
                return;
            }
            else
            {
                $(this).parent().removeClass("done");
                item.checked = true;
                toggleTodo(id);
                return;
            }

        });

    });
    
</script>


@endpush

