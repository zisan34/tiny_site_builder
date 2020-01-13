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
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
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
                                                <div class="row" style="display: block;">  
                                                    <div class="col-md-12">
                                                        <label for="publish_date">Publish Date Time :<small style="color:red;">*</small></label>
                                                        <label id="publish_date-error" class="error" for="publish_date"></label>
                                                        <label id="publish_time-error" class="error" for="publish_time"></label>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group">

                                                    <div class="input-group-addon" style="padding: 0px; border: 0px;">
                                                        <input id="publish_date" name="publish_date" required readonly class="form-control datepicker" value="{{date('d-m-Y', strtoTIme($post->publish_datetime))}}">
                                                    </div>
                                                    <div class="input-group-addon" style="padding: 0px; border: 0px;">
                                                        <input type="text" class="form-control timepicker" id="publish_time" name="publish_time" value="{{date('h:i A', strtoTIme($post->publish_datetime))}}" required readonly placeholder="time" >
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
            height: 190,
        });


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

        $(".chosen-select").chosen({
            create_option: true,
            persistent_create_option: true,
            create_option_text: 'add',
        });
    })
</script>
@endpush
