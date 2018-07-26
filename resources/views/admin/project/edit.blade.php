@extends('admin.home')

@section('header')
    Проекти -> Промяна на проект
@endsection
@section('container')
    {!! Form::open(['route' => ['admin.projects.update', $project->id],
                           'method' => 'PUT',
                           'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <label for="title">Заглавие</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description" >{{$project->description}}</textarea>

        </div>

        <div class="form-group">
            <label for="when">Дата</label>
            <input id="when" type="date" name="when" min="2000-01-01" class="form-control" value="{{$project->when}}">
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