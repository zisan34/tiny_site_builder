@extends('admin.layouts.app')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Categories
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Draft Management</a></li>
            <li class="active">Draft List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Update Category {{$category->title}}</h3>
                        <div id="msg"></div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <form action="{{route('news_category.update',['id'=>$category->id])}}" method="post">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attribute_type">Category Title :<small style="color:red">*</small></label>
                                                <input type="text" name="title" class="form-control" title="Category Title" value="{{$category->title}}" required="required">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attribute_type">Category Slug :<small style="color:red">*</small></label>
                                                <input type="text" name="slug" class="form-control" title="Category Slug" placeholder="Category Slug" required="required" value="{{$category->slug}}">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="attribute_type">Category Description :<small style="color:red">*</small></label>
                                        <textarea type="text" name="description" class="form-control" title="Category Description" placeholder="Category Description" required="required">{{$category->description}}</textarea>
                                    </div>

                                </div>                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Update">
                                        <a class="btn btn-info pull-right" href="{{route('news_category.index')}}">Go back</a>
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

