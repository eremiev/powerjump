@extends('admin.home')

@section('header')
    Проекти -> Нов проект
@endsection
@section('container')
    {!! Form::open(['route' => ['admin.projects.store'],
                           'method' => 'POST',
                           'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <label for="title">Заглавие</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description" ></textarea>

        </div>

        <div class="form-group">
            <label for="when">Дата</label>
            <input id="when" type="date" name="when" min="2000-01-01"class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Запиши</button>
    {!! Form::close() !!}

    <script>
        $('#description').summernote({
            tabsize: 2,
            height: 150
        });
    </script>
@endsection