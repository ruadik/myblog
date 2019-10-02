@extends('layout')

@section('content')
    <div class="col-md-8">

    <div class="leave-comment mr0"><!--leave comment-->

        <h3 class="text-uppercase">Register</h3>
        <br>
        @include('admin.errors')
        <form class="form-horizontal contact-form" role="form" method="post" action="{{route('register.store')}}">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Name" {{old('name')}}>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Email" {{old('email')}}>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="password">
                </div>
            </div>
            <button type="submit" name="submit" class="btn send-btn">Register</button>
        </form>
    </div><!--end leave comment-->
</div>
@endsection