@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Options To </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Options</a></li>
                                <li class="breadcrumb-item active">Add Options</li>
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
                        <div class="card-body">
                            <p class="mb-sm-0"><span><b>Question:</b></span> &nbsp;{{$question['question_label']}} </p>
                            <p class="mb-sm-0"><span><b>Category:</b> &nbsp;{{$question->category['slug']}} </p>
                            <p class="mb-sm-0"><span><b>Sub-Category:</b> &nbsp;{{$question->subcategory['slug']}} </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{route('store.question.option', $question['id'])}}" enctype="multipart/form-data">
                                @csrf
                                <div id="option-container">
                                    <div class="mb-3">
                                        <label>Add Options</label>
                                        <input type="text" class="form-control" name="title[]"
                                            placeholder="Enter Option">
                                    </div>
                                </div>

                                <div class="d-flex gap-4">
                                    <div>
                                        <button id="add-more"  class="btn btn-warning mt-4" type="button">Add More Option</button>
                                    </div>
                                    <div>
                                        <input type="submit" value="Save Options" class="btn btn-dark mt-4">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">


        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('add-more').addEventListener('click', function () {
                var optionContainer = document.getElementById('option-container');
                var newOptionGroup = document.createElement('div');
                newOptionGroup.classList.add('mb-3', 'option-group');

                // var newLabel = document.createElement('label');
                // newLabel.textContent = 'Add Options';
                // newOptionGroup.appendChild(newLabel);

                var newInput = document.createElement('input');
                newInput.type = 'text';
                newInput.classList.add('form-control');
                newInput.name = 'title[]';
                newInput.placeholder = 'Enter Option';
                newOptionGroup.appendChild(newInput);

                optionContainer.appendChild(newOptionGroup);
            });
        });



        $(document).ready(function(){

            // $('#add-more').click(function() {
            //     var newOption = $('.option-group:first').clone();
            //     newOption.find('input').val('');
            //     newOption.appendTo('#option-container');
            // });


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

</script>
@endsection
