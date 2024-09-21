<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    protected $table = 'transaksi_penjualan';
    public function get_transaction()
    {
         //get all transaction
        $sql = $this->select("transaksi_penjualan.*", "category_product.product_category_name", "products.Title", "products.price",
              DB::raw("(jumlah_pembelian*price) as total_harga")
        )
            ->join('category_product', 'category_product.id', '=', 'transaksi_penjualan.id_category')
            ->join('products','products.id', '=' ,"transaksi_penjualan.id_product");

        return $sql;
    }
}
