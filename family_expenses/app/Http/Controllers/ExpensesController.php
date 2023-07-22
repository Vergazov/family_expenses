<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function createExpenses(){
        return view('add_finances');
    }

    public function getExpensesList(){
        return view('fiances_list');
    }
}
