@extends('admin.home')

@section('header')
    Дейности -> Нов дейност
@endsection
@section('container')
    {!! Form::open(['route' => ['admin.projects.store'],
                           'method' => 'POST',
                           'class'=>'form-horizontal',
                           'files' => true]) !!}
        <div class="form-group">
            <label for="title">Заглавие</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category">
                <option value="">Избери</option>
                <option value="physical_activity">ФИЗИЧЕСКА АКТИВНОСТ</option>
                <option value="culture_entertainment">КУЛТУРА И ЗАБАВЛЕНИЯ</option>
                <option value="social_projects">СОЦИАЛНИ ПРОЕКТИ</option>
                <option value="business_partnerships">БИЗНЕС ПАРТНЬОРСТВА</option>
                <option value="volunteering">ДОБРОВОЛЧЕСТВО</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description" rows="3" cols="50"></textarea>

        </div>


        <div class="form-group">
            <label for="when">Дата</label>
            <input id="when" type="date" name="when" min="2000-01-01" class="form-control">
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