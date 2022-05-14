<?php

namespace App\Models;

use App\Models\DompetStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dompet extends Model
{
  use HasFactory;

  protected $fillable = [
    'kode',
    'nama',
    'status_id',
    'referensi',
    'deskripsi'
  ];

  // mendefinisikan nama table secara spesifik
  protected $table = 'dompet';

  // relationship untuk table dompet_status
  public  function status()
  {
    return $this->belongsTo(DompetStatus::class, 'status_id');
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
          ->orWhere('referensi', 'like', "%{$filters['search']}%")
          ->orWhere('deskripsi', 'like', "%{$filters['search']}%");
      });
    }
  }
}
