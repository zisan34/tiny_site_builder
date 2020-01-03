@extends('admin.layouts.app')



@push('css_lib')



    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">

    <link href="{{  URL::asset('backend/bower_components/summernote/summernote.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('backend/bower_components/chosen/chosen.css') }}">

@endpush



@push('css_custom')

<style>
.select2-container--default .select2-selection--multiple .select2-selection__rendered li{
    list-style: none;
    background-color: #027fbb;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered li span{
    list-style: none;
    color: #fff;
}



.select2-container--default .select2-search--inline .select2-search__field {
    background: #fff; 
    border: none;
    outline: 0;
    box-shadow: none;
    -webkit-appearance: textfield;
    padding: 5px 0px 0px 0px; 
    margin: 0;
}
.datepicker-dropdown{

    z-index: 9999 !important;

}

.category, .item, .chosen-container-single .chosen-single 

{

    font-family: sans-serif;

}

.category 

{

    font-weight: bold;

}

.chosen-results li.item 

{

    padding-left: 25px !important;

}

</style>

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

                    <form method="post" action="{{ route('drafts.store') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="box-body">

                            <div class="row">

                                <div class="col-md-2">

                                    <div class="form-group">

                                        <label for="draft_date">Date :<small style="color:red">*</small></label>

                                        <input type="text" class="form-control date" id="draft_date" name="draft_date" title="Draft Date" required="required" value="{{ date("d-m-Y", strtotime(now()))}}" />

                                    </div>



                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">

                                        <label for="draft_ref">Draft Ref# :<small style="color:red">*</small></label>

                                        <input type="text" class="form-control" id="draft_ref" name="draft_ref" title="Draft Ref#" placeholder="Draft Ref#" required="required" readonly="readonly" value="23.01.908.140.-.---.-.{{ date("d.m.y", strtotime(now()))}}">

                                        <span id="ref_txt" style="display: none;"><span id="fixed">23.01.908.140</span>.<span id="branch_code_txt">-</span>.<span id="file_id_txt">---</span>.<span id="volume_txt">-</span>.<span id="date_txt">{{ date("d.m.y", strtotime(now()))}}</span></span>

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

                                        <label for="branch_code">Branch :<small style="color:red">*</small></label>

                                        <select class="form-control select2" id="branch_code" name="branch_code" title="Please select country." style="width: 100%;" required="required">

                                            <option value="" selected="selected">Select</option>

                                            @foreach($branches as $branch)

                                            <option value="{{$branch->id}}">{{$branch->name}}({{$branch->short_name}})</option>

                                            @endforeach

                                        </select>

                                    </div>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="draft_type">Draft Category :<small style="color:red">*</small></label>

                                        <select class="form-control chosen-select" id="draft_type" name="draft_type" title="Draft Category" style="width: 100%;" required="required">

                                            <option value="" selected="selected">Select Type</option>



                                            {{-- @foreach($draft_types as $type)

                                                <option value="{{ $type->id }}">

                                                    {{ $type->name }} ({{ $type->short_name }})

                                                </option>

                                            @endforeach --}}



                                            @foreach($draft_types as $type)

                                                <option value="{{$type->id}}" class="category">

                                                    {{$type->name}}

                                                </option>



                                                @if(count($type->subTypes)>0)

                                                @foreach($type->subTypes as $sub_key => $sType)

                                                    <option value="{{$type->id}}|{{$sType->id}}" class="item">

                                                        {{$sType->title}}

                                                    </option>

                                                @endforeach

                                                @endif

                                            @endforeach

                                        </select>

                                    </div>



                                </div>



                                <div class="col-md-9">

                                    <div class="form-group">

                                        <label for="country">Share & Send :<small style="color:red">*</small></label>

                                        <select class="form-control select2" multiple="multiple" data-placeholder="Select User" id="sent_to" name="sent_to[]" required="required" autocomplete="false" style="width: 100%;">

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

                                    <textarea class="form-control summernote" name="draft_details"> </textarea>

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

    <!-- CK Editor -->

    <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('backend/bower_components/summernote/summernote.js')}}"></script>

    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.jquery.js') }}"></script>

    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.proto.js') }}"></script>

@endpush



@push('js_custom')

<script>

$(function() {

    

    //Initialize Select2 Elements

    $('.select2').select2();



    $(".chosen-select").chosen({

        create_option: true,

        persistent_create_option: true,

        create_option_text: 'add',

    });

    $('.summernote').summernote({

        tabsize: 2,

        height: 375,

        placeholder: 'Draft Contents Here'

    });

    // Initial Focused field

    $('#product_name').focus();



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





    //Date picker

    $('.date').datepicker({

        autoclose: true,

        format: "dd-mm-yy",

        todayBtn: "linked",

        todayHighlight: true

    });

});



</script>

@endpush

