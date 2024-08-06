@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Questions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Questions</a></li>
                                <li class="breadcrumb-item active">All Questions</li>
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
                            <a href="{{route('add.question')}}" class="btn btn-primary m-3">Add Question</a>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Question Label</th>
                                        <th>Category Name</th>
                                        <th>SubCategory Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->question_label}}</td>
                                            <td>{{ optional($item->category)->slug }}</td>
                                            <td>{{ optional($item->subcategory)->slug }}</td>
                                            <td>
                                                <a href="{{route('edit.question',$item->id)}}" class="btn btn-dark">Edit</a>
                                                <a href="{{route('delete.question',$item->id)}}" class="btn btn-danger">Delete</a>
                                                <a href="{{route('show.question.options', $item->id)}}" class="btn btn-info">Show Options</a>
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
