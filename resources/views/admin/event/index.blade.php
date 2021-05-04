@extends('admin.home')

@section('header')
    Събития
@endsection
@section('container')
    <a href="{{ URL::route('admin.events.create') }}" class="btn btn-default">Добави ново събитие</a>
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
                <td><p>{!! str_limit(strip_tags($event->description),190,'...') !!}</p></td>
                <td>{{$event->when}}</td>
                <td class="small">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{route('admin.events.edit', $event->id)}}">
                                <i class="fa fa-pencil" style="font-size:24px" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            {{ Form::open(['route' => ['admin.events.destroy', $event->id], 'method' => 'delete']) }}
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
        {{ $events->render() }}
    </div>
@endsection