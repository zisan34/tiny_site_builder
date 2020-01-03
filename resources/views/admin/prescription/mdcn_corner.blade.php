@extends('admin.layouts.app')


@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/custom.css') }}">
@endpush

@push('css_custom')

@endpush

@section('content')
    <!-- Content Header (Post header) -->
    <section class="content-header">
        <h1>Medicine Delivery</h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="">Prescription</a></li>
            <li class="active">Medicine Delivery</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
            <div class="box-header with-border">
                <div class="col-md-6 col-md-offset-3">
                    <div class="from-group search_bar">
                        <input type="search" class="form-control search_fild" placeholder="Type BA/Personal Number ">
                        <i class="fa fa-search search_icon"></i>
                        <a href="#"><i class="fa fa-undo search_undo"></i></a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="bg-navy" style="padding-top: 1px; padding-bottom: 1px; margin-bottom:15px;">
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                        <div class="p-15">
                                            <img class="" style="width: 105px; height: 122px;" src="{{ asset('frontend/images/avatar.jpg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
                                        <table style="border:1px solid #fff; display: block; margin: 15px 15px; padding: 0px 15px; ">
                                            <tr>
                                                <td style="text-align: left!important;">Personal Number</td>
                                                <td style="padding:5px">:</td>
                                                <td> <span style="font-size: 18px;">+880 1000000000</span> </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left!important;">Rank</td>
                                                <td style="padding:5px">:</td>
                                                <td> <span style="font-size: 18px;">Brigadier General</span></td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left!important;">Patient Name</td>
                                                <td style="padding:5px">:</td>
                                                <td> <span style="font-size: 18px;">Abdul Hakim</span></td>
                                            </tr>

                                            <tr>
                                                <td style="text-align: left!important;">Patient Type</td>
                                                <td style="padding:5px">:</td>
                                                <td> <span style="font-size: 18px;">Regular</span> </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="bg-navy" style="padding-top: 1px; padding-bottom: 1px; margin-bottom:15px;">
                                <table style="border:1px solid #fff; display: block; margin: 15px 15px; padding: 0px 15px">
                                    <tr>
                                        <td style="text-align: left!important;">Consultation ID</td>
                                        <td style="padding:5px">:</td>
                                        <td> <span style="font-size: 18px;">CONS-5240</span> </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left!important;">Age</td>
                                        <td style="padding:5px">:</td>
                                        <td> <span style="font-size: 18px;">26</span></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left!important;">Gender</td>
                                        <td style="padding:5px">:</td>
                                        <td> <span style="font-size: 18px;">Male</span></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left!important;">Mobile</td>
                                        <td style="padding:5px">:</td>
                                        <td> <span style="font-size: 18px;">+880 1465971336</span> </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-gray med_heading">
                                <h3 style="display:inline-block; margin: 0px;">Medicine :</h3>
                                {{-- <a href="#" class="btn bg-aqua pull-right ml-20">Update</a>
                                <a href="#" class="btn bg-red pull-right">Clear</a> --}}
                            </div>
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-stripped table-hover">
                                <thead>
                                    <tr class="bg-blue">
                                        <th style="min-width: 100px;">ID</th>
                                        <th style="min-width: 100px;">Name</th>
                                        <th style="min-width: 100px;">Dose</th>
                                        <th style="min-width: 100px;">Duration</th>
                                        <th style="min-width: 100px;">T.Qty</th>
                                        <th style="min-width: 100px;">Delivered Qty</th>
                                        <th style="min-width: 100px;">Pending</th>
                                        <th style="min-width: 100px; border-right:1px solid #222;">Qty</th>
                                        <th style="min-width: 100px; text-align: right !important; border:1px solid #222;">Price</th>
                                        <th style="min-width: 100px; border:1px solid #222;">Stock</th>
                                        <th style="min-width: 100px;">Status</th>
                                        <th style="min-width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">MED-365</td>
                                        <td style="text-align: center;">E-Cap</td>
                                        <td style="text-align: center;">1+0+1</td>
                                        <td style="text-align: center;">7 Days</td>
                                        <td style="text-align: center;">14 <small>Pcs</small></td>
                                        <td style="text-align: center;">
                                            <div class="input-group margin" style="width: 120px; margin: auto;">
                                                <input type="text" class="form-control text-center" placeholder="00">
                                                <div class="input-group-btn">
                                                    <span class="btn bg-gray">Pcs</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center;">0 <small>Pcs</small></td>
                                        <td style="text-align: center; border-right:1px solid #222;">14 <small>Pcs</small></td>
                                        <td style="text-align: right ;">8,00 <small>Tk</small></td>
                                        <td style="text-align: center; border-right:1px solid #222;">526 <small>Pcs</small></td>
                                        <td style="text-align: center;"><span class="label bg-green">Delivered</span></td>
                                        <td style="text-align: center;"><input type="checkbox" name="" value=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <div class="col-md-2 col-md-offset-8">
                    <button class="btn bg-red btn-block"> Clear </button>
                </div>

                <div class="col-md-2">
                    <button class="btn bg-aqua btn-block"> Update </button>
                </div>


            </div>
            
        </div>
    </section>
@endsection

@push('js_lib')
    <!-- Select2 -->
    <script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/summernote/summernote.js')}}"></script>
    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('backend/bower_components/chosen/chosen.proto.js') }}"></script>
@endpush

@push('js_custom')
<script>

    $('body').addClass('sidebar-collapse');

    // $(function() {
    //     $('.summernote').summernote({
    //         tabsize: 2,
    //         height: 375,
    //         placeholder: 'Post Contents Here'
    //     });

    //     // Initial Focused field
    //     $('#post_title').focus();

    //     $(document).on('change', '#post_visibility', function() {
    //         var thisValue = $(this).val();
    //         // alert(thisValue);

    //         if ("1" == thisValue) {
    //             $('#protected_pass_div').show();
    //             $('#protected_pass').attr('required', 'required');
    //         } else {
    //             $('#protected_pass_div').hide();
    //             $('#protected_pass').removeAttr('required');
    //         }
    //     });

    //     $(document).on('change', '#post_template_ddl', function() {
    //         var thisValue = $(this).val();
    //         // alert(thisValue);
    //         if ("1" == thisValue) {
    //             $('#subtitle_div').show();
    //             $('#subtitle_txt').attr('required', 'required');
    //         } else {
    //             $('#subtitle_div').hide();
    //             $('#subtitle_txt').removeAttr('required');
    //         }
    //     });

    //     $(document).on('change', '#content_type', function() {
    //         var thisValue = $(this).val();
    //         // alert(thisValue);
    //         if ("2" == thisValue) {
    //             $('#details_div').hide();
    //             $('#post_details').removeAttr('required');
    //             $('#file_upload_div').show();
    //             $('#file_upload').attr('required', 'required');
    //         } else {
    //             $('#file_upload_div').hide();
    //             $('#file_upload').removeAttr('required');
    //             $('#details_div').show();
    //         }
    //     });

    //     //Initialize Select2 Elements
    //     $('.select2').select2();

    //     //Date picker
    //     $('.date').datepicker({
    //         autoclose: true,
    //         format: 'dd-mm-yyyy',
    //     });

    //     $(".chosen-select").chosen({
    //         create_option: true,
    //         persistent_create_option: true,
    //         create_option_text: 'add',
    //     });
    // });
</script>
@endpush
