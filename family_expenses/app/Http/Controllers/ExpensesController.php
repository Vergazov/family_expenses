<?php

namespace App\Http\Controllers;

use App\Models\Expens;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index(){
        $expenses = Expens::all();
        return view('expenses.index',compact('expenses'));
    }

    public function create(){
        return view('expenses.create');
    }

    public function store(){
        $data = request()->validate([
            'expenditure' => 'string',
            'sum' => 'int'
        ]);
        Expens::create($data);
        return redirect()->route('expenses.create');
    }

}
