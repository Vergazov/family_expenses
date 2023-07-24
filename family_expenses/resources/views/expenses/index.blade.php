@extends('layouts.app')
@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Статья расхода</th>
                <th scope="col">Сумма</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($expenses as $expense)
            <tr>
                <td>{{$expense->expenditure}}</td>
                <td>{{$expense->sum}}</td>
                <td><a class="btn btn-warning" href="{{route('expenses.edit',$expense->id)}}">Изменить</a></td>
                <td>
                    <form action="{{route('expenses.destroy',$expense->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="container">
        <table class="table">
            <td>Итого</td>
            <td><b>{{$sum}}</b></td>
            <td></td>
            <td></td>
        </table>
    </div>

@endsection
