@extends('admin.layouts.app')

@push('css_lib')
<!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{URL::asset('backend/plugins/timepicker/bootstrap-timepicker.min.css')}}">
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
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>2878</h3>
                        <p>Total Drafts</p>
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
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>5851</h3>
                        <p>Team Members</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>2391</h3>
                        <p>Archieved Files</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>3282</h3>
                        <p>Dispatch Files</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
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

            <section class="col-lg-6 connectedSortable">

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
                    <div class="box-body">
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


            <section class="col-lg-6 connectedSortable">
            <!-- TO DO List -->

                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">Important Activities</h3>
                        <div class="box-tools pull-right">
                            <ul class="pagination pagination-sm inline">
                                <li><a href="#">&laquo;</a></li>

                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                                <tr class="bg-gray">
                                    <th class="text-left">Activity</th>
                                    <th class="text-center" style="width: 100px;">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Go to parade ground</td>
                                    <td class="text-center">Task</td>
                                </tr>
                                <tr>
                                    <td>Go to parade ground</td>
                                    <td class="text-center">Task</td>
                                </tr>
                                <tr>
                                    <td>Go to parade ground</td>
                                    <td class="text-center">Task</td>
                                </tr>
                                <tr>
                                    <td>Go to parade ground</td>
                                    <td class="text-center">Task</td>
                                </tr>
                                <tr>
                                    <td>Go to parade ground</td>
                                    <td class="text-center">Task</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer clearfix no-border">
                        <button type="button" id="createNewTask" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                    </div>
                </div>

            <!-- /.box -->
            </section>



            <!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">
                <!-- Calendar -->
                <div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Calendar</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i></button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Add new event</a></li>
                                    <li><a href="#">Clear events</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">View calendar</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Progress bars -->
                                <div class="clearfix">
                                    <span class="pull-left">Task #1</span>
                                    <small class="pull-right">90%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                </div>
                                <div class="clearfix">
                                    <span class="pull-left">Task #2</span>
                                    <small class="pull-right">70%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="clearfix">
                                    <span class="pull-left">Task #3</span>
                                    <small class="pull-right">60%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                </div>


                                <div class="clearfix">
                                    <span class="pull-left">Task #4</span>
                                    <small class="pull-right">40%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                </div>
                            </div>
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
                                <div class="checkbox" style="margin-top: 29px;" >
                                  <label>
                                    <input name="important" type="checkbox"> Important Task
                                  </label>
                                  <label>
                                    <input name="public" type="checkbox"> Public
                                  </label>
                                </div>
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
@endsection
@push('js_lib')
<!-- bootstrap time picker -->
<script src="{{URL::asset('backend/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('backend/dist/js/pages/dashboard.js') }}"></script>
@endpush

@push('js_custom')

<script>
    var SKIP_NO = 0;
    var TAKE_NO = 0;
    function getQuote()
    {
        $.ajax({
            url: "{{route('dashboard.getQuote')}}",
            type: 'GET',
            dataType: 'json',
            success: function(data){
                $('marquee h1').html(data.quote);
            }
        })
    }
    function getTodos()
    {
        $.ajax({
            url: "{{route('dashboard.getTodos')}}",
            type: 'GET',
            data: {'skip_no' : SKIP_NO},
            dataType: 'json',
            success: function(data){
                // console.log(data);
                SKIP_NO = data.skip_no;
                TAKE_NO = data.take_no;

                if(parseInt(parseInt(SKIP_NO) + parseInt(TAKE_NO)) > data.todo_count)
                {
                    $('.enabled-nextbtn').hide();
                    $('.disabled-nextbtn').show();

                    $('.enabled-prevbtn').show();
                    $('.disabled-prevbtn').hide();
                }
                if(parseInt(SKIP_NO) == 0)
                {
                    $('.enabled-prevbtn').hide();
                    $('.disabled-prevbtn').show();

                    $('.enabled-nextbtn').show();
                    $('.disabled-nextbtn').hide();
                }
                $('.user-todo-list').empty();
                $.each(data['todos'], function(i, d){
                    let date = moment(d.deadline, "YYYY-MM-DD HH-mm-ss").utcOffset('+0600');
                    // alert(date);

                    var duration = moment.duration(date.diff(moment()));
                    var hours = duration.asHours();
                    var labelClass = '';

                    labelClass = (Number(hours) > 0) ? 'label-success' : 'label-danger';

                    if(d.status == 1)
                    {
                        var li_html = '<li class="done"><span class="handle"><i class="fa fa-ellipsis-v"> </i> <i class="fa fa-ellipsis-v"> </i></span> <input class="todoCheck" checked type="checkbox" value="' + d.id +'"> <span class="text"> '+ d.task +'</span><small class="label '+labelClass+'"><i class="fa fa-clock-o"></i> '+ date.fromNow() +'</small><div class="tools"><i class="fa fa-edit editTodo" data-id ="'+ d.id +' "></i><i class="fa fa-trash-o deleteTodo" data-id ="'+ d.id +' "></i></div></li>';
                    } else {
                        var li_html = '<li><span class="handle"><i class="fa fa-ellipsis-v"> </i> <i class="fa fa-ellipsis-v"> </i></span> <input class="todoCheck" type="checkbox" value="' + d.id +'"> <span class="text"> '+ d.task +'</span><small class="label '+labelClass+'"><i class="fa fa-clock-o"></i> '+ date.fromNow() +'</small><div class="tools"><i class="fa fa-edit editTodo" data-id ="'+ d.id +' "></i><i class="fa fa-trash-o deleteTodo" data-id ="'+ d.id +' "></i></div></li>';

                    }
                    $('.user-todo-list').append(li_html);

                });
            },
            error: function(error){
                console.log(error);
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
    $(function(){
        //Timepicker
            $('.timepicker').timepicker({
              showInputs: false,
              interval: 5,
            });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        getQuote();
        getTodos();

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

