@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Lead Details</h4>

                        {{-- <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Lead Details</a></li>
                                <li class="breadcrumb-item active">Lead Purchased</li>
                            </ol>
                        </div> --}}

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <a href="{{ route('admin.associate.create') }}" class="btn btn-primary m-3">Add Associate</a> --}}
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Leads Details</th>
                                        <th>Q/A</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid">
                                        {{-- <td>{{$item}}</td> --}}
                                        <td style="border:1px solid lightgray">
                                            Name: {{$data->lead->name ?? '-'}} <br>
                                            Email: {{$data->lead->email ?? '-'}} <br>
                                            Category: {{$data->lead->category['alt_name'] ?? '-'}} <br>
                                            Sub-Category: {{$data->lead->subcategory['slug'] ?? '-'}} <br> <br>
                                            
                                            <p class="mb-0">Gender: {{$item->lead['gender'] ?? '-'}}</p>
                                            <p class="mb-0">Lead Status: {{$data->lead['lead_status'] ?? '-'}}</p>
                                            <p class="mb-0">Area: {{$data->lead['area_name'] ?? '-'}}</p>
                                            <p class="mb-0">Disctrict: {{$data->lead['district_name'] ?? '-'}}</p>
                                            <p class="mb-0">State: {{$data->lead['state'] ?? '-'}}</p>
                                            <p class="mb-0">Bought Time: {{$data->lead['bought_times'] ?? '-'}}</p>
                                        </td>
                                        <td style="border:1px solid lightgray">
                                            @if ($data->lead && $data->lead->answers)

                                                @php
                                                    $answers = json_decode($data->lead->answers, true);
                                                @endphp
                                            
                                                @if ($answers && is_array($answers))
                                                    <ul>
                                                        @foreach ($answers as $answer)
                                                            <li>
                                                                Question: {{ $answer['question'] ?? '-' }} <br>
                                                                Answer: {{ $answer['answer'] ?? '-' }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else                                                        
                                                    -
                                                @endif
                                                
                                            @else
                                                -
                                            @endif
                                        </td>
                                        {{-- <td style="border:1px solid lightgray">{{date('d M, Y', strtotime($item->created_at)); }}</td>
                                        <td style="border:1px solid lightgray">
                                            <a href="{{route('admin.lead-purchase.show', $item->id)}}" class="btn btn-info btn-sm">View Lead</a>
                                        </td> --}}
                                    </tr>
                                        
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    {{-- <div class="modal fade" id="editAssociateProfile" tabindex="-1" aria-labelledby="editAssociateProfileLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAssociateProfileLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="mobile" class="col-form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" required>
                    </div>

                    <button class="btn btn-dark" type="submit">Update</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
    </div> --}}

    {{-- <script type="text/javascript">
        

        document.addEventListener('DOMContentLoaded', function() {
            var editModal = document.getElementById('editAssociateProfile');            

            editModal.addEventListener('show.bs.modal', function (event) {
                // Button that triggered the modal
                var button = event.relatedTarget;
                // Extract info from data-bs-* attributes
                var id = button.getAttribute('data-bs-user-id');

                // Update the modal's content.
                var modalTitle = editModal.querySelector('.modal-title');
                var modalForm = editModal.querySelector('.modal-body form');
                var user_name = editModal.querySelector('.modal-body input[name="name"]');
                var user_email = editModal.querySelector('.modal-body input[name="email"]');
                var user_mobile = editModal.querySelector('.modal-body input[name="mobile"]');

                // AJAX request to fetch option details
                fetch(`/admin/associate/get-associate-data/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        modalTitle.textContent = 'Update Option ID: ' + id;
                        user_name.value = data.name;
                        user_email.value = data.email;
                        user_mobile.value = data.mobile;
                        modalForm.action = `/admin/associate/${id}/update`;
                        // console.log(data);
                        
                    })
                    .catch(error => console.error('Error fetching option details:', error));
            });
        });


    </script> --}}

@endsection
