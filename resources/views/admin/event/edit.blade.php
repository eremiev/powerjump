@extends('admin.home')

@section('header')
    Събития -> Редакция събитие
@endsection
@section('container')
    {!! Form::open(['route' => ['admin.events.update', $event->id],
                           'method' => 'PUT',
                           'class'=>'form-horizontal',
                           'files' => true]) !!}
    <div class="form-group">
        <label for="title">Заглавие</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$event->title}}">
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea id="description" name="description">{{$event->description}}</textarea>

    </div>

    <div class="form-group">
        <label for="when">Дата</label>
        <input id="when" type="date" name="when" min="2000-01-01" class="form-control" value="{{$event->when}}">
    </div>

    <div class="form-group">
        <label for="when">Проект</label>
        {{ Form::select('project_id', $projects, $event->project_id, [ 'placeholder' =>'Няма свързан проект', 'class' => 'form-control']) }}
    </div>

    <div class="form-group">
        <label for="image">Снимка</label>
        <input id="image" type="file" name="image" class="form-control">
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