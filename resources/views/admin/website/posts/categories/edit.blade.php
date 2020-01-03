@extends('admin.layouts.app')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Post Categories
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Post Category Management</a></li>
            <li class="active">Post Category Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Update Category {{$category->title}}</h3>
                        <div id="msg"></div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('categories.update',['id'=>$category->id])}}" method="post">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attribute_type">Category Title :<small style="color:red">*</small></label>
                                                <input type="text" name="title" id="title" class="form-control" title="Category Title" placeholder="Category Title" required="required"  value="{{$category->title}}">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="attribute_type">Category Slug :<small style="color:red">*</small></label>
                                        <input type="text" id="slug" name="slug" class="form-control" title="Category Slug" placeholder="Category Slug" required="required" value="{{$category->slug}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="attribute_type">Category Description :</label>
                                        <textarea type="text" name="description" class="form-control" title="Category Description" placeholder="Category Description" rows="5">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="attribute_type">Parent Category :</label>
                                        <select id="parent_category" class="form-control" name="parent_category">
                                            <option value="" selected>--Select Parent Category--</option>
                                            @foreach($categories as $select_category)
                                            <option value="{{$select_category->id}}"
                                                @if($category->parent_category)
                                                @if($category->parent_category->id == $select_category->id)
                                                selected
                                                @endif
                                                @endif> {{$select_category->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">                      
                                            <label for="order">Order :</label>
                                            <input type="number" name="order" class="form-control"   required="required" value="1">
                                            </div>
                                            <div class="col-md-4">
                                                <a class="btn btn-block btn-primary pull-right"  style="margin-top: 24px;"  href="{{route('categories.index')}}">Go back</a>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="submit" class="btn btn-success btn-block pull-right"  style="margin-top: 24px;" value="Update">
                                            </div>
                                        </div>
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
    <!-- /.content -->
    <!-- Modal -->
@endsection

@push('js_custom')

<script>
    $(function(){
    $(document).on('keyup', '#title', function(e) {
        var title = $(this).val();
        var slug = convertToSlug(title);
        $('#slug').val(slug);
    });
    function convertToSlug(Text)
    {
        return Text
            .toLowerCase()
            .replace(/ /g,'-')
            .replace(/[^\w-]+/g,'')
            ;
    }
    })
</script>
@endpush
