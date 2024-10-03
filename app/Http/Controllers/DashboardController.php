<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Total Income
        $totalIncome = Transaction::whereHas('category', function ($query) {
            $query->where('type', 'income');
        })->sum('amount');

        // Total Expense
        $totalExpense = Transaction::whereHas('category', function ($query) {
            $query->where('type', 'expense');
        })->sum('amount');

        // Calculate Balance
        $balance = $totalIncome - $totalExpense;

        // Category-wise Income
        $incomeByCategory = Transaction::whereHas('category', function ($query) {
            $query->where('type', 'income');
        })->selectRaw('category_id, SUM(amount) as total')
          ->groupBy('category_id')
          ->with('category')  // Assuming you have a relationship with categories
          ->get();

        // Category-wise Expense
        $expenseByCategory = Transaction::whereHas('category', function ($query) {
            $query->where('type', 'expense');
        })->selectRaw('category_id, SUM(amount) as total')
          ->groupBy('category_id')
          ->with('category')
          ->get();

        // Passing data to the view
        return view('dashboard', compact(
            'totalIncome',
            'totalExpense',
            'balance',
            'incomeByCategory',
            'expenseByCategory'
        ));
    }
}
