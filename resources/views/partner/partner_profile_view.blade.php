@extends('partner.partner_dashboard')
@section('partner')
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>
                        <center>
                            <img class="rounded-circle avatar-xl"
                                src="{{ !empty($profileData->user_img) ? url('images/user/' . $profileData->user_img) : url('upload/no_image.jpg') }}"
                                alt="Card image cap">
                        </center>

                        <div class="card-body">
                            <h4 class="card-title">Full Name : {{ $profileData->name }} </h4>
                            <hr>
                            <h4 class="card-title">Email Address : {{ $profileData->email }} </h4>
                            <hr>
                            <h4 class="card-title">Phone Number : {{ $profileData->mobile }} </h4>
                            <hr>
                            <a href="{{route('partner.edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light"> Edit Profile</a>

                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
@endsection
