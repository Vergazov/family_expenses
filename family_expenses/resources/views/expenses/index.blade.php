@extends('layouts.app')
@section('content')

    <div class="container w-50 p-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3>Добавить статью расходов</h3>
        <form action="{{route('expenses.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="expenditure" class="form-label">Статья расходов</label>
                <input name="expenditure" type="text" class="form-control" id="expenditure" value="{{ old('expenditure') }}">
            </div>
            <div class="mb-3">
                <label for="sum" class="form-label">Сумма</label>
                <input name="sum" type="number" class="form-control" id="sum" value="{{ old('sum') }}">
            </div>
            <div class="mb-3">
                <label for="whose_expenses" class="form-label">Чьи расходы</label>
                <select  name="whose_expenses" class="form-select" id="whose_expenses" value="{{ old('whose_expenses') }}">
                    <option value=""></option>
                    <option value="Артем">Артем</option>
                    <option value="Юля">Юля</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Примечание</label>
                <input name="note" type="text" class="form-control" id="note" value="{{ old('note') }}">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
    <div class="container w-50 p-3">
        <h3>Список расходов</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Статья расхода</th>
                <th scope="col">Сумма</th>
                <th scope="col">Чей расход</th>
                <th scope="col">Примечание</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($expenses as $expense)
            <tr>
                <td>{{$expense->expenditure}}</td>
                <td>{{$expense->sum}}</td>
                <td>{{$expense->whose_expenses}}</td>
                <td>{{$expense->note}}</td>
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
    <div class="container  w-50 p-3">
        <table class="table">
            <td>Юля</td>
            <td><b>{{$sumJulia}}</b></td>
            <td>Артем</td>
            <td><b>{{$sumArtem}}</b></td>
        </table>
    </div>
@endsection
