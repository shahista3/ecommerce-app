@extends('admin.layouts.master')
@section('content')
    
 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banners</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Banners</li>
                           
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h3 class="card-title">DataTable with default features</h3>&nbsp;&nbsp; --}}
                                <a href="{{ url('banners/create') }}" class="btn btn-warning">Add Banner</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banner as $b)
                                            <tr>
                                                <td>{{ $b->id }}</td>
                                                <td>{{ $b->title }}</td>
                                               
                                                @if ($b->image == null)
                                                    <td class="text-center"><img src="https://placehold.co/600x400" alt="Image" height="50px" width="70px"></td>
                                                @else
                                                    <td class="text-center"><img src="{{ asset('uploads/' . $b->image) }}" alt="Image" height="50px" width="70px"></td>
                                                @endif

                                                <td>
                                                    @if($b->status == 1)
                                                        <span class="badge bg-success rounded-pill">Active</span>
                                                    @else
                                                        <span class="badge bg-warning rounded-pill">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('banners.delete', $b->id) }}"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection