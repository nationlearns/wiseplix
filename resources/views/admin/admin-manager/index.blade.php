@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Admin Managers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Managers</a></li>
                                <li class="breadcrumb-item active">All Admin Manager</li>
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

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <a href="{{ route('admin-manager.create') }}" class="btn btn-primary m-3">Add Admin Manager</a>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>
                                            <td>
                                                @if ($item->role != 'admin')                                                   
                                                
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
                                                                form.action = `/admin/admin-manager/${objectId}/delete`; // Update the form action with object ID

                                                                // Submit the form
                                                                form.submit();
                                                            });
                                                        });

                                                    </script>
                                                @else
                                                    -
                                                @endif
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
@endsection
