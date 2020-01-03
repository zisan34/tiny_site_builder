@extends('admin.layouts.app')
@section('title')
    | Profile
@endsection
@push('css_lib')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Update your Profile</h1>
    </section>

    @php
    $profile=Auth::user()->profile;
    @endphp
    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Profile Info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <form action="{{ route('profile.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="text-md-right">{{ __('Name') }}:<small style="color:red">*</small></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',Auth::user()->name) }}" required autocomplete="name" tabindex="1" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-md-right">{{ __('E-Mail Address') }}:<small style="color:red">*</small></label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', Auth::user()->email) }}" required autocomplete="email" tabindex="2">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-md-right">{{ __('New Password') }}</label>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" tabindex="3">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="text-md-right">{{ __('Confirm New Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" tabindex="4">
                            </div>

                            <div class="form-group">
                                <label>Date of birth:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="dob" autocomplete="off" value="@if($profile->dob){{ date("d-m-Y", strtotime($profile->dob))}}@endif" tabindex="5">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <input  tabindex="6" type="radio" name="gender" value="Male" @if($profile) @if($profile->gender=="Male") checked @endif @endif>Male
                                <input tabindex="7" type="radio"  name="gender" value="Female" @if($profile) @if($profile->gender=="Female") checked @endif @endif>Female<br>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="shipping_location">Country: </label>
                                <input class="form-control" type="text" id="country" name="country" tabindex="8" style="width: 100%;" autocomplete="country"  value="{{ old('country', $profile->country) }}">
                            </div>

                            
                            <div class="form-group">
                                <label for="shipping_location">City: </label>
                                <input class="form-control" type="text" id="city" name="city"tabindex="9" style="width: 100%;" autocomplete="city" value="{{ old('country', $profile->city) }}">
                            </div>

                            <div class="form-group">
                                <label for="attribute_type">Address</label>
                                <input type="text" class="form-control" id="address" name="address" title="Address" autocomplete="address"  value="{{ old('country', $profile->address) }}" placeholder="Address"  tabindex="10">
                            </div>

                            <div class="form-group">
                                <label for="attribute_type">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" title="Phone" placeholder="Phone" autocomplete="phone"  value="{{ old('country', $profile->phone) }}" tabindex="11">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Profile Image</label>
                                <input type="file" id="image" name="image" tabindex="12">
                            </div>
                        </div>
                        <div class="col-md-12 text-right mt-10">
                            <button type="submit" class="btn btn-success"> Update Profile </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection

@push('js_lib')
<!-- iCheck 1.0.1 -->
<!-- Select2 -->
@endpush

@push('js_custom')
<script>
    $(function(){

            //Datepicker
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy'
            });
    });
</script>
@endpush
