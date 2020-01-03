@extends('admin.layouts.app')

@push('css_custom')
<style>
    
tbody tr td img{
    width: 100px;
}
.button_cus_up{
    margin-top: 25px;
}
</style> 
@endpush

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Site Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">General Site Settings Management</a></li>
            <li class="active">General Site Settings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">General Site Settings</h3>
                        <div id="msg"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(isset($general_setting))
                        <form action="{{route('general-settings.update',['general_setting' => $general_setting->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="site_title"> Title: </label>
                                    <input class="form-control" type="text" name="site_title" value="{{$general_setting->site_title}}" />
                                </div>
                                <div class="col-md-12">
                                    <label for="tagline"> Tagline :</label>
                                    <input class="form-control" type="text" name="tagline"  value="{{$general_setting->tagline}}"/>
                                </div>
                                <div class="col-md-12">
                                    <label for="phy_address"> Physical Address :</label>
                                    <input class="form-control" type="text" name="phy_address"  value="{{$general_setting->phy_address}}"/>
                                </div>
                                <div class="col-md-12">
                                    <label for="site_address"> Website Address :</label>
                                    <input class="form-control" type="text" name="site_address"  value="{{$general_setting->site_address}}"/>
                                </div>
                                <div class="col-md-12">
                                    <label for="email_address"> Email Address :</label>
                                    <input class="form-control" type="text" name="email_address"  value="{{$general_setting->email_address}}"/>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <form action="{{route('general-settings.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="site_title"> Title: </label>
                                    <input class="form-control" type="text" name="site_title" />
                                </div>
                                <div class="col-md-12">
                                    <label for="tagline"> Tagline :</label>
                                    <input class="form-control" type="text" name="tagline"  />
                                </div>
                                <div class="col-md-12">
                                    <label for="phy_address"> Physical Address :</label>
                                    <input class="form-control" type="text" name="phy_address"  />
                                </div>
                                <div class="col-md-12">
                                    <label for="site_address"> Website Address :</label>
                                    <input class="form-control" type="text" name="site_address"  />
                                </div>
                                <div class="col-md-12">
                                    <label for="email_address"> Email Address :</label>
                                    <input class="form-control" type="text" name="email_address"  />
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    <div id="logo_view" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Draft Title</h4>
                    <hr>
                    <h6 class="modal-category">Draft Category</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    <p>Draft Content here...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection



