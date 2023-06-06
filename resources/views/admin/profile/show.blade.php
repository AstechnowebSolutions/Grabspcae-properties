@extends('admin.admin_master') 
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card"><br><br>
                    <center>
                          <img class="rounded-circle avatar-xl" src="{{ (!empty($data->profile_image))? url('uploads/admin_images/'.$data->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                    </center>

                    <div class="card-body">
                        <h4 class="card-title">Name : {{ $data->name }} </h4>
                        <hr>
                        <h4 class="card-title">User Email : {{ $data->email }} </h4>
                        <hr>
                        <h4 class="card-title">User Name  : {{ $data->username }} </h4>
                        <hr>
                        <a href="{{route('admin.profile.edit')}}" class="btn btn-warning btn-rounded waves-effect waves-light">Edit Profile</a>
                        
                    </div>
                </div>
            </div> 
                                    
                
        </div>
    </div>
</div>

@endsection