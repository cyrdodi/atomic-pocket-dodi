<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
  use HasFactory;

  // mendifinisikan nama table secara spesifik
  protected $table = 'kategori';

  // relationship untuk table kategori_status
  public function status()
  {
    return $this->belongsTo(KategoriStatus::class, 'status_id');
  }
}
