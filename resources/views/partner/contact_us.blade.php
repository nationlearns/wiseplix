@extends('partner.partner_dashboard')
@section('partner')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact Us</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contact Us</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Us</h4>

                            <form class="custom-validation" action="{{ route('partner.store.contact-us') }}" novalidate=""
                                method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                    @error('name')
                                        <div class="alert alert-danger my-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control" name="email" required=""
                                            placeholder="Enter a valid e-mail">
                                        @error('email')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <div>
                                        <input type="number" class="form-control" name="phone" required=""
                                            placeholder="Enter 10 Digit Number">
                                        @error('phone')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Subject</label>
                                    <div>
                                        <input data-parsley-type="digits" type="text" name="subject" class="form-control"
                                            required="" placeholder="Enter the Subject">
                                        @error('subject')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label>Message</label>
                                    <div>
                                        <textarea required="" class="form-control" rows="5" name="message" placeholder="Please Enter Your Message"></textarea>
                                        @error('message')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Map Types</h4>
                            <p class="card-title-desc">Example of google maps.</p>

                            <div id="gmaps-types" class="gmaps"></div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <!-- Gmaps file -->
        <script src="{{ asset('backend/assets/libs/gmaps/gmaps.min.js') }}"></script>

        <!-- demo codes -->
        <script src="{{ asset('backend/assets/js/pages/gmaps.init.js') }}"></script>
    @endsection
