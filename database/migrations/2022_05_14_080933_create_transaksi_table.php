<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('transaksi', function (Blueprint $table) {
      $table->id();
      $table->string('kode');
      $table->string('deskripsi');
      $table->date('tanggal');
      $table->integer('nilai');
      $table->foreignId('dompet_id')->references('id')->on('dompet')->constrained();
      $table->foreignId('kategori_id')->references('id')->on('kategori')->constrained();
      $table->foreignId('status_id')->references('id')->on('transaksi_status')->constrained();
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
    Schema::dropIfExists('transaksi');
  }
}
