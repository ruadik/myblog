@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить категорию
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            {!! Form::open(['route' => ['categories.update', $category->id], 'method'=>'put']) !!}
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Меняем категорию</h3>
                    </div>

                    @include('admin.errors')

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{$category->title}}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default"><a href="{{route('categories.index')}}">Назад</a> </button>
                        <button class="btn btn-warning pull-right" >Изменить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>
            <!-- /.box -->
            {!! Form::close() !!}

        </section>
        <!-- /.content -->
    </div>
    @endsection
