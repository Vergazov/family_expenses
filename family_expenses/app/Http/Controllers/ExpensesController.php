<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpensesRequest;
use App\Models\Expens;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index(){
        $expenses = Expens::all();
        $sum = Expens::all()->sum('sum');
        return view('expenses.index',compact('expenses','sum'));
    }

    public function store(ExpensesRequest $req){
        Expens::updateOrCreate(['expenditure' => $req->all('expenditure')],$req->all());
        return redirect()->route('expenses.index');
    }

    public function edit(Expens $expense){
        return view('expenses.edit',compact('expense'));
    }

    public function update(Expens $expense,ExpensesRequest $req){
        $expense->update($req->all());
        return redirect()->route('expenses.index');
    }

    public function destroy(Expens $expense){
        $expense->delete();
        return redirect()->route('expenses.index');
    }

    public function cancel(){
        return redirect()->route('expenses.index');
    }

}
