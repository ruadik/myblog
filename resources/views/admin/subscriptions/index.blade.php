@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


            @if (session('status'))
                <section class="content-header">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </section>
            @endif

        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('subscriptions.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($subscriptions as $sub)
                            <tr>
                                <td>{{$sub->id}}</td>
                                <td>{{$sub->email}}</td>
                                <td>

                                    @if($sub->token == null)
                                        {!! Form::open([
                                                        'route' => ['subscriptions.update', $sub->id],
                                                        'method' => 'put'
                                                        ]) !!}
                                        <button class="delete"><a class="fa fa-unlock"></a></button>
                                        {!! Form::close() !!}

                                    @else
                                        {!! Form::open([
                                                        'route' => ['subscriptions.update', $sub->id],
                                                        'method' => 'put'
                                                        ]) !!}
                                        <button class="delete"><a class="fa fa-lock"></a></button>
                                        {!! Form::close() !!}
                                    @endif



                                    {!! Form::open([
                                                    'route' => ['subscriptions.destroy', $sub->id],
                                                    'method' => 'delete'
                                                    ]) !!}
                                        <button class="delete" onclick="return confirm('Уверены?')"><a class="fa fa-remove"></a></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
