<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; // Perhatikan case 'Supplier'
use Illuminate\View\View;

class TransactionController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        $Transaction = new Transaction;
        $Transactions= $Transaction->get_transaction()
                            ->latest()
                            ->paginate(10);
        return view('transaction.index', compact('Transactions')); // Mengirim 'suppliers' bukan 'supplier'
    }
}
