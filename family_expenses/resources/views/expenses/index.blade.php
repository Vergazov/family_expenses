@extends('layouts.app')
@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Статья расхода</th>
                <th scope="col">Сумма</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($expenses as $expense)
            <tr>
                <td>{{$expense->expenditure}}</td>
                <td>{{$expense->sum}}</td>
                <td><a  class="btn btn-warning" href="{{route('expenses.edit',$expense->id)}}">Изменить</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
