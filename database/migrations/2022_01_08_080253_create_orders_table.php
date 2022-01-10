<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->dateTime('tgl_transaksi');
            $table->string('buyer');
            $table->string('nohp');
            $table->text('alamat');
            $table->string('kota');
            $table->integer('total_produk');
            $table->integer('berat');
            $table->integer('subtotal');
            $table->integer('ongkir');
            $table->integer('total');
            $table->string('ekspedisi');
            $table->string('estimasi');
            $table->text('catatan')->nullable();
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->dateTime('tgl_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
