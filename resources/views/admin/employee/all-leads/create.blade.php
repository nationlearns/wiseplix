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

                            <form method="POST" action="/admin/employee/leads/store" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control" name="category_id">
                                                <option>Select Category</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->alt_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Subcategory Select -->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Select SubCategory</label>
                                            <select class="form-control" name="subcategory_id">
                                                <option>Select SubCategory</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Questions and Options -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="questions-container">
                                            <!-- This will dynamically populate questions and their options -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Input (TextArea) -->
                                <div class="row" id="additional-input-container" style="display: none;">
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="comment"><h6>Additional Info</h6></label>
                                            <textarea class="form-control" id="comment" name="comment" placeholder="Enter additional details"></textarea>
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
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" id="numberInput"
                                                placeholder="Enter Mobile Number">

                                            <input type="hidden" name="pin_code" id="pinCodeValue">
                                            <ul class="category-list" id="addressSuggestions"></ul>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Area Name</label>
                                            <input type="text" class="form-control" name="area_name" id="areaName"
                                                placeholder="Enter Area Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>District Name</label>
                                            <input type="text" class="form-control" name="district_name" id="disticName"
                                                placeholder="Enter District Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="state" id="stateName"
                                                placeholder="Enter State Name">
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="text" class="form-control" name="location_id" hidden id="location_id"
                                                placeholder="Location">

                                <input type="submit" value="Add Lead" class="btn btn-dark mt-4">
                            
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
    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('select[name="category_id"]').on('change', function() {
        //         var category_id = $(this).val();
        //         console.log(category_id);
        //         if (category_id) {
        //             $.ajax({
        //                 url: "{{ url('/subcategory/ajax') }}/" + category_id,
        //                 type: "GET",
        //                 dataType: "json",
        //                 success: function(data) {
        //                     $('select[name="subcategory_id"]').html('');
        //                     var d = $('select[name="subcategory_id"]').empty();
        //                     $.each(data, function(key, value) {
        //                         $('select[name="subcategory_id"]').append(
        //                             '<option value="' + value.id + '">' + value
        //                             .slug + '</option>');
        //                     });
        //                 },

        //             });
        //         } else {
        //             alert('danger');
        //         }
        //     });
        // });
        // $(document).ready(function() {
        //     $('select[name="subcategory_id"]').on('change', function() {
        //         var subcategory_id = $(this).val();
        //         console.log(subcategory_id);
        //         if (subcategory_id) {
        //             $.ajax({
        //                 url: "{{ url('/question/ajax') }}/" + subcategory_id,
        //                 type: "GET",
        //                 dataType: "json",
        //                 success: function(data) {
        //                     $('select[name="question_id"]').html('');
        //                     var d = $('select[name="question_id"]').empty();
        //                     $.each(data, function(key, value) {
        //                         $('select[name="question_id"]').append(
        //                             '<option value="' + value.id + '">' + value
        //                             .question_label + '</option>');
        //                     });
        //                 },

        //             });
        //         } else {
        //             alert('danger');
        //         }
        //     });
        // });
        // $(document).ready(function() {
        //     $('select[name="question_id"]').on('change', function() {
        //         var question_id = $(this).val();
        //         console.log(question_id);
        //         if (question_id) {
        //             $.ajax({
        //                 url: "{{ url('/questionotion/ajax') }}/" + question_id,
        //                 type: "GET",
        //                 dataType: "json",
        //                 success: function(data) {
        //                     $('select[name="questionoption_id"]').html('');
        //                     var d = $('select[name="questionoption_id"]').empty();
        //                     $.each(data, function(key, value) {
        //                         $('select[name="questionoption_id"]').append(
        //                             '<option value="' + value.id + '">' + value
        //                             .title + '</option>');
        //                     });
        //                 },

        //             });
        //         } else {
        //             alert('danger');
        //         }
        //     });
        // });

        



    </script>


    <script type="text/javascript">

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function() {

            // When Category is selected, fetch subcategories
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').html('');
                            $('select[name="subcategory_id"]').append(
                                    '<option selected disabled>Select</option>');
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value.slug + '</option>');
                            });
                        },
                    });
                }
            });

            // When Subcategory is selected, fetch questions and options (as checkboxes)
            // $('select[name="subcategory_id"]').on('change', function() {
            //     var subcategory_id = $(this).val();
            //     if (subcategory_id) {
            //         $.ajax({
            //             url: "{{ url('/admin/questions/ajax') }}/" + subcategory_id,
            //             type: "GET",
            //             dataType: "json",
            //             success: function(data) {
            //                 $('#questions-container').html('');  // Clear the container first

            //                 if (data.message) {
            //                     // If no questions are available, show the message
            //                     $('#questions-container').html('<div class="alert alert-warning">' + data.message + '</div>');
            //                     $('#additional-input-container').show();
            //                 } else {
            //                     // Loop through questions and options to display checkboxes
            //                     $.each(data, function(index, question) {
            //                         var questionHTML = '<div class="mb-3">';
                                    
            //                         // Question Title
            //                         questionHTML += '<h6>Q' + (index + 1) + '. ' + question.question_label + '</h6>';
                                    
            //                         // Loop through question options and display them as checkboxes
            //                         $.each(question.options, function(optionIndex, option) {
            //                             questionHTML += `
            //                                 <div class="form-check">
            //                                     <input type="checkbox" class="form-check-input" name="answer[]" value="${option.id}">
            //                                     <label class="form-check-label">${option.title}</label>
            //                                 </div>
            //                             `;
            //                         });

            //                         questionHTML += '</div>';

            //                         // Append the question with its checkboxes
            //                         $('#questions-container').append(questionHTML);

            //                         $('#additional-input-container').show();

            //                     });
            //                 }
            //             },
            //         });
            //     }
            // });

            $('select[name="subcategory_id"]').on('change', function() {
                var subcategory_id = $(this).val();
                if (subcategory_id) {
                    $.ajax({
                        url: "{{ url('/admin/questions/ajax') }}/" + subcategory_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#questions-container').html('');  // Clear the container first

                            if (data.message) {
                                // If no questions are available, show the message
                                $('#questions-container').html('<div class="alert alert-warning">' + data.message + '</div>');
                                $('#additional-input-container').show();
                            } else {
                                // Loop through questions and options to display checkboxes
                                $.each(data, function(index, question) {
                                    var questionHTML = '<div class="mb-3">';
                                    
                                    // Question Title
                                    questionHTML += '<h6 name="questions[]">Q' + (index + 1) + '. ' + question.question_label + '</h6>';
                                    
                                    // Loop through question options and display them as checkboxes
                                    $.each(question.options, function(optionIndex, option) {
                                        questionHTML += `
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="answers[]" value="${option.id}">
                                                <label class="form-check-label">${option.title}</label>
                                            </div>
                                        `;
                                    });

                                    questionHTML += '</div>';

                                    // Append the question with its checkboxes
                                    $('#questions-container').append(questionHTML);

                                    $('#additional-input-container').show();
                                });
                            }
                        },
                    });
                }
            });
        });

        $(document).ready(function() {
            var addressSuggestions = $('#addressSuggestions');

            $('#numberInput').keyup(function() {
                var query = $(this).val();

                if (query.length > 3) {
                    $.ajax({
                        url: "/api/get-location",
                        type: 'POST',
                        data: { query: query },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
                        },
                        success: function(data) {
                            console.log(data);
                            if (data.length > 0) {
                                addressSuggestions.empty();
                                $.each(data.slice(0, 10), function(index, item) {
                                    var listItem = $('<li id="search-list">').text(item.pincode + ', ' + item.name + ', ' + item.district_name);
                                    listItem.on('click', function() {
                                        $('#location_id').val(item.id);
                                        $('#pinCodeValue').val(item.pincode);
                                        $('#disticName').val(item.district_name);
                                        $('#stateName').val(item.state_name);
                                        $('#areaName').val(item.name);
                                        addressSuggestions.hide();
                                        // Append the clicked item's HTML to the input field
                                        $('#numberInput').val(listItem.text());
                                    });
                                    addressSuggestions.append(listItem);
                                });

                                addressSuggestions.show();
                            } else {
                                addressSuggestions.empty();
                                addressSuggestions.append('<li id="search-list">No Data Found</li>');
                                addressSuggestions.show();
                            }
                        },
                    });
                } else {
                    addressSuggestions.empty();
                    addressSuggestions.hide();
                }
            });

            $(document).on('click', function(e) {
                if (!$(e.target).closest('.single-input').length) {
                    addressSuggestions.hide();
                }
            });
        });


    </script>
@endsection
