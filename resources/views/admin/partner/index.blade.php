@extends('admin.home')

@section('header')
    Партньори
@endsection
@section('container')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заглавие</th>
            <th scope="col">Описание</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($partners as $partner)
            <tr>
                <th scope="row">{{$partner->id}}</th>
                <td>{{$partner->name}}</td>
                <td>{{ str_limit($partner->description, $limit = 100, $end = '...')}}</td>
                <td class="small">промени|изтрий</td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <div class="text-center">
            {{ $partners->render() }}
        </div>
@endsection