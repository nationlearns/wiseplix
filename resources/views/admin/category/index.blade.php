@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                                <li class="breadcrumb-item active">All Category</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <a href="#" data-bs-toggle="modal" data-bs-target="#addCategory" class="btn btn-primary my-3">Add Category</a>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Category Name</th>
                                        <th>Category Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->alt_name}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>
                                                <a href="{{route('admin.category.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                                {{-- <a href="" class="btn btn-sm btn-danger">Delete</a> --}}
                                                <!-- HTML -->
                                                <!-- Delete Button -->
                                                <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $item->id }}">Delete</a>

                                                <!-- Hidden Form -->
                                                <form id="delete-form" action="" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <!-- JavaScript -->
                                                <script>

                                                    document.querySelectorAll('.delete-btn').forEach(button => {
                                                        button.addEventListener('click', function(event) {
                                                            event.preventDefault(); // Prevent default anchor behavior

                                                            const objectId = this.getAttribute('data-id'); // Get the object ID

                                                            // Show confirmation dialog
                                                            // Set the action attribute of the form to the correct route
                                                            const form = document.getElementById('delete-form');
                                                            form.action = `/admin/all/category/${objectId}/delete`; // Update the form action with object ID

                                                            // Submit the form
                                                            form.submit();
                                                        });
                                                    });

                                                </script>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Category</label>
                            <input type="text" class="form-control" name="alt_name" placeholder="Enter Category " required>
                        </div>

                        <div class="mb-3">
                            <label>Status</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    True
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2"  value="0">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    False
                                </label>
                            </div>
                            
                        </div>

                        <input type="submit" value="Submit" class="btn btn-dark mt-4">


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
