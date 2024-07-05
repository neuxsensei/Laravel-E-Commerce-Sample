<!-- Bu belge admin layout u ve controllerı ile ilgilidir. -->

@extends('layouts.admin.admin')
@section('title','Database Dashboard -> Add Category')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Category Add</h2>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">

                <div class="card card-primary">

                    <!-- form start -->
                    <form role="form" action="{{route('admin_category_add')}}" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent ID</label>
                                <input type="text" name="parent_id" class="form-control" id="exampleInputEmail1" placeholder="Parent ID">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Keywords</label>
                                <input type="text" name="keywords" class="form-control" id="exampleInputPassword1" placeholder="Keywords">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Slug</label>
                                <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder="Slug">
                            </div>

                            <!-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>

                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>

            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
                Footer
            </div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
