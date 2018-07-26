@extends('admin.home')

@section('header')
    Партньори -> Промени партньор
@endsection
@section('container')
    {!! Form::open(['route' => ['admin.partners.update', $partner->id],
                           'method' => 'PUT',
                           'class'=>'form-horizontal']) !!}
    <div class="form-group">
        <label for="title">Име</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$partner->name}}">
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea id="description" name="description">{{$partner->description}}</textarea>
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