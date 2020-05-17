@extends('admin.home')

@section('header')
    Партньори -> Нов партньор
@endsection
@section('container')
    {!! Form::open(['route' => ['admin.partners.store'],
                           'method' => 'POST',
                           'class'=>'form-horizontal',
                           'files' => true]) !!}
    <div class="form-group">
        <label for="title">Име</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea id="description" name="description" ></textarea>

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