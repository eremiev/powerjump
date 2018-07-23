@extends('admin.home')

@section('header')
    Проекти
@endsection
@section('container')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заглавие</th>
            <th scope="col">Описание</th>
            <th scope="col">Дата</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{ str_limit($project->description, $limit = 100, $end = '...')}}</td>
                <td>{{$project->when}}</td>
                <td class="small">промени|изтрий</td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <div class="text-center">
            {{ $projects->render() }}
        </div>
@endsection