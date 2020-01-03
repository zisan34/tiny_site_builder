@extends('admin.layouts.app')

@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link href="{{  URL::asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">

@endpush

@push('css_custom')
<style>
    .datepicker-dropdown{
        z-index: 9999 !important;
    }
</style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Draft</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Draft Management</a></li>
            <li class="active">Edit Draft</li>
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

                    <form method="post" action="{{ route('drafts.update',$draft->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}                        
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="draft_date">Date :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control date" id="draft_date" name="draft_date" title="Draft Date" required="required" value="{{ date("d-m-Y", strtotime($draft->date))}}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="draft_ref">Draft Ref# :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="draft_ref" name="draft_ref" title="Draft Ref#" placeholder="Draft Ref#" required="required" readonly="readonly" value="{{$draft->reference}}">
                                        {{-- Fixed Code (Frefix):23.01.908.140 
                                            BranchCode + FileCode(Seq) + VolumnNumber + Date--}}
                                        @php
                                            $ref = explode('.', $draft->reference);
                                        @endphp
                                        <span id="ref_txt"  style="display: none;"><span id="fixed">{{$ref[0]}}.{{$ref[1]}}.{{$ref[2]}}.{{$ref[3]}}</span>.<span id="branch_code_txt">{{$ref[4]}}</span>.<span id="file_id_txt">{{$ref[5]}}</span>.<span id="volume_txt">{{$ref[6]}}</span>.<span id="date_txt">{{ $ref[7]}}</span></span>
                                    </div>

                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="version_number">Version :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="version_number" name="version_number" title="Version Number" placeholder="Version Number" required="required" readonly="readonly" value="{{$draft->version_number}}" />
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="volume_no">Volume No. :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="volume_no" name="volume_no" title="Volume No" placeholder="Volume No" required="required" value="{{$draft->volume_no}}" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="draft_type">Draft Category :<small style="color:red">*</small></label>
                                        <select class="form-control select2" id="draft_type" name="draft_type" title="Draft Category" style="width: 100%;" required="required">
                                            <option value="">Select Type</option>

                                            @foreach($draft_types as $draft_type)
                                                <option value="{{ $draft_type->id }}"
                                                    @if($draft->draft_type_id == $draft_type->id)
                                                    selected
                                                    @endif>{{ $draft_type->name }} ({{ $draft_type->short_name }})</i></option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="branch_code">Branch :<small style="color:red">*</small></label>
                                        <select class="form-control select2" id="branch_code" name="branch_code" title="Please select country." style="width: 100%;" required="required">
                                            <option value="" selected="selected">Select</option>
                                            @foreach($branches as $branch)
                                            <option value="{{$branch->id}}"
                                                @if($draft->branch_id == $branch->id)
                                                selected
                                                @endif>{{$branch->name}}({{$branch->short_name}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="country">Share & Send :<small style="color:red">*</small></label>
                                        <select class="form-control select2" multiple="multiple" data-placeholder="Select User" id="sent_to" name="sent_to[]" required="required" autocomplete="false" style="width: 100%;">
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}"
                                                    @if($draft->checkUser($user->id))
                                                    selected
                                                    @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="attribute_type">Draft Title :<small style="color:red">*</small></label>
                                        <input type="text" name="draft_title" class="form-control" title="Draft Title" placeholder="Draft Title" required="required" value="{{$draft->draft_title}}">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="attribute_type">Type :<small style="color:red">*</small></label>
                                        <select class="form-control" id="file_type" name="file_type" title="Please select country." style="width: 100%;">
                                            <option selected="selected" value="1"
                                                @if($draft->file_type == 1) selected @endif>Create Here</option>
                                            <option value="2"
                                                @if($draft->file_type == 2) selected @endif>Upload File</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                @php
                                $rp_string = "<?xml encoding='utf-8' ?>";
                                @endphp
                                <div class="col-md-12" id="draft_details_div"
                                                @if($draft->file_type == 2) style="display: none;" @endif>
                                    <textarea class="form-control summernote" name="draft_details">{{ str_replace($rp_string, "", $draft->draft_details) }} </textarea>
                                </div>
                                <div class="col-md-12" style="display: none;" id="file_upload_div">

                                    <div class="form-group" @if($draft->file_type == 1) style="display: none;" @endif>
                                        <label for="exampleInputFile">File upload :</label>
                                        <input type="file" id="file_upload" name="file_upload" />

                                        <p class="help-block">
                                            Supported formates: <strong>doc, docx, xls, xlsx, ppt, pptx, pdf</strong><br />
                                            Maximum Size: <strong>10MB</strong>
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('drafts.index')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success pull-right" tabindex="8" style="margin-left: 10px;">Save & Send</button>
                            @if($draft->assigned_to == Auth::id())
                            <a href="{{route('drafts.review',$draft->id)}}" class="btn btn-info pull-right" tabindex="8" style="margin-left: 10px;">Rivew and Send</a>
                            @endif
                            {{--                            <button type="submit" class="btn btn-info pull-right">Save as Draft</button>--}}
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js_lib')
    <!-- Select2 -->
    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- CK Editor -->
    <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>
@endpush
@push('js_custom')    
    {{-- <script>
        $(function() {

            // Initial CKEDITOR
            // CKEDITOR.replace('draft_editor');

            $('.summernote').summernote({
                tabsize: 2,
                height: 375,
                placeholder: 'Draft Contents Here'
            });

            // Initial Focused field
            $('#product_name').focus();

            $(document).on('change', '#file_type', function() {
                var thisValue = $(this).val();
                // alert(thisValue);

                if ("2" == thisValue) {
                    $('#draft_details_div').hide();
                    $('#file_upload_div').show();
                } else {
                    $('#file_upload_div').hide();
                    $('#draft_details_div').show();
                }
            });

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

            //Date picker
            $('.date').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',
            });
        });

    </script> --}}
    <script>
        $(function() {
            
            // Initial CKEDITOR
            // CKEDITOR.replace('draft_editor');

            $('.summernote').summernote({
                tabsize: 2,
                height: 375,
                placeholder: 'Draft Contents Here'
            });
            // Initial Focused field
            $('#product_name').focus();

            $(document).on('change', '#file_type', function() {
                var thisValue = $(this).val();
                // alert(thisValue);

                if ("2" == thisValue) {
                    $('#draft_details_div').hide();
                    $('#file_upload_div').show();
                } else {
                    $('#file_upload_div').hide();
                    $('#draft_details_div').show();
                }
            });

            //Initialize Select2 Elements
            $('.select2').select2();

            //Date picker
            $('.date').datepicker({
                autoclose: true,
                format: 'dd-mm-yy',
            });

            $("#branch_code").on('change',function(){
                var branch_code = $(this).val();
                $("#branch_code_txt").text(branch_code);
                update_ref();
            });
            $("#volume_no").on('keyup',function(){
                var volume_no = $(this).val();
                $("#volume_txt").text(volume_no);
                update_ref();
            });
            $("#draft_date").on('change',function(){
                var draft_date = $(this).val();
                var date_txt = draft_date.replace(/-/g,".");
                $("#date_txt").text(date_txt);
                update_ref();
            })

            function update_ref() {
                var ref = $("#ref_txt").text();
                $("#draft_ref").val(ref);
            }
        });

    </script>
@endpush
