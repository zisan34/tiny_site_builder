@extends('admin.layouts.app')

@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link href="{{ asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">

@endpush


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Page</h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('pages.index') }}">Pages</a></li>
            <li class="active">Edit Page</li>
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
                    <form method="POST" action="{{ route('pages.update',['page'=>$page->id]) }}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="page_title">Page Title :<small style="color:red">*</small></label>
                                                <input type="text" name="page_title" class="form-control" title="Page Title" value="{{$page->title}}" placeholder="Page Title" required="required">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="content_type">Content Type :<small style="color:red">*</small></label>
                                                <select class="form-control" id="content_type" name="content_type" title="Please select country." style="width: 100%;">
                                                    <option @if($page->content_type == 1) selected @endif value="1">Create Here</option>
                                                    <option @if($page->content_type == 2) selected @endif value="2">Upload File</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @php
                                        $rp_string = "<?xml encoding='utf-8' ?>";
                                        @endphp
                                        <div class="col-md-12" id="page_details_div" 
                                        @if($page->content_type == 2) style="display: none;" @endif>
                                            <textarea name="page_details" id="summernote">{{ str_replace($rp_string , "", $page->content) }}</textarea>
                                        </div>

                                        <div class="col-md-12" id="file_upload_div"
                                        @if($page->content_type == 1) style="display: none;" @endif>

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
                                    <div class="row text-center">
                                        <button type="button" class="btn btn-default" onclick="alert('This is still under construction');">Preview</button>
                                        <button type="button" class="btn btn-default" onclick="alert('This is still under construction');">Save as Draft</button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="page_date">Publish Date :<small style="color:red">*</small></label>
                                                <input type="text" class="form-control date" id="draft_date" name="page_date" title="Draft Date" required="required" value="{{ date("d-m-Y", strtotime($page->publish_datetime))}}">
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
                                                <label for="page_visibility">Visibility Type :<small style="color:red">*</small></label>
                                                <select name="page_visibility" class="form-control">
                                                    <option value="0" @if($page->visibility == 0) selected @endif >Public</option>
                                                    <option value="1"  @if($page->visibility == 1) selected @endif >Password Protected</option>
                                                    <option value="2" @if($page->visibility == 2) selected @endif >Private</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="protected_pass_div" @if($page->visibility != 1) style="display: none;" @endif>
                                            <input type="text" class="form-control" name="protected_pass" placeholder="Enter Password" id="protected_pass" value="{{$page->visibility_pass}}">
                                        </div>
                                        {{--                                            <div class="col-md-12">--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <label for="draft_date">Publish Date :<small style="color:red">*</small></label>--}}
                                        {{--                                                    <input type="text" class="form-control date" id="draft_date" name="draft_date" title="Draft Date" required="required" value="26-09-2019">--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        <div class="col-md-12">
                                            <h4 style="font-weight: 600; border-bottom: 2px solid #222; padding-bottom: 10px; margin-bottom: 10px;">Page Attributes</h4>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="page_parent">Parent :</label>
                                                <select name="page_parent" class="form-control">
                                                    <option value="">--Select Parent Page--</option>
                                                    <option value="0"  @if($page->parent_page_id == 1) selected @endif >Public</option>
                                                    <option value="1"  @if($page->parent_page_id == 2) selected @endif>Password Protected</option>
                                                    <option value="2" @if($page->parent_page_id == 3) selected @endif>Private</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="page_template">Template:</label>
                                                <select name="page_template" class="form-control">
                                                    <option value="0" 
                                                    @if($page->template_id == 0) selected @endif >Default Page</option>
                                                    <option value="1" 
                                                    @if($page->template_id == 1) selected @endif >Gallery Page</option>
                                                    <option value="2" 
                                                    @if($page->template_id == 2) selected @endif >Hero Page</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="page_order">Order :<small style="color:red">*</small></label>
                                                <input type="number" class="form-control" id="draft_order" name="page_order" title="Draft Order" required="required" value="{{$page->order}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger">Cancel</button>
                            <input type="submit" class="btn btn-success pull-right" style="margin-left: 10px;" value="Update">
                            <button type="button" class="btn btn-default pull-right" style="margin-left: 10px;" onclick="alert('This is still under construction');">Save as Draft</button>
                            <button type="button" class="btn btn-default pull-right" style="margin-left: 10px;" onclick="alert('This is still under construction');">Preview</button>
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

            $('#summernote').summernote({
                tabsize: 2,
                height: 325
            });

            // Initial Focused field
            $('#product_name').focus();

            $(document).on('change', '#content_type', function() {
                var thisValue = $(this).val();
                // alert(thisValue);

                if ("2" == thisValue) {
                    $('#page_details_div').hide();
                    $('#file_upload_div').show();
                } else {
                    $('#file_upload_div').hide();
                    $('#page_details_div').show();
                }
            });

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
            //Initialize Select2 Elements
            $('.select2').select2();

            //Date picker

            $('#draft_date').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy'
            });
        });

    </script>
@endpush
