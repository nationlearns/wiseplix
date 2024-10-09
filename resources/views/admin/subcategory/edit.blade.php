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

                            <form action="{{route('admin.subcategory.update', $subcategory->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="mb-3">
                                    <label>SubCategory</label>
                                    <input type="text" class="form-control" name="slug" value="{{$subcategory['slug']}}" required>
                                </div>

                                <div class="mb-3">
                                    <label>Status</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1" {{ $subcategory->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           True
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2"  value="0" {{ $subcategory->status == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            False
                                        </label>
                                    </div>
                                    
                                </div>

                        <input type="submit" value="Submit" class="btn btn-dark mt-4">


                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



@endsection
