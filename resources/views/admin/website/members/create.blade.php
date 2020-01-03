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
        <h1>Add New Member</h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('posts.index') }}"> Members </a></li>
            <li class="active">Add New Member</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Member Info</h3>
                        <a href="{{ route('members.index') }}" class="btn btn-danger btn-xs pull-right">Back to List</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('members.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Member Name :<small style="color:red">*</small></label>
                                                <input type="text" id="name" name="name" class="form-control" title="Post Title" placeholder="Member Name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="designation">Member Designation :<small style="color:red">*</small></label>
                                                <input type="text" name="designation" class="form-control" title="Post Title" placeholder="Member Designation" required="required">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12" id="details_div">
                                            <label for="info">Bio:</label>
                                            <textarea name="info" id="summernote"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="row text-center">
                                        <button type="button" class="btn btn-default">Preview</button>
                                        <button type="button" class="btn btn-default">Save as Draft</button>
                                        <button type="submit" class="btn btn-success">Publish</button>
                                    </div>
                                    <div class="row">
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="member_category">Select Category :<small style="color:red">*</small></label>
                                                <select name="member_category"  class="form-control chosen-select" required>
                                                    <option value="" selected>--Select Category & Sub Category--</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" class="category">
                                                            {{$category->title}}
                                                        </option>

                                                        @if($category->member_subcategories)
                                                        @foreach($category->member_subcategories as $subcategory)
                                                            <option value="{{$category->id}}|{{$subcategory->id}}" class="item">
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
                                                <label for="image"> Image :</label>
                                                <input type="file" id="image" name="image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="order">Order :<small style="color:red">*</small></label>
                                                <input type="number" class="form-control" id="draft_order" name="order" title="Post Order" required="required" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a  href="{{ route('members.index') }}"  class="btn btn-danger">Cancel</a>
                            <input type="submit" class="btn btn-success pull-right" style="margin-left: 10px;" value="Save">
                            <button type="button" class="btn btn-default pull-right" style="margin-left: 10px;">Save as Draft</button>
                            <button type="submit" class="btn btn-default pull-right" style="margin-left: 10px;">Preview</button>
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
            height: 80
        });


        // Initial Focused field
        $('#name').focus();




        //Initialize Select2 Elements
        $('.select2').select2();

        //Date picker
        $('.date').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',


        });

        $(".chosen-select").chosen({
            create_option: true,
            persistent_create_option: true,
            create_option_text: 'add',
        });
    });
</script>
@endpush
