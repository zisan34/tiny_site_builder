@extends('admin.layouts.app')

@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">

    <link href="{{ asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create News</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">News Management</a></li>
            <li class="active">Create News</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">News Info</h3>
                        <a href="{{ route('news.index') }}" class="btn btn-danger btn-xs pull-right">Back to List</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="attribute_type">News Title :<small style="color:red">*</small></label>
                                        <input type="text" name="news_title" class="form-control" title="News Title" placeholder="News Title" required="required">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="news_category">News Category :<small style="color:red">*</small></label>
                                        <select class="form-control" id="news_category" name="news_category" title="Please select country." style="width: 100%;" required="required">
                                                <option selected value="">--Select news Category--</option>
                                            @foreach($news_categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">


                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="news_date">Publish Date :<small style="color:red">*</small></label>
                                        <input type="text" class="form-control date" id="news_date" name="news_date" title="Draft Date" required="required" readonly value="{{ date("d-m-Y", strtotime(now()))}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="content_type">Content Type:<small style="color:red">*</small></label>
                                        <select class="form-control" id="content_type" name="content_type" title="Please select country." style="width: 100%;">
                                            <option selected="selected" value="1">Create Here</option>
                                            <option value="2">Upload File</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-12" id="details_div">
                                    <textarea name="details" id="summernote" cols="30" rows="30"></textarea>
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
                            <button type="submit" class="btn btn-success pull-right" style="margin-left: 10px;">Save</button>
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
    {{-- <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script> --}}
    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>

@endpush

@push('js_custom')

    <script>
        $(function() {

            $('#summernote').summernote({
                tabsize: 2,
                height: 200
            });

            // Initial CKEDITOR
            // CKEDITOR.replace('draft_editor');

            // Initial Focused field
            $('#product_name').focus();

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

            //Date picker
            $('.date').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',


            });
        });

    </script>
@endpush
