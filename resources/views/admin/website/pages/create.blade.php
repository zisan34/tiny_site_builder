@extends('admin.layouts.app')

@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link href="{{ asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Page</h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('pages.index') }}">Pages</a></li>
            <li class="active">Add New Page</li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Page Info</h3>
                        <a href="{{ route('pages.index') }}" class="btn btn-danger btn-xs pull-right">Back to List</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('pages.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-9">
                                <div class="row">

                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="page_title">Page Title :<small style="color:red">*</small></label>
                                            <input type="text" name="page_title" class="form-control" title="Page Title" placeholder="Page Title" required="required">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="content_type">Content Type :<small style="color:red">*</small></label>
                                            <select class="form-control" id="content_type" name="content_type" title="Please select country." style="width: 100%;">
                                                <option selected="selected" value="1">Create Here</option>
                                                <option value="2">Upload File</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12" id="details_div">
                                        <textarea name="details" id="summernote"></textarea>
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

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row" style="display: block;">  
                                                    <div class="col-md-12">
                                                        <label for="publish_date">Publish Date Time :<small style="color:red;">*</small></label>
                                                        <label id="publish_date-error" class="error" for="publish_date"></label>
                                                        <label id="publish_time-error" class="error" for="publish_time"></label>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group">

                                                    <div class="input-group-addon" style="padding: 0px; border: 0px;">
                                                        <input id="publish_date" name="publish_date" required readonly class="form-control datepicker" value="{{date('d-m-Y', strtoTIme(now()))}}">
                                                    </div>
                                                    <div class="input-group-addon" style="padding: 0px; border: 0px;">
                                                        <input type="text" class="form-control timepicker" id="publish_time" name="publish_time" value="{{date('h:i A', strtoTIme(now()))}}" required readonly placeholder="time" >
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="featured_image">Featured Image :</label>
                                            <input type="file" id="featured_image" name="featured_image" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="page_order">Order :<small style="color:red">*</small></label>
                                            <input type="number" class="form-control" id="draft_order" name="page_order" title="Draft Order" required="required" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('pages.index')}}" class="btn btn-danger">Cancel</a>
                            <input type="submit" class="btn btn-success pull-right" style="margin-left: 10px;" value="Publish">
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
    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    
    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>
@endpush

@push('js_custom')
<script>
    $(function() {

        //Timepicker
        $('.timepicker').timepicker({
          showInputs: false,
          interval: 5,
        });

        //Date picker
        $('.date, .datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
        });



        $('#summernote').summernote({
            tabsize: 2,
            height: 190
        });

        // Initial Focused field
        $('#product_name').focus();

        $(document).on('change', '#page_visibility', function() {
            var thisValue = $(this).val();
            // alert(thisValue);

            if ("1" == thisValue) {
                $('#protected_pass_div').show();
                $('#protected_pass').attr('required', 'required');
            } else {
                $('#protected_pass_div').hide();
                $('#protected_pass').removeAttr('required');
            }
        });

        $(document).on('change', '#content_type', function() {
            var thisValue = $(this).val();
            // alert(thisValue);

            if ("2" == thisValue) {
                $('#details_div').hide();
                $('#file_upload_div').show();
            } else {
                $('#file_upload_div').hide();
                $('#details_div').show();
            }
        });

        //Initialize Select2 Elements
        $('.select2').select2();


    });

</script>
@endpush
