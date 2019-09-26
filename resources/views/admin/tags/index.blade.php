@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Теги
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
                <h3 class="box-title">Листинг сущности тегов</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <a href="{{route('tags.create')}}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    @foreach($tags as $tag)
                    <tbody>
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->title}}</td>
                            <td>
                                <a href="{{route('tags.edit',$tag->id)}}" class="fa fa-pencil"></a>
                                {!! Form::open(['route'=>['tags.destroy',$tag->id], 'method'=>'delete']) !!}
{{--                                <a href="#" class="fa fa-remove"></a>--}}
                                <button class="delete" onclick="return confirm('Уверены?')"><a class="fa fa-remove"></a></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </tfoot>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
@endsection