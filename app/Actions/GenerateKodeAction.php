<?php

namespace App\Actions;

use App\Models\Transaksi;

class GenerateKodeAction
{
  /**
   * Handle generate kode transaksi
   * @param  int status_id
   * @return string kode
   */
  public function handle($transaksi_status)
  {
    // menentukan prefix berdasarkan status_id
    $prefix = '';
    if ($transaksi_status == 1) {
      $prefix = 'WIN';
    } else if ($transaksi_status == 2) {
      $prefix = 'WOUT';
    }

    // menghitung jumlah transaksi by status_id yang sudah ada
    $jml = Transaksi::where('status_id', $transaksi_status)->count();

    // menggabungkan prefix dengan jumlah transaksi auto increment
    return $prefix . str_pad($jml + 1, 5, '0', STR_PAD_LEFT);
  }
}
