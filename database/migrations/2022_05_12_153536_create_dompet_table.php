<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDompetTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('dompet', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->string('referensi')->nullable();
      $table->string('deskripsi')->nullable();
      $table->foreignId('status_id')->references('id')->on('dompet_status')->constrained();
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
    Schema::dropIfExists('dompet');
  }
}
