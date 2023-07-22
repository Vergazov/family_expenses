<div class="container">
    <form action="{{route('expenses.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="expenditure" class="form-label">Статья расхода</label>
            <input name="expenditure" type="text" class="form-control" id="expenditure">
        </div>
        <div class="mb-3">
            <label for="sum" class="form-label">Сумма</label>
            <input name="sum" type="number" class="form-control" id="sum">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>
@extends('layouts.app')


