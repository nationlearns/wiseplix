@extends('partner.partner_dashboard')
@section('partner')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Business</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"> Add Business</a></li>
                            <li class="breadcrumb-item active">Add Business</li>
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

                        <h4 class="card-title">Create Business</h4>
                        <form action="{{route('partner.store-business')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected="">Select Sub Category</option>
                                        @foreach($cat as $item)
                                        <option value="{{$item->id}}">{{$item->slug}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Select Sub Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="subcategory_id">
                                        <option selected="">Select Sub Category</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="Please Enter Name" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" placeholder="Please Enter Email" id="example-email-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-url-input" class="col-sm-2 col-form-label">Mobile Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="mobile" placeholder="Enter Mobile Number" id="example-url-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Owner Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="owner_name" placeholder="Please Enter Owner Name" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Business Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="business_name" placeholder="Please Enter Business Name" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-tel-input" class="col-sm-2 col-form-label" placeholder="Business Description">Business Description</label>
                                <div class="col-sm-10">
                                    <textarea required="" class="form-control" rows="5" name="business_description"></textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-number-input" class="col-sm-2 col-form-label">Alternate Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="alternate_number" placeholder="Enter Alternate Number" id="example-number-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-number-input" class="col-sm-2 col-form-label">Landline Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="landline" placeholder="Enter Landline Number" id="example-number-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-tel-input" class="col-sm-2 col-form-label" placeholder="Business Description">Address</label>
                                <div class="col-sm-10">
                                    <textarea required="" class="form-control" rows="5" name="address"></textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- end row -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Select Company Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="company_type">
                                        <option selected="">Select Company Type</option>
                                        <option value="Public Limited">Public Limited</option>
                                        <option value="Private Limited">Private Limited</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="website" placeholder="Please Enter Website Name" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Establish Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="datetime-local" name="establish_date" id="example-datetime-local-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Area Of Service</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="area_of_service" placeholder="Please Enter Service Area" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Banner Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="banner_image" id="example-date-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-month-input" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="profile_image" id="example-month-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Create Business</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div> <!-- container-fluid -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    // sub category ajax call
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
                alert('No Data Found');
            }
        });
    });
    // questions ajax call
</script>
@endsection