@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">SubCategory</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">SubCategory</a></li>
                                <li class="breadcrumb-item active">All SubCategory</li>
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
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>SubCategory Name</th>
                                        <th>SubCategory Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->status}}</td>
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
