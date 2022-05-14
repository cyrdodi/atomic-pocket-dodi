<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
  use HasFactory;

  protected $fillable = ['nama', 'deskripsi', 'status_id'];

  // mendifinisikan nama table secara spesifik
  protected $table = 'kategori';

  // relationship untuk table kategori_status
  public function status()
  {
    return $this->belongsTo(KategoriStatus::class, 'status_id');
  }

  // query scope untuk memfilter data berdasarkan status dan mencari data berdasarkan keyword
  public function scopeFilter($query, array $filters)
  {
    // jika status tidak kosong
    if (isset($filters['status'])) {
      // filter berdasarkan status
      $query->where('status_id', $filters['status']);
    }

    // jika search tidak kosong
    if (isset($filters['search'])) {
      // filter berdasarkan keyword
      // wrap query dalam where tersendiri agar kondisi untuk pencarian tidak tercampur dengan filter by status
      $query->where(function ($query) use ($filters) {
        $query->where('nama', 'like', "%{$filters['search']}%")
          ->orWhere('deskripsi', 'like', "%{$filters['search']}%");
      });
    }
  }
}
