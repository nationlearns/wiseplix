@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Lead</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Lead</a></li>
                                <li class="breadcrumb-item active">Add Lead</li>
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
                        <div class="card-header">
                            Contacted By
                        </div>
                        <div class="card-body">
                            {{-- <a href="{{route('add.leads')}}" class="btn btn-primary m-3">Add Lead</a> --}}
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Associate Profile</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data->getPurchaseDetails as $key => $associate)
                                        <tr>
                                            <th scope="row">
                                                <p><b>Name</b>  : {{$associate->user['name'] ?? '-'}}</p>
                                                <p><b>Email</b> : {{$associate->user['email'] ?? '-'}}</p>
                                                <p><b>Phone</b> : {{$associate->user['mobile'] ?? '-'}}</p>                                                
                                            </th>
                                            <td>
                                                
                                                @if ($associate->user->associate()->exists())                                                                                
                                                    <a class="btn btn-sm btn-dark" href="{{route('associate.profile', $associate->user->associate->id)}}">View Profile</a>
                                                @endif
                                    
                                            </td>
                                            <td>
                                                @if ($associate['status'] == 'pending')
                                                    <span class="badge bg-info text-light">Pending</span>

                                                @elseif($associate['status'] == 'approved')
                                                    <span class="badge bg-success text-light">Approved</span>
                                                @elseif($associate['status'] == 'rejected')
                                                    <span class="badge bg-danger text-light">Rejected</span>

                                                    @else
                                                    <span class="badge bg-info text-light">Pending</span>

                                                
                                                @endif

                                            </td>
                                            <td>{{$associate['message']}}</td>
                                            <td>
                                                {{date('d M, Y', strtotime($associate->created_at)); }}
                                            </td>
                                           
                                            
                                            
                                        </tr>
                                    @endforeach


                                    {{-- @if (count($data->getPurchaseDetails) > 0)
                                        <div class="sf-provi-descriptio">
                                            <div class="card my-3">
                                                <div class="card-header">
                                                    <h6 class="mb-0" style="font-weight: 600">Contacted By</h6>
                                                </div>

                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Associate Profile</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data->getPurchaseDetails as $associate)
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endif --}}

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
