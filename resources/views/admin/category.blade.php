<!-- Bu belge admin layout u ve controllerı ile ilgilidir. -->

@extends('layouts.admin.admin')
@section('title','Database Dashboard -> Category')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
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
                <h3 class="card-title">Category List</h3>

            </div>


            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Parent ID</th>
                            <th>Title(s)</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <!-- bu kısım tablonun header dışı kısmı db buraya yazılacak -->
                        <tbody>
                        @foreach ($datalist as $rs)
                        <tr>
                            <td>{{$rs -> id}}</td>
                            <td>{{$rs -> parent_id}}</td>
                            <td>{{$rs -> title}}</td>
                            <td>{{$rs -> status}}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @endforeach
                        <!-- bu kısım tablonun header dışı kısmı db buraya yazılacak -->
                        <tfoot>

                        <tr>
                            <th>Product ID</th>
                            <th>Parent ID</th>
                            <th>Title(s)</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card-body">
                Bunu Yazan Tosun Okuyana Kosun!

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('footer')
    <script src="{{asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- DataTables -->
    <script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endsection
