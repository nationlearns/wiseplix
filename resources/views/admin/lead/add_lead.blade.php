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
                        <div class="card-body">

                            <form method="post" action="" enctype="multipart/form-data">
                                {{-- @csrf --}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control select2-search-disable" name="category_id">
                                                <option>Select Category</option>
                                                @foreach ($cat as $item)
                                                    <option value="{{ $item->id }}">{{ $item->slug }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Select SubCategory</label>
                                            <select class="form-control select2-search-disable" name="subcategory_id">
                                                <option>Select SubCategory</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Select Questions</label>
                                            <select class="form-control select2-search-disable" name="question_id">
                                                <option>Select Questions</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Select Question Options</label>
                                            <select class="form-control select2-search-disable" name="questionoption_id">
                                                <option>Select Question Options</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control" name="mobile"
                                                placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Gender</label>
                                            <label class="form-label">Select Gender</label>
                                            <select class="form-control select2-search-disable" name="gender">
                                                <option>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" name="pin_code"
                                                placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Location</label>
                                            <select class="form-control select2-search-disable" name="location_id">
                                                <option>Select Location</option>
                                                {{-- @foreach ($location as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Area Name</label>
                                            <input type="text" class="form-control" name="area_name"
                                                placeholder="Enter Area Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>District Name</label>
                                            <input type="text" class="form-control" name="district_name"
                                                placeholder="Enter District Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="state"
                                                placeholder="Enter State Name">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Add Lead" class="btn btn-dark mt-4">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                console.log(category_id);
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').html('');
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .slug + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
        $(document).ready(function() {
            $('select[name="subcategory_id"]').on('change', function() {
                var subcategory_id = $(this).val();
                console.log(subcategory_id);
                if (subcategory_id) {
                    $.ajax({
                        url: "{{ url('/question/ajax') }}/" + subcategory_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="question_id"]').html('');
                            var d = $('select[name="question_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="question_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .question_label + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
        $(document).ready(function() {
            $('select[name="question_id"]').on('change', function() {
                var question_id = $(this).val();
                console.log(question_id);
                if (question_id) {
                    $.ajax({
                        url: "{{ url('/questionotion/ajax') }}/" + question_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="questionoption_id"]').html('');
                            var d = $('select[name="questionoption_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="questionoption_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .title + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
