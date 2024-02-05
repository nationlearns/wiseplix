@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blogs</a></li>
                                <li class="breadcrumb-item active">Add Blogs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.store.blog') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control select2-search-disable" name="category_id">
                                                <option>Select Category</option>
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->id }}">{{ $item->slug }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog title</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Blog title" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog Place</label>
                                            <input type="text" class="form-control" name="place"
                                                placeholder="Enter Blog Place" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog Created By</label>
                                            <input type="text" class="form-control" name="created_by"
                                                placeholder="Enter Blog Creator Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog Image</label>
                                            <input type="file" class="form-control" name="blogs_image"/>
                                        </div>
                                    </div>
                                </div>
                                <label>Blog Description</label>
                                <textarea id="elm1" name="description"></textarea>

                                <input type="submit" value="Add Blog" class="btn btn-dark mt-4">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
