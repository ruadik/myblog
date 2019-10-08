@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            {!! Form::open([
                'route' => ['posts.update', $post->id],
                'method' => 'PUT',
                'files' => 'true'
            ]) !!}
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем статью</h3>
                    </div>
                    @include('admin.errors')
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$post->title}}" name="title">
                            </div>

                            <div class="form-group">
                                <img src="{{$post->getImage()}}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
{{--                                {{dd($post->getCategoryTitle())}}--}}

                                {{Form::select(
                                                'category_id',
                                                $categories,
                                                null,
                                                    [
                                                         'placeholder' => $post->getCategoryTitle(),
                                                         'class' => 'orm-control select2',
                                                         'style' => 'width: 100%'
                                                    ]
                                                )
                                }}

                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                {{Form::select(
                                                'tags[]',
                                                $tags,
                                                $setTags,
                                                    [
                                                        'class' => 'form-control select2',
                                                        'multiple' => 'multiple',
                                                        'data-placeholder' => 'Выберите теги',
                                                        'style' => 'width: 100%'
                                                    ]
                                                )
                                }}

                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label>Дата:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" value="{{$post->date}}" name="date">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                {{ Form::checkbox('if_featured', '1', $post->is_featured, ['class'=>'minimal']) }}
                                <label>
                                    Рекомендовать
                                </label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                {{ Form::checkbox('status', '1', $post->status(), ['class'=>'minimal']) }}
                                <label>
                                    Черновик
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea id="" cols="30" rows="10" class="form-control" name="content">{{$post->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default"><a href="{{route('posts.index')}}">Назад</a></button>
                        <button class="btn btn-warning pull-right">Изменить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            {!! Form::close() !!}

        </section>
        <!-- /.content -->
    </div>
@endsection