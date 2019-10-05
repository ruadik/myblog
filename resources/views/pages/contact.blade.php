@extends('layout')

@section('content')
    <div class="col-md-8">

        <div class="leave-comment mr0"><!--leave comment-->

            <h3 class="text-uppercase">My contact</h3>
            <br>

            <label class="form-horizontal contact-form">

                <div class="card">

                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{$admin->name}}</p>
                            <footer class="blockquote-footer">{{$admin->email}}</footer>
                        </blockquote>
                    </div>
                </div>
            </label>

        </div><!--end leave comment-->
    </div>
@endsection