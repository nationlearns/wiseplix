@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Associate User</h4>

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
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.associate.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Associate Name" required>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Associate Email" required>
                                </div>

                                 <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Associate Email" required>
                                </div>

                                <div class="mb-3">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter Associate Mobile" required>
                                </div>

                                <div class="mb-3">
                                    <label>Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <input type="submit" value="Create Associate User" class="btn btn-dark mt-4">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">

        // $(document).ready(function(){
        //     $('select[name="category_id"]').on('change', function(){
        //         var category_id = $(this).val();
        //         console.log(category_id);
        //         if (category_id) {
        //             $.ajax({
        //                 url: "{{ url('/subcategory/ajax') }}/"+category_id,
        //                 type: "GET",
        //                 dataType:"json",
        //                 success:function(data){
        //                     $('select[name="subcategory_id"]').html('');
        //                     var d =$('select[name="subcategory_id"]').empty();
        //                     $.each(data, function(key, value){
        //                         $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.slug + '</option>');
        //                     });
        //                 },

        //             });
        //         } else {
        //             alert('danger');
        //         }
        //     });
        // });

</script>
@endsection
