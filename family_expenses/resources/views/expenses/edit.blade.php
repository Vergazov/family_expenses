@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('expenses.update',$expense->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="expenditure" class="form-label">Статья расхода</label>
                <input name="expenditure" type="text" class="form-control" id="expenditure" value="{{$expense->expenditure}}">
            </div>
            <div class="mb-3">
                <label for="sum" class="form-label">Сумма</label>
                <input name="sum" type="number" class="form-control" id="sum" value="{{$expense->sum}}">
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Примечание</label>
                <input name="note" type="text" class="form-control" id="note" value="{{$expense->note}}">
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
            <a class="btn btn-danger" href="{{route('expenses.cancel')}}">Отмена</a>
        </form>
    </div>
@endsection
