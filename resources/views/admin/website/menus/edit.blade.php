@extends('layouts.app')

@push('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create Draft</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Draft Management</a></li>
            <li class="active">Create Draft</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Draft Info</h3>
                        <a href="{{ route('drafts.index') }}" class="btn btn-danger btn-xs pull-right">Back to List</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('draft.update',$draft->id) }}" enctype="multipart/form-data">
                        @csrf('PUT)
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="attribute_name">Draft ID:<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="draft_id" value="{{ $draft->draft_id }}" name="draft_id" title="Customer ID" placeholder="Customer ID" required="required" tabindex="1">
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="attribute_name">Version:<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="version_number" value="{{ $draft->version_number }}" name="version_number" title="Customer ID" placeholder="Version ID" required="required" tabindex="2">
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="country">Draft Type<small style="color:red">*</small></label>
                                        <select class="form-control select2" id="country" name="draft_type" title="Please select country." tabindex="3" style="width: 100%;">
                                            <option value="0" selected="selected">Select Type</option>
{{--                                            @foreach($draft_types as $draft_type)--}}
{{--                                                <option value="{{ $draft_type->id }}">{{ $draft_type->name }}</option>--}}
{{--                                            @endforeach--}}

                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="country">Assign To<small style="color:red">*</small></label>
                                        <select class="form-control select2" multiple="multiple" data-placeholder="Select User" id="assigned_to" name="assigned_to[]" autocomplete="false" tabindex="4" style="width: 100%;">
{{--                                            @foreach($users as $user)--}}
{{--                                                <option value="{{ $user->id }}">{{ $user->name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="attribute_type">Draft Title:<small style="color:red">*</small></label>
                                        <input type="text" name="draft_title" value="{{ $draft->draft_title }}" class="form-control" title="Post Code" placeholder="Post Code" required="required" tabindex="5">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="attribute_type">File Type:<small style="color:red">*</small></label>
                                        <select class="form-control" id="file_type" name="file_type" title="Please select country." tabindex="6" style="width: 100%;">
                                            <option selected="selected" value="Create Here">Create Here</option>
                                            <option value="Upload File">Upload File</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control draft_editor"  name="draft_details" id="draft_editor" tabindex="7">{{ $draft->draft_details }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-success pull-right" tabindex="8" style="margin-left: 10px;">Save & Send</button>
                            {{--                            <button type="submit" class="btn btn-info pull-right">Save as Draft</button>--}}
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <!-- Select2 -->
    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- CK Editor -->
    <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function() {

            // Initial CKEDITOR
            CKEDITOR.replace('draft_editor');

            // Initial Focused field
            $('#product_name').focus();

            $(document).on('click', '#productPrice', function() {
                // Does some stuff and logs the event to the console

                var placeholderValue = $(this).attr('placeholder');
                var fieldValue = $(this).val();
                var defaultPlaceholderValue = null;

                defaultPlaceholderValue = (fieldValue == 0) ? placeholderValue : fieldValue;
                if (fieldValue == 0) {

                    $(this).attr('placeholder', defaultPlaceholderValue);
                    $(this).val("");

                } else {

                    $(this).val(defaultPlaceholderValue);
                }
            });

            $(document).on('blur', '#productPrice', function() {
                // Does some stuff and logs the event to the console

                var placeholderValue = $(this).attr('placeholder');
                var fieldValue = $(this).val();
                var defaultPlaceholderValue = null;

                defaultPlaceholderValue = (fieldValue == 0) ? placeholderValue : fieldValue;

                $(this).val(defaultPlaceholderValue);
            });

            //Initialize Select2 Elements
            $('.select2').select2();

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            });
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            });
            //Money Euro
            $('[data-mask]').inputmask();

            //Date range picker
            $('#reservation').daterangepicker();
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            });
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            );

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            });

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            });
        });

    </script>
@endpush
