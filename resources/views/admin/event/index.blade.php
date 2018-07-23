@extends('admin.home')

@section('header')
    Събития
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
        @foreach ($events as $event)
            <tr>
                <th scope="row">{{$event->id}}</th>
                <td>{{$event->title}}</td>
                <td>{{ str_limit($event->description, $limit = 100, $end = '...')}}</td>
                <td>{{$event->when}}</td>
                <td class="small">промени|изтрий</td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <div class="text-center">
            {{ $events->render() }}
        </div>
@endsection