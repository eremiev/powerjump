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
                <td class="small">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{route('admin.projects.edit', $project->id)}}">
                                <i class="fa fa-pencil" style="font-size:24px" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            {{ Form::open(['route' => ['admin.projects.destroy', $project->id], 'method' => 'delete']) }}
                            <button type="submit" style="padding: 0;border: none;background: none; cursor: pointer;">
                                <i class="fa fa-trash" style="font-size:24px" aria-hidden="true"></i>
                            </button>

                            {{ Form::close() }}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $projects->render() }}
    </div>
@endsection