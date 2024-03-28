@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blogs</a></li>
                                <li class="breadcrumb-item active">Edit Blogs</li>
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

                            <form method="post" action="{{ route('admin.update.blog') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$id->id}}">
                                <input type="hidden" name="old_image" value="{{ $id->blogs_image }}">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control select2-search-disable" name="category_id">
                                                <option>Select Category</option>
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $id->category_id ? 'selected' : '' }}>{{ $item->slug }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog title</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Blog title" value="{{$id->title}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog Place</label>
                                            <input type="text" class="form-control" name="place"
                                                placeholder="Enter Blog Place" value="{{$id->place}}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog Created By</label>
                                            <input type="text" class="form-control" name="created_by"
                                                placeholder="Enter Blog Creator Name" value="{{$id->created_by}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Blog Image</label>
                                            <input type="file" class="form-control" name="blogs_image" id="formFile"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label"> </label>
                                        <img src="{{ asset($id->blogs_image) }}" style="width:100px; height:100px">
                                    </div>
                                </div>
                                <label>Blog Description</label>
                                <textarea id="elm1" name="description">{{$id->description}}</textarea>

                                <input type="submit" value="Update Blog" class="btn btn-dark mt-4">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
