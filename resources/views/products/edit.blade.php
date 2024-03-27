@extends('admin.layouts.master')
@section('content')
    <header>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
    </header>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="height: 200%; width: 160%;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="first_name">Title</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="Enter Title" name="title" value="{{ old('title', $product->title ?? '') }}">
                                    </div>
                            
                                    <label for="editor" class="form-label">Description</label>
                                    <div data-mdb-input-init class="form-outline mb-4" id="editorWrapper">
                                        <textarea type="text" id="editor" name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select id="category_id" name="category_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" style="font-weight: bold;">Uploaded Image</label>
                                        <!-- Display old image if available -->
                                        @if ($product->image)
                                            <img src="{{ asset('uploads/' . $product->image) }}" width="100px" height="100px" alt="Old Image"
                                                class="mt-2">
                                        @elseif(old('image'))
                                            <img src="{{ old('image') }}" alt="Old Image" class="mt-2">
                                        @endif
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="image" style="font-weight: bold;">Choose photo to upload New Image:</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                            
                                    <div class="form-group">
                                        <label style="font-weight: bold;">Status</label><br><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status1" value="1" {{ old('status', $product->status ?? '') == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status1">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status0" value="0" {{ old('status', $product->status ?? '') == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status0">Inactive</label>
                                        </div>
                                    </div><br>
                                </div>
                                <!-- /.card-body -->
                            
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
            {{-- </div><!-- /.container-fluid --> --}}
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
        </section>
        <!-- /.content -->
    </div>
@endsection
