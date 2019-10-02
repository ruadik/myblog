@extends('layout')

@section('content')
    <div class="col-md-8">

        <div class="leave-comment mr0"><!--leave comment-->

            <h3 class="text-uppercase">Login</h3>
            <br>

            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif

            @include('admin.errors')

            <form class="form-horizontal contact-form" role="form" method="post" action="{{route('login.store')}}">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="email" name="email"
                               placeholder="Email" {{old('email')}}>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="password" {{old('password')}}>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn send-btn">Login</button>

            </form>
        </div><!--end leave comment-->
    </div>
@endsection