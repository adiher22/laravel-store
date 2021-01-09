<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Transaction;
class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah user
        $customer = User::count();
        // Menghitung total priece
        $revenue = Transaction::where('transaction_status','success')->sum('total_price');
        // Menghitung jumlah transaksi
        $transaction = Transaction::count();
        return view('pages.admin.dashboard',[
            'customer' => $customer,
            'revenue' => $revenue,
            'transaction' => $transaction
        ]);
    }
}
