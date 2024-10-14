@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Admin Manager</h4>

                       

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

                            <form method="POST" action="{{route('admin-manager.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                

                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="mb-3">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="mb-3">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-lg-7">
                                        <div class="mb-3">
                                            <label>Role</label>
                                            <label class="form-label">Select Role</label>
                                            <select class="form-control select2-search-disable" name="role">
                                                <option>Select Role</option>
                                                <option value="admin">admin</option>
                                                <option value="employee">employee</option>
                                                <option value="sales">sales</option>
                                                <option value="service">service</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <input type="submit" value="Create Manager" class="btn btn-dark mt-2">

                                </div>
                                
                            
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@endsection
