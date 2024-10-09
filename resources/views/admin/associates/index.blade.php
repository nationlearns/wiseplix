@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Associates</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Associates</a></li>
                                <li class="breadcrumb-item active">All Associates</li>
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
                            <a href="{{ route('admin.associate.create') }}" class="btn btn-primary m-3">Add Associate</a>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Gender</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($associates as $key => $item)
                                        <tr>
                                            <td>{{$item['id']}}</td>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td>{{$item['mobile']}}</td>
                                            <td>{{$item['gender']}}</td>
                                            <td>{{ $item->getLocation['name'] ?? 'N/A' }}</td>
                                            <td>
                                                <a href="{{route('admin.associate.show', $item->id)}}" class="btn btn-info btn-sm">View Profile</a>
                                                <a href="#" class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editAssociateProfile" data-bs-user-id="{{$item['id']}}">Edit</a>
                                                {{-- <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                                                <a href="#" class="btn btn-danger btn-delete btn-sm" onclick="event.preventDefault(); deleteOption({{ $item['id'] }});">Delete</a>

                                                <form id="delete-form-{{$item['id']}}" action="{{route('admin.associate.delete', $item['id'])}}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <script>
                                                    function deleteOption(optionId) {
                                                        if (confirm('Are you sure you want to delete this option?')) {
                                                            document.getElementById('delete-form-' + optionId).submit();
                                                        }
                                                    }
                                                </script>
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

    <div class="modal fade" id="editAssociateProfile" tabindex="-1" aria-labelledby="editAssociateProfileLabel" aria-hidden="true">
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
    </div>

    <script type="text/javascript">
        

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


    </script>

@endsection
