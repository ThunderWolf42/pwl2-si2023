<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->foreignId('product_category_id')->nullable()->index();
            $table->foreignId('id_supplier')->nullable()->index();
            $table->string('image');
            $table->text('description');
            $table->bigInteger('price');
            $table->integer('stock')->default(0);
            $table->timestamps();
        });

        schema::create('category_product', function(Blueprint $table){
            $table->id();
            $table->string('product_category_name');
            $table->timestamps();
        });

        schema::create('suppliers', function(Blueprint $table){
            $table->id();
            $table->string('supplier_name');
            $table->string('pic_supplier');
            $table->string( 'alamat_supplier');
            $table->string('no_hp_pic_supplier');
            $table->timestamps();
        });

        schema::create('transaksi_penjualan', function(Blueprint $table){
            $table->id();
            $table->foreignId('id_product')->nullable()->index();
            $table->integer('jumlah_pembelian');
            $table->string( 'nama_kasir');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
