<?php

namespace App\Models;

use App\Models\Dompet;
use App\Models\Kategori;
use App\Models\TransaksiStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
  use HasFactory;

  // mendefinisikan tabel yang digunakan
  protected $table = 'transaksi';

  // mendefinisikan kolom yang dapat diisi
  protected $fillable = [
    'kode',
    'deskripsi',
    'tanggal',
    'nilai',
    'dompet_id',
    'kategori_id',
    'status_id',
  ];

  // mendefinisikan relasi antara tabel
  public function dompet()
  {
    return $this->belongsTo(Dompet::class, 'dompet_id');
  }

  public function kategori()
  {
    return $this->belongsTo(Kategori::class, 'kategori_id');
  }

  public function status()
  {
    return $this->belongsTo(TransaksiStatus::class, 'status_id');
  }
}
