@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        {{-- <h4 class="mb-sm-0">All More Option</h4> --}}

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Options</a></li>
                                <li class="breadcrumb-item active">All Options</li>
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
                            <a href="{{route('add.question.option', $question['id'])}}" class="btn btn-primary my-3">Add More Options</a>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Options</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    

                                    @foreach ($options as $key => $item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item['title']}}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editOptionModal" data-bs-id="{{$item['id']}}">Edit</button>

                                                <a href="#" class="btn btn-danger btn-delete" onclick="event.preventDefault(); deleteOption({{ $item['id'] }});">Delete</a>

                                                <form id="delete-form-{{$item['id']}}" action="{{route('option.delete', $item['id'])}}" method="POST" style="display: none;">
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

        

        <div class="modal fade" id="editOptionModal" tabindex="-1" aria-labelledby="editOptionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editOptionModalLabel">Update Option</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label for="title" class="col-form-label">Option</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <button class="btn btn-dark" type="submit">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- End Page-content -->



    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editModal = document.getElementById('editOptionModal');

            editModal.addEventListener('show.bs.modal', function (event) {
                // Button that triggered the modal
                var button = event.relatedTarget;
                // Extract info from data-bs-* attributes
                var id = button.getAttribute('data-bs-id');

                // Update the modal's content.
                var modalTitle = editModal.querySelector('.modal-title');
                var modalForm = editModal.querySelector('.modal-body form');
                var modalBodyInput = editModal.querySelector('.modal-body input[name="title"]');

                // AJAX request to fetch option details
                fetch(`/admin/option/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        modalTitle.textContent = 'Update Option ID: ' + id;
                        modalBodyInput.value = data.title;
                        modalForm.action = `/admin/option/${id}/update`;
                    })
                    .catch(error => console.error('Error fetching option details:', error));
            });
        });
    </script>


@endsection
