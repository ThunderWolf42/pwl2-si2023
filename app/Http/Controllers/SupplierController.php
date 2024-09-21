<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier; // Perhatikan case 'Supplier'
use Illuminate\View\View;

class SupplierController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        $supplier = new Supplier;
        $suppliers = $supplier->get_supplier()
                            ->latest()
                            ->paginate(10);

        return view('supplier.index', compact('suppliers')); // Mengirim 'suppliers' bukan 'supplier'
    }
}
