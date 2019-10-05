@extends('layout')

@section('content')
    <div class="col-md-8">

        <div class="leave-comment mr0"><!--leave comment-->

            <h3 class="text-uppercase">My profile</h3>
            <br>

            <img src="{{$admin->getAvatar()}}" alt="" class="profile-image">
            <label class="form-horizontal contact-form">


                <div class="card" style="width: 100%;">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$admin->name}}</li>
                        <li class="list-group-item">{{$admin->email}}</li>
                        <li class="list-group-item">{{$admin->description}}</li>
                    </ul>
                </div>
            </label>

        </div><!--end leave comment-->
    </div>
@endsection