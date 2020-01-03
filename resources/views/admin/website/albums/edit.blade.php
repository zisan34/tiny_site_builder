@extends('admin.layouts.app')

@push('css_custom')
<style>
    .button_cus_up
    {
        margin-top: 20px;
    }
</style>
@endpush


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Albums
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Album Management</a></li>
            <li class="active">Edit Album</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Update Album</h3>
                        <div id="msg"></div>

                        <a href="{{ route('albums.index') }}" class="btn btn-info btn-xs pull-right">Go back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{route('albums.update',$album->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('put')}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title"> Album Title:<small style="color:red">*</small> </label>
                                <input required class="form-control" type="text" name="title" value="{{$album->title}}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cover_image"> Cover Image:</label>
                                <input type="file" name="cover_image" value="1" />
                            </div>
                            <div class="form-group col-md-2">
                                <label for="order"> Order:<small style="color:red">*</small> </label>
                                <input class="form-control" required type="number" name="order" value="1" value="{{$album->order}}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="caption"> Caption :</label>
                                <input type="text" id="caption" name="caption" class="form-control" value="{{$album->caption}}">
                            </div>
                            <div class="form-group col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="album_visibility">Visibility Type :<small style="color:red">*</small></label>
                                            <label id="album_visibility-error" class="error" for="album_visibility"></label>
                                            <select name="album_visibility" id="album_visibility" class="form-control" required>
                                                <option value="0" @if($album->visibility == 0) selected @endif>Public</option>
                                                <option value="1" @if($album->visibility == 1) selected @endif>Password Protected</option>
                                                <option value="2" @if($album->visibility == 2) selected @endif>Private</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" id="protected_pass_div" @if($album->visibility != 1) style="display: none;" @endif>
                                            <label for="protected_pass">&nbsp;</label>
                                            <label id="protected_pass-error" class="error" for="protected_pass"></label>
                                            <input type="text" class="form-control" name="protected_pass" placeholder="Enter Password" id="protected_pass" value="{{$album->visibility_pass}}">
                                        </div>  
                                    </div> 
                                </div>                             
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-group">
                                    <input type="submit" class="button_cus_up btn btn-block btn-success pull-left" value="Update">
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@push('js_custom')
<script>

$(function () {  

    $(document).on('change', '#album_visibility', function() {
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
});
</script>
@endpush