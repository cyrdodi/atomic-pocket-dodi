<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransaksiStatus extends Model
{
  use HasFactory;

  // mendefinisikan nama table secara spesifik
  protected $table = 'transaksi_status';

  // relationship antar table
  public function transaksi()
  {
    return $this->hasMany(Transaksi::class, 'status_id');
  }
}
