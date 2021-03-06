@extends('admin.home')

@section('header')
    Партньори
@endsection
@section('container')
    <a href="{{ URL::route('admin.partners.create') }}" class="btn btn-default">Добави нов партньор</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Име</th>
            <th scope="col">URL</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($partners as $partner)
            <tr>
                <th scope="row">{{$partner->id}}</th>
                <td>{{$partner->name}}</td>
                <td>{{$partner->url}}</td>
                <td class="small">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{route('admin.partners.edit', $partner->id)}}">
                                <i class="fa fa-pencil" style="font-size:24px" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            {{ Form::open(['route' => ['admin.partners.destroy', $partner->id], 'method' => 'delete']) }}
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
        {{ $partners->render() }}
    </div>
@endsection