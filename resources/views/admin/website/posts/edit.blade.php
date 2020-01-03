@extends('admin.layouts.app')

@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('backend/bower_components/chosen/chosen.css') }}">

    <link href="{{ asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">


@endpush

@push('css_custom')
<style>
.category, .item, .chosen-container-single .chosen-single 
{
    font-family: sans-serif
}

.category 
{
    font-weight: bold
}

.chosen-results li.item 
{
    padding-left: 25px;
}

</style>
@endpush

@section('content')
    <!-- Content Header (Post header) -->
    <section class="content-header">
        <h1>Edit Post {{$post->title}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li class="active">Edit Post</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Post Info</h3>
                        <a href="{{ route('posts.index') }}" class="btn btn-danger btn-xs pull-right">Back to List</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('posts.update',['post'=>$post->id]) }}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="post_title">Post Title :<small style="color:red">*</small></label>
                                                <input type="text" name="post_title" class="form-control" title="Post Title" placeholder="Post Title" required="required" value="{{$post->title}}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="content_type">Content Type :<small style="color:red">*</small></label>
                                                <select class="form-control" id="content_type" name="content_type" title="Please select country." style="width: 100%;">
                                                    <option selected="selected" value="1" 
                                                    @if($post->content_type == 1) selected @endif >Create Here</option>
                                                    <option value="2" @if($post->content_type == 2) selected @endif >Upload File</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        @php
                                        $rp_string = "<?xml encoding='utf-8' ?>";
                                        @endphp
                                        <div class="col-md-12" id="post_details_div"  @if($post->content_type == 2) style="display: none;" @endif>
                                            <textarea name="post_details" id="summernote">
                                                @if($post->content_type == 1) {{ str_replace($rp_string, "", $post->content) }} @endif
                                            </textarea>
                                        </div>
                                        <div class="col-md-12" @if($post->content_type == 1) style="display: none;" @endif  id="file_upload_div">

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
                                                <label for="post_category">Select Category :<small style="color:red">*</small></label>
                                                <select name="post_category"  class="form-control chosen-select" required>
                                                    <option disabled selected>--Select Category & Sub Category--</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" class="category" 
                                                            @if($post->post_category_id == $category->id)
                                                            selected
                                                            @endif >
                                                            {{$category->title}}
                                                        </option>

                                                        @if($category->post_subcategories)
                                                        @foreach($category->post_subcategories as $subcategory)
                                                            <option value="{{$category->id}}|{{$subcategory->id}}" class="item"
                                                                @if($post->post_sub_category_id == $subcategory->id)
                                                                selected
                                                                @endif >
                                                                {{$subcategory->title}}
                                                            </option>
                                                        @endforeach
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="publish_date">Publish Date :<small style="color:red">*</small></label>
                                                <input type="text" class="form-control date" id="publish_date" name="publish_date" title="Draft Date" required="required" value="{{ date("d-m-Y", strtotime($post->publish_datetime))}}">
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
                                                <label for="post_visibility">Visibility Type :</label>
                                                <select name="post_visibility" id="post_visibility" class="form-control" required>
                                                    <option value="0" 
                                                    @if($post->visibility == 0) selected @endif >Public</option>
                                                    <option value="1" 
                                                    @if($post->visibility == 1) selected @endif >Password Protected</option>
                                                    <option value="2" 
                                                    @if($post->visibility == 2) selected @endif >Private</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="protected_pass_div" @if($post->visibility != 1) style="display: none;" @endif>
                                                <input type="text" class="form-control" name="protected_pass" placeholder="Enter Password" id="protected_pass" value="{{$post->visibility_pass}}">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h4 style="font-weight: 600; border-bottom: 2px solid #222; padding-bottom: 10px; margin-bottom: 10px;">Page Attributes</h4>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="post_template">Post Template:</label>
                                                <select name="post_template" id="post_template_ddl"  class="form-control" required>
                                                    <option value="0" 
                                                    @if($post->template_id == 0) selected @endif >Default Page</option>
                                                    <option value="1" 
                                                    @if($post->template_id == 1) selected @endif >Hero Page</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="subtitle_div" style="display: none;">
                                            <div class="form-group">
                                                <label for="subtitle">Subtitle :<small style="color:red">*</small></label>
                                                <input type="text" class="form-control" id="subtitle_txt" name="subtitle" title="Post Subtitle" value="{{$post->subtitle}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="post_order">Order :<small style="color:red">*</small></label>
                                                <input type="number" class="form-control" id="draft_order" name="post_order" title="Post Order" required="required" value="{{$post->order}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('posts.index')}}" class="btn btn-danger">Cancel</a>
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

    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.jquery.js') }}"></script>

    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.proto.js') }}"></script>


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
                $('#post_details_div').hide();
                $('#file_upload_div').show();
            } else {
                $('#file_upload_div').hide();
                $('#post_details_div').show();
            }
        });


        $(document).on('change', '#post_visibility', function() {
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
        
        $(document).on('change', '#post_template_ddl', function() {
            var thisValue = $(this).val();
            // alert(thisValue);
            if ("1" == thisValue) {
                $('#subtitle_div').show();
                $('#subtitle_txt').attr('required', 'required');
            } else {
                $('#subtitle_div').hide();
                $('#subtitle_txt').removeAttr('required');
            }
        });
        //Initialize Select2 Elements
        $('.select2').select2();

        //Date picker

        $('#draft_date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
        $(".chosen-select").chosen({
            create_option: true,
            persistent_create_option: true,
            create_option_text: 'add',
        });
    })
</script>
@endpush
