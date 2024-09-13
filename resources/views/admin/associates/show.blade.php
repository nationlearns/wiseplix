@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{$user['id']}} - Associate Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Associate User</a></li>
                                <li class="breadcrumb-item active">Add Associate User</li>
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
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">Associate User</h5>
                        </div>
                        <div class="card-body">
                            {{-- {{$user}} --}}
                            <p><b>Name:</b> {{$user['name']}}</p>
                            <p><b>Email:</b> {{$user['email']}}</p>
                            <p><b>Phone:</b> {{$user['mobile']}}</p>
                            <p><b>Gender:</b> {{$user['gender']}}</p>
                        </div>
                    </div>

                    

                </div> <!-- end col -->
                

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Associate Profile</h5>
                            
                            @if ($user->associate()->exists())
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAssociateProfile">
                                    Edit Profile
                                </button>
                            @endif

                        </div>
                        <div class="card-body">

                            @if ($user->associate()->exists())


                                
                
                                <div class="mb-2">
                                    @if ($user->associate['profile_image'] != null)                                    
                                        <img src="{{asset($user->associate['profile_image'])}}" width="100px" alt="">
                                    @endif
                                </div>
                                <p><b>Category:</b> {{$user->associate->category['alt_name'] ?? '-'}}</p>
                                <p><b>Sub-Category:</b> {{$user->associate->subCategory['slug1'] ?? '-'}}</p>
                                <p><b>Name:</b> {{$user->associate['full_name'] ?? '-'}}</p>
                                <p><b>Email:</b> {{$user->associate['email'] ?? '-'}}</p>
                                <p><b>Phone:</b> {{$user->associate['phone'] ?? '-'}}</p>
                                <p><b>Business Name:</b> {{$user->associate['business_name'] ?? '-'}}</p>
                                <p><b>About:</b> {{$user->associate['about_company'] ?? '-'}}</p>
                                @if ($user->associate->location()->exists())                                
                                    <p><b>Location:</b> {{$user->associate->location['name']}}, {{$user->associate->location['district_name']}}, {{$user->associate->location['state_name']}}, {{$user->associate->location['pincode']}}</p>
                                @else
                                    <p><b>Location</b> -</p>
                                @endif
                                <p><b>Address:</b> {{$user->associate['address'] ?? '-'}}</p>
                                <p><b>Area:</b> {{$user->associate['area'] ?? '-'}}</p>

                                <p><b>Area Of Service:</b> {{$user->associate['area_of_service'] ?? '-'}}</p>

                               

                                  <!-- Modal -->
                                <div class="modal fade" id="editAssociateProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Associate Profile</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('associate-profile.update', $user->associate['id'])}}" id="associate-profile-id" method="POST">
                                                                    
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="user_id" value="{{$user['id']}}">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label">Select Category</label>
                                                            <select class="form-control select2-search-disable" name="category_id">
                                                                <option>Select Category</option>
                                                                @foreach ($cat as $item)
                                                                    <option value="{{ $item->id }}" 
                                                                        {{ (isset($user->associate->category_id) && $user->associate->category_id == $item->id) ? 'selected' : '' }}>
                                                                        {{ $item->alt_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Select Category</label>
                                                            <select class="form-control select2-search-disable" name="subcategory_id">
                                                                <option>Select SubCategory</option>
                                                                <option value="{{$user->associate->subcategory_id}}" selected>{{$user->associate->subCategory->slug1}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name" value="{{$user->associate['full_name']}}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" value="{{$user->associate['email']}}" placeholder="Enter Email" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" value="{{$user->associate['phone']}}" placeholder="Enter Phone" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Business Name</label>
                                                    <input type="text" class="form-control" name="business_name" value="{{$user->associate['business_name']}}" placeholder="Enter Business Name" required>
                                                </div>


                                                <div class="mb-3">
                                                    <label>About Company</label>
                                                    <textarea name="about_company" id="" class="form-control"  cols="30" rows="5">{{$user->associate['about_company']}}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{$user->associate['address']}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Area Of Service</label>
                                                    <input type="text" class="form-control" name="area_of_service" placeholder="Enter Area of Service" value="{{$user->associate['area_of_service']}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Area </label>
                                                    <input type="text" class="form-control" name="area" placeholder="Area" value="{{$user->associate['area']}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Location </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Pin Code" id="numberInput" />
                                                        <input type="hidden" name="location_id" id="location_id" value="">
                                                        <input type="hidden" id="pinCodeValue" value="">
                                                        <input type="hidden" id="disticName" value="">
                                                        <input type="hidden" id="stateName" value="">
                                                        <input type="hidden" id="areaName" value="">
                                                        <ul class="category-list" id="addressSuggestions"></ul>
                                                    </div>
                                                </div>

                                                <input type="submit" value="Save" class="btn btn-dark mt-4">
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>




                            @else

                                <form action="{{route('associate-profile.store', $user['id'])}}" id="associate-profile-id" method="post">
                                    
                                    @csrf

                                    <input type="hidden" name="user_id" value="{{$user['id']}}">

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
                                                <label class="form-label">Select Category</label>
                                                <select class="form-control select2-search-disable" name="subcategory_id">
                                                    <option>Select SubCategory</option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$user['email']}}" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$user['mobile']}}" placeholder="Enter Phone" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Business Name</label>
                                        <input type="text" class="form-control" name="business_name" placeholder="Enter Business Name" required>
                                    </div>


                                    <div class="mb-3">
                                        <label>About Company</label>
                                        <textarea name="about_company" id="" class="form-control"  cols="30" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                    </div>

                                    <div class="mb-3">
                                        <label>Area Of Service</label>
                                        <input type="text" class="form-control" name="area_of_service" placeholder="Enter Area of Service">
                                    </div>

                                    <div class="mb-3">
                                        <label>Area </label>
                                        <input type="text" class="form-control" name="area" placeholder="Area" >
                                    </div>

                                    <div class="mb-3">
                                        <label>Location </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Pin Code" id="numberInput" />
                                            <input type="hidden" name="location_id" id="location_id" value="">
                                            <input type="hidden" id="pinCodeValue" value="">
                                            <input type="hidden" id="disticName" value="">
                                            <input type="hidden" id="stateName" value="">
                                            <input type="hidden" id="areaName" value="">
                                            <ul class="category-list" id="addressSuggestions"></ul>
                                        </div>
                                    </div>

                                    <input type="submit" value="Save" class="btn btn-dark mt-4">
                                </form>


                            @endif
                            


                            {{-- {{$user->associate}} --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">Wallet Points</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">

                                <h4 class="mb-2">Current Wallet Amount: {{ $user->getTotalWalletAmount() }}</h4>
                                <a href="" data-bs-toggle="modal" data-bs-target="#addWalletPoint" class="mb-2 btn btn-dark btn-md">Add Wallet Point</a>
                            </div>

                            <h5 class="mb-2">Wallet Transactions</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user->getWallet as $wallet)
                                        <tr>
                                            <td>{{ $wallet->amount }}</td>
                                            <td>{{ $wallet->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Lead Purchased</h5>
                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="border: 1px solid lightgray">Leads Details</th>
                                        <th style="border: 1px solid lightgray">Action</th>
                                    </tr>
                                </thead>

                                @foreach ($user->leadPurchased as $data)
                                    
                                    <tr>
                                        <td style="border: 1px solid lightgray">
                                            Name: {{$data->lead->name ?? '-'}} <br>
                                            Email: {{$data->lead->email ?? '-'}} <br>
                                            Category: {{$data->lead->category['alt_name'] ?? '-'}} <br>
                                            Sub-Category: {{$data->lead->subcategory['slug'] ?? '-'}} <br> <br>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.lead-purchase.show', $data->id)}}" class="btn btn-info btn-sm">View Lead</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            
                            {{-- {{$user->leadPurchased}} --}}
                        </div>
                    </div>

                </div>

            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addWalletPoint" tabindex="-1" aria-labelledby="addWalletPointLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addWalletPointLabel">Add Wallet Point</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('wallet.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user['id']}}">
                        <div class="mb-3">
                            <label>Amount</label>
                            <input type="number" class="form-control" name="amount" placeholder="Enter Amount" min="0" required>
                        </div>
                        <input type="submit" value="Add Wallet Point" class="btn btn-dark mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>





  

  


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                console.log(category_id);
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/subcategory/ajax') }}/"+category_id,
                        type: "GET",
                        dataType:"json",
                        success:function(data){
                            $('select[name="subcategory_id"]').html('');
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.slug + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });

        $(document).ready(function() {
            var addressSuggestions = $('#addressSuggestions');

            $('#numberInput').keyup(function() {
                var query = $(this).val();
                // let csrfToken = 
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                if (query.length > 3) {
                    $.ajax({
                        url: "/api/get-location",
                        type: 'POST',
                        data: { query: query },
                        headers: {
                            'X-CSRF-TOKEN':  csrfToken // Include CSRF token in the request header
                        },
                        success: function(data) {
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
