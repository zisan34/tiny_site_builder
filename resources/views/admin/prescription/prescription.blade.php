@extends('admin.layouts.app')


@push('css_lib')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('backend/bower_components/chosen/chosen.css') }}">

    <link rel="stylesheet" href="{{  URL::asset('backend/bower_components/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/custom.css') }}">

@endpush

@push('css_custom')

@endpush

@section('content')
    <!-- Content Header (Post header) -->
    <section class="content-header">
        <h1>Prescription</h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="">Prescription</a></li>
            <li class="active">Prescription</li>
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
                <div class="col-md-1 pull-right">
                    
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
                                <h3 style="display:inline-block; margin: 0px;">Patient :</h3>
                                <a class="btn bg-green pull-right" href="#" data-toggle="modal" data-target="#modal-default">Add Prescription</a>
                            </div>
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-stripped table-hover">
                                <thead>
                                    <tr class="bg-blue">
                                        <th style="min-width: 100px;">Prescribe Date</th>
                                        <th style="min-width: 100px;">Patient ID</th>
                                        <th style="min-width: 100px;">Name</th>
                                        <th style="min-width: 100px;">Type</th>
                                        <th style="min-width: 100px;">Age</th>
                                        <th style="min-width: 100px;">Gender</th>
                                        <th style="min-width: 100px;">Mobile</th>
                                        <th style="min-width: 130px;">Consultation ID</th>
                                        <th style="min-width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;"><?php echo date('d-m-Y')?></td>
                                        <td style="text-align: center;">Patient-562</td>
                                        <td style="text-align: center;">Abdur Hasim</td>
                                        <td style="text-align: center;">Regular</td>
                                        <td style="text-align: center;">26 Years</td>
                                        <td style="text-align: center;">Male</td>
                                        <td style="text-align: center;">+8801625463225</td>
                                        <td style="text-align: center;">CONSULT-6321</td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-xs bg-green" data-toggle="modal" data-target=".prescription_view"><i class="fa fa-eye"></i></button>
    
                                            <button class="btn btn-xs bg-purple"><i class="fa fa-pencil"></i></button>

                                            <button class="btn btn-xs bg-red"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center;"><?php echo date('d-m-Y')?></td>
                                        <td style="text-align: center;">Patient-562</td>
                                        <td style="text-align: center;">Abdur Hasim</td>
                                        <td style="text-align: center;">Regular</td>
                                        <td style="text-align: center;">26 Years</td>
                                        <td style="text-align: center;">Male</td>
                                        <td style="text-align: center;">+8801625463225</td>
                                        <td style="text-align: center;">CONSULT-6321</td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-xs bg-green" data-toggle="modal" data-target=".prescription_view"><i class="fa fa-eye"></i></button>

                                            <button class="btn btn-xs bg-purple"><i class="fa fa-pencil"></i></button>

                                            <button class="btn btn-xs bg-red"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="box-footer">
                <div class="col-md-2 col-md-offset-8">
                    <button class="btn bg-red btn-block"> Clear </button>
                </div>

                <div class="col-md-2">
                    <button class="btn bg-aqua btn-block"> Update </button>
                </div>
            </div>
             --}}
        </div>
    </section>


    <div class="modal fade in" id="modal-default" data-backdrop="static" style="padding-right: 17px;" >
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Prescription</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label style="display:block;" for="">Illness: </label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Heart pain" title="Illness">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label style="display:block;" for="">Pulse: </label>
                                <input type="number" class="form-control" id="" name="" value="" placeholder="0.00" title="Pulse">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label style="display:block;" for="">BP: </label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="BP" title="BP">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label style="display:block;" for="">Temp: </label>
                                <input type="number" class="form-control" id="" name="" value="" placeholder="0.00" title="Temp">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label style="display:block;" for="">Height: </label>
                                <input type="number" class="form-control" id="" name="" value="" placeholder="0.00" title="Height">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label style="display:block;" for="">Weight: </label>
                                <input type="number" class="form-control" id="" name="" value="" placeholder="0.00" title="Weight">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label style="display:block;" for="">Chief Complaint: </label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Chief Complaint" title="Chief Complaint">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label style="display:block;" for="">Past Illness: </label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Heart pain" title="Past Illness">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label style="display:block;" for="">Provisional Diagnosis: </label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Provisional Diagnosis" title="Provisional Diagnosis">
                            </div>
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="form-group">
                                <label style="display:block;" for="">Disease: </label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Disease" title="Disease">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="form-group">
                                <label style="display:block;" for="">Investigation :</label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Investigation" title="Investigation">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label style="display:block;" for="">Investigation Finding :</label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder="Findings...." title="Findings....">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="bg-blue">
                                        <td colspan="8">
                                            <h4 class="m-0">Medication</h4>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 200px; min-width: 200px;">
                                            <div class="form-group">
                                                <label style="display: block;">Generic:</label>
                                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"aria-hidden="true">
                                                    <option selected="selected">Generic-1</option>
                                                    <option>Generic-2</option>
                                                    <option>Generic-3</option>
                                                    <option>Generic-4</option>
                                                    <option>Generic-5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td style="width: 200px; min-width: 200px;">
                                            <div class="form-group">
                                                <label style="display:block;" for="">Brand:</label>
                                                <input type="text" class="form-control" id="" name="" value="" placeholder=" Square" title="Square">
                                            </div>
                                        </td>
                                        <td style="width: 80px; min-width:80px;">
                                            <div class="form-group">
                                                <label style="display:block;" for="">Dose:</label>
                                                <input type="text" class="form-control" id="" name="" value="" placeholder=" 1+0+1" title="Dose">
                                            </div>
                                        </td>
                                        <td style="width: 80px; min-width:80px;">
                                            <div class="form-group">
                                                <label style="display:block;" for="">Duration:</label>
                                                <input type="text" class="form-control" id="" name="" value="" placeholder="7 Days" title="Duration">
                                            </div>
                                        </td>
                                        <td style="width: 80px; min-width:80px;">
                                            <div class="form-group">
                                                <label style="display:block;" for="">Quantity:</label>
                                                <input type="text" class="form-control" id="" name="" value="" placeholder="14 Pcs" title="Quantity">
                                            </div>
                                        </td>
                                        <td style="width: 100px; min-width:100px;">
                                            <div class="form-group">
                                                <label style="display:block;" for="">Instraction:</label>
                                                <input type="text" class="form-control" id="" name="" value="" placeholder="Instraction" title="Instraction">
                                            </div>
                                        </td>
                                        <td style="width: 100px; min-width:100px;">
                                            <div class="form-group text-center">
                                                <label style="display:block;" for="" style="display: block;">Continue:</label>
                                                <input type="checkbox" id="" name="" value="" placeholder=""  title="Continue" style="height: 25px;">
                                            </div>
                                        </td>
                                        <td style="width: 100px; min-width:100px;">
                                            <button class="btn btn-block bg-green mt-25"> Add </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="display:block;" for="">Advice :</label>
                                <input type="text" class="form-control" id="" name="" value="" placeholder=" Advice" title="Advice">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Disposal</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"aria-hidden="true">
                                    <option selected="selected">N/A</option>
                                    <option>Disposal-1</option>
                                    <option>Disposal-2</option>
                                    <option>Disposal-3</option>
                                    <option>Disposal-4</option>
                                    <option>Disposal-5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label style="display:block;" for="">Note :</label>
                                <textarea type="text" class="form-control" id="" name="" value="" placeholder=" Note..." title="Note"> </textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn bg-red pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-green">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in prescription_view" data-backdrop="static" style="padding-right: 17px;" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Prescription View</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="">
                                <tbody>
                                    <tr>
                                        <td><span style="font-size: 14px">Illness</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Heart Pain</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Pulse</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">0.00</span></th>
                                    </tr>

                                    <tr>
                                        <td><span style="font-size: 14px">BP</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">BP-23</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Temp</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">0.00</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Height</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">0.00</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Weight</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">0.00</span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <table class="">
                                <tbody>
                                    <tr>
                                        <td><span style="font-size: 14px">Chief Complaint</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Complaint-5987</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Past Illness</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Heart Pain</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Provisional Diagnosis</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Provisional Diagnosis</span></th>
                                    </tr>

                                    <tr>
                                        <td><span style="font-size: 14px">Disease</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Disease</span></th>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 14px">Investigation</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Investigation</span></th>
                                    </tr>
                                    
                                    <tr>
                                        <td><span style="font-size: 14px">Investigation Finding</span></td>
                                        <td class="p-5">:</td>
                                        <th style="text-align:left;"><span style="font-size: 18px;">Investigation Name</span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table mt-25 table-bordered table-hover table-stripped">
                                <thead>
                                    <tr class="bg-blue">
                                        <td colspan="8">
                                            <h4 class="m-0">Medication</h4>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray">
                                        <th>Generic</th>
                                        <th>Brand</th>
                                        <th>Dose</th>
                                        <th>Duration</th>
                                        <th>Quantity</th>
                                        <th>Instraction</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <span>Generic-1</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>Square</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>1+0+1</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>7 Days</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>14 Pcs</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>Instraction</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center;">
                                            <span>Generic-2</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>Acme</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>1+0+1</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>14 Days</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>28 Pcs</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>Instraction</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center;">
                                            <span>Generic-3</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>Square</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>1+0+1</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>7 Days</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>14 Pcs</span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span>Instraction</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-25">
                            <h4 class="bg-gray p-5">Advice :</h4>
                            <span style="font-size: 16px;">Lorem ipsum dolor sit amet.</span>
                        </div>

                        <div class="col-md-6 mt-25">
                            <h4 class="bg-gray p-5">Disposal</h4>
                            <span style="font-size: 16px;">Disposal-2</span>
                        </div>

                        <div class="col-md-12 mt-25">
                            <h4 class="bg-gray p-5">Note :</h4>
                            <span style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima labore iusto ex reprehenderit saepe dolores id est, laudantium doloremque quos omnis alias deleniti, repellendus error ea facilis suscipit. At praesentium, repudiandae fuga.</span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn bg-red pull-left" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
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

    $('body').addClass('sidebar-collapse');
    //Initialize Select2 Elements
            $('.select2').select2();
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
