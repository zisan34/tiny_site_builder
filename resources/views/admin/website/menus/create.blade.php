@extends('layouts.app')

@push('css_lib')
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
                    <form method="post" action="{{ route('draft.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="draft_date">Date :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="draft_date" name="draft_date" title="Draft Date" required="required" value="26-09-2019" />
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="draft_ref">Draft Ref# :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="draft_ref" name="draft_ref" title="Draft Ref#" placeholder="Draft Ref#" required="required" readonly="readonly" value="<?php echo "23.01.908.140.04.116.03.26.09.19"; ?>">
                                    </div>

                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="version_number">Version :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="version_number" name="version_number" title="Version Number" placeholder="ersion Number" required="required" readonly="readonly" value="<?php echo '0.'.'1'.'01'; ?>" />
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="volume_no">Volume No. :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control" id="volume_no" name="volume_no" title="Volume No" placeholder="Volume No" required="required" value="" />
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="draft_category">Draft Category :<small style="color:red">*</small></label>
                                        <select class="form-control" id="draft_category" name="draft_category" title="Draft Category" style="width: 100%;">
                                            <option value="0" selected="selected">Select Type</option>

                                            @foreach($draft_types as $draft_type)
                                                <option value="{{ $draft_type->id }}">{{ $draft_type->name }} ({{ $draft_type->short_name }})</i></option>
                                            @endforeach

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="branch_code">Branch :<small style="color:red">*</small></label>
                                        <select class="form-control" id="branch_code" name="branch_code" title="Please select country." style="width: 100%;" required="required">
                                            <option value="0" selected="selected">Select</option>
                                            <option value="01">General Staff Branch (GS)</option>
                                            <option value="02">Quartering Branch</option>
                                            <option value="03">Ord Branch</option>
                                            <option value="04">Establishment Branch</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="country">Share & Send :<small style="color:red">*</small></label>
                                        <select class="form-control select2" multiple="multiple" data-placeholder="Select User" id="sent_to" name="sent_to[]" autocomplete="false" style="width: 100%;">
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="attribute_type">Draft Title :<small style="color:red">*</small></label>
                                        <input type="text" name="draft_title" class="form-control" title="Draft Title" placeholder="Draft Title" required="required">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="attribute_type">Type :<small style="color:red">*</small></label>
                                        <select class="form-control" id="file_type" name="file_type" title="Please select country." style="width: 100%;">
                                            <option selected="selected" value="1">Create Here</option>
                                            <option value="2">Upload File</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12" id="draft_details_div">
                                    <textarea class="form-control draft_editor" name="draft_details" id="draft_editor"></textarea>
                                </div>

                                <div class="col-md-12" style="display: none;" id="file_upload_div">

                                    <div class="form-group">
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
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-success pull-right" style="margin-left: 10px;">Save & Send</button>
                            <button type="submit" class="btn btn-primary pull-right" style="margin-left: 10px;">Save as Draft</button>
                            <button type="submit" class="btn btn-info pull-right" style="margin-left: 10px;">Approve</button>
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
@endpush

@push('js_custom')
    <script>
        $(function() {

            // Initial CKEDITOR
            CKEDITOR.replace('draft_editor');

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
            $('#datepicker').datepicker({
              autoclose: true
            })
        });

    </script>
@endpush
